<?php
   $conn = mysqli_connect("localhost","root","") or die("konenksi ke DB gagal");
   mysqli_select_db($conn, "pw_173040125") or die("Database salah !");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Perusahaan Teknologi</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<div class="header">
      <p>Daftar Perusahaan Teknologi</p>
    </div>

 <div class="container-fluid">
  <div class="row">
    <div class="col-6 col-md-4"></div>
      <div class="col-6 col-md-4">
      <div class="container">
         <?php 
          $results = mysqli_query($conn,"SELECT * FROM perusahaan_teknologi");
          while ($row = mysqli_fetch_assoc($results) ) {
            ?>
        <div class="content">
      <img src="img/<?= $row ['gambar'] ?>">
      <p class="nama"><?= $row['nama_perusahaan'] ?></p>
      <p class="tahunBerdiri"><?= $row['tahun_berdiri'] ?> </p>  
        </div>
      </div>
  </div>
</div>
</div>
      <?php } ?>
 <p>Sumber : Wikipedia</p>
 <br>

 <button>
  <a href="../"> Back To Index </a>
</button>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>