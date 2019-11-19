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

<section class="diferenciais">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Diferenciais Fantr</h1>
                <p class="breadcrumb-site"><a href="./">Home</a> / Diferenciais</p>
            </div>
        </div>
    </div>

    <div class="w-100 globo">
        <img class="img-fluid hidden-mobile" src="assets/images/image-globo.png"
             alt="Imagem do globo de atuação da FanTR no mundo">
    </div>

    <div class="bg-blue py-5 mb-5 hidden-mobile">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3 py-4">
                    <p>
                        Alemanha <br> <br>
                        Arábia Saudita <br> <br>
                        Argélia <br> <br>
                        Bélgica <br> <br>
                        Brasil <br> <br>
                        Bulgária <br> <br>
                        Canadá <br> <br>
                        Cazaquistão
                    </p>
                </div>
                <div class="col-6 col-md-3 py-4">
                    <p>
                        Cazaquistão <br> <br>
                        China <br> <br>
                        Colômbia <br> <br>
                        Espanha <br> <br>
                        EUA <br> <br>
                        Finlândia <br> <br>
                        França <br> <br>
                        Holanda
                    </p>
                </div>
                <div class="col-6 col-md-3 py-4">
                    <p>
                        Indonésia <br> <br>
                        Japão <br> <br>
                        Jordânia <br> <br>
                        México <br> <br>
                        México <br> <br>
                        Nigéria <br> <br>
                        Nova Zelândia <br> <br>
                        Panamá
                    </p>
                </div>
                <div class="col-6 col-md-3 py-4">
                    <p>
                        Peru <br> <br>
                        Polônia <br> <br>
                        Reino Unido <br> <br>
                        Rússia <br> <br>
                        Tailândia <br> <br>
                        Turquia <br> <br>
                        Vietnã
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container topicos-minas">
        <h4>Minas subterrâneas com nossos equipamentos:</h4>
        <br>
        <div class="row">
            <div class="col-md-6 my-3">
                <img src="assets/images/institucional2.png" class="img-fluid" alt="Imagem diferenciais da fanTR">
            </div>
            <div class="col-md-6 diferenciais-icon my-3">
                <img src="assets/images/icone-diferenciais1.png" class="float-left mr-3"
                     alt="Icone diferenciais 1 da fanTR">
                <p>
                    Principal empresa do setor de ventilação subterrânea em mineração no Brasil.
                    <br>
                    <br class="hidden-mobile">
                </p>
                <img src="assets/images/icone-diferenciais2.png" class="float-left mr-3"
                     alt="Icone diferenciais 2 da fanTR">
                <p>
                    <br>
                    60% do mercado.
                    <br>
                    <br>
                </p>
                <img src="assets/images/icone-diferenciais3.png" class="float-left mr-3"
                     alt="Icone diferenciais 3 da fanTR">
                <p>
                    2ª melhor empresa no mundo em relevância tecnológica e confiabilidade segundo os
                    maiores
                    OEMs no
                    mercado de ventilação para refrigeração.
                </p>
            </div>
        </div>
    </div>

    <section class="bg-gray depoimentos">
        <div class="container">
            <h2>Depoimentos</h2>
            <div class="sliders py-5">
                <? for ($i = 0;
                        $i < 3;
                        $i++) { ?>
                    <div>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <img class="img-fluid float-right" src="assets/images/avatar.png"
                                     alt="Foto do profissional da FanTR">
                            </div>
                            <div class="col-12 col-md-9 pb-5">
                                <h3>Nome da pessoa</h3>
                                <h4>Função Lorem Ipsum</h4>
                                <br>
                                <p>
                                    As tendências também mostram que os fans foram projetados com precisão nos
                                    principais
                                    pontos
                                    de trabalho ... impressionantemente baixos ... principalmente no modelo STEP...
                                </p>
                            </div>
                        </div>
                    </div>
                <? } ?>
            </div>
        </div>
    </section>

    <div class="container dna">
        <h2>DNA FANTR</h2>
        <div class="row">
            <div class="col-xs-12 col-md-4 text-center center my-5">
                <div class="bg-gray">
                    <img src="assets/images/icone-diferenciais4.png" alt="Icone FanTR diferenciais">
                </div>
                <p><br>
                    Suporte ao cliente <br>
                    A gente não te abandona
                </p>
            </div>
            <div class="col-xs-12 col-md-4 text-center center my-5">
                <div class="bg-gray">
                    <img src="assets/images/icone-diferenciais4.png" alt="Icone FanTR diferenciais">
                </div>
                <p><br>
                    Profundo conhecimento <br>
                    em aerodinâmica
                </p>
            </div>
            <div class="col-xs-12 col-md-4 text-center center my-5">
                <div class="bg-gray">
                    <img src="assets/images/icone-diferenciais4.png" alt="Icone FanTR diferenciais">
                </div>
                <p><br>
                    Domínio do processo de <br>
                    fabricação de material composto
                </p>
            </div>
            <div class="col-xs-12 col-md-4 text-center center my-5">
                <div class="bg-gray">
                    <img src="assets/images/icone-diferenciais4.png" alt="Icone FanTR diferenciais">
                </div>
                <p><br>
                    Domínio da tecnologia <br>
                    de vibração e ruído
                </p>
            </div>
            <div class="col-xs-12 col-md-8 text-center center my-5">
                <div class="bg-gray">
                    <img src="assets/images/icone-diferenciais4.png" alt="Icone FanTR diferenciais">
                </div>
                <p><br>
                    Com mais de 30 anos de experiência, temos os profissionais <br>
                    que são referências em suas áreas de atuação.
                </p>
            </div>
        </div>
        <h2 class="mb-3">Nossas <br> Ferramentas</h2>

        <div class="row">
            <div class="col-md-6 mt-3">
                <img class="img-fluid pb-4" src="https://via.placeholder.com/600x400"
                     alt="Diferença da fanTR no mundo">
                <h3>Estação de teste</h3>
                <P><br>
                    Para todas as nossas linhas de produtos, capazes de certificara eficiência de nossos
                    equipamentos,
                    validação estrutural e fadigae níveis de ruído, seguindo as normas internacionais.
                </P>
            </div>
            <div class="col-md-6 mt-3">
                <img class="img-fluid pb-4" src="https://via.placeholder.com/600x400"
                     alt="Diferença da fanTR no mundo">
                <h3>Programas de simulação </h3>
                <P><br>
                    Disponíveis no mercado - ANSYS e CFD – para projeto de ventiladores.
                </P>
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