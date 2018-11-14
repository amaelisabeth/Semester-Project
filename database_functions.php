<?php
  $hn = 'localhost';  // hostname
  $db = 'se_project';  // database name 
  $un = 'root';  // username (root on XAMPP, netID on pluto)
  $pw = '';  // MySQL password (empty on XAMPP, your MySQL password on pluto)
  
  
  function create_connection() {
	  $connection = new mysqli($hn, $un, $pw, $db);
		
		if ($connection->connect_error) {
			die($connection->connect_error);
		}
		
		return $connection;
  }
  
  
?>