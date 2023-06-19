<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="{{ route('catalog') }}">商品一覧画面へ</a>

  <div class="productAdd">
      <h1>商品追加</h1>
      <div class="add">
        <label for="">商品画像</label>
        <input type="file" id="img" accept="image/*">
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
        <input id="addBtn" type="button" value="送信">
      </div>
    </div>



  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>