var AJAX = AJAX || {};

(function($, document, window) {

    AJAX.submit = function (){
        $( "form.form-contrato" ).on( "submit", function( event ) {
            event.preventDefault();
            var $_form = $(this);
            var __action = $_form.attr('action');
            var __attributes = $_form.serializeArray();
            var __data = {};

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
                    console.log(data);
                    toastr.success('Informação salva com sucesso');
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log(jqXHR);
                    toastr.error('Houve um erro ao tentar salvar');
                },
            })
        });
    };
    
    AJAX.init = function() {
        console.log('+init');
        //AJAX.submit();
    };

})(jQuery, document, window);

AJAX.init();