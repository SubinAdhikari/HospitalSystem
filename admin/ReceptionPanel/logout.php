<?php
include '../../app/call.php';
session_start();
session_destroy();
Redirect('loginReceptionist.php');

?>