<!DOCTYPE html>

<div class="container">
    <?php
    // put your code here
    echo $acronico;
    echo "<br>";
//        echo $completo;
    echo "<p>";
    ?>

    <h2><dt> Home </dt></h2>

    <p></p>
    <a class="btn btn-primary" href="<?php echo base_url() . 'contato' ?>">Contato</a>
    <?php if ($this->session->userdata('logado')->perfilAcesso == 'ADM') { ?>

        <a class="btn btn-primary" href="<?php echo base_url() . 'funcao' ?>">Função</a>

        <a class="btn btn-primary" href="<?php echo base_url() . 'usuario' ?>">Usuário</a>
        <p></p>
    <?php } ?>
         
    <br>
    
    </body>
        <br>
   </div>