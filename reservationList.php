<?php

    include 'header.php';
    include 'connect-db.php';
    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
    {
        echo "Welcome to reservations page, " . $_SESSION['username'] . "!";
    }   
    else {
        echo "Please log in first to see this page.";
    }
    $query = 'SELECT * FROM `reservation` WHERE `username`="$_SESSION["username"]"';
    $result= mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($result)) 
    { 
        $reservation[$row['reservationID']] = array(
        "movie" => $row['movieID'],
        "location" => $row['reservationLocation'],
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
                <a href="item.php?id=<?php echo  $i['ID']; ?>">                
                    <p><?php echo $i['movie'], $i['location'],$i['date'],$i['time']; ?>"</p>
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
  
