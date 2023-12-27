<?php 

require("../connection/config.php"); 

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = "DELETE FROM users WHERE id=$id";
    $delete_result =  mysqli_query($con, $delete);

    echo Header("Refresh:0; url=index.php?msg=deleted");
}
?>