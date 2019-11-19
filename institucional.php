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

<section class="institucional">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Sobre a Fantr</h1>
                <p class="breadcrumb-site"><a href="./">Home</a> / Institucional</p>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <h2>Nossa história</h2>
                        <p>
                            Em 1989, foi criada a empresa Composite com foco na produção de peças em material composto
                            para o mercado de geração de energia eólica, indústria aeroespacial e sistemas de ventilação
                            e resfriamento. Criada por 4 brasileiros na cidade de São José dos Campos, berço do mercado
                            aeroespacial e aeronáutico nacional.
                        </p><br>
                        <p>
                            Em 1995, a Composite encerrou as suas operações e, como uma nova empresa, mudou-se para a
                            cidade de Sorocaba com o nome de Tecsis, com duas divisões: energia eólica e ventilação
                            industrial.
                        </p>
                    </div>
                    <div class="col-md-6 mt-3">
                        <img src="assets/images/institucional1.png" alt="Imagem institucional">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <p>
                                    <br>
                                    O segmento de Ventilação Industrial (DVI – Divisão de Ventilação Industrial) foi
                                    criado
                                    a
                                    partir da necessidade do mercado brasileiro de soluções de alta tecnologia em
                                    ventilação.
                                    Grandes companhias como Petrobrás, Grupo Votorantim, Vale do Rio Doce e Ferbasa
                                    passaram
                                    a
                                    não depender mais de soluções importadas e podiam contar com uma empresa brasileira
                                    com
                                    suporte local.
                                </p>
                            </div>
                            <div class="col-md-6 mt-3">
                                <p>
                                    <br>
                                    Em 2013, com o objetivo de se especializar ainda mais neste segmento, a DVI se
                                    separou
                                    da
                                    Tecsis, resultando no surgimento da FanTR, uma empresa independente com a proposta
                                    de
                                    continuar a desenvolver produtos de alta tecnologia em âmbito mundial. Foi neste
                                    momento
                                    que
                                    todo o acervo intelectual e físico foi transferido para uma fábrica mais nova e mais
                                    moderna
                                    em julho do mesmo ano. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-md-6 mt-3">
                        <img src="assets/images/institucional2.png" alt="Imagem institucional">
                    </div>
                    <div class="col-md-6 mt-3">
                        <img src="assets/images/institucional3.png" alt="Imagem institucional">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 my-5">
                        <h2>Oque fazemos</h2>
                        <p>
                            Fabricamos e fornecemos Ventiladores Axiais para Sistemas de Ventilação Subterrânea, Torres
                            Resfriamento,
                            Air Coolers e Air Cooled Condensers. Possuímos uma linha completa de produtos que atende os
                            seguintes
                            mercados: mineração, construção, túneis rodoviários, metrô, refinarias, papel e celulose,
                            petroquímicas,
                            termoelétricas, entre outros.
                        </p>
                    </div>
                    <div class="col-md-6 my-3">
                        <img src="assets/images/institucional2.png" alt="Imagem institucional">
                    </div>
                    <div class="col-md-6 my-3">
                        <img src="assets/images/institucional3.png" alt="Imagem institucional">
                    </div>
                    <div class="col-md-12 mb-5">
                        <div class="d-flex my-5">
                            <? for ($i = 0;
                                    $i < 8;
                                    $i++) { ?>
                                <div class="flex-fill px-1">
                                    <img src="assets/images/case-img.png" alt="Imagem institucional">
                                </div>
                            <? } ?>
                        </div>
                        <p>
                            Além disso a FanTR possui uma equipe especializada de engenheiros capaz de desenvolver
                            produtos customizados para qualquer aplicação relacionados à ventilação, assim como
                            projetar sistemas completos de ventilação.
                        </p>
                        <br>
                        <p>
                            Todos os produtos são criados pela FanTR com tecnologia própria, 100% brasileira,
                            obedecendo aos mais rigorosos padrões internacionais de qualidade e desenvolvimento.

                        </p>
                    </div>
                    <div class="col-md-12 mb-5 pb-5">
                        <h2>Valores</h2>
                        <p>
                            Os valores da FanTR são as diretrizes que guiam a empresa para execução de um trabalho que
                            vai além da excelência técnica, agregando valores como comprometimento, responsabilidade e
                            ética, que refletem a essência da marca.
                        </p>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-6 my-5">
                <div class="cards-institucional">
                    <img class="icon-institucional" src="assets/images/icone-missao.png" alt="Icone Missão da FanTR">
                    <h3>Missão</h3>
                    <br>
                    <p>
                        Extrair o melhor de nossos profissionais para a criação de soluções mais eficientes nos mercados
                        que atuamos.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 my-5">
                <div class="cards-institucional">
                    <img class="icon-institucional" src="assets/images/icone-visao.png" alt="Icone Visão da FanTR">
                    <h3>Visão</h3>
                    <br>
                    <p>
                        Buscar soluções inovadoras no desenvolvimento de nossos produtos, aplicando tecnologia de ponta
                        em materiais e processos, gerando lucro de forma ética e consciente.
                    </p>
                </div>
            </div>

            <div class="col-md-12 cards-institucional mt-5">
                <img class="icon-institucional center" src="assets/images/icone-valores.png" alt="Icone Valor da FanTR">
                <br>
                <h3 class="text-center">Valores</h3>

                <div class="row valores pt-5">
                    <div class="col-md-4">
                        <p><img class="float-left" src="assets/images/icone-valores1.png" alt="Icone Valor da FanTR">
                            Comprometimento
                        </p>
                        <p><img class="float-left" src="assets/images/icone-valores2.png" alt="Icone Valor da FanTR">
                            Respeito
                        </p>
                        <p><img class="float-left" src="assets/images/icone-valores3.png" alt="Icone Valor da FanTR">
                            Ética
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p><img class="float-left" src="assets/images/icone-valores4.png" alt="Icone Valor da FanTR">
                            Sustentabilidade
                        </p>
                        <p><img class="float-left" src="assets/images/icone-valores5.png" alt="Icone Valor da FanTR">
                            Conhecimento
                        </p>
                        <p><img class="float-left" src="assets/images/icone-valores6.png" alt="Icone Valor da FanTR">
                            Excelência
                        </p>
                    </div>
                    <div class="col-md-4">
                        <p><img class="float-left" src="assets/images/icone-valores7.png" alt="Icone Valor da FanTR">
                            Responsabilidade
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="FanTR-mundo">
            <h2>Presença da FanTR <br>
                no mundo</h2>
        </div>
        <br>

    </div>
    <div class="w-100">
        <img class="img-fluid" src="assets/images/image-globo.png"
             alt="Imagem do globo de atuação da FanTR no mundo">
    </div>

</section>


<? include('includes/newsletter.php'); ?>
<? include('includes/footer.php'); ?>
<? include('includes/js.php'); ?>
<? include('includes/analytics.php'); ?>

</body>
</html>