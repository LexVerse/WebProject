 <?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    require_once('connection.php');
    $sql= "SELECT * FROM user_info WHERE email = '$email' AND password = '$password' ";
    $result = mysqli_query($con,$sql);
    $check = mysqli_fetch_array($result);
    if(isset($check)){
        header('location:index.php');
    }
    else{
        echo "<h1> Login failed. Invalid username or password.</h1>"; 
    }
}
?>


