<?php

include 'header.php';
include 'connect-db.php'; 

if(isset($_GET['reservationID']))
{

    $id = $_GET['reservationID'];
    $query = "SELECT * FROM reservation WHERE reservationID=$id";
    $result = mysqli_query($con, $query);

    while($row = mysqli_fetch_assoc($result))
    {
        $reservation[$row['reservationID']] = array(
        "movie" => $row['movieID'],
        "location" => $row['reservationLocation'],
        "date"=> $row['reservationDate'],
        "time" => $row['reservationTime']   
       );

    }
}

?>

<div id="content">

<div class="section page">

    <div class="wrapper">


	<div class="reservation-details">

		<h1><span class="id"> <?php echo $reservation['reservationID']; ?></span>
                    <?php echo $reservation['movieID'],$reservation['reservationLocation'],$reservation['reservationDate'],$reservation['reservationTime']; ?></h1>
        
	</div>
    </div>
</div>
</div>

<?php include 'footer.php'; ?>
