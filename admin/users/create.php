<?php require("../inc/header.php"); ?>

<?php require("../inc/navbar.php"); ?>



    <section>
        <div class="container py-5 shadow my-5">
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
                        echo Header("Refresh:1; url=index.php");
                    } else {
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Data is not added</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                        echo Header("Refresh:2");
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
            <form action="" class="w-75 mx-auto d-sm-block " method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name </label>
                    <input type="text" name="name" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone </label>
                    <input type="tel" name="phone" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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

   <?php require("../inc/footer.php"); ?>