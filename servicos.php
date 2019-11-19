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

<section class="servicos-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Serviços Fantr</h1>
                <p class="breadcrumb-site"><a href="./">Home</a> / Serviços</p>
            </div>
            <div class="servicos-fantr col-md-12">
                <div class="row">
                    <? for ($i=0; $i< 6; $i++){ ?>
                        <div class="col-md-4">
                            <a href="servicos-detalhe" class="hvr-wobble-vertical">
                                <img src="assets/images/case-img.png" alt="Título do Case">
                                <div class="serv-box text-center">
                                    <h3>Título do serviço</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
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
<? include('includes/newsletter.php');?>

<? include('includes/footer.php');?>
<? include('includes/js.php');?>
<? include('includes/analytics.php');?>

</body>
</html>