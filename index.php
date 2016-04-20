<?php
    $title ='Movies';
    include 'header.php';
?>
    
  <!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"/> -->
        
   <div class="wrapper">
   <div id="body">
        
        
        <div id="slid">
            <img class="mySlides w3-animate-fading" src="images/shawshank-list.jpg" alt="shawshank" style="width:300px">
            <img class="mySlides w3-animate-fading" src="images/mad-max-fury-road-poster2.jpg" alt="mad max fury road" style="width:300px">
            <img class="mySlides w3-animate-fading" src="images/The_Danish_Girl_(film)_poster.jpg" alt="The Danish Girl" style="width:300px">
            <img class="mySlides w3-animate-fading" src="images/Revenant.jpg" alt="Revenant" style="width:300px">


            <script>
                var myIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";  
                    }
                    myIndex++;
                    if (myIndex > x.length) {myIndex = 1}    
                    x[myIndex-1].style.display = "block";  
                    setTimeout(carousel, 8000);    
                    }
            </script>
     </div>        

  
        <div id="clear1"></div>

        </div>
       </div>
        
<?php
    include 'footer.php';
?>    