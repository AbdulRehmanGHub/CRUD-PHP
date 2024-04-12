<?php
session_start(); // for starting session (like login)

$_SESSION['demosession'] = "Abdul_Rehman";
$_SESSION['program'] = "BSCS";


echo $_SESSION['demosession'];
echo $_SESSION['program'];

// echo $_SESSION['demosession'];

// session_unset(); // for destroying session (like logout)
// echo $_SESSION['demosession'];
// echo $_SESSION['demosession'];

session_unset();

?>