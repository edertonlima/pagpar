<?php
	if((IsSet($tituto)) && ($tituto !== "")){ $tituto .= ""; }else{ $tituto = ""; }
	$description = "";
	$keywords = "";

	include 'function.php';
?> 

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
<link rel="icon" href="/img/favicon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="pt" />
<meta name="rating" content="General" />
<meta name="description" content="<?php echo $description ?>" />
<meta name="keywords" content="<?php echo $keywords ?>" />
<meta name="robots" content="index,follow" />
<meta name="author" content="Lecom S.A." />
<meta name="language" content="pt-br" />
<meta name="title" content="<?php echo $tituto ?>" />
<!--<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />-->

<title><?php echo $tituto; ?></title>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />

<!-- JQUERY -->
<script type="text/javascript" src="assets/js/jquery.js"></script>

<!-- BOOTSTRAP -->
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.js"></script>

<!-- TABELAS -->
<script src="assets/js/jquery.dataTables.min.js"></script>

<!-- FUNCTION -->
<script type="text/javascript" src="assets/js/function-admin.js"></script>