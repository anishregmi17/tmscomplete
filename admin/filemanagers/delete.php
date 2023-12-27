<?php 

require("../connection/config.php"); 

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $select="SELECT *FROM filemanager where id= $id";
    $result=mysqli_query($con, $select);
    $data=$result->fetch_assoc();
    // $data=mysqli_fetch_assoc($result);

    $row= '../uploads/'.$data['img_link'];
    unlink($row);

    $delete = "DELETE FROM filemanager WHERE id=$id";
    $delete_result =  mysqli_query($con, $delete);

    echo Header("Refresh:0; url=index.php?msg=deleted");
}
?>