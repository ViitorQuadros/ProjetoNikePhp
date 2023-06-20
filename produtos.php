<?php 
    require('config.php');

    // $m = filter_input(INPUT_GET, 'm', FILTER_DEFAULT);
    //o @ omite o erro com o metodo $m = $_GET['M'];
    @$m = $_GET['m'];
    if(empty($m)) {
      $m = 'produtos';
  } else {
    if
      (!in_array($m, array('produtos','produtos'))){
        $m = '404';
      }
    }
?>


<div>
    <div class="container">
        <!--Começa o cabeçalho-->
        <div class="navbar">
            <div class="logo cor-carrinho">
                <a href="index.php"><img src="images1/nikezin.png" whidth="125px" height="80px" class="logomedia"></a>
            </div>
            <nav class="estilo-menu-items">    
                <ul id="MenuItems">
                    <li><a href="?m=home">Inicio</a></li>
                    <li><a href="?m=produtos">Produtos</a></li>
                </ul>
            </nav>
        </div>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Produtos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
    


<?php

  $c = filter_input(INPUT_GET, 'c', FILTER_VALIDATE_INT);


  $query = mysqli_query($db, "SELECT *, (SELECT departamento FROM departamentos WHERE id = produtos.departamento_id) AS departamento FROM produtos"
   . (!empty($c) ? " WHERE departamento_id = {$c}" : '') . " ORDER BY id DESC LIMIT 4");
    
  //Verifica se existem resultados para a query..
 
?>

<div class="small-container">
    <h2 class="title"> Todos os produtos</h2>
    <div class="row row-2">
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
<!--footer-->








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