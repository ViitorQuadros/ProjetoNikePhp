<?php
require('config.php');
    //pega o id da URL
  $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
  if (!empty($id)){
    //busca o produto
    $query = mysqli_query($db, "SELECT * FROM produtos WHERE status = 1 AND id = {$id}");
        if (mysqli_num_rows($query)) {
            $item = mysqli_fetch_assoc($query);

            //verifica e ajusta o caminho da imagem
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
        } else {
          ?>
          <script>window.location = '?m=404'; </script>
          <?php
        }
    }


    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Detalhes produtos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
            
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


<?php

  $c = filter_input(INPUT_GET, 'c', FILTER_VALIDATE_INT);


  $query = mysqli_query($db, "SELECT *, (SELECT departamento FROM departamentos WHERE id = produtos.departamento_id) AS departamento FROM produtos
   WHERE id = {$id}");
    
  //Verifica se existem resultados para a query..

?>



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




    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="<?=$item['imagem'];?>" width="100%" id="ProductImg">
            <!--Onde troca as imagens da parte da compra-->
            </div>
            <div class="col-2">
               
                <h1><?=$item['nome'];?></h1>
                <h4>$<?=$item['preco_venda'];?></h4>
                <select>
                    <option>tamanhos disponiveis</option>
                    <option>35</option>
                    <option>36</option>
                    <option>37</option>
                    <option>38</option>
                    <option>39</option>
                </select>
                <input type="number" value="1">
                <a href="https://wa.me/5554563563564?text=Ol%C3%A1%2C+quero+falar+sobre+<?$item['nome'];?>este+produto" class="btn">Enviar mensagem ao Whatsapp</a>

                <h3>detalhes do produto <i class="fa fa-indent"></i></h3>
                <br>
                <p><?=$item['descricao'];?></p>
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


<!--Titulos-->


<!--protuos-->

<div class="small-container">
    <div class="row row-2">
        <h2>você também pode gostar</h2>
    </div>
</div>


<?php

  $c = filter_input(INPUT_GET, 'c', FILTER_VALIDATE_INT);


  $query = mysqli_query($db, "SELECT *, (SELECT departamento FROM departamentos WHERE id = produtos.departamento_id) AS departamento FROM produtos"
   . (!empty($c) ? " WHERE departamento_id = {$c}" : '') . " ORDER BY id DESC LIMIT 4");
    
  //Verifica se existem resultados para a query..

?>
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
                <p><h4>$<?=$item['preco_venda'];?></h4></p>
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
    <!--</div>-->
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


<!--JS para produtos da galeria-->

<script>

    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");

    SmallImg[0].onclick = function(){
        ProductImg.src = SmallImg[0].src;
    }
    
    SmallImg[1].onclick = function(){
        ProductImg.src = SmallImg[1].src;}
    
        SmallImg[2].onclick = function(){
        ProductImg.src = SmallImg[2].src;
    }
    
    SmallImg[3].onclick = function(){
        ProductImg.src = SmallImg[3].src;
    }

</script>


</body>
</html>