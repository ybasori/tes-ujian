<?php
namespace systems;
class Db
{
    public function query($value){
        $con = mysqli_connect("localhost","root","","coba");

        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die;
        }
        else{
            return mysqli_query($con, $value);
        }
    }
}

?>