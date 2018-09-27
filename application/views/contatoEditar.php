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
    <div class="form-group">
        <label>Função:</label>
        <select class="col-sm-6 col-form-label form-control" id="nomeFuncao" name="idfuncao"  required/>
        

        <option> Selecionar Função... </option>
       
        <?php foreach ($funcao as $funcao): ?>
            <option value="<?php echo $funcao->idfuncao; ?>" <?php if ($funcao->idfuncao === $contatoEditar[0]->funcao_idfuncao) echo "selected" ?>>
                <?php echo $funcao->nomeFuncao; ?>    
                
            </option>
    
        <?php endforeach; ?>
            </select>
            <p></p>
            
        <input class="btn btn-success" type="submit" value="Salvar"/>
        <input class="btn btn-secondary" type="reset" value="Limpar"/>
    </div>
    <?php form_close(); ?>
    <p></p>
    <a href="<?php echo base_url() . 'contato'; ?>">Cancelar</a>

</div>
