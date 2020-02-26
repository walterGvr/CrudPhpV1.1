<?php
  date_default_timezone_set('America/Los_Angeles');

  session_start();

  $conn=mysqli_connect(
    'localhost',
    'root',
    '',
    'db_sig'
  );
?>
