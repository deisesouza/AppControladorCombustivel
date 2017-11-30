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
	
<?php
 
require_once 'Modelo.class.php';


$cidadeOrigem = strtoupper($_POST["cidadeOrigem"]);
$cidadeDestino = strtoupper($_POST["cidadeDestino"]);
$hodometro = strtoupper($_POST["hodometro"]);
$litrosTotais = strtoupper($_POST["litrosTotais"]);
$custoTotalCombustivel = strtoupper($_POST["custoTotalCombustivel"]);


if(empty($cidadeOrigem)){
		echo "<script>alert('Preencha a cidade de origem.');history.back();</script>";
	}elseif(empty($cidadeDestino)){
		echo "<script>alert('Preencha a cidade de destino.'); history.back();</script>";
	}elseif(empty($hodometro)){
		echo "<script>alert('Preencha os hodômetro.'); history.back();</script>";
	}elseif(empty($litrosTotais)){
		echo "<script>alert('Preencha os o litros totais.'); history.back();</script>";
	}elseif(empty($custoTotalCombustivel)){
		echo "<script>alert('Preencha o custo total de combustível.'); history.back();</script>";

	}else{
		
		# Instancia da classe Modelo, e através do método mágico construtor passa os valores para o construtor da TesteModelo
		$obj = new Modelo($cidadeOrigem,$cidadeDestino, $litrosTotais, $custoTotalCombustivel, $hodometro); 
		$retornoOrigem = $obj->testeCidadeOrigem();
		$retornoDestino = $obj->testeCidadeDestino();
		$obj->testeHodometro();
		$retornoKmLitro = $obj->calculaKmLitro();
		$retornoCombustivel = $obj->calculaCustoTotalCombustivel();
		$retornoKmRodados = $obj->calculaKmRodados();
	}


?>


<div class="container">
  <h2>Resultados</h2>
   
      <ul class="list-group">
        
        <li class="list-group-item active">Resultados</li>
        <li class="list-group-item"><?php echo $retornoOrigem ?></li>
        <li class="list-group-item"><?php echo $retornoDestino ?></li>
        <li class="list-group-item"><?php echo $retornoKmLitro ?></li>
        <li class="list-group-item"><?php echo $retornoCombustivel ?></li>
        <li class="list-group-item"><?php echo $retornoKmRodados ?></li>    
      </ul>
	</br>
	<a href="index.php" class="btn btn-primary" role="button">Voltar!</a>
</div>





<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>