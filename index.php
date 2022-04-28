<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Project SRI - EduGame for Kids</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://sarasoueidan.com/demos/windows8-animations/css/demo-styles.css'><link rel="stylesheet" href="./style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="demo-wrapper container">
<!-- classnames for the pages should include: 1) type of page 2) page name-->
  <div class="s-page random-restored-page">
    <div class="page-content">
    <h2 class="page-title">Some minimized App</h2>
    </div>
    <div class="close-button s-close-button">x</div>   
  </div>
  <div class="s-page custom-page">
    <div class="page-content">
    <h2 class="page-title">Thank You!</h2>
    </div>
    <div class="close-button s-close-button">x</div>
  </div>
  <div class="r-page random-r-page">
    <div class="page-content">
    <h2 class="page-title">Tentang Game ini</h2>
      <p>Game edukasi ini bertujuan untuk melatih otak motorik anak dan mengenalkannya dengan kempampuan berbahasa dasar.</p>
      <p>Game ini cocok untuk anak anak antara umur 3 sampai 6 tahun.</p>
      <p>Perlu pendampingan dari wali untuk bisa mengenalkan game ini ke anak anak dengan sempurna.</p>
      <!-- <meta http-equiv="refresh" content="0;url=page/page1.html"> -->
      <!-- <a href="page/page1.html"></a> -->
    </div>
    <div class="close-button r-close-button">x</div>
  </div>
<!--each tile should specify what page type it opens (to determine which animation) and the corresponding page name it should open-->
  <div class="dashboard clearfix">
    <ul class="tiles">
      <div class="col1 clearfix">
        <li class="tile tile-big tile-1 slideTextUp" data-page-type="r-page" data-page-name="random-r-page">
          <div><p>Keyboard Huruf</p></div>
          <div><p onclick="location.href = 'IndonesiaAlphabetWithKeyboard/index.php';">Start</p></div>
        </li>
        <li class="tile tile-big tile-1 slideTextUp" data-page-type="r-page" data-page-name="random-r-page">
          <div><p>Mengenal Huruf Vokal</p></div>
          <div><p onclick="location.href = 'page2/vocal.html';">Start</p></div>
        </li>
        <li class="tile tile-big tile-1 slideTextUp" data-page-type="r-page" data-page-name="random-r-page">
          <div><p>Mengenal Huruf Konsonan</p></div>
          <div><p onclick="location.href = 'page2/index.html';">Start</p></div>
        </li>
        <li class="tile tile-big tile-1 slideTextUp" data-page-type="r-page" data-page-name="random-r-page">
          <div><p>Mengenal Suara Hewan</p></div>
          <div><p onclick="location.href = 'page/page1.php';">Start</p></div>
        </li>
        <!-- <li class="tile tile-small tile tile-2 slideTextRight" data-page-type="s-page" data-page-name ="random-restored-page">
          <div><p class="icon-arrow-right"></p>
          <div><p onclick="location.href = 'page/page1.php';">Start</p></div></div>
          <div><p>Game 2</p></div>
          
        </li> -->
        <!-- <li class="tile tile-small last tile-3" data-page-type="r-page" data-page-name="random-r-page">
          <div>Game 3</div>
          <p class="icon-calendar-alt-fill"></p>
          <p onclick="location.href = 'page/page1.php';"><h6>Hewan dan kandangnya</h6></p>
          <a onclick="location.href = 'page/page1.php';">Start</a>
        </li> -->
        <!-- <li class="tile tile-big tile-4 fig-tile" data-page-type="r-page" data-page-name="random-r-page">
          <figure>
          <p onclick="location.href = 'page/page2.php';"><h6><img src="https://sarasoueidan.com/demos/windows8-animations/images/blue.jpg" /></h6></p>
            <figcaption class="tile-caption caption-left">Game 3</figcaption>
            <h6>Hewan dan kandangnya</h6>
            <span onclick="location.href = 'page/page2.php';">Start</span>
          </figure>
        </li> -->
      </div>

      <div class="col2 clearfix">
        <!-- <li class="tile tile-big tile-5" data-page-type="r-page" data-page-name="random-r-page">
          <div><p><span class="icon-cloudy"></span>Game 5</p></div>
        </li> -->
        <li class="tile tile-big tile-6 slideTextLeft" data-page-type="r-page" data-page-name="random-r-page">
          <div><p class="icon-arrow-right"> Mencari Pasangannya</p></div>
          <div><p  onclick="location.href = '/project-sri-match/index.html';">Start</p></div>
        </li>
        <li class="tile tile-big tile-6 slideTextLeft" data-page-type="r-page" data-page-name="random-r-page">
          <div><p class="icon-calendar-alt-fill"> Hewan dan kandangnya</p></div>
          <div><p onclick="location.href = 'page/page1.php';">Start</p></div>
        </li>
        <li class="tile tile-big tile-6 slideTextLeft" data-page-type="r-page" data-page-name="random-r-page">
          <div><p><span class="icon-picassa"></span>Hewan dan Makanannya</p></div>
          <div><p  onclick="location.href = 'page/page2.php';">Start</p></div>
        </li>
        <li class="tile tile-big tile-6 slideTextLeft" data-page-type="r-page" data-page-name="random-r-page">
          <div><p><span class="icon-skype"></span>Susun Hewan</p></div>
          <div><p onclick="location.href = '/simple-drag-and-drop-game/dist/index.html';">Start</p></div>
          <!-- <img src="/project-sri-match/index.html" alt="" srcset=""> -->
        </li>
        <!--Tiles with a 3D effect should have the following structure:
            1) a container inside the tile with class of .faces
            2) 2 figure elements, one with class .front and the other with class .back-->
        <!-- <li class="tile tile-small tile-7 rotate3d rotate3dX" data-page-type="r-page" data-page-name="random-r-page">
          <div class="faces">
            <div class="front"><span class="icon-picassa"></span></div>
            <div class="back"><p>Game 7</p></div>
          </div>
        </li>
        <li class="tile tile-small last tile-8 rotate3d rotate3dY" data-page-type="r-page" data-page-name="random-r-page">
          <div class="faces">
            <div class="front"><span class="icon-instagram"></span></div>
            <div class="back"><p>Game 8</p></div>
          </div>
        </li> -->
      </div>

      <!-- <div class="col3 clearfix">      
        <li class="tile tile-2xbig tile-9 fig-tile" data-page-type="custom-page" data-page-name="random-r-page">
          <figure>
            <img src="https://sarasoueidan.com/demos/windows8-animations/images/summer.jpg" />
            <figcaption class="tile-caption caption-bottom">Game 9
            </figure>
        </li>
        
        <li class="tile tile-big tile-10" data-page-type="s-page" data-page-name="custom-page">
          <div><p>Game 10</p></div>
        </li>
      </div> -->
    </ul>
  </div><!--end dashboard-->

</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://sarasoueidan.com/demos/windows8-animations/js/scripts.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
