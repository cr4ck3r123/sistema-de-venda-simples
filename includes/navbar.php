<!--------------COMEÇO DA NAV BAR --------------------------->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand" href="#">MyVendas</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Console</a></li>
            <li><a href="#">Jogos</a></li>
            <li><a href="#">Acessorios</a></li>
        </ul>
        <div class="btn-class-login">
            <a href="?logout=true" type="button" id="myBtnSair" style="float: right" class="btn-login"> <img src="img/sairX.png" alt="Sair"/> Sair</a>
        </div>
        <div class="btn-class-login">
            <a href="#" type="button" id="myBtn" style="float: right" class="btn-login"> <img src="img/user1.png" alt="logar"/><?php
                if (@$_SESSION['logado'] == null) {
                    echo 'Login';
                } else {
                    echo @$_SESSION['logado']->login;
                }
                ?></a>
        </div>
        <div class="dropdown">

            <a href="#" type="button" id="myBtnx" style="float: right" class="btn-login"  type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="img/carrinhoCompras.png" alt="logar"/> Carrinho (0) </a>
            <ul class="dropdown-menu" aria-labelledby="about-us">
                <li><a href="#">Our Story</a></li>
                <li><a href="#">Our Team</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>


    </div>

</nav>
<!---------------FIM DA NAV BAR ----------------------------->
