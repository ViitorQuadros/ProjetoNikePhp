<?
    $m = filter_input(INPUT_GET, 'm', FILTER_DEFAULT);
    if (empty($m)) $m = 'home';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Meu site</title>
    <meta charset="utf8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   

    

    <?php include "{$m}.php"; ?>

    



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
                <img src="images1/green-nike.png" color-image="white">
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
        <p class="copyright">Vitor/gustavo</p>
    </div>
</div>


</body>
</html>