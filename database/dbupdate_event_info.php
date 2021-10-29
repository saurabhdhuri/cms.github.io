<?php
      if(isset($_POST['save_edit_event_info']))
      {
        $update_event_id = $_POST['edit_event_id'];
        $update_event_name = $_POST['edit_event_name'];
        $update_event_description = $_POST['edit_event_description'];
        $update_event_date_from = $_POST['edit_event_date_from'];
        $update_event_date_to = $_POST['edit_event_date_to'];

        // echo "<script type='text/javascript'>alert('$update_class');</script>";

        $sql = "UPDATE `event` SET `event_name`='$update_event_name',`event_description`='$update_event_description',`event_date_from`='$update_event_date_from',`event_date_to`='$update_event_date_to' WHERE `event_id`='$update_event_id'";

        $re = mysqli_query($DBcon, $sql);

        if ($re) {
  				echo "<script type='text/javascript'>alert('Event Updated Successfully.');</script>";
  			}

  		  else {
  				echo "<script type='text/javascript'>alert('Error while updating.');</script>";
  			}

      }
?>
