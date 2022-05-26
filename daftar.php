<?php
include "server/server.php";
if(isset($_POST['daftar'])){
  Daftar();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/global.css" />
</head>

<body>
    <div class="container">
        <div style="margin-top: 50px; width: 60%; margin-left:15vw" class="px-5">
            <div class="text-center">
                <img src="assets/img/xarass.png" alt="" style="width: 100px ;">
            </div>
            <form action="daftar.php" class="mt-5" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="Masukan email..." />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleFormControlInput1"
                        placeholder="Masukan Username..." />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" name="confirm" class="form-control" id="exampleFormControlInput1"
                        placeholder="Konfirmasi Password .." />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                    <input type="password" name="password" class="form-control" id="exampleFormControlInput1"
                        placeholder="Masukkan Password .." />
                </div>
                <div class="d-grid gap-2 mt-5">
                    <button type="submit" class="btn btn-primary" style="background-color: red; border: none"
                        name="daftar">Submit</button>

                </div>
                <br>
                <a href="login.php" class="pb-5" style="text-decoration: none ;">Sudah punya akun? Login
                    disini</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>