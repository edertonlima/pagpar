<session class="sidebar">
	
	<div class="avatar-user">
		<div class="container">
			<img src="assets/images/avatar-user.jpg" alt="Mariana Santos">
			<span class="nome">Mariana Santos</span>
			<span class="e-mail">mariana@gmail.com</span>
		</div>
	</div>

	<nav>

		<ul class="abas">
			<li class="ativo"><a href="javascript:" title="Minha Área" rel="minha-area"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a></li>
			<li><a href="javascript:" title="Configurações" rel="configuracoes"><i class="fa fa-cogs" aria-hidden="true"></i></a></li>
			<li><a href="index.php" title="Sair" rel="sair"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
		</ul>

		<div id="minha-area" class="content-nav ativo">
			<h5>MINHA ÁREA</h5>

			<ul>
				<li<?php if($class == 'dashboard'){ echo ' class="ativo"'; } ?>>
					<a href="<?php url('dashboard'); ?>" title="Resumo"><i class="fa fa-home" aria-hidden="true"></i> Resumo</a>
				</li>
				<li<?php if($class == 'pedidos-realizados'){ echo ' class="ativo"'; } ?>>
					<a href="<?php url('pedidos-realizados'); ?>" title="Pedidos Realizados"><i class="fa fa-tags" aria-hidden="true"></i> Pedidos Realizadas</a>
				</li>
				<li<?php if($class == 'despachantes'){ echo ' class="ativo"'; } ?>>
					<a href="javascript:" title="Despachantes"><i class="fa fa-male" aria-hidden="true"></i> Despachantes</a>
				</li>
			</ul>			
		</div>

		<div id="configuracoes" class="content-nav">
			<h5>CONFIGURAÇÕES</h5>

			<ul>
				<li<?php if($class == 'comissao'){ echo ' class="ativo"'; } ?> style="display: none;">
					<a href="javascript:" title="Configurar Comissões">
						<i class="fa fa-percent" aria-hidden="true"></i> Configurar Comissões
					</a>
				</li>
			</ul>			
		</div>
		
	</nav>
</session>