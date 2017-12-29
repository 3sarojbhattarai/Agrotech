<?php
session_start();
session_destroy();
header('location:home/');//change location name required
exit;
?>