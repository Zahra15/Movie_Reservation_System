<?php

    $title = 'reservations list';
    include 'header.php';
    include 'connect-db.php';
    
    if (isset($_SESSION['user'])== true) 
    {
        echo "Welcome to reservations page, " . $_SESSION['user'] . "!";
    }   
    else {
        echo "Please log in first to see this page.";
    }
    $sessionUser=$_SESSION['user'];
    $query = "SELECT * FROM reservation WHERE username ='$sessionUser';";
    
    $result= mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($result)) 
    { 
        $reservation[$row['reservationID']] = array(
        "movie" => $row['movieName'],
        "location" => $row['Location'],
        "date"=> $row['reservationDate'],
        "time" => $row['reservationTime']   
       );
    }
?>
<div id="content">

<div class="page section">
    <div class="wrapper">
        <h1>your reservations list</h1>
        <ul class="reservations">
            <?php foreach($reservation as $i) {?>
           <li>
               <a href="reservationDetail.php?id=
                   <?php echo  $i['reservationID']; ?>">                
                    <p><?php echo $i['movie']," in ", $i['location']," on ",$i['date']," at ",$i['time']; ?>"</p>
                </a>
            </li>
            <?php } ?>
            
        </ul> 
        
    </div>    
 </div>
</div>
<?php
include 'footer.php';
?>
  
