<?php
if(!preg_match('/^[a-z]+/', $lang)) {
	die();
}

?><!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="initial-scale=.4, user-scalable=yes" />
	<title><?php echo $IDN->decode($hostname) ?></title>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body class="centered_page">
	<div class="main_pane">
		<?php require_once(dirname(__FILE__) . "/index_$lang.php"); ?>
	</div>
</body>
</html>

