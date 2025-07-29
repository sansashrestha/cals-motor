<?php

/**
 * The template for displaying the footer for home page
 **/
?>

<section class="section contact" id="contact">
    <div class="container">
        <div class="contact__wrapper">
            <h2 class="heading__primary">Contact<span class="lg">お気軽に<br class="d-md-none">お問い合わせください。</span></h2>

            <ul class="contact__link__list">
                <li>
                    <a href="https://www.alpine-style.jp/carica-havana_simulation-list/" target="_blank"  rel="noopener noreferrer" class="contact__link">見積シミュレーション</a>
                </li>
                <li>
                    <a href="https://www.alpine-style.jp/reservation/" target="_blank"  rel="noopener noreferrer" class="contact__link">商談予約はこちら</a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/contact/" class="contact__link">お問い合わせフォーム</a>
                </li>
            </ul>
        </div>
    </div>
</section>

<footer class="footer" id="footer">
    <a href="#" class="scroll-top" id="js-scrollToTop">
        <span>PAGE TO TOP</span>
    </a>

    <div class="footer-top">
        <div class="container">
            <div class="footer-top__wrapper">
                <div class="footer-top__lft">
                    <div class="footer-top__logo">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?> /assets/img/icons/footer-logo.svg" alt="" class="img-fluid" width="262"
                            height="59" loading="lazy">
                    </div>
                    <a href="https://www.instagram.com/cals_motor/" target="_blank" rel="noopener noreferrer"
                        class="footer-top__insta">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?> /assets/img/icons/instagram.svg" alt="INSTAGRAM" class="img-fluid" width="15"
                            height="15" loading="lazy">
                        <span>Instagram</span>
                    </a>
                </div>

                <div class="footer-top__rgt">
                    <ul class="footer-top__links">
                        <li>
                            <a href="<?php echo home_url(); ?>/about/" class="footer-top__link">About<span>私たちについて</span></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url(); ?>/gallery/" class="footer-top__link">Owner’s Gallery<span>お客様の声</span></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url(); ?>/store/" class="footer-top__link">Store<span>店舗紹介</span></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url(); ?>/products/" class="footer-top__link">Products<span>車種一覧</span></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url(); ?>/news/" class="footer-top__link">News<span>お知らせ</span></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url(); ?>/contact/" class="footer-top__link">Contact<span>お問い合わせ</span></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url(); ?>/movie/" class="footer-top__link">Movie<span>紹介動画</span></a>
                        </li>
                        <li>
                            <a href="<?php echo home_url(); ?>/faq/" class="footer-top__link">FAQ<span>よくある質問</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-mid">
        <div class="container">
            <div class="footer-mid__wrapper">
                <div class="footer-mid__links">
                    <a href="https://www.alpine-style.jp/" target="_blank" rel="noopener noreferrer"
                        class="footer-mid__link -icon">ALPINE STYLE</a>
                    <a href="https://www.alpinenews.co.jp/" target="_blank" rel="noopener noreferrer"
                        class="footer-mid__link -icon">ALPINE NEWS</a>
                    <a href="<?php echo home_url(); ?>/privacy-policy" class="footer-mid__link">プライバシーポリシー</a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom__wrapper">
                <div class="footer-bottom__img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?> /assets/img/icons/alpine-style-logo.png" alt="ALPINE STYLE" class="img-fluid"
                        width="242" height="21" loading="lazy">
                </div>

                <div class="footer-bottom__copyright">
                    <p class="footer-bottom__copyright__txt">© ALPINE STYLE All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- FOR FUTURE -->
<div class="side-bnr">
    <div class="side-bnr__cross" id="side-bnr__cross"></div>

    <a href="https://select-type.com/rsv/?id=h_jSFdxKjrI&c_id=266302&mode=1&ym=2024-01" target="_blank" rel="noopener noreferrer" class="side-bnr__img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?> /assets/img/side-banner.jpg" alt="Alpine Style" width="220" height="132" class="img-fluid" loading="lazy">
    </a>
</div>

<a href="<?php echo home_url(); ?>/contact/" class="btn-contact -btm">Contact</a>
<?php wp_footer(); ?>

</body>
</html>
