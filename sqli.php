<?php

$connection = mysql_connect('localhost', 'user', 'pass');
if (!$connection) {
    die('Not connected : ' . mysql_error());
}

$queryStr = "SELECT * 
              FROM table
              WHERE id = " . $_GET['id'];

mysql_query($queryStr, $connection);


