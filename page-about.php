<?php
/* 
Template Name: about page
*/

 get_header(); ?>


<main id="main" class="main-bg">
    <div class="pagetitlebar">
    <div class="container">
        <h1 class="pagetitlebar__title">About</h1>
        <p class="pagetitlebar__subtitle">私たちについて</p>
        <div class="pagetitlebar__img ">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pagetitlebar/about-pagetitlebar-img.jpg" alt="page-title-bar">
        </div>
    </div>
</div>

    <!--breadcrumb-->
<?php echo custom_breadcrumb(); ?>
    <section class="section about-brand">
        <div class="container">
            <div class="about-brand__wrapper">
                <h2 class="heading__primary -center">About Cal’s Motor<span class="mt">キャルズモーターについて</span></h2>

                <p class="section-desc -center">
                    2023年1月アルパインスタイルが新たなカスタマイズカーとして・・・<br>文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。<br>文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。<br>文章が入ります。文章が入ります。文章が入ります。文章が入ります。
                </p>

                <div class="about-brand__banner">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/page/about-banner-img.jpg" alt="" class="img-fluid" width="940" height="350" loading="lazy">
                </div>

            </div>
        </div>
    </section>

    <section class="section brand-concept">
        <div class="brand-concept__vid">
            <video preload autoplay playsinline muted loop>
                <source src="../assets/video/brand-comcept.mp4" type="video/mp4">
            </video>
        </div>

        <div class="brand-concept__desc">
            <div class="container">
                <h2 class="heading__primary -center -white">Brand Concept<span class="mt">ブランドコンセプト</span></h2>

                <p class="section-desc -center -fs-lg -white">
                    西海岸、ネオクラシック・・・<br>文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。<br>文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。<br>文章が入ります。文章が入ります。文章が入ります。文章が入ります。
                </p>
            </div>
        </div>
    </section>

    <section class="section brand-products">
        <div class="container">
            <div class="brand-products__wrapper">
                <h2 class="heading__primary -center">Cal’s Motors Products<span class="mt">キャルズモーターのこだわり</span></h2>

                <article class="brand-products__block">
                    <div class="brand-products__subttl">
                        <h3 class="heading__tertiary">所有する喜びをあなたに。<br class="d-md-none">満足できる特別な1台を<br class="d-md-none">提供します。</h3>

                        <p class="section-desc -center">Cal’s Motorは、、、、ネオクラシックデザイン+最新の仕様。<br>文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。</p>
                    </div>


                    <div class="brand-products__banner">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/page/product/about-product-banner-img.jpg" alt="" class="img-fluid" width="940" height="350" loading="lazy">
                    </div>

                    <div class="brand-products-material">
                        <h3 class="heading__secondary -center">Carefully Selected Materials<span>厳選した素材</span></h3>

                        <div class="brand-details">

                            <div class="brand-details__row">
                                <div class="brand-details__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/page/materials/brand-material-img-1.jpg" alt="" class="img-fluid" width="300" height="180" loading="lazy">
                                </div>

                                <div class="brand-details__desc">
                                    <h4 class="heading__forth">Caricaボンネット</h4>

                                    <p class="section-desc"><span>Carica</span>のボンネットにはスチールを採用。一般的なカスタマイズではFRP造形にて製造することの多いボンネットですが、<span>Cal’s Motor</span>では、精度の高い造形と強度を確保することを目的にコストを度外視して型成形によるスチール製を選択。強度やディテールにその差を体感頂けます。</p>
                                </div>
                            </div>

                            <div class="brand-details__row">
                                <div class="brand-details__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/page/materials/brand-material-img-2.jpg" alt="" class="img-fluid" width="300" height="180" loading="lazy">
                                </div>

                                <div class="brand-details__desc">
                                    <h4 class="heading__forth">Caricaバンパー</h4>

                                    <p class="section-desc">ポリプロピレン採用〜〜〜メッキ処理<br>文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。</p>
                                </div>
                            </div>

                            <div class="brand-details__row">
                                <div class="brand-details__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/page/materials/rear_smoozing.jpg" alt="" class="img-fluid" width="300" height="180" loading="lazy">
                                </div>

                                <div class="brand-details__desc">
                                    <h4 class="heading__forth">Caricaリアスムージングパネル</h4>

                                    <p class="section-desc">トレンドのシーケンシャルウインカーを採用〜〜〜<br>文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <section class="section brand-safty">
        <div class="container">
            <div class="brand-safty__wrapper">
                <div class="brand-safty__ttl">
                    <h2 class="heading__primary -center">Safety Standard Compliance<span class="mt">安全規格への準拠</span></h2>

                    <p class="section-desc -center">2023年1月アルパインスタイルが新たなカスタマイズカーとして・・・<br>文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。<br>文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。<br>文章が入ります。文章が入ります。文章が入ります。文章が入ります。</p>
                </div>

                <div class="brand-details">

                    <div class="brand-details__row">
                        <div class="brand-details__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/page/safty/brand-safty-img-1.jpg" alt="" class="img-fluid" width="300" height="180" loading="lazy">
                        </div>

                        <div class="brand-details__desc">
                            <h4 class="heading__forth">Caricaヘッドライト部 / パーツ</h4>

                            <p class="section-desc"><span>Carica</span>のユニークポイントとなる角目4灯LEDヘッドライトは純正同等にオートレベリング機能を保持しています。好みのカスタムにより、アクティブなレジャーを楽しむお客様が安全なドライブがスポイルされてはいけない、<span>Cal’s Motor</span>の基本性能です。</p>
                        </div>
                    </div>

                    <div class="brand-details__row">
                        <div class="brand-details__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/page/safty/brand-safty-img-2.jpg" alt="" class="img-fluid" width="300" height="180" loading="lazy">
                        </div>

                        <div class="brand-details__desc">
                            <h4 class="heading__forth">Caricaクラシカルウィンカー/Eマーク</h4>

                            <p class="section-desc">文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section brand-element">
        <div class="container">
            <div class="brand-element__wrapper">
                <h2 class="heading__primary -center">Satisfying Car Electronics & Car Entertainment<span class="mt">カーエレクトロニクス＆カーエンターテインメント</span></h2>


                <div class="brand-element__banner">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/page/element/brand-element-banner-img.jpg" alt="" class="img-fluid" width="940" height="350" loading="lazy">
                </div>

                <article class="brand-element__block">

                    <div class="brand-element__subttl">
                        <h3 class="heading__tertiary">充実した<br class="d-md-none">カーエレ・カーエンタメ</h3>

                        <p class="section-desc -center">大画面カーナビゲーションのBIG X、天井吊り下げ型モニターや上質なサウンドを提供する<br>スピーカーといったカーエンターテイメントのラインアップはアルパインがプロデュースする<br>アルパインスタイルが手掛けるCal’s Motorだからこそ。<br>車室内をアップグレードするアンビエントライトや、更に安心安全なドライブを支援するブラインドスポットミラーや<br>ノールックガイダンスといったプラスアルファも嬉しい提案です。</p>
                    </div>

                    <div class="brand-feature">
                        <div class="brand-feature__row -d-sm-flex">
                            <div class="brand-feature__col">
                                <div class="brand-feature__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/page/element/brand-element-banner-img.jpg" alt="" class="img-fluid" width="300" height="180" loading="lazy">
                                </div>
                                <h4 class="heading__forth">大画面カーナビ</h4>
                            </div>
                            <div class="brand-feature__col">
                                <div class="brand-feature__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/page/element/satisfying-02.jpg" alt="" class="img-fluid" width="300" height="180" loading="lazy">
                                </div>
                                <h4 class="heading__forth">大画面ディスプレイ<br class="d-none d-md-block">オーディオ</h4>
                            </div>
                            <div class="brand-feature__col">
                                <div class="brand-feature__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/page/element/satisfying-03.jpg" alt="" class="img-fluid" width="300" height="180" loading="lazy">
                                </div>
                                <h4 class="heading__forth">モニター</h4>
                            </div>
                            <div class="brand-feature__col">
                                <div class="brand-feature__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/page/element/satisfying-04.jpg" alt="" class="img-fluid" width="300" height="180" loading="lazy">
                                </div>
                                <h4 class="heading__forth">デジタルミラー</h4>
                            </div>
                            <div class="brand-feature__col">
                                <div class="brand-feature__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/page/element/satisfying-05.jpg" alt="" class="img-fluid" width="300" height="180" loading="lazy">
                                </div>
                                <h4 class="heading__forth">ブラインドスポットミラー</h4>
                            </div>
                            <div class="brand-feature__col">
                                <div class="brand-feature__img">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/page/element/satisfying-06.jpg" alt="" class="img-fluid" width="300" height="180" loading="lazy">
                                </div>
                                <h4 class="heading__forth">サウンドシステム</h4>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="section brand-story">
        <div class="container">
            <div class="brand-story__wrapper">
                <h2 class="heading__primary -center">The Inside Story of Product Development<span class="mt">製品開発の流れ</span></h2>

                <p class="section-desc -center">文章が入ります。文章が入ります。文章が入ります。文章が入ります。<br>文章が入ります。文章が入ります。文章が入ります。文章が入ります。<br>文章が入ります。文章が入ります。</p>

                <div class="brand-details -count">

                    <div class="brand-details__row">
                        <div class="brand-details__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/page/story/brand-story-img-1.jpg" alt="" class="img-fluid" width="300" height="180" loading="lazy">

                            <span>01</span>
                        </div>

                        <div class="brand-details__desc">
                            <h4 class="heading__forth">車両の企画</h4>

                            <p class="section-desc">文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。</p>
                        </div>
                    </div>

                    <div class="brand-details__row">
                        <div class="brand-details__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/page/story/brand-story-img-2.jpg" alt="" class="img-fluid" width="300" height="180" loading="lazy">

                            <span>02</span>
                        </div>

                        <div class="brand-details__desc">
                            <h4 class="heading__forth">デザイン</h4>

                            <p class="section-desc">文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。</p>
                        </div>
                    </div>

                    <div class="brand-details__row">
                        <div class="brand-details__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/page/story/brand-story-img-3.jpg" alt="" class="img-fluid" width="300" height="180" loading="lazy">

                            <span>03</span>
                        </div>

                        <div class="brand-details__desc">
                            <h4 class="heading__forth">車両制作</h4>

                            <p class="section-desc">文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。</p>
                        </div>
                    </div>

                    <div class="brand-details__row">
                        <div class="brand-details__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/page/story/brand-story-img-4.jpg" alt="" class="img-fluid" width="300" height="180" loading="lazy">

                            <span>04</span>
                        </div>

                        <div class="brand-details__desc">
                            <h4 class="heading__forth">カーライフコンサル</h4>

                            <p class="section-desc">文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section brand-craft">
        <div class="container">
            <div class="brand-craft__wrapper">

                <h2 class="heading__primary -center">Honest Craftsmanship<span class="mt">キャルズモーターの技術</span></h2>

                <p class="section-desc -center">
                    文章が入ります。文章が入ります。文章が入ります。文章が入ります。<br>
                    文章が入ります。文章が入ります。文章が入ります。文章が入ります。<br>
                    文章が入ります。文章が入ります。
                </p>

                <div class="brand-feature">
                    <div class="brand-feature__row">
                        <div class="brand-feature__col">
                            <div class="brand-feature__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/page/honest-01.jpg" alt="" class="img-fluid" width="300" height="180" loading="lazy">
                            </div>
                            <h4 class="heading__forth">職人のこだわりの技術</h4>
                        </div>
                        <div class="brand-feature__col">
                            <div class="brand-feature__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/page/honest-02.jpg" alt="" class="img-fluid" width="300" height="180" loading="lazy">
                            </div>
                            <h4 class="heading__forth">安心の設備</h4>
                        </div>
                        <div class="brand-feature__col">
                            <div class="brand-feature__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/page/honest-03.jpg" alt="" class="img-fluid" width="300" height="180" loading="lazy">
                            </div>
                            <h4 class="heading__forth">検査工程・品質</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

