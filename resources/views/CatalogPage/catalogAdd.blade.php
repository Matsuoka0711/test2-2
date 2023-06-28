<!DOCTYPE html>
<html lang="ja">
<head>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/styleAdd.css') }}">
</head>
<body>
  <div class="containerAdd">
    <header>
      <h1>商品管理システム<span><a href="{{ route('home') }}">ログアウト</a></span></h1>
      <nav>
        <h2>
          商品一覧画面
          <span>
            <a class="catalogBtn" href="{{ route('catalog') }}">HOME</a>
            <p>　/　</p>
            <p>商品登録画面</p>
          </span>
        </h2>
      </nav>
    </header>
    <div class="contents">
      <form class="tableForm">
        <input placeholder="ID(数字)" id="id" type="text">
        <input placeholder="商品画像" id="img" type="file">
        <input placeholder="名前" id="name" type="text">
        <input placeholder="価格" id="price" type="text">
        <input placeholder="在庫" id="stock" type="number">
        <input placeholder="メーカー" id="maker" type="text">
        <textarea placeholder="コメント入力" id="comment"></textarea>
        <button id="addBtn" type="button">送信</button>
      </form>
      <!-- <img src="" width="100px" height="100px" id="inputImg" alt="画像が選ばれていません"> -->
      <!-- ↓使わない↓ -->
      <table id="productTable" 
      @if(Request::route()->getName() !== 'catalogAdd') style="display: table;" @else style="display: none;" @endif>
        <tr>
          <th>ID</th>
          <th>商品画像</th>
          <th>商品名</th>
          <th>価格</th>
          <th>在庫</th>
          <th>メーカ名</th>
          <th>コメント</th>
          <th>削除</th>
        </tr>
      </table>
      <!-- ↑使わない↑ -->
  
    </div>
    <footer>
      <p>©️2023/06 Merchandise management system</p>
    </footer>
  </div>
  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>