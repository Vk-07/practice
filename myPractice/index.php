<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form using css and php</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <form action="php/userdata.php" method="POST">
        <div class="fields">
            <input type="text" name="studentname" placeholder="Student Name">
            <input type="text" name="fathername"  placeholder="Father Name">
            <input type="text" name="class"  placeholder="Class">
            <input type="text" name="rollno"  placeholder="Roll No.">
            <input type="text" name="studentID"  placeholder="Student ID">
            <input type="text" name="phonenumber"  placeholder="Phone Number">
        </div>
        <div class="option" name="event"> 
            <select >
                <option >Dance</option>
                <option >Singing</option>
                <option >Speech</option>
            </select>
        </div>
        <button type="submit" name="submitbtn">Submit</button>
    </form>
    
</body>
</html>