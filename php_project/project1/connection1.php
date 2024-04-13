<?php

$connect = mysqli_connect("localhost","root","","project1db");

if(!$connect)
{
    echo "Database not connected, contact to system administrator";
    
}

?>