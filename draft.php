<?php
if (isset($_POST['uid'], $_POST['pwd'])) {
    $uname = $_POST['uid'];
    $pwd = md5($_POST['pwd']);

    $query = " SELECT * FROM user WHERE username='$uname' AND password='$pwd'";
    $result = mysqli_query($con, $query);
    if ($result) {
        if ((mysqli_num_rows($result) == 1)) {
            $_SESSION['admin'] = $uname;
            header('Locatio:login.php?status=valid');
        } else {
            header('Location:login.php?status=invalid');
        }
    }
}
?>


<?php
if (isset($_GET['status']) && $_GET['status'] == "invalid") {
    ?> <p class="login-error">Wrong username / password please try again</p>
    <?php
} ?>



<?php 
if(isset($_SESSION['user'])){
    echo '<li class="navItem" id="loginoutP"><a href="#"> Logout </a></li>';
}else{
    if($title == 'login'){
        echo '<li class="navItem" id="loginP"><a class ="active" href="login.php"> Login </a></li>';  
        
    }else{
        echo '<li class="navItem" id="loginP"><a href="login.php"> Login </a></li>';
    }
    
}

?>

    
    <?php if(isset($_SESSION['user'])) {?> 
                          <li class="navItem" id="loginoutP"><a href="#"> Logout </a></li>
                          <?php}else{?>     <!--                                                                                      
                     --><?php if ($title == 'login'){?><li class="navItem" id="loginP"><a class ="active" href="login.php"> Login </a></li>
                          <?php } else {?> <li class="navItem" id="loginP"><a href="login.php"> Login </a></li><?php } }?>

                          
                          
    <ul class="nav nav-tabs">
    <li class="active"><a href="#">Home</a></li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1 <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#">Submenu 1-1</a></li>
        <li><a href="#">Submenu 1-2</a></li>
        <li><a href="#">Submenu 1-3</a></li>                        
      </ul>
    </li>
    <li><a href="#">Menu 2</a></li>
    <li><a href="#">Menu 3</a></li>
  </ul>