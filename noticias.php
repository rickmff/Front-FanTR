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

<section class="noticias">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Noticias FanTR</h1>
                <p class="breadcrumb-site"><a href="./">Home</a> / Notícias</p>
            </div>
            <div class="w-100 mb-4">
                <select class="btn float-right">
                    <? for ($i = 1; $i < 5; $i++) { ?>
                        <option value="javascript:">Categoria <? echo($i) ?></option>
                    <? } ?>
                </select>
            </div>
        </div>

            <div class="d-flex justify-content-center mb-4">
                <div class="row">
                <? for ($i = 0; $i < 3; $i++) { ?>
                    <div class="col-12 col-md-4 my-4">
                        <div class="pub-text">
                            <a href="noticias-detalhe" class="hvr-wobble-vertical">
                                <time>10/10/19</time>
                                <h3>Título lorem ipsum dolor sit amet</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut
                                    labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                </p>
                                <h4>Continuar lendo</h4>
                            </a>
                        </div>
                    </div>
                <? } ?>
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