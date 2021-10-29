<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/committee_index.css" />

</head>
  <?php
    include "main_header.php";
    include "main_nav.php";
    include "academic_committee_nav.php";

    $row1 = "SELECT `event_name`, `event_description`, `event_date_from`, `event_date_to` FROM `event` WHERE `committee_id` = '1'";
    $re1 = mysqli_query($DBcon, $row1);

  ?>

<body>
  <div class="main_body">
    <h1 class="txt_committee_name"> Academic Committee: </h1>
    <div class="dv_committee_events">
    <table class="table_committee_events_info" >
    <thead>
      <tr><th><u>Event Name</u></th>
          <th><u>Event Description</u></th>
          <th><u>Event Date From</u></th>
          <th><u>Event Date To</u></th>
      </tr>
    </thead>
    <tbody>
      <?php

        if (mysqli_num_rows($re1) == 0) {
          echo "<tr><td align='center'>------</td>
                    <td align='center'>No events</td>
                    <td align='center'>Conducted</td>
                    <td align='center'>------</td>
                </tr>";
        }
        if (mysqli_num_rows($re1) > 0){
          while (  $record1 = mysqli_fetch_assoc($re1) ) {

            echo "<tr><td align='center'>{$record1['event_name']}</td>
                      <td align='center'>{$record1['event_description']}</td>
                      <td align='center'>{$record1['event_date_from']}</td>
                      <td align='center'>{$record1['event_date_to']}</td>
                  </tr>\n";
          }
        }
      ?>
    </tbody>
      </table>
    </div>

  </div>
</body>
</html>
