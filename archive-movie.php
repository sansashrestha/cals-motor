<?php get_header(); ?>
<main id="main" class="main-bg">
    <div class="pagetitlebar">
    <div class="container">
        <h1 class="pagetitlebar__title">Movie</h1>
        <p class="pagetitlebar__subtitle">動画紹介</p>
        <div class="pagetitlebar__img ">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/pagetitlebar/movie-pagetitlebar-img.jpg" alt="page-title-bar">
        </div>
    </div>
</div>

    <!--breadcrumb-->
<?php custom_breadcrumb(); ?>
    <section class="section movie -page">
        <div class="container">
            <div class="filter-list">
                <a href="#" class="filter-list-item active" data-category="all">All</a>
                <?php
                $categories = get_terms(array(
                    'taxonomy' => 'movie_category',
                    'hide_empty' => false,
                ));
                if (!empty($categories)) {
                    foreach ($categories as $category) {
                        echo '<a href="#" class="filter-list-item" data-category="' . esc_attr($category->term_id) . '">' . esc_html($category->name) . '</a>';
                    }
                }
                ?>
            </div>

            <div class="movie__block">
                <h2 class="page-ttl">仮）最新カスタム情報</h2>
                <div class="movie__row movie-list -mb83" id="movie-list" data-paged="<?php echo $paged; ?>">
                    <?php
                    // Determine the current page number for pagination
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    // Prepare arguments for the WP_Query
                    $args = array(
                        'post_type'      => 'movie', // Replace 'movie' with your custom post type if different
                        'post_status'    => 'publish',
                        'posts_per_page' => 10, // Adjust the number of posts per page as needed
                        'paged'          => $paged,
                        'orderby'        => 'menu_order',
                        'order'          => 'ASC',
                    );

                    // Execute the query
                    $movies = new WP_Query($args);

                    // The Loop
                    if ($movies->have_posts()) :
                            while ($movies->have_posts()) : $movies->the_post(); 

                            $video_id = get_post_meta(get_the_ID(), 'movie_id', true); ?>

                            <div class="movie__col <?php echo esc_attr( implode(' ', get_post_class()) ); ?>">
                                <div class="movie__page-video">
                                    <div class="movie__video -page">
                                        <div class="movie__video__item">
                                        <?php if ($video_id) {
                                                ?>
                                                <iframe class="youtube-video" width="560" height="315"
                                                    src="https://www.youtube.com/embed/<?php echo esc_attr($video_id); ?>?enablejsapi=1&version=3&playerapiid=ytplayer&controls=0"
                                                    modestbranding="0" frameborder="0"
                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                         
                                                <?php
                                            } else {
                                                echo '<p>No video available.</p>';
                                            }
                                            ?>                                        
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

                    // Restore original Post Data
                    wp_reset_postdata();
                    ?>
                </div>

                <?php if( function_exists('pagination') ) { pagination($movies->max_num_pages); } ?>
            </div>


            <div class="movie__block">
                    <!-- <div class="movie__col carica-us">
                        <div class="movie__page-video">
                            <div class="movie__video -page">
                                <div class="movie__video__item">
                                    <iframe class="youtube-video" width="560" height="315"
                                        src="https://www.youtube.com/embed/RyNgkG9Mli0?enablejsapi=1&version=3&playerapiid=ytplayer&controls=0"
                                        modestbranding="0" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="movie__video__btn">
                                    <a href="#" class="btn btn-video"></a>
                                </div>
                                <div class="movie__video__thumb">
                                    <div class="movie__video__wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video_frame_image.jpg" class="img-fluid" width="940"
                                            height="564" alt="youtube-thumbnail" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="movie__video-btn">
                                <a href="#" class="btn-primary">紹介動画一覧</a>
                            </div>
                        </div>
                        <p class="movie__ttl">Carica US</p>
                        <p class="movie__text">動画タイトルが入ります。動画タイトルが入ります。動画タイトルが入ります。</p>
                        <p class="movie__para">説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
    
                    <div class="movie__col havana">
                        <div class="movie__page-video">
                            <div class="movie__video -page">
                                <div class="movie__video__item">
                                    <iframe class="youtube-video" width="560" height="315"
                                        src="https://www.youtube.com/embed/RyNgkG9Mli0?enablejsapi=1&version=3&playerapiid=ytplayer&controls=0"
                                        modestbranding="0" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="movie__video__btn">
                                    <a href="#" class="btn btn-video"></a>
                                </div>
                                <div class="movie__video__thumb">
                                    <div class="movie__video__wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video_frame_image.jpg" class="img-fluid" width="940"
                                            height="564" alt="youtube-thumbnail" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="movie__video-btn">
                                <a href="#" class="btn-primary">紹介動画一覧</a>
                            </div>
                        </div>
                        <p class="movie__ttl">Havana</p>
                        <p class="movie__text">動画タイトルが入ります。動画タイトルが入ります。動画タイトルが入ります。</p>
                        <p class="movie__para">説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
    
                    <div class="movie__col carica-us">
                        <div class="movie__page-video">
                            <div class="movie__video -page">
                                <div class="movie__video__item">
                                    <iframe class="youtube-video" width="560" height="315"
                                        src="https://www.youtube.com/embed/RyNgkG9Mli0?enablejsapi=1&version=3&playerapiid=ytplayer&controls=0"
                                        modestbranding="0" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="movie__video__btn">
                                    <a href="#" class="btn btn-video"></a>
                                </div>
                                <div class="movie__video__thumb">
                                    <div class="movie__video__wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video_frame_image.jpg" class="img-fluid" width="940"
                                            height="564" alt="youtube-thumbnail" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="movie__video-btn">
                                <a href="#" class="btn-primary">紹介動画一覧</a>
                            </div>
                        </div>
                        <p class="movie__ttl">Carica US</p>
                        <p class="movie__text">動画タイトルが入ります。動画タイトルが入ります。動画タイトルが入ります。</p>
                        <p class="movie__para">説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
    
                    <div class="movie__col carica-us">
                        <div class="movie__page-video">
                            <div class="movie__video -page">
                                <div class="movie__video__item">
                                    <iframe class="youtube-video" width="560" height="315"
                                        src="https://www.youtube.com/embed/RyNgkG9Mli0?enablejsapi=1&version=3&playerapiid=ytplayer&controls=0"
                                        modestbranding="0" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="movie__video__btn">
                                    <a href="#" class="btn btn-video"></a>
                                </div>
                                <div class="movie__video__thumb">
                                    <div class="movie__video__wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video_frame_image.jpg" class="img-fluid" width="940"
                                            height="564" alt="youtube-thumbnail" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="movie__video-btn">
                                <a href="#" class="btn-primary">紹介動画一覧</a>
                            </div>
                        </div>
                        <p class="movie__ttl">Carica US</p>
                        <p class="movie__text">動画タイトルが入ります。動画タイトルが入ります。動画タイトルが入ります。</p>
                        <p class="movie__para">説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
    
                    <div class="movie__col carica-us">
                        <div class="movie__page-video">
                            <div class="movie__video -page">
                                <div class="movie__video__item">
                                    <iframe class="youtube-video" width="560" height="315"
                                        src="https://www.youtube.com/embed/RyNgkG9Mli0?enablejsapi=1&version=3&playerapiid=ytplayer&controls=0"
                                        modestbranding="0" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="movie__video__btn">
                                    <a href="#" class="btn btn-video"></a>
                                </div>
                                <div class="movie__video__thumb">
                                    <div class="movie__video__wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video_frame_image.jpg" class="img-fluid" width="940"
                                            height="564" alt="youtube-thumbnail" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="movie__video-btn">
                                <a href="#" class="btn-primary">紹介動画一覧</a>
                            </div>
                        </div>
                        <p class="movie__ttl">Carica US</p>
                        <p class="movie__text">動画タイトルが入ります。動画タイトルが入ります。動画タイトルが入ります。</p>
                        <p class="movie__para">説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
    
                    <div class="movie__col carica-euro">
                        <div class="movie__page-video">
                            <div class="movie__video -page">
                                <div class="movie__video__item">
                                    <iframe class="youtube-video" width="560" height="315"
                                        src="https://www.youtube.com/embed/RyNgkG9Mli0?enablejsapi=1&version=3&playerapiid=ytplayer&controls=0"
                                        modestbranding="0" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="movie__video__btn">
                                    <a href="#" class="btn btn-video"></a>
                                </div>
                                <div class="movie__video__thumb">
                                    <div class="movie__video__wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video_frame_image.jpg" class="img-fluid" width="940"
                                            height="564" alt="youtube-thumbnail" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="movie__video-btn">
                                <a href="#" class="btn-primary">紹介動画一覧</a>
                            </div>
                        </div>
                        <p class="movie__ttl">Carica EURO</p>
                        <p class="movie__text">動画タイトルが入ります。動画タイトルが入ります。動画タイトルが入ります。</p>
                        <p class="movie__para">説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
    
                    <div class="movie__col carica-euro">
                        <div class="movie__page-video">
                            <div class="movie__video -page">
                                <div class="movie__video__item">
                                    <iframe class="youtube-video" width="560" height="315"
                                        src="https://www.youtube.com/embed/RyNgkG9Mli0?enablejsapi=1&version=3&playerapiid=ytplayer&controls=0"
                                        modestbranding="0" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="movie__video__btn">
                                    <a href="#" class="btn btn-video"></a>
                                </div>
                                <div class="movie__video__thumb">
                                    <div class="movie__video__wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video_frame_image.jpg" class="img-fluid" width="940"
                                            height="564" alt="youtube-thumbnail" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="movie__video-btn">
                                <a href="#" class="btn-primary">紹介動画一覧</a>
                            </div>
                        </div>
                        <p class="movie__ttl">Carica EURO</p>
                        <p class="movie__text">動画タイトルが入ります。動画タイトルが入ります。動画タイトルが入ります。</p>
                        <p class="movie__para">説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
    
                    <div class="movie__col carica-euro">
                        <div class="movie__page-video">
                            <div class="movie__video -page">
                                <div class="movie__video__item">
                                    <iframe class="youtube-video" width="560" height="315"
                                        src="https://www.youtube.com/embed/RyNgkG9Mli0?enablejsapi=1&version=3&playerapiid=ytplayer&controls=0"
                                        modestbranding="0" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="movie__video__btn">
                                    <a href="#" class="btn btn-video"></a>
                                </div>
                                <div class="movie__video__thumb">
                                    <div class="movie__video__wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video_frame_image.jpg" class="img-fluid" width="940"
                                            height="564" alt="youtube-thumbnail" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="movie__video-btn">
                                <a href="#" class="btn-primary">紹介動画一覧</a>
                            </div>
                        </div>
                        <p class="movie__ttl">Carica EURO</p>
                        <p class="movie__text">動画タイトルが入ります。動画タイトルが入ります。動画タイトルが入ります。</p>
                        <p class="movie__para">説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
    
                    <div class="movie__col havana">
                        <div class="movie__page-video">
                            <div class="movie__video -page">
                                <div class="movie__video__item">
                                    <iframe class="youtube-video" width="560" height="315"
                                        src="https://www.youtube.com/embed/RyNgkG9Mli0?enablejsapi=1&version=3&playerapiid=ytplayer&controls=0"
                                        modestbranding="0" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="movie__video__btn">
                                    <a href="#" class="btn btn-video"></a>
                                </div>
                                <div class="movie__video__thumb">
                                    <div class="movie__video__wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video_frame_image.jpg" class="img-fluid" width="940"
                                            height="564" alt="youtube-thumbnail" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="movie__video-btn">
                                <a href="#" class="btn-primary">紹介動画一覧</a>
                            </div>
                        </div>
                        <p class="movie__ttl">Havana</p>
                        <p class="movie__text">動画タイトルが入ります。動画タイトルが入ります。動画タイトルが入ります。</p>
                        <p class="movie__para">説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div> -->
                </div>
            </div>
<!--             
            <div class="movie__block">
                <h2 class="page-ttl">仮）アウトドア特集</h2>
                <div class="movie__row">
    
                    <div class="movie__col carica-us">
                        <div class="movie__page-video">
                            <div class="movie__video -page">
                                <div class="movie__video__item">
                                    <iframe class="youtube-video" width="560" height="315"
                                        src="https://www.youtube.com/embed/RyNgkG9Mli0?enablejsapi=1&version=3&playerapiid=ytplayer&controls=0"
                                        modestbranding="0" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="movie__video__btn">
                                    <a href="#" class="btn btn-video"></a>
                                </div>
                                <div class="movie__video__thumb">
                                    <div class="movie__video__wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video_frame_image.jpg" class="img-fluid" width="940"
                                            height="564" alt="youtube-thumbnail" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="movie__video-btn">
                                <a href="#" class="btn-primary">紹介動画一覧</a>
                            </div>
                        </div>
                        <p class="movie__ttl">Carica US</p>
                        <p class="movie__text">動画タイトルが入ります。動画タイトルが入ります。動画タイトルが入ります。</p>
                        <p class="movie__para">説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
    
                    <div class="movie__col carica-us">
                        <div class="movie__page-video">
                            <div class="movie__video -page">
                                <div class="movie__video__item">
                                    <iframe class="youtube-video" width="560" height="315"
                                        src="https://www.youtube.com/embed/RyNgkG9Mli0?enablejsapi=1&version=3&playerapiid=ytplayer&controls=0"
                                        modestbranding="0" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="movie__video__btn">
                                    <a href="#" class="btn btn-video"></a>
                                </div>
                                <div class="movie__video__thumb">
                                    <div class="movie__video__wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video_frame_image.jpg" class="img-fluid" width="940"
                                            height="564" alt="youtube-thumbnail" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="movie__video-btn">
                                <a href="#" class="btn-primary">紹介動画一覧</a>
                            </div>
                        </div>
                        <p class="movie__ttl">Carica US</p>
                        <p class="movie__text">動画タイトルが入ります。動画タイトルが入ります。動画タイトルが入ります。</p>
                        <p class="movie__para">説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
    
                    <div class="movie__col carica-us">
                        <div class="movie__page-video">
                            <div class="movie__video -page">
                                <div class="movie__video__item">
                                    <iframe class="youtube-video" width="560" height="315"
                                        src="https://www.youtube.com/embed/RyNgkG9Mli0?enablejsapi=1&version=3&playerapiid=ytplayer&controls=0"
                                        modestbranding="0" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="movie__video__btn">
                                    <a href="#" class="btn btn-video"></a>
                                </div>
                                <div class="movie__video__thumb">
                                    <div class="movie__video__wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video_frame_image.jpg" class="img-fluid" width="940"
                                            height="564" alt="youtube-thumbnail" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="movie__video-btn">
                                <a href="#" class="btn-primary">紹介動画一覧</a>
                            </div>
                        </div>
                        <p class="movie__ttl">Carica US</p>
                        <p class="movie__text">動画タイトルが入ります。動画タイトルが入ります。動画タイトルが入ります。</p>
                        <p class="movie__para">説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
    
                    <div class="movie__col carica-euro">
                        <div class="movie__page-video">
                            <div class="movie__video -page">
                                <div class="movie__video__item">
                                    <iframe class="youtube-video" width="560" height="315"
                                        src="https://www.youtube.com/embed/RyNgkG9Mli0?enablejsapi=1&version=3&playerapiid=ytplayer&controls=0"
                                        modestbranding="0" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="movie__video__btn">
                                    <a href="#" class="btn btn-video"></a>
                                </div>
                                <div class="movie__video__thumb">
                                    <div class="movie__video__wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video_frame_image.jpg" class="img-fluid" width="940"
                                            height="564" alt="youtube-thumbnail" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="movie__video-btn">
                                <a href="#" class="btn-primary">紹介動画一覧</a>
                            </div>
                        </div>
                        <p class="movie__ttl">Carica EURO</p>
                        <p class="movie__text">動画タイトルが入ります。動画タイトルが入ります。動画タイトルが入ります。</p>
                        <p class="movie__para">説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
                    
                    <div class="movie__col carica-us">
                        <div class="movie__page-video">
                            <div class="movie__video -page">
                                <div class="movie__video__item">
                                    <iframe class="youtube-video" width="560" height="315"
                                        src="https://www.youtube.com/embed/RyNgkG9Mli0?enablejsapi=1&version=3&playerapiid=ytplayer&controls=0"
                                        modestbranding="0" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="movie__video__btn">
                                    <a href="#" class="btn btn-video"></a>
                                </div>
                                <div class="movie__video__thumb">
                                    <div class="movie__video__wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video_frame_image.jpg" class="img-fluid" width="940"
                                            height="564" alt="youtube-thumbnail" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="movie__video-btn">
                                <a href="#" class="btn-primary">紹介動画一覧</a>
                            </div>
                        </div>
                        <p class="movie__ttl">Carica US</p>
                        <p class="movie__text">動画タイトルが入ります。動画タイトルが入ります。動画タイトルが入ります。</p>
                        <p class="movie__para">説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。</p>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    

</main>

<?php get_footer(); ?>