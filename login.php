<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> All products RedStore</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
    

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="images1/nikezin.png" whidth="125px" height="80px" class="logomedia"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="produtos.php">Produtos</a></li>
                    <li><a href="login.php">Conta</a></li>
                </ul>
            </nav>
            
            <a href="carrinho.html"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAORJREFUSEvtld0RATEUhb+twKiATtCBDujAqAAdKEEHlEAlRgc6YI5JdshKbnZNxsvmZTP5Od/Nyd3cisKtKqxPLmAOrICpC+gM7AB9ky0HcAAWERVBtimCBVDkRyewBk6
                uvwQ2rj9LncQCyIIJIPF9EKkiF+TyZl3jMBbg4XYMgXuwewxc3VhUJxcQW+cDyAZ4S6zkSM1LQ/
                fyaiHZR/QL4EM3BvDjlgXhfGP93wFtrWp9gh4QTVPrB4xZ19+
                BmVSmRXoxB6ZMesEN0Ev79S1SSVQFG3WESFzFqC6lXbMlm18c8ATvMDIZGBnHqwAAAABJRU5ErkJggg==" 
                widht="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutogle()">

        </div>
    </div>

<!--Pagina de login-->

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images1/pngwing.com.png" height="550px" width="600px">
                </div>
                <div class="col-2">
                    <div class="form-container">
                            <div class="form-btn">
                                <span onclick="login()">Entrar</span>
                                <span onclick="register()">Registrar</span>
                                <hr id="Indicator">
                            </div>
                            <form id="LoginForm">
                                <input type="text" placeholder="usuário">
                                <input type="password" placeholder="senha">
                                <button type="submit" class="btn">Entrar </button>
                                <a href="#"> Esqueceu a senha</a>
                                <!--Criar uma página para simular uma requisição no email-->
                            </form>

                            <form id="RegForm">
                                <input type="text" placeholder="usuário">
                                <input type="email" placeholder="email">
                                <input type="telefone" placeholder="telefone (opcional)">
                                <input type="password" placeholder="senha">
                                <button type="submit" class="btn">registrar </button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--Rodapé-->

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3> Baixe nosso aplicativo</h3>
                <p>Download para android e ios</p>
                <div class="app-logo">
                    <img src="images/play-store.png">
                    <img src="images/app-store.png">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="images1/nikezin.png" color-image="white">
                <p>Nosso propósito é tornar o prazer e os 
                    benefícios acessíveis a muitos de forma sustentável</p>
            </div>
            <div class="footer-col-4">
                <h3> Siga a gente</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">copyright 2022 - Easy Tutorials</p>
    </div>
</div>

<!--Implementando o JavaScript-->

<script>
    var MenuItems = document.getElementById("MenuItems")

    MenuItems.style.maxHeight ="0px"

    function menutogle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight ="200px"
        }

        else{
            MenuItems.style.maxHeight ="0px"
        }
    
    }

</script>


<!--JS for toogle form-->


<script>

    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

        function register() {

            RegForm.style.transform ="translateX(0px)"
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }

        function login() {

            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";
        }


</script>


</body>
</html>