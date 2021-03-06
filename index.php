<?php
session_start();

if(isset($_SESSION['username'])){
  $btn = '<div class="dropdown">
  <button class="btn btn-secondary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
   <i class="ri-menu-line"></i>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="index.php">Beranda</a></li>
    <li><a class="dropdown-item" href="edukasi.php">Edukasi</a></li>
    <li><a class="dropdown-item" href="pelaporan.php">Pelaporan</a></li>
    <li><a class="dropdown-item" href="rehabilitasi.php">Rehabilitasi</a></li>
    <li><a class="dropdown-item" href="riwayat.php">Riwayat</a></li>
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
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body style="background-color: #fee2b3">
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #fee2b3; padding: 20px">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/xarass.png" alt="" width="40" height="50" />
            </a>
            <div class="d-flex">
                <?= $btn ?>
            </div>
        </div>
    </nav>
    <main>
        <div style="background-color: #ffa299;">
            <div class="container" id="beranda">
                <div class="hero-wrapper" style="padding-top: 200px">
                    <div class="text-center">
                        <h3 class="mt-5 fw-bold">???Harga Dirimu Adalah Nomor Satu???</h3>
                        <p>Xarass Apps</p>
                        <p>Menolak dan Menanggulangi</p>
                        <p>Tindak Pidana Kekerasan Seksual</p>
                        <p>pada Masyarakat Indonesia</p>
                    </div>
                </div>

                <img src="https://akasia.app/wp-content/uploads/2021/11/main-image.png" alt="hero" class="img-fluid"
                    style="margin-top: 100px; " />
            </div>
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
                            <i class="ri-women-line" style="font-size: 100px ;"></i>
                            <h4 class="mt-2">Fitur 1</h4>
                            <p>Desc</p>
                        </div>
                        <div>
                            <i class="ri-alarm-warning-line" style="font-size: 100px ;"></i>
                            <h4 class="mt-2">Fitur 1</h4>
                            <p>Desc</p>
                        </div>
                        <div>
                            <i class="ri-heart-2-line" style="font-size: 100px ;"></i>
                            <h4 class="mt-2">Fitur 1</h4>
                            <p>Desc</p>
                        </div>

                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffa299" fill-opacity="1"
                    d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
            <div class="row text-light" style="background-color: #ffa299; padding: 50px">
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
            <div class="d-flex justify-content-between p-3 text-light text-start" style="background-color: #ffa299">
                <ul class="px-5" style="list-style: none">
                    <li class="d-flex align-items-center">
                        <i class="ri-whatsapp-line px-2" style="font-size: 24px ;"></i>
                        <p class="m-0">Nomor Whatsapp:</p>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="ri-instagram-line px-2" style="font-size: 24px ;"></i>
                        <p class="m-0">Instagram:</p>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="ri-map-pin-2-line px-2" style="font-size: 24px ;"></i>
                        <p class="m-0">Alamat:</p>
                    </li>
                </ul>
                <iframe class="px-5"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15828.162168107303!2d108.222406!3d-7.3493444!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd8b04746f0f62ad4!2sUniversitas%20Siliwangi!5e0!3m2!1sid!2sid!4v1653487285229!5m2!1sid!2sid"
                    width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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