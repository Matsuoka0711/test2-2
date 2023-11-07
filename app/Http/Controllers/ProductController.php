<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Company;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;
use Carbon\Carbon;

class ProductController extends Controller
{
    // regist(view)へ推移
    public function showRegistForm() 
    {
        $companies = Company::all();

        return view('page.regist', [
            'companies' => $companies,
        ]);
    }

    // list(view)へ推移
    public function showList() {
        $products = Product::with('company')->paginate(4);

        return view('page.list', [
            'products' => $products,
        ]);
    }

    // show(view)へ推移
    public function show($id) 
    {
        $product = Product::find($id);
        
        return view('page.show', [
            'product' => $product,
        ]);
    }

    // update(view)へ推移
    public function showUpdate($id)
    {
        $product = Product::find($id);
        $products = Product::with('company');
        $companies = Company::all();

        return view('page.update',[
            'product' => $product,
            'products' => $products,
            'companies' => $companies,
        ]);
    }

    // 登録処理 + 画像保存
    public function registSubmit(ProductRequest $request) 
    {
        DB::beginTransaction();
        
        $product = new Product();
        
        if($request->img_path !== null){
            // 値が入っていた場合$file_nameに取得した画像の名前を代入
            $file_name = $request->file('img_path')->getClientOriginalName();
            
            $request->file('img_path')->storeAs('public/sample', $file_name);
            $product->img_path = 'storage/sample/' . $file_name;
            $request->merge(['img_path' => 'storage/sample/' . $file_name]);
        }else{
            // 値がnullの場合$file_nameはnullのまま処理を進める
            $file_name = null;
        }
        
        $product->registProduct($request, $file_name);
        
        DB::commit();
        
        return redirect()->route('regist')->with('massage', '登録しました');
    }
    
    // 更新処理
    public function productUpdate(Request $request, $id)
    {   
        $product = Product::findOrFail($id);

        // 変更後の画像を保存
        if($request->file('img_path') !== null){
            // 値が入っていた場合$file_nameに取得した画像の名前を代入して保存
            $file_name = $request->file('img_path')->getClientOriginalName();
            $request->file('img_path')->storeAs('public/sample', $file_name);
        }else{
            // 画像が選択されていなかったら$file_nameをnullで登録
            $file_name = null;
        }

        // 変更前の画像を消去
        \Illuminate\Support\Facades\File::delete($product->img_path);
        
        if($file_name !== null){
            // $file_nameに値が入っていたらその値をimg_pathに使用
            $product->img_path = 'storage/sample/' . $file_name;
        }else{
            // $file_nameに値が入っていなかったらimg_pathは空白で登録
            $product->img_path = '';
        }
        // その他変更事項を取得
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        $product->company_id = $request->input('company_id');
        $product->comment = $request->input('comment');
        $product->updated_at = Carbon::now();

        // 更新実行
        $product->save();
    
        return view('page/show', compact('product'));
    }

    // 削除処理
    public function productDestroy($id)
    {
        $product = Product::find($id);
    
        $product->delete();
    
        $products = $product->getList();
        $product = $product;

        // 画像を削除
        \Illuminate\Support\Facades\File::delete($product->img_path);
    
        return redirect()->route('list');
    }
    
    // 検索処理
    public function searchPost(Request $request) 
    {
        // 検索処理を終わらせたらgitに出して提出
        if (isset($request->search)) {
            $products = Product::
                where("name", "LIKE", "%$request->search%")
                ->paginate(4);
            }
        else {
            $products = Product::paginate(4);
        }

        return view('page.list', [
            'products' => $products,
            'search' => $request->search,
        ]);
    }
}