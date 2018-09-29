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
    
    <a class="form-control btn btn-primary" href="<?php echo base_url() . 'contato'; ?>">Contato</a>
    <p></p>
    <a class="form-control btn btn-primary" href="<?php echo base_url() . 'funcao'; ?>">Função</a>
    <p></p>
    <a class="form-control btn btn-primary" href="<?php echo base_url() . 'usuario'; ?>">Usuário</a>
    <p></p>
    <a class="form-control btn btn-primary" href="<?php echo base_url() . 'login/sair'; ?>">Sair</a>
   
</div>


    