<?php  
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-3 logoNav col-in-block">
                <h1 id="mainLogo">Logo</h1>
            </div>
            <div class="hidden-xs col-sm-8 navItems col-in-block text-right">
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="produtos">Produtos</a></li>
                    <li><a href=<?php

                        if($_SESSION['isLogged']){
                            echo 'minhaConta';
                        }else{
                            echo 'login';
                        }
                    
                    ?>
                    ><?php
                    
                        if($_SESSION['isLogged']){
                            echo 'Minha Conta';
                        }else{
                            echo 'Login';
                        }

                    ?>
                    </a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
            <div class="col-xs-6 visible-xs menuMobile v-middle text-right col-in-block">
                <i class="fas fa-bars fa-2x"></i>
            </div>
        </div>
    </div>
</div>