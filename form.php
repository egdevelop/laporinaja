<?php
include "server/server.php";

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

if(isset($_POST['pelaporan'])){
    Pelaporan();
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
        <div class="container">
            <form class="" method="POST" action="form.php" style="margin-top: 150px ;" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" value="<?= $_SESSION['email'] ?>" name="email" class="form-control" disabled>
                    <input type="hidden" value="<?= $_SESSION['email'] ?>" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tempat , Tanggal Lahir</label>
                    <input type="date" name="ttl" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">NIK</label>
                    <input type="text" name="nik" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Bentuk kekerasan Seksual</label>
                    <select class="form-select" name="bentuk_kekerasan" aria-label="Default select example">
                        <option selected>Pilih satu..</option>
                        <option value="1">pelecehan seksual fisik</option>
                        <option value="2">pelecehan seksual nonfisik</option>
                        <option value="3">pemaksaan kontrasepsi</option>
                        <option value="4">Pemaksaan Sterilisasi</option>
                        <option value="5">Pemaksaan Perkawinan</option>
                        <option value="6">Penyiksaan Seksual</option>
                        <option value="7">Eksploitasi Seksual</option>
                        <option value="8">Perbudakaan Seksual</option>
                        <option value="9">Kekerasan Seksual Berbasis Elektronik</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Waktu Kejadian</label>
                    <input type="date" name="waktu_kejadian" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tempat Kejadian</label>
                    <input type="text" name="tempat_kejadian" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kronologi</label>
                    <input type="text" name="kronologi" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Bukti kejadian</label>
                    <input type="file" name="bukti" class="form-control">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" name="pelaporan" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <br>
        </div>
    </main>
    <!-- <footer class="p-3 bg-light">
        <div class="text-center">Copyright xarass &copy; 2022</div>
    </footer> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>