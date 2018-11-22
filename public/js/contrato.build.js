(function ($) {
    console.log('CONTRAO');
    $( "#contrato-list" ).sortable({
        revert: true
    });
    $('.clausula').draggable({
        appendTo: 'body',
        helper: 'clone'
    });
    $('#droppable-zone').droppable({
        accept: '.clausula',
        tolerance: 'touch',
        drop: function(event, ui)
        {
            var content = $(ui.draggable).html();
            var html = '';
                html += '<div class="contrato-list--item clausulas-item">';
                    html += content;
                html += '</div>';
            $("#contrato-list").append(html);
        }
    });
    $("#contrato-list").on('click', '.action-close', function(e){
        var response = confirm("Tem certeza que deseja remover a cláusula do formulário?");
        if (response == true) 
        {
            $(this).closest('.contrato-list--item').fadeOut().remove();
        }
    });
    $('#contrato-list').on('click', '.action-arrow', function(e){
        $(this).closest('.clausulas-item').toggleClass('accordion-active');
        $(this).closest('.clausulas-item').find('.clausulas-item--content').slideToggle('fast');
    });

    var title = $('#title').html();
    $('#title').focus(function() {
        $(this).keypress(function(event){
            if ( event.which == 13 ) {
                event.preventDefault();
                $(this).blur();
            }
        });
    });
    $('#title').blur(function() {
        if (title != $(this).html()){
            $('#nome').val($(this).html());
        }
    });
})(jQuery);