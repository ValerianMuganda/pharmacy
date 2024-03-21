<?php

$connection = new mysqli("localhost","root","","pharmacy");

if ($connection->connect_error){
    echo "Database Connection Failed";
}