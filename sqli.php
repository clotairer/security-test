<?php

$queryStr = "SELECT * 
              FROM table
              WHERE id = " . $_GET['id'];

global $connection;

mysql_query($queryStr, $connection);
