<?php
class Model
{
    public $connection = "";
    public function __construct()
    {
        try {
            $this->connection = new mysqli("localhost", "root", "", "Blooddonation");
            // echo "connection succefully";
        } catch (Exception $e) {
            die(mysqli_error($this->connection));
        }

    }
// insert user data
    public function insert($table,$data)
    {
        $col = array_keys($data);
        $colnm = implode(",", $col);

        $val = array_values($data);
        $valnm = implode("','",$val);

        $insert = "insert into $table($colnm) values('$valnm')";
        
        $exe = mysqli_query($this->connection, $insert);

        return $exe;

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

    
   
    

}
?>