<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page 1</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		.st1{
			background-color: yellow;
			padding: 5px;
			font-family: arial;
		}
		.btn{
			background-color: black; /* Blue background */
			border: none; /* Remove borders */
			border-radius: 40%;
			color: white; /* White text */
		 	padding: 6px 10px; /* Some padding */
			font-size: 16px; /* Set a font size */
			cursor: pointer; /* Mouse pointer on hover */
			position: absolute;
			top: 40px;
			left: 1270px ;
		}
		.btn:hover{
			background-color: darkgrey ;
		}
		.note1{
			font-family: arial;
			font-weight: bold;
			background-color: yellow;
			padding: 10px;
			width: 230px;
			position: static;
			border-bottom-right-radius: 15%;
			border-bottom-left-radius: 15%;
		}
		.cs2{
			position: relative;
			top: -20px;
		}
		.img1{
			height: 110px;
			width: 250px;
			border: none;
			border-radius: 10%;
			position: relative;
			top: 30px;
		}
		.cs3{
			position: relative;
			top: -40px;
		}
		.img2{
			height: 110px;
			width: 250px;
			border: none;
			border-radius: 10%;
			position: relative;
			top: 10px;
		}
		.cs4{
			position: relative;
			top: -60px;
		}
		.img3{
			height: 110px;
			width: 250px;
			border: none;
			border-radius: 10%;
			position: relative;
			top: -20px;
		}

	</style>
</head>
<body bgcolor="green">
	<?php
		include 'koneksi.php';
		$sql	= "SELECT * FROM kategori";
		$query	= mysqli_query($koneksi, $sql);
		?>
	<div class="st1">
		<center>
			<h1>KEDAI DAY JUICE</h1>
		</center>
		<a href="Login.php"><button class="btn"><i class="fa fa-home"></i></button></a>
	</div>

	<center>
		<div>
			<a href="List.php?ID_Kategori=1"> <input type="image" src="foto/Foto/Food.JPG" name="img1" class="img1" ></a>
			<div class="cs2">
				<p class="note1">JAJANAN</p>
			</div>
		</div>

		<div>
			<a href="List.php?ID_Kategori=2"> <input type="image" src="foto/Foto/Jus.JPG" name="img2" class="img2" ></a>
			<div class="cs3">
				<p class="note1">JUS</p>

			</div>
		</div>

		<div>
			<a href="List.php?ID_Kategori=3"> <input type="image" src="foto/Foto/Lain.JPG" name="img3" class="img3" ></a>
			<div class="cs4">
				<p class="note1">LAINNYA</p>

			</div>
		</div>
	</center>
</body>
</html>