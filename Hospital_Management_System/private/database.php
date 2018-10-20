<?php
    require_once('db_credentials.php');
    
    //Database Connection
    function db_connect()
    {
        $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        return $connection;
    }
    
    //Close Database Connection
    function db_disconnect($connection)
    {
        if(isset($connection))
        {
            mysqli_close($connection);
        }
    }
?>
