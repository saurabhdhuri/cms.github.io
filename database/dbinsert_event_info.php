<?php
if (isset($_POST['save_event_info'])) {

  $add_event_name = $_POST['add_event_name'];
  $add_event_description = $_POST['add_event_description'];
  $add_event_date_from = $_POST['add_event_date_from'];
  $add_event_date_to = $_POST['add_event_date_to'];

    // echo "<script type='text/javascript'>alert('$chcommittee_id');</script>";

  $check = "SELECT `event_name` FROM `event` WHERE `event_name` ='$add_event_name'";

  $sql1 = "INSERT INTO `event`(`event_name`, `event_description`, `event_date_from`, `event_date_to`, `committee_id`) VALUES ('$add_event_name','$add_event_description','$add_event_date_from','$add_event_date_to','$chcommittee_id')";


  $recheck = mysqli_query($DBcon, $check);
    if ($recheck->num_rows !== 0) {
        echo "<script type='text/javascript'>alert('Event name is already been used');</script>";
    }

    else {
        $re1 = mysqli_query($DBcon, $sql1);

        if ($re1) {
          echo "<script type='text/javascript'>alert('Event Added');</script>";

                    $result = mysqli_query($DBcon,"SELECT COUNT(*) AS `total` FROM `event` WHERE `committee_id`='$chcommittee_id'");

                       if(($row = mysqli_fetch_array($result))!=0)
                       {
                        $num_events = $row['total'];

                      // echo "<script type='text/javascript'>alert('$num_events');</script>";

                      mysqli_query($DBcon,"UPDATE `committee` SET `events_conducted`='$num_events' WHERE `committee_id`='$chcommittee_id'");
                      }

          }
        else {
          echo "<script type='text/javascript'>alert('An error occured');</script>";
        }
    }

  }
 ?>
