<?php 

// news
add_action('init', 'news_register_post_type');
function news_register_post_type() {
    register_post_type('news', array(
        'labels' => array(
           'name' => 'お知らせ',
           'add_new' => '新規お知らせを追加',
           'edit_item' => 'お知らせを編集',
           'new_item' => '新規お知らせ',
           'view_item' => 'お知らせを見る',
           'search_items' => 'お知らせを検索',
           'not_found' => ' お知らせはありません。',
           'not_found_in_trash' => 'ゴミ箱にお知らせはありません。',
           'add_new_item' => '新規お知らせを追加',
        ),
        'show_in_rest' => true, // To use Gutenberg editor.
        'public' => true,
		'publicly_queryable' => true, 
		'show_ui' => true, 
		'exclude_from_search' => true,
        'supports' => array(
           'title',
           'thumbnail',
           'editor'
           // 'excerpt'     
        ),
        'menu_position' => 5,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-site-alt3',
    ));
}
// <------ news Category ------->
add_action( 'init', 'create_news_category', 0 );
function create_news_category() {
    $labels = array(
        'name'              => _x('お知らせカテゴリー', 'taxonomy general name', 'korea'),
        'singular_name'     => _x('お知らせカテゴリー', 'taxonomy singular name', 'korea'),
        'has_archive'	     => 'news',
    );
    $args = array(
       'hierarchical'      => true,
       'show_in_rest' => true, // To use Gutenberg editor.
       'labels'            => $labels,
       'show_ui'           => true,
       'show_admin_column' => true,
       'query_var'         => true,
       'rewrite'           => array( 'slug' => 'news/category' ),
    );
    register_taxonomy( 'news_category', array( 'news' ), $args );
}


// movie
add_action('init', 'movie_register_post_type');
function movie_register_post_type() {
    register_post_type('movie', array(
        'labels' => array(
           'name' => 'movie',
           'add_new' => '新規movieを追加',
           'edit_item' => 'movieを編集',
           'new_item' => '新規movie',
           'view_item' => 'movieを見る',
           'search_items' => 'movieを検索',
           'not_found' => ' movieはありません。',
           'not_found_in_trash' => 'ゴミ箱にmovieはありません。',
           'add_new_item' => '新規movieを追加',
        ),
        'show_in_rest' => true, // To use Gutenberg editor.
        'public' => true,
		'publicly_queryable' => true, 
		'show_ui' => true, 
		'exclude_from_search' => true,
        'supports' => array(
           'title',
           'thumbnail',
           'editor'
           // 'excerpt'     
        ),
        'menu_position' => 6,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-site-alt2',
    ));
}
// <------ movie Category ------->
add_action( 'init', 'create_movie_category', 0 );
function create_movie_category() {
    $labels = array(
        'name'              => _x('movieカテゴリー', 'taxonomy general name', 'korea'),
        'singular_name'     => _x('movieカテゴリー', 'taxonomy singular name', 'korea'),
        'has_archive'	     => 'movie',
    );
    $args = array(
       'hierarchical'      => true,
       'show_in_rest' => true, // To use Gutenberg editor.
       'labels'            => $labels,
       'show_ui'           => true,
       'show_admin_column' => true,
       'query_var'         => true,
       'rewrite'           => array( 'slug' => 'movie/category' ),
    );
    register_taxonomy( 'movie_category', array( 'movie' ), $args );
}


// gallery
add_action('init', 'gallery_register_post_type');
function gallery_register_post_type() {
    register_post_type('gallery', array(
        'labels' => array(
           'name' => 'gallery',
           'add_new' => '新規galleryを追加',
           'edit_item' => 'galleryを編集',
           'new_item' => '新規gallery',
           'view_item' => 'galleryを見る',
           'search_items' => 'galleryを検索',
           'not_found' => ' galleryはありません。',
           'not_found_in_trash' => 'ゴミ箱にgalleryはありません。',
           'add_new_item' => '新規galleryを追加',
        ),
        'show_in_rest' => true, // To use Gutenberg editor.
        'public' => true,
		'publicly_queryable' => true, 
		'show_ui' => true, 
		'exclude_from_search' => true,
        'supports' => array(
           'title',
           'thumbnail',
           'editor'
           // 'excerpt'     
        ),
        'menu_position' => 6,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-site-alt2',
    ));
}
// <------ gallery Category ------->
add_action( 'init', 'create_gallery_category', 0 );
function create_gallery_category() {
    $labels = array(
        'name'              => _x('galleryカテゴリー', 'taxonomy general name', 'korea'),
        'singular_name'     => _x('galleryカテゴリー', 'taxonomy singular name', 'korea'),
        'has_archive'	     => 'gallery',
    );
    $args = array(
       'hierarchical'      => true,
       'show_in_rest' => true, // To use Gutenberg editor.
       'labels'            => $labels,
       'show_ui'           => true,
       'show_admin_column' => true,
       'query_var'         => true,
       'rewrite'           => array( 'slug' => 'gallery/category' ),
    );
    register_taxonomy( 'gallery_category', array( 'gallery' ), $args );
}

// // activity 
// add_action('init', 'activity_register_post_type');
// function activity_register_post_type() {
//     register_post_type('activity', array(
//         'labels' => array(
//            'name' => 'activity',
//            'add_new' => '新規activityを追加',
//            'edit_item' => 'activityを編集',
//            'new_item' => '新規activity',
//            'view_item' => 'activityを見る',
//            'search_items' => 'activityを検索',
//            'not_found' => ' activityはありません。',
//            'not_found_in_trash' => 'ゴミ箱にactivityはありません。',
//            'add_new_item' => '新規activityを追加',
//         ),
//         'show_in_rest' => true, // To use Gutenberg editor.
//         'public' => true,
// 		'publicly_queryable' => true, 
// 		'show_ui' => true, 
// 		'exclude_from_search' => true,
//         'supports' => array(
//            'title',
//            'thumbnail',
//            'editor',
//            'excerpt'     
//         ),
//         'menu_position' => 6,
//         'has_archive' => true,
//         'menu_icon' => 'dashicons-admin-site-alt2',
//     ));
// }
// // <------ activity Category ------->
// add_action( 'init', 'create_activity_category', 0 );
// function create_activity_category() {
//     $labels = array(
//         'name'              => _x('Activity Categories', 'taxonomy general name', 'korea'),
//         'singular_name'     => _x('Activity Category', 'taxonomy singular name', 'korea'),
//         'has_archive'	     => 'activity',
//     );
//     $args = array(
//        'hierarchical'      => true,
//        'show_in_rest' => true, // To use Gutenberg editor.
//        'labels'            => $labels,
//        'show_ui'           => true,
//        'show_admin_column' => true,
//        'query_var'         => true,
//        'rewrite'           => array( 'slug' => 'activity/category' ),
//     );
//     register_taxonomy( 'activity_category', array( 'activity' ), $args );
// }


// // <------ activity Tag ------->
// add_action( 'init', 'create_activity_tag', 0 );
// function create_activity_tag() {
//     $labels = array(
//         'name'              => _x('Activity Tags', 'taxonomy general name', 'korea'),
//         'singular_name'     => _x('Activity Tag', 'taxonomy singular name', 'korea'),
//         'search_items'      => __( 'Search Activity Tags', 'korea' ),
//         'all_items'         => __( 'All Activity Tags', 'korea' ),
//         'parent_item'       => __( 'Parent Activity Tag', 'korea' ),
//         'parent_item_colon' => __( 'Parent Activity Tag:', 'korea' ),
//         'edit_item'         => __( 'Edit Activity Tag', 'korea' ),
//         'update_item'       => __( 'Update Activity Tag', 'korea' ),
//         'add_new_item'      => __( 'Add New Activity Tag', 'korea' ),
//         'new_item_name'     => __( 'New Activity Tag Name', 'korea' ),
//         'menu_name'         => __( 'Activity Tag', 'korea' ),
//     );
//     $args = array(
//        'hierarchical'      => false,
//        'show_in_rest'      => true, // To use Gutenberg editor.
//        'labels'            => $labels,
//        'show_ui'           => true,
//        'show_admin_column' => true,
//        'update_count_callback' => '_update_post_term_count',
//        'query_var'         => true,
//        'rewrite'           => array( 'slug' => 'activity/tag' ),
//     );
//     register_taxonomy( 'activity_tag', array( 'activity' ), $args );
// }


// // services
// add_action('init', 'services_register_post_type');
// function services_register_post_type() {
//     register_post_type('services', array(
//         'labels' => array(
//            'name' => 'services',
//            'add_new' => '新規servicesを追加',
//            'edit_item' => 'servicesを編集',
//            'new_item' => '新規services',
//            'view_item' => 'servicesを見る',
//            'search_items' => 'servicesを検索',
//            'not_found' => ' servicesはありません。',
//            'not_found_in_trash' => 'ゴミ箱にservicesはありません。',
//            'add_new_item' => '新規servicesを追加',
//         ),
//         'show_in_rest' => true, // To use Gutenberg editor.
//         'public' => true,
// 		'publicly_queryable' => true, 
// 		'show_ui' => true, 
// 		'exclude_from_search' => true,
//         'supports' => array(
//            'title',
//            'thumbnail',
//            'editor'
//            // 'excerpt'     
//         ),
//         'menu_position' => 5,
//         'has_archive' => true,
//     ));
// }





// Filtering datas

/* filter movies */
function filter_movies_by_category() {
    $category_id = $_POST['category'];
    $paged = $_POST['paged'];

    $args = array(
        'post_type' => 'movie',
        'post_status' => 'publish',
        'paged' => $paged,
        'posts_per_page' => 5,
    );

    if ($category_id != 'all') {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'movie_category',
                'field' => 'term_id',
                'terms' => $category_id,
            ),
        );
    }

    $movies = new WP_Query($args);

    if ($movies->have_posts()) :
        while ($movies->have_posts()) : $movies->the_post(); ?>
            <div class="movie__col <?php echo esc_attr( implode(' ', get_post_class()) ); ?>">
                <div class="movie__page-video">
                    <div class="movie__video -page">
                        <div class="movie__video__item">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?>
                            <?php endif; ?>
                        </div>
                        <div class="movie__video__btn">
                            <a href="<?php the_permalink(); ?>" class="btn btn-video"></a>
                        </div>
                        <div class="movie__video__thumb">
                            <div class="movie__video__wrapper">
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" class="img-fluid" width="940" height="564" alt="<?php the_title_attribute(); ?>" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="movie__video-btn">
                        <a href="<?php the_permalink(); ?>" class="btn-primary">紹介動画一覧</a>
                    </div>
                </div>
                <p class="movie__ttl">
                    <?php 
                    $movie_cat = get_the_terms($post->ID, 'movie_category');
                    if (!empty($movie_cat) && !is_wp_error($movie_cat)) {
                        foreach ($movie_cat as $cat) {
                            echo '<span class="single-category">' . esc_html($cat->name) . '</span> ';
                        }
                    }
                    ?>
                </p>
                <p class="movie__text"><?php the_excerpt(); ?></p>
                <p class="movie__para"><?php echo wp_trim_words(get_the_content(), 40); ?></p>
            </div>
        <?php endwhile;
    else :
        echo '<p>No movies found.</p>';
    endif;

    wp_die();
}
add_action('wp_ajax_filter_movies', 'filter_movies_by_category');
add_action('wp_ajax_nopriv_filter_movies', 'filter_movies_by_category');



function enqueue_custom_ajax_filter_script() {
    wp_enqueue_script('custom-ajax-filter', get_template_directory_uri() . '/assets/js/custom-ajax-filter.js', array('jquery'), '1.0', true);

    wp_localize_script('custom-ajax-filter', 'ajax_params', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_ajax_filter_script');


/* filter news */

function filter_news_by_category() {
    $category_id = $_POST['category'];
    $paged = $_POST['paged'];

    $args = array(
        'post_type' => 'news',
        'post_status' => 'publish',
        'paged' => $paged,
        'posts_per_page' => 5,
    );

    if ($category_id != 'all') {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'news_category',
                'field' => 'term_id',
                'terms' => $category_id,
            ),
        );
    }

  // Execute the query
  $news = new WP_Query($args);

  // The Loop
  if ($news->have_posts()) :
      while ($news->have_posts()) : $news->the_post(); ?>
          <div class="news-list__col">
              <a href="<?php the_permalink(); ?>" class="news-list__lnk">
                  <?php if (has_post_thumbnail()): ?>
                      <div class="news-list__img">
                          <?php the_post_thumbnail('thumbnail'); ?>
                      </div>
                  <?php endif; ?>
                  <div class="news-content-card__desc">
                      <div class="news-list__desc">
                          <h4 class="news-list__date"><span><?php echo get_the_date("Y.m.d"); ?></span>
                              <?php 
                              $news_cat = get_the_terms($post->ID, 'news_category');
                              if (!empty($news_cat) && !is_wp_error($news_cat)) {
                                  foreach ($news_cat as $cat) {
                                      echo '<span class="single-category">' . esc_html($cat->name) . '</span> ';
                                  }
                              }
                              ?>
                          </h4>
                          <div class="news-list__para"><?php the_content(); ?></div>
                      </div>
                  </div>
              </a>
          </div>
          <?php endwhile;
          else :
              echo '<p>No news found.</p>';
          endif;

  // Restore original Post Data
    wp_die();
}
add_action('wp_ajax_filter_news', 'filter_news_by_category');
add_action('wp_ajax_nopriv_filter_news', 'filter_news_by_category');



function enqueue_custom_news_ajax_filter_script() {
    wp_enqueue_script('custom-ajax-news-filter', get_template_directory_uri() . '/assets/js/custom-ajax-news-filter.js', array('jquery'), '1.0', true);

    wp_localize_script('custom-ajax-news-filter', 'ajax_params', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_news_ajax_filter_script');



/* filter gallery */

function filter_gal_by_category() {
    $category_id = $_POST['category'];
    $paged = $_POST['paged'];

    $args = array(
        'post_type' => 'gallery',
        'post_status' => 'publish',
        'paged' => $paged,
        'posts_per_page' => 5,
    );

    if ($category_id != 'all') {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'gallery_category',
                'field' => 'term_id',
                'terms' => $category_id,
            ),
        );
    }

  // Execute the query
  $gallery = new WP_Query($args);

  // The Loop
    if ($gallery->have_posts()) :
        while ($gallery->have_posts()) : $gallery->the_post(); ?>
        <div class="gallery-list-col">
            <a href="#" class="owner-gallery__card">
                <?php if (has_post_thumbnail()): ?>
                    <div class="owner-gallery__card__img">
                        <figure>
                        <?php the_post_thumbnail('thumbnail'); ?>
                            <figcaption class="caption"><?php echo the_title(); ?></figcaption>
                        </figure>
                        <span class="read-more">続きを読む</span>
                    </div>
                <?php endif; ?>
                <p class="owner-gallery__card__txt">東京都 T.A<span>様</span></p>
            </a>
        </div>
        <?php endwhile;
        else :
            echo '<p>No gallery found.</p>';
        endif;

  // Restore original Post Data
    wp_die();
}
add_action('wp_ajax_filter_gal', 'filter_gal_by_category');
add_action('wp_ajax_nopriv_filter_gal', 'filter_gal_by_category');



function enqueue_custom_gal_ajax_filter_script() {
    wp_enqueue_script('custom-ajax-gal-filter', get_template_directory_uri() . '/assets/js/custom-ajax-gal-filter.js', array('jquery'), '1.0', true);

    wp_localize_script('custom-ajax-gal-filter', 'ajax_params', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_gal_ajax_filter_script');