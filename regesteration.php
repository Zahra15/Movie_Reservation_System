    <?php
    $title ='regestration';
    include 'header.php';
?>


<div class="wrapper">
<div class="content">
    <form name="regester" method="POST" action="add-user.php" enctype="multipart/form-data">
        <h2>PERSONAL INFORMATION</h2><br>

        <label>First name: </label><input type= text id="firstName"><br><br>
        <label>Last name: </label><input type= text id="lastName"><br><br>
        <label>Nationality: </label><input type= text id="nationality"><br><br>
        <label>E-Mail:</label><input type= email id="email"><br><br>
        <label>Phone Number:</label><input type= text id="phoneNumber"><br><br>
        <label>Photo: </label><input type= file id="photo"><br><br>	
	<h2>LOGIN INFORMATION</h2><br>
        <label>Username:</label> <input type= text id="username"><br><br>
	<label>Password: </label>
        <input type= password id="password">
    <br><br>
	
	
	<h2>PAYMENT INFORMATION</h2><br>
		
	<label>Card Type:</label>
        <select name="card" id="cardType">
  		<option value="">Select Type</option>
  		<option value="visa">Visa</option>
   		<option value="mastercard">Mastercard</option>
  		<option value="americanexpress">American Express</option>
   		
	</select><br><br>
        <label>Name on the Card: </label><input type= text id="nameOnCard"><br><br>
        <label>Credit Card Number:</label> <input type= text id="cardNumber"><br><br>
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
    <option value='12'>2016</option></select><br><br>
	<label> Card Code: </label>
    <input type= text><br><br>

<h2>WHERE DID YOU HEAR ABOUT US</h2><br>
    
<input type="radio" name="where" id="where"  value="friend" checked> 
  <label>Friend</label> <br>
   
<input type="radio" name="where" id="where" value="socialmedia" > 
     <label>Social Media</label><br>
   
<input type="radio" name="where" id="where" value="newspaper" > 
     <label>Newspaper</label><br>
  
<input type="radio" name="where" id="where" value="ad" > 
      <label>Advertisement</label><br>

    <input type="radio" name="where" id="where" value="other">
<label> Other  </label>
    <br><br>
    <input type="submit" value="register">
    </form>
</div>
</div>

    <?php
   
    include 'footer.php';
?>