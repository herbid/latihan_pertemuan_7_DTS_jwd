
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <title>Form Login </title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>

</head>
<body>
<div class="container-fluid">

    <div class="row justify-content-md-center" style="margin-top: 50px">
        <div class="col col-md-6">
        <div class="card">
  <h5 class="card-header">DIGITAL TALENT  | Form Login </h5>
          <div class="alert alert-success" role="alert">
        <form action="cek.php" method="post">
     <br>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="username" aria-describedby="emailHelp" name="username" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>