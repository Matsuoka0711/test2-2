<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>商品追加</title>
  <style>#addTable{display:block;}</style>
</head>
<body>
  <h1>商品追加</h1>
  <a href="<?php echo e(route('catalog')); ?>">商品追加</a>
  <form id="addTable" action="" method="POST" enctype="">

    <label for="id">ID:</label>
    <input id="id" name="id" type="text" placeholder="ID">

    <label for="img">画像:</label>
    <input id="img" name="img" type="file">

    <label for="name">商品名:</label>
    <input id="name" name="name" type="text" placeholder="商品名">

    <label for="price">価格:</label>
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

    <input id="stock" type="text" placeholder="在庫">

    <label for="maker">メーカー:</label>
    <select name="maker" id="maker">
      <option>選択してください</option>
      <option>アサヒ飲料</option>
      <option>伊藤園</option>
      <option>キリン</option>
      <option>コカ・コーラ</option>
      <option>サントリー</option>
    </select>

    <button type="submit">追加</button>
  </form>
</body>
</html>

<?php /**PATH /Applications/MAMP/htdocs/test2/resources/views/CatalogPage/catalogAdd.blade.php ENDPATH**/ ?>