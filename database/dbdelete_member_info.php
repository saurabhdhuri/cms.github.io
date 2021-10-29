<?php
if (isset($_POST['delete_member'])) {

  $delete_member_name = $_POST['delete_member_name'];

  $check2 = "SELECT `member_name` FROM `member` WHERE `member_name` ='$delete_member_name'";

  $sql1 = "DELETE FROM `member` WHERE `member_name`='$delete_member_name'";

  $recheck2 = mysqli_query($DBcon, $check2);
    if ($recheck2->num_rows == 0) {
        echo "<script type='text/javascript'>alert('Unable to find member');</script>";
    }

    else {
      $re1 = mysqli_query($DBcon, $sql1);

            if ($re1) {
              echo "<script type='text/javascript'>alert('Member Deleted Successfully');</script>";

              $result = mysqli_query($DBcon,"SELECT COUNT(*) AS `total` FROM `member` WHERE `committee_id`='$chcommittee_id'");

                 if(($row = mysqli_fetch_array($result))!=0)
                 {
                  $num_members = $row['total'];

                // echo "<script type='text/javascript'>alert('$num_members');</script>";

                mysqli_query($DBcon,"UPDATE `committee` SET `committee_members`='$num_members' WHERE `committee_id`='$chcommittee_id'");
                }
            }
            else {
              echo "<script type='text/javascript'>alert('An error occured');</script>";
            }
    }


  }
?>
