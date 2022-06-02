let item;
let wrapper;

function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  item = ev.path[0].className.split(" ")[1];
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  wrapper = ev.target.className.split(" ")[2];
  if (item === wrapper) {
    ev.preventDefault();
    let data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
  }
}
