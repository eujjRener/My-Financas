<?php
session_start();
if (empty($_SESSION['id'])) {
	header("Location: login/login.php?msg=4");
	exit;
}
?>