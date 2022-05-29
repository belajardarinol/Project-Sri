const animals = document.querySelectorAll('.animal')
const animalSelector = ['dog', 'cow', 'cat', 'goat'];
const selectedAnimal = animalSelector[Math.floor(Math.random() * 5)];

const playSound = () => {
    const audio = document.getElementById('audio');
    audio.src = `./assets/sounds/${selectedAnimal}.mpeg`
    audio.play();
}

const showImage = () => {
    const image = document.querySelector(`img`);
    image.src = `./assets/img/${selectedAnimal}.png`;
    const desc = document.querySelector(`h1#desc`);
    switch (selectedAnimal){
        case 'goat':
            desc.innerHTML = 'Kambing';
            break
        case 'dog':
            desc.innerHTML = 'Anjing';
            break
        case 'cow':
            desc.innerHTML = 'Sapi';
            break
        case 'cat':
            desc.innerHTML = 'Kucing';
            break
        default:
            desc.innerHTML = ''
    }
}

animals.forEach(e => {
    e.addEventListener('click', () => {
        if(e.id == selectedAnimal){
            showImage()
        }
    });
});
