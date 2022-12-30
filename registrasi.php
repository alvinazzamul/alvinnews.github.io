<?php 
    require 'koneksi.php'; 
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
            Registrasi
         </div>
         <form action="regis_proc.php" method="post">
            <div class="field">
               <input type="text" name="username" required>
               <label>Username</label>
            </div>
            <div class="field">
               <input type="text" name="email" required>
               <label>Email</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
            <div class="field">
               <input type="submit" name="daftar" value="Daftar">
            </div>
            <div class="signup-link">
               Sudah memiliki member? <a href="login.php">Login</a>
            </div>
         </form>
      </div>
   </body>
</html>