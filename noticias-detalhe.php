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

<section class="noticias-detalhe">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Serviços Fantr</h1>
                <p class="breadcrumb-site"><a href="./">Home</a> / <a href="noticia">Notícias</a> / Titulo da notícia
                </p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="container">
                <p>
                    <img class="float-right ml-3 mb-3" src="https://via.placeholder.com/500x400"
                         alt="Imagem da noticia FanTR">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra
                    nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.
                    Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec
                    dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna.
                    Aenean velit odio, elementum in tempus ut, vehicula eu diam. Pellentesque rhoncus aliquam mattis. Ut
                    vulputate eros sed felis sodales nec vulputate justo hendrerit.
                    Vivamus varius pretium ligula, a aliquam odio euismod sit amet. Quisque laoreet sem sit amet orci
                    ullamcorper at ultricies metus viverra.
                    Pellentesque arcu mauris, malesuada quis ornare accumsan, blandit sed diam.
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra
                    nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.
                    Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec
                    dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna.
                    Aenean velit odio, elementum in tempus ut, vehicula eu diam. Pellentesque rhoncus aliquam mattis. Ut
                    vulputate eros sed felis sodales nec vulputate justo hendrerit.
                    Vivamus varius pretium ligula, a aliquam odio euismod sit amet. Quisque laoreet sem sit amet orci
                    ullamcorper at ultricies metus viverra.
                    Pellentesque arcu mauris, malesuada quis ornare accumsan, blandit sed diam.
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra
                    nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.
                    Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec
                    dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna.
                    Aenean velit odio, elementum in tempus ut, vehicula eu diam. Pellentesque rhoncus aliquam mattis. Ut
                    vulputate eros sed felis sodales nec vulputate justo hendrerit.
                    Vivamus varius pretium ligula, a aliquam odio euismod sit amet. Quisque laoreet sem sit amet orci
                    ullamcorper at ultricies metus viverra.
                    Pellentesque arcu mauris, malesuada quis ornare accumsan, blandit sed diam.
                </p>
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