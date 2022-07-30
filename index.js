const listBtn = document.getElementById("list-btn");
const inputValue = document.getElementById("list-value");
const form = document.getElementById("list-form");
const listContainer = document.getElementById("list-container");
let listArr = [];

listBtn.addEventListener('click', (e) => {
    e.preventDefault();
    listArr.push(inputValue.value);
    console.log(listArr)
    const list = document.createElement("li");
    listArr.forEach(item => {
        return list.innerText = item;
    });
    listContainer.appendChild(list)
    inputValue.value = '';

})