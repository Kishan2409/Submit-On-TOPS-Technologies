<?php
class Model
{
    // connection for database
    public $connection = "";
    public function __construct()
    {
        session_start();
        try {
            $this->connection = new mysqli("localhost", "root", "", "Blooddonation");
            // echo "connection succefully";
        } catch (Exception $e) {
            die(mysqli_error($this->connection));
        }
    }
    // forget password
    public function forgetuserpass($table, $colem, $em)
    {
        $select = "select pass from $table where $colem='$em'";
        $exe = mysqli_query($this->connection, $select);
        $fatch = mysqli_fetch_array($exe);
        $pass = base64_decode($fatch['pass']);
        $num_row = mysqli_num_rows($exe);
        if ($num_row == 1) {
            return $pass;
        } else {
            return false;
        }
    }
    // login for user
    public function userlogin($table, $un, $pass)
    {
        $select = "select * from $table where unm='$un' and pass='$pass'";
        $exe = mysqli_query($this->connection, $select);
        $fatch = mysqli_fetch_array($exe);
        $num_row = mysqli_num_rows($exe);
        if ($num_row == 1) {
            $_SESSION['u_id'] = $fatch['u_id'];
            $_SESSION['unm'] = $fatch['unm'];
            $_SESSION['email'] = $fatch['email'];
            return true;
        } else {
            return false;
        }
    }

    // change password
    public function chnagepass($table, $colnm, $oldpass, $newpass, $confpass, $id)
    {
        $select = "select pass from $table where $colnm='$id'";
        $exe = mysqli_query($this->connection, $select);
        $fetch = mysqli_fetch_array($exe);
        $pass = $fetch["pass"];
        if ($pass == $oldpass && $newpass == $confpass) {
            $upd = "update $table set pass='$newpass' , con_pass='$confpass' where $colnm='$id'";
            $exe = mysqli_query($this->connection, $upd);
            return $exe;
        } else {
            return false;
        }
    }
    // user profile
    public function userprofile($user, $blood, $city, $col, $col1, $colnm, $un)
    {
        $select = "select * from $user join $blood on $col join $city on $col1 where $colnm='$un'";
        $exe = mysqli_query($this->connection, $select);
        while ($fatch = mysqli_fetch_array($exe)) {
            $arr[] = $fatch;
        }
        return $arr;
    }
    //show data for blood receiver
    public function receiveblood($user, $blood, $city, $col, $col1)
    {
        $select = "select * from $user join $blood on $col join $city on $col1";
        $exe = mysqli_query($this->connection, $select);
        while ($fatch = mysqli_fetch_array($exe)) {
            $arr[] = $fatch;
        }
        return $arr;
    }

    //show data for blood donor
    public function donorblood($user, $blood, $city, $col, $col1)
    {
        $select = "select * from $user join $blood on $col join $city on $col1";
        $exe = mysqli_query($this->connection, $select);
        while ($fatch = mysqli_fetch_array($exe)) {
            $arr[] = $fatch;
        }
        return $arr;
    }
    // show all data from blooddonatin for bloodgroup and city table...
    public function show($table)
    {
        // show blood group
        $select = "select * from $table";
        $exe = mysqli_query($this->connection, $select);
        while ($fatch = mysqli_fetch_array($exe)) {
            $arr[] = $fatch;
        }
        return $arr;
    }

    // insert user data
    public function insert($table, $data)
    {
        $col = array_keys($data);
        $colnm = implode(",", $col);
        $val = array_values($data);
        $valnm = implode("','", $val);
        $insert = "insert into $table($colnm) values('$valnm')";
        $exe = mysqli_query($this->connection, $insert);
        return $exe;
    }

    // louout for user
    public function logoutuser()
    {
        unset($_SESSION['u_id']);
        unset($_SESSION['unm']);
        unset($_SESSION['email']);
        session_destroy();
        return true;
    }

}

?>