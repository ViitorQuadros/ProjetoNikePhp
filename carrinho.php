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

<!--Detalhes do carrinho de compra-->

    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Produtos</th>
                <th>quantidade</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-1.jpg" alt="">
                        <div>
                            <p>Nome teste para os tênis</p>
                            <small>Preço: 50.00R$</small>
                            <br>
                            <a href="#">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-2.jpg">
                        <div>
                            <p>Nome teste para os tênis</p>
                            <small>Preço: 70.00R$</small>
                            <br>
                            <a href="#">Remover</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>70.00R$</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-3.jpg" alt="">
                        <div>
                            <p>Nome teste para os tênis</p>
                            <small>Preço: 80.00R$</small>
                            <br>
                            <a href="#">remover</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>80.00R$</td>
            </tr>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>200.00 R$</td>
                </tr>
                <tr>
                    <td>frete</td>
                    <td>20.00 R$</td>
                </tr>
                <tr>
                    <td>total</td>
                    <td>220.00 R$</td>
                </tr>
            </table>
        </div>




    </div>



<!--footer-->

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3> Download our App</h3>
                <p>Download app for android and ios</p>
                <div class="app-logo">
                    <img src="images/play-store.png">
                    <img src="images/app-store.png">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="images/logo-white.png">
                <p>Our Purpose Is to Sustainably Make the Pleasure and 
                Benefits of Sorts Acessible to the Many</p>
            </div>
            <div class="footer-col-3">
                <h3> Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3> Follow us</h3>
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

</body>
</html>