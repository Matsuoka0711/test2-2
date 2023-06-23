'use strict';

{
  const table = document.getElementById('productTable');
  const addBtn = document.getElementById('addBtn');
  
  // 追加
  addBtn.addEventListener('click', function() {

    const id = document.getElementById('id').value;
    const img = document.getElementById('img').value;
    const name = document.getElementById('name').value;
    const price = document.getElementById('price').value;
    const stock = document.getElementById('stock').value;
    const maker = document.getElementById('maker').value;
    const comment = document.getElementById('comment').value;

    const addTableTr = document.createElement('tr');
    let tableCount = table.getElementsByTagName('tr').length;
    addTableTr.setAttribute('id',`tableTr${tableCount}`);
    
    localStorage.setItem(`idCount${tableCount}`, id);
    localStorage.setItem(`imgCount${tableCount}`, img);
    localStorage.setItem(`nameCount${tableCount}`, name);
    localStorage.setItem(`priceCount${tableCount}`, price);
    localStorage.setItem(`stockCount${tableCount}`, stock);
    localStorage.setItem(`makerCount${tableCount}`, maker);
    localStorage.setItem(`commentCount${tableCount}`, comment);


    addTableTr.innerHTML = `
    <td>${id}</td>
    <td>${img}</td>
    <td>${name}</td>
    <td>${price}</td>
    <td>${stock}</td>
    <td>${maker}</td>
    <td>${comment}</td>
    <button id="delBtn${tableCount}">削除</button>
    `;
    table.appendChild(addTableTr);
    document.getElementById('id').value = "";
    document.getElementById('img').value = "";
    document.getElementById('name').value = "";
    document.getElementById('price').value = "";
    document.getElementById('stock').value = "";
    document.getElementById('maker').value = "";
    document.getElementById('comment').value = "";
    alert('追加しました');
    
    // 削除
    const delBtn = document.getElementById(`delBtn${tableCount}`);
    delBtn.addEventListener('click', function() {
      const delTableTr = document.getElementById(`tableTr${tableCount}`);
      localStorage.removeItem(`idCount${tableCount}`);
      localStorage.removeItem(`imgCount${tableCount}`);
      localStorage.removeItem(`nameCount${tableCount}`);
      localStorage.removeItem(`priceCount${tableCount}`);
      localStorage.removeItem(`stockCount${tableCount}`);
      localStorage.removeItem(`makerCount${tableCount}`);
      localStorage.removeItem(`commentCount${tableCount}`);
      delTableTr.remove();
    });
    
  });
  
  window.addEventListener('load', function() {
    for(let i = 1; i <= localStorage.length / 7; i ++){
      const lodeTableTr = document.createElement('tr');
      lodeTableTr.setAttribute('id',`lodeTableTr${i}`);

      const savedId = localStorage.getItem(`idCount${i}`);
      const savedImg = localStorage.getItem(`imgCount${i}`);
      const savedName = localStorage.getItem(`nameCount${i}`);
      const savedPrice = localStorage.getItem(`priceCount${i}`);
      const savedStock = localStorage.getItem(`stockCount${i}`);
      const savedMaker = localStorage.getItem(`makerCount${i}`);
      const savedCommet = localStorage.getItem(`commentCount${i}`);
      
      lodeTableTr.innerHTML = `
      <td>${savedId}</td>
      <td>${savedImg}</td>
      <td>${savedName}</td>
      <td>${savedPrice}</td>
      <td>${savedStock}</td>
      <td>${savedMaker}</td>
      <td>${savedCommet}</td>
      <button id="delBtn${i}">削除</button>
      `;
      
      table.appendChild(lodeTableTr);

      const lodeDelBtn = document.getElementById(`delBtn${i}`);
      lodeDelBtn.addEventListener('click', function() {
        const lodeDelTableTr = document.getElementById(`lodeTableTr${i}`);
        lodeDelTableTr.remove();
        localStorage.removeItem(`idCount${i}`);
        localStorage.removeItem(`imgCount${i}`);
        localStorage.removeItem(`nameCount${i}`);
        localStorage.removeItem(`priceCount${i}`);
        localStorage.removeItem(`stockCount${i}`);
        localStorage.removeItem(`makerCount${i}`);
        localStorage.removeItem(`commentCount${i}`);

      });
    }
  });
  

}