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

<section class="produto-subcategoria">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Ventiladores Axiais</h1>
                <p class="breadcrumb-site"><a href="./">Home</a> / <a href="produtos">Produtos</a> / <a href="produtos-categoria.php">Cooling</a> / Ventiladores Axiais</p>
            </div>
        </div>
    </div>

    <section class="mais-produtos produtos-fantr">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Chamada para <br> a subcategoria</h2>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <a href="produtos-detalhe" class="hvr-wobble-vertical float-right pt-5">
                        <img src="assets/images/prod01.png" alt="Título do Produto">
                        <div class="product-name">
                            <h3>Composto</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <a href="produtos-detalhe" class="hvr-wobble-vertical pt-5">
                        <img src="assets/images/prod01.png" alt="Título do Produto">
                        <div class="product-name">
                            <h3>Aluminio</h3>
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