<?php

session_start();
$bytes = random_bytes(64);
$_SESSION['csrf'] = bin2hex($bytes);

header("Location: 404.html");

?>

<form action="">
	<input type="hidden" name="csrf" value="<?= $_SESSION['csrf'] ?>">
</form>