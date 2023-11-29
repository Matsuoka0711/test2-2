<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>練習</title>
  <style>td img{width:100px;height: auto;}</style>
</head>
<body>
  <div class="searchBox">

    <input type="search" name="search" id="keyWord" placeholder="検索キーワード">
    <select name="example" required>
      <option>選択してください</option>

    </select>
    <button type="button">検索</button>
    
  </div>
  <a href="<?php echo e(route('catalogAdd')); ?>">追加画面へ</a>
  <table id="addTable">
    <tr>
      <th>ID</th>
      <th>商品画像</th>
      <th>商品名</th>
      <th>価格</th>
      <th>在庫</th>
      <th>メーカー</th>
      <th>詳細</th>
      <th>削除</th>
    </tr>
  </table>
  <script src="main.js"></script>
</body>
</html><?php /**PATH /Applications/MAMP/htdocs/test2/resources/views/CatalogPage/catalog.blade.php ENDPATH**/ ?>