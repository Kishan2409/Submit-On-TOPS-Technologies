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

    //show all data for blood table...
    public function showdata($table)
    {
        $select = "SELECT * FROM $table";
        $exe = mysqli_query($this->connection, $select);
        while ($fatch = mysqli_fetch_array($exe)) {
            $arr[] = $fatch;
        }
        return $arr;
    }

    // delete data for any table....
    public function deletedata($table,$id)
    {
      $col=array_keys($id);
      $colnm=implode(",",$col);
      $val=array_values($id);
      $valnm=implode("','",$val);

      $delete="delete from $table where $colnm='$valnm'";
      $exe=mysqli_query($this->connection,$delete);
      return $exe;
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