<?php 
   include 'conn.php';

if (isset($_POST['submitbtn'])) {
    $studentname =  $_POST['studentname'];
    $fathername = $_POST['fathername'];
    $class = $_POST['class'];
    $rollno = $_POST['rollno'] ;
    $studentID = $_POST['studentID'] ;
    $phonenumber = $_POST['phonenumber'];
    $event = $_POST['event'];


    $mysqlquery = "INSERT INTO `school`(`studentname`, `fathername`, `class`, `rollno`, `studentID`, `phonenumber`, `event`) VALUES ('$studentname','$fathername','$class','$rollno','$studentID','$phonenumber','$event')";
    if($conn -> query($mysqlquery) === TRUE){
       ?>
      

      <script>
      window.location = '../index.php';
      </script>
      
      <?php

}

$conn -> close();
}
?>
