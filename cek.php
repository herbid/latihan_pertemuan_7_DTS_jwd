<?php
 $username = $_POST['username'];
 $password = $_POST['password'];


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nama User</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/></head>
<body>
<div class="container-fluid">

<div class="row justify-content-md-center" style="margin-top: 50px">
    <div class="col col-md-6">
    <div class="card">
      <div class="row" style="margin-top: 10px">
        <div class="col-md-12">
        <h5 class="card-header">DIGITAL TALENT  | Form Login </h5>
          <div class="alert alert-none" role="alert">
<table class="table table-bordered table-hover">
	<tr>
		<th>Username</th>
		<th>Password</th>
	
		<tbody>
			<td><?=$username?></td>
			<td><?=$password?></td>
		</tbody>
	</tr>
</table>
</div></div></div></div></div></div>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>