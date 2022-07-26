<?php
// perintah untuk mengecek apakah sudah login atau belum
require_once('../query_komen_by_post.php');
require_once('../query_posting_by_id.php');
session_start();
if (empty($_SESSION["username"])) {
    header("location: login.php");
}

$posting = $hasil->fetch_assoc();
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

    <div class="container">
        <div class="card">
            <div class="card-header"><?= $posting['user_name'] ?></div>
            <div class="card-body"><?= $posting['postingan'] ?></div>
        </div>
    </div>

    <?php if ($komen->num_rows > 0) : ?>
        <?php while ($data = $komen->fetch_array()) : ?>
            <div class="container pt-3 ps-5">
                <div class="card">
                    <div class="card-header">
                        <span><?= $data['user_name'] ?></span>
                    </div>
                    <div class="card-body">
                        <div class="card-text pb-2">
                            "<?= $data['isi_komentar'] ?>"
                        </div>
                      
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>