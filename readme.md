
new project

git init
git add .
git commit -m "commit here"
git branch -M main    //rename master to main
git remote add origin add_repo_link
git push origin main


daily update

1. git add .
2. git commit -m "commit here your changes"
3. git push origin main /
    git pull origin main (if you are working on team)


edit
https://github.com/its-dammar/tms3/blob/main/filemanager/edit.php



codes
<?php require("../inc/header.php"); ?>

<body>

    <header class="container">
        <?php require("../inc/navbar.php"); ?>
    </header>

    <section>
        <div class="container py-5 shadow  my-5">
            <div class="title pb-4">
                <h2> Add User</h2>
            </div>
            <div class="add-btn pb-4">
                <a name="" id="" class="btn btn-primary btn-sm" href="index.php" role="button">Manage users</a>

            </div>

            <?php
            if (isset($_GET['id'])){
                $id=$_GET['id'];

                $select="SELECT *FROM users where id =$id";
                $select_result = mysqli_query($con, $select);

                // fetch single row data
                // $select_data=mysqli_fetch_assoc($select_result);
                $select_data=$select_result->fetch_assoc();     


            }


                if (isset($_POST['save'])) {
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];

                    if ($name != "" && $phone != "" && $address != "" && $email != "" ) {
                        $submit = "UPDATE users SET name='$name', phone='$phone', address='$address', email='$email' where id=$id";
                        $submit_result = mysqli_query($con, $submit);
                        if ($submit_result) {
            ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Data are updated</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    <?php
                            header("Refresh:2; url=index.php");
                        } else {
                    ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Data are not updated</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    <?php
                            header("Refresh:2; url=create.php");
                        }
                    } else {
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>All Fields are required</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

            <?php
                        header("Refresh:2; url=create.php");
                    }
                }

            ?>
            <form class="row" action="#" method="POST" enctype="multipart/form-data">
                <div class="mb-3 col-lg-6 col-md-6">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $select_data['name']; ?>" id="Name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-lg-6 col-md-6">
                    <label for="Phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" name="phone" value="<?php echo $select_data['phone']; ?>" id="Phone" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-lg-6 col-md-6">
                    <label for="Address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="Address" value="<?php echo $select_data['address']; ?>" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-lg-6 col-md-6">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $select_data['email']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary" name="save">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <?php require("../inc/footer.php"); ?>