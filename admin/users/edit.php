<?php require("../inc/header.php"); ?>

<?php require("../inc/navbar.php"); ?>



<section>
    <div class="container w-25 py-5 shadow my-5">
        <div class="title mb-3 text-center">
            <h4>Edit Users</h4>
        </div>

        <?php

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $select = "SELECT *FROM users WHERE id=$id";
            $select_result =  mysqli_query($con, $select);
            $data=mysqli_fetch_assoc($select_result);
        }

        if (isset($_POST['edit'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];

            if ($name != "" && $phone != "" && $email != "") {
                $update = "UPDATE users SET name='$name', phone='$phone', email='$email' WHERE id=$id";
                $result =  mysqli_query($con, $update);
                if ($result) {
        ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Data is Updated</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                    echo Header("Refresh:2; url=index.php");
                } else {
                ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Data is not Updated</strong>
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
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name </label>
                <input type="text" name="name" value="<?php echo $data['name']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone </label>
                <input type="tel" name="phone" value="<?php echo $data['phone']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" name="email" value="<?php echo $data['email']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <button type="submit" name="edit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</section>

<?php require("../inc/footer.php"); ?>