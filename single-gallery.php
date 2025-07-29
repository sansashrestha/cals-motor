<?php get_header(); ?>

<main id="main" class="main">
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
    <section class="section gallery">
        <div class="container">
            <div class="gallery__wrapper">
                <div class="gallery-left">
                    
                    <div class="gallery__top">
                        <span class="gallery__tag">
                        <?php 
                            $gallery_cat = get_the_terms($post->ID, 'gallery_category');
                            if (!empty($gallery_cat) && !is_wp_error($gallery_cat)) {
                                foreach ($gallery_cat as $cat) {
                                    echo '<span class="single-category">' . esc_html($cat->name) . '</span> ';
                                }
                            }
                            ?>
                        </span>
                        <span class="gallery__date"><?php echo get_the_date('y/m/d'); ?></span>
                    </div>

                    <h2 class="page-ttl -start"><?php the_title(); ?></h2>

                    <div class="gallery__post">
                        <h3 class="gallery__post-ttl">東京都　T.A<span>様</span></h3>

                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('large', ['class' => 'img-fluid', 'loading' => 'lazy']); ?>
                        <?php endif; ?>
                    </div>

                    <div class="gallery-social">
                        <a href="#" class="gallery-social__link -black">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/twitter.svg" alt="TWITTER" class="img-fluid" width="18" height="18" loading="lazy">
                        </a>
                        <a href="#" class="gallery-social__link -drk-blue">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/facebook.svg" alt="FACEBOOK" class="img-fluid" width="18" height="18" loading="lazy">
                        </a>
                        <a href="#" class="gallery-social__link -blue">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/hatena-bookmark.svg" alt="HATENA BOOKMARK" class="img-fluid" width="18" height="18" loading="lazy">
                        </a>
                        <a href="#" class="gallery-social__link -red">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/pocket.svg" alt="POCKET" class="img-fluid" width="20" height="18" loading="lazy">
                        </a>
                        <a href="#" class="gallery-social__link -green">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/line.svg" alt="LINE" class="img-fluid" width="18" height="18" loading="lazy">
                        </a>
                    </div>

                    <div class="gallery-nav">
                        <a href="#" class="gallery-nav-link">
                            <p class="gallery-nav-link__ttl d-none d-md-block">前の記事タイトル</p>
                            <span class="gallery-nav-link__bot -left">前の記事へ</span>
                        </a>

                        <a href="#" class="gallery-nav-link -no-link">
                            <p class="gallery-nav-link__ttl d-none d-md-block">次の記事タイトル</p>
                            <span class="gallery-nav-link__bot -right">次の記事へ</span>
                        </a>
                    </div>

                    <div class="gallery__btn">
                        <a href="#" class="btn-primary">一覧に戻る</a>
                    </div>
                </div>
                
                <div class="gallery-right">
                    <!-- FOR FUTURE -->
                    <!-- <div class="gallery__banner">
                        <div class="gallery__banner-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/page/banner/gallery-banner-img-1.jpg" alt="" class="img-fluid" width="240" height="240" loading="lazy">
                        </div>
                        <div class="gallery__banner-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/page/banner/gallery-banner-img-1.jpg" alt="" class="img-fluid" width="240" height="240" loading="lazy">
                        </div>
                    </div> -->

                    <div class="gallery-article">
                        <h4 class="heading__forth">関連記事</h4>
                        
                        <div class="gallery-article__list">

                            <a href="#" class="gallery-article__item">
                                <div class="gallery-article__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/page/article/gallary-article-img-1.jpg" alt="" class="img-fluid" width="90" height="90" loading="lazy">
                                </div>

                                <p class="gallery-article__txt">関連記事タイトルが入ります。</p>
                            </a>

                            <a href="#" class="gallery-article__item">
                                <div class="gallery-article__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/page/article/gallary-article-img-2.jpg" alt="" class="img-fluid" width="90" height="90" loading="lazy">
                                </div>

                                <p class="gallery-article__txt">関連記事タイトルが入ります。</p>
                            </a>

                            <a href="#" class="gallery-article__item">
                                <div class="gallery-article__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/page/article/gallary-article-img-3.jpg" alt="" class="img-fluid" width="90" height="90" loading="lazy">
                                </div>

                                <p class="gallery-article__txt">関連記事タイトルが入ります。</p>
                            </a>

                            <a href="#" class="gallery-article__item">
                                <div class="gallery-article__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/page/article/gallary-article-img-4.jpg" alt="" class="img-fluid" width="90" height="90" loading="lazy">
                                </div>

                                <p class="gallery-article__txt">関連記事タイトルが入ります。</p>
                            </a>
                            
                            <a href="#" class="gallery-article__item">
                                <div class="gallery-article__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/page/article/gallary-article-img-5.jpg" alt="" class="img-fluid" width="90" height="90" loading="lazy">
                                </div>

                                <p class="gallery-article__txt">関連記事タイトルが入ります。</p>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>
<?php get_footer(); ?>