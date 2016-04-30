<?php


$title="Connect database";



//step1: define variables
$host='localhost';
$user='root';
$password='';
$db='movie_reservation_system';

//step 2: connect to the db
$con=  mysqli_connect($host, $user, $password, $db);
//step 3: check for errors
if(mysqli_connect_errno($con))
{
    echo mysqli_connect_errno();
}
else{
    echo 'connected to database';
}
?>



