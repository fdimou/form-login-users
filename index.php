<?php
   session_start();
   session_unset();
   require_once 'config.php';
   require_once 'my_auth.php';
   $invalid_user=false;
   if (isset($_POST['user']) && isset($_POST['password'])){
     if (check_user($_POST['user'],$_POST['password'])){
		 $_SESSION['user']=$_POST['user'];
	     header("Location:main_page.php");
	 }	 else {
		 session_unset();
		 $invalid_user=true;

	 }
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
<form action = 'index.php'' method='post'>
<table>
<tr>
   <?php if($invalid_user){ ?>
   
	<td colspan='2' align='center'><span style='color:red;'>Invalid User...Try Again.'</span></td>
	
   <?php } else { ?>
   
    <td align='center'> Login Form </td>
   <?php  } ?>
</tr>
<tr>
	<td align ='right' >User:</td>
	<td> <input type ='text' name ='user'></td>
</tr><tr>
	<td align ='right' >Password:</td>
	<td> <input type ='password' name ='password'></td>
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
