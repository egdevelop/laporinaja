<?php
include "server/server.php";
if(isset($_POST['login'])){
  Login();
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
        <div style="margin-top: 150px; width: 60%; margin-left: 200px">
            <h2>Login Laporin</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas fuga
                molestiae sunt cupiditate aperiam non, animi ex? Quas veritatis rerum
            </p>
            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleFormControlInput1"
                        placeholder="Masukan Username..." />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleFormControlInput1"
                        placeholder="Masukkan Password .." />
                </div>
                <button type="submit" class="btn btn-primary" name="login">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>