let item;
let wrapper;

function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  item = ev.target.className.split(" ")[0];
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  wrapper = ev.target.className.split(" ")[0];

  if (item === wrapper) {
    ev.preventDefault();
    let data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
  }
}
