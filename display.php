<?php 
include 'connect.php'; ?>


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
<div class="container">
<button class="btn btn-primary my-5"><a href="user.php"
class="text-light">Add user</a>
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S-no</th>
      <th scope="col">restaurant</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">executive</th>
      <th scope="col">address</th>
      <th scope="col">location</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql = "select * from crudstablefin";
  $result = mysqli_query($con, $sql);
  if($result){
     while($row=mysqli_fetch_assoc($result)){
          $id = $row['id'];
          $restaurant = $row['restaurant'];
          $email = $row['email'];
          $mobile = $row['mobile'];
          $executive = $row['executive'];
          $address = $row['address'];
          $location = $row['location'];
          echo ' <tr>
          <th scope="row">' . $id . '</th>
          <td>' . $restaurant . '</td>
          <td>' . $email . '</td>
          <td>' . $mobile . '</td>
          <td>' . $executive . '</td>
          <td>' . $address . '</td>
          <td>' . $location . '</td>
          <td>
          <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">update</a></button>
          <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">delete</a></button>



         </td>
          
        </tr>';

     }
  }


  ?> 



 
  </tbody>
</table>



</body>
</html>