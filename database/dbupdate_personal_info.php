<?php
      if(isset($_POST['save_personal_info']))
      {
        $update_username = $_POST['edit_username'];
        $update_password = $_POST['edit_password'];
        $update_fullname = $_POST['edit_fullname'];
        $update_committee = $_POST['edit_committee'];
        $update_department = $_POST['edit_department'];
        $update_class = $_POST['edit_class'];

        // echo "<script type='text/javascript'>alert('$update_class');</script>";

        $sql = "UPDATE `committee_head` SET `committee_head_username`= '$update_username', `committee_head_password`= '$update_password', `committee_head_name`='$update_fullname',
        `committee_head_department`='$update_department', `committee_head_class`='$update_class', `committee_id`=(SELECT `committee_id` FROM `committee` WHERE `committee_name`='$update_committee') WHERE `committee_head_username`='$uname'";

        $re = mysqli_query($DBcon, $sql);

        if ($re) {
  				echo "<script type='text/javascript'>alert('Profile Updated Successfully.');</script>";
  			}

  		  else {
  				echo "<script type='text/javascript'>alert('Error while updating.');</script>";
  			}

      }
?>
