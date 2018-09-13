<div class="container">
        <?php
        // put your code here
        echo $acronico;
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?>
        <h2>Editar contato</h2>
       
        <?php echo form_open('contato/atualizar'); ?>
            <div class="form-group">
            <input type="hidden" name="id" id="id" value="<?php echo $contatoEditar[0]->id; ?>">
            <label for="nome">Nome:</label>
            <input name="nome" type="text" id="nome" class="col-sm-3 col-form-label form-control" value="<?php echo $contatoEditar[0]->nome; ?>" required/>
            </div>
            <p></p>
            <label>E-mail:</label>
            <input name="email" type="email"class="col-sm-3 col-form-label form-control" value="<?php echo $contatoEditar[0]->email; ?>" required/>
            <p></p>
            <input class="btn btn-success" type="submit" value="Salvar"/>
        <?php form_close(); ?>
        <p></p>
        <a href="<?php echo base_url() .  'contato'; ?>">Cancelar</a>
       
        </div>
