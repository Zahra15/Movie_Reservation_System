   
<?php

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
  $c =0;
foreach($movies as $movie){
    $movieid = $movie['ID'];
    $query = "SELECT * FROM showing WHERE movieID = '$movieid';";
    $result = mysqli_query($con,$query);
  
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
