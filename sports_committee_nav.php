<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/committee_nav.css">
</head>
    <?php

    $row1 = "SELECT `member_name` FROM `member` WHERE `committee_id` = '7'";
    $re1 = mysqli_query($DBcon, $row1);
    ?>
<body>
<div class="right_navigation_bar">
     <div class="right_navigation_bar_panels">
       <a href="settings.php"><strong>Committee Members</strong></a>
       <ul>

         <?php
           if (mysqli_num_rows($re1) == 0) {
             echo "<li><b class='txt_navigation_bar'>No members</b></li>";
           }
           if (mysqli_num_rows($re1) > 0){
             while (  $record1 = mysqli_fetch_assoc($re1) ) {

              echo "<li><b class='txt_navigation_bar'>{$record1['member_name']}</b></li>\n";
             }
           }
         ?>

     </ul>
    </div>
</div>
</body>
</html>
