<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page 6</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		.st1{
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
		}.btn{
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
			background-color: white;
			width: 275px;
			border: none;
			border-radius: 15%;
			padding-top: 5px;
			padding-bottom: 5px;
			color: grey;
			text-align: center;
			display: inline-block;
			font-size: 16px;
			cursor: pointer;
			margin-bottom: 10px;
		}
		#btn2{
			background-color: yellow;
			width: 210px;
			border: none;
			border-radius: 15%;
			padding-top: 5px;
			padding-bottom: 5px;
			color: black;
			text-align: center;
			display: inline-block;
			font-size: 16px;
			cursor: pointer;
			margin-top: 20px;
		}
		#st2{
			margin-top: 150px;w
		}
	</style>
</head>
<body bgcolor="green">
	<div class="st1">
		<center>
			<h1>KEDAI DAY JUICE</h1>
		</center>
		<a href="Admin.php"><button class="btn"><i class="fa fa-home"></i></button></a>
		<?php include 'koneksi.php';

	    $ID_Produk = "";
	    $ID_Kategori = "";
	    $Nama = "";
	    $Deskripsi = "";
	    $Harga = "";
	    $Gambar = "";
	    $sukses = "";
	    $gagal = "";

	    if(isset($_GET['op']))
    {
      $op = $_GET['op'];
    }
    else
    {
      $op = "";
    }

    if($op == 'edit')
    {
      $ID_Produk = $_GET['ID_Produk'];
      $sql1 = "select * from produk where ID_Produk = '$ID_Produk'";
      $q1 = mysqli_query($koneksi,$sql1);
      $r1 = mysqli_fetch_array($q1);
      $Nama = $r1['Nama'];
      $Deskripsi = $r1['Deskripsi'];
      $Harga = $r1['Harga'];
      $Gambar = $r1['Gambar'];	
      $ID_Kategori = $r1['ID_Kategori'];
    } 

    if($op == 'del')
    {
      $ID_Produk = $_GET['ID_Produk'];
      $sql1 = "delete from produk where ID_Produk = '$ID_Produk'";
      $q1 = mysqli_query($koneksi, $sql1);

      if($q1)
      {
        $sukses = "Berhasil Menghapus Data";
        header("refresh:1;url=CRUD.php");
      }  
    }

    if(isset($_POST['SIMPAN']))
    {
      $Nama = $_POST['Nama'];
      $Deskripsi = $_POST['Deskripsi'];
      $Harga = $_POST['Harga'];
      $Gambar = $_POST['Gambar'];	
      $ID_Kategori = $_POST['ID_Kategori'];

      if($Nama && $Deskripsi && $Harga && $Gambar)
      {
        if($op == 'edit')
        {
          $sql1 =  "update produk set Nama='$Nama', Deskripsi='$Deskripsi', Harga='$Harga', Gambar='$Gambar' ID_Kategori='$ID_Kategori' where ID_Produk = '$ID_Produk'";
          $q1 = mysqli_query($koneksi, $sql1);
          if($q1)
          {
            $sukses = "Data Berhasil di Update";
            header("refresh:1;url=CRUD.php");
          }
          else
          {
            $error = "Data Gagal di Update";
            header("refresh:1;url=CRUD.php");
          }
        }
        else
        {
          $sql1 = "insert into produk(Nama, Deskripsi, Harga, Gambar, ID_Kategori) values ('$Nama','$Deskripsi','$Harga', '$Gambar', '$ID_Kategori')";
          $q1 = mysqli_query($koneksi, $sql1);  
          if($q1)
          {
            $sukses = "Berhasil Memasukkan Data";
            header("refresh:1;url=CRUD.php");
          }
          else
          {
            $error = "Gagal Memasukkan Data"; 
            header("refresh:1;url=CRUD.php");
          }
        }
        
      }
    }?>

	</div>
	<center>
		<div id="st2">
			<form class="row g-3 needs-validation" novalidate method="POST">

                    <div class="col-12">
                      <input type="text" name="Nama" class="form-control" id="st1" value="<?php echo $Nama?>" placeholder="Nama">
                      </div>
                    </div>

                    <div class="col-12">
                      <input type="text" name="Deskripsi" class="form-control" id="st1" value="<?php echo $Deskripsi?>" placeholder="Deskripsi">
                    </div>

                    <div class="col-12">
                      <input type="text" name="Harga" class="form-control" id="st1" value="<?php echo $Harga?>" placeholder="Harga">
                    </div>

                    <div class="col-12">
                      <input type="text" name="Gambar" class="form-control" id="st1" value="<?php echo $Gambar?>" placeholder="Gambar">
                    </div>

                    <div class="col-12">
                      <input type="text" name="ID_Kategori" class="form-control" id="st1" value="<?php echo $ID_Kategori?>" placeholder="ID_Kategori">
                    </div>

                    <div class="col-12">
                      <button id=btn1 type="submit" name="SIMPAN">SIMPAN</button>
                    </div>
            </form>
		</div>
		<h2>Data Produk</h2>
		<div class="card-body">
    <table class="table text-center">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Harga</th>
          <th scope="col">ID Kategori</th>
          <th scope="col">Aksi</th>
        </tr>
        <tbody>
          <?php
          $sql2 = "select * from produk order by ID_Produk";
          $q2 = mysqli_query($koneksi, $sql2);
          $urut = 1;
          while ($r2 = mysqli_fetch_array($q2)) 
          {
            $ID_Produk = $r2['ID_Produk'] ;
            $Nama = $r2['Nama'];
            $Harga = $r2['Harga'];
            $ID_Kategori = $r2['ID_Kategori'];
          ?>

            <tr>
              <th scope="row"><?php echo $urut++ ?></th>
              <td scope="row"><?php echo $Nama ?></td>
              <td scope="row"><?php echo $Harga ?></td>
              <td scope="row"><?php echo $ID_Kategori ?></td>
              <td scope="row">
                <a href="CRUD.php?op=edit&ID_Produk=<?php echo $ID_Produk ?>"><button type="button" class="btn-warning">Edit</button></a> 

                <a href="CRUD.php?op=del&ID_Produk=<?php echo $ID_Produk ?>" onclick="return confirm('yakin mau delete?')"><button type="button" class="btn-danger">Delete</button></a>
              </td>
            </tr>
            <?php
            }
            ?>    
           </tbody>
          </thead>
        </table>
      </div>
	</center>

</body>
</html>