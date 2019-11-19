
<?php
if (is_numeric($_GET['id_serv'])) {
	$id_serv = $_GET['id_serv'];
	$res = mysql_query("SELECT * FROM site_tb_servicos WHERE id_serv = $id_serv");
	if (mysql_num_rows($res)) {
		$row = mysql_fetch_array($res);
	} else {
		Redir('./?p=servicos');
	}
} else {
	Redir('./?p=servicos');
}
?>
<section>
<h1>Serviço - Detalhes</h1>

<p>Modifique os campos a seguir e pressione "SALVAR" para alterar os dados.</p>

<?php ShowErros(); ?>
<?php if($row['thumb_serv']){?>
<div class="row">
	<div class="col-sm-12 text-center">
        <a href="../uploads/servicos/<?=$row['thumb_serv']?>" class="zoom"><img src="../uploads/servicos/thumb_<?=$row['thumb_serv']?>" class="foto-item" alt="<?=$row['titulo_serv']?>" /></a>
	<br />
	<p><a href="action_servicos.php?do=ApagaFotoServ&id_serv=<?=$row['id_serv']?>" class="btn-foto-item">Apagar Foto</a></p>
    </div>
</div>
<?php } ?>

<form action="action_servicos.php?do=AlteraServ&id_serv=<?=$row['id_serv']?>" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label class="control-label col-sm-2" for="titulo">Título:</label>
    <div class="col-sm-10">
    <input name="titulo" type="text" class="form-control grande" id="titulo" value="<?=mostraChar($row['titulo_serv'])?>" /><br />
	</div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2">Texto:</label>
    <div class="col-sm-10">
    <textarea class="form-control" name="texto" id="texto"><?=mostraChar($row['texto_serv'])?></textarea><br />
	</div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="arquivo">Foto Principal:</label>
    <div class="col-sm-10">
    <input type="file" name="arquivo" id="arquivo" /><br />
	</div>
</div>
<div class="form-group">
	<button type="submit" class="btn">SALVAR <i class="fa fa-check" aria-hidden="true"></i></button>
    <a href="index.php?p=servicos" class="btn btn-gray pull-right">Voltar <i class="fa fa-chevron-left" aria-hidden="true"></i></a>
</div>
</form>
</section>
<script type="text/javascript">
	CKEDITOR.replace( 'texto', { toolbar : 'Personalizada', uiColor : '#F5F5F5', height: '250px', });
</script>
<section>
<h2>Insira Fotos Adicionais</h2>
<p>Selecione a foto em seu computador e pressione "CADASTRAR" para adicionar.</p>
<form action="action_servicos.php?do=CadastraServ_Foto&amp;ref=<?=$row['id_serv']?>" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label class="control-label col-sm-2" for="arquivo">Foto:</label>
    <div class="col-sm-10">
    <input type="file" name="arquivo" id="arquivo" /><br />
	</div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="legenda">Legenda:</label>
    <div class="col-sm-10">
    <input name="legenda" type="text" class="form-control grande" id="legenda" />
	</div>
</div>
<div class="form-group">
	<button type="submit" class="btn">CADASTRAR <i class="fa fa-check" aria-hidden="true"></i></button>
</div>
</form>
</section>
<?
$query_Fotos = mysql_query("SELECT * FROM site_tb_servicos_fotos WHERE ref = $id_serv ORDER BY ord_foto ASC, id_foto ASC");
if (mysql_num_rows($query_Fotos)) { ?>

<script>
$(function() {
	$( "#sortable" ).sortable({
		cursor: "move",
		placeholder: "galeria_fotos-item",
		update: function( event, ui ) {
			var sortedIDs = $( "#sortable" ).sortable( "toArray" );
			$.post("./action_servicos.php?do=OrderServ_Foto", { ordem: sortedIDs});
		}
	});
});
</script>
<section>
<ul id="sortable" class="galeria_fotos">
	<? $cont=1; while ($rowFotos = mysql_fetch_array($query_Fotos)){ ?>
    <li class="galeria_fotos-item" id="<?=$rowFotos['id_foto']?>">
    	<img src="../uploads/servicos/thumb_<?=$rowFotos['url_foto']?>" alt="<?=$rowFotos['legenda_foto']?>" style="border:1px solid #666666; padding:5px;" />
        <p align="center"><a onclick="return Confirma('Deseja excluir essa foto?')"  class="excluir" href="action_servicos.php?do=ExcluiServ_Foto&amp;id_foto=<?=$rowFotos['id_foto']?>&amp;ref=<?=$row['id_serv']?>"><i class="fa fa-times btn_excluir" aria-hidden="true"></i></a></p>
    </li>
    <? $cont++;} ?>
</ul>	
</section>
<?php }?>
