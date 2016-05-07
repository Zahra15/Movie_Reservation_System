<?php
$title = 'search';
include 'header.php';
include 'connect-db.php';

if($_GET['name']!==""){
$name = $_GET['name'];
//$name = mysql_real_escape_string($name);
//echo $name."<br>";

}

if($_GET['location']!==""){
$location = $_GET['location']; 
//echo $location."<br>";
}

if($_GET['date']!==""){
$date = $_GET['date']; 
//echo $date."<br>";
}

if($_GET['time']!==""){
$time = $_GET['time']; 
//echo $time."<br>";
}

if($_GET['type']!==""){
$type = $_GET['type']; 
//echo $type."<br>";
}

   

$query = "SELECT movieID FROM movie WHERE movieName LIKE '%$name%';";

//STEP 5: RUN THE QUERY
$result = mysqli_query($con,$query);
$movies = array();

//STEP 6: RETRIEVE VALUES FROM RESULT
$c =0;
while($row = mysqli_fetch_assoc($result))
{

$movies[$c] = array(
                    'ID' => $row['movieID']
                    );

 $c++;

}

$shows = array();
foreach($movies as $movie){
    $movieid = $movie['ID'];
    $query = "SELECT * FROM showing WHERE movieID = '$movieid';";
    $result = mysqli_query($con,$query);
    $c =0;
    while($row = mysqli_fetch_assoc($result))
    {

    $shows[$c] = array(
                    'location' => $row['location'],
                    'ID' => $row['movie'],
                    'date' => $row['date'],
                    'time' => $row['time']
                    );
                    $c++;
    }

}

?>
        <table>                        
            <?php foreach($movies as $i) {?>
                <tr>
                    <th>
                        <?php echo $i['ID']; ?>
                    </th>
                    <td>
                        <label></label>
                    </td>
                </tr>
            <?php } ?>                                            
        </table>

<table>                        
            <?php foreach($shows as $show) {?>
                <tr>
                    <th>
                       <?php echo $show['location']; ?>
                   </th>
                    <td>
                         <?php echo $show['ID']; ?>
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

<?php 
    include 'footer.php';
?>