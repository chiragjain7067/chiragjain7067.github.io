<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
	<script>
		function phoneNumberValidation(phoneNumber)  
		{  
			var phoneno = /^\d{10}$/;  
			if(phoneNumber.match(phoneno))  
			{  
				return true;  
			}  
			else  
			{  
				var div = document.getElementById('phone_error');
				div.innerHTML = "* Enter valid 10 digit number like this 9876543210.";
				return false;
			}  
		} 

		function isNumberKey(evt) 
		{
        		var charCode = (evt.which) ? evt.which : event.keyCode;
            		if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) 
			{
                		alert("Enter Number");
                		return false;
            		}
            		return true;
        	}

		function allLetters(evt)
		{
 			evt = (evt) ? evt : event;
       			var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));
		       	if (charCode > 31 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122)) 
			{
		        	alert("Enter letters only.");
          			return false;
       			}
       			return true;
     		}
		
		function validate()
		{
			var valid = true;
			var name = document.getElementById('name').value;
			var email = document.getElementById('email').value;
			var breed = document.getElementById('breed').value;
			var phone = document.getElementById('phone').value;
			var about = document.getElementById('about').value;
			if(name=='' || name==null)
			{
				valid=false;
				var div = document.getElementById('name_error'); 
				div.innerHTML = "* Please enter Name.";
			}
			else
			{
				document.getElementById('name_error').innerHTML='';
			}
			if(email=='' || email==null)
			{
				valid=false;
				var div = document.getElementById('email_error');
				div.innerHTML = "* Please enter email.";
			}
			else
			{
				document.getElementById('email_error').innerHTML='';
			}
			if(breed=='' || breed==null)
			{
				valid=false;
				var div = document.getElementById('breed_error');
				div.innerHTML = "* Please enter breed.";
			}
			else
			{
				document.getElementById('breed_error').innerHTML='';
			}
			if(phone=='' || phone==null)
			{
				valid=false;
				var div = document.getElementById('phone_error');
				div.innerHTML = "* Please enter your phone number.";
			}
			else
			{
				document.getElementById('phone_error').innerHTML='';
			}
			if(phone!='')
			{
				valid = phoneNumberValidation(phone);
			}
			if(about=='' || about==null)
			{
				valid=false;
				var div = document.getElementById('about_error');
				div.innerHTML = "* Please enter Problem faced.";
			}
			else
			{
				document.getElementById('about_error').innerHTML='';
			}
			if(valid==false)
			{
				return false;
			}
			else
			{
				return true;
			}	
		}
	</script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css\body.css">
	<link rel="stylesheet" type="text/css" href="css\menu.css">
	<link rel="stylesheet" type="text/css" href="css\footer.css">
	<script src="js\menuicon.js"></script>
</head>
<style>
	.form-table
	{
		width:400px;
		margin-left: 28em;
	}
	h1
	{
		font-size:42px;
		font-family: verdana;
		font-weight: bold;
	}
	label
	{
		font-size:30px;
		font-family: verdana;
		font-weight: bold;
	}
	input, p, textarea, button
	{
		font-size:28px;
		font-family: Helvetica;
		text-align: center;
	}
	#form_submission_ajax, p
	{
		background-color: #eee;
		padding-top: 40px;
		padding-bottom: 40px;
	}
	.error
	{
		color: #ff0000;
	}
</style>
<body>	                              
	<div id="menu">
		<h id="logo"><a href="index.php">PetVets</a></h>
		<div class="topnav" id="myTopnav">
	<a href="login.php">Employee Login</a>
  	<a href="about.html">About</a>
	<a href="Contact_Us.html">Contact</a>
	<a href="services.php">Services</a>
	<a href="index.php">Home</a>
	<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
		</div>
</div>
	<h1><center>Please fill out the form</center></h1>
	<form name="myForm" action="submit2.php" method="post" onsubmit="return validate();" id="form_submission_ajax">
	<img src="css/image.jpg" width="400px" height="300px" style="float: left">
	<table class="form-table" cellpadding="5px">
		<tr>
			<td><label>Name:</label></td>
			<td><input type="text" name="name" id="name" onkeypress="return allLetters(event)">
			</td>
		</tr>
		<tr>
			<td></td>
			<td id="name_error" class="error"></td>
		</tr>
		<tr>
			<td><label>Email:</label></td>
			<td><input type="email" name="email" id="email"></td>
		</tr>
		<tr>
			<td></td>
			<td id="email_error" class="error"></td>
		</tr>
		<tr>
			<td><label>Treatment for:</label></td>
			<td><p><b><input type="radio" name="animal" id="animal" value="Dog" checked>Dog
				<input type="radio" name="animal" id="animal" value="Cat">Cat</p></b>
			</td>
		</tr>
		<tr>
			<td></td>
			<td id="animal_error" class="error"></td>
		</tr>
		<tr>
			<td><label>Breed:</label></td>
			<td><input type="text" name="breed" id="breed"></td>
		</tr>
		<tr>
			<td></td>
			<td id="breed_error" class="error"></td>
		</tr>
		<tr>
			<td><label>Phone No:</label></td>
			<td><input type="telephone" name="phone" id="phone" onkeypress="return isNumberKey(event)"></td>
		</tr>
		<tr>
			<td></td>
			<td id="phone_error" class="error"></td>
		</tr>
		<img src="css/image1.jpg" width="400px" height="300px" style="float: right; margin-top:22em;">
		<tr>
			<td><label>Problem faced:</label></td>
	                <td><textarea rows="4" maxlen="200" name="about" cols="20" style="text-align:left;" placeholder="Describe the problem in less than 200 words" id="about"></textarea></td>
		<tr>
		<tr>
			<td></td>
			<td id="about_error" class="error"></td>
		</tr>
			<td></td>
			<td> <button type="submit" value="submit" name="submit" class="signupbtn">Submit</button></td>
		</tr>	
	</table>
	</form>
</body>
</html>
