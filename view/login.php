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
    <div class="col-md-12 pt-5 d-flex justify-content-center">
        <div class="card">
            <div class="card-header">
                Login
            </div>
            <div class="card-body">
                <form action="../query_login.php" method="POST" class="form">
                    <div class="row g-5 align-items-center">
                        <div class="col-auto">
                            <label for="">username</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="username" class="form-control">
                        </div>
                    </div>
                    <div class="row g-5 align-items-center">
                    <div class="col-auto">
                        <label for="">password</label>
                    </div>
                    
                    <div class="col-auto ">
                        <input type="password" name="password" class="form-control">
                    </div>
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