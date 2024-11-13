<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../BOOTSTRAP/css/bootstrap.min.css" rel="stylesheet">
    <title>Processamento de formulários - $_POST</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Catálogo de produtos</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form role="form" action="_detalhes_produtos.php" method="post"> <!--Passando o formulario para a página _post e recuperando as informações com post(fora do link)-->
                    <div>
                        <label for="Produto">Nome do Produto:</label>
                        <select class="form-control" name="id_produto" id="id_produto">
                            <option value="1">Cadeira</option>
                            <option value="2">Fogão</option>
                            <option value="3">Roteador</option>
                            <option value="4">Notebook</option>
                            <option value="5">Celular</option>
                        </select>
                        <div>
                            <button type="submit" class="btn btn-default">Ver detalhes</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
        </div> <!--Fim da row-->

    </div>

</body>
</html>