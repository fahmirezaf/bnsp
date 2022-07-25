<?php
// perintah untuk mengecek apakah sudah login atau belum
session_start();
if (empty($_SESSION["username"])) {
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
    <div class="container pt-2">
        <form action="../query_insert_post.php" method="POST" class="form">
            <div class="form-group">
                <label for="">Username</label>
                <textarea rows="4" cols="80" name="postingan" class="form-control" placeholder="Postingan Anda"></textarea>
            </div>
            <div class="form-group mt-2 float-end">
                <input type="submit" value="POST" class="btn btn-success">
            </div>
        </form>
    </div>
    <div class="container pt-5">
        <form action="/action_page.php">
            <label for="searchpostingan">Search:</label>
            <input type="search" id="searchpostingan" name="searchpostingan">
        </form>

        <!-- <form action="" method="" class="form py-3">
            <div class="form-group">
                <label for="">Username</label>
                <a href="url" class="float-end px-2">Hapus</a>
                <a href="url" class="float-end pb-2"> Ubah</a>
                <br>
                <textarea rows="4" cols="80" name="comment" class="form-control" placeholder="Leave a comment here"></textarea>
            </div>
            <div class="form-group mt-2">


            </div>
        </form> -->
    </div>

    <div class="container pt-5">
        <div class="card">
            <!-- LOOPING -->
            <div class="card-header">
                <span>Pengguna</span>
                <span class="float-end">Waktu</span>
            </div>
            <div class="card-body">
                <div class="card-text">
                    Konten
                </div>
                <a href="" class="card-link">Jumlah Komentar</a>
                <a href="" class="card-link">Edit</a>
                <a href="" class="card-link">Hapus</a>
                <a href="" class="card-link">Balas</a>
            </div>
            <!-- END LOOP YOU -->
        </div>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>