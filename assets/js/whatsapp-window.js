function linkWhatsApp(numero) {
    if (enviaLeadWhats()) {
        var numero = numero.replace(/[^\d]/g, '');//mantém apenas número na string
        var ddi = numero.substring(0, 2);//adiciona o DDI do Brasil se não tiver
        if(ddi!='55'){ numero = '55'+numero;} //adiciona o DDI do Brasil se não tiver
        var str = navigator.userAgent;
        var wa_prefix = '';
        if(str.indexOf("Firefox")>0){wa_prefix = 'web';}else{wa_prefix = 'api';}// verifica se é Firefox
        var url_whats = 'https://'+wa_prefix+'.whatsapp.com/send?phone='+numero;
        return url_whats;// retorna a URL
    } else {
        throw '';
    }
}

$(".link").click(function (event){
    $(".whats-elem").removeClass("whats-elem").addClass("modal-sobe");
    event.preventDefault();
});

$(".close-whats").click(function (event){
    $(".modal-sobe").removeClass("modal-sobe").addClass("whats-elem");
    event.preventDefault();
});

function validaLeadWhats(){

    d = document.formWhats;

    if (d.whats_nome.value == "" || !(regex = /\b[A-Za-zÀ-ú][A-Za-zÀ-ú]+,?\s[A-Za-zÀ-ú][A-Za-zÀ-ú]{0,19}\b/gi.exec(d.whats_nome.value))){
        alert("Preencha seu Nome Completo!");
        d.whats_nome.focus(); return false;
    }

    if (d.whats_celular.value == "" || d.whats_celular.value.length <13){
        alert("Preencha seu número do WhatsApp para iniciar a conversa!");
        d.whats_celular.focus(); return false;
    }
    return true;
}

function enviaLeadWhats(){
    form_valido = validaLeadWhats();
    if(form_valido){

        getLoading();
        var formdata = new FormData($("#formWhats")[0]);
        var linkAjax = "./ajax.php?act=sendLeadWhats";

        formdata.append('session','<?=session_id()?>');
        $.ajax({
            type: 'POST',
            url: linkAjax,
            data: formdata ,
            processData: false,
            contentType: false,
            success: function(data) {
                console.log(data);
                data = $.parseJSON(data);
                if(!data.ErroEnvio){
                    /*ga('send', 'event', 'envio-contato');*/
                    $("#formWhats input, #formWhats textarea, #formWhats select").val('');
                    $('#formWhats input[type=checkbox]').prop('checked', false);

                    $(".modal-sobe").removeClass("modal-sobe").addClass("whats-elem");
                    //window.open('https://web.whatsapp.com/send?phone=5515998586812', '_blank');
                } else{
                    console.log('Erro');
                }
            },
        });
        delLoading();
    }
    return form_valido;
}