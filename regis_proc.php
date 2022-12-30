<?php require 'koneksi.php';
    $username = $_POST['username']; 
    $password = stripslashes($_POST['password']);
    $email = strtolower(stripslashes($_POST['email']));
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    if(isset($_POST['daftar'])){
        $query = "INSERT INTO user_login (username, password, email) VALUES ('$username', '$password','$email')";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query gagal di jalankan ".mysqli_error($conn).mysqli_errno($conn));
        } else{
            echo "<script>alert('Data Berhasil Ditambahkan')</script>" ;
            header("Location: login.php"); exit;
        }
    } else {
        echo "<script>alert('Data Tidak Berhasil di Tambahkan, Coba Lagi')</script>" ;
        header("Location: registrasi.php"); exit;
    }
?>