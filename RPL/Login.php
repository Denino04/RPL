<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page 4</title>
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
		#st1{
			width: 275px;
			padding-top: 8px;
			padding-bottom: 8px;
			border-radius: 5%;
			border: none;
			margin-bottom: 20px;
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
		}
		#st2{
			display: inline-block;
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
	<?php
            if(isset($_GET['pesan']))
            {
              if($_GET['pesan'] == "gagal")
              {
                ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo "Anda Tidak Berhasil Login"?>
                </div>
                <?php

                header("refresh:1;url=login.php");
              }
            }
          ?>

	<center>
		<div id="st2">
			<form class="row g-3 needs-validation" novalidate method="POST" action="Ceklogin.php">

                    <div class="col-12">
                      <input type="text" name="username" class="form-control" id="st1" placeholder="Username" required>
                      </div>
                    </div>

                    <div class="col-12">
                      <input type="password" name="password" class="form-control" id="st1" placeholder="Password" required>
                    </div>

                    <div class="col-12">
                      <button id=btn1 type="submit">LOGIN</button>
                    </div>
                    <?php
		            if(isset($_GET['pesan']))
		            {
		              if($_GET['pesan'] == "gagal")
		              {
		                ?>
		                <div class="col-12" id="st1">
		                  <?php echo "Anda Tidak Berhasil Login"?>
		                </div>
		                <?php

		                header("refresh:1;url=login.php");
		              }
		            }
		          ?>
          </form>
		</div>
	</center>
</body>
</html>

<!-- <input type="text" name="username" placeholder="Username" id="st1"><br>
			<input type="text" name="password" placeholder="Password" id="st1"><br>
			<button id="btn1">LOGIN</button> -->