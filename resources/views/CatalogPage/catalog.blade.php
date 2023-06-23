<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
  <div class="container">
    <header>
      <h1>
        商品管理システム
        <span>
          <a href="{{ route('home') }}">ログアウト</a>
        </span>
      </h1>
      <nav>
        <h2>
          商品一覧画面 
          <span>
            <p>HOME</p>
            <p>　/　</p>
            <a href="{{ route('catalogAdd') }}">商品追加画面</a>
          </span>
        </h2>
      </nav>
    </header>

    <div class="contents">

      @include('catalogPage.catalogAdd') <!-- class="productTable" -->

    </div>
  </div>
  <footer>
    <p>©️2023/06 Merchandise management system</p>
  </footer>

</body>
</html>