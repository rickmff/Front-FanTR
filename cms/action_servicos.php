<?php
require 'auth.inc.php';
require_once 'classes/wideimage/WideImage.php';
$stamp = time();
$_SESSION['POST'] = $_POST;

for ($i=0;$i<count($_POST);$i++) {
	$var = key($_POST);
	$$var = trim($_POST[key($_POST)]);
	next($_POST);
}

for ($i=0;$i<count($_GET);$i++) {
	$var = key($_GET);
	$$var = trim($_GET[key($_GET)]);
	next($_GET);
}


switch ($do) {
	// ===============================================================
	case 'CadastraServ':
		ValidaVazio($titulo,'Preencha o campo "Título".');
		ValidaVazio($texto,'Preencha o campo "Texto".');
		$titulo = gravaChar($titulo);
		if ($_FILES['arquivo']['name'] != '') {
			$file = $_FILES['arquivo']['tmp_name'];
			$ext = '.'.end(explode('.', $_FILES['arquivo']['name']));
			ValidaImagem($_FILES['arquivo']);
			$caminho = '../uploads/servicos/';
		}
		if (count($_SESSION['Erros']) == 0) {
			$fotoNome = '';
			if ($_FILES['arquivo']['name'] != '') {
				$file = compress_image($file, $file, 80);
				$img = WideImage::loadFromFile($file);
				//---THUMB---
				$width = 300; $height = 300;
				$thumb = $img;
				$thumb = $thumb->resize($width, $height, 'outside')->crop('50% - '.floor($width/2), '50% - '.floor($height/2), $width, $height);
				$thumb->saveToFile($caminho.'thumb_'.$stamp.$ext);
				//----THUMB---		
				
				$info_imag = getimagesize($file);
				if(($info_imag[0]>'800')|| ($info_imag[1]>'800')){
					$img = $img->resize(800, 800, 'outside');
				}
				$img->saveToFile($caminho.$stamp.$ext);
				$fotoNome = $stamp.$ext;
			}

			mysql_query("INSERT INTO site_tb_servicos VALUES (null,'".$titulo."','".$texto."','".$fotoNome."','0')");
			Info('Serviço cadastrado com sucesso.');
			//--------------------
			$temp_query = mysql_query("SELECT * FROM site_tb_servicos ORDER BY id_serv DESC LIMIT 1");
			$temp = mysql_fetch_array($temp_query);
			$id_serv = $temp['id_serv'];
			//---------------------
			Go($config_prCliente.'servico&id_serv='.$id_serv);
		} else {
			Go($config_prCliente.'servico&id_serv='.$id_serv);
		}
	break;
	case 'AlteraServ':
		ValidaID($id_serv,'id_serv','site_tb_servicos','');
		ValidaVazio($titulo,'Preencha o campo "Título".');
		ValidaVazio($texto,'Preencha o campo "Texto".');
		$titulo = gravaChar($titulo);
		$caminho = '../uploads/servicos/';
		if ($_FILES['arquivo']['name'] != '') {
			$file = $_FILES['arquivo']['tmp_name'];
			$ext = '.'.end(explode('.', $_FILES['arquivo']['name']));
			ValidaImagem($_FILES['arquivo']);
			
		}
		if (count($_SESSION['Erros']) == 0) {
			
			$row = mysql_fetch_array(mysql_query("SELECT * FROM site_tb_servicos WHERE id_serv = $id_serv"));
			$fotoNome = $row['thumb_serv'];
			if ($_FILES['arquivo']['name'] != '') {
				
				unlink($caminho.$fotoNome);
				unlink($caminho.'thumb_'.$fotoNome);
				$file = compress_image($file, $file, 80);
				$img = WideImage::loadFromFile($file);
				//---THUMB---
				$width = 300; $height = 300;
				$thumb = $img;
				$thumb = $thumb->resize($width, $height, 'outside')->crop('50% - '.floor($width/2), '50% - '.floor($height/2), $width, $height);
				$thumb->saveToFile($caminho.'thumb_'.$stamp.$ext);
				//----THUMB---
				$info_imag = getimagesize($file);
				if(($info_imag[0]>'800')|| ($info_imag[1]>'800')){
					$img = $img->resize(800, 800, 'outside');
				}	
				$img->saveToFile($caminho.$stamp.$ext);
				$fotoNome = $stamp.$ext;
				
			}
			
			mysql_query("UPDATE site_tb_servicos SET titulo_serv='".$titulo."', texto_serv='".$texto."', thumb_serv='".$fotoNome."' WHERE id_serv = $id_serv");
			Info('Serviço alterado com sucesso.');
			Go($config_prCliente.'servico&id_serv='.$id_serv);
		} else {
			Go($config_prCliente.'servico&id_serv='.$id_serv);
		}
	break;
	case 'ExcluiServ':
		ValidaID($id_serv,'id_serv','site_tb_servicos','');
		if (count($_SESSION['Erros']) == 0) {
			$res = mysql_query("SELECT * FROM site_tb_servicos WHERE id_serv = $id_serv");
			if(mysql_num_rows($res)){
				while($row = mysql_fetch_array($res)) {
					unlink('../uploads/servicos/'.$row['thumb_serv']);
					unlink('../uploads/servicos/thumb_'.$row['thumb_serv']);
				}
			}
			$res = mysql_query("SELECT * FROM site_tb_servicos_fotos WHERE ref = $id_serv");
			if(mysql_num_rows($res)){
				while($row = mysql_fetch_array($res)) {
					unlink('../uploads/servicos/'.$row['url_foto']);
					unlink('../uploads/servicos/thumb_'.$row['url_foto']);
				}
			}
			
			mysql_query("DELETE FROM site_tb_servicos_fotos WHERE ref = $id_serv");
			mysql_query("DELETE FROM site_tb_servicos WHERE id_serv = $id_serv");
			Info('Serviço excluído com sucesso.');
			Go($config_prCliente.'servicos');
		} else {
			Go($config_prCliente.'servicos');
		}
	break;
	
	case 'ApagaFotoServ':
		ValidaID($id_serv,'id_serv','site_tb_servicos','');
		if (count($_SESSION['Erros']) == 0) {
			$res = mysql_query("SELECT * FROM site_tb_servicos WHERE id_serv = $id_serv");
			if(mysql_num_rows($res)){
				while($row = mysql_fetch_array($res)) {
					unlink('../uploads/servicos/'.$row['thumb_serv']);
					unlink('../uploads/servicos/thumb_'.$row['thumb_serv']);
				}
			}
			
			mysql_query("UPDATE site_tb_servicos SET thumb_serv='' WHERE id_serv = $id_serv");
			Info('Foto principal apagada com sucesso.');
			Go($config_prCliente.'servico&id_serv='.$id_serv);
		} else {
			Go($config_prCliente.'servico&id_serv='.$id_serv);
		}
	break;
	// ===============================================================
	case 'CadastraServ_Foto':
		$legenda = gravaChar($legenda);
		
		$file = $_FILES['arquivo']['tmp_name'];
		$ext = '.'.end(explode('.', $_FILES['arquivo']['name']));
			ValidaImagem($_FILES['arquivo']);
		$caminho = '../uploads/servicos/';
		
		if (count($_SESSION['Erros']) == 0) {
				$fotoNome = '';
				$file = compress_image($file, $file, 80);
				$img = WideImage::loadFromFile($file);
				//---THUMB---
				$width = 150; $height = 150;
				$thumb = $img;
				$thumb = $thumb->resize($width, $height, 'outside')->crop('50% - '.floor($width/2), '50% - '.floor($height/2), $width, $height);
					$thumb->saveToFile($caminho.'thumb_'.$stamp.$ext);
					//----THUMB---
				$info_imag = getimagesize($file);
				if(($info_imag[0]>'1200')|| ($info_imag[1]>'800')){
					$img = $img->resize(800, 800, 'outside');
				}
				$img->saveToFile($caminho.$stamp.$ext);
				$fotoNome = $stamp.$ext;

				if (count($_SESSION['Erros']) == 0) {
					mysql_query("INSERT INTO site_tb_servicos_fotos VALUES (null,'".$ref."','".$legenda."','".$fotoNome."','9999')");
					Info('Foto cadastrada com sucesso.');
					Go($config_prCliente.'servico&id_serv='.$ref);
				} else {
					Go($config_prCliente.'servico&id_serv='.$ref);
				}
		} else {
			Go($config_prCliente.'servico&id_serv='.$ref);
		}
	break;
	case 'ExcluiServ_Foto':
		ValidaID($id_foto,'id_foto','site_tb_servicos_fotos','');
		if (count($_SESSION['Erros']) == 0) {
			$row = mysql_fetch_array(mysql_query("SELECT * FROM site_tb_servicos_fotos WHERE id_foto = $id_foto"));
			unlink('../uploads/servicos/'.$row['url_foto']);
			unlink('../uploads/servicos/thumb_'.$row['url_foto']);
			mysql_query("DELETE FROM site_tb_servicos_fotos WHERE id_foto = $id_foto");
			Info('Foto excluída com sucesso.');
			Go($config_prCliente.'servico&id_serv='.$ref);
		} else {
			Go($config_prCliente.'servico&id_serv='.$ref);
		}
	break;
	// ===============================================================
	case 'OrderServ_Foto':
	if($_POST['ordem']){
		$ordem = $_POST['ordem'];
		for($k=0; $k<count($ordem); $k++){
			$new_ord = $k+1;
			mysql_query("UPDATE site_tb_servicos_fotos SET ord_foto='".$new_ord."' WHERE id_foto = '".$ordem[$k]."'");
		}
	}
	break;
	// ===============================================================
	}

?>