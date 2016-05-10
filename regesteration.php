    <?php
    $title ='Regestration Page';
    include 'header.php';
?>


<div class="wrapper">
<div class="content">
    <form name="userReg" onsubmit=" return validate();">
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
        <label>Username: </label><input type=text id="Uname">
         <span id="spanUname" class="error">Enter Your user name please !</span>
         <br>
         <br>
        
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
        <select name="card" id="cardType">
  		<option value="">Select Type</option>
  		<option value="visa">Visa</option>
   		<option value="mastercard">Mastercard</option>
  		<option value="americanexpress">American Express</option>
   		
	</select>
        <span id="cardSpan" class="error">Select Card Type Please!</span><br><br>
        <label>Name on the Card: </label><input type= text id="nameOnCard">
        <span id="cardNameSpan" class="error">Enter Name on Card Please!</span>
        
        <br><br>
        <label>Credit Card Number:</label> <input type= text id="cardNumber">
        <span id="cardNumSpan" class="error">Enter Card Number Please!</span>
        <br><br>
        
        
        <label>Expiry Date:</label><select name="expireMM" id="expiryMonth">
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
        <select name='expireYY' id="expiryYear">
    <option value=''>Year</option>
    <option value='10'>2013</option>
    <option value='11'>2014</option>
    <option value='12'>2015</option>
    <option value='12'>2016</option></select>
        
         <span id="expSpan" class="error">Enter Expiration Month&Year!</span>
        <br><br>
	<label> Card Code: </label>
    <input type= text id="cardCode">
       <span id="cardCodeSpan" class="error">Enter Card Code Please!</span>
    <br><br>
</fieldset>
    <br>
    <br>
    <fieldset><legend><h1>Where did you here about us? </h1></legend>
  <br> 
   <input type="radio" name="where" id="where" value="Friend" > 
     <label>friend</label><br>
     
<input type="radio" name="where" id="where" value="socialmedia" > 
     <label>Social Media</label><br>
   
<input type="radio" name="where" id="where" value="newspaper" > 
     <label>Newspaper</label><br>
  
<input type="radio" name="where" id="where" value="ad" > 
      <label>Advertisement</label><br>

    <input type="radio" name="where" id="where" value="other">
    <label> Other  </label>
    <br>
     <span id="radioSpan" class="error">Make a choise!</span>
    <br></fieldset>
    <button type="submit" name="submitb" id="submit" >Register</button>
 </form>
</div>
</div>

 <script>
            function validate()
            {
                    var error; 
                     
                    var spans = document.getElementsByTagName("span");
            
                    var first =document.getElementById("fName");
             
                    var last =document.getElementById("lName");
                    var natio =document.getElementById("natio");
                     var email =document.getElementById("email");
                    
                     var phone =document.getElementById("phone");
                     //var photo =document.getElementById("photo");
                    
             
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
                        

                        
                        var spanUser=document.getElementById("spanUname");
                     var userName=document.userReg.Uname.value;
            
                   if(userName=="")
                     {
                        spanUser.setAttribute("style","visibility:visible");
                  
                       Uname.style.borderColor="red";
                         error=1;
                                 
                                   
                    }
                    else
                       {
                        
                           spanUser.setAttribute("style","visibility:hidden"); 
                         Uname.style.borderColor="grey";
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
                
                var cardValue = document.userReg.cardType.value;
                var cardSpan=document.getElementById("cardSpan")
                
                if(cardValue=="")
                {
                     cardSpan.setAttribute("style","visibility:visible");
                       cardType.style.borderColor="red";
                         error=1;
                
                }
                else
                {
                    cardSpan.setAttribute("style","visibility:hidden");
                       cardType.style.borderColor="grey";
                         error=0;
                     }
                  var cardName = document.userReg.nameOnCard.value;
                var cardNameSpan=document.getElementById("cardNameSpan")
                
                if(cardName=="")
                {
                     cardNameSpan.setAttribute("style","visibility:visible");
                       nameOnCard.style.borderColor="red";
                         error=1;
                
                }
                else
                {
                    cardNameSpan.setAttribute("style","visibility:hidden");
                       nameOnCard.style.borderColor="grey";
                         error=0;
                     }
                
                  var cardNum = document.userReg.cardNumber.value;
                var cardNumSpan=document.getElementById("cardNumSpan")
                
                if(cardNum=="")
                {
                     cardNumSpan.setAttribute("style","visibility:visible");
                       cardNumber.style.borderColor="red";
                         error=1;
                
                }
                else
                {
                    cardNumSpan.setAttribute("style","visibility:hidden");
                       cardNumber.style.borderColor="grey";
                         error=0;
                     }
                
                
                var expM=document.userReg.expiryMonth.value;
                var expSpan=document.getElementById("expSpan");
                var expY=document.userReg.expiryYear.value;
                if(expM=="" && expY=="")
                {
                     expSpan.setAttribute("style","visibility:visible");
                       expiryMonth.style.borderColor="red";
                       expiryYear.style.borderColor="red";
                         error=1;
                
                }
                else
                if(expM=="")
                {
                    expSpan.setAttribute("style","visibility:visible");
                        expiryMonth.style.borderColor="red";
                        expiryYear.style.borderColor="grey";
                         error=1;
                     } 
                       else
                if(expY=="")
                {
                    expSpan.setAttribute("style","visibility:visible");
                        expiryYear.style.borderColor="red";
                        expiryMonth.style.borderColor="grey";
                         error=1;
                     } 
                     
                     else
                     {
                         
                          expSpan.setAttribute("style","visibility:hidden");
                        expiryYear.style.borderColor="grey";
                        expiryMonth.style.borderColor="grey";
                         error=0;
                     }
                     
                     var cardCodev=document.userReg.cardCode.value;
                     var cardCodeSpan=document.getElementById("cardCodeSpan");
                     
                     if(cardCodev=="")
                     {
                         cardCodeSpan.setAttribute("style","visibility:visible");
                          cardCode.style.borderColor="red";
                         error=1;
                     }
                     else
                     {
                         cardCodeSpan.setAttribute("style","visibility:hidden");
                          cardCode.style.borderColor="grey";
                         error=0;
                     }
                
                
                var radio=document.userReg.where;
                var flag=0;
                for(var i=0; i<radio.length;i++)
                    {
                        if(radio[i].checked)
                        {
                            flag = 1;
                        }
                    }
                    if(flag==0)
                    {
                    radioSpan.style.visibility="visible";  
                      error=1;
                    }
                    else
                    {
                   radioSpan.style.visibility="hidden";
                    error=0;
                    }
                
                   if(error ==0 ){
                                   
                         return true;
                       
                   }
                   else{
                      
                       return false;
                   }
            }
            
        </script>
   

 <?php
   
    include 'footer.php';
?>
