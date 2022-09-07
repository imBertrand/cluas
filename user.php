<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Staff Log In</title>
</head>

<body>
    <h2>Computer Lab Usage Accountability System</h2>
    <div class="formBox">
        <form action="func.php" method="post">
            <input type="text" placeholder="Enter your username" name="username" class="box1"><br>
            <input type="password" placeholder="Enter your password" name="password" class="box2"><br>
            <input type="submit" value="Login" class="submit" name="login"><br>
        </form>
        <a href="admin.php">
            <h5>Log in as Admin</h5>
        </a>
    </div>
</body>

</html>