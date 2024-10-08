var timerId = null; //variável que armazena a chamada da função timeout

function iniciaJogo(){

	var url = window.location.search;

	var nivel_jogo = url.replace("?","");

	

	var tempo_segundos=0;

	//1 fácil -> 120segundos
	if(nivel_jogo ==1){
		tempo_segundos=120;
	}

	//2 Normal -> 60segundos
	if (nivel_jogo ==2){
		tempo_segundos=60;
	}

	//3 Difícil -> 30segundos
	if (nivel_jogo ==3){
		tempo_segundos=30;
	}

	//inserindo segundos no span
	document.getElementById('cronometro').innerHTML = tempo_segundos;


	//
	var qtd_baloes = 64;

	criaBaloes(qtd_baloes);

	//imprimir qtde baloes inteiros
	document.getElementById('baloes_inteiros').innerHTML = qtd_baloes;
	document.getElementById('baloes_estourados').innerHTML = 0;

	contagemTempo(tempo_segundos + 1);
}


function contagemTempo(seg){

	seg--;

	if(seg <= -1){
		clearTimeout(timerId); //para execução fa função settimeout
		game_over();
		return false;
	}

	document.getElementById('cronometro').innerHTML = seg;
	timerId = setTimeout("contagemTempo("+seg+")", 1000);

}

function game_over(){
	alert('Fim de jogo - Você não conseguiu estourar todos os balões a tempo!');
}

function criaBaloes(qtd_baloes){

	for(var i=1; i<=qtd_baloes; i++){

		var balao = document.createElement("img");
		balao.src = 'imagens/balao_azul_pequeno.png';
		balao.style.margin = '10px';
		balao.id = 'b'+i;
		balao.onclick = function(){estourar(this);};

		document.getElementById('cenario').appendChild(balao);
	}
}

function estourar(e){
	var id_balao = e.id;
	document.getElementById(id_balao).setAttribute("onclick","");
	document.getElementById(id_balao).src = 'imagens/balao_azul_pequeno_estourado.png';
	pontuacao(-1);
}

function pontuacao (acao){

	var baloes_inteiros = document.getElementById('baloes_inteiros').innerHTML;
	var baloes_estourados = document.getElementById('baloes_estourados').innerHTML;

	baloes_inteiros = parseInt(baloes_inteiros);
	baloes_estourados = parseInt(baloes_estourados);

	baloes_inteiros = baloes_inteiros + acao;
	baloes_estourados = baloes_estourados - acao;

	//alert(baloes_inteiros);
	//alert(baloes_estourados);

	document.getElementById('baloes_inteiros').innerHTML = baloes_inteiros;
	document.getElementById('baloes_estourados').innerHTML = baloes_estourados;

	situacao_jogo(baloes_inteiros);
}

function situacao_jogo(bi){
	if (bi == 0){
		alert("Parabéns - Você conseguiu estourar todos os baloes a tempo!");
		parar_jogo();
	}
}

function parar_jogo(){
	clearTimeout(timerId);
}