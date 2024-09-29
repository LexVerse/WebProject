<?php
    require_once('connection.php');

    if(isset($_POST["submit"]))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $POST['password'];
    }
    
    $query = "INSERT INTO user_info (id, name, email, password) VALUES('', '$name', '$email', '$password')";
    mysqli_query($con, $query);
    header('location:records.php')
    

?>




