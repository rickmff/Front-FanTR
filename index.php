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
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="pt-br" itemscope="" itemtype="http://schema.org/WebPage"> <!--<![endif]-->
<head>
    <? include('includes/metas.php');?>
    <? include('includes/css.php');?>
</head>

<body>

<? include('includes/header.php');?>
<? include('includes/slider.php');?>
<? include('includes/whatsapp-window.php');?>

<section class="produtos-fantr page-home-prod">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="produtos-detalhe" class="hvr-wobble-vertical">
                    <img src="assets/images/prod-img.png" alt="Título do Produto">
                    <div class="product-name">
                        <h3>Refrigeração</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="produtos-detalhe" class="hvr-wobble-vertical">
                    <img src="assets/images/prod-img.png" alt="Título do Produto">
                    <div class="product-name">
                        <h3>Mineração / Túneis</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="produtos-detalhe" class="hvr-wobble-vertical">
                    <img src="assets/images/prod-img.png" alt="Título do Produto">
                    <div class="product-name">
                        <h3>Projetos especiais</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-12 text-center">
                <div class="link-area">
                    <a href="produtos" class="hvr-wobble-vertical">Ver todos os produtos</a>
                </div>
            </div>
        </div>
    </div>
</section>
<? include('includes/filtro-produto.php');?>
<section class="case-publicacoes">
    <div class="container">
        <div class="case-fantr">
            <div class="row">
                <? for ($i=0; $i< 3; $i++){ ?>
                <div class="col-md-4">
                    <a href="cases-detalhe" class="hvr-wobble-vertical">
                        <img src="assets/images/case-img.png" alt="Título do Case">
                        <div class="case-box">
                            <h3>Título do case</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                                lacus vel facilisis.
                            </p>
                            <h4>Continuar lendo</h4>
                        </div>
                    </a>
                </div>
                <? } ?>
                <div class="col-md-12 text-center">
                    <div class="link-area">
                        <a href="cases" class="hvr-wobble-vertical">Conheça todos os nossos cases</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ultimas-publicacoes">
            <div class="row">
                <div class="col-md-12">
                    <img src="assets/images/hr-image.png" alt="Fantr">
                </div>
                <div class="col-md-3">
                    <h2>Confira<br>nossas últimas publicações</h2>

                    <div class="link-area hidden-mobile">
                        <a href="noticias" class="hvr-wobble-vertical">Ver todas</a>
                    </div>
                </div>
                <? for ($i=0; $i< 3; $i++){ ?>
                <div class="col-md-3">
                    <div class="pub-text">
                        <a href="noticias-detalhe" class="hvr-wobble-vertical">
                            <time>10/10/19</time>
                            <h3>Título lorem ipsum dolor sit amet</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                            </p>
                            <h4>Continuar lendo</h4>
                        </a>
                    </div>
                </div>
                <? } ?>
                <div class="col-md-12 link-area text-center show-mobile">
                    <a href="noticias" class="hvr-wobble-vertical">Ver todas</a>
                </div>
            </div>
        </div>
    </div>
</section>

<? include('includes/newsletter.php');?>

<? include('includes/footer.php');?>
<? include('includes/js.php');?>
<? include('includes/analytics.php');?>

</body>
</html>