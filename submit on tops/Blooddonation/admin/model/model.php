<?php
use FTP\Connection;

class model
{
    // connection for data base....
    public $connection = "";
    public function __construct()
    {
        session_start();
        try {
            $this->connection = new mysqli("localhost", "root", "", "blooddonation");
            // echo "connection succefully";
        } catch (Exception $e) {
            die(mysqli_error($e));
        }
    }

    // login for admin
    public function adminlogin($table, $un, $pass)
    {
        $select = "select * from $table where a_nm='$un' and a_pass='$pass'";
        $exe = mysqli_query($this->connection, $select);
        $fatch = mysqli_fetch_array($exe);
        $number_row = mysqli_num_rows($exe);
        if ($number_row == 1) {
            $_SESSION['a_id'] = $fatch['a_id'];
            $_SESSION['a_nm'] = $fatch['a_nm'];
            return true;
        } else {
            return false;
        }
    }

    // insert for blood table....
    public function insertdata($table, $data)
    {
        $col = array_keys($data);
        $colnm = implode(",", $col);
        $val = array_values($data);
        $valnm = implode("','", $val);
        $insert = "insert into $table($colnm) values ('$valnm')";
        $exe = mysqli_query($this->connection, $insert);
        return $exe;
    }

    //show all databasetable...
    public function showdata($table)
    {
        $select = "SELECT * FROM $table";
        $exe = mysqli_query($this->connection, $select);
        while ($fatch = mysqli_fetch_array($exe)) {
            $arr[] = $fatch;
        }
        return $arr;
    }

    // user for join
    public function userprofile($user, $blood, $city, $col, $col1)
    {
        $select = "select * from $user join $blood on $col join $city on $col1 ";
        $exe = mysqli_query($this->connection, $select);
        while ($fatch = mysqli_fetch_array($exe)) {
            $arr[] = $fatch;
        }
        return $arr;
    }
    // update user profile for fatch
    public function upduserprofile($user, $blood, $city, $col, $col1, $colnm, $id)
    {
        $select = "select * from $user join $blood on $col join $city on $col1 where $colnm='$id'";
        $exe = mysqli_query($this->connection, $select);
        while ($fatch = mysqli_fetch_array($exe)) {
            $arr[] = $fatch;
        }
        return $arr;
    }

    // update user profile
    public function updprofile($table, $fnm, $unm, $dob, $gender, $email, $bg, $mobile, $path, $city, $pin, $add, $colnm, $id)
    {
        $update = "update $table set fnm='$fnm',unm='$unm',dob='$dob',gender='$gender',email='$email',bg_id='$bg',mobile='$mobile',photo='$path',c_id='$city',pincode='$pin',address='$add' where $colnm='$id'";
        $exe = mysqli_query($this->connection, $update);
        return $exe;
    }

    // delete data for any table....
    public function deletedata($table, $id)
    {
        $col = array_keys($id);
        $colnm = implode(",", $col);
        $val = array_values($id);
        $valnm = implode("','", $val);

        $delete = "delete from $table where $colnm='$valnm'";
        $exe = mysqli_query($this->connection, $delete);
        return $exe;
    }
    // update for fatch
    public function updfatch($table, $colnm, $id)
    {
        $select = "select * from $table where $colnm='$id'";
        $exe = mysqli_query($this->connection, $select);
        while ($fatch = mysqli_fetch_array($exe)) {
            $arr[] = $fatch;
        }
        return $arr;
    }

    // update Blood data
    public function updateblood($table, $bg, $don, $rec, $colnm, $id)
    {
        $update = "update $table set bloodgroup='$bg',donate='$don',receive='$rec' where $colnm='$id'";
        $exe = mysqli_query($this->connection, $update);
        return $exe;
    }

    // update Hospital data
    public function updatehospital($table, $hnm, $hnumber, $haddr, $colnm, $id)
    {
        $update = "update $table set h_nm='$hnm',h_phone='$hnumber',h_add='$haddr' where $colnm='$id'";

        $exe = mysqli_query($this->connection, $update);
        return $exe;
    }

    // count data in data table
    public function count($table)
    {
        $select = "SELECT COUNT(*) FROM $table";
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

    // logout for admin
    public function adminlogout()
    {
        unset($_SESSION['a_id']);
        unset($_SESSION['a_nm']);
        session_destroy();
        return true;
    }
}
?>