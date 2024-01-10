za<?php require("../inc/header.php"); ?>

<?php require("../inc/navbar.php"); ?>



<section>
    <div class="container w-25 py-5 shadow my-5">
        <div class="title mb-3 text-center">
            <h4>Edit Users</h4>
        </div>
        
        <a class="btn btn-primary btn-sm my-4" href="index.php" role="button"> < </a>
        <?php

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $select = "SELECT *FROM users WHERE id=$id";
            $select_result =  mysqli_query($con, $select);
            $data=mysqli_fetch_assoc($select_result);
        }
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name </label>
                <input type="text" readonly name="name" value="<?php echo $data['name']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone </label>
                <input type="tel" readonly name="phone" value="<?php echo $data['phone']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" readonly name="email" value="<?php echo $data['email']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
           
        </form>
    </div>
</section>

<?php require("../inc/footer.php"); ?>