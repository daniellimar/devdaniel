<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- HEADER NAVBAR CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <title>Portfólio | Daniel Lima</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
  </head>
  <body class="fade-in">
	<header class="header-area overlay" style="background-image: linear-gradient(180deg, black, #170a45);">
	    <nav class="navbar navbar-expand-md navbar-dark">
			<div class="container">
				<a href="./" class="navbar-brand">devDaniel</a>
				<style type="text/css">

				</style>
				<button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
					<span class="menu-icon-bar"></span>
					<span class="menu-icon-bar"></span>
					<span class="menu-icon-bar"></span>
				</button>
				
				<div id="main-nav" class="collapse navbar-collapse">
					<ul class="navbar-nav ml-auto">
						<li><a href="#Perfil" class="nav-item nav-link active">Perfil</a></li>
						<li><a href="#Projetos" class="nav-item nav-link active">Projetos</a></li>
						<!-- 
						<li class="dropdown">
							<a class="nav-item nav-link" data-toggle="dropdown">Portfolio</a>
							
							<div class="dropdown-menu">
								<a href="#" class="dropdown-item">Dropdown Item 1</a>
								<a href="#" class="dropdown-item">Dropdown Item 2</a>
								<a href="#" class="dropdown-item">Dropdown Item 3</a>
								<a href="#" class="dropdown-item">Dropdown Item 4</a>
								<a href="#" class="dropdown-item">Dropdown Item 5</a>
							</div>
						</li>
						-->
						<li><a href="#contato" class="nav-item nav-link">Contato</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="banner">
			<div class="container">
				<h1>Bootstrap 4 Navbar</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec elit ex. Etiam elementum lectus et tempor molestie.</p>
				<a href="#content" class="btn p-3 btn-success">Learn More</a>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="main-body">
			<div class="row">
				
				<div class="col-lg-8" style="margin-top: 40px;">
					<div class="card">
						<div class="card-body">
							<blockquote class="blockquote">
							  	<p class="mb-0">
									Sobre
								</p>
							</blockquote>
							<blockquote class="blockquote">
								<h6>
									Há 4 anos desenvolvendo aplicações Web, utilizando PHP, HTML5, CSS3, Javascript e Jquery,  além de, Frameworks como Bootstrap, CodeIgnitor e Materialize, e por fim, integração com Banco de dados utilizando os sistemas de gerenciamento MySQL e Microsoft SQL Server.
								</h6>

								<h6>
									Atualmente desempenho atividades de suporte ao usuário no setor de TI.
									Configuração, instalação e manutenção de computadores / notebooks;
									 Help desk /
									 Active Directory /
									 Recursos Microsoft (Endpoint, Azure, Cloud, O365).
									 Em paralelo com a elaboração de um sistema interno de gerenciamento de contratos de receitas acessórias do setor de Transportes Terrestres.
								</h6>

								<h6>
									Experiência em sistemas, plataformas e aplicações ERP/CRM, como: TOTVS, TOTVS Protheus, SAP, MobAgile, Fluig, Mercanet, AFV Server, Acásia, mySE e myOrca.
								</h6>

								<h6>
									Aprendendo a cada dia e tentando acompanhar o desenvolvimento exponencial da tecnologia ao redor do mundo.
								</h6>

								<h6>
									Graduações em andamento:<br>
									Engenharia de Controle e Automação | UFMT <br>
									Análise e desenvolvimento de Sistemas | UNIC
								</h6>
							</blockquote>

							<blockquote class="blockquote text-center">
							  	<p class="mb-0">
							  		"O conhecimento é em si mesmo um poder”
							  	</p>
							  	<footer class="blockquote-footer">Francis Bacon <cite title="Título da fonte"></cite></footer>
							</blockquote>
						</div>
					</div>
				</div>

				<div class="col-lg-4" id="Perfil" style="margin-top: 40px;">
					<div class="card">

						<style type="text/css">
							.card{
								border-radius: 10px 40px;
							}
							.bg-card{
								background: linear-gradient(180deg, black, #170a45);
								color: white;
							}
							.bg-card button :: hover {
								background-color: red;
							}
							.btn-azul {
							  	background: linear-gradient(18deg, #120837, #120837);
							 	color: white;
							 	transition-duration: 0.4s;
							 	border-radius: 10px 0;
							}

							.btn-azul:hover {
							  	background: linear-gradient(18deg, black, #170a45);
							  	color: #858585;
							}
							.btn-outline-azul{
								background-color: white;
								border-color: #170a45;
							 	transition-duration: 0.4s;
								border-radius: 0 10px;

							}
							.btn-outline-azul:hover {
								background: linear-gradient(18deg, #120837, #120837);
							 	color: white;
							}
						</style>
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="assets/img/perfil2.png" alt="logo-daniellima" class="rounded-circle p-1 bg-card" width="110">
								<div class="mt-3">
									<h4>Daniel Lima</h4>
									<p class="text-secondary mb-1">Full Stack Developer</p>
									<p class="text-muted font-size-sm">Cuiabá, MT | Brasil</p>
									<button class="btn btn-azul">E-mail</button>
									<button class="btn btn-outline-azul">Mensagem</button>
								</div>
							</div>
							<hr class="my-4">
							<ul class="list-group list-group-flush">

								<style type="text/css">
									.list-group a {
										color: black;
										text-decoration: none
									}
									.list-group a:hover {
										background-color: #170a45;
									}
									.list-group-item:hover {
										background-color: #170a45;
										color: white;
									}
								</style>

								<a href="https://www.linkedin.com/in/daniellimar" target="_blank">
									<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
										<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg> LinkedIn</h6>
										<span class="text-secondary">/daniellimar</span>
									</li>
								</a>

								<a href="https://github.com/daniellimar/" target="_blank">
									<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
										<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg> Github</h6>
										<span class="text-secondary">/daniellimar</span>
									</li>
								</a>
								
								<a href="https://www.instagram.com/daniellimarrr/" target="_blank">
									<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
										<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg> Instagram</h6>
										<span class="text-secondary">/daniellimarrr</span>
									</li>
								</a>

								<a href="" target="_blank">
									<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
										<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg> Facebook</h6>
										<span class="text-secondary">/daniellimar</span>
									</li>
								</a>
							</ul>
						</div>
					</div>
				</div>
			</div>


					<div class="row">
						<div class="col-sm-4">
							<div class="card">
								<div class="card-body">
									<h5 class="d-flex align-items-center mb-3">Project Status</h5>
									<p>Web Design</p>
									<div class="progress mb-3" style="height: 5px">
										<div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p>Website Markup</p>
									<div class="progress mb-3" style="height: 5px">
										<div class="progress-bar bg-danger" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p>One Page</p>
									<div class="progress mb-3" style="height: 5px">
										<div class="progress-bar bg-success" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p>Mobile Template</p>
									<div class="progress mb-3" style="height: 5px">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p>Backend API</p>
									<div class="progress" style="height: 5px">
										<div class="progress-bar bg-info" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>