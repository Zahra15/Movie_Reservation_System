    <?php
    $title ='search';
    include 'header.php';
?>

<div class="wrapper">
    <div class="content">
        <form id="searchForm" name="searchForm"  method="post" action="search.php?go"  onsubmit=“return validate();” >    
         
        <label>Name: </label>
        <input type="search" name="search">
       
      
        <div id="filter">
        <label>Filters<br></label><br>
        <label for="loc">Location</label>
        <select id ="loc" name="location">
            <option value="">---</option>
            <option value="riyadh">Riyadh</option>
            <option value="jeddah">Jeddah</option>
            <option value="dammam">Dammam</option>
            <option value="dammam">Khobar</option>
            <option value="hofuf">Hofuf</option>
        </select><br>
        <label>Date </label><input type="date" name="date"/>
          <br>  
        <label for="tim">Time</label>
        <select id="tim" name="time">
            <option value="">---</option>
            <option value="1600">04:00PM</option>
            <option value="1815">06:15PM</option>
            <option value="0830">08:30PM</option>
            <option value="1045">10:45PM</option>
        </select>
        <br>
        <label for="typ">Type</label>
        <select id="typ" name="type">
            <option value="">---</option>
            <option value="action">Action</option>
            <option value="comedy">Comedy</option>
            <option value="drama">Drama</option>
            <option value="sciencefiction">Science Fiction</option>
        </select>
        <br>
        <button type="button" value="Submit" onclick="validate();">Search</button>
        <span class="error">Please enter some values!</span>
           </div>
    </form>    
    </div>
</div>   
<?php
   if(isset($_POST['submit']))
   {
       if(isset($_GET['go'])){
           $Mname = $_POST[search];
           $sql = "SELECT * From movie WHERE movieName LIKE '% " . $Mname . " %' ";
           $result=mysql_query($sql);
           while($row=mysql_fetch_array($result)){ 
	          $Mid  =$row['movieID']; 
                  $mname = $row['movieName'];

	  //-display the result of the array 
	  echo "<ul>\n"; 
	  echo "<li>"   .$Mid . " " .$mname  .  "</li>\n"; 
	  echo "</ul>"; 
	  } 
                  
       }
   }

?>

<script>
           function validate(){
           var error; 
           var spans = document.getElementsByTagName("span");
           
            var mName = document.searchForm.search.value;
            var sLocation = document.searchForm.location.value;
            var sDate = document.searchForm.date.value;
            var sTime = document.searchForm.time.value;
            var sType = document.searchForm.type.value;
             
                     if(mName =="" && sLocation =="" && sDate =="" && sTime =="" && sType =="")
                     {
                       
                                      spans[0].setAttribute("style","visibility:visible");
                                      error=1;
                     }
                    else
                       {
                        
                           spans[0].setAttribute("style","visibility:hidden"); 
                            error=0;
                        }
                        
             if(error==0){
                      return true;
                      document.searchForm.submit();
                        }
                    else
                       return false;           
    }
</script>
<?php
    
    include 'footer.php';
?>