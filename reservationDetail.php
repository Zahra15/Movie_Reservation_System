<?php
$title = 'reservation details';
include 'header.php';
include 'connect-db.php';
$name = $_GET['movie'];
$location = $_GET['location'];
$type = $_GET['type'];
$date = $_GET['date'];
$time = $_GET['time'];
$img = "images/" . $_GET['img'];
$userID = $_SESSION['user'];
 if(isset($_POST['reservationID'])){
    $query="INSERT INTO `reservation`( `username`, `movieName`, `Location`, `reservationDate`, `reservationTime`) "
            ."VALUES ('$userID' , '$name' , '$location' , '$date' , '$time');";
    echo $query;
   if (mysqli_query($con, $query)) {
    header("location:reservation.php?name=".$name."&location=".$location."&type=".$type."&date=".$date."&time=".$time."&img=".$img."&status=done");
    } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}
}

?>



<div class="wrapper">

    <div  class="content">
        <form name="reservationForm" method="POST" onsubmit=" return validate();">
            <img class = "infoP" src="<?php echo $img; ?>" alt="<?php echo $name; ?>">

            <h3 class="infoP"> Movie Name: </h3> <br>
            <label class="infoP"><?php echo $name; ?></label> <br>
            <h3 class="infoP"> Selected Date: </h3> <br>
            <label class="infoP"><?php echo $date; ?></label> <br>
            <h3 class="infoP"> Selected Time:</h3> <br>
            <label class="infoP"><?php echo $time; ?></label> <br>
            <h3 class="infoP"> Movie Type:</h3> <br>
            <label class="infoP"><?php echo $type; ?></label> <br>
            <h3 class="infoP"> Location: </h3> <br>
            <label class="infoP"><?php echo $location; ?></label> <br>

            <br>
        </form>
        <span class="error" id = "loginSpan">you need to login first!</span>

       

    </div>



</div>
<div class="clear"></div>

<script>
    function validate() {
        
        var spanLogin = document.getElementById("loginSpan");
       
        
        
       <?php if (!isset($_SESSION['user'])) { ?>
               
            spanLogin.setAttribute("style", "visibility:visible");
           
            error = 1;
       <?php }
        else
        { ?>
                
            spanLogin.setAttribute("style", "visibility:hidden");
           
            
            error = 0;
       <?php } ?>


        if (error == 0) {
            
            return true;

        }
        else {
            
            return false;
            
        }

    }

</script>

<?php
include 'footer.php';
