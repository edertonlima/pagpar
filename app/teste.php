<!DOCTYPE html>
<html lang="pt-br">
<head>

	<?php
		$titulo = "";
		$class = "editar-curriculo";
	?>

	<?php include "includes/head-admin.php" ?>

	<script type="text/javascript">

	</script>

</head>
<body class="admin <?php echo $class; ?>">

	<!-- HEADER -->
	<?php include "includes/header-admin.php"; ?>

	<div class="container">

		<!-- SIDEBAR -->
		<?php include "includes/sidebar.php"; ?>

		<div class="box-container">

			<session class="sobre">	
				<div class="content">

					<form action="javascript:" id="sobre">
						<h4>
							<span>Sobre você</span>
							<a href="javascript:" class="button right dark inline ico-right editar" data="sobre">editar<i class="fa fa-fw fa-pencil"></i></a>
							<a href="javascript:" class="button right dark inline ico-right fechar" data="sobre">sair da edição<i class="fa fa-times" aria-hidden="true"></i></a>
						</h4>
						<div class="box-info">
							<span class="nome"><i>Ederton Lima</i> <input type="text" value="Ederton Lima"></span>
							<span class="idade-nacionalidade">
								<i>27 anos, solteiro</i>
								<input type="text" value="12/06/1988">
								<select>
									<option value="1">Solteiro</option>
									<option value="2">Casado</option>
									<option value="3">Divorciado</option>
									<option value="4">Separado</option>
									<option value="5">Viúvo</option>
									<option value="6">União estável</option>
								</select>
							</span>
							<span class="email"><i>edertton@gmail.com</i><input type="text" value="edertton@gmail.com"></span>
							<span class="celular"><i>(14) 99724-0705</i><input type="text" value="(14) 99724-0705"></span>
							<span class="telefone"><i>(14) 3276-3736</i><input type="text" value="(14) 3276-3736"></span>
						</div>
						<button type="submit" class="fechar" data="sobre">salvar</button>
					</form>

				</div>
			</session>

			<session class="endereco">	
				<div class="content">

					<form action="javascript:" id="endereco">
						<h4>
							<span>Endereço</span>
							<a href="javascript:" class="button right dark inline ico-right editar" data="endereco">editar<i class="fa fa-fw fa-pencil"></i></a>
							<a href="javascript:" class="button right dark inline ico-right fechar" data="endereco">sair da edição<i class="fa fa-times" aria-hidden="true"></i></a>
						</h4>
						<div class="box-info">
							<span class="cep"><i>17054-610</i> <input type="text" value="17054-610"></span>
							<span class="endereço"><i>Rua João Urias Batista</i> <input type="text" value="Rua João Urias Batista"></span>
							<span class="numero"><i>6,65</i> <input type="text" value="6,65"></span>
							<span class="numero"><i>Complemento</i> <input type="text" value="Complemento"></span>
							<span class="bairro"><i>Vila Santista</i> <input type="text" value="Vila Santista"></span>
							<span class="estado">
								<i>São Paulo</i>
								<input type="text" value="São Paulo">
								<select>
									<option value="1">São Paulo</option>
									<option value="2">Rio de Janeiro</option>
									<option value="2">Listar Estados</option>
								</select>
							</span>
							<span class="cidade">
								<i>Bauru</i>
								<input type="text" value="Bauru">
								<select>
									<option value="1">Bauru</option>
									<option value="2">Agudos</option>
									<option value="2">Macatuba</option>
									<option value="2">Listar Cidades</option>
								</select>
							</span>
						</div>
						<button type="submit" class="fechar" data="endereco">Salvar</button>
					</form>

				</div>
			</session>

			<session class="educacao">	
				<div class="content">

					<h4>
						<span>Formação</span>
					</h4>

					<ul class="box-info list-dados">
						<li>
							<span class="escola">Senai Bauru</span>
							<span class="curso">Cursando técnico em Mecânica Automobilística</span>
							<span class="status">cursando desde jan/2004</span>
							<a href="javascript:">excluir</a>
							<a href="javascript:">editar</a>

							<form style="display: none;">
								<span><input type="text" value="Senai Bauru"></span>
								<span>
									<select>
										<option value="1">Fundamental</option>
										<option value="2">Técnico</option>
										<option value="2" selected="selected">Superior</option>
										<option value="2">Pós-graduação</option>
									</select>
								</span>
								<span><input type="radio" name="status" class="radio">Estou cursando</span>
								<span><input type="radio" name="status" class="radio">Já conclui</span>
								<span><input type="radio" name="status" class="radio">Está incompleto</span>
								inicio: 
								ano
								<span><input type="text" value="2011"></span>
								mes
								<span>
									<select>
										<option value="1">Janeiro</option>
										<option value="2">Fevereiro</option>
										<option value="2" selected="selected">Março</option>
									</select>
								</span>
								termino: 
								ano
								<span><input type="text" value="2011"></span>
								mes
								<span>
									<select>
										<option value="1">Janeiro</option>
										<option value="2">Fevereiro</option>
										<option value="2" selected="selected">Março</option>
									</select>
								</span>
								<button >salvar</button>
							</form>
						</li>
					</ul>

					<form id="add-item" style="display: none;">
						<span><input type="text" value=""></span>
						<span>
							<select>
								<option value="1">Fundamental</option>
								<option value="2">Técnico</option>
								<option value="2">Superior</option>
								<option value="2">Pós-graduação</option>
							</select>
						</span>
						<span><input type="radio" name="status" class="radio">Estou cursando</span>
						<span><input type="radio" name="status" class="radio">Já conclui</span>
						<span><input type="radio" name="status" class="radio">Está incompleto</span>
						inicio: 
						ano
						<span><input type="text" value=""></span>
						mes
						<span>
							<select>
								<option value="1">Janeiro</option>
								<option value="2">Fevereiro</option>
								<option value="2">Março</option>
							</select>
						</span>
						termino: 
						ano
						<span><input type="text" value=""></span>
						mes
						<span>
							<select>
								<option value="1">Janeiro</option>
								<option value="2">Fevereiro</option>
								<option value="2">Março</option>
							</select>
						</span>
						<button >salvar</button>
					</form>

					<a href="javascript:" class="add-item">Adicionar nova formação</a>
					<a href="javascript:" class="fechar-item">Fechar</a>

				</div>
			</session>

			<!-- FOOTER -->
			<?php include "includes/footer.php"; ?>

		</div> 

	</div>
</body>
</html>