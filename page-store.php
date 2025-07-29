<?php
/* 
Template Name: store page
*/

 get_header(); ?>

<main id="main" class="main-bg">
    <div class="pagetitlebar">
    <div class="container">
        <h1 class="pagetitlebar__title">Store</h1>
        <p class="pagetitlebar__subtitle">店舗情報</p>
        <div class="pagetitlebar__img ">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pagetitlebar/store-pagetitlebar-img.jpg" alt="page-title-bar">
        </div>
    </div>
</div>

    <!--breadcrumb-->
<?php echo custom_breadcrumb(); ?>
    <section class="section store">
        <div class="container">
            <h2 class="page-ttl">ブランドカー取り扱いディーラー一覧</h2>

            <div class="store__row">
                <div class="store__col">
                    <div class="store__card">
                        <a href="https://www.alpine-style.jp/store/fukuoka/" target="_blank" rel="noopener noreferrer">
                            <div class="store__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/store-01.jpg" alt="アルパインスタイル福岡R3" class="img-fluid" loading="lazy" width="300" height="180">
                            </div>
                        </a>
                        <div class="store__content">
                            <h4 class="heading__forth">アルパインスタイル福岡R3</h4>
                        </div>
                        <div class="store__desc">
                            <a href="tel:092-663-5680">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-01.svg" alt="phone-icon" class="img-fluid" loading="lazy" width="13" height="13">092-663-5680
                            </a>
                            <p class="-txt">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-02.svg" alt="location-icon" class="img-fluid" loading="lazy" width="11" height="14">
                                〒813-0002<br>
                                福岡県福岡市東区下原1-22-25
                            </p>
                            <!-- <p class="-txt">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-03.svg" alt="clock-icon" class="img-fluid"
                                    loading="lazy" width="13" height="13">
                                営業時間-10:00～18:00
                            </p>
                            <p class="-txt">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-04.svg" alt="calendar-icon" class="img-fluid"
                                    loading="lazy" width="12" height="12">
                                定休日<br>
                                毎週水曜日（第1・3・5火曜日）
                            </p> -->
                        </div>
                        <div class="store__btn">
                            <a href="https://page.line.me/new.s?openQrModal=true" target="_blank" rel="noopener noreferrer" class="store__btn-detail">お友達追加はこちら</a>
                            <div class="store__btn-grp">
                                <a href="https://page.line.me/new.s?openQrModal=true" target="_blank" rel="noopener noreferrer" class="store__btn-reserv">来店予約へ</a>
                                <a href="https://page.line.me/new.s?openQrModal=true" target="_blank" rel="noopener noreferrer" class="store__btn-line">お友達追加へ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                <div class="store__col">
                    <div class="store__card">
                        <a href="https://www.alpine-style.jp/store/osaka/" target="_blank" rel="noopener noreferrer">
                            <div class="store__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/store-02.jpg" alt="アルパインスタイル福岡R3" class="img-fluid"
                                    loading="lazy" width="300" height="180">
                            </div>
                        </a>
                        <div class="store__content">
                            <h4 class="heading__forth">アルパインスタイル大阪171</h4>
                        </div>
                        <div class="store__desc">
                            <a href="tel:092-663-5680">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-01.svg" alt="phone-icon" class="img-fluid"
                                    loading="lazy" width="13" height="13">072-640-6500
                            </a>
                            <p class="-txt">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-02.svg" alt="location-icon" class="img-fluid"
                                    loading="lazy" width="11" height="14">
                                〒567-0065<br>
                                大阪府茨木市上郡1-1-3
                            </p>
                            <p class="-txt">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-03.svg" alt="clock-icon" class="img-fluid"
                                    loading="lazy" width="13" height="13">
                                営業時間-10:00～18:00
                            </p>
                            <p class="-txt">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-04.svg" alt="calendar-icon" class="img-fluid"
                                    loading="lazy" width="12" height="12">
                                定休日<br>
                                毎週水曜日（第1・3・5火曜日）
                            </p>
                        </div>
                        <a href="https://page.line.me/634cvgpv?openQrModal=true" target="_blank" rel="noopener noreferrer" class="store__btn">お友達追加はこちら</a>
                    </div>
                </div>
                <div class="store__col" >
                    <div class="store__card">
                        <a href="https://www.alpine-style.jp/store/nagoya/" target="_blank" rel="noopener noreferrer">
                            <div class="store__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/store-03.jpg" alt="アルパインスタイル福岡R3" class="img-fluid"
                                    loading="lazy" width="300" height="180">
                            </div>
                        </a>
                        <div class="store__content">
                            <h4 class="heading__forth">アルパインスタイル名古屋155</h4>
                        </div>
                        <div class="store__desc">
                            <a href="tel:092-663-5680">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-01.svg" alt="phone-icon" class="img-fluid"
                                    loading="lazy" width="13" height="13">0586-52-2286
                            </a>
                            <p class="-txt">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-02.svg" alt="location-icon" class="img-fluid"
                                    loading="lazy" width="11" height="14">
                                    〒491-0063<br>愛知県一宮市常願通8-5-1
                            </p>
                            <p class="-txt">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-03.svg" alt="clock-icon" class="img-fluid"
                                    loading="lazy" width="13" height="13">
                                    営業時間-10:00～18:00
                            </p>
                            <p class="-txt">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-04.svg" alt="calendar-icon" class="img-fluid"
                                    loading="lazy" width="12" height="12">
                                定休日<br>
                                毎週水曜日（第1・3・5火曜日）
                            </p>
                        </div>
                        <a href="https://page.line.me/859pdslg?openQrModal=true" target="_blank" rel="noopener noreferrer" class="store__btn">お友達追加はこちら</a>
                    </div>
                </div>
                <div class="store__col">
                    <div class="store__card">
                        <a href="https://www.alpine-style.jp/store/yokohama/" target="_blank" rel="noopener noreferrer">
                            <div class="store__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/store-04.jpg" alt="アルパインスタイル横浜246"
                                    class="img-fluid" loading="lazy" width="300" height="180">
                            </div>
                        </a>
                        <div class="store__content">
                            <h4 class="heading__forth">アルパインスタイル横浜246</h4>
                        </div>
                        <div class="store__desc">
                            <a href="tel:092-663-5680">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-01.svg" alt="phone-icon" class="img-fluid"
                                    loading="lazy" width="13" height="13">042-850-7282
                            </a>
                            <p class="-txt">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-02.svg" alt="location-icon" class="img-fluid"
                                    loading="lazy" width="11" height="14">
                                〒194-0002<br>
                                東京都町田市南つくし野2-30-12
                            </p>
                            <p class="-txt">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-03.svg" alt="clock-icon" class="img-fluid"
                                    loading="lazy" width="13" height="13">
                                営業時間-10:00～18:00
                            </p>
                            <p class="-txt">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-04.svg" alt="calendar-icon" class="img-fluid"
                                    loading="lazy" width="12" height="12">
                                定休日<br>
                                毎週水曜日（第1・3・5火曜日）
                            </p>
                        </div>
                        <a href="https://page.line.me/led6765a?openQrModal=true" target="_blank" rel="noopener noreferrer" class="store__btn">お友達追加はこちら</a>
                    </div>
                </div>
                <div class="store__col">
                    <div class="store__card">
                        <a href="https://www.alpine-style.jp/store/saitama/" target="_blank" rel="noopener noreferrer">
                            <div class="store__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/store-05.jpg" alt="アルパインスタイル埼玉R4" class="img-fluid"
                                    loading="lazy" width="300" height="180">
                            </div>
                        </a>
                        <div class="store__content">
                            <h4 class="heading__forth">アルパインスタイル埼玉R4</h4>
                        </div>
                        <div class="store__desc">
                            <a href="tel:092-663-5680">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-01.svg" alt="phone-icon" class="img-fluid"
                                    loading="lazy" width="13" height="13">048-984-7447
                            </a>
                            <p class="-txt">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-02.svg" alt="location-icon" class="img-fluid"
                                    loading="lazy" width="11" height="14">
                                〒343-0806<br>
                                埼玉県越谷市宮本町5-256-1
                            </p>
                            <p class="-txt">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-03.svg" alt="clock-icon" class="img-fluid"
                                    loading="lazy" width="13" height="13">
                                営業時間-10:00～18:00
                            </p>
                            <p class="-txt">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-04.svg" alt="calendar-icon" class="img-fluid"
                                    loading="lazy" width="12" height="12">
                                定休日<br>
                                毎週水曜日（第1・3・5火曜日）
                            </p>
                        </div>
                        <a href="https://page.line.me/207frxhf" target="_blank" rel="noopener noreferrer" class="store__btn">お友達追加はこちら</a>
                    </div>
                </div>
                <div class="store__col">
                    <div class="store__card">
                        <a href="https://www.alpine-style.jp/store/iwakionahama/" target="_blank" rel="noopener noreferrer">
                            <div class="store__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/store-06.jpg" alt="アルパインスタイルイオンモールいわき小名浜" class="img-fluid"
                                    loading="lazy" width="300" height="180">
                            </div>
                        </a>
                        <div class="store__content">
                            <h4 class="heading__forth">アルパインスタイルイオンモールいわき小名浜</h4>
                        </div>
                        <div class="store__desc">
                            <a href="tel:092-663-5680">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-01.svg" alt="phone-icon" class="img-fluid"
                                    loading="lazy" width="13" height="13">0246-85-5061
                            </a>
                            <p class="-txt">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-02.svg" alt="location-icon" class="img-fluid"
                                    loading="lazy" width="11" height="14">
                                    〒971-8555<br>福島県いわき市小名浜字辰巳町79 イオンモールいわき小名浜2F
                            </p>
                            <p class="-txt">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-03.svg" alt="clock-icon" class="img-fluid"
                                    loading="lazy" width="13" height="13">
                                    営業時間-イオンモールいわき小名浜に準じる
                            </p>
                            <p class="-txt">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/store/icon-04.svg" alt="calendar-icon" class="img-fluid"
                                    loading="lazy" width="12" height="12">
                                定休日<br>イオンモールいわき小名浜に準じる
                            </p>
                        </div>
                        <a href="https://page.line.me/079hrmhu?openQrModal=true" target="_blank" rel="noopener noreferrer" class="store__btn">お友達追加はこちら</a>
                    </div>
                </div>
                -->
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>

