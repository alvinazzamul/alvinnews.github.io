<?php require 'koneksi.php'; session_start();
   if(isset($_SESSION['login'])){
      header("Location: index.php");
   }
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design | CodeLab</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="style_login.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login Form
         </div>
         <form action="login_proc.php" method="POST">
            <div class="field">
               <input type="text" name="email" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
            <div class="field">
               <input type="submit" name="login" value="Login">
            </div>
            <div class="signup-link">
               Belum mendaftar? Yuk <a href="registrasi.php">Daftar</a>
            </div>
         </form>
      </div>
   </body>
</html>