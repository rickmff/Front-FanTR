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

<section class="produto-detalhe">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Ventiladores Axiais Composto</h1>
                <p class="breadcrumb-site"><a href="./">Home</a> / <a href="produtos">Produtos</a> / <a
                            href="produtos-categoria.php">Cooling</a> / <a href="produtos-subcategoria.php">Ventiladores
                        Axiais</a> / Composto </p>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <h2>Chamada do<br>conteúdo</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo
                        </p>
                        <div class="input-group">
                            <div class="input-group-append">
                                <a href="javascript:">
                                    <div class="icon-bg">
                                        <img src="assets/images/icon-download.png" alt="Download em PDF">
                                    </div>
                                </a>
                            </div>
                            <div class="link-area">
                                <a href="javascript:">Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 offset-md-1">
                        <div class="sliders-prod">
                            <? for ($i = 0; $i < 3; $i++) { ?>
                                <a href="javascript:">
                                    <img src="assets/images/prod01.png" alt="Nome do Produto">
                                </a>
                                <a href="javascript:">
                                    <img src="assets/images/prod02.png" alt="Nome do Produto">
                                </a>
                                <a href="javascript:">
                                    <img src="assets/images/prod03.png" alt="Nome do Produto">
                                </a>
                            <? } ?>
                        </div>
                        <div class="controls">
                            <a class="prev"><i class="fas fa-arrow-left"></i></a>
                            <a class="next"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ficha-tecnica-prod">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ficha mb-4 d-flex ">
                <h2 class="align-self-end">SXT Cooling Fan</h2>
                <img class="align-content-end ml-auto" src="assets/images/logo-interna.png" alt="Ficha técnica - Logo do produto">
            </div>
            <? for($i=0; $i<8; $i++) { ?>
            <div class="col-6 col-md-3 my-4 no-padding">
                <img class="no-padding" src="assets/images/img-desc-prod.png" alt="Ficha técnica - Nome do Produto">
            </div>
            <? } ?>
        </div>
        <div class="col-md-12 mt-5">
            <div class="text-prod">
                <div class="row">
                    <div class="col-md-5">
                        <h2>TÍTULO FICHA TÉCNICA</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna aliqua.
                        </p>
                        <p>
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis
                            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.
                        </p>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <h3>Subtítulo</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris
                            nisi ut aliquip ex ea commodo
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h3>Subtítulo</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris
                            nisi ut aliquip ex ea commodo
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mais-produtos produtos-fantr">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Outros produtos para sistemas de resfriamento:</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="produtos-detalhe" class="hvr-wobble-vertical">
                    <img src="assets/images/prod01.png" alt="Título do Produto">
                    <div class="product-name">
                        <h3>Air cooling</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="produtos-detalhe" class="hvr-wobble-vertical">
                    <img src="assets/images/prod01.png" alt="Título do Produto">
                    <div class="product-name">
                        <h3>Cooling tower</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="produtos-detalhe" class="hvr-wobble-vertical">
                    <img src="assets/images/prod01.png" alt="Título do Produto">
                    <div class="product-name">
                        <h3>Hybrid cooling tower</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<? include('includes/newsletter.php'); ?>

<? include('includes/footer.php'); ?>
<? include('includes/js.php'); ?>
<? include('includes/analytics.php'); ?>

</body>
</html>