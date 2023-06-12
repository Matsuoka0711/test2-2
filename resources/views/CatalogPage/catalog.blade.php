<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
  <h1>商品管理</h1>
  <a href="">商品の編集</a>
  <a href="">商品の登録</a>

  <h2>商品一覧</h2>
  <table id="productTable">
    <tr>
      <th>id</th>
      <th>商品画像</th>
      <th>商品名</th>
      <th>価格</th>
      <th>在庫数</th>
      <th>メーカー名</th>
      <th>詳細表示</th>
      <th>削除</th>
    </tr>
    <tr>
      <td>1</td>
      <td><img src="" alt="画像なし"></td>
      <td>コーラ</td>
      <td>120</td>
      <td>2</td>
      <td>コカコーラ</td>
      <td>冷えています。3月から値上げ予定です。</td>
      <td><button>削除</button></td>
    </tr>
    <!-- javascriptの追加はここから、 -->
    

    <!-- ここまで。 -->
  </table>

  <h1>商品追加</h1>

  <div class="add">
  <label for="">商品名</label>
  <input type="text" id="productName">
</div>

<div class="add">
  <label for="">価格</label>
  <input type="text" id="price">
</div>

<div class="add">
  <label for="">在庫数</label>
  <input type="number" id="stock">
</div>

<div class="add">
  <label for="">メーカー名</label>
  <select name="example" id="manufacturer">
    <option value="">メーカーA</option>
    <option value="">メーカーB</option>
    <option value="">メーカーC</option>
    <option value="">メーカーD</option>
    <option value="">メーカーE</option>
    <option value="">メーカーF</option>
    <option value="">メーカーG</option>
  </select>
</div>

<div class="add">
  <label for="">詳細表示</label>
  <textarea name="" id="description" cols="30" rows="5"></textarea>
</div>

<div class="add">
  <input type="submit" value="送信" onclick="addProduct()">
</div>

</body>
<script href="{{ asset('/js/main.js') }}"></script>
</html>