
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie a Sua Conta</title>
    <link rel="stylesheet" href="css/cadastrar.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section>
        <div class = "container1">
            <div class = "card">
                <div class = "image">
                    <img href = "#" src ="img/logo.png" width="175px" height="175px">
                </div>
                <div class = "content">
                    <h4 class="titulo">Crie sua conta agora!</h4> 
                    <form action="criarconta.php" method="POST">
                        <center><div class="primeira">
                                <div class="input-icons">
                                    <h4 class="espaco">Nome Completo</h4>
                                    <i class="fa fa-user icon">
                                </i>
                                    <input class="input-field tamanho" 
                                        name="nome"
                                        type="text" 
                                        placeholder="Nome Completo">
                                </div>
                    
                                <div class="input-icons">
                                    <h4 class="espaco">Nome de usuario</h4>
                                    <i class="fa fa-user icon">
                                </i>
                                    <input class="input-field tamanho"
                                        name="login" 
                                        type="text"
                                        placeholder="Insira seu Usuário">
                                </div>
                            </div>

                            <div class="segunda">
                                <div class="input-icons">
                                    <h4 class="espacoo">Exemplo @gmail.com</h4>
                                    <i class="fa fa-envelope icon">
                                </i>
                                    <input class="input-field email"
                                        name="email" 
                                        type="email"
                                        placeholder="Digite o seu email">
                                    <h4 class="quarta">Você pode usar letras, números e símbolos!</h4>
                                </div>
                            </div>
                            <div class="terceira">
                                <div class="input-icons senhaa">
                                    <h4 class="espacooo ">Criar uma senha</h4>
                                    <i class="fa fa-key icon">
                                </i>
                                    <input class="input-field senha" 
                                        name="senha"
                                        type="password"
                                        placeholder="Senha">
                                </div>
                            
                                <div class="input-icons">
                                    <h4 class="espacooo espacoooo">Confirmar a Senha</h4>
                                    <i class="fa fa-key icon">
                                </i>
                                    <input class="input-field senha" 
                                        name="confsenha"
                                        type="password"
                                        placeholder="Confirmar Senha">
                                <br>
                                    <input type="checkbox" id="horns" name="horns" class="esquerda">
                                    <label for="horns">Mostrar Senha</label>
                                
                                </div>
                         
                            </div>
                            <button type="submit" name="submit">Confirmar</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

