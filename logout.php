<?php
include "access.php";

session_unset();
session_destroy();

echo "You have been successfully logged out!";

?>
