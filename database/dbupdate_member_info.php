<?php
      if(isset($_POST['save_edit_member_info']))
      {
        $update_member_id = $_POST['edit_member_id'];
        $update_member_name = $_POST['edit_member_name'];
        $update_member_department = $_POST['edit_member_department'];
        $update_member_class = $_POST['edit_member_class'];

        // echo "<script type='text/javascript'>alert('$update_class');</script>";

        $sql = "UPDATE `member` SET `member_name`='$update_member_name',`member_department`='$update_member_department',`member_class`='$update_member_class' WHERE `member_id`='$update_member_id'";

        $re = mysqli_query($DBcon, $sql);

        if ($re) {
  				echo "<script type='text/javascript'>alert('Member Updated Successfully.');</script>";
  			}

  		  else {
  				echo "<script type='text/javascript'>alert('Error while updating.');</script>";
  			}

      }
?>
