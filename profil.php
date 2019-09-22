<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar Perusahaan Teknologi</title>
	<link rel="stylesheet" href="css/profil.css">
</head>
<body>
	<div class="header">
		<p>Profil Perusahaan Teknologi</p>
	</div>
<div class="container">
	<div class="content">
		<div class="gambar">
			<img src="img/<?= $_GET['gambar'] ?>">
		</div>
		<div class="desc">
			<p class= "nama"><?= $_GET['nama'] ?></p>
			<p><?= $_GET['pendiri'] ?></p>
			<p><?= $_GET['tahunBerdiri'] ?>, <?= $_GET['kantorPusat'] ?></p>,
			<?= $_GET['produk'] ?></p>
			<p><a href="index.php">Kembali</a></p>
		</div>
	</div>
</div>

	
</body>
</html>