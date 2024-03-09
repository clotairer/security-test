<?php

require_once 'classes/Tools.php';

$queryStr = "SELECT * 
              FROM table
              WHERE id = " . Tools::getValue('id');

mysql_query($queryStr, $connection);
