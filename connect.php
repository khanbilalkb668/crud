<?php
$con=new mysqli('localhost','root','','crud');
if($con){
    echo ""."\r\n";

}
else{
    die(mysqli_error($con));
}


?>