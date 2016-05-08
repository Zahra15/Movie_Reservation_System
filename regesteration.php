    <?php
    $title ='Regestration Page';
    include 'header.php';
?>


<div class="wrapper">
<div class="content">
    <form name="userReg">
<fieldset>
         <legend><h2>PERSONAL INFORMATION</h2></legend>
<br>
	<label>First name: </label><input type= text id="fName">
         <span class="error" >Enter Your First Name Please!</span>                        
        <br><br>
	<label>Last name: </label><input type= text id="lName">
        <span class="error" >Enter Your Last Name Please!</span>  
        <br><br>
	<label>Nationality: </label><input type= text id="natio">
        <span class="error" >Enter Your Nationality Please!</span>  
        <br><br>
	<label>E-Mail:</label><input type= email id="email">
        <span class="error" >Enter Your E-mail Address Please!</span>  
        <br><br>
	<label>Phone Number:</label><input type= text id="phone">
        <span class="error" >Enter Your Phone Number Please!</span>  
        <br><br>
	<label>Photo: </label><input type= file id="photo">  
        <br><br>
        </fieldset>
    <br>
    <br>
    <br>
    <br>
    
    
    <fieldset>
         <legend><h2>LOGIN INFORMATION</h2></legend>
	<br>
	<label>Username:</label> <input type= text id="uName">
         <span id="uname" class="error" >Enter Your User-Name Please!</span>
        <br><br>
        <label>Password: </label><input type=password id="pwd">
         <span id="spanpwd" class="error">Enter Your Password Please!</span>
         <br>
         <br>
         
    
    </fieldset>
 <br>
    <br>
    <br>
    <br>
    
	
    <fieldset>
        <legend><h2>PAYMENT INFORMATION</h2></legend>
		<br>
	<label>Card Type:</label>
    <select name="card">
  		<option value="">Select Type</option>
  		<option value="visa">Visa</option>
   		<option value="mastercard">Mastercard</option>
  		<option value="americanexpress">American Express</option>
   		
	</select><br><br>
	<label>Name on the Card: </label><input type= text><br><br>
	<label>Credit Card Number:</label> <input type= text><br><br>
	<label>Expiry Date:</label><select name="expireMM">
    <option value=''>Month</option>
    <option value='01'>Janaury</option>
    <option value='02'>February</option>
    <option value='03'>March</option>
    <option value='04'>April</option>
    <option value='05'>May</option>
    <option value='06'>June</option>
    <option value='07'>July</option>
    <option value='08'>August</option>
    <option value='09'>September</option>
    <option value='10'>October</option>
    <option value='11'>November</option>
    <option value='12'>December</option>
</select> 
<select name='expireYY' >
    <option value=''>Year</option>
    <option value='10'>2013</option>
    <option value='11'>2014</option>
    <option value='12'>2015</option>
    <option value='12'>2016</option></select><br><br>
	<label> Card Code: </label>
    <input type= text><br><br>
</fieldset>
    
    <br>
    <br>
    <br>
    <br>
    
    
    
    <fieldset><legend><h2>WHERE DID YOU HEAR ABOUT US</h2></legend>
    <br>
<input type="radio" name="where" value="friend" checked> 
  <label>Friend</label> <br>
   
<input type="radio" name="where" value="socialmedia" > 
     <label>Social Media</label><br>
   
<input type="radio" name="where" value="newspaper" > 
     <label>Newspaper</label><br>
  
<input type="radio" name="where" value="ad" > 
      <label>Advertisement</label><br>

    <input type="radio" name="where" value="other">
<label> Other  </label>
<br><br>
    </fieldset>
    <br>
<button type="button" onclick="validate();">Register</button>
</form>
</div>
</div>

 <script>
            function validate()
            {        var error; 
                     
                    var spans = document.getElementsByTagName("span");
            
                    var first =document.getElementById("fName");
             
                    var last =document.getElementById("lName");
                    var natio =document.getElementById("natio");
                     var email =document.getElementById("email");
                    
                     var phone =document.getElementById("phone");
                     var photo =document.getElementById("photo");
                    
             
                     var fName = document.userReg.fName.value;
             
                     if(fName=="")
                     {
              spans[0].setAttribute("style","visibility:visible");
                        first.style.borderColor="red";
                         error=1;
                         
                         
             
             
          
                    }
                    else
                       {
                        
                           spans[0].setAttribute("style","visibility:hidden"); 
                           first.style.borderColor="grey";
                        error=0;
                        }
             
              var lName = document.userReg.lName.value;
             
                     if(lName=="")
                     {
              spans[1].setAttribute("style","visibility:visible");
                        last.style.borderColor="red";
                         error=1;
                                 
                                   
                    }
                    else
                       {
                        
                           spans[1].setAttribute("style","visibility:hidden"); 
                           last.style.borderColor="grey";
                        error=0;
                        }
             
              var nationality = document.userReg.natio.value;
             
                     if(nationality=="")
                     {
              spans[2].setAttribute("style","visibility:visible");
                        natio.style.borderColor="red";
                         error=1;
                                 
                                   
                    }
                    else
                       {
                        
                           spans[2].setAttribute("style","visibility:hidden"); 
                           natio.style.borderColor="grey";
                        error=0;
                        }
             
                var mail = document.userReg.email.value;
             
             
                     if(mail=="")
                     {
              spans[3].setAttribute("style","visibility:visible");
                        email.style.borderColor="red";
                         error=1;
                                 
                                   
                    }
                    else
                       {
                        
                           spans[3].setAttribute("style","visibility:hidden"); 
                           email.style.borderColor="grey";
                        error=0;
                        }
             
                 var pho = document.userReg.phone.value;
             
             
                     if(pho=="")
                     {
              spans[4].setAttribute("style","visibility:visible");
                        phone.style.borderColor="red";
                         error=1;
                                 
                                   
                    }
                    else
                       {
                        
                           spans[4].setAttribute("style","visibility:hidden"); 
                           phone.style.borderColor="grey";
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
             
                     if(error==0)
                      return true;
                    else
                       return false;

                   
                    
                    

            }
            
            
            
            
            
            
            
            
          




        </script>
    <?php
   
    include 'footer.php';
?>