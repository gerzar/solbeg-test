jQuery(function($) {
    $('.category-item').click(function(){
        $.ajax({
            url: PHPDATA.ajaxUrl,
            type: 'POST',
            data: {
                'action' : 'filter',
                'security': PHPDATA.security,
                'slug' : $(this).attr('data-category-slug')
            },

            success: function( data ) {
                render(data);
            }
        });
    });
});
    
