<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="staff.css">
    <title>New Staff Page</title>
</head>

<body>
    <h3 class="heading">Computer Lab Usage Accountability System</h3>
    <img src="/logout.png">
    <form class="staffForm" action="func.php" method="post">
<h3 id="newStaff">Enter New Staff Information</h3>
        <label>Staff Id</label>
        <input type="text" name="staffId" class="text"><br><br>
        <br>
        <label>First Name</label>
        <input type="text" name="firstName" class="text"><br><br>
        <br>
        <label>Last Name</label>
        <input type="text" name="lastName" class="text"><br><br>
        <br>
        <label>Username</label>
        <input type="text" name="username" class="text"><br><br><br>
        <label>Password</label>
        <input type="text" name="password" class="text"><br><br><br>
        <input type="submit" value="Add" class="submit" name="addStaff">
        <input id="button2" type="submit" value="Cancel" class="submit">
    </form>
</body>

</html>