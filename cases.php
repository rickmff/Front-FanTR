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

<section class="cases">
    <div class="case-principal" style="background-image: url(assets/images/bg-cases.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Cases da FanTR</h1>
                    <p class="breadcrumb-site"><a href="./">Home</a> / Cases</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="container">
                        <h2>Chamada para o case</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu
                            pharetra
                            nec, mattis ac neque.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu
                            pharetra
                            nec, mattis ac neque.
                        </p>
                    </div>
                </div>
                <div class="card-padding pt-1">
                    <div class="container">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu
                            pharetra
                            nec, mattis ac neque.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu
                            pharetra
                            nec, mattis ac neque.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu
                            pharetra
                            nec, mattis ac neque.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu
                            pharetra
                            nec, mattis ac neque.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu
                            pharetra
                            <br><br>
                            nec, mattis ac neque.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu
                            pharetra
                            nec, mattis ac neque.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu
                            pharetra
                            nec, mattis ac neque.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu
                            pharetra
                            nec, mattis ac neque.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu
                            pharetra
                            nec, mattis ac neque.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu
                            pharetra
                            <br><br>
                            nec, mattis ac neque.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu
                            pharetra
                            nec, mattis ac neque.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu
                            pharetra
                            nec, mattis ac neque.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu
                            pharetra
                            nec, mattis ac neque.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu
                            pharetra
                            nec, mattis ac neque.

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 my-3">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <iframe width="660" height="415" src="https://www.youtube.com/embed/igxXpNn4ikU"
                                frameborder="0"
                                allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
                <div class="container cases-img">
                    <div class="d-flex my-3">
                        <? for ($i = 0;
                                $i < 4;
                                $i++) { ?>
                            <div class="flex-fill px-1">
                                <img src="assets/images/case-img.png" alt="Imagem institucional">
                            </div>
                        <? } ?>
                    </div>
                    <div class="d-flex mb-5">
                        <? for ($i = 0;
                                $i < 4;
                                $i++) { ?>
                            <div class="flex-fill px-1">
                                <img src="assets/images/case-img.png" alt="Imagem institucional">
                            </div>
                        <? } ?>
                    </div>
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