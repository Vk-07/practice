<?php

    include 'conn.php';

    if (isset($_POST['submitBtn'])) {
        $studentName = $_POST['studentName'];        
        $fatherName = $_POST['fatherName'];            
        $class = $_POST['class'];        
        $rollNo = $_POST['rollNo'];        
        $studentID = $_POST['studentID'];        
        $phoneNo = $_POST['phoneNo'];        
        $niche = $_POST['niche'];        

        $sqliQuery = "INSERT INTO `firsttable`(`name`, `fatherName`, `class`, `rollNo`, `studentID`, `phoneNo`, `event`) VALUES ('$studentName','$fatherName','$class',$rollNo,'$studentID',$phoneNo,'$niche')";

        if ($conn -> query($sqliQuery) === TRUE) {
            ?>
                <script>
                    window.location = '../thanks.php';
                </script>
            <?php
        }

        $conn -> close();


    }
    

?>