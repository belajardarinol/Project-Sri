let x1
let y1
let x2
let y2

const checkboxSatu = document.querySelectorAll('.satu');
const checkboxDua = document.querySelectorAll('.dua');
const canvas = document.querySelector('#canvas');

checkboxSatu.forEach( e => e.addEventListener('click', () => {
    let cordinat = getOffet(e);
    x1 = 0;
    y1 = cordinat.top;

   

}))

checkboxDua.forEach(e => e.addEventListener('click', () => {
    let cordinat = getOffet(e);
    x2 = cordinat.left;
    y2 = cordinat.top;


    console.log(canvas.getContext)

    if (!canvas.getContext) {
        return;
    }
    const ctx = canvas.getContext('2d');

    
    ctx.strokeStyle = 'red';
    ctx.lineWidth = 5;


    ctx.beginPath();
    ctx.moveTo(x1, y1);
    ctx.lineTo(x2, y2);
    ctx.stroke();
}))

function getOffet(el){
    const rect = el.getBoundingClientRect();
    return {
    left: rect.left + window.scrollX,
    top: rect.top + window.scrollY
    };
}





