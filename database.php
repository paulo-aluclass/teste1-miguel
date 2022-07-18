<?php

$infoconn = array (
  'database_host' => "localhost",
  'database_name' => 'name_of_database',
  'database_user' => 'user',
  'database_pass' => 'password',
);

$database = new mysqli($infoconn['database_host'],$infoconn['database_user'],$infoconn['database_pass'],$infoconn['database_name']);

?>