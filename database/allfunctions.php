<?php

class allfunctions {


    function connect()
    {
		mysql_connect("localhost","root","");
		mysql_select_db("payment_&_billing_services");
    }
    function insertdb() {
        $j = 0;
        $col = '';
        $val = '';
        $info = func_get_args();
        $num = func_num_args();

        $table = "`" . $info[0] . "`";

        for ($j = 1; $j < $num; $j++) {
            if (($j % 2) == 0) {
                $val = $val . "'" . $info[$j] . "',";
            }
            if (($j % 2) == 1) {
                $col = $col . "`" . $info[$j] . "`,";
            }
        }
        $val = rtrim($val, ",");
        $col = rtrim($col, ",");
        $que=mysql_query("insert into $table($col) values($val)");
        return $que;
    }
    function login($username,$password,$tablename)
    {

    $query=mysql_query("select * from ".$tablename." where user_username like '$username' and user_password like '$password'");
    $row=mysql_num_rows($query);
    return $row;

    }
    function update($tablename)
    {
        $query=mysql_query("update ".$tablename." set FirstName='$b',LastName='$c',Email='$d',ContactNo='$e',Gender='$f',Dob='$g',FavourateFood='$h',FavourateDrink='$i',FavouratePlace='$j' where Id=$Id");
        return $query;
    }

//     function randomPassword($length,$count,$characters) {
//
// // $length - the length of the generated password
// // $count - number of passwords to be generated
// // $characters - types of characters to be used in the password
//
// // define variables used within the function
//     $symbols = array();
//     $passwords = array();
//     $used_symbols = '';
//     $pass = '';
//
// // an array of different character types
//     $symbols["lower_case"] = 'abcdefghijklmnopqrstuvwxyz';
//     $symbols["upper_case"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $symbols["numbers"] = '1234567890';
//     $symbols["special_symbols"] = '!?~@#-_+<>[]{}';
//
//     $characters = str_split(",",$characters); // get characters types to be used for the passsword
//     foreach ($characters as $key=>$value) {
//         $used_symbols .= $symbols[$value]; // build a string with all characters
//       }
//     $symbols_length = strlen($used_symbols) - 1; //strlen starts from 0 so to get number of characters deduct 1
//
//     for ($p = 0; $p < $count; $p++) {
//         $pass = '';
//         for ($i = 0; $i < $length; $i++) {
//             $n = rand(0, $symbols_length); // get a random character from the string with all characters
//             $pass .= $used_symbols[$n]; // add the character to the password string
//         }
//         $passwords[] = $pass;
//       }
//
//     return $passwords; // return the generated password
//     }
// }
?>


<!-- LOGIN_INDEX:-
LOWERPHP:

UPPERPHP:
<?php

 ?> -->
