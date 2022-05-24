<?php
session_start();

if(isset($_SESSION['username'])){
  $btn = '<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Beranda</a></li>
    <li><a class="dropdown-item" href="#">Edukasi</a></li>
    <li><a class="dropdown-item" href="#">Pelaporan</a></li>
    <li><a class="dropdown-item" href="#">Rehabilitasi</a></li>
    <li><a class="dropdown-item" href="#">History</a></li>
    <li><a class="dropdown-item" href="#">Log Out</a></li>
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
        <div class="container" id="beranda">
            <div class="hero-wrapper" style="margin-top: 200px">
                <div class="text-center">
                    <h3 class="mt-5 fw-bold">“Harga Dirimu Adalah Nomor Satu”</h3>
                    <p>Xarass Apps</p>
                    <p>Menolak dan Menanggulangi</p>
                    <p>Tindak Pidana Kekerasan Seksual</p>
                    <p>pada Masyarakat Indonesia</p>
                </div>
            </div>

            <img src="https://akasia.app/wp-content/uploads/2021/11/main-image.png" alt="hero" class="img-fluid"
                style="margin-top: 100px" />
        </div>
        <div class="text-center">
            <div class="container">
                <h4 class="mt-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet
                </h4>
                <h6>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                    officia dolorem numquam assumenda dignissimos facere praesentium
                    quibusdam minima, unde molestiae voluptate repellendus id debitis
                    saepe ea a maiores cumque atque.
                </h6>
                <div class="fitur-wrapper">
                    <div class="d-flex align-items-center justify-content-between px-5" style="margin-top: 100px">
                        <div>
                            <div class="rounded-circle bg-light" style="width: 100px; height: 100px"></div>
                            <h4 class="mt-2">Fitur 1</h4>
                            <p>Desc</p>
                        </div>
                        <div>
                            <div class="rounded-circle bg-light" style="width: 100px; height: 100px"></div>
                            <h4 class="mt-2">Fitur 1</h4>
                            <p>Desc</p>
                        </div>
                        <div>
                            <div class="rounded-circle bg-light" style="width: 100px; height: 100px"></div>
                            <h4 class="mt-2">Fitur 1</h4>
                            <p>Desc</p>
                        </div>
                    </div>
                </div>
            </div>
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