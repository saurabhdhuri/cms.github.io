<?php
    if(isset($_SESSION['username']))
    {
      // echo "<script type='text/javascript'>alert('Session is running');</script>";

      if($uname!="admin")
      {
        $sql = "SELECT  `committee_head_username`, `committee_head_password`, `committee_head_name`, `committee_head_department`, `committee_head_class`, `committee_id` FROM `committee_head` WHERE `committee_head_username`='$uname'";

        $re = mysqli_query($DBcon, $sql);

        if (mysqli_num_rows($re) == 0)
        {
          echo "<script type='text/javascript'>alert('unable to retrive');</script>";
        }

        if (mysqli_num_rows($re) > 0)
        {
          while (  $record1 = mysqli_fetch_assoc($re) )
          {
            $chusername = $record1['committee_head_username'];
            $chpassword = $record1['committee_head_password'];
            $chfull_name = $record1['committee_head_name'];
            $chdepartment = $record1['committee_head_department'];
            $chclass = $record1['committee_head_class'];
            $chcommittee_id = $record1['committee_id'];

            $cname = mysqli_query($DBcon,"SELECT `committee_name` FROM `committee` WHERE `committee_id` = $chcommittee_id");

            while($row = $cname->fetch_assoc())
            $chcommittee_name = $row['committee_name'];

            // echo "<script type='text/javascript'>alert('$chcommittee_name');</script>";
            // echo '<b>Hi, '.$fname.' '.$lname.'</b>';
          }
        }


          // echo "<script type='text/javascript'>alert('$confi');</script>";


                // $edit_username = $_POST['edit_username'];
                // $edit_password = $_POST['edit_password'];
                // $edit_fullname = $_POST['edit_fullname'];
                // $edit_committee = $_POST['edit_committee'];
                // $edit_department = $_POST['edit_department'];
                // $edit_class = $_POST['edit_class'];
          // $edit_username = 0;



          // echo "<script type='text/javascript'>alert('$edit_username');</script>";
          // UPDATE `committee_head` SET `committee_head_username`=$edit_username,`committee_head_password`=$edit_password,`committee_head_name`=$edit_fullname,`committee_head_department`=$edit_department,`committee_head_class`=$edit_class,`committee_id`=[value-7] WHERE 1

        }
    }
?>
