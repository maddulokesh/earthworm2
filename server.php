<?php
session_start();

$firstname = "";
$lastname = "";
$areacode = "";
$telnumber = "";
$email = "";
$feedback = "";
$username = "";
$phonenumber    = "";
$productname="";
$productquantity="";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'lokesh');

if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($phonenumber)) { array_push($errors, "Phone Number is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR phonenumber='$phonenumber' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['phonenumber'] === $phonenumber) {
      array_push($errors, "phone number already exists");
    }
  }

  
  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (username, phonenumber, password) 
  			  VALUES('$username', '$phonenumber', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: home1.php');
  }
}


if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: home1.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

if (isset($_POST['booking'])) {
  $phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
  $productname = mysqli_real_escape_string($db, $_POST['productname']);
  $productquantity = mysqli_real_escape_string($db, $_POST['productquantity']);
  if (empty($phonenumber)) { array_push($errors, "phone number is required"); }
  if (empty($productname)) { array_push($errors, "product name is required"); }
  if (empty($productquantity)) { array_push($errors, "product quantity is required"); }
  if (count($errors) == 0) {
  	$query = "INSERT INTO booking (phonenumber, product, quantity) 
  			  VALUES('$phonenumber', '$productname', '$productquantity')";
  	mysqli_query($db, $query);
  	$_SESSION['productname'] = $productname;
  	$_SESSION['success'] = "You order successfully booked";
  	header('location: home1.php');
  }
}

if (isset($_POST['feedbackdetails'])) {
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $areacode = mysqli_real_escape_string($db, $_POST['areacode']);
  $telnumber = mysqli_real_escape_string($db, $_POST['telnumber']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $feedback = mysqli_real_escape_string($db, $_POST['feedback']);
  if (empty($firstname)) { array_push($errors, "first name is required"); }
  if (empty($lastname)) { array_push($errors, "last name is required"); }
  if (empty($areacode)) { array_push($errors, "area code is required"); }
  if (empty($telnumber)) { array_push($errors, "telephone number is required"); }
  if (empty($email)) { array_push($errors, "email is required"); }
  if (empty($feedback)) { array_push($errors, "feedback is required"); }
  if (count($errors) == 0) {
  $query = "INSERT INTO feedbackdetails (firstname, lastname, areacode, telnumber, email, feedback) 
  			  VALUES('$firstname', '$lastname', '$areacode', '$telnumber', '$email', '$feedback')";
  	mysqli_query($db, $query);
  	$_SESSION['firstname'] = $firstname;
  	$_SESSION['success'] = "Your feedback successfully sent";
  	header('location: contact.php');
  }
}

?>