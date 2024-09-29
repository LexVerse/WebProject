<!DOCTYPE html>
<html lang="en">
<head>
<title>Home Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templates/bootstrap.min.css">
    <link rel="stylesheet" href="templates/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Silver Springs Hotel Room Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Log Out</a>
      </li>
      
      
  </div>
</nav>

<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Welcome</h2>
    </div>
    <div class="container-fluid">
        <div class="row">

    <div class="col-lg-4 colmd-4 col-12">
        <img src="images/wallpaperflare.com_wallpaper (6).jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 colmd-4 col-12">
        <img src="images/oswald-elsaboath-ym_EI-DTS1g-unsplash.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 colmd-4 col-12">
        <img src="images/a15f822b_z.webp" class="img-fluid pb-3">
    </div>
    </div>
    </div>
</section>
<section class="my-4">
  <div class="py-4">
    <h2 class="text-center">Would you like to view records?</h2>
  </div>
  <div class="w-50 m-auto">
    <a href="records.php">
      <button name="submit" class="btn btn-primary">Display Records</button>
    </a>  
  </div>
</section>
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Book a Guest Room</h2>
    </div>
    <div class="w-50 m-auto">
  <form action="book_room.php" method="POST">
    <div class="form-group">
        <label for="name">Full Name</label>
        <input
            type="text"
            class="form-control"
            id="name"
            name="name"
            placeholder="Enter guest's full name"
        />
    <div class="form-group">
      <label for="email">Email Address</label>
      <input
            type="email"
            class="form-control"
            id="email"
            name="email"
            placeholder="Enter guest email"
      />
    </div>
    
    </div>
    <div class="form-group">
        <label for="suite">Suite</label>
        <select name="suite" id="suite" required><br><br>
          <option value="" selected hidden>Choose the suite</option>
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
      />
    </div>
    <div class="form-group">
      


    </div>
    <br />
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
  <br><br>
  

        </div>

</section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">

</body>
</html>



