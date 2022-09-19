<?php 

include "header-inc.php";

// remove all session variables
session_unset();

// destroy the session
session_destroy();

header("Location: ../screens/login.php ");  
exit;








?>