<?php 

session_start();

$username ="";
$email = "";

$errors = array();

$db = mysqli_connect('localhost','root', 'password', 'getacleaner') or die("Could not connect to database!");



$housearea = mysqli_real_escape_string($db, $_POST['areaToBeCleaned']);
$numberofbedrooms = mysqli_real_escape_string($db, $_POST['numberOfBedrooms']);

$numberofbathrooms = mysqli_real_escape_string($db, $_POST['numberOfBathrooms']);
$numberofpets = mysqli_real_escape_string($db, $_POST['numberOfPets']);
$freqWeekly = mysqli_real_escape_string($db, $_POST['freqWeekly']);
$movinginoutcleaning = mysqli_real_escape_string($db, $_POST['movingInOutCleaning']);
$monday = mysqli_real_escape_string($db, $_POST['monday']);
$regularcleaning  = mysqli_real_escape_string($db, $_POST['regularCleaning']);

//$picture =mysqli_real_escape_string($db, $_POST['email']);

// form validation

//if(empty($username)){array_push($errors, "User name is required.")};
//if(empty($email)){array_push($errors, "Email cannot is required.")};
//if(empty($password)){array_push($errors, "Password is required.")};
//if(empty($firstname)){array_push($errors, "First name is required.")};
//if(empty($lastname)){array_push($errors, "Last name is required.")};


// check existing username 
$user_check_query="SELECT * FROM User WHERE UserName= '$username' OR EmailAddress = '$email' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);

if($user){
	if($user['UserName']=== $username){array_push($errors, "User name already exists");}
	if($user['EmailAddress']=== $email){array_push($errors, "This email is already used for another account.");}
}

if(count($errors)==0){
	$password_hashed = password_hash($password, PASSWORD_DEFAULT);
	$query = "INSERT INTO User () VALUES ('$groupid','$username','$password_hashed','$firstname','$lastname','$phone','$emailaddress','$address','$postcode',date('Y-m-d H:i:s'),1)" ;

	mysqli_query($db, $query);
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "You are now logged in.";

	header("location: index.php");



}



?>



