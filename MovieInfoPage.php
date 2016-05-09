    <?php
    $title ='Movie info';
    include 'header.php';
    
    $name = $_GET['name'];
    $location = $_GET['location'];
    $type = $_GET['type'];
    $date = $_GET['date'];
    $time = $_GET['time'];
?>
    <div class="wrapper">
    
    <div  class="content">


        <h3> Movie Name: </h3>
            <h4><?php echo $name; ?></h4>
         <h3> Selected Date </h3>
            <h4><?php echo $date; ?></h4>
         <h3> Selected Time</h3>
            <h4><?php echo $time; ?></h4>
         <h3> Movie Type</h3>
            <h4><?php echo $type; ?></h4>
        <h3> Location </h3>
            <h4><?php echo $location; ?></h4>
        
        <button>Make Reservation</button>
        
      </div>
      
        

    </div>
        
    <?php
    
    include 'footer.php';
?>