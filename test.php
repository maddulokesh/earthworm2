
<?php

session_start();
$user = 'root';
$password ='';


$database = 'lokesh';


$servername='localhost';
$mysqli =new mysqli($servername, $user,$password,$database);


?>


<?php 
$phonenumber2=$mysqli->real_escape_string($_POST['phonenumber1']);
$pass=$mysqli->real_escape_string($_POST['password1']);
$gow="SELECT * FROM login1 WHERE phonenumber='$phonenumber2' AND password3='$pass'";
$res=$mysqli->query($gow);
if($res->num_rows>0)
{
 $_SESSION['phonenumber1'] = $phonenumber2;
header('location:home.php');
}
else
{
    echo("invalid credentials");
}
?>
