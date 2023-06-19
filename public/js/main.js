'use strict';


{
  const addBtn = document.getElementById('addBtn');
  addBtn.getEventlistener('click', () => {
    const name = document.getElementById('name').value;
    localStorage.setItem(`${name}Key${count}`, `${name}`);
  });
  
}
