<?php
$title='add user';
include 'connect-db.php';

        
        if(isset($_POST['firstName'])){
            $_firstName=$_POST['firstName'];
        }
        if(isset($_POST['lastName'])){
            $_lastName=$_POST['lastName'];
        }
        if(isset($_POST['nationality'])){
            $_nationality=$_POST['nationality'];
        }
        if(isset($_POST['email'])){
            $_email=$_POST['email'];
        }
        if(isset($_POST['phoneNumber'])){
            $_phoneNumber=$_POST['phoneNumber'];
        }
        if(isset($_POST['photo'])){
            $_photo=$_POST['photo'];
        }
        if(isset($_POST['username'])){
            $_username=$_POST['username'];
        }
        if(isset($_POST['password'])){
            $_password=$_POST['password'];
        }
        if(isset($_POST['cardType'])){
            $_cardType=$_POST['cardType'];
        }
        if(isset($_POST['nameOnCard'])){
            $_nameOnCard=$_POST['nameOnCard'];
        }
        if(isset($_POST['cardNumber'])){
            $_cardNumber=$_POST['cardNumber'];
        }
        if(isset($_POST['expiryMonth'])){
            $_expiryMonth=$_POST['expiryMonth'];
        }
        if(isset($_POST['expiryYear'])){
            $_expiryYear=$_POST['expiryYear'];
        }
        if(isset($_POST['where'])){
            $_where=$_POST['where'];
        }
        
        
        
        $sql="INSERT INTO `user`(`username`, `password`, `firstName`, `lastName`, `nationality`, `email`, `phonenumber`, `photo`, `cardType`, `nameOnCard`, `cardNumber`, `expiryMonth`, `expiryYear`, `where`)"
                . " VALUES ('$_username','$_password','$_firstName','$_lastName','$_nationality','$_email','$_phoneNumber','$_photo','$_cardType','$_nameOnCard','$_cardNumber','$_expiryMonth','$_expiryYear','$_where')";
        if(mysqli_query($con, $sql))
        {
            //echo 'New recored created successfully';
            //header('location:add-thanks.php');
            header('location:add-user.php');
            exit();
        }
        else 
        {
            echo 'Error:'.$sql.'<br>'.mysqli_error($con);
        }

        /*if(mysqli_query($con, $sql))
        {$res=1;
            if($res==1)
            {
                $status="done";
            }
        }
        else 
        {
            $status="not done";
            echo 'Error:'.$sql.'<br>'.mysqli_error($con);
        }*/
?>
        