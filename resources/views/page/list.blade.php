@extends('layouts.app')
@section('title', '投稿画面')

@section('content')
<div class="container">
  <a class="btn btn-primary mb-3" href="{{ route('regist') }}" role="button">登録画面へ</a>
  <div class="row">
    <table class="table table-striped text-center table-bordered">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">商品名</th>
          <th scope="col">商品画像</th>
          <th scope="col">商品価格</th>
          <th scope="col">在庫</th>
          <th scope="col">メーカー</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody >
        @foreach ($products as $product)
          <tr>
            <td class="align-middle table-striped">{{ $product->id }}</td>
            <td class="align-middle table-striped">{{ $product->name }}</td>
            <td class="align-middle table-striped">商品画像</td>
            <td class="align-middle table-striped">¥{{ $product->price }}</td>
            <td class="align-middle table-striped">{{ $product->stock }}</td>
            <td class="align-middle table-striped">{{ $product->maker }}</td>
            <td class="table-striped"><a href="{{ route('product.show', $product->id) }}" class="btn btn-warning">詳細</a></td>

            <td class="table-striped"><button type="submit" class="btn btn-danger">削除</button></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection