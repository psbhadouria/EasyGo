<?php

    $database= new mysqli("localhost","root","","easygo");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>