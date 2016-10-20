<!DOCTYPE html>
<html lang="pt-br">
<head>

	<?php
		$titulo = "";
		$class = "dashboard";
	?>

	<?php include "includes/head.php" ?>

	<script type="text/javascript">

	</script>

</head>
<body class="admin <?php echo $class; ?>">

	<!-- HEADER -->
	<?php include "includes/header.php"; ?>

	<!-- SIDEBAR -->
	<?php include "includes/sidebar.php"; ?>
	
	<!-- PAGE -->
	<session class="box-container page-content">
		<div class="container">

			<div class="content">
				<div class="content-header">
					<div class="title">
						<h2><i class="fa fa-home" aria-hidden="true"></i> Minha Área</h2>
					</div>
				</div>
				<div class="content-body">
				</div>
			</div>

			<!-- FOOTER -->
			<?php include "includes/footer.php"; ?>

		</div><!-- .container -->
	</session><!-- .box-container.page-content -->

</body>
</html>