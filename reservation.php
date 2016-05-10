<?php
$title = 'Movie info';
include 'header.php';

$name = $_GET['name'];
$location = $_GET['location'];
$type = $_GET['type'];
$date = $_GET['date'];
$time = $_GET['time'];
$img =  $_GET['img'];

?>



<div class="wrapper">

    <div  class="content">
        
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
            
     <div class="transbox" ><label class="done">Reservation completed </label></div>

        
       

    </div>



</div>
<div class="clear"></div>


<?php
include 'footer.php';
?>