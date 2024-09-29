<?php
require_once('connection.php');
if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    $query = "DELETE FROM guest_info WHERE id=$id";
    $result = mysqli_query($con, $query);
    if($result){
        header('location:records.php');
    }
    else{
        die("Failed to connect with MySQL: ");
    }
}


?>