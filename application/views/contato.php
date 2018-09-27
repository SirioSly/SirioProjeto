<!DOCTYPE html>
<div class="container"
<?php
// put your code here
echo $acronico;
echo "<br>";
//        echo $completo;
echo "<p>";
?>
     <h2>Contato</h2>
         <?php echo form_open('contato/inserir'); ?>
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input name="nome" type="text" class="form-control"  id="nome" > 
    </div>

    <div class="form-group">
        <label for="email">E-mail:</label>
        <input class="form-control" id="email" name="email" type="email" required/>
    </div>
    <div class="form-group">
        <label for="funcao">Função:</label>
        <select class="form-control" id="nomeFuncao" name="idfuncao"  required/>
        <option> Selecionar Função... </option>
        <?php foreach ($funcao as $funcao): ?>
            <option value="<?php echo $funcao->idfuncao; ?>"><?php echo $funcao->nomeFuncao; ?></option>
        <?php endforeach; ?>
    </select>   
    </div>
    
    
    <div class="form-group">      
        <input class="btn btn-success" type="submit" value="Salvar"/>
        <input class="btn btn-danger" type="reset" value="Limpar"/>
        <input class="btn btn-secondary" id="btn-lista" value="Listar Contatos"/>
        <?php form_close(); ?>
        <p></p>

    </div>
    <div id="div-lista" class="hide">    

        <table id="contatos"class="table table-striped">
            <caption>Contatos</caption>


            <thead>
                <tr>
                    <th class="table-dark">Nome</th>
                    <th class="table-dark">E-mail</th>
                    <th class="table-dark">Função</th>
                    <th class="table-dark">Função</th>
                </tr>

            </thead>
            <tbody>
                <?php if ($contatos == FALSE): ?>
                    <tr><td>Nenhum contato encontrado!</td></tr>
                <?php else: ?>
                    <?php foreach ($contatos as $row): ?>

                        <tr>
                            <td><?php echo $row->nome; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php echo $row->nomeFuncao; ?></td>
                            <td>
                                <a class="btn btn-success" href="<?php
                                echo base_url() .
                                'contato/editar/' . $row->id;
                                ?>">Editar</a>
                                |
                                <a class="btn btn-danger" href="<?php
                                   echo base_url() . ''
                                   . 'contato/excluir/' . $row->id;
                                   ?>">Excluir</a>
                            </td>
                        </tr> 
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <p></p>
    <a href="<?php echo base_url() . 'home'; ?>">Voltar</a>
</div>
</div>
<script type="text/javascript">
    $("#btn-lista").click(function () {
        $("#div-lista").toggleClass("hide");

    });
    $(document).ready(function () {
        $('#contatos').DataTable({
            language: {
                "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
            },
            iDisplayLength: 10,
            dom: 'Bfrtip',
            buttons: [
                'copy',
                'excel',
                'print',
                'pdf'
            ]
        });
    });

</script>