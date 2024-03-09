<?php

require 'classes/Tools.php';

$queryStr = "SELECT * 
              FROM table
              WHERE id = " . Tools::getValue('id');

mysql_query($queryStr, $connection);
