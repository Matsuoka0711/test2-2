<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    public function getList() {
        // productsテーブルからデータを取得
        $products = DB::table('products')->get();

        return $products;
    }

    public function registProduct($data) {
        // 登録処理
        DB::table('products')->insert([
            'id' => $data->id,
            'name' => $data->name,
            'price' => $data->price,
            'stock' => $data->stock,
            'maker' => $data->maker,
            'comment' => $data->comment,
        ]);
    }


}
