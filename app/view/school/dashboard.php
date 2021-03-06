<html>
	<head>
		<title>Pagina Inicial - Estuda.com</title>
		<meta content="charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Descrição da pagina Estuda.com">
		<meta name="keywords" content="Descrição da pagina Estuda.com">
		<meta name="author" content="https://snowdev.com.br">
		<meta name="robots" content="index, follow">
		<meta name="googlebot" content="all">
		
		<link rel="stylesheet" href="/assets/css/panel.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" async>
		
		<script src="/assets/js/jquery.min.js"></script>
		<script src="/assets/js/webApp.js"></script>
	</head>
	
	<body>
		<?php include 'view/static/Header.php'; ?>
		
		<main id="webApp-main">
			<?php include 'view/static/MainLeftMenu.php'; ?>
			
			<div id="webApp-main__container">
				<div class="title">
					Dashboard
				</div>
				
				<div class="divisory"></div>
				
				<div class="buttons">
					<a href="/school/<?= $schoolID; ?>/school/edit" class="btn btn-success">Editar Escola</a>
				</div>
				
				<div id="dashboard-info" class="content">
					<div class="info">
						<p>Numero de Alunos</p>
						<p><?php echo $students->count($schoolID); ?></p>
					</div>
					
					<div class="info">
						<p>Numero de Turmas</p>
						<p><?php echo $classes->count($schoolID); ?></p>
					</div>
				</div>
			</div>
		</main>
	</body>
</html>