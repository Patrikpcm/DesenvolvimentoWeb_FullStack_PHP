<?php
    session_start(); //iniciando as variáveis de sessão para podermos ter acesso

    /*
    Caso a variável de sessão usuário não existir, ou seja, usuaŕio tentou acessar a página
    home diretamente sem efetuar login, o usuário é forçado a ir para o a página index.php
    que é a página de login.
    */
    if(!isset($_SESSION['usuario'])){ 
        header('Location: index.php?erro=1'); //forçando o usuário para página de login com um erro embutido
    }
	
	$id_usuario = $_SESSION['id_usuario'];

	//Recuperar quantidade de tweets
	$qtd_tweets = 0;

	$sql = "SELECT COUNT(*) AS qtd_tweets FROM tweet WHERE id_usuario = $id_usuario";//query de pesquisa

	require_once('db.class.php');
    $objDb = new db();
    $link = $objDb->conecta_mysql();
	$resultado_id = mysqli_query($link, $sql); //execução da query
	if($resultado_id){
		$registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
		$qtd_tweets = $registro['qtd_tweets'];
	}
	else
		echo 'Erro na execução da Query';

	//Recuperar quantidade de seguidores
	$qtd_seguidores = 0;

	$sql = "SELECT COUNT(*) AS qtd_seguidores FROM usuario_seguidores WHERE seguindo_id_usuario = $id_usuario";//query de pesquisa

	require_once('db.class.php');
    $objDb = new db();
    $link = $objDb->conecta_mysql();
	$resultado_id = mysqli_query($link, $sql); //execução da query
	if($resultado_id){
		$registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
		$qtd_seguidores = $registro['qtd_seguidores'];
	}
	else
		echo 'Erro na execução da Query';
?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Twitter clone</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<!--Scripts -->
		<script type="text/javascript">
			$(document).ready( function(){
				//associar o evento de click ao botão
				$('#btn_tweet').click(function(){
					if($('#texto_tweet').val().length > 0){
						$.ajax({ //capturando o texto digitado com ajax
							url: 'inclui_tweet.php',
							method: 'post',
							data: {texto_tweet: $('#texto_tweet').val()}, //para utilizar o método ajax data em um formulário que possua muitos campos, pode-se utilizar a função serialize() que transforma os dados em um grupo de chave:valor automáticamente
							success: function(data){
								$('#texto_tweet').val(''); //removendo o conteúdo do campo após a publicação do tweet
								alert('Tweet publicado com sucesso!');
								atualizaTweet();
							}
						});
					}
				});

				function atualizaTweet(){ //função ajax para atualizar a lista de tweets na tela
					$.ajax({
						url: 'get_tweet.php',
						success: function(data){
							$('#tweets').html(data);
						}
					});
				}

				atualizaTweet();
			});
		</script>
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/icone_twitter.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="sair.php">Sair</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">
	    	<br /><br />
	    	<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<h4><?= $_SESSION['usuario']?></h4>
						<hr>
						<div class="col-md-6">
							TWEETS <br> <?= $qtd_tweets?>
						</div>
						<div class="col-md-6">
							SEGUIDORES <BR> <?= $qtd_seguidores?>
						</div>
					</div>
				</div>
			</div>
	    	<div class="col-md-6">
                <div class="panel panel-default"> <!--area de texto do tweet-->
					<div class="panel-body">
						<form id="form_tweet" class="input-group">
							<input id="texto_tweet" type="text" class="form-control" placeholder="O que esta acontecendo agora?" maxlength="140">
							<span class="input-group-btn">
								<button id="btn_tweet" class="btn btn-default" type="button">Tweet</button>
							</span>
						</form>
					</div>
				</div>

				<div id="tweets" class="list-group">
					 <!--tweets publicados-->
				</div>

			</div>
			
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<h4><a href="procurar_pessoas.php">Procurar por pessoas</a></h4>
					</div>
				</div>
			</div>

		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>