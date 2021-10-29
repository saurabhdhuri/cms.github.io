<?php
session_start();

if (isset($_SESSION['username'])) {

		// <script>
		// $(document).ready(function()
		// 		{
		// 			$('dv_before_login').hide();
		// 			$('dv_after_login').show();
		// 			});
		// </script>
	// header("Location: main_index.php");
}

if (isset($_POST['sign_in'])) {

	$sign_in_username = $_POST['sign_in_username'];
	$sign_in_password = $_POST['sign_in_password'];

	$sign_in_admin = "SELECT `admin_username`, `admin_password` FROM `admin` WHERE `admin_username` = '$sign_in_username' and `admin_password` = '$sign_in_password'";
	$sign_in_committee_head = "SELECT `committee_head_username`, `committee_head_password` FROM `committee_head` WHERE `committee_head_username` = '$sign_in_username' and `committee_head_password` = '$sign_in_password'";

		$check_admin_login = mysqli_query($DBcon, $sign_in_admin);
		$check_committee_head_login = mysqli_query($DBcon, $sign_in_committee_head);

	if (mysqli_num_rows($check_admin_login)  or mysqli_num_rows($check_committee_head_login)) {

				$_SESSION['username'] = $sign_in_username;
				// $uname = $_SESSION['username'];

		header("Location: main_index.php");

	}
  else{

		echo "<script type='text/javascript'>alert('Invalid username or password');</script>";
	}
}
 ?>
