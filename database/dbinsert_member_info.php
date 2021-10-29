<?php
if (isset($_POST['save_member_info'])) {

  $add_member_name = $_POST['add_member_name'];
  $add_member_department = $_POST['add_member_department'];
  $add_member_class = $_POST['add_member_class'];

    // echo "<script type='text/javascript'>alert('$add_member_class');</script>";

  $check2 = "SELECT `member_name` FROM `member` WHERE `member_name` ='$add_member_name'";

  $sql2 = "INSERT INTO `member`(`member_name`, `member_department`, `member_class`, `committee_id`) VALUES ('$add_member_name','$add_member_department','$add_member_class','$chcommittee_id')";

  $recheck2 = mysqli_query($DBcon, $check2);
    if ($recheck2->num_rows !== 0) {
        echo "<script type='text/javascript'>alert('Member is already been added');</script>";
    }

    else {
        $re2 = mysqli_query($DBcon, $sql2);

        if ($re2) {
          echo "<script type='text/javascript'>alert('Member Added');</script>";

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
