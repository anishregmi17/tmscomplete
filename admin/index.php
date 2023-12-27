<!-- index page ma sajanu parne bhaneko suruma database ko congig file connection 
ani post method ko login form yedi user le pailai register account create gareko xa vane -->


<?php require("connection/config.php"); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>

<section>
    <div class="container w-25 py-5 shadow my-5">
        <div class="title mb-3 text-center">
            <h4>Admin Login</h4>
        </div>

        <form action="loginprocess/login.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email </label>
            <input type="email" name="email" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
          <div class="my-3">
            <span>I Haven't any account</span>
          <a class="text-decoration-none" href="register.php" role="button"> Register Now</a>
          </div>
        </form>

    </div>
</section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>