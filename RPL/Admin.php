<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page 5</title>
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
			left: 50px ;
		}
		.btn:hover{
			background-color: darkgrey ;
		}
		#btn1{
			background-color: yellow;
			width: 150px;
			border: none;
			border-radius: 15%;
			padding-top: 5px;
			padding-bottom: 5px;
			color: black;
			font-weight: bold;
			text-align: center;
			display: inline-block;
			cursor: pointer;
			margin-top: 20px;
		}
		#st2{
			margin-top: 100px;
		}
	</style>
</head>
<body bgcolor="green">
	<div class="st1">
		<center>
			<h1>KEDAI DAY JUICE</h1>
		</center>
		<a href="Utama.php"><button class="btn"><i class="fa fa-home"></i></button></a>
	</div>
	
	<center>
		<div id="st2">
			<a href="CRUD.php"><button id="btn1">Detail Produk</button><br>
		</div>
	</center>
</body>
</html>