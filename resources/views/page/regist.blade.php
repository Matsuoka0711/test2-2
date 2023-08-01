@extends('layouts.app')

@section('title', '投稿画面')

@section('content')
    <div class="container">
        <a class="btn btn-primary mb-3" href="{{ route('list') }}" role="button">一覧画面へ</a>
        <div class="row">
            <form action="{{ route('submit') }}" method="post">
                @csrf

                <div class="from-group mb-4">
                    <label for="">ID</label>
                    <input type="text" class="form-control" id="id" name="id" placeholder="IDを入力">
                </div>

                <div class="from-group mb-4">
                    <label for="">商品名</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="商品名を入力">
                </div>

                <div class="from-group mb-4">
                    <label for="">価格</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="価格を入力">
                </div>

                <div class="from-group mb-4">
                    <label for="">在庫</label>
                    <input type="number" class="form-control" id="stock" name="stock" placeholder="在庫を入力">
                </div>

                <div class="from-group mb-4">
                    <label for="">メーカー名</label>
                    <input type="text" class="form-control" id="maker" name="maker" placeholder="メーカー名を入力">
                </div>

                <div class="from-group mb-4">
                    <label for="">コメント</label>
                    <input type="text" class="form-control" id="comment" name="comment" placeholder="コメントを入力">
                </div>

                <button type="submit" class="btn btn-secondary">送信</button>
            </form>
        </div>
    </div>
@endsection