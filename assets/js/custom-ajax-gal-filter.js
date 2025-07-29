jQuery(document).ready(function($) {
    $('.filter-list-item').on('click', function(e) {
        e.preventDefault();

         // Remove 'active' class from all buttons
         $('.filter-list-item').removeClass('active');
        
         // Add 'active' class to the clicked button
         $(this).addClass('active');

         
        var category = $(this).data('category');
        var paged = 1; // Reset pagination to page 1

        $.ajax({
            url: ajax_params.ajaxurl,
            type: 'POST',
            data: {
                action: 'filter_gal',
                category: category,
                paged: paged
            },
            success: function(response) {
                $('#gal-list').html(response);
            },
            error: function() {
                alert('There was an error loading the news.');
            }
        });
    });
});
