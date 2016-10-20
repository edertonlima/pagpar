<!DOCTYPE html>
<html lang="pt-br">
<head>

	<?php
		$titulo = "";
		$class = "pedidos-realizados";
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
						<h2>
							<i class="fa fa-tags" aria-hidden="true"></i> Pedidos Realizados
							<a href="javascript:" class="btn btn-m success" title="Novo Pedido"><i class="fa fa-plus" aria-hidden="true"></i> Novo Pedido</a>
						</h2>
					</div>
				</div>
				<div class="content-body">
					<table class="tables">
						<thead>
							<tr>
								<th width="80">Status</th>
								<th>Nome</th>
								<th width="80">Placa</th>
								<th width="80">Renavan</th>
								<th width="120">Pagamento</th>
								<th width="100">Data Solicitação</th>
								<th>Ações</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span class="label label-p success">Concluído</span></td>
								<td>
									<a href="javascript:" class="btn-txt" title="Visualizar Pedido">
										<strong>João Pereira da Silva</strong>
										<i class="fa fa-envelope-o" aria-hidden="true"></i> joaoprereira@gmail.com
									</a>
								</td>
								<td><i class="fa fa-car" aria-hidden="true"></i> EVZ2478</td>
								<td>335176267</td>
								<td>R$ 12384,00 <i class="fa fa-credit-card-alt" aria-hidden="true"></i></td>
								<td><i class="fa fa-calendar" aria-hidden="true"></i> 12/10/2016</td>
								<td class="txt-center"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></td>
							</tr>
							<tr>
								<td><span class="label label-p danger">Cancelado</span></td>
								<td>
									<a href="javascript:" class="btn-txt" title="Visualizar Pedido">
										<strong>João Pereira da Silva</strong>
										<i class="fa fa-envelope-o" aria-hidden="true"></i> joaoprereira@gmail.com
									</a>
								</td>
								<td><i class="fa fa-car" aria-hidden="true"></i> EVZ2478</td>
								<td>335176267</td>
								<td>R$ 12384,00 <i class="fa fa-credit-card-alt" aria-hidden="true"></i></td>
								<td><i class="fa fa-calendar" aria-hidden="true"></i> 12/10/2016</td>
								<td class="txt-center"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></td>
							</tr>
							<?php for($i;$i<10;$i++){ ?>
							<tr>
								<td><span class="label label-p warning">Pendente</span></td>
								<td>
									<a href="javascript:" class="btn-txt" title="Visualizar Pedido">
										<strong>João Pereira da Silva</strong>
										<i class="fa fa-envelope-o" aria-hidden="true"></i> joaoprereira@gmail.com
									</a>
								</td>
								<td><i class="fa fa-car" aria-hidden="true"></i> EVZ2478</td>
								<td>335176267</td>
								<td>R$ 12384,00 <i class="fa fa-credit-card-alt" aria-hidden="true"></i></td>
								<td><i class="fa fa-calendar" aria-hidden="true"></i> 12/10/2016</td>
								<td class="txt-center">
									<a href="javascript:" class="btn btn-p success" title="Aprovar Pagamento"><i class="fa fa-check" aria-hidden="true"></i></a>
									<a href="javascript:" class="btn btn-p danger" title="Cancelar Pedido"><i class="fa fa-close" aria-hidden="true"></i></a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>

			<!-- FOOTER -->
			<?php include "includes/footer.php"; ?>

		</div><!-- .container -->
	</session><!-- .box-container.page-content -->

</body>
</html>