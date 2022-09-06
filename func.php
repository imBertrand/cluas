<?php 

include 'dbconn.php';


//Login
if(isset($_POST['login'])){
		if($_POST['username'] != "" || $_POST['password'] != ""){



			$username = $_POST['username'];
			$password = $_POST['password'];


			$sql = "SELECT * FROM `staff` WHERE `username`=? AND `password`=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($username,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				 // Store data in session variables
				$_SESSION['user'] = $fetch[''];
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;

                header("location: index.php");
			} else{
				echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'user.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'user.php'</script>
			";
		}
	}

//Admin Login
if(isset($_POST['adminLog'])){
		if($_POST['username'] != "" || $_POST['password'] != ""){


			$username = $_POST['username'];
			$password = $_POST['password'];


			$sql = "SELECT * FROM `admin` WHERE `username`=? AND `password`=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($username,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				 // Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;
				header("location: adminPage.php");
                
				
			}else{
				echo "
				<script>alert('Invalid username or password')</script>
<script>
window.location = 'admin.php'
</script>
";
}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'admin.php'</script>
			";
		}
	}


//Register staff
	if (isset($_POST['addStaff'])) {

    $sql = "INSERT INTO staff values(?,?,?,?,?) ";
    $result=$conn->prepare($sql); 
    $result->execute([$_POST['staffId'],$_POST['firstName'],$_POST['lastName'],$_POST['username'],$_POST['password']]); 

        if ($result== true) {
            echo "
				<script>
				alert('User Added')
				</script>
				<script>
				window.location = 'adminPage.php'
				</script>
				";
        }
}

//Add Programm
if (isset($_POST['addProgram'])) {
    $sql = "INSERT INTO programs values(?,?) ";
    $result=$conn->prepare($sql); 
    $result->execute([$_POST['progId'],$_POST['progName']]); 

        if ($result== true) {
            echo "
				<script>alert('Programm Added')</script>
				<script>window.location = '../../app/adminIndex.php'</script>
				";
        }
    }
 
//Search Record

//Update Details

//------------------------------------------------------------
?>