    <!DOCTYPE html>

    <div class="container">

       

       
        <?php
        // put your code here
        
        echo "<br>";
        echo $completo;
        echo "<p>";
        ?>
        <h2>Usuário</h2>
        <?php echo form_open('usuario/inserir'); ?>
        <div class="form-group">
            <label for="nomeUsuario">Nome Usuário</label>
            <input name="nomeUsuario" type="text" class=" form-control"placeholder="Nome"   id="nomeUsuario"> 
        </div>

        <div class="form-group">
            <label for="user">Usuário</label>
            <input class=" form-control " id="user" name="user" type="text"placeholder="Nome usuario"  required/>
        </div>
        
         <div class="form-group">
            <label for="senha">Senha</label>
            <input class=" form-control " id="senha" name="senha" type="password" required placeholder="No mínimo 8 Caracteres" minlength="8"/>
        </div>
        
         <div class="form-group">
            <label for="perfilAcesso">Perfil Acesso</label>
            <select class="-control" id="perfilAcesso" name="perfilAcesso" type="text"/>
            <option value=""></option>
            <option value="ADM">Administrador</option>
            <option value="USER">Usuário</option>
         </select>
        </div>
        
        <input class="btn btn-success" type="submit" value="Salvar"/>
        <input class="btn btn-secondary" type="reset" value="Limpar"/>
        <a class="btn btn-primary" id="btn-lista" href="#">Listar Usuário</a>
        <p></p>
        <?php form_close(); ?>
        <p></p>



        <div class="hide" id="div-lista">
        <table id="usuario" class="table table-striped">
    


        <thead>
            <tr>
                <th class="table-dark">Usuário</th>
                <th class="table-dark">User</th>
                <th class="table-dark">Perfil Acesso</th>
                <th class="table-dark">Funções</th>
                
            </tr>

        </thead>
        <tbody>
            <?php if ($usuario == FALSE): ?>
                <tr><td>Nenhum usuario encontrado!</td></tr>
            <?php else: ?>
                <?php foreach ($usuario as $row): ?>
                    <tr>
                        <td><?php echo $row->nomeUsuario; ?></td>
                        <td><?php echo $row->user; ?></td>
                        <td><?php echo $row->perfilAcesso; ?></td>
                        <td>
                            <a class="btn btn-success" href="<?php
                            echo base_url() .
                            'usuario/editar/' . $row->idusuario;
                            ?>">Editar</a>
                            |
                            <a class="btn btn-danger" href="<?php
                               echo base_url() . ''
                               . 'usuario/excluir/' . $row->idusuario;
                               ?>">Excluir</a>
                        </td>
                    </tr>
        <?php endforeach; ?>
    <?php endif; ?>
        </tbody>
    </table>
        </div>
    <p></p>
    <a class="btn btn-primary" href="<?php echo base_url() . 'home'; ?>">Voltar</a>
    </div>
        </div>
    
    <script type="text/javascript">
        $("#btn-lista").click(function (){
            $("#div-lista").toggleClass("hide");
            
        });
        

</script>
