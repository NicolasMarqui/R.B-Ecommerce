<?php
    
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    
    include('functions/validateMinhaConta.php');
    include('functions/config.php');

    $email = $_SESSION['user'];

    $query = "SELECT * FROM users WHERE email='$email'";

    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $row['nomeCompleto'] ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="mainContainer" style="background-color: #3996FD;">
        <header>
            <?php include('pages/nav.php')?>
        </header>
        <section>
            <div class="section section-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="hidden-sm col-md-2 menuMinhaConta">
                            <h3>Informações</h3>
                            <ul>
                                <li><a href="#">Seus dados</a></li>
                                <li><a href="#">Seus pedidos</a></li>
                                <li><a href="#">Atendimento</a></li>
                                <li><a href="#">Seus dados</a></li>
                            </ul>

                            <h3>Pedidos</h3>
                            <ul>
                                <li><a href="#">Todos os pedidos</a></li>
                                <li><a href="#">Todos os pedidos</a></li>
                                <li><a href="#">Todos os pedidos</a></li>
                                <li><a href="#">Todos os pedidos</a></li>
                            </ul>
                            <div class="minhaContaIcons">
                                <i class="fas fa-home"></i>
                                <i class="fas fa-shopping-cart"></i>
                                <i class="fas fa-comments"></i>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-10 minhaContaMain">
                            <a href="functions/logout.php"><i class="fas fa-sign-out-alt fa-2x"></i></a>
                            <h1>Seja bem vindo <br> <span><?php  echo utf8_encode($row['nomeCompleto'])?></span> </h1>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-10 col-md-6">
                                        <div class="itemInfo">
                                            <h4>Nome: <span><?php echo utf8_encode($row['nomeCompleto']) ?></span></h4>
                                            <h4>Email: <span><?php echo $row['email'] ?></span></h4>
                                            <h4>senha: <a href="#">Mostrar senha</a></span></h4>
                                            <h4>Sexo: <span><?php 
                                                if($row['gender'] == 2){
                                                    echo 'Masculino';
                                                }else{
                                                    echo 'Feminino';
                                                }
                                            ?></span></h4>
                                            <h4>Data de Nascimento: <span><?php echo $row['dataNascimento'] ?></span></h4>
                                            <h4>Criação da conta: <span><?php echo $row['contaCriada'] ?></span></h4>
                                            <h4>Endereço: <span><?php echo $row['endereco'] ?></span></h4>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <?php 
                                            if($row['isAdmin'] == 1): 
                                        ?>
                                        <div class="isAdmin text-center">
                                            <button><a href="editar?acao=adicionar">Adicionar Produtos</a></button><br>
                                            <button><a href="editar?acao=editar">Editar Produtos</a></button><br>
                                            <button><a href="editar?acao=excluir">Excluir Produtos</a></button><br>
                                            <button><a href="editar?acao=ver">Ver Produtos</a></button><br>
                                        </div>
                                            <?php else: ?>
                                            <div class="noNot">
                                                <h5>Sem Notificações no momento</h5>
                                            </div>
                                            <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>