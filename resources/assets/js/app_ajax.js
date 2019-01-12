var AJAX = AJAX || {};

(function($, document, window) {

    AJAX.submit = function (){
        $( "form.form-contrato" ).on( "submit", function( event ) {
            event.preventDefault();
            var $_form = $(this);
            var __type = $_form.attr('data-partial');
            var __action = $_form.attr('action');
            var __attributes = $_form.serializeArray();
            var __data = {};

            $.each(__attributes, function(i, field) {
                __data[field.name] = field.value
            });
            
            __data.type = __type;

            console.log('DATA', __data);

            $.ajax({
                url: __action,
                data: __data,
                type: 'POST',
                dataType: 'JSON',
                beforeSend: function () {
                    $_form.addClass('loading');
                }
            })
        });
    };
    
    AJAX.init = function() {
        AJAX.submit();
    };

})(jQuery, document, window);

AJAX.init();