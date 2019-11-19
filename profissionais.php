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

<section class="profissionais">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Profissionais FanTR</h1>
                <p class="breadcrumb-site"><a href="./">Home</a> / Profissionais</p>
            </div>
        </div>
        <div class="row">
            <? for ($i = 0;
                    $i < 8;
                    $i++) { ?>
                <div class="col-md-3 mb-5 text-center">
                    <a href="profissionais" data-toggle="modal" data-target="#exampleModalLong">
                        <img class="img-fluid mb-3 p-auto" src="assets/images/profissional.jpg"
                             alt="Foto do profissional da FanTR">
                    </a>
                    <h2>
                        Nome do profissional
                    </h2>
                    <h3>
                        Função Lorem Ipsum.
                    </h3>
                </div>
            <? } ?>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="container text-center">
                                <img src="assets/images/avatar.png" alt="">
                                <h2 class="modal-title" id="exampleModalLongTitle">
                                    Nome do funcionario
                                </h2>
                                <h3>Função do funcionario</h3>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit
                                    in
                                    <br>
                                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit
                                    anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer text-center">
                            <a class="m-auto" href="javascript:"><i class="fab fa-2x fa-linkedin mr-2"></i>
                                Linkedin/Lorem/Ipsum</a>
                        </div>
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
        </div>
    </div>

</section>

<? include('includes/newsletter.php'); ?>
<? include('includes/footer.php'); ?>
<? include('includes/js.php'); ?>
<? include('includes/analytics.php'); ?>

</body>
</html>