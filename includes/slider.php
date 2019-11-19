<?php
$resSlider = mysql_query("SELECT * FROM site_tb_banner WHERE tipo_banner = 'H' ORDER BY RAND() ");
if (mysql_num_rows($resSlider)) {
?>
<div class="home-sliders">
    <div class="sliders">
    <?/*php while ($rowSlider = mysql_fetch_array($resSlider)) { ?>
            <a <? if ($rowSlider['link_banner'] != "") { echo 'href="'.$rowSlider['link_banner'].'"'; } ?>>
            	<img src="uploads/destaques/<?=$rowSlider['url_banner']?>" alt="<?=$rowSlider['tit_banner']?>">
            </a>
    <?php } */?>
        <? for ($i=0; $i< 3; $i++){ ?>
        <div class="sup-banner" style="background: url('assets/images/bg-banner.png') center no-repeat">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h1>Cooling and ventilation soluctions for your company</h1>
                        <div class="link-area">
                            <a href="institucional" class="hvr-wobble-vertical">Learn more about us</a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="assets/images/img-banner.png" alt="Produto Fantr">
                    </div>
                </div>
            </div>
        </div>
        <? } ?>
    </div>
</div>     
<? } ?>
