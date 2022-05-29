const animals = document.querySelectorAll('.animal')
const animalSelector = ['lion', 'panda', 'elephant', 'snake'];
const selectedAnimal = animalSelector[Math.floor(Math.random() * 4)];


const playSound = () => {
    const audio = document.getElementById('audio');
    audio.src = `./assets/sounds/${selectedAnimal}.mpeg`
    audio.play();
}

const showImage = () => {
    const image = document.querySelector(`img`);
    image.src = `./assets/img/${selectedAnimal}.png`;
    const desc = document.querySelector(`h1#desc`);
    const perWorld = document.querySelector('div.per-world h1');
    const perSyllable = document.querySelector('div.per-syllable h1');
    switch (selectedAnimal){
        case 'lion':
            desc.innerHTML = 'Singa';
            perWorld.innerHTML = 's i n g a';
            perSyllable.innerHTML = 'Si-nga';
            break
        case 'panda':
            desc.innerHTML = 'Panda';
            perWorld.innerHTML = 'p a n d a';
            perSyllable.innerHTML = 'Pan-da';
            break
        case 'elephant':
            desc.innerHTML = 'Gajah';
            perWorld.innerHTML = 'g a j a h';
            perSyllable.innerHTML = 'Ga-jah';
            break
        case 'snake':
            desc.innerHTML = 'Ular';
            perWorld.innerHTML = 'u l a r';
            perSyllable.innerHTML = 'U-lar';
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
