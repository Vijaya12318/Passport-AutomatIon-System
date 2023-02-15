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
<title>Untitled Document</title>
</head>
<body bgcolor="#b5b575">
<center>

<form method="post" action="otherinsert.php">
<fieldset>
<legend><h1>Other details</h1></legend>
<pre>
<div align="left">

Passport type	:	<input type="radio" name="passporttype" value="normal" />Normal	<input type="radio" name="passporttype" value="Tatkal" />As soon as possible


Educational qualification	:	<select name="education">
<option value="select option" selected>Select the category</option>
<option value="matriculate">Matriculation</option>
<option value="HSC">Overhead</option>
<option value="degree">Degree</option>
<option value="post graduate">Masters</option>
</select>


Nationality	:	<select name="nationality">
<option value="select option" selected> Select the category</option>
<option value="Indian">Indian</option>
<option value="Anglo indian">Anglo Indian</option>
<option value="Others">Others</option>
</select>


Religion		:       <select name="religion">
<option value="select option" selected> Select the category</option>
<option value="Hindu">Hindu religion</option>
<option value="christian">Christian</option>
<option value="Islam">Islam</option>
<option value="others">Others</option>
</select>


Source card number	:	<input type="text" name="acnumber" required />


Pan card number	:       <input type="text" name="pannumber" required />

Email	::	<input type="email" name="email" required />

<input type="submit" name="submit" value="Submit">
</div>

</pre>
</fieldset>
</form>
<a href="reference2.php" class="link">Next</a>
</body>
</html>
