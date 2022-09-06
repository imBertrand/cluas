<?php 
include 'session.php';
include "dbconn.php";
$staffId = $_GET['staffId'];
function result()
{
    global $staffId;
    global $conn;
   echo $staffId;   
$sql = "SELECT * FROM staff where staffId=?";
$result=$conn->prepare($sql);
$result->execute([$staffId]);


while ($list=$result->fetch(PDO::FETCH_ASSOC)) {  ?>
<h3 id="editStaff">Edit Staff Information</h3>
<label>Staff Id</label>
<input type="text" class="text" name="staffId" value="<?php echo $list['staffId'] ?>"><br><br>
<br>
<label>First Name</label>
<input type="text" class="text" name="firstName" value="
<?php echo $list['firstName'] ?>"><br><br>
<br>
<label>Last Name</label>
<input type="text" class="text" name="lastName" value="<?php echo $list['LastName'] ?>"><br><br>
<br>
<label>Username</label>
<input type="text" class="text" name="username" value="<?php echo $list['username'] ?>"><br><br><br>
<label>Password</label>
<input type="text" class="text" name="password" value="<?php echo $list['password'] ?>"><br><br><br>
<input type="submit" value="Update" class="submit" name="updateDetails">
<input id="button2" type="submit" value="Cancel" class="submit">
<?php }
}
//Update Data



?>
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
        <?php  result();?>
    </form>
</body>

</html>