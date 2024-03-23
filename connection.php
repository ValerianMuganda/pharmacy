<?php

$connection = new mysqli("localhost","root","","pharmacy",3307);

if ($connection->connect_error){
    die( "Database Connection Failed".$connnection->connect_error);
}