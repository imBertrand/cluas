<?php
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="staff.css">
    <title>Staff Index Page</title>
</head>

<body>
    <h3 class="heading">Computer Lab Usage Accountability System</h3>
    <a href="logout.php"><img src="logout.png"></a>
    <h2 class="input">Search Client Data By Purpose</h2>
    <form action="searchResults.php" method="post">
        <input class="inputBox" name="search" placeholder="Enter purpose of use">
        <input type="submit" class="button" value="Search">
    </form>
    <form class="staffForm" action="func.php" method="post">
        <h3>Enter Laboratory Usage Information</h3>
        <label>Client Id</label>
        <input type="text" name="clientId" class="text"><br><br>
        <br>
        <label>Client Name</label>
        <input type="text" name="clientName" class="text"><br><br>
        <br>
        <label>Time of Entry</label>
        <input type="text" name="time" class="text"><br><br>
        <br>
        <label>Purpose of Usage</label>
        <input type="text" name="purpose" class="text"><br><br><br>
        <label>Duration of Usage</label>
        <input type="text" name="duration" class="text"><br><br><br>
        <input type="submit" name="addLog" value="Enter" class="submit">
        <input id="button2" onclick="window.location.replace('index.php')" type="button" value="Cancel" name="addLog" class="submit">
    </form>
</body>

</html>