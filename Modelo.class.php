<?php
 
class Modelo{

		private $cidadeOrigem;
		private $cidadeDestino;
		private $litrosTotais;
		private $custoTotalCombustivel;
		private $hodometro;
		private $custoLitro;
		private $custokm;
	

															/*
															O metodo (construtor) abaixo substitui este:
															public function setCidadeOrigem($cidadeOrigem){
																$this -> cidadeOrigem = $cidadeOrigem;
															}
															*/
	public function __construct($cidadeOrigem, $cidadeDestino, $litrosTotais, $custoTotalCombustivel, $hodometro){
		$this-> cidadeOrigem = $cidadeOrigem;
		$this-> cidadeDestino = $cidadeDestino;
		$this-> litrosTotais = $litrosTotais;
		$this-> custoTotalCombustivel = $custoTotalCombustivel;
		$this-> hodometro = $hodometro;
	
}



	# Verifica se o usuário digitou a cidade de origem e retorna a mensagem com o conteúdo 
	public function testeCidadeOrigem(){	
				if (isset($this->cidadeOrigem)) {
				    $origem = "A cidade de origem é $this->cidadeOrigem </br>";
				    return $origem;
				}

	} //fim da função testecidadeOrigem


	# Verifica se o usuário digitou a cidade de destino e retorna a mensagem com o conteúdo
	public function testeCidadeDestino(){
				if (isset($this->cidadeDestino)) {
					$destino = "A cidade de destino é $this->cidadeDestino.</br>";
					return $destino;
				}

	}//fim da função testeCidadeDestino


	#Verifica se o usuario digitou a quilometragem da viagem
	public function testeHodometro(){
				if(!isset($this->hodometro)){
					echo "Preencha a quilometragem realizada durante a viagem.</br>";
				}
	}//fim da função hodometro


	#Verifica se há dados na variável, se houver calcula o km por litro, arredonda o resultado e exibe
	public function calculaKmLitro(){
				$kmLitro = @($this->hodometro/$this->litrosTotais);
				if(empty($kmLitro)){
					echo ""; #kilometros por litros - não preenchido!</br>
				}else{
					$kl_arredondado = round($kmLitro * 100) / 100;
					$kmLitro = " seu carro fez $kl_arredondado quilômetros por litro.</br>";
					return $kmLitro;
				}
	}//fim da função calculaKmLitro


	# Verifica se há dados na variável, se houver, calcula o custo de combustível gasto na viagem por litro, arredonda o resultado e exibe
	public function calculaCustoTotalCombustivel(){
				$custoLitro = @($this->custoTotalCombustivel/$this->litrosTotais);
				if(empty($custoLitro)){
					echo ""; #custo por litro - não preenchido!</br>
				} else{
					$cl_arredondado = round($custoLitro * 100)/ 100;
					$custoT = "Você pagou em média R$ $cl_arredondado por litro. ";
					return $custoT;
				}
	}//fim da função calculaCustoTotalCombustivel



	# Verifica se há dados na variável, se houver, calcula o custo total de combustível gasto na viagem por quilômetros rodados, arredonda o resultado e exibe
	public function calculaKmRodados(){
				$custokm = @($this->custoTotalCombustivel/$this->hodometro);
				if(empty($custokm)) {    
					echo ""; #custo por km - não preenchido!</br>
				} else{
					$ck_arredondado = round($custokm * 100) / 100; 
					$rodados = "E R$ $ck_arredondado por cada quilômetro rodados. </br>";  
					return $rodados;
				}
	}//fim da função calculaKmRodados


} //fim da classe



?>