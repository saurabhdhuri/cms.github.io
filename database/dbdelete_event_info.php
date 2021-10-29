<?php
if (isset($_POST['delete_event'])) {

  $delete_event_name = $_POST['delete_event_name'];

  $sql1 = "DELETE FROM `event` WHERE `event_name`='$delete_event_name'";

  $re1 = mysqli_query($DBcon, $sql1);

        if ($re1) {
          echo "<script type='text/javascript'>alert('Event Deleted Successfully');</script>";

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
?>
