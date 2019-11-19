<?
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

<section class="servicos-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Serviços Fantr</h1>
                <p class="breadcrumb-site"><a href="./">Home</a> / <a href="servicos">Serviços</a> / Titulo do serviço
                </p>
            </div>
        </div>
        <h2>Chamada para <br> o serviço</h2>
        <div class="row">

            <div class="col-md-6">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                    ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
            <div class="col-md-6">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                    ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 my-5">
                <div class="sliders-prod">
                    <? for ($i = 0;
                            $i < 3;
                            $i++) { ?>
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
                <div class="controls my-3">
                    <a class="prev"><i class="fas fa-arrow-left"></i></a>
                    <a class="next float-right"><i class="fas fa-arrow-right"></i></a>
                </div>
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