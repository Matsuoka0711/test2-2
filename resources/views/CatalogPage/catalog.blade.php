<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <title>商品一覧ページ</title>
</head>
<body>
  <header>
    <div class="headerLogo">
      <a href="#">Sample Shop</a>
    </div>
    <div class="headerSearch">
      <div class="searchBox">
        <input type="text" placeholder="商品検索">
      </div>
      <i class="bi bi-search"></i>
    </div>
  </header>

  <div class="itemAdd">
    <a href="{{ asset('add/catalogAdd.blade.php') }}">商品登録</a>
  </div>

  <main>
    <div class="ollShopBox">
      <div class="shopA">
        <h2>SHOP A</h2>
        <div class="shopContents">
          <div class="shopBox">
            <div class="shopImage"></div>
            <div class="shopText">
              <h3>商品①</h3>
              <p>¥2,300（税込）<span>在庫　2</span></p>
              <p>メーカー：○○</p>
              <p>詳細ページ</p>
              <button>削除</button>
            </div>
          </div>
          
          <div class="shopBox">
            <div class="shopImage"></div>
            <div class="shopText">
              <h3>商品①</h3>
              <p>¥2,300（税込）<span>在庫　2</span></p>
              <p>メーカー：○○</p>
              <p>詳細ページ</p>
              <button>削除</button>
            </div>
          </div>

          <div class="shopBox">
            <div class="shopImage"></div>
            <div class="shopText">
              <h3>商品①</h3>
              <p>¥2,300（税込）<span>在庫　2</span></p>
              <p>メーカー：○○</p>
              <p>詳細ページ</p>
              <button>削除</button>
            </div>
          </div>

          <div class="shopBox">
            <div class="shopImage"></div>
            <div class="shopText">
              <h3>商品①</h3>
              <p>¥2,300（税込）<span>在庫　2</span></p>
              <p>メーカー：○○</p>
              <p>詳細ページ</p>
              <button>削除</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>


</body>
</html>

