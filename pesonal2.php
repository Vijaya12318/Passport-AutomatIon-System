<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
.link{
background-color:#450000;
color:#b5b575;

}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body bgcolor="#b5b575">
<center>

<form method="post" action="personalinsert.php">
<fieldset>
<legend><h2>Own details</h2></legend>
<pre>
<div align="left">
Name		:	        <input type="text" name="name" required size=30/>


Last name		:		<input type="text" name="lastname" required size=30/>


Father's name	:		<input type="text" name="fname" required size=30/>


Mother's name		:		<input type="text" name="mname" required size=30/>


date of birth	:               <input type="date" name="dob" required size=30/>


gender			:	       <input type="radio" name="gender" value="male" />male	<input type="radio" name="gender" value="female" />female

marital status		:	       <input type="radio" name="maritalstatus" value="single" />single	<input type="radio" name="maritalstatus" value="married" />married


Address		:		<textarea name="address" required size=30></textarea>


birth place:		<input type="text" name="placeofbirth" required />


City	:		<input type="text" name="city" required size=30/> 


phone number	:		<input type="text" name="phone" required size=30/>


Email		::		<input type="text" name="email" reuired size=30/>

aadhar card number		::		<input type="text" name="aadhar" reuired size=30/>

				<input type="submit" name="submit" value="To submit" />
</div>
				

<a href="other2.php" class="link">Next</a>	
</pre>
</fieldset>
</form>
</body>
</html>
