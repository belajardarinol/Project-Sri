<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="./assets/images/dijitalveysel-favicon.png">
    <script src="main.js" type="module" defer></script>
    <title>Indonesia Alphabet Keyboard</title>
    <meta name="description" content="English alphabet keyboard with audio.">
</head>

<body>
    <div class="top-circle"></div>
    <div class="title">Indoinesia Alphabet With Keyboard</div>
    <div class="title output"></div>
    <div class="keyboard">
        <div class="keyboard-row">
            <div class="key-box">
                <div class="key" data-word='A'><kbd>A</kbd></div>
                <div class="key" data-word='B'><kbd>B</kbd></div>
            </div>
            <div class="key-box">
                <div class="key" data-word='c'><kbd>C</kbd></div>
                <div class="key" data-word='D'><kbd>D</kbd></div>
            </div>
            <div class="key-box">
                <div class="key" data-word='E'><kbd>E</kbd></div>
                <div class="key" data-word='F'><kbd>F</kbd></div>
            </div>
            <div class="key-box">
                <div class="key" data-word='G'><kbd>G</kbd></div>
                <div class="key" data-word='H'><kbd>H</kbd></div>
            </div>
            <div class="key-box">
                <div class="key" data-word='I'><kbd>I</kbd></div>
                <div class="key" data-word='J'><kbd>J</kbd></div>
            </div>
        </div>
        <div class="keyboard-row">
            <div class="key-box">
                <div class="key" data-word='K'><kbd>K</kbd></div>
                <div class="key" data-word='L'><kbd>L</kbd></div>
            </div>
            <div class="key-box">
                <div class="key" data-word='M'><kbd>M</kbd></div>
                <div class="key" data-word='N'><kbd>N</kbd></div>
            </div>
            <div class="key-box">
                <div class="key" data-word='O'><kbd>O</kbd></div>
                <div class="key" data-word='P'><kbd>P</kbd></div>
            </div>
            <div class="key-box">
                <div class="key" data-word='Q'><kbd>Q</kbd></div>
                <div class="key" data-word='R'><kbd>R</kbd></div>
            </div>
            <div class="key-box">
                <div class="key" data-word='S'><kbd>S</kbd></div>
                <div class="key" data-word='T'><kbd>T</kbd></div>
            </div>
        </div>
        <div class="keyboard-row">
            <div class="key-box">
                <div class="key" data-word='U'><kbd>U</kbd></div>
                <div class="key" data-word='V'><kbd>V</kbd></div>
            </div>
            <div class="key-box">
                <div class="key" data-word='W'><kbd>W</kbd></div>
                <div class="key" data-word='X'><kbd>X</kbd></div>
            </div>
            <div class="key-box">
                <div class="key" data-word='Y'><kbd>Y</kbd></div>
                <div class="key" data-word='Z'><kbd>Z</kbd></div>
            </div>
        </div>
    </div>
    <div class="logo"><a
            href="https://veysel.co?utm_source=open_source_project&utm_medium=logo&utm_campaign=english_alphabet"
            target="_blank"><img src="./assets/images/dijitalveysel-logo.svg" alt="Veysel Demirel" width="250"
                draggable="false"></a></div>
    <div class="bottom-circle"></div>
    <div id="audios"></div>
</body>

</html>