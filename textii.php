<?php
   session_start();
   session_unset();
   require_once 'insert_students.php';
   
   if(isset($_POST['firstname']) 
	    && isset($_POST['lastname']) 
		&& isset($_POST['age'])
		&& isset($_POST['address'])
		&& isset($_POST['city']) 
		&& isset($_POST['phone'])){
		 insert_students($_POST['firstname'],
						 $_POST['lastname'],
						 $_POST['age'],
						 $_POST['address'],
						 $_POST['city'],
						 $_POST['phone']);
		 echo "student ". $_POST['firstname']." ". $_POST['lastname'] ." inserted <br/>";
		 exit();
   }
   
 ?>
 
<html>
<head>
<title>IEK VOLOU</title>
</head>
<body bgcolor='grey'>
<div align = 'center' style ='vertical-align:center;'>
<table align='center'>
<tr>
<td align='center'><img src='images/iekimage.bmp'/></td>
<td align='left'><h1>Μητρώο σπουδαστών ΙΕΚ Βόλου</h1> <td/>
</tr>
</table>
</body>
<br/>
<form action = 'textii.php'' method='post'>
<table>

<tr>
	<td align ='right' >Firstname:</td>
	<td> <input type ='text' name ='firstname'></td>
</tr><tr>
	<td align ='right' >Lastname:</td>
	<td> <input type ='text' name ='lastname'></td>
</tr><tr>
    <td align ='right' >Age:</td>
	<td> <input type ='number' name ='age'></td>
</tr><tr>
    <td align ='right' >Address:</td>
	<td> <input type ='text' name ='address'></td>
</tr><tr>
    <td align ='right' >City:</td>
	<td> <input type ='text' name ='city'></td>
</tr><tr>
    <td align ='right' >Phone:</td>
	<td> <input type ='number' name ='phone'></td>
</tr><tr>
	<td colspan='2' align='center'><input type='submit' value='Login'> </td>
</tr>

</table>
</form>
</div>
<div style = 'position:absolute;bottom:10px;
right :20px; font-size:12px;'>
Copyright by myself </div>
</body>
</html>

