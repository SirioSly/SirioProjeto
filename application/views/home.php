<!DOCTYPE html>

<div class="container">
    <?php
    // put your code here
    echo $acronico;
    echo "<br>";
//        echo $completo;
    echo "<p>";
    ?>

    <h2><dt> <center>Home</center> </dt></h2>

    <p></p>
    <center> <a class="btn btn-primary" href="<?php echo base_url() . 'contato' ?>">Contato</a></center>
    <?php if ($this->session->userdata('logado')->perfilAcesso == 'ADM') { ?>
        <p></p>
        <center> <a class="btn btn-primary" href="<?php echo base_url() . 'funcao' ?>">Função</a></center>
        <p></p>
        <center>  <a class="btn btn-primary" href="<?php echo base_url() . 'usuario' ?>">Usuário</a></center>
        <p></p>
    <?php } ?>

    <br>

    </body>
    <br>
</div>