<div class="container">
    <div class="form-group">
        <div class="form-group"></div>
        <div class="form-group">
            <div class="form-group">
                <h2 class="">Login</h2>
            </div>
            <div class="form-group">
                <?php echo form_open('login/autenticar'); ?>
                <div class="form-group">
                    <label class="" for="usuario">Usuário</label>
                    <input class="form-control" type="text" required="required" name="usuario" id="usuario">

                </div>
                <div class="form-group">
                    <label class="" for="senha">Senha</label>
                    <input class="form-control" type="password" required="required" name="senha" id="senha">

                </div>
                </br>
                <input Class="btn-success form-control" type="submit" name="acao" value="Entrar" />
                <p></p>
                <input  Class="btn-secondary form-control" type="reset" />
                <?php form_close(); ?>  
            </div>
        </div>
        <div class=""></div>
    </div>
</div>
<script type="text/javascript">
    $("#btn-lista").click(function () {
        $("#div-lista").toggleClass("hide");
    });
</script>