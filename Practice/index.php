<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>

    <form action="PHP/sendData.php" method="POST">
        <div id="fields">
            <input type="text" name="studentName" placeholder="Name">
            <input type="text" name="fatherName" placeholder="Father Name">
            <input type="text" name="class" placeholder="Class with section">
            <input type="number" name="rollNo" placeholder="Roll Number">
            <input type="text" name="studentID" placeholder="Student ID">
            <input type="number" name="phoneNo" placeholder="Phone Number">
        </div>
        <select name="niche">
            <option>Dance</option>
            <option>Singing</option>CH
            <option>Speech</option>
        </select>
        <button id="submitBtn" name="submitBtn">Submit</button>
    </form>
    
</body>
</html>