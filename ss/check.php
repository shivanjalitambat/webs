<?php
session_start();

if( !empty($_POST['user']) && !empty( $_POST['pwd'] )) {

	$user = $_POST['user'];
	$pwd = $_POST['pwd'];

	$sql = "select * from users where username = '$user' and password='$pwd'";

	$con=mysql_connect('localhost','root','');
	if(!$con){
		die("Could not connect to database".mysql_error());
	}
	mysql_select_db("fb",$con);

	$res = mysql_query( $sql , $con );

	if( mysql_num_rows( $res ) > 0  ) {
		$_SESSION['user'] = $user;
		header('Location: welcome.php');
	}
}

echo "<h1 align='center' style='color:red'>In Valid User</h1>";
?>
