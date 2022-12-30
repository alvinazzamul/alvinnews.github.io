<?php require 'koneksi.php'; session_start();
   if(isset($_SESSION['login'])){
      header("Location: index.php");
   }
?>
<center>
    <p>
        <h1>MOHON MAAF ANDA BELUM MEMILIKI AKUN</h1>
        <a class="link" href="regis_proc.php"><b><h1>MENDAFTAR</h1></b></a>
    </p>
</center>
<?php
    if(isset($_POST['login'])){
        $password = stripslashes($_POST['password']);
        $email = $_POST['email'];
        $query = "SELECT * FROM user_login WHERE email='$email'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) === 1){
            $data = mysqli_fetch_assoc($result);
            if($email === $data['email']){
                if($password === $data['password']){
                    $_SESSION['login'] = true;
                    header("Location: index.php"); exit;
                }else {
                    echo "<script>alert('Password Tidak Sama')</script>" ;
                    header("Location: login.php"); exit;
                } 
            } else {
                echo "<script>alert('Username Tidak Sama')</script>" ;
                header("Location: login.php"); exit;
            }
        }
    } else {
        echo "<script>alert('Kesalahan pada data')</script>" ;
        header("Location: login.php"); exit;
    }
?>