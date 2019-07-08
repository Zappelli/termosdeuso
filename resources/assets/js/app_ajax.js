var AJAX = AJAX || {};

(function($, document, window) {

    AJAX.submit = function (){
        $( "form.form-contrato" ).on( "submit", function( event ) {
            event.preventDefault();
            var $_form = $(this);
            var __action = $_form.attr('action');
            var __attributes = $_form.serializeArray();
            var __data = {};
            var __next = $_form.attr('data-next');

            $.each(__attributes, function(i, field) {
                __data[field.name] = field.value
            });

            $.ajax({
                url: __action,
                data: __data,
                type: 'POST',
                dataType: 'JSON',
                beforeSend: function () {
                    $_form.addClass('loading');
                },
                success: function(data) {
                    $_form.closest('.accordion-painel').removeClass('show').find('.accordion-content').fadeOut();
                    $_form.closest('.accordion-painel').find('.accordion-content');
                    toastr.success('Informação salva com sucesso');
                    $('#'+__next).addClass('show').fadeIn()
                },
                error: function(jqXHR, textStatus, errorThrown){
                    toastr.error('Houve um erro ao tentar salvar');
                },
            });
        });
    };

    AJAX.delete = function () {
        $('.action-deletar').on('click', function(event) {
            event.preventDefault();
            var __action = $(this).attr('href');
            $.ajax({
                url: __action,
                type: 'DELETE',
                dataType: 'JSON',
                beforeSend: function () {
                    $(this).closest('.contrato-item').addClass('loading');
                },
                success: function(data) {
                    console.log(data);
                    toastr.success('Informação Apagada com sucesso');
                    $(this).closest('.contrato-item').parent().remove();
                },
                error: function(jqXHR, textStatus, errorThrown){
                    toastr.error('Houve um erro ao tentar Remover o contrato');
                },
            });
        });
    };
    
    AJAX.init = function() {
        console.log('+init');
        AJAX.submit();
        AJAX.delete();
    };

})(jQuery, document, window);

AJAX.init();