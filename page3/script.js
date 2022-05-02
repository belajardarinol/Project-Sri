const playSound = () => {
    const audio = document.getElementById('audio');
    audio.play();
}

const showImage = () => {
    const image = document.getElementById('img');
    const desc = document.getElementById('desc');

    image.classList.remove('visually-hidden')
    desc.classList.remove('visually-hidden')
}