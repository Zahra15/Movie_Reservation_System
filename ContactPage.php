<?php
$title = 'Contact us';
include 'header.php';
include 'connect-db.php';

if(isset($_POST['send']))
{
    
    if(isset($_POST['userName'],$_POST['email'],$_POST['textArea']))
    {
        
       $uName= $_POST['username'];
       $mail= $_POST['email'];
       $cmnt= $_POST['textArea'];
       
       $sql="INSERT INTO contact (name,email,comment) VALUES ('$uName','$mail','$cmnt')";
       
         if(mysqli_query($con, $sql))
        {
         
                header('Location:Thanks.php');
            exit();
        }
        else 
        {
            echo 'Error:'.$sql.'<br>'.mysqli_error($con);
        }

       
                
    
    }
    
}
?>  

    
<div class="wrapper">
    <div class="content">
        
        <form id="Contact" name="Contact" onsubmit="return validate();" method="POST" >
     <fieldset>
         <legend>Contact Us</legend>
        <h3> Name:</h3>
         <input type= text name="userName" id="uName">
         <span class="error" >Enter your name please!</span>                        
        <br>
       <h3> Email: </h3>
         <input type=email name="email" id="email">
        <span class="error" >Email Address is Required!</span> 
        <br>
         <h3> Comment:</h3><br>
        <textarea rows="10" cols="50" id="textArea" name="textArea"></textarea>
     <br>
        <span class="error" >Enter Your Message Here!</span> <br>
          <br>
     </fieldset>
 

        <div id="clear2"></div>
        <button  value="Submit" name="send">Send! </button>   
        
        </form>   
     </div>
        
</div>
        </div>
    
    
     <script>
            function validate()
            {        var error; 
                     
                    var spans = document.getElementsByTagName("span");
            
                    var box1 =document.getElementById("uName");
             
                    var box2 =document.getElementById("email");
                    var box3 =document.getElementById("textArea");
                    
             
                     var uName = document.Contact.userName.value;
             
                     if(uName=="")
                     {
              spans[0].setAttribute("style","visibility:visible");
                        box1.style.borderColor="red";
                         error=1;
                                 
                                   
                    }
                    else
                       {
                        
                           spans[0].setAttribute("style","visibility:hidden"); 
                           box1.style.borderColor="grey";
                        error=0;
                        }
             
             
             
                var email = document.Contact.email.value;
             
             
                     if(email=="")
                     {
              spans[1].setAttribute("style","visibility:visible");
                        box2.style.borderColor="red";
                         error=1;
                                 
                                   
                    }
                    else
                       {
                        
                           spans[1].setAttribute("style","visibility:hidden"); 
                           box2.style.borderColor="grey";
                        error=0;
                        }
             
             
             var textarea = document.Contact.textArea.value;
             
                     if(textarea=="")
                     {
              spans[2].setAttribute("style","visibility:visible");
                        box3.style.borderColor="red";
                         error=1;
                                 
                                   
                    }
                    else
                       {
                        
                           spans[2].setAttribute("style","visibility:hidden"); 
                           box3.style.borderColor="grey";
                        error=0;
                        }


                     if(error==0)
                       
                      return true;
                      
                    else
                       return false;

                   
                    
                    

            }




        </script>
        
<?php

include 'footer.php';
?>  