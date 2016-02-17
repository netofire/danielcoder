<!DOCTYPE HTML>
<html>
	<head>
		<title>Netofire.com :: Web Development</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollex.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-normal.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>
		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<h1 id="logo">Netofire.com</h1>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro">Intro</a></li>
							<li><a href="#one">O que fazemos</a></li>
							<li><a href="#two">Quem somos</a></li>
							<li><a href="#work">Nosso trabalho</a></li>
							<li><a href="#contact">Contato</a></li>
						</ul>
					</nav>

			</header>

		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content container 75%">
					<header>
						<h2>NetoFire</h2>
					</header>
					<p><strong>Desenvolvimento Web</strong> especializado em 
					análise, criação, aprimoramento e manutenção de <strong>websites, 
					lojas virtuais e sistemas</strong> em PHP.</p>
					<footer>
						<a href="#one" class="button style2 down">Mais</a>
					</footer>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>O que fazemos</h2>
					</header>
					<p><strong>Desenvolvimento e manutenção</strong> de sistemas WEB.<br> 
					Especializado em PHP, HTML5, CSS3, Javascript, Frameworks, MySQL, PgSQL e análise.<br>
					Cada projeto de acordo com os objetivos do cliente, de forma a obter o <strong>menor investimento</strong> 
					pelo <strong>melhor retorno</strong>.<br>
					<a href="#contact">Entre em contato</a> e conheça mais!
					</p>
				</div>
				<a href="#two" class="button style2 down anchored">Próximo</a>
			</section>

		<!-- Two -->
			<section id="two" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Quem somos</h2>
					</header>
					<p>Daniel Neto, paulistano, 36 anos, atualmente mora em <strong>Curitiba/PR</strong> é a pessoa por trás da empresa.<br>
					Começou na área em <strong>2003</strong> por pura e simples curiosidade sobre como era criação para a Internet.<br>
					Buscava algo onde pudesse sempre <strong>aprender</strong> e <strong>inovar</strong>.<br>
					Hoje, o foco é na <strong>expansão do negócio</strong> e na <strong>especialização técnica</strong>, para buscar a melhoria de processo para os clientes.
					</p>
				</div>
				<a href="#work" class="button style2 down anchored">Próximo</a>
			</section>

		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content container">
					<header>
						<h2>Nosso trabalho</h2>
						<p>Características e exemplos de projetos em que participamos. Hoje em dia procuramos utilizar
						ferramentas de grande produtividade e escalabilidade, tais como Bootstrap, framework Laravel e Eloquent ORM para banco de dados.
						Para lojas, Open Cart com integração completa com meios de pagamento. Para sistemas prontos, otimização e atualização para melhoria de 
						projeto.</p>
					</header>

					<!-- Lightbox Gallery  -->
						<div class="container 75% gallery">
							<div class="row 0% images">
								<div class="6u"><a href="images/fulls/toninho.png" class="image fit from-left"><img src="images/thumbs/toninho2.jpg" title="Back-end em Laravel 5 + Bootstrap - rapidez e escalabilidade." alt="" /></a></div>
								<div class="6u"><a href="images/fulls/seth.jpg" class="image fit from-right"><img src="images/thumbs/seth.jpg" title="Website de divulgação artística com front e back em Code Igniter 3 + Bootstrap" alt="" /></a></div>
							</div>
							<div class="row 0% images">
								<div class="6u"><a href="images/fulls/open2.png" class="image fit from-left"><img src="images/thumbs/open.jpg" title="Loja Virtual Open Cart completa pronta pra vender!" alt="" /></a></div>
								<div class="6u"><a href="images/fulls/radio.png" class="image fit from-right"><img src="images/thumbs/radio2.png" title="Back + Front em Code Igniter 2.x visando fácil navegação para o público alvo." alt="" /></a></div>
							</div>
							<div class="row 0% images">
								<div class="6u"><a href="images/fulls/red2.png" class="image fit from-left"><img src="images/thumbs/red.png" title="Free-Lancer para projetos em agências e empresas, home-office ou presencial." alt="" /></a></div>
								<div class="6u"><a href="images/fulls/hosp.jpg" class="image fit from-right"><img src="images/thumbs/hosp.jpg" title="Configuração e Hospedagem de servidores para deixar todo projeto 100% pronto." alt="" /></a></div>
							</div>
						</div>

				</div>
			</section>

		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content container">
					<header>
						<h2>Diga olá.</h2>
						<p>Envie o formulário abaixo ou, se preferir, ligue: <strong>(41)9625-4612</strong></p>
					</header>
					<div class="box container 75%">

					<!-- Contact Form -->
							<form method="post" id="frmContato" novalidate>
								<div class="row 50%">
									<div class="6u"><input id="name" type="text" name="name" placeholder="Nome" required /></div>
									<div class="6u"><input id="email" type="email" name="email" placeholder="Email" required /></div>
								</div>
								<div class="row 50%">
									<div class="12u"><textarea id="message" name="message" placeholder="Mensagem" rows="6" required></textarea></div>
								</div>
								<div class="row">
									<div class="12u">
										<ul class="actions">
											<li><input type="submit" id="btnEnviarForm" value="Enviar Mensagem" /></li>
											<li>
												<img src="images/loader.gif" id="imgLoader" />
											</li>
											<li id="msgRetorno" class="">
												
											</li>
										</ul>
									</div>
								</div>
							</form>

					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">

				<!-- Icons -->
					<ul class="actions">
						<li><a href="https://br.linkedin.com/in/danielcoder" class="icon fa-linkedin" target="_blank"><span class="label">Linkedin</span></a></li>
					</ul>

			</footer>

	</body>
</html>