<html>
<head>
<link rel="stylesheet" type="text/css" href="css/login_index.css">

    <script type="text/javascript">
          function showpassword() {
            var x = document.getElementById("input_reg_password");
            if (x.type == "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    </head>
    <?php
        include "login_header.php";
        include "database/dbconnect.php";
        include "database/dbsign_in.php";
        include "database/dbsign_up.php";
        // include "database/dbsign_out.php";
        ?>
    <body>
        <div id="dv_main_div">
        <div id="dv_sign_in_form">

            <h2 class="txt_form_type_title">Sign in</h2>

            <b class="txt_form_question">Have an account? <br> Sign in here..</b>

            <form method="post">
        <input type="text" id="input_username" placeholder="Username" name="sign_in_username">

        <input type="password" id="input_password" placeholder="Password" name="sign_in_password">
            <!-- <a href="main_index.php"> -->
            <input type="submit" id="btn_sign_in" value="Sign in" name="sign_in" class:"btn">

          </form>

            </div>

            <div id="img_or_divider">
            </div>


        <div id="dv_sign_up_form">

            <h2 class="txt_form_type_title">Sign up</h2>

            <b class="txt_form_question">Don't have an account? <br> No problem Sign up here..</b>

        <form method="post" id="sign_up_form">


            <b id="txt_full_name" class="txt_sign_up">Name:</b>
            <input type="text" id="input_reg_fullname" name="fullname" placeholder="Full name" class="sign_up_fields" required><br>

            <b id="txt_username" class="txt_sign_up">Username:</b>
            <input type="text" id="input_reg_username" name="username" placeholder="Username" class="sign_up_fields" required><br>

            <b id="txt_password" class="txt_sign_up">Password:</b>
            <input type="password" id="input_reg_password" name="password" class="sign_up_fields" required>
              <input type='checkbox' onclick='showpassword()' id='checkbox'>
            <input type="image" src="images/show.png" alt="Show" height="30px" width="30px" align="center">
            <br>

            <b id="txt_committee_name" class="txt_sign_up">Committee:</b>

            <?php
            $query=mysqli_query($DBcon,"select committee_name from committee");
            echo "<select id='input_reg_committee' name='committee' class='sign_up_fields' required>";
            while($result=mysqli_fetch_array($query))
            {
              echo "<option value='" . $result['committee_name'] ."'>".$result['committee_name']  ."</option>";
            }
            echo "</select>";
            ?>
            <!-- <select id="input_reg_committee" name="committee" class="sign_up_fields" required>
              <option value="null">--Select Committee--</option>
              <option value="academic">Academic Committee</option>
              <option value="alumni">Alumni Committee</option>
              <option value="cultural">Cultural Committee</option>
              <option value="placement">Placement Committee</option>
              <option value="sahyog">Sahyog Committee</option>
              <option value="sponsorship">Sponsorship Committee</option>
              <option value="sports">Sports Committee</option>
              <option value="council">Students Council</option>
            </select> -->
            <br>

            <b id="txt_department_name" class="txt_sign_up">Department:</b>
            <select id="input_reg_department" name="department" class="sign_up_fields" required>
              <option value="null">--Select Department--</option>
              <option value="MCA">MCA</option>
              <option value="MCA">MMS</option>
              <option value="AIMA">AIMA</option>
              <option value="PGDM">PGDM</option>
              <option value="PGDM-Pharma">PGDM-Pharma</option>
              <option value="PGDM-Biotech">PGDM-Biotech</option>
              <option value="PGD-BA">PGD-BA</option>
            </select>
            <br>


            <b id="txt_class_year" class="txt_sign_up">Class:</b>
            <div id="dv_input_reg_class_year">
            <input type="radio" name="class_year" value="FY" required><b class="txt_sign_up">FY
            <input type="radio" name="class_year" value="SY" required>SY
            <input type="radio" name="class_year" value="TY" required>TY</b>
            </div>

            <input type="submit" id="btn_sign_up" value="Sign up" name="sign_up" class="btn">

    </form>
        </div>
            </div>

    </body>
</html>
