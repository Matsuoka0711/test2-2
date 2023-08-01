<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function showList() 
    {
        // インスタンス生成
        $model = new Product();
        $products = $model->getList();

        return view('page.list', ['products' => $products]);
    }

    public function showRegistForm() 
    {
        return view('page.regist');
    }

    public function registSubmit(ProductRequest $request) 
    {

        // トランザクション開始
        DB::beginTransaction();
    
        try {
            // 登録処理呼び出し
            $model = new Product();
            $model->registProduct($request);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return back();
        }
    
        // 処理が完了したらregistにリダイレクト
        return redirect(route('regist'));
    }

    public function show($id) 
    {
        $product = Product::find($id);
        
        
        return view('page.show', [
            'product' => $product,
        ]);
    }

    public function showUpdate($id)
    {
        $product = Product::find($id);

        return view('page.update',[
            'product' => $product,
        ]);
    }

    
public function update($id)
{

    $request->validate([
        '_token' => 'required|csrf',
    ]);


    $product = Product::find($id);
    $product->name = request('name');
    $product->price = request('price');
    $product->stock = request('stock');
    $product->maker = request('maker');
    $product->comment = request('comment');

    $product->save();
    return redirect()->route('product.show', $product->id)->with('success', '商品を更新しました。');
}


}
