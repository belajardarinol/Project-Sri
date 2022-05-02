const dragElements = document.querySelectorAll('.dragable');
const dropElements = document.querySelectorAll('.dropable');
let dragAlt

dragElements.forEach(e => {
    e.addEventListener("dragstart", (event) => {
        dragAlt = event.target.alt
    })
})

dropElements.forEach(e => {
    e.addEventListener("dragover", (event) => {
        event.preventDefault();
    })
    e.addEventListener("drop",(event) => {
        if(dragAlt === event.target.classList[0]){
            event.target.src = `img/${dragAlt}.png`
        }
    })
})