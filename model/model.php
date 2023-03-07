<?php
class model
{
    public $connection;
    public function __construct()
    {
        session_start();
        try {
            $this->connection = new mysqli("localhost", "root", "", "epark_db");
            //echo "connections successfully";
        } catch (Exception $e) {
            //die(mysqli_error($this->connection));
            echo "connection is not stablished";
        }

    }
    //create member function for inserdata
    public function insertalldata($table, $data)
    {
        $column = array_keys($data);
        $column1 = implode(",", $column);

        $values = array_values($data);
        $values1 = implode("','", $values);

        $insert = "insert into $table($column1) values('$values1')";

        $query = mysqli_query($this->connection, $insert);

        return $query;
    }
    // create a member function for login 
    public function loginuser($table, $email, $password)
    {
        $select = "select * from $table where email='$email' and password='$password'";
        $execute = mysqli_query($this->connection, $select);
        $fetch = mysqli_fetch_array($execute);
        $num_rows = mysqli_num_rows($execute);

        if ($num_rows > 0) {
            $_SESSION["id"] = $fetch["id"];
            $_SESSION["firstname"] = $fetch["firstname"];
            $_SESSION["email"] = $fetch["email"];

            return true;
        } else {
            return false;
        }
    }
    // create member function for forgot password
    public function frgpassword($table, $column, $column1, $email)
    {
        $select = "select $column from $table where $column1='$email'";
        $execute = mysqli_query($this->connection, $select);
        $num_rows = mysqli_num_rows($execute);
        $fetch = mysqli_fetch_array($execute);
        if ($num_rows > 0) {
            $pass = base64_decode($fetch["password"]);
            return $pass;
        } else {
            return false;
        }
    }
    // create member function for change password
    public function chngpassword($table, $column, $id, $opass, $npass, $cpass, $regid)
    {
        $select = "select $column from $table where $id='$regid'";
        $execute = mysqli_query($this->connection, $select);
        $fetch = mysqli_fetch_array($execute);
        $pass = $fetch["password"];
        if ($pass == $opass && $npass == $cpass) {
            $update = "update $table set $column='$npass' where $id='$regid'";
            $execute = mysqli_query($this->connection, $update);
            return $execute;
        } else {
            return false;
        }
    }

}
?>