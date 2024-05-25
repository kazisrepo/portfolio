<?php 

if(isset($_POST['submit-registration']))
{

	require 'connection.inc.php';

	//
	$username = mysqli_real_escape_string($dbconnection, $_POST['email']) !== null ? $_POST['email'] : "" ;
	$password = mysqli_real_escape_string($dbconnection, $_POST['password']) !== null ? $_POST['password'] : "" ;

	$email = mysqli_real_escape_string($dbconnection, $_POST['email']) !== null ? $_POST['email'] : "" ;
	$groupid = mysqli_real_escape_string($dbconnection, $_POST['registeras']) !== null ? $_POST['registeras'] : "" ;
	$firstname = mysqli_real_escape_string($dbconnection, $_POST['firstname']) !== null ? $_POST['firstname'] : "" ;
	$lastname = mysqli_real_escape_string($dbconnection, $_POST['lastname']) !== null ? $_POST['lastname'] : "" ;
	$phone = mysqli_real_escape_string($dbconnection, $_POST['phone']) !== null ? $_POST['phone'] : "" ;
	$address = mysqli_real_escape_string($dbconnection, $_POST['address']) !== null ? $_POST['address'] : "" ;
	$postcode = mysqli_real_escape_string($dbconnection, $_POST['postcode']) !== null ? $_POST['postcode'] : "" ;




	/*$email = $_POST['email'];
	$password = $_POST['password'];

	
	$groupid = $_POST['registeras'];
	$username = $_POST['email'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phone = $_POST['phone'];
	$address  = $_POST['address'];
	$postcode = $_POST['postcode'];
	*/

	//$groupid = 3;
	$createdate = date("Y-m-d h:i:s");
	$createdby = 0;


	if(empty($username) || empty($password) || empty($email) || empty($firstname) || empty($phone) || empty($address))
	{
		header("Location: ../register.php?error=fielsempty");
		exit();
	}

	$user_query="SELECT * FROM User WHERE UserName=?";

	$stmt = mysqli_stmt_init($dbconnection);
	
	if(!mysqli_stmt_prepare($stmt, $user_query))
		{
			header("Location: ../register.php?error=sqlerror");
			exit();
		}
	else
		{
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultcheck = mysqli_stmt_num_rows($stmt);

			if($resultcheck>0)
			{
				header("Location: ../register.php?error=usertaken&email=".$username);
				exit();
			}
			else
			{
				$sql_stmt= "INSERT INTO User(GroupId, UserName, Password, FirstName, LastName, Phone, EmailAddress, Address, PostCode, CreateDate, CreatedBy) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

				$stmt = mysqli_stmt_init($dbconnection);
				if(!mysqli_stmt_prepare($stmt, $sql_stmt))
				{
					header("Location: ../register.php?error=sqlerror");
					exit();
				}
				else
				{
					$hashed_pwd = password_hash($password, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "isssssssssi", $groupid, $username, $hashed_pwd, $firstname, $lastname, $phone, $email, $address, $postcode, $createdate, $createdby);
					mysqli_stmt_execute($stmt);

					header("Location: ../dashboard.php?signup=success");
					exit();
				}
			}
		}

	mysqli_stmt_close($stmt);
	mysqli_close();
}

else
{
	//$res = isset($_POST['submit-registration']);
	//echo $res;
	header("Location: ../index.php");
	exit();
}


