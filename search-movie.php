
<?php
$title = 'search';
include 'header.php';
include 'connect-db.php';

$name = "";
$location = "";
$date = "";
$time = "";
$type = "";

if ($_GET['name'] !== "") {
    $name = $_GET['name'];
//$name = mysql_real_escape_string($name);
//echo $name."<br>";
}

if ($_GET['location'] !== "") {
    $location = $_GET['location'];
//echo $location."<br>";
}

if ($_GET['date'] !== "") {
    $date = $_GET['date'];
//echo $date."<br>";
}

if ($_GET['time'] !== "") {
    $time = $_GET['time'];
//echo $time."<br>";
}

if ($_GET['type'] !== "") {
    $type = $_GET['type'];
//echo $type."<br>";
}


$query = " SELECT `locationName`, `movieName`, `date`, `time`, `type`
FROM `showing`
INNER JOIN `movie` on showing.movieID = movie.movieID
INNER JOIN `location` on showing.locationID = location.locationID ";

$query1 = "WHERE ";
if ($name !== "") {
    $query1 = $query1."movieName LIKE '%$name%' ";
    if($type !== ""){
        $query1 = $query1."AND type = '$type' ";
    }
    if($location !== ""){
        $query1 = $query1."AND locationName = '$location' ";
    }
    if($date !== ""){
        $query1 = $query1."AND date = '$date' ";
    }
    if($time !== ""){
        $query1 = $query1."AND time = '$time' ";
    }
}
 else {
     if($type !== "")
     {
        $query1 = $query1."type = '$type' ";
             if($location !== ""){
                 $query1 = $query1."AND locationName = '$location' ";
             }
         if($date !== ""){
             $query1 = $query1."AND date = '$date' ";
         }
        if($time !== ""){
             $query1 = $query1."AND time = '$time' ";
         }
     }
     else
     {
         if($location !== ""){
             $query1 = $query1."locationName = '$location' ";
             if($date !== ""){
                $query1 = $query1."AND date = '$date' ";
            }
            if($time !== ""){
                 $query1 = $query1."AND time = '$time' ";
            }
         }
         else
         {
             if ($date !== ""){
                  $query1 = $query1."date = '$date' ";
                  if($time !== ""){
                 $query1 = $query1."AND time = '$time' ";
                 }
             }
             else
                 if($time !== ""){
                      $query1 = $query1."time = '$time' ";
                 }
         }
     }
}


$query = $query.$query1;
$query = $query . ";";

//*********************************** 
$shows = array();
  $c =0;

    

    $result = mysqli_query($con,$query);
  
    while($row = mysqli_fetch_assoc($result))
    {

    $shows[$c] = array(
                    'location' => $row['locationName'],
                    'movie' => $row['movieName'],
                    'date' => $row['date'],
                    'time' => $row['time'],
                    'type' => $row['type']
                    );
                    $c++;
    }

 
//***********************************
?>


<div class="wrapper">
    <div class="content">
        <label id="s_result"><?php echo $c."   results"; ?></label>
<table class="Tresult" >                        
    <tr>
        <th>Location</th>
        <th>Movie title</th>
        <th>Date</th>
        <th>Time</th>
    </tr>
<?php foreach ($shows as $show) { ?>
        <tr>
            <td>
               <?php echo$show['location']; ?>
            </td>
            <td>
                <a id = "Slink"  href="
                   <?php echo'MovieInfoPage.php?name='.$show['movie'].'&location='.$show['location'].'&type='.$show['type'].'&date='.$show['date'].'&time='.$show['time'] 
                   ?>" class="Slink">
                    <?php echo $show['movie']; ?> 
                </a>
            </td>
            <td>
                <?php echo $show['date']; ?>
            </td>
            <td>
                <?php echo $show['time']; ?>
            </td>
        </tr>
    <?php } ?>                                            
</table> 

    </div>
</div>


<?php
include 'footer.php';
?>