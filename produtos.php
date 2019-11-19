<?php
session_start();
include 'cms/config/config.php';
require 'cms/classes/class.conndatabase.php';
require 'cms/classes/functions.php';
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br" itemscope itemtype="http://schema.org/WebPage"> <!--<![endif]-->
<head>
    <? include('includes/metas.php');?>
    <? include('includes/css.php');?>
</head>

<body>

<? include('includes/header-interna.php');?>
<? include('includes/whatsapp-window.php');?>

<section class="produtos-fantr produtos-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Produtos Fantr</h1>
                <p class="breadcrumb-site"><a href="./">Home</a> / Produtos</p>
            </div>
        </div>
    </div>
    <? include('includes/filtro-produto.php');?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="produtos-categoria" class="hvr-wobble-vertical">
                    <img src="assets/images/prod-img.png" alt="Título do Produto">
                    <div class="product-name">
                        <h3>Refrigeração</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="produtos-categoria" class="hvr-wobble-vertical">
                    <img src="assets/images/prod-img.png" alt="Título do Produto">
                    <div class="product-name">
                        <h3>Mineração / Túneis</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="produtos-categoria" class="hvr-wobble-vertical">
                    <img src="assets/images/prod-img.png" alt="Título do Produto">
                    <div class="product-name">
                        <h3>Projetos especiais</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<? include('includes/servicos-fantr.php');?>

<? include('includes/footer.php');?>
<? include('includes/js.php');?>
<? include('includes/analytics.php');?>

</body>
</html>