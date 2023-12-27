<?php require("../inc/header.php"); ?>

<?php require("../inc/navbar.php"); ?>



    <section>
        <div class="container py-5 shadow my-5">
            <div class="title mb-3 text-center">
                <h4>Add new File</h4>
            </div>

            <?php

            if (isset($_POST['save'])) {
                $title = $_POST['title'];
                $description = $_POST['description'];

                $filename=$_FILES['dataFile']['name'];
                $filesize=$_FILES['dataFile']['size'];

                $explode=explode(".", $filename);
                $firstname=strtolower(@$explode[0]);
                $ext=strtolower(@$explode[1]);

                $str=str_replace(" ", "", $firstname);
                $finalname=$str. time().".".$ext;


                if($title!="" && $finalname!=""){
                    if($filesize<=200000){
                        if($ext=="jpg" || $ext=="png" || $ext=="jpeg" || $ext=="mp4" ||$ext=="pdf"){
                            if(move_uploaded_file($_FILES['dataFile']['tmp_name'],"../uploads/".$finalname)){
                                $insert= "INSERT INTO filemanager(title, description, img_link)
                                VALUES('$title', '$description', '$finalname')";
                                $result=mysqli_query($con, $insert);
                                if($result){
                                    echo "File is inserted";
                                }
                                else{
                                    echo "File is not inserted";
                                }
                            }
                            else{
                                echo "file is not uploaded";
                            }
                        }
                        else{
                            echo "file extension does not match";
                        }
                    }
                    else{
                        echo "File size must be lessthan 3 MB";
                    }
                }
                else{
                    echo "Title and image is required";
                }
                
            }
            mysqli_close($con);

            ?>
            <form action="" class="w-75 mx-auto d-sm-block " method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title </label>
                    <input type="text" name="title" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description </label>
                    <input type="text" name="description" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Image </label>
                    <input type="file" name="dataFile" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div>
                    <button type="submit" name="save" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>

   <?php require("../inc/footer.php"); ?>