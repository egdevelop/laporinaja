<?php
session_start();

if(isset($_SESSION['username'])){
  $btn = '<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="index.php">Beranda</a></li>
    <li><a class="dropdown-item" href="edukasi.php">Edukasi</a></li>
    <li><a class="dropdown-item" href="pelaporan.php">Pelaporan</a></li>
    <li><a class="dropdown-item" href="#">Rehabilitasi</a></li>
    <li><a class="dropdown-item" href="#">History</a></li>
    <li><a class="dropdown-item" href="server/logout.php">Log Out</a></li>
  </ul>
</div>';
}else{
  $btn = '<a
              class="btn btn-primary text-light"
              aria-current="page"
              href="login.php"
              >Sign in / Sign up</a
            >';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Xarass</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/global.css" />
</head>

<body style="background-color: #fee2b3">
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #ffa299; padding: 20px">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/xarass.png" alt="" width="40" height="50" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?= $btn ?>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div class="container text-center" id="beranda">
            <h2 class="fw-bold" style="margin-top: 200px ;">Kekerasan Seksual?</h2>
            <p>Kekerasan Seksual merupakan ...</p>
            <div class="" style="background-color: red; width: 100%">
                <p>Macam – Macam Kekerasan Seksual (Menurut RUU TPKS) :</p>
            </div>
            <div class="" style="background-color: red; width: 100%">
                <p> Dampak Kekerasan Seksual Terhadap Korban :</p>
            </div>
            <div class="" style="background-color: red; width: 100%">
                <p>Pencegahan Terjadinya Kekerasan Seksual :</p>
            </div>
            <div class="" style="background-color: red; width: 100%">
                <p> Penanggulangan Terjadinya Kekerasan Seksual :</p>
            </div>
            <div class="row" style="margin-top: 100px ;">
                <div class="col-4">
                    <h1>Kotak</h1>
                    <p>Video Referensi dari Youtube</p>
                </div>
                <div class="col-4">
                    <h1>Kotak</h1>
                    <p>Video Referensi dari Youtube</p>
                </div>
                <div class="col-4">
                    <h1>Kotak</h1>
                    <p>Video Referensi dari Youtube</p>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class="row text-light" style="background-color: #562349; margin-top: 200px; padding: 50px">
                <div class="col-4">
                    <img src="assets/img/adit.jpg" alt="" height="300" width="300" />
                    <h4 class="mt-2">Aditya</h4>
                    <p class="m-0">as Frontend Developer</p>
                </div>
                <div class="col-4">
                    <img src="assets/img/diah.jpg" alt="" height="300" width="300" />
                    <h4 class="mt-2">Diah</h4>
                    <p class="m-0">as UI/UX Designer</p>
                </div>
                <div class="col-4">
                    <img src="assets/img/faisal.jpeg" alt="" height="300" width="300" />
                    <h4 class="mt-2">Faisal</h4>
                    <p class="m-0">as Backend Developer</p>
                </div>
            </div>
            <div class="row text-light text-start" style="background-color: #562349">
                <ul class="px-5" style="list-style: none">
                    <li>
                        <p>Nomor Whatsapp:</p>
                    </li>
                    <li>
                        <p>Instagram:</p>
                    </li>
                    <li>
                        <p>Alamat:</p>
                    </li>
                </ul>
            </div>
        </div>
    </main>
    <footer class="p-3 bg-light">
        <div class="text-center">Copyright xarass &copy; 2022</div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>