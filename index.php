<!DOCTYPE html>
<?php
session_start();
require 'funcoes/banco/conexao.php';
conecta();

if (isset($_GET['logout']) && $_GET['logout'] == 'true'):
    session_destroy();
    header("Location: index.php");
endif;
?>


<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
        <script src="js/script.js" type="text/javascript"></script>

        <style>
            .modal-header, h4, .close {
                background-color: #5cb85c;
                color:white !important;
                text-align: center;
                font-size: 30px;
            }
            .modal-footer {
                background-color: #f9f9f9;
            }
        </style>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <!-----------------corpo da pagina ----------------------->
    <body>
        <!--- NavBar --->
        <div id="rodape">
            <?php include "includes/navbar.php"; ?>
        </div>

        <!--- Carousel --->
        <div id="rodape">
            <?php include "includes/carousel.php"; ?>
        </div>

        <!---------cards ---->  
        <div id="rodape">
            <?php include "includes/cards.php"; ?>
        </div>
        <!---------footer ---->  
        <div id="rodape">
            <?php include "includes/footer.php"; ?>
        </div>
    </body>

    <!-- Inicio Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form" id="login" name="loginForm" method="POST" action="">
                        <div class="form-group">
                            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Usuário</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Entre com seu usuario">
                        </div>
                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="Insira sua senha">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="" checked>Relembre-me</label>
                        </div>
                        <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span>Login</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    <p>Crie sua<a href="#"> Conta </a></p>
                    <p>Esqueci a  <a href="#">Senha?</a></p>
                </div>
            </div>
            <!-- Fim Modal -->
            <script>
                $(document).ready(function () {
                    $("#myBtn").click(function () {
                        $("#myModal").modal();
                    });
                });

            </script>
            <script>
                $('#carousel').carousel({
                    interval: 1000,
                    keyboard: false;
                });
            </script>
            </html>
