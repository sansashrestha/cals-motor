// // news-filter.js

// jQuery(document).ready(function($) {
//     $('.filter-list-item').on('click', function(e) {
//         e.preventDefault();

//         $('.filter-list-item').removeClass('active');
//         $(this).addClass('active');

//         var category = $(this).data('category');
//         var paged = 1; // Reset to first page on filter change

//         $.ajax({
//             url: ajax_params.ajax_url,
//             type: 'POST',
//             data: {
//                 action: 'filter_news',
//                 category: category,
//                 paged: paged,
//             },
//             beforeSend: function() {
//                 $('#news-list').html('<p>Loading...</p>');
//             },
//             success: function(response) {
//                 $('#news-list').html(response);
//             },
//             error: function(xhr, status, error) {
//                 console.log('AJAX Error: ', status, error);
//                 $('#news-list').html('<p>There was an error loading the news.</p>');
//             }
//         });
//     });
// });


// jQuery(document).ready(function($) {
//     $('.filter-list-item').on('click', function(e) {
//         e.preventDefault();

//         var category = $(this).data('category');
//         var paged = $('#news-list').data('paged') || 1;

//         $.ajax({
//             url: ajax_params.ajaxurl,
//             type: 'POST',
//             data: {
//                 action: 'filter_news',
//                 category: category,
//                 paged: paged,
//                 security: ajax_params.nonce // Pass the nonce here
//             },
//             success: function(response) {
//                 $('#news-list').html(response);
//             },
//             error: function() {
//                 alert('Failed to load news.');
//             }
//         });
//     });
// });



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
                action: 'filter_movies',
                category: category,
                paged: paged
            },
            success: function(response) {
                $('#movie-list').html(response);
            },
            error: function() {
                alert('There was an error loading the movies.');
            }
        });
    });
});
