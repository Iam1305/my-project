<?php
    require_once 'config.php';
    mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

    if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>