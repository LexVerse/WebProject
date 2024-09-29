<?php
    require_once('connection.php');

    if(isset($_POST["submit"]))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $suite = $_POST['suite'];
        $date_arr = $_POST['date_arr'];
        $stay = $_POST['stay'];
    }
    

    $query = "INSERT INTO guest_info (id, name, email, suite, date_arr, stay) VALUES('', '$name', '$email', '$suite', '$date_arr', '$stay')";
    mysqli_query($con, $query);
    echo 
    "<script> alert('Data Entered successfully')</script>";
    header('location:records.php')
    

?>
