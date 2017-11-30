<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>APP - Controlador de Consumo de Gasolina</title>
		<meta name = "description" content= "Aplicativo que calcula gastos com consumo de combustível em viagens realizadas de automóveis."/>
		<meta name = "robots" content= "index, folow"/>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body>

		<form id="formulario" method="post" action="Controle.class.php">
			
			<div class="form-group">
				
				<h2>Vamos analisar a viagem realizada!</h2>

				<label>Qual foi o ponto de Partida da sua Viagem? Cidade de Origem! </label>
					<input type="text"  class="form-control" name="cidadeOrigem"/> 
					</br>
				<label>E para onde você foi? Cidade de Destino!</label>
					<input type="text"  class="form-control" name="cidadeDestino"/> 
					</br>
				<label>Quanto marcou o Hodômetro do seu carro? Quilometragem que fez!</label>
					<input type="text"  class="form-control" name="hodometro"/>
					</br>
				<label>Quantos Litros de Combustível você abasteceu no Total?</label>
					<input type="text"  name="litrosTotais"/>
					</br>
				<label>Quanto você gastou de combustível neste viagem? Total em dinheiro!</label>
					<input type="text"  class="form-control" name="custoTotalCombustivel"/>
					</br> 
				<input type="submit" class="btn btn-default" value="Enviar"/>

			</div>	

		</form>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>