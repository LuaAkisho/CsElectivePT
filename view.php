<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yourself</title>
</head>
<body>
    
    <form action="controller.php" method="post">
<!--for the first name-->
    <label>First Name</label><br>
        <input type="text" name="fname"><br>
<!--age-->
    <label>Age</label><br>
        <input type="text" name="age"><br>
<!--gender-->
    <label>Pick your Gender</label><br>
    <select name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select name="gender"><br>
<!--motto-->
    <label>Motto in Life</label><br>
        <textarea name="qoute" rows="3" cols="30"></textarea><br>
    <input type="submit" value="Submit">
    </form>

</body>
</html>