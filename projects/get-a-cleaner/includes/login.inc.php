<?php 

if(isset($_POST['login-submit']))
{

	require 'connection.inc.php';

	$username = mysqli_real_escape_string($dbconnection, $_POST['username']) !== null ? $_POST['username'] : "" ;
	$password = mysqli_real_escape_string($dbconnection, $_POST['password']) !== null ? $_POST['password'] : "" ;

	if(empty($username) || empty($password))
	{
		header("Location: ../login.php?error=fielsempty");
		exit();
	}

	$user_query="SELECT * FROM User WHERE UserName = ?";

	$stmt = mysqli_stmt_init($dbconnection);
	
	if(!mysqli_stmt_prepare($stmt, $user_query))
		{
			header("Location: ../login.php?error=sqlerror");
			exit();
		}
	else
		{
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);

			if ($row = mysqli_fetch_assoc($result)) {
					$passcheck = password_verify($password, $row['Password']);
					if ($passcheck==false) {
						header("Location: ../login.php?error=passwordinvalid");
						exit();
					}
					else if ($passcheck==true)
					{
						session_start();

						$_SESSION['userid'] = $row['Id'];
						$_SESSION['usergroupid'] = $row['GroupId'];
						$_SESSION['username'] = $row['UserName'];

						header("Location: ../dashboard.php?login=success&username=".$_SESSION['username']);
						exit();
					}
					else
					{
						header("Location: ../index.php?error=unknown");
						exit();
					}
			}
			else
			{
				header("Location: ../login.php?error=nouser");
				exit();

			}
			
		}

	mysqli_stmt_close($stmt);
	mysqli_close();
}

else
{
	//$res = isset($_POST['submit-registration']);
	//echo $res;
	header("Location: ../login.php?error=comefromlogin");
	exit();
}


