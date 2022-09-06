<?php
include 'session.php';
include 'dbconn.php';

$sql = "SELECT * from useLog where purpose like  concat('%',?,'%')";
$result=$conn->prepare($sql);
$result->execute([$_POST['search']]);

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
    <h2>Search Results</h2>
    <table class="staffTable">
        <thead>
            <tr>
                <th>Client Id</th>
                <th>Client Name</th>
                <th>Time of Entry</th>
                <th>Purpose of Usage</th>
                <th>Duration of Use</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($list=$result->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td>
                    <?php echo $list['clientId']; ?>
                </td>
                <td>
                    <?php echo $list['clientName']; ?>
                </td>
                <td>
                    <?php echo $list['time']; ?>
                </td>
                <td>
                    <?php echo $list['purpose']; ?>
                </td>
                <td>
                    <?php echo $list['duration']; ?>
                </td>
            </tr>
            <?php } ?>
            <div>
            </div>
        </tbody>
    </table>
</body>

</html>