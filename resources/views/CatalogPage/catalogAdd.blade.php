<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>練習</title>
  <style>
    #result{width:300px;height:auto;}
  </style>
</head>
<body>
  <a href="{{ route('catalog') }}">一覧画面へ</a>
  <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input id="id" name="id" type="text" placeholder="ID">
    <input id="img" name="img" type="file">
    <input id="name" name="name" type="text" placeholder="商品名">

    <select name="price" id="price">
        <option>価格</option>
        <option>¥100</option>
        <option>¥110</option>
        <option>¥120</option>
        <option>¥130</option>
        <option>¥140</option>
        <option>¥150</option>
        <option>¥160</option>
        <option>¥170</option>
    </select>

    <select name="stock" id="stock">
        <option>在庫</option>
        <option>１本</option>
        <option>２本</option>
        <option>３本</option>
        <option>４本</option>
        <option>５本</option>
        <option>６本</option>
        <option>７本</option>
        <option>８本</option>
        <option>９本</option>
        <option>１０本</option>
        <option>１１本</option>
        <option>１２本</option>
        <option>１３本</option>
        <option>１４本</option>
        <option>１５本以上</option>
    </select>
    
    <select name="maker" id="maker">
        <option>選択してください</option>
        <option>アサヒ飲料</option>
        <option>伊藤園</option>
        <option>キリン</option>
        <option>コカ・コーラ</option>
        <option>サントリー</option>
    </select>
    
    <button type="submit">送信</button>
</form>

  <script src="add.js"></script>
</body>
</html>