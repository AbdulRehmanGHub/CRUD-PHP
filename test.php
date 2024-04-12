<?php
session_start();
echo $_SESSION['demosession'];
echo $_SESSION['program'];

session_unset();

?>