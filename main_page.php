<?php
session_start();
require_once 'my_auth.php';
 if(!is_session_valid()){
   header('Location:index.php');
  }
 ?>
<DOCTYPE html>
<head>
<head>
<title>Main Page </title>
 </head>
 <body>
 include 'header.php';
 <div> Main Page </div>
 include 'footer.php';

 </body>
 </html>