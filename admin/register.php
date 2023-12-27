<?php require("connection/config.php");  ?>


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
                <h4>Admin Register</h4>
            </div>

            <?php

            if (isset($_POST['save'])) {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $password = md5($_POST['password']);

                if ($name != "" && $phone != "" && $email != "" && $password != "") {

                    $query = "SELECT * FROM users WHERE email='$email'";

                    // Execute the query
                    $result = mysqli_query($con, $query);

                    // Check if the query returned any rows
                    if (mysqli_num_rows($result) > 0) {
                        // User with the same username already exists, display an error message
                        echo "<p>Email already taken.</p>";
                        header("Refresh:1");
                    } else {
                        $insert = "INSERT INTO users (name, phone, email, password) 
                        VALUES ('$name','$phone', '$email', '$password')";
                        $result =  mysqli_query($con, $insert);
                        if ($result) {
            ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Data is added</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                            echo Header("Refresh:2");
                        } else {
                        ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Data is not added</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    <?php
                            echo Header("Refresh:2");
                        }
                    }
                } else {
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>All fields are required</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
            <?php
                    echo Header("Refresh:2");
                }
            }
            mysqli_close($con);

            ?>


            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name </label>
                    <input type="text" name="name" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone </label>
                    <input type="tel" name="phone" pattern="[0-9]{10}" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email </label>
                    <input type="email" name="email" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" value="" class="form-control" id="exampleInputPassword1">
                </div>
                <div>
                    <button type="submit" name="save" class="btn btn-primary">Submit</button>
                </div>
                <div class="my-3D">
                    <span>Have a account</span>
                    <a class="text-decoration-none" href="index.php" role="button"> Login Now</a>
                </div>
            </form>


        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>