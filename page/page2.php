<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />

    <title>SRI</title>
  </head>
  <body class="body2">
    <div class="container">
      <h1 class="text-center text-white">Hewan dan Makanannya</h1><h4 class="text-center text-white text-right" onclick="location.href = '../index.php';">Home</h4>
      <hr />
      <div class="row">
        <div class="col-7 d-flex flex-wrap border-end border-dark">
          <div class="home-card d-flex flex-column align-items-center justify-content-between">
            <div class="image-home">
              <img src="img/rabbit-food.jpg" class="img-fluid m-auto" alt="" />
            </div>
            <div id="home1" ondrop="drop(event)" ondragover="allowDrop(event)" class="drop mt-2"></div>
          </div>
          <div class="home-card d-flex flex-column align-items-center justify-content-between">
            <div class="image-home">
              <img src="img/panda-food.jpg" class="img-fluid m-auto" alt="" />
            </div>
            <div id="home2" ondrop="drop(event)" ondragover="allowDrop(event)" class="drop mt-2"></div>
          </div>
          <div class="home-card d-flex flex-column align-items-center justify-content-between">
            <div class="image-home">
              <img src="img/monkey-food.jpg" class="img-fluid m-auto" alt="" />
            </div>
            <div id="home3" ondrop="drop(event)" ondragover="allowDrop(event)" class="drop mt-2"></div>
          </div>
          <div class="home-card d-flex flex-column align-items-center justify-content-between">
            <div class="image-home">
              <img src="img/cat-food.png" class="img-fluid m-auto" alt="" />
            </div>
            <div id="home4" ondrop="drop(event)" ondragover="allowDrop(event)" class="drop mt-2"></div>
          </div>
          <div class="home-card d-flex flex-column align-items-center justify-content-between">
            <div class="image-home">
              <img src="img/dog-food.jpg" class="img-fluid m-auto" alt="" />
            </div>
            <div id="home5" ondrop="drop(event)" ondragover="allowDrop(event)" class="drop mt-2"></div>
          </div>
          <div class="home-card d-flex flex-column align-items-center justify-content-between">
            <div class="image-home">
              <img src="img/rat-food.jpg" class="img-fluid m-auto" alt="" />
            </div>
            <div id="home6" ondrop="drop(event)" ondragover="allowDrop(event)" class="drop mt-2"></div>
          </div>
        </div>
        <div class="col d-flex flex-wrap align-content-center">
          <div class="animal-card me-4 mb-5 d-flex flex-column align-items-center justify-content-between">
            <div class="image-animal">
              <img id="animal1" src="img/rabbit.jpg" draggable="true" ondragstart="drag(event)" class="img-fluid" alt="" />
            </div>
            <h6 class="animal-card-text text-center mt-2 p-1 bg-white">Kelinci</h6>
          </div>
          <div class="animal-card me-4 mb-5 d-flex flex-column align-items-center justify-content-between">
            <div class="image-animal">
              <img id="animal2" src="img/panda.png" draggable="true" ondragstart="drag(event)" class="img-fluid" alt="" />
            </div>
            <h6 class="animal-card-text text-center mt-2 p-1 bg-white">Panda</h6>
          </div>
          <div class="animal-card me-4 mb-5 d-flex flex-column align-items-center justify-content-between">
            <div class="image-animal">
              <img id="animal3" src="img/monkey.jpg" draggable="true" ondragstart="drag(event)" class="img-fluid" alt="" />
            </div>
            <h6 class="animal-card-text text-center mt-2 p-1 bg-white">Monyet</h6>
          </div>
          <div class="animal-card me-4 mb-5 d-flex flex-column align-items-center justify-content-between">
            <div class="image-animal">
              <img id="animal4" src="img/cat.png" draggable="true" ondragstart="drag(event)" class="img-fluid" alt="" />
            </div>
            <h6 class="animal-card-text text-center mt-2 p-1 bg-white">Kucing</h6>
          </div>
          <div class="animal-card me-4 mb-5 d-flex flex-column align-items-center justify-content-between">
            <div class="image-animal">
              <img id="animal5" src="img/dog.png" draggable="true" ondragstart="drag(event)" class="img-fluid" alt="" />
            </div>
            <h6 class="animal-card-text text-center mt-2 p-1 bg-white">Anjing</h6>
          </div>
          <div class="animal-card me-4 mb-5 d-flex flex-column align-items-center justify-content-between">
            <div class="image-animal">
              <img id="animal6" src="img/rat.jpg" draggable="true" ondragstart="drag(event)" class="img-fluid" alt="" />
            </div>
            <h6 class="animal-card-text text-center mt-2 p-1 bg-white">Tikus</h6>
          </div>
        </div>
      </div>
    </div>

    <!-- <div>
    <div><a onclick="location.href = '../index.php';">Home</a></div>
    </div> -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>
