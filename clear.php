<?php
session_start();
  if (isset($_GET['clear'])) {
  session_unset();
  session_destroy();
  echo "We have not recover your data";	
  }
?>
<!DOCTYPE html>
