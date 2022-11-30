<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";

}else{
    echo "No Connection";

}

mysqli_select_db($con, 'websitedatabase');

$user= $_POST['user'];
$email= $_POST['email'];
$number= $_POST['number'];

$query = " insert into newuserinfo (user, email, number) values ('$user','$email','$number')";
mysqli_query($con,$query);


?>
