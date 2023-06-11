<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page 3</title>
	<style type="text/css">
		#st1{
			background-color: yellow;
			padding: 5px;
			font-family: arial;
		}
		#img1{
			height: 200px;
			width: 250px;
			border: none;
			border-radius: 10%;
			margin-top: 10px;
			margin-bottom: 20px;
		}
		#st2{
			background-color: yellow;
			width: 275px;
			height: 500px;
			align-content: center;
			margin-top: 30px;
			border-radius: 5%;

		}
		#capt1{
			font-family: arial;
			font-weight: bold;
			margin-top: -10px;
		}
		#capt2{
			font-family: arial;
			font-size: 15px;
			padding: 5px;
			margin-top: -10px;
		}
		.btn:hover{
			background-color: darkgrey ;
		}
		#capt3{
			font-family: arial;
			font-weight: bold;
			background-color: green;
			width: 200px;
			padding-top: 10px;
			padding-bottom: 10px;
			border-radius: 5%;
			margin-top: 50px;
		}
		.btn1{
			background-color: yellow;
			width: 275px;
			border: none;
			border-radius: 15%;
			padding-top: 5px;
			padding-bottom: 5px;
			color: black;
			font-weight: bold;
			text-align: center;
			display: inline-block;
			font-size: 16px;
			cursor: pointer;
			margin-bottom: 10px;
		}#st4{
			position: absolute;
			left: 625px;
		}
		#st3{
			margin-top: 20px;
		}
	</style>
</head>
<body bgcolor="green">
	<div id="st1">
		<center>
			<h1>KEDAI DAY JUICE</h1>
		</center>
	</div>
	<?php include 'koneksi.php';
	$ID_Produk = $_GET['ID_Produk'];
    $sql        = "SELECT * FROM produk WHERE ID_Produk='$ID_Produk'";
    $query      = mysqli_query($koneksi, $sql);
    ?>
    <center>
    		<?php
			while ($data = mysqli_fetch_array($query)) {
		    ?>
			<div id="st2">
				<img src="<?= $data['Gambar']?>" id="img1">
				<p id="capt1"><?= $data['Nama']?></p>
				<p id="capt2">
				<?= $data['Deskripsi']?>
				</p>
				<p id="capt3"><?= $data['Harga']?></p>
			</div>

			<div id="st3">
				<a href="https://api.whatsapp.com/send?phone=6282262191159" class="btn1">WhatsApp</a><br>
				<a href="#" class="btn1">Shopee</a><br>
				<a href="List.php?ID_Kategori=<?= $data['ID_Kategori'] ?>"><button class="btn1">Kembali</button><br></a>
			</div>
			<?
			$sql2 		= "SELECT * FROM kategori WHERE ID_Kategori=$data['ID_Kategori']";
    		$query2      = mysqli_query($koneksi, $sql2);
    		?>
			<?php } ?>

	</center>

</body>
</html>