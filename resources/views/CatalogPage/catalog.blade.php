<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
  <a href="{{ route('catalogAdd') }}">商品追加画面</a>
  <div class="container">
      <div class="Contact">
        <h2>CONTACT</h2>
        <form action="">
          <dl>
            <dt>
              <label for="">id</label>
            </dt>
            <dd>
              <input placeholder="数字を入力" id="id" type="text">
            </dd>
            <dt>
              <label for="">NAME</label>
            </dt>
            <dd>
              <input placeholder="名前" id="name" type="text">
            </dd>
            <dt>
              <label for="">E-MAIL</label> 
            </dt>
            <dd>
              <input placeholder="メールアドレス" id="mail" type="text">
            </dd>
            <dt>
              <label for="">MESSAGE</label>
            </dt>
            <dd>
              <textarea placeholder="説明文を入力" id="message" name="" id="" ></textarea>
            </dd>
          </dl>

          <button id="addBtn" type="button">送信</button>
        </form>
        <table id="productTable">
          <tr>
            <th>ID</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>メッセージ</th>
            <th>削除</th>
          </tr>
        </table>
      </div>
    </div>

    <footer>
      © 2020 My Work
    </footer>
  </div>
  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>