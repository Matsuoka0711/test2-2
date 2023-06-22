'use strict';

{
  const table = document.getElementById('productTable');
  const addBtn = document.getElementById('addBtn');
  
  // 追加
  addBtn.addEventListener('click', function() {
    const id = document.getElementById('id').value;
    const name = document.getElementById('name').value;
    const mail = document.getElementById('mail').value;
    const message = document.getElementById('message').value;

    const addTableTr = document.createElement('tr');
    let tableCount = table.getElementsByTagName('tr').length;
    addTableTr.setAttribute('id',`tableTr${tableCount}`);
    
    localStorage.setItem(`idCount${tableCount}`, id);
    localStorage.setItem(`nameCount${tableCount}`, name);
    localStorage.setItem(`mailCount${tableCount}`, mail);
    localStorage.setItem(`messageCount${tableCount}`, message);

    addTableTr.innerHTML = `
    <td>${id}</td>
    <td>${name}</td>
    <td>${mail}</td>
    <td>${message}</td>
    <button id="delBtn${tableCount}">削除</button>
    `;
    table.appendChild(addTableTr);
    document.getElementById('id').value = "";
    document.getElementById('name').value = "";
    document.getElementById('mail').value = "";
    document.getElementById('message').value = "";
    
    // 削除
    const delBtn = document.getElementById(`delBtn${tableCount}`);
    delBtn.addEventListener('click', function() {
      const delTableTr = document.getElementById(`tableTr${tableCount}`);
      localStorage.removeItem(`idCout${tableCount}`)
      localStorage.removeItem(`nameCout${tableCount}`)
      localStorage.removeItem(`mailCout${tableCount}`)
      localStorage.removeItem(`messageCout${tableCount}`)
      delTableTr.remove();
    });
    
  });
  
  window.addEventListener('load', function() {

    for(let i = 1; i <= localStorage.length / 4; i ++){
      const lodeTableTr = document.createElement('tr');
      lodeTableTr.setAttribute('id',`lodeTableTr${i}`);

      const savedId = localStorage.getItem(`idCount${i}`);
      const savedName = localStorage.getItem(`nameCount${i}`);
      const savedMail = localStorage.getItem(`mailCount${i}`);
      const savedMessage = localStorage.getItem(`messageCount${i}`);
      
      lodeTableTr.innerHTML = `
      <td>${savedId}</td>
      <td>${savedName}</td>
      <td>${savedMail}</td>
      <td>${savedMessage}</td>
      <button id="delBtn${i}">削除</button>
      `;
      
      table.appendChild(lodeTableTr);

      const lodeDelBtn = document.getElementById(`delBtn${i}`);
      lodeDelBtn.addEventListener('click', function() {
        const lodeDelTableTr = document.getElementById(`lodeTableTr${i}`);
        lodeDelTableTr.remove();

      });
    }
  });
  

}