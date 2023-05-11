<?php
$data = file_get_contents('data.json');
$menu = json_decode($data, true);
$menu = $menu["menu"];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Snack Shop</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="style/style.css" />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
          <a class="navbar-toggler border-warning badge" type="button">
            <span class=""><i class="bi bi-house-door"></i></span>
          </a>
          <div class="navbar-toggler logo">
            <a href=""
              ><img class="logo-image" src="images/fblogo.ico" alt="facebook"
            /></a>
            <a href=""
              ><img class="logo-image" src="images/iglogo.ico" alt="facebook"
            /></a>
          </div>

          <button
            class="navbar-toggler border-warning badge"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <a class="nav-link active" href="#">Beranda</a>
              <a class="nav-link active" href="#">Produk</a>
              <a class="nav-link active" href="#">Testimoni</a>
            </ul>

            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-warning" type="submit">
                Cari
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div class="row produk">
      <?php foreach($menu as $row) : ?>
        <div class="col-md-4 col-sm-6">
          <div class="card mb-3">
            <img src="<?=$row["gambar"]?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title"><?=$row["nama"]?></h3>
              <p class="card-title harga"><?=$row["harga250g"]?></p>
              <p class="card-title harga"><?=$row["harga500g"]?></p>
              <p class="card-title harga"><?=$row["harga1000g"]?></p>
              <p class="card-text"><?=$row["deskripsi"]?></p>
              <a href="#" class="btn btn-warning">Pesan</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>    
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffa32c"
          fill-opacity="1"
          d="M0,32L60,48C120,64,240,96,360,117.3C480,139,600,149,720,138.7C840,128,960,96,1080,96C1200,96,1320,128,1380,144L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"
        ></path>
      </svg>
    </main>
    <div class="sticky-bottom">
      <footer class="">
        <p>Created with <i class="bi bi-suit-heart-fill"></i> by Friza</p>
      </footer>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.6.4.min.js"
      integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
      integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
      integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
      crossorigin="anonymous"
    ></script>
  </body>
</html>