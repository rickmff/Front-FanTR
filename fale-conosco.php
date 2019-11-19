<?
session_start();
include 'cms/config/config.php';
require 'cms/classes/class.conndatabase.php';
require 'cms/classes/functions.php';

include('cms/classes/phpmailer/class.phpmailer.php');

if ($_POST['nome'] && $_POST['email'] && $_POST['mensagem']) {
    for ($i = 0; $i < count($_POST); $i++) {
        $var = key($_POST);
        $$var = trim($_POST[key($_POST)]);
        next($_POST);
    }

    $destino = 'suporte@agenciakombi.com.br';

    $body = "<style type=\"text/css\">
		h2 { font:bold 14px Arial; }
		p { font:12px Arial; }	
		</style>
		<h2>Contato enviado pelo site " . $config_nomeCliente . "</u></b></h2>
		
		<p>
		<b>Nome: </b>" . $_POST['nome'] . "<br />
		<b>E-mail: </b><a href=\"mailto:" . $_POST['email'] . "\">" . $_POST['email'] . "</a><br />
		<b>Telefone: </b>" . $_POST['telefone'] . "<br />
		<b>Mensagem: </b>" . $_POST['mensagem'] . "<br />
		</p>
		<p><em>Este e-mail foi enviado em " . date('d/m/Y', time()) . " às " . date('H:i:s', time()) . ".</em></p>";

    $mail = new PHPMailer();
    $mail->IsSMTP();
    if ($configSMTP_host != '' && $configSMTP_usuario != '' && $configSMTP_senha != '') {
        $mail->Host = $configSMTP_host;
        $mail->Username = $configSMTP_usuario;
        $mail->Password = $configSMTP_senha;
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        $mail->Sender = $configSMTP_usuario; // Seu e-mail
    } else {
        $mail->SMTPAuth = false;
    }
    $mail->CharSet = "utf-8";
    $mail->From = $_POST['email'];
    $mail->AddReplyTo($_POST['email'], $_POST['nome']);
    $mail->FromName = $_POST['nome'];
    $mail->Body = $body;
    $mail->Subject = "Contato enviado pelo site " . $config_nomeCliente;
    $mail->IsHTML(true);
    $mail->AddAddress($destino);
    if ($mail->Send()) {
        $sucesso = 's';
        GravaMailing($_POST['email'], $_POST['nome'], $_POST['telefone'], '', 'FaleConosco', '', $_POST['mensagem']);

    } else {
        $sucesso = 'n';
    }

} ?>
<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" itemscope itemtype="http://schema.org/WebPage"> <!--<![endif]-->
<head>
    <? include('includes/metas.php'); ?>
    <? include('includes/css.php'); ?>
</head>

<body>
<? if ($sucesso == 's') { ?>
    <div class="overlay">
        <div class="msg">
            <span><?= $nome ?></span><br>
            SUA MENSAGEM FOI ENVIADA COM SUCESSO!<br>
            <span class="fechar">FECHAR</span>
        </div>
    </div>
<? }
if ($sucesso == 'n') { ?>
    <div class="overlay">
        <div class="msg">
            OCORREU ALGUM ERRO NO ENVIO DA SUA MENSAGEM<br>
            <?= $mail->ErrorInfo ?><br>
            favor entrar em contato via telefone
        </div>
    </div>
<? } ?>

<? include('includes/header-interna.php'); ?>
<? include('includes/whatsapp-window.php'); ?>


<section class="fale-conosco">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Contato Fantr</h1>
                <p class="breadcrumb-site"><a href="./">Home</a> / Contato</p>

                <form class="form-style" name="formContato" id="formContato" action="javascript:" method="post"
                      onsubmit="enviaContato();">
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <div class="container">
                                <h2>Chamada para <br> Contato</h2>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad explicabo minus vel
                                    velit?
                                    Aut
                                    deleniti
                                    molestiae nulla, quis quos sapiente? Ab amet aperiam autem blanditiis, eos et iste
                                    iure
                                    velit.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad explicabo minus vel
                                    velit?
                                    Aut
                                    deleniti
                                    molestiae nulla, quis quos sapiente? Ab amet aperiam autem blanditiis, eos et iste
                                    iure
                                    velit.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <span class="input input--chisato">
                                            <input required="" class="input__field input__field--chisato" type="text"
                                                   name="nome" id="nome">
                                            <label class="input__label input__label--chisato">
                                                <span class="input__label-content input__label-content--chisato"
                                                      data-content="NOME:">NOME:</span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <span class="input input--chisato">
                                            <input required="" class="input__field input__field--chisato" type="text"
                                                   name="email" id="email">
                                            <label class="input__label input__label--chisato">
                                                <span class="input__label-content input__label-content--chisato"
                                                      data-content="SEU EMAIL:">SEU EMAIL:</span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="input input--chisato">
                                            <input required="" class="input__field input__field--chisato mask_phone"
                                                   type="text" name="telefone" id="telefone">
                                            <label class="input__label input__label--chisato">
                                                <span class="input__label-content input__label-content--chisato"
                                                      data-content="TELEFONE:">TELEFONE:</span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="input input--chisato">
                                            <input required="" class="input__field input__field--chisato mask_phone"
                                                   type="text" name="celular" id="celular">
                                            <label class="input__label input__label--chisato">
                                                <span class="input__label-content input__label-content--chisato"
                                                      data-content="CELULAR:">CELULAR:</span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <span class="input input--chisato">
                                            <input required="" class="input__field input__field--chisato" type="text"
                                                   name="assunto" id="assunto">
                                            <label class="input__label input__label--chisato">
                                                <span class="input__label-content input__label-content--chisato"
                                                      data-content="ASSUNTO:">ASSUNTO:</span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <span class="input input--chisato">
                                            <textarea required="" rows="6" class="input__field input__field--chisato"
                                                      type="text" name="mensagem" id="mensagem"></textarea>
                                            <label class="input__label input__label--chisato">
                                                <span class="input__label-content input__label-content--chisato"
                                                      data-content="MENSAGEM:">MENSAGEM:</span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mt-3 w-100">
                                        <button class="btn w-100 link-style hvr-wobble-horizontal">Enviar mensagem
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-md-12" id="retorno_msg_contato"></div>
                <div class="col-md-12">
                    <hr>
                </div>
                <div class="col-md-12">
                    <div class="localizacao">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mapa">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.8440550898977!2d-47.478761584477546!3d-23.466088963967174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5f510d28ec6cf%3A0x60177dc787af14f3!2sRua%20Atan%C3%A1zio%20Soares%2C%202304%20-%20Vila%20Formosa%2C%20Sorocaba%20-%20SP%2C%2018076-141!5e0!3m2!1spt-BR!2sbr!4v1566822879428!5m2!1spt-BR!2sbr"
                                            width="100%" height="350" frameborder="0" style="border:0;"
                                            allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h4>Onde estamos</h4>
                                <p>
                                    Rua Atanásio Soares, 2304<br>
                                    Vila Formosa - Sorocaba/SP<br>
                                    CEP: 18000-741
                                </p>
                                <div class="link-area">
                                    <a href="http://bit.do/e5GtE" target="_blank" class="hvr-wobble-vertical">Traçar
                                        rota</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="my-1 text-center-mobile">
                    <h2>Contatos FanTR</h2>
                    <div class="row">
                        <? for ($i = 0; $i < 4; $i++) { ?>
                            <div class="offset-1"></div>
                            <div class="col-12 col-md-5 my-md-4">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img class="img-fluid" src="assets/images/profissional.jpg" alt="Contato FanTR">
                                    </div>
                                    <div class="col-12 my-3 col-md-8">
                                        <h3>Mineração e Tuneis</h3>
                                        <br>
                                        <h4>Nome completo</h4>
                                        <p>
                                            telefone: 55 15 99999-9999
                                            <br>
                                            Email: nomedocontato@fantr.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                </div>
                <hr>
                <div class="mb-3 text-center-mobile">
                    <h2>Representantes FanTR</h2>
                    <div class="row">
                        <? for ($i = 0; $i < 4; $i++) { ?>
                            <div class="offset-1"></div>
                            <div class="col-12 col-md-5 my-3 my-md-4">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img class="img-fluid" src="assets/images/profissional.jpg"  alt="Contato FanTR">
                                    </div>
                                    <div class="col-12 my-3 col-md-8">
                                        <h3>Mineração e Tuneis</h3>
                                        <br>
                                        <p>
                                            telefone: 55 15 99999-9999
                                            <br>
                                            Email: nomedocontato@fantr.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function validaForm() {

        d = document.formulario;

        //validar nome
        if (d.nome.value == "") {
            alert("O campo Nome deve ser preenchido!");
            d.nome.focus();
            return false;
        }


        //validar email
        if (d.email.value == "") {
            alert("O campo E-mail deve ser preenchido!");
            d.email.focus();
            return false;
        } else {
            var email = d.email.value;
            var exclude = /[^@\-\.\w]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/;
            var check = /@[\w\-]+\./;
            var checkend = /\.[a-zA-Z]{2,3}$/;
            if (((email.search(exclude) != -1) || (email.search(check)) == -1) || (email.search(checkend) == -1)) {
                alert("O campo E-mail deve ser um endereço válido!");
                d.email.focus();
                return false;
            }

        }

        //validar telefone
        if (d.telefone.value == "") {
            alert("O campo Telefone deve ser preenchido!");
            d.telefone.focus();
            return false;
        }

        //validar mensagem
        if (d.mensagem.value == "") {
            alert("O campo Mensagem deve ser preenchido!");
            d.mensagem.focus();
            return false;
        }

    }
</script>


<? include('includes/footer.php'); ?>
<? include('includes/js.php'); ?>

<script>
    $(document).ready(function () {
        $(".overlay").click(function () {
            $(this).fadeOut();
        });
    });
</script>

<? include('includes/analytics.php'); ?>

</body>
</html>