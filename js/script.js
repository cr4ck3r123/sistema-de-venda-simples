$(document).ready(function () {

    $('form[name="loginForm"]').submit(function () {

        var forma = $(this);
        var botao = $(this).find(':button');

        $.ajax({
            url: "control/controller.php",
            type: "POST",
            data: "acao=login&" + forma.serialize(),
            
            beforeSend: function () {
                botao.attr('disabled', true);
                $('.btn').fadeIn('slow');
                botao.html("Aguarde carregando...");

            },
            success: function (retorno) {
                console.log('chegou aki -> ' + retorno);

                if (retorno === 'success') {
                    swal({
                        position: 'top-center',
                        type: 'success',
                        title: 'Logado com sucesso!',
                        showConfirmButton: false,
                        timer: 1000
                    });

                    botao.attr('disabled', false);
                    botao.html('<span class="glyphicon glyphicon-off"></span> Login');

                    setTimeout(function () {
                        $(location).attr('href', 'index.php');
                    }, 1000);

                } else {
                    swal({
                        type: 'error',
                        title: 'ops...',
                        text: 'usuario ou senha invalidos',
                    });
                    botao.attr('disabled', false);
                    botao.html('<span class="glyphicon glyphicon-off"></span> Login');
                }
            }
        });

        return false;
    });

    $(document).ready(function () {
        $("#myBtnSair").click(function () {
            swal({
                type: 'warning',
                title: 'Deslogado...',
                text: 'usuario encerrou sua sessão...',
                timer: 1000
            });            
            setTimeout(function () {
                $(location).attr('href', 'index.php');
            }, 2000);
        });
    });


});

 