<?php 
include "../includes/header-inc.php";
// remove all session variables
session_unset();

// destroy the session
session_destroy();

header("Location: ../screens/admin-login.php ");  







?>