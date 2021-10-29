<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/settings.css" />
  <script src="js/3.2.1_jquery.min.js"></script>
  <script src="js/3.3.7_bootstrap.min.js"></script>
  <script src="js/jquery-3.2.1.js"></script>
  <script type="text/javascript" charset="utf-8">
          function showpassword() {
            var x = document.getElementById("pass");
            if (x.type == "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
  </script>
  <script>
  $(document).ready(function(){
    $('#btn_add_event_info').click(function()
    {
      $('#dv_add_new_event_dialog_box').show();
    });

    $('#btn_cancel_event_info').click(function()
    {
      $('#dv_add_new_event_dialog_box').hide();
    });

    $('#btn_delete_event_info').click(function()
    {
      $('#dv_delete_event_dialog_box').show();
    });

    $('#btn_cancel_delete_event_info').click(function()
    {
      $('#dv_delete_event_dialog_box').hide();
    });

                          $('#btn_edit_event_info').click(function()
                          {
                            $('#dv_edit_event_dialog_box').show();
                          });

                          $('#btn_cancel_edit_event_info').click(function()
                          {
                            $('#dv_edit_event_dialog_box').hide();
                          });

    $('#btn_add_member_info').click(function()
    {
      $('#dv_add_new_member_dialog_box').show();
    });

    $('#btn_cancel_member_info').click(function()
    {
      $('#dv_add_new_member_dialog_box').hide();
    });

    $('#btn_delete_member_info').click(function()
    {
      $('#dv_delete_member_dialog_box').show();
    });

    $('#btn_cancel_delete_member_info').click(function()
    {
      $('#dv_delete_member_dialog_box').hide();
    });

                          $('#btn_edit_member_info').click(function()
                          {
                            $('#dv_edit_member_dialog_box').show();
                          });

                          $('#btn_cancel_edit_member_info').click(function()
                          {
                            $('#dv_edit_member_dialog_box').hide();
                          });
  });
  </script>
</head>
  <?php
    // include "database/dbconnect.php";
    include "main_header.php";
    include "main_nav.php";
    include "database/dbpersonal_info.php";
    include "database/dbinsert_event_info.php";
    include "database/dbdelete_event_info.php";
    include "database/dbinsert_member_info.php";
    include "database/dbdelete_member_info.php";
    include "database/dbupdate_personal_info.php";
    include "database/dbupdate_event_info.php";
    include "database/dbupdate_member_info.php";

    if($uname!="admin")
    {
    $row1 = "SELECT `event_name`, `event_date_from`, `event_date_to`, `event_id` FROM `event` WHERE `committee_id` = '$cid'";
    $re1 = mysqli_query($DBcon, $row1);

    $row2 = "SELECT `member_name`, `member_department`, `member_class`, `member_id` FROM `member` WHERE `committee_id` = '$cid'";
    $re2 = mysqli_query($DBcon, $row2);
    }
    else {
      $row1 = "SELECT `event_name`, `event_date_from`, `event_date_to`, `event_id` FROM `event` WHERE `committee_id` = '1'
      OR `committee_id` = '2' OR `committee_id` = '3'
      OR `committee_id` = '4' OR `committee_id` = '5' OR `committee_id` = '6'
      OR `committee_id` = '7' OR `committee_id` = '8'";

      $re1 = mysqli_query($DBcon, $row1);

      $row2 = "SELECT `member_name`, `member_department`, `member_class`, `member_id` FROM `member` WHERE `committee_id` = '1'
      OR `committee_id` = '2' OR `committee_id` = '3'
      OR `committee_id` = '4' OR `committee_id` = '5' OR `committee_id` = '6'
      OR `committee_id` = '7' OR `committee_id` = '8'";

      $re2 = mysqli_query($DBcon, $row2);
    }
    // echo "<script type='text/javascript'>alert('$chcommittee_id');</script>";
  ?>

<body>

  <div class="main_body">


    <?php

    if(isset($_SESSION['username'])) {

      // $uname = $_SESSION['username'];

    if($uname!="admin"){

    // echo "<script type='text/javascript'>alert('$uname');</script>";
    echo "<div class='dv_personal_info'>
      <form method='post'>
      <h2>Personal Info:</h2>
      <hr>

      <div id='dv_username' class='dv_settings_fields'>
        <b>Username:</b>
      <input type='text' class='edit_input_field' name='edit_username' value='$chusername'>
      </div>

      <div id='dv_password' class='dv_settings_fields'>
        <b>Password:</b>
      <input type='password' class='edit_input_field' name='edit_password' value='$chpassword' id='pass'>
      <input type='checkbox' onclick='showpassword()' id='checkbox'>Show Password
      </div>


      <div id='dv_fullname' class='dv_settings_fields'>
        <b>Full name:</b>
      <input type='text' class='edit_input_field' name='edit_fullname' value='$chfull_name'>
      </div>

      <div id='dv_committee' class='dv_settings_fields'>
        <b>Committee:</b>
      <input type='text' class='edit_input_field' name='edit_committee' value='$chcommittee_name'>
      </div>

      <div id='dv_department' class='dv_settings_fields'>
        <b>Department:</b>
      <input type='text' class='edit_input_field' name='edit_department' value='$chdepartment'>
      </div>

      <div id='dv_class' class='dv_settings_fields'>
        <b>Class:</b>
      <input type='text' class='edit_input_field' name='edit_class' value='$chclass'>
      </div>

      <div class='dv_settings_btns'>
        <input type='submit' value='Save Changes' name='save_personal_info' onclick='confirmation()'>
        <input type='reset' value='Cancel' name='cancel_personal_info'>
      </div>
    </form>
    </div>

    <br>
    <br>
    <br>";
        }
      }
      ?>

      <div class="dv_event_info">
      <h2>Event Info:</h2>
      <hr>
      <form>
      <table id="tables_event_info" border="1">
      <thead>
        <tr>
            <th height="35">Event ID</th>
            <th height="35">Event Name</th>
            <th height="35">Date From</th>
            <th height="35">Date To</th>
        </tr>
      </thead>
      <tbody>
        <?php

          if (mysqli_num_rows($re1) == 0) {
            echo "<tr><td height='35' align='center'>------</td>
                      <td height='35' align='center'>------</td>
                      <td height='35' align='center'>No events Conducted</td>
                      <td height='35' align='center'>------</td>
                  </tr>";
          }
          if (mysqli_num_rows($re1) > 0){
            while (  $record1 = mysqli_fetch_assoc($re1) ) {

              echo "<tr><td height='35' align='center'>{$record1['event_id']}</td>
                        <td height='35' align='center'>{$record1['event_name']}</td>
                        <td height='35' align='center'>{$record1['event_date_from']}</td>
                        <td height='35' align='center'>{$record1['event_date_to']}</td>
                    </tr>\n";
            }
          }
        ?>
      </tbody>
        </table>
          <div class="dv_settings_btns">
            <input id="btn_add_event_info" type="button" value="Add Event" name="add_event_info">
            <input id="btn_delete_event_info" type="button" value="Delete Event" name="delete_event_info">
            <input id="btn_edit_event_info" type="button" value="Edit Event" name="edit_event_info">
          </div>
        </form>



        <div id="dv_add_new_event_dialog_box">
          <form method="post">
          <div id="dv_event_name" class="dv_settings_fields">
            <b>Event Name:</b>
          <input type="text" class="edit_input_field" name="add_event_name" required>
          </div>

          <div id="dv_event_description" class="dv_settings_fields">
            <b>Event Description:</b>
            <textarea rows="10" cols="30" name="add_event_description" required></textarea>
          </div>

          <div id="dv_event_date_from" class="dv_settings_fields">
            <b>Event Date From:</b>
          <input type="date" class="edit_input_field" name="add_event_date_from" required>
          </div>

          <div id="dv_event_date_to" class="dv_settings_fields">
            <b>Event Date To:</b>
          <input type="date" class="edit_input_field" name="add_event_date_to" required>
          </div>

          <div class="dv_settings_btns">
            <input type="submit" value="Save Changes" name="save_event_info">
            <input id="btn_cancel_event_info" type="reset" value="Cancel" name="cancel_event_info">
          </div>
          </form>
        </div>


        <div id="dv_delete_event_dialog_box">
          <form method="post">
          <div class="dv_settings_fields">
            <b>Event Name:</b>
          <input type="text" class="edit_input_field" name="delete_event_name" required>
          </div>

          <div class="dv_settings_btns">
            <input type="submit" value="Delete" name="delete_event">
            <input id="btn_cancel_delete_event_info" type="reset" value="Cancel" name="cancel_delete_event_info">
          </div>
          </form>
        </div>

        <div id="dv_edit_event_dialog_box">
          <form method="post">

          <div id="dv_event_id" class="dv_settings_fields">
              <b>Event ID:</b>
          <input type="text" class="edit_input_field" name="edit_event_id" required>
          </div>

          <div id="dv_event_name" class="dv_settings_fields">
            <b>Event Name:</b>
          <input type="text" class="edit_input_field" name="edit_event_name" required>
          </div>

          <div id="dv_event_description" class="dv_settings_fields">
            <b>Event Description:</b>
            <textarea rows="10" cols="30" name="edit_event_description" required></textarea>
          </div>

          <div id="dv_event_date_from" class="dv_settings_fields">
            <b>Event Date From:</b>
          <input type="date" class="edit_input_field" name="edit_event_date_from" required>
          </div>

          <div id="dv_event_date_to" class="dv_settings_fields">
            <b>Event Date To:</b>
          <input type="date" class="edit_input_field" name="edit_event_date_to" required>
          </div>

          <div class="dv_settings_btns">
            <input type="submit" value="Save Changes" name="save_edit_event_info">
            <input id="btn_cancel_edit_event_info" type="reset" value="Cancel" name="cancel_edit_event_info">
          </div>
          </form>
        </div>

          </div>


<br>
<br>
<br>


      <div class="dv_member_info">
      <h2>Member Info:</h2>
      <hr>
      <form>
      <table id="tables_member_info" border="1">
      <thead>
        <tr><th height="35">Member ID</th>
            <th height="35">Member Name</th>
            <th height="35">Member Department</th>
            <th height="35">Member Class</th>
        </tr>
      </thead>
      <tbody>
        <?php

          if (mysqli_num_rows($re2) == 0) {
            echo "<tr><td height='35' align='center'>------</td>
                      <td height='35' align='center'>------</td>
                      <td height='35' align='center'>No events Conducted</td>
                      <td height='35' align='center'>------</td>
                  </tr>";
          }
          if (mysqli_num_rows($re2) > 0){
            while (  $record2 = mysqli_fetch_assoc($re2) ) {

              echo "<tr><td height='35' align='center'>{$record2['member_id']}</td>
                        <td height='35' align='center'>{$record2['member_name']}</td>
                        <td height='35' align='center'>{$record2['member_department']}</td>
                        <td height='35' align='center'>{$record2['member_class']}</td>
                    </tr>\n";
            }
          }
        ?>
      </tbody>
        </table>
          <div class="dv_settings_btns">
            <input id="btn_add_member_info" type="button" value="Add member" name="add_member_info">
            <input id="btn_delete_member_info" type="button" value="Delete member" name="delete_member_info">
            <input id="btn_edit_member_info" type="button" value="Edit Member" name="edit_member_info">
          </div>
        </form>


        <div id="dv_add_new_member_dialog_box">
          <form method="post">
          <div id="dv_member_name" class="dv_settings_fields">
            <b>Member Name:</b>
          <input type="text" placeholder="Full Name" class="edit_input_field" name="add_member_name" required>
          </div>

          <div id="dv_member_department" class="dv_settings_fields">
            <b>Member Department:</b>
          <input type="text" placeholder="BLOCK LETTERS" class="edit_input_field" name="add_member_department" required>
          </div>

          <div id="dv_member_class" class="dv_settings_fields">
            <b>Member Class:</b>
          <input type="text" placeholder="BLOCK LETTERS" class="edit_input_field" name="add_member_class" required>
          </div>

          <div class="dv_settings_btns">
            <input type="submit" value="Save Changes" name="save_member_info">
            <input id="btn_cancel_member_info" type="reset" value="Cancel" name="cancel_member_info">
          </div>
          </form>
        </div>


        <div id="dv_delete_member_dialog_box">
          <form method="post">
          <div class="dv_settings_fields">
            <b>Member Name:</b>
          <input type="text" placeholder="Full Name" class="edit_input_field" name="delete_member_name" required>
          </div>

          <div class="dv_settings_btns">
            <input type="submit" value="Delete" name="delete_member">
            <input id="btn_cancel_delete_member_info" type="reset" value="Cancel" name="cancel_delete_member_info">
          </div>
          </form>
        </div>

        <div id="dv_edit_member_dialog_box">
          <form method="post">

          <div id="dv_member_id" class="dv_settings_fields">
              <b>Member ID:</b>
          <input type="text" class="edit_input_field" name="edit_member_id" required>
          </div>

          <div id="dv_member_name" class="dv_settings_fields">
            <b>Member Name:</b>
          <input type="text" class="edit_input_field" name="edit_member_name" required>
          </div>

          <div id="dv_member_department" class="dv_settings_fields">
            <b>Member Department:</b>
          <input type="text" class="edit_input_field" name="edit_member_department" required>
          </div>

          <div id="dv_member_class" class="dv_settings_fields">
            <b>Member Class:</b>
          <input type="text" class="edit_input_field" name="edit_member_class" required>
          </div>

          <div class="dv_settings_btns">
            <input type="submit" value="Save Changes" name="save_edit_member_info">
            <input id="btn_cancel_edit_member_info" type="reset" value="Cancel" name="cancel_edit_member_info">
          </div>
          </form>
        </div>

          </div>




  </div>

</body>
</html>
