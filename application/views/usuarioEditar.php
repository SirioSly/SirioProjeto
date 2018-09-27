<div class="container">
        <?php
        // put your code here
        echo $acronico;
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?>
        <h2>Editar contato</h2>
       
        <?php echo form_open('usuario/atualizar'); ?>
            <div class="form-group">
            <input type="hidden" name="idusuario" id="idusuario" value="<?php echo $usuarioEditar[0]->idusuario; ?>">
            <label for="nomeUsuario">Nome Usuário</label>
            <input name="nomeUsuario" type="text" id="nomeUsuario" class="col-sm-3 col-form-label form-control" value="<?php echo $usuarioEditar[0]->nomeUsuario; ?>" required/>
            </div>
            <p></p>
            <div class="form-group">
            <input type="hidden" name="idusuario" id="user" value="<?php echo $usuarioEditar[0]->user; ?>">
            <label for="nomeUsuario">Usuário</label>
            <input name="nomeUsuario" type="text" id="nomeUsuario" class="col-sm-3 col-form-label form-control" value="<?php echo $usuarioEditar[0]->user; ?>" required/>
            </div>
            
            <input class="btn btn-success" type="submit" value="Salvar"/>
        <?php form_close(); ?>
        <p></p>
        <a href="<?php echo base_url() .  'usuario'; ?>">Cancelar</a>
       
        </div>
