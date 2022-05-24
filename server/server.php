<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'laporinaja');

function Login(){
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    if(mysqli_num_rows($result) == 1){
        $_SESSION['username'] = $username;
        header("Location: index.php");
    }
        else{
            header("Location: login.php?pesan=Email%20atau%20Password%20Salah");
        }
}

function Daftar(){
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $email = $_POST['email'];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if(mysqli_num_rows($result) == 1){
        header("Location: daftar.php?pesan=Username%20Sudah%20Terdaftar");
    }
    else{
        if($password == $confirm){
            $query = "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email')";
            mysqli_query($conn, $query);
            header("Location: login.php?pesan=Berhasil%20Mendaftar");
        }
        else{
            header("Location: daftar.php?pesan=Password%20dan%20Konfirmasi%20Password%20Tidak%20Sama");
        }
    }
}
?>