<?php
  session_start();
  session_destroy();

  //header('https://catuses.com/');
  header("Location: index.php");
?>