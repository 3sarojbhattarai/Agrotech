<?php
session_start();
session_destroy();
header('location:frontendlogin.php');//change location name required
exit;
?>