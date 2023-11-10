<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Company;

class Product extends Model
{
    // companiesテーブルとの関連付け(リレーション)
    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
    
    
    public function getList() {
        $products = DB::table('products')->get();
        $companies = DB::table('companies')->get();
    
        return [
            'products' => $products,
            'companies' => $companies,
        ];
    }

    protected $fillable = [
        'name',
        'price',
        'stock',
        'comment',
        'img_path',
        'company_id',
    ];
    
    // 登録処理
    public function registProduct($data, $file_name)
    {        
        if($file_name === null){
            // $file_nameに値が入っていなかったらimg_pathは空白で登録
            DB::table('products')->insert([
                'id' => $data->id,
                'name' => $data->name,
                'price' => $data->price,
                'stock' => $data->stock,
                'company_id' => $data->company_id,
                'comment' => $data->comment,
                'img_path' => '',
            ]);
        } else {
            // $file_nameに値が入っていたらその値をimg_pathに使用
            DB::table('products')->insert([
                'id' => $data->id,
                'name' => $data->name,
                'price' => $data->price,
                'stock' => $data->stock,
                'company_id' => $data->company_id,
                'comment' => $data->comment,
                'img_path' => 'storage/sample/' . $file_name,
            ]);
        }

    }

    // 削除処理
    public function deleteProductById($id)
    {
        return $this->destroy($id);
    }

    public static function now()
    {
        return Carbon::now();
    }


}



