<?php
/* 
Template Name: contact page
*/

 get_header(); ?>


<main id="main" class="main-bg">
    <div class="pagetitlebar">
    <div class="container">
        <h1 class="pagetitlebar__title">Contact</h1>
        <p class="pagetitlebar__subtitle">お問い合わせ</p>
        <div class="pagetitlebar__img ">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pagetitlebar/contact-pagetitlebar-img.jpg" alt="page-title-bar">
        </div>
    </div>
</div>

    <!--breadcrumb-->
<?php echo custom_breadcrumb(); ?>
<div class="contact-form">
        <div class="container">
            <div class="contact-form__wrapper">
                <div class="contact-nav">
                    <div class="contact-nav__state -active">
                        <span>01. 入力</span>
                    </div>

                    <div class="contact-nav__state">
                        <span>02. 確認</span>
                    </div>

                    <div class="contact-nav__state">
                        <span>03.送信完了</span>
                    </div>
                </div>

                
                <?php echo do_shortcode('[contact-form-7 id="5acd8da" title="Untitled"]'); ?>
                  <!-- <form method="post" action="index.php#contact" class="h-adr">
                 
                  </form> -->


                  
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>

