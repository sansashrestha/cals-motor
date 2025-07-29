<?php get_header(); ?>
<main id="main" class="main-bg">
    <div class="pagetitlebar">
    <div class="container">
        <h1 class="pagetitlebar__title">Owner’s Gallery List</h1>
        <p class="pagetitlebar__subtitle">お客様の声一覧</p>
        <div class="pagetitlebar__img ">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/pagetitlebar/owner-gallery-pagetitlebar-img.jpeg" alt="page-title-bar">
        </div>
    </div>
</div>

    <!--breadcrumb-->
    <?php custom_breadcrumb(); ?>
    <section class="section gallery-list">
        <div class="container">
            <h2 class="page-ttl">オーナー様の声をお届けします。</h2>

            <div class="filter-list">
            <a href="#" class="filter-list-item active" data-category="all">All</a>
                <?php
                $categories = get_terms(array(
                    'taxonomy' => 'gallery_category',
                    'hide_empty' => false,
                ));
                if (!empty($categories)) {
                    foreach ($categories as $category) {
                        echo '<a href="#" class="filter-list-item" data-category="' . esc_attr($category->term_id) . '">' . esc_html($category->name) . '</a>';
                    }
                }
                ?>
            </div>

            <div class="gallery-list-row" id="gal-list">

                <?php
                // Determine the current page number for pagination
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                // Prepare arguments for the WP_Query
                $args = array(
                    'post_type'      => 'gallery', // Replace 'gallery' with your custom post type if different
                    'post_status'    => 'publish',
                    'paged'          => $paged,
                    'posts_per_page' => 10, // Adjust the number of posts per page as needed
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC',
                );

                // Execute the query
                $gallery = new WP_Query($args);

                // The Loop
                if ($gallery->have_posts()) :
                    while ($gallery->have_posts()) : $gallery->the_post(); ?>
                    <div class="gallery-list-col">
                        <a href="<?php the_permalink(); ?>" class="owner-gallery__card">
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
                    wp_reset_postdata();
                    ?>
                    

                        <!-- <div class="gallery-list-col">
                            <a href="#" class="owner-gallery__card">
                                <div class="owner-gallery__card__img">
                                    <figure>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gallery-img-1.jpg" alt="CARICA US STYLE"
                                            class="img-fluid" width="300" height="250">
                                        <figcaption class="caption">Carica US Style</figcaption>
                                    </figure>
                                    <span class="read-more">続きを読む</span>
                                </div>

                                <p class="owner-gallery__card__txt">東京都 T.A<span>様</span></p>
                            </a>
                        </div>
                        <div class="gallery-list-col">
                            <a href="#" class="owner-gallery__card">
                                <div class="owner-gallery__card__img">
                                    <figure>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gallery-img-1.jpg" alt="CARICA US STYLE"
                                            class="img-fluid" width="300" height="250">
                                        <figcaption class="caption">Carica US Style</figcaption>
                                    </figure>
                                    <span class="read-more">続きを読む</span>
                                </div>

                                <p class="owner-gallery__card__txt">東京都 T.A<span>様</span></p>
                            </a>
                        </div>
                        <div class="gallery-list-col">
                            <a href="#" class="owner-gallery__card">
                                <div class="owner-gallery__card__img">
                                    <figure>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gallery-img-1.jpg" alt="CARICA US STYLE"
                                            class="img-fluid" width="300" height="250">
                                        <figcaption class="caption">Carica US Style</figcaption>
                                    </figure>
                                    <span class="read-more">続きを読む</span>
                                </div>

                                <p class="owner-gallery__card__txt">東京都 T.A<span>様</span></p>
                            </a>
                        </div>
                        <div class="gallery-list-col">
                            <a href="#" class="owner-gallery__card">
                                <div class="owner-gallery__card__img">
                                    <figure>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gallery-img-1.jpg" alt="CARICA US STYLE"
                                            class="img-fluid" width="300" height="250">
                                        <figcaption class="caption">Carica US Style</figcaption>
                                    </figure>
                                    <span class="read-more">続きを読む</span>
                                </div>

                                <p class="owner-gallery__card__txt">東京都 T.A<span>様</span></p>
                            </a>
                        </div>
                        <div class="gallery-list-col">
                            <a href="#" class="owner-gallery__card">
                                <div class="owner-gallery__card__img">
                                    <figure>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gallery-img-1.jpg" alt="CARICA US STYLE"
                                            class="img-fluid" width="300" height="250">
                                        <figcaption class="caption">Carica US Style</figcaption>
                                    </figure>
                                    <span class="read-more">続きを読む</span>
                                </div>

                                <p class="owner-gallery__card__txt">東京都 T.A<span>様</span></p>
                            </a>
                        </div>
                        <div class="gallery-list-col">
                            <a href="#" class="owner-gallery__card">
                                <div class="owner-gallery__card__img">
                                    <figure>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gallery-img-1.jpg" alt="CARICA US STYLE"
                                            class="img-fluid" width="300" height="250">
                                        <figcaption class="caption">Carica US Style</figcaption>
                                    </figure>
                                    <span class="read-more">続きを読む</span>
                                </div>

                                <p class="owner-gallery__card__txt">東京都 T.A<span>様</span></p>
                            </a>
                        </div>
                        <div class="gallery-list-col">
                            <a href="#" class="owner-gallery__card">
                                <div class="owner-gallery__card__img">
                                    <figure>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gallery-img-1.jpg" alt="CARICA US STYLE"
                                            class="img-fluid" width="300" height="250">
                                        <figcaption class="caption">Carica US Style</figcaption>
                                    </figure>
                                    <span class="read-more">続きを読む</span>
                                </div>

                                <p class="owner-gallery__card__txt">東京都 T.A<span>様</span></p>
                            </a>
                        </div>
                        <div class="gallery-list-col">
                            <a href="#" class="owner-gallery__card">
                                <div class="owner-gallery__card__img">
                                    <figure>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gallery-img-1.jpg" alt="CARICA US STYLE"
                                            class="img-fluid" width="300" height="250">
                                        <figcaption class="caption">Carica US Style</figcaption>
                                    </figure>
                                    <span class="read-more">続きを読む</span>
                                </div>

                                <p class="owner-gallery__card__txt">東京都 T.A<span>様</span></p>
                            </a>
                        </div> -->
            </div>
            <?php if( function_exists('pagination') ) { pagination($gallery->max_num_pages); } ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>