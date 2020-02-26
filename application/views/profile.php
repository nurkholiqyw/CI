<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo $judul; ?>
	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		table{
			/*padding: 5px 50px 10px 50px;
			margin: 15px 50px 0px 50px;*/
			box-shadow: 0px 10px 20px 0px #D1D1D1;
		}

		body{
			background-color: #9d9d9d; 

		}
	</style> 
</head>
<body>
	<br>
	<h1 align="center">Biodata Saya</h1>
	<br>
	<hr>
	<br>
<div class="container">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"></th>
      <th scope="col"><?php echo $atas; ?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Nama</th>
      <td><?php echo $nama; ?></td>
    </tr>
    <tr>
      <th scope="row">Alamat</th>
      <td><?php echo $alamat; ?></td>
    </tr>
    <tr>
      <th scope="row">Jenis Kelamin</th>
      <td><?php echo $jenis; ?></td>
    </tr>
    <tr>
      <th scope="row">Asal Sekolah</th>
      <td><?php echo $sekolah; ?></td>
    </tr>
  </tbody>
</table>
</div>

</body>
</html>