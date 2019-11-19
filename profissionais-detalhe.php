<?
session_start();
include 'cms/config/config.php';
require 'cms/classes/class.conndatabase.php';
require 'cms/classes/functions.php';
?>
<!doctype html>
<!--[if lt IE 7]>
<? /* html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
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

<section class="profissionais-detalhe">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Profissionais FanTR</h1>
                <p class="breadcrumb-site"><a href="./">Home</a> / <a href="profissionais">Profissionais</a> /
                    Profissional Lorem Ipsum</p>
            </div>
        </div>
        <div class="row my-5 pt-5">
            <div class="col-md-4">
                <img class="img-fluid" src="https://via.placeholder.com/300x300" alt="Foto do profissional da FanTR">
                <a href="profissionais" class="btn mt-3">Voltar</a>
            </div>
            <div class="col-md-7">
                <h2>Profissional Lorem Ipsum</h2>
                <p>Função Lorem Ipsum</p>
                <div class="mt-3">
                    <h3>Resumo / mini-Currículo</h3>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra
                        nec, mattis ac
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra
                        nec, mattis ac neque.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra
                        nec, mattis ac neque.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra
                        nec, mattis ac neque.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra
                        nec, mattis ac neque.
                    </p>
                </div>
                <div class="mt-3">
                    <a href="javascript:"><i class="fab fa-2x fa-linkedin mr-2"></i> Linkedin/Lorem/Ipsum</a>
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
</html */?>