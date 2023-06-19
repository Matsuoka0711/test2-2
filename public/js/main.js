'use strict';

// {
//   const addBtn = document.getElementById('addBtn');
//   addBtn.addEventListener('click', function() {
//     console.log('hello');
  
//     // データを保存する
//     localStorage.setItem('message', 'hello');
//   });

//   window.addEventListener('load', function() {
//     // 保存されたデータを取得する
//     const savedMessage = localStorage.getItem('message');
//     if (savedMessage) {
//       console.log(savedMessage);
//     }
//   });
  
// }


  {
    const addBtn = document.getElementById('addBtn');
    const table = document.getElementById('productTable');
    let count = 1;

    addBtn.addEventListener('click', function() {
      const img = document.getElementById('img').value;
      const name = document.getElementById('name').value;
      const price = document.getElementById('price').value;
      const stock = document.getElementById('stock').value;
      const maker = document.getElementById('maker').value;
      count = count + 1;

      const addTr = document.createElement('tr');
      addTr.setAttribute('id', 'tableCount' + count);
      
      if(img.trim() === '' || name.trim() === '' || price.trim() === '' || stock.trim() === '' || maker.trim() === ''){
        alert('入力できていません')
      }else {
        addTr.innerHTML = 
        `
        <td>${count}</td>
        <td>${img}</td>
        <td>${name}</td>
        <td>${price}</td>
        <td>${stock}</td>
        <td>${maker}</td>
        <td><button id="delBtn${count}" type="button">削除</button></td>
        `;
        productTable.appendChild(addTr);

        const delBtn = document.getElementById(`delBtn${count}`);
        delBtn.addEventListener('click', function() {

          const result = window.confirm(`${name}を削除してもよろしいですか？`);

          if(result){
            const tableId = delBtn.parentNode.parentNode.id;
            const removeTable = document.getElementById(tableId);
            removeTable.remove();
          }else{
            alert('キャンセルしました')
          }
        });
      }
    });
  }