<?php
  require 'config.php';
  function insert_students($firstname,$lastname,$age,$address,$city,$phone){
     global $conn;
     $sql='INSERT INTO STUDENTS (FIRSTNAME,LASTNAME,AGE,ADDRESS,CITY,PHONE) VALUES (?,?,?,?,?,?)';
	 
	 $stmt=$conn->prepare($sql);
	 $stmt->execute([$firstname,$lastname,$age,$address,$city,$phone]);
  }
?>

<?php
  require 'config.php';
  function get_students($id){
     global $conn;//$conn=get_database();
     $sql='select * from student where id=?';
	 
	 $stmt=$conn->prepare($sql);
	 $stmt->execute([$id]);
	 return($stmt->fetchc);
  }
?>

<?php
  require 'config.php';
  function show_student($student){
	  echo '<table>';
	  echo '<tr><td> Ονοματεπώνυμο </td><td>'.$student['lastname'].''. $student['firstname'].'</td></tr>';
	  echo '<tr><td> Ηλικία </td><td>'.$student['age'].'</td></tr>';
	  echo '<tr><td> Διεύθυνση </td><td>'.$student['address'].'</td></tr>';
	  echo '<tr><td> Πόλη </td><td>'.$student['city'].'</td></tr>';
	  echo '<tr><td> Τηλέφωνο </td><td>'.$student['phone'].'</td></tr>';
	  echo '</table>';
  }
   
?>
  