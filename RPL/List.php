<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page 2</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		.center{	
			margin-left: auto;
			margin-right: auto;
		}

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
			position: relative;
			top: -60px;
			left: 50px ;
		}
		.btn:hover{
			background-color: darkgrey ;
		}
		
		.img2{
			height: 110px;
			width: 250px;
			border: none;
			border-radius: 10%;
			margin-top: 10px;
			margin-bottom: 20px;
		}
		#st1{
			position: absolute;
			left: 625px;
		}
		#st2{
			position: absolute;
			left: 700px;
		}
		#note1{
			position: absolute;
			left: 400px;
		}
		#capt1{
			padding-top: 5px;
			padding-bottom: 5px;
			background-color: yellow;
			font-family: arial;
			font-size: 10px;
			font-weight: bold;
			text-align: center;
			position: absolute;
		}
		#capt1{
			padding-top: 5px;
			padding-bottom: 5px;
			background-color: yellow;
			font-family: arial;
			font-size: 10px;
			font-weight: bold;
			text-align: center;
			position: absolute;
			width: 250px;
			top: 98px;
		}#capt2{
			padding-top: 5px;
			padding-bottom: 5px;
			background-color: yellow;
			font-family: arial;
			font-size: 10px;
			font-weight: bold;
			text-align: center;
			position: absolute;
			width: 250px;
			top: 233px;
		}
		#capt3{
			padding-top: 5px;
			padding-bottom: 5px;
			background-color: yellow;
			font-family: arial;
			font-size: 10px;
			font-weight: bold;
			text-align: center;
			position: absolute;
			width: 250px;
			top: 378px;
		}
		#capt4{
			padding-top: 5px;
			padding-bottom: 5px;
			background-color: yellow;
			font-family: arial;
			font-size: 10px;
			font-weight: bold;
			text-align: center;
			position: absolute;
			width: 250px;
			top: 523px;
		}
		#note1{
			position: absolute;
			left: 400px;
		}
		#note2{
			position: absolute;
			left: 700px;
		}
	</style>
</head>


<body bgcolor="green">
	<?php include 'koneksi.php';
	$ID_Kategori = $_GET['ID_Kategori'];
    $sql        = "SELECT produk.ID_Produk, produk.Gambar, Produk.Nama FROM kategori JOIN produk USING(ID_Kategori) WHERE ID_Kategori='$ID_Kategori'";
    $query      = mysqli_query($koneksi, $sql);
    ?>
    <div class="st1">
		<center>
			<h1>KEDAI DAY JUICE</h1>
		</center>
	</div>
	<table><div class="cs1">
		<a href="Login.php"><button class="btn"><i class="fa fa-home"></i></button></a>
	</div>
	<div class="table-responsive">
	<table class="table center">
		<tbody>
			<?php
			while ($data = mysqli_fetch_array($query)) {
		            ?>
		            <tr>
		            	<th><a href="Detail.php?ID_Produk=<?= $data['ID_Produk'] ?>"> <input type="image" src=<?= $data['Gambar']?>	 name=<?= $data['Gambar']?> class="img2" ></a></th>
		            </tr>
		            <tr>
		            	<th><p class="capt"><?= $data['Nama'] ?></p></th>
		            </tr>
		            <?php } ?>
		        </tbody>
		    </table>
		</table>
	</body>
</div>
</html>
