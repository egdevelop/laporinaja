<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'laporinaja');

function Login(){
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $row['email'];
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

function Pelaporan(){
    global $conn;
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $ttl = $_POST['ttl'];
    $nik = $_POST['nik'];
    $bentuk_kekerasan = $_POST['bentuk_kekerasan'];
    $waktu_kejadian = $_POST['waktu_kejadian'];
    $tempat_kejadian = $_POST['tempat_kejadian'];
    $kronologi = $_POST['kronologi'];
    $bukti = $_FILES['bukti'];
    $file_name = $bukti['name'];
    $save_name = $file_name . time();
    $file_size = $bukti['size'];
    $file_tmp = $bukti['tmp_name'];
    $file_ext = strtolower(end(explode('.', $file_name)));
    $expensions = array("jpeg", "jpg", "png");

    if(in_array($file_ext, $expensions) === false){
        header("Location: form.php?pesan=Extensi%20File%20Tidak%20Sesuai");
    }
    else{
        if($file_size > 2097152){
            header("Location: form.php?pesan=Ukuran%20File%20Terlalu%20Besar");
        }
        else{
            if(move_uploaded_file($file_tmp, "bukti/".$save_name)){
            $query = "INSERT INTO pelaporan (nama, email, ttl, nik, bentuk_kekerasan, waktu_kejadian, tempat_kejadian, kronologi, bukti) VALUES ('$nama', '$email', '$ttl', '$nik', '$bentuk_kekerasan', '$waktu_kejadian', '$tempat_kejadian', '$kronologi', '$file_name')";
            }else{
                echo "Not uploaded because of error #".$_FILES["bukti"]["error"];
            }
            if(mysqli_query($conn, $query)){
                header("Location: riwayat.php?pesan=Berhasil%20Mendaftar");
            }else{
                echo mysqli_error($conn);
            }
        }
    }
}
?>