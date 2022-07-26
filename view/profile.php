<?php
// perintah untuk mengecek apakah sudah login atau belum
session_start();
if(empty($_SESSION["username"])){
    header("location: login.php");
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="postingan.php">Postingan</a>
                    </li>
                </ul>
                <ul class="navbar-nav float-right">
                    <li class="nav-item">
                    <a class="nav-link" href="../logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="col-md-12 pt-5 d-flex justify-content-center">
        <div class="card">
            <div class="card-header">
                Login
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form">
                    <div class="row g-5 align-items-center">
                        <div class="col-auto">
                            <label for="">username</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="username" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="">password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        
                        <input type="submit" name="" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>