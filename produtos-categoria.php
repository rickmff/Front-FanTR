<?php
session_start();
include 'cms/config/config.php';
require 'cms/classes/class.conndatabase.php';
require 'cms/classes/functions.php';
?>
<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="pt-br" itemscope itemtype="http://schema.org/WebPage"> <!--<![endif]-->
<head>
    <? include('includes/metas.php'); ?>
    <? include('includes/css.php'); ?>
</head>

<body>

<? include('includes/header-interna.php'); ?>
<? include('includes/whatsapp-window.php'); ?>

<? /*
if($_GET['slug']){
	$resCat = mysql_query("SELECT * FROM site_tb_categorias WHERE slug_cat = '".mysql_real_escape_string($_GET['slug'])."'");
	if(mysql_num_rows($resCat)){
		$rowCat = mysql_fetch_array($resCat);
	} else {
		Redir('produtos');
	}
} else {
	Redir('produtos');
}

//====== CONFIGURA PAGINACAO =====//
		$nome_da_pagina = 'produtos/'.$rowCat['slug_cat'].'/'; // Nome da página que listará resultado
		$itens_por_pagina = 24; //numero de registros por página
		$variavel_pag_url = 'pag'; //nome da variavel na url
		if((isset($_GET[$variavel_pag_url])) && (is_numeric($_GET[$variavel_pag_url]))){
			$pag = $_GET[$variavel_pag_url];
		} else { $pag = '1';}
				
		$tabela_sql = 'site_tb_produtos';
		$where_sql = " WHERE ref_cat = '".$rowCat['id_cat']."'";
		$orderby_sql = 'ORDER BY ord_prod ASC, nome_prod ASC'; 
		
		//=== IDENTIICA CLASSE CSS DA PAGINACAO ==///
		$class_page_ativo = 'num_pag_ativo'; //Colocar nome da classe(CSS) para o link da página atual
		$class_page = 'num_pag'; //Colocar nome da classe(CSS) para o link das paginas
//====== FIM DA CONFIGURAÇÃO PAGINACAO =====//

		$inicio = 0;
		if ($pag!=''){
		  $inicio = ($pag - 1) * $itens_por_pagina;
		}

		/* NUMERO DE REGISTROS DA TABELA */

/*

$busca_total = mysql_query("SELECT COUNT(*) as total FROM ".$tabela_sql.' '.$where_sql.' '.$orderby_sql);
$total = mysql_fetch_array($busca_total); $total = $total['total'];

$prox = $pag + 1;
$ant = $pag - 1;
$ultima_pag = ceil($total / $itens_por_pagina);
$penultima = $ultima_pag - 1;
$adjacentes = 2;

$resResult = mysql_query("SELECT * FROM ".$tabela_sql.' '.$where_sql.' '.$orderby_sql." LIMIT $inicio, $itens_por_pagina");
$ativaProxAnt = true;

/* ativa o botão ANTERIOR */

/*

if ($pag>1 && $ativaProxAnt==true){
    $paginacao = '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$ant.'" >&laquo; Anterior</a>';
}

if ($ultima_pag <= 5){
    for ($i=1; $i< $ultima_pag+1; $i++){
        if ($i == $pag){
            $paginacao .= '<a class="'.$class_page_ativo.'" href="'.$nome_da_pagina.$variavel_pag_url.$i.'" >'.$i.'</a>';
        } else {
            $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$i.'" >'.$i.'</a>';
        }
    }
}

if ($ultima_pag > 5){
    if ($pag < 1 + (2 * $adjacentes)){
        for ($i=1; $i< 2 + (2 * $adjacentes); $i++){
            if ($i == $pag){
                $paginacao .= '<a class="'.$class_page_ativo.'" href="javascript:" >'.$i.'</a>';
            } else {
                $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$i.'" >'.$i.'</a>';
            }
        }
        $paginacao .= '...';
        $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$penultima.'" >'.$penultima.'</a>';
        $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$ultima_pag.'" >'.$ultima_pag.'</a>';
    } else if($pag > (2 * $adjacentes) && $pag < $ultima_pag - 3){
        $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.'1" >1</a>';
        $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.'2" >2</a> ... ';
        for ($i = $pag-$adjacentes; $i<= $pag + $adjacentes; $i++){
            if ($i == $pag){
                $paginacao .= '<a class="'.$class_page_ativo.'" href="javascript:" >'.$i.'</a>';
            } else {
                $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$i.'" >'.$i.'</a>';
            }
        }
        $paginacao .= '...';
        $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$penultima.'" >'.$penultima.'</a>';
        $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$ultima_pag.'" >'.$ultima_pag.'</a>';
    } else {
        $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.'1" >1</a>';
        $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.'2" >2</a> ... ';
        for ($i = $ultima_pag - (4 + (2 * $adjacentes)); $i <= $ultima_pag; $i++){
            if ($i == $pag){
                $paginacao .= '<a class="'.$class_page_ativo.'" href="javascript:" >'.$i.'</a>';
            } else {
                $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$i.'" >'.$i.'</a>';
            }
        }
    }
}

// ativa o botão PRÓXIMA
if ($prox <= $ultima_pag && $ultima_pag > 2  && $ativaProxAnt==true){
    $paginacao .= '<a class="'.$class_page.'" href="'.$nome_da_pagina.$variavel_pag_url.$prox.'">pr&oacute;xima &raquo;</a>';
}

if($penultima==0){$paginacao ='';}


*/ ?>

<section class="produto-categoria">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Cooling</h1>
                <p class="breadcrumb-site"><a href="./">Home</a> / <a href="produtos">Produtos</a> / Cooling</p>
            </div>
        </div>
    </div>

    <section class="mais-produtos produtos-fantr">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Chamada para <br> a categoria</h2>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
                <div class="col-md-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
                <div class="col-md-4">
                    <a href="produtos-subcategoria" class="hvr-wobble-vertical float-right pt-5">
                        <img src="assets/images/prod01.png" alt="Título do Produto">
                        <div class="product-name">
                            <h3>Ventiladores Axiais</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="produtos-subcategoria" class="hvr-wobble-vertical pt-5">
                        <img src="assets/images/prod01.png" alt="Título do Produto">
                        <div class="product-name">
                            <h3>Sistemas</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="produtos-subcategoria" class="hvr-wobble-vertical pt-5">
                        <img src="assets/images/prod01.png" alt="Título do Produto">
                        <div class="product-name">
                            <h3>Acessórios e peças</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <section class="servicos-page mt-5">
            <div class="container">
                <div class="row">
                    <div class="servicos-fantr col-md-12">
                        <div class="row">
                            <? for ($i = 0; $i < 3; $i++) { ?>
                                <div class="col-md-4">
                                    <a href="servicos-detalhe" class="hvr-wobble-vertical">
                                        <img src="assets/images/case-img.png" alt="Título do Case">
                                        <div class="serv-box text-center">
                                            <h3>Título do serviço</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                                                commodo viverra maecenas accumsan
                                                lacus vel facilisis.
                                            </p>
                                            <h4>Saiba mais</h4>
                                        </div>
                                    </a>
                                </div>
                            <? } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</section>

<? include('includes/newsletter.php'); ?>


<? include('includes/footer.php'); ?>
<? include('includes/js.php'); ?>
<? include('includes/analytics.php'); ?>

</body>
</html>