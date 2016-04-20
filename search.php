    <?php
    $title ='search';
    include 'header.php';
?>
<div class="wrapper">
    <div id="content">
        <label>Name: </label>
        <input type="search" name="search">
        <a href="MovieInfoPage.html"><button value="Search">Search</button> </a>
      
        <div id="filter">
        <label>Filters<br></label><br>
        <label for="loc">Location</label>
        <select id ="loc" name="location">
            <option value="riyadh">Riyadh</option>
            <option value="jeddah">Jeddah</option>
            <option value="dammam">Dammam</option>
            <option value="dammam">Khobar</option>
            <option value="hofuf">Hofuf</option>
        </select><br>
        <label>Date </label><input type="date"/>
          <br>  
        <label for="tim">Time</label>
        <select id="tim" name="time">
            <option value="0400">04:00PM</option>
            <option value="0615">06:15PM</option>
            <option value="0830">08:30PM</option>
            <option value="1045">10:45PM</option>
        </select>
        <br>
        <label for="typ">Type</label>
        <select id="typ" name="type">
            <option value="action">Action</option>
            <option value="comedy">Comedy</option>
            <option value="drama">Drama</option>
            <option value="sciencefiction">Science Fiction</option>
        </select>
           </div>
        </div>
</div>        
<?php
    
    include 'footer.php';
?>