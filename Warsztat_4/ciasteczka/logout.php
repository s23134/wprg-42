<?php
setcookie('session', '', time() - 3600, '/');
header('Location: logowanie.php');
exit;
?>