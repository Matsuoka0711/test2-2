<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
  <main>
   <nav>
    <a href="{{ route('catalogAdd') }}">商品追加画面</a>
   </nav>
    <div class="productList">
      <h1>商品一覧</h1>
      <table id="productTable">
        <tr>
          <th>id</th>
          <th>商品画像</th>
          <th>商品名</th>
          <th>価格</th>
          <th>在庫数</th>
          <th>メーカー名</th>
          <th>削除</th>
        </tr>
        <tr>
          <td>1</td>
          <td><img id="productImage" src="" alt="画像がありません。"></td>
          <td>コーラ</td>
          <td>120</td>
          <td>2</td>
          <td>コカコーラ</td>
          <td><button id="delBtn" type="button">削除</button></td>
        </tr>
      </table>
    </div>
  </main>
  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>