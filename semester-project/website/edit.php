<?php
    require_once('connection.php');
    $id = $_GET['editid'];
    $query = "SELECT * FROM guest_info WHERE id = $id";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $suite = $row['suite'];
    $date_arr = $row['date_arr'];
    $stay = $row['stay'];

    if(isset($_POST["submit"]))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $suite = $_POST['suite'];
        $date_arr = $_POST['date_arr'];
        $stay = $_POST['stay'];
        $query = "UPDATE guest_info SET id = $id, name = '$name', email = '$email', suite = '$suite', date_arr = '$date_arr', stay = '$stay'
                WHERE id = $id";
        $result = mysqli_query($con, $query);
        if($result){
            header('location:records.php');
        }
        else{
            die("Failed to complete the task: ");
        }


    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templates/bootstrap.min.css">
    <title>Edit</title>
</head>
<body>
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Edit Record</h2>
    </div>
    <div class="w-50 m-auto">
        <form method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Enter guest's full name"
                    value=<?php echo $name ;?>
                />
            <div class="form-group">
            <label for="email">Email Address</label>
            <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter guest email"
                    value=<?php echo $email ;?>

            />
            </div>
            
            </div>
            <div class="form-group">
                <label for="suite">Suite</label>
                <select name="suite" id="suite" required><br><br>
                <option value="<?php echo $suite ;?>" selected><?php echo $suite ;?></option>
                <option value="" hidden>Choose the suite</option>
                <option value="Standard Suite">Standard Suite</option>
                <option value="Honeymoon Suite">Honeymoon Suite</option>
                <option value="Presidential Suite">Presidential Suite</option>
                </select>
            </div>

            
            <div class="form-group">
            <label for="date_arr">Date Of Arrival</label>
            <input
                type="date"
                class="form-control"
                id="date_arr"
                name="date_arr"
                placeholder="Enter the guest's date of arrival"
                value=<?php echo $date_arr ;?>
            />
            </div>


            <div class="form-group">
            <label for="stay">Duration Of Stay</label>
            <input
                type="text"
                class="form-control"
                id="stay"
                name="stay"
                placeholder="Enter number of days"
                value=<?php echo $stay ;?>
            />
            </div>
            <div class="form-group">
            


            </div>
            <br />
            <button type="submit" name="submit" class="btn btn-primary">Edit</button>
        </form>

    </div>

</section>

    
</body>
</html>



