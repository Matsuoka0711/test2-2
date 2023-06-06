<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        // ここに商品一覧ページの表示ロジックを記述します
        return view('CatalogPage.index');
    }
}

