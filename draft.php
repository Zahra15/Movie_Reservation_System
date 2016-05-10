<?php

if(isset($_POST['uid'],$_POST['pwd']))
{
    $uname = $_POST['uid'];
    $pwd = md5($_POST['pwd']);

        $query = " SELECT * FROM user WHERE username='$uname' AND password='$pwd'";
        $result = mysqli_query($con, $query);
        if($result)
        {
            if((mysqli_num_rows($result)== 1))
            {
                $_SESSION['admin']=$uname;
                header('Locatio:login.php?status=valid');
            }
            else
            {
                header('Location:login.php?status=invalid');
            }
        }
    
  
        
 }
 
 

?>


 <?php
if (isset($_GET['status'])&& $_GET['status'] == "invalid") {
     ?> <p class="login-error">Wrong username / password please try again</p>
<?php ;} ?>

     
     
           $query = "SELECT * FROM `user` WHERE `username` = '$uname' AND `password` = '$pwd';";
    
    $users = array();
    $c =0;
    $result = mysqli_query($con,$query);
    $n = mysqli_num_rows($result);
    while($row = mysqli_fetch_assoc($result))
    {

    $users[$c] = array(
                    'name' => $row['username'],
                    );
                    $c++;
    }
  
    echo $n;
    echo $c;