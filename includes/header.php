<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
<? if($Header_Endereco){?><meta itemprop="streetAddress" content="<?=$Header_Endereco?>"><? } ?>
<? if($Header_Cidade){?><meta itemprop="addressLocality" content="<?=$Header_Cidade?>"><? } ?>
<? if($Header_UF){?><meta itemprop="addressRegion" content="<?=$Header_UF?>"><? } ?>
<? if($Header_Pais){?><meta itemprop="addressCountry" content="<?=$Header_Pais?>"><? } ?></span>
<? if($Header_NomeEmpresa){?><meta itemprop="name" content="<?=$Header_NomeEmpresa?>"><? } ?>
<? if($Header_Site){?><meta itemprop="url" content="<?=$Header_Site?>"><? } ?>
<? if($Header_Telefone){?><meta itemprop="telephone" content="<?=$Header_Telefone?>"><? } ?>
<? if($Header_Email){?><meta itemprop="email" content="<?=$Header_Email?>"><? } ?>


<header class="header-home">
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-md navbar-light nav-header col-md-12">
                <div class="menu-holder">
                    <a href="./"><img class="logo" src="assets/images/logo-blue.png" alt="<?=$config_nomeCliente?>"></a>
                </div>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-icon"><i class="fas fa-bars fa-2x"></i></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li><a href="./" class="<?php if($cur_page == 'index.php'){echo 'menu-active';}?>">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle <?php if($cur_page == 'sobre.php'){echo 'menu-active';}?>"
                               href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sobre
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <hr>
                                <a class="dropdown-item" href="diferenciais">Diferenciais</a>
                                <hr>
                                <a class="dropdown-item py-2" href="profissionais">Profissionais</a>
                                <hr>
                                <a class="dropdown-item" href="institucional">Institucional</a>
                                <hr>
                            </div>
                        </li>
                        <li><a href="produtos" class="<?php if($cur_page == 'produtos.php'){echo 'menu-active';}?>">Produtos</a></li>
                        <li><a href="servicos" class="<?php if($cur_page == 'servicos.php'){echo 'menu-active';}?>">Serviços</a></li>
                        <li><a href="noticias" class="<?php if($cur_page == 'noticias.php'){echo 'menu-active';}?>">Notícias</a></li>
                        <li><a href="cases" class="<?php if($cur_page == 'cases.php'){echo 'menu-active';}?>">Cases</a></li>
                        <li><a href="fale-conosco" class="<?php if($cur_page == 'fale-conosco.php'){echo 'menu-active';}?>">Contato</a></li>
                    </ul>
                    <ul class="ul-idioma">
                        <li><a href="javascript:">EN</a></li>
                        <li><a href="javascript:" class="menu-active">PT</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>