<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'laporinaja');

function Login(){
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    if(mysqli_num_rows($result) == 1){
        echo "BERHASIL LOGIN";
    }
        else{
            echo "GAGAL LOGIN";
        }
}
?>