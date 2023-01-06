<?php
use FTP\Connection;
class model
{
    // connection for data base....
    public $connection= "";
    public function __construct()
    {
        try{
            $this->connection=new mysqli("localhost","root","","blooddonation");

           // echo "connection succefully";
        }
        catch(Exception $e)
        {
            die(mysqli_error($e));
        }
        
    }
    // insert for blood table....
    public function insertdata($table,$data)
    {
        $col=array_keys($data);
        $colnm = implode(",",$col);

        $val=array_values($data);
        $valnm = implode("','",$val);

        $insert = "insert into $table($colnm) values ('$valnm')";
        $exe = mysqli_query($this->connection, $insert);
        return $exe;
    }

    //show all data for blood table...
    public function showdata($table)
    {
        $select = "SELECT * FROM $table";
        $exe = mysqli_query($this->connection,$select);
        while($fatch=mysqli_fetch_array($exe))
        {
            $arr[]=$fatch;
        }
        return $arr;
    }
    
}
?>