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
    <title>Tulis Namamu</title>
    <meta name="description" content="English alphabet keyboard with audio.">
</head>

<body>
    <div class="top-circle"></div>
    <div class="title">Tulis Namamu</div>
    <div class="title output"></div>
    <div class="keyboard">
        <div class="keyboard-row">
            <div class="key-box">
                <div class="key">A</div>
                <div class="key">B</div>
            </div>
            <div class="key-box">
                <div class="key">C</div>
                <div class="key">D</div>
            </div>
            <div class="key-box">
                <div class="key">E</div>
                <div class="key">F</div>
            </div>
            <div class="key-box">
                <div class="key">G</div>
                <div class="key">H</div>
            </div>
            <div class="key-box">
                <div class="key">I</div>
                <div class="key">J</div>
            </div>
        </div>
        <div class="keyboard-row">
            <div class="key-box">
                <div class="key">K</div>
                <div class="key">L</div>
            </div>
            <div class="key-box">
                <div class="key">M</div>
                <div class="key">N</div>
            </div>
            <div class="key-box">
                <div class="key">O</div>
                <div class="key">P</div>
            </div>
            <div class="key-box">
                <div class="key">Q</div>
                <div class="key">R</div>
            </div>
            <div class="key-box">
                <div class="key">S</div>
                <div class="key">T</div>
            </div>
        </div>
        <div class="keyboard-row">
            <div class="key-box">
                <div class="key">U</div>
                <div class="key">V</div>
            </div>
            <div class="key-box">
                <div class="key">W</div>
                <div class="key">X</div>
            </div>
            <div class="key-box">
                <div class="key">Y</div>
                <div class="key">Z</div>
            </div>
        </div>
        <div class="keyboard-row">
            <div class="key-box">
                <div class="key reset">RESET</div>
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