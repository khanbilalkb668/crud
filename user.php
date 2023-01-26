<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['Restaurant'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $executive=$_POST['executive'];
    $address=$_POST['address'];
    $location=$_POST['location'];

    $sql="insert into crudstablefin(Restaurant,email,mobile,executive,address,location) values('$name','$email','$mobile','$executive','$address','$location')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>CRUD OPERATION</title>
</head>

<body>
<h2 style="color:DodgerBlue;"> WELCOME TO EAZYDINER</h2>

    <div class="container my-5" >
        <form method="post">
            <div class="form-group">
                <label>Restaurant</label>
                <input type="text" class="form-control" 
                    placeholder="Enter your Restaurant" name="Restaurant" autocomplete="on">
                
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" 
                    placeholder="Enter your Email" name="email" autocomplete="on">
                
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" 
                    placeholder="Enter your Mobile number" name="mobile" autocomplete="on">
            </div>
            
            <div class="form-group">
                <label>executive</label>
                <input type="executive" class="form-control" 
                    placeholder="Enter your executive" name="executive" autocomplete="on">
            </div>

            <div class="form-group">
                <label>address</label>
                <input type="text" class="form-control" 
                    placeholder="Enter your address" name="address" autocomplete="on">
            </div>

            <div class="form-group">
                <label>location</label>
                <input type="text" class="form-control" 
                    placeholder="Enter your location " name="location" autocomplete="on">
            </div>


            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>


    </div>
</body>

</html>







