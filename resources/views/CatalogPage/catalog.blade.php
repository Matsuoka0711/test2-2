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

    <div class="productAdd">
      <h1>商品追加</h1>
      <div class="add">
        <label for="">商品画像</label>
        <input type="file" id="img">
      </div>
    
      <div class="add">
        <label for="">商品名</label>
        <input type="text" id="name">
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
        <input type="text" id="maker">
    
      </div>
    
      <div class="add">
        <input id="addBtn" type="submit" value="送信" onclick="addProduct()">
      </div>
    </div>
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
          <td><img src="" alt="画像なし"></td>
          <td>コーラ</td>
          <td>120</td>
          <td>2</td>
          <td>コカコーラ</td>
          <td><input id="delBtn" value="削除" type="submit" onclick="removeProduct()"></td>
        </tr>
      </table>
    </div>
  </main>
</body>
<script src="{{ asset('js/main.js') }}"></script>
</html>