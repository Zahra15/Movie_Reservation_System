<?php

    $title = 'reservations list';
    include 'header.php';
    include 'connect-db.php';
    
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

<div class="wrapper">
    <div class="content">
        
        <h2>Your Reservations List</h2>
        <table class="Tresult" >                        
    <tr>
        <th>Location</th>
        <th>Movie title</th>
        <th>Date</th>
        <th>Time</th>
    </tr>
<?php foreach ($reservation as $i) { ?>
        <tr>
            <td>
               <?php echo$i['location']; ?>
            </td>
            <td>
                <a id = "Slink" style="color:black;" href="
                   <?php echo'reservationDetail.php?name='.$i['movie'].'&location='.$i['location'].'&type=&date='.$i['date'].'&time='.$i['time'].'&img=' 
                   ?>" class="Slink">
                    <?php echo $i['movie']; ?> 
                </a>
            </td>
            <td>
                <?php echo $i['date']; ?>
            </td>
            <td>
                <?php echo $i['time']; ?>
            </td>
        </tr>
    <?php } ?>                                            
</table>
         
        
    </div>    
 </div>
</div>
<?php
include 'footer.php';
?>
  
