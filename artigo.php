<?php
  // Pega o id da URL
  $id = filter_input(INPUT_GET,'id', FILTER_VALIDATE_INT);
  if(!empty($id)){
    //busca artigo.
    $query = mysqli_query($db, "SELECT *, (SELECT categoria FROM categorias WHERE id= artigos.categoria_id) AS categoria FROM artigos WHERE status= 1 AND id={$id}");
    if(mysqli_num_rows($query)){
      $item = mysqli_fetch_assoc($query);

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
           
    }else{
     ?>
      <script>window.location = '?m404';</script>
    <?php 
  }
  } else{
     ?>
      <script>window.location = '?m404';</script>
    <?php 
  }
?>


<div class="w3-card-4 w3-margin w3-white">
            <img src="<?=$item ['imagem']?>" alt="<?= $item ['titulo'];?>" style="width:100%">
            <div class="w3-container">
              <h3><b><?=$item['titulo'];?> </b></h3> <?//<?=$item['titulo'];  define titulo?>
              <h5><?=$item['categoria'];?><span class="w3-opacity">-<br>---<?= date('d/m/y, H:i\h',strtotime($item['criado_em']));?></span></h5>
          </div>

          <div class="w3-container">
              <p><?=$item['conteudo'];?></p>
              <div class="w3-row">
                <div class="w3-col m8 s12">
                  <p><a href="?m=home" class="w3-button w3-padding-large w3-white w3-border"><b>VOLTAR »</b></a>
                  </p>
              </div>
              <div class="w3-col m4 w3-hide-small">
                  <p>
                    <span class="w3-padding-large w3-right">
                      <b>Atualizado em </b>
                       <span class="w3-tag">
                        <?php if(empty($item['alterado_em'])){ 
                        echo date('d/m/y, H:i\h',strtotime($item['criado_em']));
                      } else {
                        echo date('d/m/y, H:i\h',strtotime($item['alterado_em']));
                      }
                        ?>
                          
                        </span>
                     </span>
                   </p>
              </div>
          </div>
      </div>
  </div>
  <hr>