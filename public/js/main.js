' use scrict';
{
  const name = document.getElementById('name').value;
  const price = document.getElementById('price').value;
  const stock = document.getElementById('stock').value;
  const maker = document.getElementById('maker').value;
  const btn = document.getElementById('btn');
  
  function addProduct () {
    //tableの設定(trを追加してid属性を付与「id = "product + 行の番号"」)
    const table = document.getElementById('productTable');
    const tableCount = table.rows.length;
    const productNumber = tableCount;
    
    const tableAdd = document.createElement('tr');
    tableAdd.setAttribute('id', 'product'.tableCount);

    tableAdd.innerHTML = 
    `
    <td>${productNumber}</td>
    <td>${productNumber}</td>
    <td>${name}</td>
    <td>${price}</td>
    <td>${stock}</td>
    <td>${maker}</td>
    <td><input id="btn" value="削除" type="submit"></td>
    `
  
    table.appendChild(tableAdd);

    document.getElementById('name').value = '';
    document.getElementById('price').value = '';
    document.getElementById('stock').value = '';
    document.getElementById('maker').value = '';
  }

  const delBtn = document.getElementById('delBtn');

}
