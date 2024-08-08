<?php

	/**
	 * 
	 */
	class pessoa{

		//Atributos
		var $nome;

		//métodos (getters and setters)
		function setNome($nome_definido){
			$this->nome = $nome_definido;
		}

		function getNome(){
			return this->nome;
		}
	}

	$pessoa = new Pessoa();

	$pessoa->setNome("Patrik");

	echo($pessoa->getNome);
?>