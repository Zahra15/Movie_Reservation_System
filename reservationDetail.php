<?php
$title = 'reservation details';
include 'header.php';
include 'connect-db.php';
$name = $_GET['name'];
$location = $_GET['location'];
$type = $_GET['type'];
$date = $_GET['date'];
$time = $_GET['time'];
$img = "images/" . $_GET['img'];
$userID = $_SESSION['user'];

    $query="SELECT `picture`,`type` FROM `movie` WHERE `movieName`='inside out'";
    
    $reservation=array();
    $result= mysqli_query($con, $query);
    $c=  mysqli_num_rows($result);
    while ($row = mysqli_fetch_assoc($result)) 
    { 
        $reservation = array(
        "type" => $row['type'],
        "picture" => $row['picture'],
           
       );
    }
    $type=$reservation['type'];
    $img="images/".$reservation['picture'];


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
