$('.js-tab-trigger').click(function() {
    var id = $(this).attr('data-tab'), // 1
        content = $('.js-tab-content[data-tab="'+ id +'"]'); // 2
        $('.js-tab-trigger.active').removeClass('active'); // 1
        $(this).addClass('active'); // 2
        
        $('.js-tab-content.active').removeClass('active'); // 3
        content.addClass('active'); // 4
 });



