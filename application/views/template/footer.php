
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<script href="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script> 

<!--Datatable-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-html5-1.5.2/b-print-1.5.2/datatables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"></script>

<?php if($this->session->flashdata('Sucesso')) {?>
<script>
    $.bootstrapGrowl("Cadastro Realizado", {
  ele: 'body', // which element to append to
  type: 'success', // (null, 'info', 'error', 'success')
  offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
  align: 'center', // ('left', 'right', or 'center')
  width: 250, // (integer, or 'auto')
  delay: 4000,
  allow_dismiss: true,
  stackup_spacing: 10 // spacing between consecutively stacked growls.
});
</script>
<?php } ?>

    </body>
</html>