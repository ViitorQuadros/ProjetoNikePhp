
<?php 
require ('config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= BLOG_NOME;?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<?php include("cabecalho.php")?>


<!--Produtos em exibição/cololocar as marcas aqui-->

    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images1/front1.jpg" style="height: 390px;">
                </div>
                <div class="col-3">
                    <img src="images1/front2.jpg" style="height: 390px;">
                </div>
                <div class="col-3">
                    <img src="images1/front3.jpg" style="height: 390px;">
                </div>
            </div>
        </div>
        
    </div>
<!--// FIM Produtos em exibição/cololocar as marcas aqui-->


    <!--Produtos novos-->


<?php

  $c = filter_input(INPUT_GET, 'c', FILTER_VALIDATE_INT);


  $query = mysqli_query($db, "SELECT *, (SELECT departamento FROM departamentos WHERE id = produtos_destaque.departamento_id) AS departamento FROM produtos_destaque"
   . (!empty($c) ? " WHERE departamento_id = {$c}" : '') . " ORDER BY id DESC LIMIT 4");


    
  //Verifica se existem resultados para a query..

?>

    
    <div class="small-container">
        <h2 class="title">Produtos novos</h2>
    <div class="row">
<?

        if (mysqli_num_rows($query)) {
    //intera os resultados obtidos
      while ($item = mysqli_fetch_assoc($query)) {
        if(empty($item['imagem'])){
          //define a imagem default
          $item['imagem'] = 'assets/sem-imagem.jpg';
        } else {
          //verifica se existe o arquivo na pasta
          if(!file_exists('cms/uploads/' . $item['imagem'])){
            //Define a imagem default
           $item['imagem'] = 'assets/sem-imagem.jpg';   
          } else {
            //ajusta caminho da imagem
            $item['imagem'] = 'cms/uploads/' . $item['imagem'];
          }

        }

        ?>

        <div class="col-4">
            <a href="?m=detalhes-produtos-destaque&id=<?= $item['id']; ?>"><img src="<?=$item['imagem'];?>"></a>
            <h4><?=$item['nome'];?></h4>
            <div class="ratting">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p><?=$item['preco_venda'];?></p>
        </div>

       
</div>
<?php
   }
    } else {
      ?>
      <p>Nenhum conteudo por aqui</p>
      <?php
    }
?>
 </div>
    </div>


<!--// FIM Produtos novos-->

<?php

  $c = filter_input(INPUT_GET, 'c', FILTER_VALIDATE_INT);


  $query = mysqli_query($db, "SELECT *, (SELECT departamento FROM departamentos WHERE id = produtos.departamento_id) AS departamento FROM produtos"
   . (!empty($c) ? " WHERE departamento_id = {$c}" : '') . " ORDER BY id DESC LIMIT 8");
    
  //Verifica se existem resultados para a query..

?>

<!--Produtos em destaque-->

<div class="small-container">
    <h2 class="title">Produtos em destaque</h2>
     <div class="row">
     <?
    if (mysqli_num_rows($query)) {
        //intera os resultados obtidos
      while ($item = mysqli_fetch_assoc($query)) {
        if(empty($item['imagem'])){
          //define a imagem default
          $item['imagem'] = 'assets/sem-imagem.jpg';
        } else {
          //verifica se existe o arquivo na pasta
          if(!file_exists('cms/uploads/' . $item['imagem'])){
            //Define a imagem default
           $item['imagem'] = 'assets/sem-imagem.jpg';   
          } else {
            //ajusta caminho da imagem
            $item['imagem'] = 'cms/uploads/' . $item['imagem'];
          }

        }
        ?>



    
        <div class="col-4">
            <a href="?m=detalhes-produtos&id=<?= $item['id']; ?>"><img src="<?=$item['imagem'];?>"></a>
            <div class="ratting">
                <h4><?=$item['nome'];?></h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p><?=$item['preco_venda'];?></p>
        </div>

    <?php
   }
    } else {
      ?>
      <p>Nenhum conteudo por aqui</p>
      <?php
    }
?>


    <!--// FIM Produtos em destaque-->







<?php

  $c = filter_input(INPUT_GET, 'c', FILTER_VALIDATE_INT);


  $query = mysqli_query($db, "SELECT *, (SELECT departamento FROM departamentos WHERE id = produtos_novos.departamento_id) AS departamento FROM produtos_novos"
   . (!empty($c) ? " WHERE departamento_id = {$c}" : '') . " ORDER BY id DESC LIMIT 1");


    
  //Verifica se existem resultados para a query..

?>



<!------------Produtos em ofertas----------->
<!------------Colocar java script para ir para os lados aqui-------------->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <?
    if (mysqli_num_rows($query)) {
        //intera os resultados obtidos
      while ($item = mysqli_fetch_assoc($query)) {
        if(empty($item['imagem'])){
          //define a imagem default
          $item['imagem'] = 'assets/sem-imagem.jpg';
        } else {
          //verifica se existe o arquivo na pasta
          if(!file_exists('cms/uploads/' . $item['imagem'])){
            //Define a imagem default
           $item['imagem'] = 'assets/sem-imagem.jpg';   
          } else {
            //ajusta caminho da imagem
            $item['imagem'] = 'cms/uploads/' . $item['imagem'];
          }

        }
        ?>

            <div class="col-2">
                <a class="offer-img" href="?m=detalhes-produtos-novos&id=<?= $item['id']; ?>"><img src="<?=$item['imagem'];?>"></a>
            </div>
            <div class="col-2">
                <p>Exclusivo para compra na NikeStore</p>
                <h1><?=$item['nome'];?></h1>
                <small><?=$item['descricao'];?></small>
                    <br>
                    <a href="#" class="btn">compre agora &#8594;</a>
            </div>
        </div>
    </div>  
</div>


 <?php
   }
    } else {
      ?>
      <p>Nenhum conteudo por aqui</p>
      <?php
    }
?>


<!------------// FIM Produtos em ofertas----------->

<!--------Avaliações--------->

<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Parabéns pelo produto e serviço desenvolvido!!! De grande utilidade para 
                    o público em geral, e ainda mais específico ao público esportista!!!
                    Este site está de Parabéns pela grande equipe envolvida no desenvolvimento!
                    Super recomendo :) Voem o mundo é de vocês!!!!!
                    Forte abraço!</p>
                    <div class="ratting">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                <img src="images2/fer.png">
                <h3>Fernanda Querida</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Excepcional! Um site muito lindo e muito prático!
                    Os responsáveis pelo site merecem nota 10!</p>
                <div class="ratting">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            <img src="images2/adriano.jpg">
            <h3>Adriano Bacana</h3>
            </div>

            
        </div>
    </div>
</div>

<!--------// FIM Avaliações--------->


<!------Marcas parceiras da loja = brand ---------->
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="images/logo-godrej.png">
        </div>
            <div class="col-5">
                <img src="images/logo-oppo.png">
            </div>
        
            <div class="col-5">
                <img src="images/logo-coca-cola.png">
            </div>
            <div class="col-5">
                <img src="images/logo-paypal.png">
            </div>
            <div class="col-5">
                <img src="images/logo-philips.png">
            </div>
        </div>
    </div>
    
</div>
<!------// Fim Marcas parceiras da loja = brand ---------->


<!--------Rodapé----------->


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