<?php require 'session.php'; require 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<title>UAS PBW</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://badoystudio.com/cloudme.fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="style.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif;}
.tambah_v{
    height : 100px;
}
</style>
<body class="w3-light-grey" style="background-color: white;">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
<h1><b>MY BLOG</b></h1>
<p>Welcome to the blog of <span class="w3-tag">Alvin Azzamul Blog</span></p>
<p>Blog ini bertujuan memberitahu bahwa Sidoarjo juga memiliki klub sepakbola yang membawa nama Sidoarjo dikancah Nasional.</p>
</header>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
<!-- Blog entry -->
<div class="w3-card-4 w3-margin w3-white">
<img src="Deltras.png" alt="Nature" style="width:100%">
<div class="w3-container">
<h3><b>DELTRAS FC SIDOARJO</b></h3>
<h5>Ditulis pada, <span class="w3-opacity">17 November 2021</span></h5>
</div>

<div class="w3-container">
<?php
    include 'koneksi.php';
    $query = "SELECT * FROM from_index ORDER BY id_user DESC";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die ("Query Error: ".mysqli_errno($conn).
        " - ".mysqli_error($conn));
    }
    $row = mysqli_fetch_assoc($result)
?>
<p><?php echo $row['artikel'] ?></p>
<div class="w3-row">
<div class="w3-col m8 s12">
<p><button class="w3-button w3-padding-large w3-white w3-border"><a class="link" href="https://id.wikipedia.org/wiki/Deltras_FC#:~:text=Delta%20Raya%20Sidoarjo%20(biasa%20disingkat,dari%20konflik%20yang%20membelit%20Persebaya."><b>READ MORE »</b></a></button></p>
</div>
<div class="w3-col m4 w3-hide-small">
</div>
</div>
</div>
</div>
<hr>

<!-- Blog entry -->
<div class="w3-card-4 w3-margin w3-white">
<img src="usu.jpg" alt="Norway" style="width:100%">
<div class="w3-container">
<h3><b>PRESTASI</b></h3>
<h5>Ditulis pada, <span class="w3-opacity">17 November 2021</span></h5>
</div>

<div class="w3-container">
<?php
    include 'koneksi.php';
    $query = "SELECT * FROM from_index ORDER BY id_user DESC";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die ("Query Error: ".mysqli_errno($conn).
        " - ".mysqli_error($conn));
    }
    $row = mysqli_fetch_assoc($result)
?>
<p><?php echo $row['news'] ?></p>

<div class="w3-row">
<div class="w3-col m8 s12">
<p><button class="w3-button w3-padding-large w3-white w3-border"><a class="link" href="https://id.wikipedia.org/wiki/Deltras_FC#:~:text=Delta%20Raya%20Sidoarjo%20(biasa%20disingkat,dari%20konflik%20yang%20membelit%20Persebaya."><b>READ MORE »</b></a></button></p>
</div>
<div class="w3-col m4 w3-hide-small">
</div>
</div>
</div>
</div>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
<!-- About Card -->
<div class="w3-card w3-margin w3-margin-top">
<img src="alvin.jpg" style="width:100%">
<div class="w3-container w3-white">
<h4><b>BIOGRAFI PENULIS</b></h4>
<p>Lahir di Sidoarjo pada tanggal 24 Oktober tahun 2000, pernah menempuh pendidikan sekolah dasar di MI Ma'arif Pamotan Porong, SMP Avisena Jabon, SMK Islam Krembung dan sekarang sedang berkuliah di Universitas Muhammadiyah Sidoarjo</p>
</div>
</div><hr>

<!-- Posts -->
<div class="w3-card w3-margin">
<div class="w3-container w3-padding">
<h4>Popular Posts</h4>
</div>
<ul class="w3-ul w3-hoverable w3-white">
<li class="w3-padding-16 side tambah_v">
<a href="https://www.google.com/search?q=deltras+dan+deltamania&sxsrf=AOaemvKtYqdUchu7E3RW9yANw_eHNY1law:1642241872856&source=lnms&tbm=isch&sa=X&ved=2ahUKEwi_xd3bw7P1AhXRgtgFHRJCAH0Q_AUoAXoECAEQAw&biw=1280&bih=609&dpr=1.5"><img src="page.jpg" alt="Galeri Kami" title="Galeri Kami" class="w3-left w3-margin-right" style="width:350px;"></a>
</li>
<li class="w3-padding-16 side tambah_v">
<a href="https://www.instagram.com/deltrasfcofficial/"><img src="news.jpg" alt="Berita terbaru Kami" title="Berita terbaru Kami" class="w3-left w3-margin-right" style="width:350px;"></a>
</li> 
<li class="w3-padding-16 side tambah_v">
<a href=""><img src="artikel.jpg" alt="Artikel Kami" title="Artikel Kami" class="w3-left w3-margin-right" style="width:350px;"></a>
</li> 
<li class="w3-padding-16 w3-hide-medium w3-hide-small side tambah_v">
<a href="https://www.youtube.com/results?search_query=deltras+dan+deltamania"><img src="video.jpg" alt="Video Kami" title="Video Kami" class="w3-left w3-margin-right" style="width:350px;"></a>
</li> 
</ul>
</div>
<hr> 

<!-- Labels / tags -->
<div class="w3-card w3-margin">
<div class="w3-container w3-padding">
<h4>Tags</h4>
</div>
<div class="w3-container w3-white">
<p><a href=""><span class="w3-tag w3-black w3-margin-bottom">Deltras FC</span></a> <a href=""><span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Deltamania</span></a><a href=""><span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Deltanita</span></a>
<a href=""><span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sidoarjo</span></a><a href=""><span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Bangga Sidoarjo</span></a><a href=""><span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sepakbola</span></a>
<span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
</p>
</div>
</div>

<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
<div class="container-logout">
<form action="" method="POST" class="login-email">            
<div class="input-group">
<a href="logout.php" button class="w3-button w3-red w3-padding-large w3-margin-bottom">=====Logout=====</a>
</div>
</footer>

</body>
</html>