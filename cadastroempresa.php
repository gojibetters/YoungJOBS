<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo_emp.css">
    <title>YoungJOBS</title>
</head>
<body>
    <div class="background-roxo">
        <header>

            <div class="container">
                <nav>
                    <div class="logo">
                        <a href="index.html"><img src="img/logo_fundo preto_preview_rev_1.png" alt="logo site" width="100%" height="100%"> </a>
                    </div>
                    <ul class="ul ativo">
                        <li> <a href="index.php"> Home </a></li>
                        <li> <a href="login2.php"> Login </a></li>
                        <li> <a href="vagas_nova.php"> Vagas </a></li>
                        <li> <a href="#"></a></li>
                        <li> <a href="#"></a></li>

                    </ul>
                    <div class="menu-icon">
                        <img src="img/menu.png" alt="icone de menu">
                    </div>
                </nav>
            </div>
        </header>

        <div class="containers">
            <div class="form">
                <form action="/config/configRE.php" method="POST">
                    <div class="form-header">
                        <div class="title">
                            <h1>Cadastro da Empresa</h1>
                        </div>
                        <div class="login-button">
                            <button><a href="login2.html">Entrar</a></button>
                        </div>
                    </div>
    
                </br>
                    <div class="input-group">
                        <div class="input-box">
                            <label for="companyname">Nome da Empresa:</label>
                            <input id="companyname" type="text" name="nome" placeholder="Digite o nome da empresa" required>
                        </div>

                    </br>
                        <div class="input-box">
                            <label for="cnpj">CNPJ:</label>
                            <input type="text" name="cnpj" class="ls-mask-cnpj" placeholder="00.000.000/0000-00" name="cnpj" >
                        </div>    
    
                    </br>
                        <div class="input-box">
                            <label for="email">E-mail:</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Insira seu email aqui" name="email">
                        </div>
    
                    </br>
                        <div class="input-box">
                            <label for="number">Telefone:</label>
                            <input type="text" class="form-control phone-ddd-mask" placeholder="Ex.: (00) 0000-0000" name="telefone">
                        </div>

                    </br>
                        <div class="input-box">
                            <label for="password">Senha:</label>
                            <input class="password form-control" id="user_password2" data-component="password-strength" data-monitor-id="password-strength-monitor" type="password" placeholder="Insira sua senha" name="senha">
                        </div>
    
                        <div class="input-box">
                            <label for="confirmPassword">Confirme sua Senha:</label>
                            <input class="password form-control" id="user_password2" data-component="password-strength" data-monitor-id="password-strength-monitor" type="password" placeholder="Confirme sua senha" name="confirmar">
                        </div>
    
                </div>

                 <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Setor em que atua:</h6>
                    </div>

                    <div class="input-box">
    <select id="setor em que atua"><option value="1">Tecnologia</option><option value="2">Logístico</option><option value="3">Administrativo</option><option value="4">Serviços</option><option value="5">Financeiro</option><option value="6">Contabilidade</option><option value="7">Químico</option><option value="8">Comercial</option><option value="9">Varejista</option><option value="10">Outros</option></select>
</div>
                   
                </div>
    
                <br>
                    <div class="input-box">
                        <label for="cep">CEP:</label>
                        <input type="text" class="form-control cep-mask" placeholder="Ex.: 00000-000" name="cep">
                    </div>
    
                    <div class="input-box">
                        <label for="rua">Rua/Número:</label>
                        <input id="rua" type="text" name="rua" placeholder="Digite o nome da rua e o número onde fica a empresa " required name="rua">
                        </div>
    
                    <div class="input-box">
                        <label for="bairro">Bairro:</label>
                        <input id="bairro" type="text" name="bairro" placeholder="Digite o nome do bairro onde mora" required>
                        </div>
    
                        <div class="input-box">
                                <label for="cep_cidade" class="input-subtitle" >Cidade/Estado:</label>
            <select id="cep_cidade" name="cidade"><option value="1">Barueri/SP</option><option value="2">Carapicuíba/SP</option><option value="3">Jandira
            /SP</option></select>
        </div>
                
                            <div class="reset-button" type="reset">           
                                <button>Redefinir</button>
                            </div>  
                
                                <div class="continue-button">
                                    <button name="submit" type="submit">Enviar</button>
                                </div>
                </form>
            </div>
        </div>
        <script src="JS/maint.js"></script>
        
    </body>
</html>