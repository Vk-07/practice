<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
    <link rel="stylesheet" href="Css/table.css">
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Father Name</th>
                <th>Class</th>
                <th>Roll No.</th>
                <th>Student ID</th>
                <th>Phone No.</th>
                <th>Event</th>
            </tr>
        </thead>
        <tbody>

            <?php

                include 'PHP/conn.php';

                $selectQuery = "SELECT * FROM `firsttable`";
                $data = mysqli_query($conn, $selectQuery);
                
                for ($i = 0; $i < mysqli_num_rows($data); $i++) {
                    $row = mysqli_fetch_assoc($data);
                    echo "<tr>
                            <td>".($i+1)."</td>
                            <td>". $row['name'] ."</td>
                            <td>". $row['fatherName'] ."</td>
                            <td>".$row['class'] ."</td>
                            <td>".$row['rollNo'] ."</td>
                            <td>".$row['studentID'] ."</td>
                            <td><span>+91 </span>". $row['phoneNo'] ."</td>
                            <td>".$row['event']."</td>
                        </tr>";

                }

                
            
            
            ?>

            
            
        </tbody>
    </table>

</body>
</html>