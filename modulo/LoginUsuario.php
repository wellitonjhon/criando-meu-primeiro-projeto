<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>    
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
    </head>
    <body>
        <nav class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img src="../imagem/carro-de-compra.png"></a>Sistema</a></div>
                <div class=" navbar-brand navbar-right">Olá teste. Seja Bem vindo!!</div>
            </div>
        </nav>
        <div class="container">
            <div class="row jumbotron">
                <div class="col-xs-6 col-md-6">
                        <p>Acesse sua conta</p>
                    
                    <form class="container">
                        <div class="form-group">
                            <label for="Email">Endereço de e-mail</label>
                            <input type="email" class="form-control" id="Email" placeholder="Digite seu Email">
                        </div>
                        
                        <div class="form-group">
                            <label for="Password">Você tem uma senha de solução integrada?</label>
                            <select class="form-control">
                                <option>Selecione uma opção</option>
                                <option>Sim, eu tenho uma senha</option>
                                <option>Não, eu tenho uma senha</option>
                                <div class="form-group">
                                <button type="submit" class="btn btn-success"></button>
                                </div>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="Password">Senha: - <a href="#">Esquecie minha senha</a></label>
                            <input type="password" class="form-control" id="Password" placeholder="Digite sua senha">
                        </div>
                        <button type="submit" class="btn btn-success">Continuar</button>
                    </form>
                    
                </div>
                <!--============================Formulario de consulta de pedidos===================================-->
                <div class="col-xs-6 col-md-6">
                    <p>Consultar pedidos</p>
                    
                    <form class="container">
                        <div class="form-group">
                            <label for="pedido">Número do pedido</label>
                            <input type="text" class="form-control" id="pedidos" placeholder="Digite o número do seu pedido">
                        </div>
                        <div class="form-group">
                            <label for="Email">E-mail</label>
                            <input type="email" class="form-control" id="Email" placeholder="Digite seu Email">
                        </div>
                        <button type="submit" class="btn btn-success">Consultar</button>
                    </form>

                </div>
            </div>
        </div>
    </body>
</html>
