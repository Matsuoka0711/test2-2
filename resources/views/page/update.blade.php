@extends('layouts.app')

@section('content')
<div class="container">
<a class="btn btn-primary mb-3" href="{{ route('list') }}" role="button">一覧画面へ</a>

<form action="{{ route('product.update', $product->id) }}" method="put">
  @csrf

  <table class="table table-striped text-center table-bordered">
      <tr>
          <th class="p-3 align-middle w-25">ID</th>
          <td class="p-3 text-sm-start"><input type="text" name="id" id="id" value="{{ $product->id }}" class="form-control"></td>
      </tr>
      <tr>
          <th class="p-3 align-middle">商品名</th>
          <td class="p-3 text-sm-start"><input type="text" name="name" id="name" value="{{ $product->name }}" class="form-control"></td>
      </tr>
      <tr>
          <th class="p-3 align-middle">商品価格</th>
          <td class="p-3 text-sm-start"><input type="text" name="price" id="price" value="{{ $product->price }}" class="form-control"></td>
      </tr>
      <tr>
          <th class="p-3 align-middle">在庫数</th>
          <td class="p-3 text-sm-start"><input type="text" name="stock" id="stock" value="{{ $product->stock }}" class="form-control"></td>
      </tr>
      <tr>
          <th class="p-3 align-middle">メーカー名</th>
          <td class="p-3 text-sm-start"><input type="text" name="maker" id="maker" value="{{ $product->maker }}" class="form-control"></td>
      </tr>
      <tr>
          <th class="p-3 align-middle">コメント</th>
          <td class="p-3 text-sm-start"><input type="text" name="comment" id="comment" value="{{ $product->comment }}" class="form-control"></td>
      </tr>
  </table>
  <input type="submit" value="更新" class="btn btn-primary">
</form>
@endsection