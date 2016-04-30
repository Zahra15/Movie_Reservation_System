    <?php
    $title ='login';
    include 'header.php';
?>
<div class="wrapper">
    <div class="content">
    
    
    <form id="Login" name="Login">
	 <h3>Username</h3>
    <input type= "text" name="userName" id="box1">
 <span class="error" id="userid">This is required</span>                        
                        <br/>	

    <h3>Password</h3>
    <input type= "password" name="pwd" id="box2">
 <span class="error" id="pwdid">This is required</span>                        
                        <br/>		
	<h6 id="forgot"> <a href="https://www.google.com/">forogt username or password?</a></h6>


          <button type="button" value="Submit" onclick="validate();">Login </button>   
        
	<button> Cancel</button>

        
        
        <div id="clear2"></div>
        </form>
        
        <div id="clear2"></div>
        </div>
  </div>

<script>
            function validate()
            {        var error; 
                     
                    var spans = document.getElementsByTagName("span");
            
                    var box1 =document.getElementById("box1");
             
                    var box2 =document.getElementById("box2");
             
                     var uName = document.Login.userName.value;
             
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
                    var password = document.Login.pwd.value;
                    if(password=="")
                     {
                        
                  spans[1].style.visibility="visible";  
                  box2.style.borderColor="red";
                         
                         error=1;
                     }
                    else
                    {
                        
                     spans[1].setAttribute("style","visibility:hidden"); 
                      box2.style.borderColor="grey";
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