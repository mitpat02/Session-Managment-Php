<?php

try 
{
    $dbh = new PDO('mysql:host=localhost;dbname=patemitm_bookstore', "patemitm", "@R7sn9?U3&X");
} catch (Exception $e) 
{
    die('Could not connect to DB: ' . $e->getMessage());
}


