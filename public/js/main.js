function addProduct() {
  // 入力値の取得
  var productName = document.getElementById('productName').value;
  var price = document.getElementById('price').value;
  var stock = document.getElementById('stock').value;
  var manufacturer = document.getElementById('manufacturer').value;
  var description = document.getElementById('description').value;

  // 商品IDの生成（既存の行数+1）
  var table = document.getElementById('productTable');
  var rowCount = table.rows.length;
  var productId = rowCount;

  // 新しい行の作成
  var newRow = document.createElement('tr');
  newRow.setAttribute('id', 'product' + productId);

  // 新しい行のHTMLコード
  newRow.innerHTML = `
    <td>${productId}</td>
    <td><img src="" alt="画像なし"></td>
    <td>${productName}</td>
    <td>${price}</td>
    <td>${stock}</td>
    <td>${manufacturer}</td>
    <td>${description}</td>
    <td><button onclick="deleteProduct(${productId})">削除</button></td>
  `;

  // 新しい行をテーブルに追加
  table.appendChild(newRow);

  // 入力値のリセット
  document.getElementById('productName').value = '';
  document.getElementById('price').value = '';
  document.getElementById('stock').value = '';
  document.getElementById('manufacturer').value = '';
  document.getElementById('description').value = '';
}
