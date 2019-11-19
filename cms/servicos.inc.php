
<section>
<h1 class="tit-secao">Serviço</h1>

<?php ShowErros(); ?>

<form action="action_servicos.php?do=CadastraServ" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label class="control-label col-sm-2" for="titulo">Título:</label>
    <div class="col-sm-10">
    <input name="titulo" type="text" class="form-control grande" id="titulo" /><br />
	</div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2">Texto:</label>
    <div class="col-sm-10">
    <textarea class="form-control" name="texto" id="texto"></textarea><br />
	</div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="arquivo">Foto Principal:</label>
    <div class="col-sm-10">
    <input type="file" name="arquivo" id="arquivo" /><br />
	</div>
</div>
<div class="form-group">
	<button type="submit" class="btn">CADASTRAR <i class="fa fa-check" aria-hidden="true"></i></button>
</div>
</form>
</section>

<script type="text/javascript">

	CKEDITOR.replace( 'texto', { toolbar : 'Personalizada', uiColor : '#F5F5F5', height: '250px', });

</script>


<?php
$res = mysql_query("SELECT * FROM site_tb_servicos ORDER BY titulo_serv ASC");
if (mysql_num_rows($res)) {
?>
<section class="lista-registros">
<h1>Serviços Cadastrados</h1>

<p>Clique para editar</p>
<table class="table table-striped table-datatables">
	<thead>
	<tr>
   		<th>Título</th>
        <th>Views</th>
        <th class="tbl_acao">Excluir</th>
	</tr>
    </thead>
    <tbody>
    <?php while ($row = mysql_fetch_array($res)) { 
	$bg = '';
	?>
<tr>
      <td <?=$bg?> align="center"><a href="./?p=servico&id_serv=<?=$row['id_serv']?>"><?=mostraChar($row['titulo_serv'])?></a></td>
      <td <?=$bg?> align="center"><a href="./?p=servico&id_serv=<?=$row['id_serv']?>"><?=$row['hit_serv']?></a></td>
      <td <?=$bg?> align="center" class="excluir"><a onclick="return Confirma('Deseja excluir o serviço <?=mostraChar($row['titulo_serv'])?>?')" href="action_servicos.php?do=ExcluiServ&id_serv=<?=$row['id_serv']?>"><i class="fa fa-times btn_excluir" aria-hidden="true"></i></a></td>
  </tr>
    <?php } ?>
    </tbody>
</table>
</section>
<?php } ?>