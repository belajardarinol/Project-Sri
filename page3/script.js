const animals = document.querySelectorAll('.animal')
const animalSelector = ['dog', 'cow', 'cat', 'goat'];
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
        case 'goat':
            desc.innerHTML = 'Kambing';
            perWorld.innerHTML = 'k a m b i n g';
            perSyllable.innerHTML = 'Kam-bing';
            break
        case 'dog':
            desc.innerHTML = 'Anjing';
            perWorld.innerHTML = 'a n j i  n g';
            perSyllable.innerHTML = 'An-jing';
            break
        case 'cow':
            desc.innerHTML = 'Sapi';
            perWorld.innerHTML = 's a p i';
            perSyllable.innerHTML = 'Sa-pi';
            break
        case 'cat':
            desc.innerHTML = 'Kucing';
            perWorld.innerHTML = 'k u c i n g';
            perSyllable.innerHTML = 'Ku-cing';
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
