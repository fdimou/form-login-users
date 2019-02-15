<?php
  require 'config.php';
  function check_user($user,$password){
     global $conn;
	 if(!isset($user) || !isset($password))return false;
	 $sql="select password from users where name=?";
	 $stmt=$conn->prepare($sql);
	 $stmt->execute([$user]);
	 $vuser=$stmt->fetch();
     if ($vuser && sha1($password) == $vuser['password'])
		 return true;
	  return false;
  }
  function is_session_valid(){
	  return isset($_SESSION['user']);
  }
	 ?>
	 