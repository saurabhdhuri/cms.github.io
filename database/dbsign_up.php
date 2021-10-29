<?php

if (isset($_POST['sign_up'])) {

	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
  $password = $_POST['password'];
	$committee = $_POST['committee'];
	$department = $_POST['department'];
	$class_year = $_POST['class_year'];

// echo "<script type='text/javascript'>alert('$committee');</script>";

	$check_committee_head = "SELECT `committee_head_username` FROM `committee_head` WHERE `committee_head_username`='$username'";

	$insert_committee_name = mysqli_query($DBcon, "SELECT `committee_id` FROM `committee` WHERE `committee_name` = '$committee'");

	$result = mysqli_fetch_array($insert_committee_name);
	$committee_id = $result['committee_id'];

	// echo "<script type='text/javascript'>alert('$committee_id');</script>";

	$insert_committee_head = "INSERT INTO  `committee_head`  ( `committee_head_username` ,  `committee_head_password` ,  `committee_head_name` ,  `committee_head_department` ,  `committee_head_class` ,  `committee_id`)
	VALUES ( '$username', '$password', '$fullname', '$department', '$class_year', '$committee_id')";

	// mysqli_query($DBcon, "INSERT INTO  committee_head  (committee_id)	VALUES ('1')");

	// $sql2 = "INSERT INTO `user_authorization`(`user_username`, `user_password`, `user_id`) SELECT `user_email`, '$password', `user_id` FROM `user` WHERE `user_email`='$email'";

	$check = mysqli_query($DBcon, $check_committee_head);

		if ($check->num_rows !== 0) {
				echo "<script type='text/javascript'>alert('Username is already been used');</script>";
		}
		else {

				$register_committee_head = mysqli_query($DBcon, $insert_committee_head);
			  // $re2 = mysqli_query($DBcon, $sql2);

				if ($register_committee_head) {
						echo "<script type='text/javascript'>alert('Successfully Registered');</script>";
				}
			  else {
						echo "<script type='text/javascript'>alert('An error occured');</script>";
				}
		}
}
?>
