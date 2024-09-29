<?php 

require_once('connection.php');
$query = "SELECT * FROM guest_info";
$result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templates/bootstrap.min.css">
    <title>Room Records</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Room Records</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td> User ID</td>
                                <td> Name</td>
                                <td> Email</td>
                                <td> Suite</td>
                                <td> Date of Arrival</td>
                                <td> Period Of Stay</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <?php 
                                
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                ?>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['suite'];?></td>
                                <td><?php echo $row['date_arr'];?></td>
                                <td><?php echo $row['stay'];?></td>
                                <td><a href="edit.php?editid=<?php echo $row['id'];?>" button class="btn btn-primary">Edit</td>
                                <td><a href="delete.php?deleteid=<?php echo $row['id'];?>" button class="btn btn-danger">Delete</td>
                            </tr>

                                <?php
                                    }
                                
                                ?>
                            
                        </table>
                        <a href="index.php">
                            <button name="submit" class="btn btn-primary">Return to Home Page</button>
                        </a>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>


