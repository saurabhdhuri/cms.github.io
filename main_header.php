<html>
    <head>
<link rel="stylesheet" type="text/css" href="css/main_header.css">
<script src="js/jquery-3.2.1.js"></script>
<script>
$(document).ready(function()
    {
      $("#dv_myprofile").click(function()
      {
          $
          $("#dv_myprofile_toggle").slideToggle(100);
        });

      });
</script>
        </head>
        <?php
        include "database/dbconnect.php";
        // include "database/dbpersonal_info.php";
        // include "database/dbsign_in.php";
            session_start();
            if(isset($_SESSION['username']))
            {
              $uname = $_SESSION['username'];
              // echo "<script type='text/javascript'>alert('$uname');</script>";
              if($uname!="admin")
              {
                $re = mysqli_query($DBcon,"SELECT `committee_id` FROM `committee_head` WHERE `committee_head_username`='$uname'");

              if (mysqli_num_rows($re) == 0)
              {
                echo "<script type='text/javascript'>alert('unable to retrive');</script>";
              }

              if (mysqli_num_rows($re) > 0)
              {
                  while (  $record1 = mysqli_fetch_assoc($re) )
                {
                  $cid = $record1['committee_id'];
                  // echo "<script type='text/javascript'>alert('$cid');</script>";
                }
              }
              }

          }

        ?>
    <body>

        <div id="header_bar">
<!--            <img src="../images/cover/New-Interior-Header-Image-Template_2015_payment-strategy-960x253.jpg">-->
            <div class="dv_siescoms_events_portal_logo">
            <b id="txt_siescoms_events_portal">SIESCOMS Events Portal</b>
            </div>

            <div id="dv_myprofile">
            <!-- <img id="img2" src="images/logo_&_symbols/blank-profile-picture-973460_960_720.png"> -->
            </div>
            <div id="dv_myprofile_toggle">
              <div>
                <img src="images\logo_&_symbols\blank-profile-picture-973460_960_720.png" class="main_header_profile_photo" alt="avatar">
              </div>
                <div id="dv_welcome_user">
                  <?php

                  // session_start();
                  if(isset($_SESSION['username'])) {
                    // echo "<script type='text/javascript'>alert('Session is running');</script>";
                    $uname = $_SESSION['username'];
                    echo "<div id='dv_after_login'>
                        <a href='settings.php'><u id='txt_settings'>Settings</u></a>
                        <a href='database/dbsign_out.php'><u id='txt_sign_out'>Sign out</u></a>
                        </div>";
                      }
                    else {
                      echo "<div id='dv_before_login'>
                      <a href='login_index.php'><u id='txt_sign_in'>Sign in</u></a>
                      <a href='login_index.php' ><u id='txt_sign_up'>Sign up</u></a>
                      </div>";
                    }

                  //
                  //   	$sql = "SELECT `user_first_name`, `user_last_name` FROM `user` WHERE `user_email` = '$uname'";
                  //     $re = mysqli_query($DBcon, $sql);
                  //
                  //     if (mysqli_num_rows($re) == 0) {
                  //       echo "<b>Hi, User</b>";
                  //     }
                  //
                  //     if (mysqli_num_rows($re) > 0){
                  //       while (  $record1 = mysqli_fetch_assoc($re) ) {
                  //         $fname = $record1['user_first_name'];
                  //         $lname = $record1['user_last_name'];
                  //         echo '<b>Hi, '.$fname.' '.$lname.'</b>';
                  //       }
                  //     }
                  //
                  // }
                   ?>



          </div>
        </div>
      </div>
    </body>
</html>
