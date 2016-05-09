	<label>Username:</label> <input type= text id="uName">
         <span id="spanuname" class="error" >Enter Your User-Name Please!</span>
        <br><br>

<script>
alert("validation!");
                    
             
                                 var spuname=document.getElementById("spanuname");
           
                     var userfield = document.userReg.uName.value;
                     
                     if(userfield=="")
                     {
                          
                          spuname.setAttribute("style","visibility:visible"); 
                          userfield.style.borderColor="red";              
                         error=1; 
                         
                    }
                    else
                       {  
                           alert(userfield);
                           spuname.setAttribute("style","visibility:hidden"); 
                           userfield.style.borderColor="grey";
                           error=0;
                        }
                        
             
              
             
                
             
                
            
            
            var uname=document.getElementById("uname");
           
            var userfield = document.userReg.uName.value;
           
                     if(userfield=="")
                     {
                    uname.setAttribute("style","visibility:visible");
                        userfield.style.borderColor="red";
                         error=1;
                                 
                                   
                    }
                    else
                       {
                        
                           uname.setAttribute("style","visibility:hidden"); 
                           userfield.style.borderColor="grey";
                        error=0;
                        }
            
            var passwo=document.getElementById("spanpwd");
            var pwdval=document.userReg.pwd.value;
            
                   if(pwdval=="")
                     {
                  passwo.setAttribute("style","visibility:visible");
                       pwd.style.borderColor="red";
                         error=1;
                                 
                                   
                    }
                    else
                       {
                        
                           passwo.setAttribute("style","visibility:hidden"); 
                         pwd.style.borderColor="grey";
                        error=0;
                        }
             
                     if(error==0){
                         alert("no errors!");
                      return true;
                         }
                    else{
                        alert("errors");
                       return false;}

                   
                    
      </script>                    
