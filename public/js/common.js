(function ($) {
    $('.clausulas-item').on('click', '.action-arrow', function(e){
        $(this).closest('.clausulas-item').toggleClass('accordion-active');
        $(this).closest('.clausulas-item').find('.clausulas-item--content').slideToggle('fast');
    });
})(jQuery);