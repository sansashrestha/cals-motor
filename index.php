<?php

/**
 * The main template file
 *
 */

get_header();
?>


<div class="main-wrapper">
    <main class="main main-white" id="main">
        <!-- Hero section -->
        <div class="hero-wpr">
            <div class="hero">
                <div class="hero-mv" data-pc="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/mv-vid.mp4" data-sp="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/mv-vid-sp.mp4">
                    <video class="hero-mv__vid" autoplay muted loop playsinline>
                        <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/mv-vid.mp4" type="video/mp4" />
                    </video>
                </div>
            </div>
        </div>

        <!--about-->
        <section class="section about scroll-parallax -top" id="about">
            <div class="about__wrapper scroll-parallax-body">
                <div class="about__contents">
                    <div class="container">
                        <div class="about__row sticky-fade-up">
                            <div class="about__col">
                                <h2 class="heading__primary"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/about-heading.svg" alt="憧れが、止まらない。" class="img-fluid" width="500" height="44" loading="lazy"></h2>
                            </div>

                            <div class="about__col">
                                <!-- <p class="section-desc">クルマが未来に向かって、突き進んでる。<br>動力が変わる。運転方法が変わる。デザインが変わっていく。<br>望むと望まざるとにかかわらず、時代に押し進められてゆく<br class="d-none d-lg-block">クルマのあり方に、いまアルパインスタイルは我々なりの意志を<br>ぶつけたい。時代を、破れ。<br>これまでの自動車文化のすべてに価値があると考え、<br class="d-none d-lg-block">時代に対する先入観をまず我々から破り、<br class="d-none d-lg-block">これから乗りたいと本心から思うクルマを創造する。</p> -->

                                <p class="section-desc">打ち破った時代も、<br class="d-md-none">恋焦がれてきた憧れも凌駕する<br>いつまでも色褪せない新時代の<br class="d-md-none">California Dreamin’を手に入れるために。<br><br>単に古き良きなだけではなく、<br class="d-md-none">多様なライフスタイルに寄り添いつつ<br>移動手段としてのクルマを凌駕した、<br class="d-md-none">憧れと喜びとが融合した愛車へ。<br><br>それは自由で遊び心あふれる、<br class="d-md-none">ジャパンメイドのカリフォルニアスタイル。</p>

                                <a href="#" class="btn-primary">私たちについて</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about__slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="about__slider-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/about01.jpg" alt="about01" class="img-fluid" width="240" height="240" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__slider-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/about02.jpg" alt="about02" class="img-fluid" width="240" height="240" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__slider-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/about03.jpg" alt="about01" class="img-fluid" width="240" height="240" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__slider-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/about02.jpg" alt="about02" class="img-fluid" width="240" height="240" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__slider-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/about04.jpg" alt="about01" class="img-fluid" width="240" height="240" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__slider-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/about05.jpg" alt="about02" class="img-fluid" width="240" height="240" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__slider-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/about06.jpg" alt="about01" class="img-fluid" width="240" height="240" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__slider-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/about07.jpg" alt="about02" class="img-fluid" width="240" height="240" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__slider-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/about08.jpg" alt="about01" class="img-fluid" width="240" height="240" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__slider-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/about09.jpg" alt="about02" class="img-fluid" width="240" height="240" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__slider-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/about10.jpg" alt="about01" class="img-fluid" width="240" height="240" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__slider-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/about11.jpg" alt="about02" class="img-fluid" width="240" height="240" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__slider-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/about12.jpg" alt="about01" class="img-fluid" width="240" height="240" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__slider-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/about01.jpg" alt="about02" class="img-fluid" width="240" height="240" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__slider-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/about02.jpg" alt="about01" class="img-fluid" width="240" height="240" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__slider-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/about01.jpg" alt="about02" class="img-fluid" width="240" height="240" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__slider-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/about02.jpg" alt="about01" class="img-fluid" width="240" height="240" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__slider-img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/about01.jpg" alt="about02" class="img-fluid" width="240" height="240" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- parallax -->
        <section class="parallax-section">
            <div class="parallax-image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/about-main.jpg)">
            </div>
        </section>

        <!--product-->
        <section class="section product" id="product">
            <div class="product__wrapper">
                <div class="product__contents">
                    <div class="product__row">
                        <div class="product__col">
                            <h2 class="heading__primary fade-up">Products<span>車種一覧</span></h2>
                        </div>
                        <div class="product__col">
                            <p class="product__col fade-up">青い海に青い空、<br class="d-md-none">サーフサウンドが流れる西海岸<br>Cal’s
                                Motorの根幹にあるのは、<br class="d-md-none">旧き良きカリフォルニアで生まれたカーカルチャー<br>鮮やかなボディ、煌めくメッキ、<br class="d-md-none">当時のキャルルックを彷彿とさせる<br class="d-md-none">逆スラントフェイス<br>現代のクルマにはない、<br class="d-md-none">ヴィンテージ・フィールを味わえる
                            </p>
                        </div>
                    </div>
                </div>

                <div class="product__cards-wrapper">
                    <div class="product__cards -lg">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#" class="product__card">
                                    <div class="product__card-inner">
                                        <div class="product__img">
                                            <picture>
                                                <source media="(max-width: 767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/products/image-sp1.jpg">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/products/image1.jpg" alt="Carica US Style" width="1000" height="606" class="img-fluid" loading="eager">
                                            </picture>
                                        </div>
                                    </div>
                                </a>
                            </div>
        
                            <div class="swiper-slide">
                                <a href="#" class="product__card -gray">
                                    <div class="product__card-inner">
                                        <div class="product__img">
                                            <picture>
                                                <source media="(max-width: 767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/products/image-sp2.jpg">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/products/image2.jpg" alt="Carica EURO Style" width="1000" height="606" class="img-fluid" loading="eager">
                                            </picture>
                                        </div>
                                    </div>
                                </a>
                            </div>
        
                            <div class="swiper-slide">
                                  <a href="#" class="product__card -blue">
                                    <div class="product__card-inner">
                                        <div class="product__img">
                                            <picture>
                                                <source media="(max-width: 767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/products/image-sp3.jpg">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/products/image3.jpg" alt="Havana" width="1000" height="606" class="img-fluid" loading="eager">
                                            </picture>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                 <a href="#" class="product__card">
                                    <div class="product__card-inner">
                                        <div class="product__img">
                                            <picture>
                                                <source media="(max-width: 767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/products/image-sp4.jpg">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/products/image4.jpg" alt="Carica US Style" width="1000" height="606" class="img-fluid" loading="eager">
                                            </picture>
                                        </div>
                                    </div>
                                </a>
                            </div>
        
                            <div class="swiper-slide">
                                <a href="#" class="product__card -gray">
                                    <div class="product__card-inner">
                                        <div class="product__img">
                                            <picture>
                                                <source media="(max-width: 767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/products/image-sp5.jpg">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/products/image5.jpg" alt="Carica EURO Style" width="1000" height="606" class="img-fluid" loading="eager">
                                            </picture>
                                        </div>
                                    </div>
                                </a>
                            </div>
        
                            <div class="swiper-slide">
                                 <a href="#" class="product__card -blue">
                                    <div class="product__card-inner">
                                        <div class="product__img">
                                            <picture>
                                                <source media="(max-width: 767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/products/image-sp6.jpg">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/products/image6.jpg" alt="Havana" width="1000" height="606" class="img-fluid" loading="eager">
                                            </picture>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="product__pagination-wpr">
                            <div class="product__cards-swiper-prev"></div>
                            <div class="product__cards-swiper-pagination"></div>
                            <div class="product__cards-swiper-next"></div>
                        </div>
                        
                         <div class="product__btn fade-up">
                            <a href="#" class="btn-primary">車種一覧を見る</a>
                        </div>
                         <div class="product__txt">
                            <svg xmlns="http://www.w3.org/2000/svg" width="149.76" height="816.4" viewBox="0 0 149.76 816.4">
                                <path d="M11.44,0H40.56V-56.368H54.288c29.328,0,43.264-12.9,43.264-40.352v-8.736c0-27.248-13.936-40.144-43.264-40.144H11.44ZM40.56-81.744v-38.48H54.288c9.984,0,14.144,4.368,14.144,14.768v8.736c0,10.608-4.16,14.976-14.144,14.976ZM114.816,0h29.12V-58.24h9.984c13.52,0,18.3,4.992,18.3,18.928v18.928c0,14.352.832,16.432,2.5,20.384h29.744c-2.912-6.24-3.328-12.064-3.328-20.176V-37.232c0-20.8-5.824-31.616-19.136-35.152v-.624c12.9-4.992,18.928-14.56,18.928-29.952v-5.616c0-25.168-13.936-37.024-43.056-37.024H114.816Zm29.12-83.616v-36.608h13.728c9.776,0,14.144,4.576,14.144,14.768v5.616c0,11.232-5.2,16.224-17.264,16.224ZM264.368,2.08c28.5,0,44.1-15.6,44.1-42.016v-65.728c0-26.416-15.6-42.016-44.1-42.016s-44.1,15.6-44.1,42.016v65.728C220.272-13.52,235.872,2.08,264.368,2.08Zm0-25.376c-9.776,0-14.976-5.824-14.976-15.6V-106.7c0-9.776,5.2-15.6,14.976-15.6s14.976,5.824,14.976,15.6V-38.9C279.344-29.12,274.144-23.3,264.368-23.3ZM329.056,0h44.3c28.288,0,43.472-14.352,43.472-41.184v-63.232c0-26.832-15.184-41.184-43.472-41.184h-44.3Zm29.12-25.376v-94.848h14.768c10.4,0,14.768,4.576,14.768,15.392v64.064c0,10.816-4.368,15.392-14.768,15.392ZM479.44,2.08c28.5,0,43.472-15.6,43.472-42.016V-145.6h-28.08V-38.272c0,9.984-4.992,14.976-14.768,14.976S465.3-28.288,465.3-38.272V-145.6h-29.12V-39.936C436.176-13.52,450.944,2.08,479.44,2.08Zm105.872,0c27.456,0,42.64-14.976,42.64-42.016V-54.7H600.5V-38.9c0,10.608-5.2,16.432-14.56,16.432-9.152,0-14.352-5.824-14.352-16.432V-106.7c0-10.608,5.2-16.432,14.352-16.432,9.36,0,14.56,5.824,14.56,16.432v11.648h27.456v-10.608c0-27.04-15.184-42.016-42.64-42.016s-42.848,14.976-42.848,42.016v65.728C542.464-12.9,557.856,2.08,585.312,2.08ZM670.176,0H699.3V-120.224h30.368V-145.6H639.808v25.376h30.368ZM783.952,2.08c28.5,0,43.888-16.016,43.888-40.56,0-20.8-6.24-33.7-31.824-45.968-19.552-9.36-25.168-12.688-25.168-23.92,0-8.944,5.2-14.768,14.144-14.768,10.192,0,14.352,6.656,14.352,15.808v3.952H826.8v-4.16c0-24.128-13.936-40.144-42.016-40.144s-43.056,16.016-43.056,39.728c0,20.384,7.28,32.864,32.24,44.928,19.76,9.568,24.752,12.688,24.752,25.168,0,9.776-6.032,15.392-15.184,15.392-10.4,0-14.976-6.448-14.976-15.392V-44.3H741.1v6.448C741.1-13.936,755.456,2.08,783.952,2.08Z" transform="translate(2.08 -11.44) rotate(90)" fill="#5da097" opacity="0.3" style="mix-blend-mode:multiply;isolation:isolate" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- banner -->
        <section class="section banner">
            <div class="container">
                <a href="https://cals-motor.jp/store/" class="banner__link fade-up">
                    <picture>
                        <!-- Source for larger screens (greater than 576px) -->
                        <source srcset="https://cals-motor.jp/wp-content/themes/cals-motor/assets/img/banner/pc-banner.jpg" media="(min-width: 576px)">
                        <!-- Fallback for smaller screens (less than 576px) -->
                        <img src="https://cals-motor.jp/wp-content/themes/cals-motor/assets/img/banner/sp-banner.jpg" alt="Responsive Banner" class="img-fluid">
                    </picture>
                </a>
            </div>
        </section>

        <!--movie-->
        <section class="movie -bgcover" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/movie_background_img.jpg);">
            <div class="container">
                <div class="title__head">
                    <h2 class="heading__primary -white">Movie<span>紹介動画</span></h2>
                </div>
    
                <div class="movie__video -vid">
                    <div class="movie__video__item">
                        <!-- !!! READ IMPORTANT !!! -->
                        <!-- Replace the id of the video only.. -> ../embed/ID" -->
                        <!-- <iframe class="youtube-video" width="560" height="315" src="https://www.youtube.com/embed/RyNgkG9Mli0?enablejsapi=1&version=3&playerapiid=ytplayer&controls=0" modestbranding="0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
    
                        <!-- <video src="@webRoot/assets/video/movie-vid.mp4" class="youtube-video"></video> -->
    
                        <video class="youtube-video">
                            <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/movie-vid.mp4" type="video/mp4" />
                        </video>
                    </div>
                    <div class="movie__video__btn">
                        <a href="#" class="btn btn-video"></a>
                    </div>
                    <div class="movie__video__thumb -top">
                        <div class="movie__video__wrapper">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/movie/pause-thumb.png" class="img-fluid" width="940" height="564" alt="youtube-thumbnail" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="movie__video-btn">
                    <a href="#" class="btn-primary">紹介動画一覧</a>
                </div>
            </div>
        </section>

        <!--gallery-->
        <section class="section owner-gallery" id="owner-gallery">
            <div class="container">
                <div class="owner-gallery__wrapper">
                    <h2 class="heading__primary -center fade-up">Owner’s Gallery<span>お客様の声</span></h2>
                    <div class="owner-gallery__swiper">
                        <div class="swiper-wrapper">
                        <?php
                        // Determine the current page number for pagination
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        // Prepare arguments for the WP_Query
                        $args = array(
                            'post_type'      => 'gallery', // Replace 'gallery' with your custom post type if different
                            'post_status'    => 'publish',
                            'paged'          => $paged,
                            'posts_per_page' => 5, // Adjust the number of posts per page as needed
                            'orderby'        => 'menu_order',
                            'order'          => 'ASC',
                        );

                        // Execute the query
                        $gallery = new WP_Query($args);

                        // The Loop
                        if ($gallery->have_posts()) :
                            while ($gallery->have_posts()) : $gallery->the_post(); ?>
                            <div class="swiper-slide">
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

                            <!-- <div class="swiper-slide">
                                <a href="#" class="owner-gallery__card">
                                    <div class="owner-gallery__card__img">
                                        <figure>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gallery-img-1.jpg" alt="CARICA US STYLE" class="img-fluid" width="300" height="250">
                                            <figcaption class="caption">Carica US Style</figcaption>
                                        </figure>
                                        <span class="read-more">続きを読む</span>
                                    </div>
                                    <p class="owner-gallery__card__txt">東京都 T.A<span>様</span></p>
                                </a>
                            </div> -->
                            <!-- <div class="swiper-slide">
                                <a href="#" class="owner-gallery__card">
                                    <div class="owner-gallery__card__img">
                                        <figure>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gallery-img-2.jpg" alt="CARICA US STYLE" class="img-fluid" width="300" height="250">
                                            <figcaption class="caption">Carica US Style</figcaption>
                                        </figure>
                                        <span class="read-more">続きを読む</span>
                                    </div>
                                    <p class="owner-gallery__card__txt">東京都 T.A<span>様</span></p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="owner-gallery__card">
                                    <div class="owner-gallery__card__img">
                                        <figure>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gallery-img-1.jpg" alt="CARICA US STYLE" class="img-fluid" width="300" height="250">
                                            <figcaption class="caption">Carica US Style</figcaption>
                                        </figure>
                                        <span class="read-more">続きを読む</span>
                                    </div>
                                    <p class="owner-gallery__card__txt">東京都 T.A<span>様</span></p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="owner-gallery__card">
                                    <div class="owner-gallery__card__img">
                                        <figure>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gallery-img-3.jpg" alt="CARICA US STYLE" class="img-fluid" width="300" height="250">
                                            <figcaption class="caption">Carica US Style</figcaption>
                                        </figure>
                                        <span class="read-more">続きを読む</span>
                                    </div>
                                    <p class="owner-gallery__card__txt">東京都 T.A<span>様</span></p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="owner-gallery__card">
                                    <div class="owner-gallery__card__img">
                                        <figure>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gallery-img-1.jpg" alt="CARICA US STYLE" class="img-fluid" width="300" height="250">
                                            <figcaption class="caption">Carica US Style</figcaption>
                                        </figure>
                                        <span class="read-more">続きを読む</span>
                                    </div>
                                    <p class="owner-gallery__card__txt">東京都 T.A<span>様</span></p>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="owner-gallery__card">
                                    <div class="owner-gallery__card__img">
                                        <figure>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gallery-img-2.jpg" alt="CARICA US STYLE" class="img-fluid" width="300" height="250">
                                            <figcaption class="caption">Carica US Style</figcaption>
                                        </figure>
                                        <span class="read-more">続きを読む</span>
                                    </div>
                                    <p class="owner-gallery__card__txt">東京都 T.A<span>様</span></p>
                                </a>
                            </div> -->
                        </div>
                        <div class="owner-gallery__pagination-wpr">
                            <div class="owner-gallery__swiper-prev"></div>
                            <div class="owner-gallery__swiper-pagination"></div>
                            <div class="owner-gallery__swiper-next"></div>
                        </div>
                       
                    </div>
                    <div class="owner-gallery__btn gallery-btn fade-up">
                        <a href="#" class="btn-primary">お客様の声を見る</a>
                    </div>
                    <!-- <div class="owner-gallery__slider-outer gallary-scroll">
                        <div class="owner-gallery__slider-sticky">
                            <div class="owner-gallery__slider-inner">
                                <div class="owner-gallery__slider">
                                    <div class="owner-gallery__slider-wrapper gallary-scroll-slider">
                                        <a href="#" class="owner-gallery__card gallary-scroll-card">
                                            <div class="owner-gallery__card__img">
                                                <figure>
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gallery-img-1.jpg" alt="CARICA US STYLE" class="img-fluid" width="300" height="250">
                                                    <figcaption class="caption">Carica US Style</figcaption>
                                                </figure>
                                                <span class="read-more">続きを読む</span>
                                            </div>

                                            <p class="owner-gallery__card__txt">東京都 T.A<span>様</span></p>
                                        </a>

                                        <a href="#" class="owner-gallery__card gallary-scroll-card">
                                            <div class="owner-gallery__card__img">
                                                <figure>
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gallery-img-2.jpg" alt="CARICA EURO STYLE" class="img-fluid" width="300" height="250">
                                                    <figcaption class="caption">Carica EURO Style</figcaption>
                                                </figure>
                                                <span class="read-more">続きを読む</span>
                                            </div>

                                            <p class="owner-gallery__card__txt">東京都 T.A<span>様</span></p>
                                        </a>

                                        <a href="#" class="owner-gallery__card gallary-scroll-card">
                                            <div class="owner-gallery__card__img">
                                                <figure>
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gallery-img-3.jpg" alt="HAVANA" class="img-fluid" width="300" height="250">
                                                    <figcaption class="caption">Havana</figcaption>
                                                </figure>
                                                <span class="read-more">続きを読む</span>
                                            </div>

                                            <p class="owner-gallery__card__txt">東京都 T.A<span>様</span></p>
                                        </a>

                                        <a href="#" class="owner-gallery__card gallary-scroll-card">
                                            <div class="owner-gallery__card__img">
                                                <figure>
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gallery-img-1.jpg" alt="CARICA US STYLE" class="img-fluid" width="300" height="250">
                                                    <figcaption class="caption">Carica US Style</figcaption>
                                                </figure>
                                                <span class="read-more">続きを読む</span>
                                            </div>

                                            <p class="owner-gallery__card__txt">東京都 T.A<span>様</span></p>
                                        </a>

                                        <a href="#" class="owner-gallery__card gallary-scroll-card">
                                            <div class="owner-gallery__card__img">
                                                <figure>
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gallery-img-2.jpg" alt="CARICA EURO STYLE" class="img-fluid" width="300" height="250">
                                                    <figcaption class="caption">Carica EURO Style</figcaption>
                                                </figure>
                                                <span class="read-more">続きを読む</span>
                                            </div>

                                            <p class="owner-gallery__card__txt">東京都 T.A<span>様</span></p>
                                        </a>

                                        <a href="#" class="owner-gallery__card gallary-scroll-card">
                                            <div class="owner-gallery__card__img">
                                                <figure>
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gallery-img-3.jpg" alt="HAVANA" class="img-fluid" width="300" height="250">
                                                    <figcaption class="caption">Havana</figcaption>
                                                </figure>
                                                <span class="read-more">続きを読む</span>
                                            </div>

                                            <p class="owner-gallery__card__txt">東京都 T.A<span>様</span></p>
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div class="owner-gallery__btn gallery-btn fade-up">
                                <a href="#" class="btn-primary">お客様の声を見る</a>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="owner-gallery__btn scroll-content">
                        <a href="#" class="btn-primary">お客様の声を見る</a>
                    </div> -->
                </div>
            </div>
        </section>

        <!--insta-->
        <section class="section insta">
            <div class="insta-bg" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/insta/insta-palm-tree.png)">
            </div>
            <div class="container">
                <div class="title__head">
                    <h2 class="heading__primary -white fade-up">Instagram<span>インスタグラム</span></h2>
                </div>

                <div class="insta__img fade-up">
                    <picture>
                        <source media="(max-width:767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/insta/insta-pic-sp.png">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/insta/insta-img.png" alt="Instagram" width="940" height="460" class="img-fluid" loading="lazy">
                    </picture>
                </div>

                <div class="insta__btn fade-up">
                    <a href="#" target="_blank" rel="noopener noreferrer" class="btn-primary -white">Instagramで開く</a>
                </div>
            </div>
        </section>

        <!--news-->
        <section class="section news">
            <div class="news__wrapper scale-content">

                <div class="news-fixed scale-wrapper">
                    <div class="news-fixed-img scale-img">
                        <picture>
                            <source media="(max-width:575px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/insta/insta-btm-sp.jpg">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/insta/insta-btm.jpg" alt="Instagram" width="1320" height="350" class="img-fluid">
                        </picture>
                    </div>
                </div>

                <div class="news-body">
                    <div class="container">
                        <div class="news-body__wrapper">
                            <h2 class="heading__primary -center fade-up">News<span>お知らせ</span></h2>

                            <div class="news-content">
                                <div class="news-content__row">


                                <?php
                                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                                $args = array(
                                    'post_type'              => array( 'news' ),
                                    'post_status'            => array( 'publish' ),
                                    'paged'                  =>  $paged,
                                    'posts_per_page'         => 3,
                                    'orderby' => 'menu_order',
                                    'order' => 'ASC',
                                );
                                // The Query
                                $news = new WP_Query( $args );

                                // The Loop
                                if ( $news->have_posts() ) {
                                    while ( $news->have_posts() ) {
                                        $news->the_post(); ?>
                                        <div class="news-content__col fade-up" data-delay="0.1s">
                                            <a href="<?php the_permalink(); ?>" class="news-content-card">

                                            <?php  if( has_post_thumbnail() ): ?>
                                                <div class="news-content-card__img">
                                                    <?php the_post_thumbnail('thumbnail'); ?>
                                                </div>
                                            <?php endif; ?>

                                                <div class="news-content-card__desc">
                                                    <p class="news-content-card__info">
                                                        <span class="news-content-card__date"><?php echo get_the_date("Y.m.d"); ?></span>
                                                        <span class="news-content-card__tag">
                                                            <?php 
                                                            $news_cat = get_the_terms( $post->ID, 'news_category' );
                                                            if ( ! empty( $news_cat ) && ! is_wp_error( $news_cat ) ) {
                                                                foreach ( $news_cat as $cat ) {
                                                                    echo '<span class="single-category">' . esc_html( $cat->name ) . '</span> ';
                                                                }
                                                            }
                                                            ?>
                                                        </span>
                                                    </p>

                                                    <p class="news-content-card__desc-text"><?php the_content(); ?></p>

                                                </div>
                                            </a>
                                        </div>
                                    <?php }
                                } 
                                // Restore original Post Data
                                wp_reset_postdata();
                            ?>

                                </div>
                            </div>

                            <div class="news-body__btn fade-up">
                                <a href="<?php echo home_url(); ?>/news" class="btn-primary -center">お知らせ一覧</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="footer-parallax">
        <div class="footer-parallax-body">
            <!--cta-->
            <section class="section cta -sticky">
                <div class="cta__wpr">
                    <a href="@@webRoot/store" class="cta__inner">
                        <div class="cta__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cta/store.jpg" alt="店舗紹介" width="660" height="320" class="img-fluid" loading="lazy">
                        </div>
                        <p class="cta__txt">Store<span>店舗紹介</span></p>
                    </a>
                    <a href="@@webRoot/faq" class="cta__inner -ovlay-green">
                        <div class="cta__img">
                            <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cta/product-faq.jpg" alt="よくある質問" width="660" height="320" class="img-fluid" loading="lazy"> -->
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cta/product-faq.jpg" alt="よくある質問" width="660" height="320" class="img-fluid" loading="lazy">
                        </div>
                        <p class="cta__txt">FAQ<span>よくある質問</span></p>
                    </a>
                </div>
            </section>

<?php get_footer(); ?>