<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<title>Hello, world!</title>
</head>
<body>


<!-- {:<h1>Hello, world!</h1>} -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Link</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Dropdown
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
</li>
</ul>
<form class="form-inline my-2 my-lg-0">
<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
</div>
</nav>


<legend></legend>

<form>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Name</label>
<div class="col-sm-10">
<input type="name" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your name " name="txtname">
</div>
</div>

<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">age</label>
<div class="col-sm-10">
<input type="age" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your age  " name="txtage">
</div>
</div>


<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">address</label>
<div class="col-sm-10">
<input type="address" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your address " name="txtadd">
</div>
</div>


<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Email</label>
<div class="col-sm-10">
<input type="Email" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email " name="txtEmail">
</div>
</div>

<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">password</label>
<div class="col-sm-10">
<input type="password" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your password" name="txtpass">
<br>
<br>
<br>
<!-- <input type="submit" class="btn"> -->
<button class="btn btn-primary" type="submit">submit</button>


</div>
</div>
</form>


<?php
$name=$_POST['txtname'];
$age=$_POST['txtage'];
$add=$_POST['txtadd'];
$email=$_POST['txtemail'];
$pass=$_POST['txtpass'];

$conn = mysqli_connect("localhost","root","","formhandling");

if(!$conn){
    echo "connection refuse";
}
$query = "insert into userdetails values(null,'$name',$age,'$add','$email')";
$q= mysqli_query ($conn,$query);

if(!$q){
    echo "query not exectired";
}

else{
    echo "query sucess";
}
?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>