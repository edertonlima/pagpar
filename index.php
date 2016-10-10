
<?php include 'includes/head.php'; ?>

<?php include 'includes/header.php'; ?>

<section class="slide-home">
	<div class="controle-slide">
		<a class="left" href="#slide" role="button" data-slide="prev"></a>
		<a class="right" href="#slide" role="button" data-slide="next"></a>
	</div>
	<div class="carousel slide" data-ride="carousel" id="slide">
		<div class="carousel-inner" role="listbox">
			<div class="item active" style="background-image: url('assets/images/slide1.jpg');"></div>
			<div class="item" style="background-image: url('assets/images/slide2.jpg');"></div>
		</div>
	</div>

	<div class="tit-chamada">
		<span class="tit">LICENCIAMENTO</span>
		<span class="sub-tit">EM ATÉ 12 VEZES SEM JUROS!</span>		
	</div>
	
	<div class="licenciamento">
		<span class="tit">Faça seu Licenciamento Online.</span>
		<img src="assets/images/carro-licenciamento.png">
		<div class="box-conteudo">
			<h2>RÁPIDO <br>E PRÁTICO.</h2>
			<form action="javascript:">
				<input type="text" placeholder="Nome">
				<input type="text" placeholder="E-mail">
				<input type="text" class="mini" placeholder="Placa">
				<button class="mini">LICENCIAR</button>
			</form>
		</div>
	</div>
</section>

<div class="content bg-cor cor1 servicos">
	<div class="container">

		<h2 class="destaque txt-center">
			<span>ALGUNS SERVIÇOS DA <strong>PAGPAR</strong></span>
		</h2>

		<div class="item-servicos txt-center">
			<a href="javascript:" title="" class="servicos-pagpar">
				<div class="img-servico"><img src="assets/images/ico-cnh.png" alt="CNH"></div>
				CNH
			</a>
			<a href="javascript:" title="" class="servicos-pagpar">
				<div class="img-servico"><img src="assets/images/ico-licenciamento.png" alt="LICENCIAMENTO"></div>
				LICENCIAMENTO
			</a>
			<a href="javascript:" title="" class="servicos-pagpar">
				<div class="img-servico"><img src="assets/images/ico-emplacamento.png" alt="EMPLACAMENTO"></div>
				EMPLACAMENTO
			</a>
		</div>

	</div>
</div>

<div class="content bg-cor cor2 depoimentos">
	<div class="container">
		
		<h2 class="destaque txt-center">
			<span>DEPOIMENTOS</span>
		</h2>

		<div class="controle-slide">
			<span class="left prev" href="javascript:"></span>
			<span class="right next" href="javascript:"></span>
		</div>
		<div class="carousel" id="depoimentos">
			<div class="item active">
				<img src="assets/images/img-depoimento-1.png" alt="João Silva, Bauru<">
				<div class="conteudo-depoimento">
					<strong>João Silva, Bauru</strong>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
				</div>
			</div>
			<?php for($i=1;$i<8;$i++){ ?>
			<div class="item">
				<img src="assets/images/img-depoimento-2.png" alt="Maria Souza, Lins">
				<div class="conteudo-depoimento">
					<strong>Maria Souza, Lins</strong>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
				</div>
			</div>
			<?php } ?>
		</div>


	</div>
</div>

<?php include 'includes/footer.php'; ?>

<script type="text/javascript" src="assets/js/jquery.bxslider.js"></script>
<script type="text/javascript">
	jQuery(function() {
		jQuery('#depoimentos').bxSlider({
			minSlides: 1,
			maxSlides: 3,
			slideWidth: 360,
			slideMargin: 10,
			nextSelector: '.depoimentos .next',
			prevSelector: '.depoimentos .prev',
			pager: true,
			auto: true,
			autoStart: true,
			responsive: true
		});
	});
</script>