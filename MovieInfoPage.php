    <?php
    $title ='Movie info';
    include 'header.php';
?>
    <div class="wrapper">
    
    <div  class="content">


        <h3> Movie Name </h3>
        <input type= "text"> <br>
         <h3> Selected Date </h3>
        <input type= "date"> <br>
         <h3> Selected Time</h3>
        <select>
            <option value="morining">Morning</option>
            <option value="afternoon">Afternoon</option>
            <option value="evening">Evening</option>
            <option value="night">Night</option>
        </select> <br>
         <h3> Movie Type</h3>
        <select>
            <option value="action">Action</option>
            <option value="romance">Romance</option>
            <option value="fiction">Fiction</option>
            <option value="animated">Animated</option>
        </select> <br>
        <h3> Location </h3>
         <select>
            <option value="riyadh">Riyadh</option>
            <option value="jeddah">Jeddah</option>
            <option value="dammam">Dammam</option>
            <option value="khobar">Khobar</option>
            <option value="hofuf">Hofuf</option>
        </select> <br>
        
        <button>Make Reservation</button>
        
      </div>
      
        

    </div>
        
    <?php
    
    include 'footer.php';
?>