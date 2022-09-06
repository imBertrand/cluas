<?php
include 'session.php';
include 'dbconn.php';

$sql = "SELECT * from staff";
$result=$conn->prepare($sql);
$result->execute();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin Home Page</title>
</head>

<body>
    <h3>Computer Lab Usage Accountability System</h3>
    <a href="logout.php"><img src="/logout.png"></a>
    <a href="newStaff.php"><button>New User</button></a>
    <table class="staffTable">
        <thead>
            <tr>
                <th>Staff Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($list=$result->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <form action="func.php" method="post">
                    <td>
                        <input type="hidden" name="staffId" value="<?php echo $list['staffId']; ?>">
                        <?php echo $list['staffId']; ?>
                    </td>
                    <td>
                        <?php echo $list['firstName']; ?>
                    </td>
                    <td>
                        <?php echo $list['LastName']; ?>
                    </td>
                    <td>
                        <?php echo $list['username']; ?>
                    </td>
                    <td>
                        <?php echo $list['password']; ?>
                    </td>
                    <td id="edit1">
                        <input type="submit" name="edit" name="edit" value="Edit">
                    </td>
                    <td id="delete1">
                        <input type="submit" name="delete" value="Delete">
                    </td>
                </form>
                </a>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>