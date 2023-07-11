<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Product モデルをインポート

class ProductController extends Controller
{
    public function store(Request $request)
    {
        // フォームからのデータを取得します
        $id = $request->input('id');
        $img = $request->file('img');
        $name = $request->input('name');
        $price = $request->input('price');
        $stock = $request->input('stock');
        $maker = $request->input('maker');

        // 取得したデータをデータベースに保存するなどの処理を行います

        // 商品を作成してデータベースに保存する例
        $product = new Product;
        $product->id = $id;
        $product->img = $img;
        $product->name = $name;
        $product->price = $price;
        $product->stock = $stock;
        $product->maker = $maker;
        $product->save();

        // 成功時のリダイレクトやメッセージ表示などの処理を追加します

        return redirect()->route('catalog')->with('success', '商品が追加されました');
    }
}
