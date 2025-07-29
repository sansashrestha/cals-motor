<?php get_header(); ?>
<main id="main" class="main-bg">
    <div class="pagetitlebar">
        <div class="container">
            <h1 class="pagetitlebar__title">News List</h1>
            <p class="pagetitlebar__subtitle">お知らせ一覧</p>
            <div class="pagetitlebar__img 30%">
                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pagetitlebar/news-list-pagetitlebar-img.jpg" alt="page-title-bar">
            </div>
        </div>
    </div>

<!--breadcrumb-->

<?php custom_breadcrumb(); ?>
    <section class="section news-list">
        <div class="container">
        <div class="filter-list">
            <a href="#" class="filter-list-item active" data-category="all">ALL</a>
            
            <?php
            $taxonomy = 'news_category'; // Your custom taxonomy name

            $categories = get_terms(array(
                'taxonomy'   => $taxonomy,
                'hide_empty' => false, // Adjust this based on whether you want to include empty terms
            ));

            if (!empty($categories) && !is_wp_error($categories)) {
                foreach ($categories as $category) {
                    echo '<a href="#" class="filter-list-item" data-category="' . esc_attr($category->term_id) . '">' . esc_html($category->name) . '</a>';
                }
            }
            ?>
        </div>

            <?php
            // Determine the current page number for pagination
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            ?>
        <div class="news-list__row" id="news-list" data-paged="<?php echo $paged; ?>">

            <?php
            // Prepare arguments for the WP_Query
            $args = array(
                'post_type'      => 'news',
                'post_status'    => 'publish',
                'paged'          => $paged,
                'posts_per_page' => 10,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            );

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
            wp_reset_postdata();
            ?>
        </div>

        <?php if( function_exists('pagination') ) { pagination($news->max_num_pages); } ?>

        </div>

            <!-- <div class="pagination">
                <div class="container">
                    <ul class="pagination__list">
                        <li class="pagination__item -sp -prev">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="12.613" height="9.196"
                                    viewBox="0 0 12.613 9.196">
                                    <g id="Group_24064" data-name="Group 24064" transform="translate(1161.626 0.707)">
                                        <g id="Group_23441" data-name="Group 23441" transform="translate(-1160.919 0)">
                                            <path id="Path_9127" data-name="Path 9127" d="M0,5.5V0H5.5"
                                                transform="translate(0 3.89) rotate(-45)" fill="none" stroke="#222"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                            <line id="Line_501" data-name="Line 501" x1="10.358"
                                                transform="translate(1.048 3.89)" fill="none" stroke="#222"
                                                stroke-linecap="round" stroke-width="1" />
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li class="pagination__item -active"><a href="#">1</a></li>
                        <li class="pagination__item"><a href="#">2</a></li>
                        <li class="pagination__item"><a href="#">3</a></li>
                        <li class="pagination__item"><a href="#">4</a></li>
                        <li class="pagination__item -dots"><a>…</a></li>
                        <li class="pagination__item"><a href="#">5</a></li>
                        <li class="pagination__item -sp -next">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.613" height="9.196" viewBox="0 0 12.613 9.196">
                                    <g id="Group_24063" data-name="Group 24063" transform="translate(-1149 -499.464)">
                                    <g id="Group_23441" data-name="Group 23441" transform="translate(1149.5 500.171)">
                                        <path id="Path_9127" data-name="Path 9127" d="M0,0V5.5H5.5" transform="translate(7.515 7.782) rotate(-135)" fill="none" stroke="#222" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                        <line id="Line_501" data-name="Line 501" x2="10.358" transform="translate(0 3.891)" fill="none" stroke="#222" stroke-linecap="round" stroke-width="1"/>
                                    </g>
                                    </g>
                                </svg>
                                
                            </a>
                        </li>
                    </ul>
                </div>
            </div> -->


        </div>
    </section>
</main>

<?php get_footer(); ?>