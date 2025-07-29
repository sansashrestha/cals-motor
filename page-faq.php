<?php
/* 
Template Name: faq page
*/

 get_header(); ?>

<main id="main" class="main-bg">
    <div class="pagetitlebar">
    <div class="container">
        <h1 class="pagetitlebar__title">FAQ</h1>
        <p class="pagetitlebar__subtitle">よくある質問</p>
        <div class="pagetitlebar__img ">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pagetitlebar/faq-pagetitlebar-img.jpg" alt="page-title-bar">
        </div>
    </div>
</div>

    <!--breadcrumb-->
    <?php echo custom_breadcrumb(); ?>

    <section class="section page-faq">
        <div class="container">
            <div class="wp-content">
                <h2>車両で検索</h2>
            </div>
            <div class="tabs">
                <div class="tabs__nav">
                    <ul>
                        <li><a href="#" class="tabs__lnk active" data-toggle-target=".tab-content-1">Carica</a></li>
                        <li><a href="#" class="tabs__lnk" data-toggle-target=".tab-content-2">Havana</a></li>
                        <li><a href="#" class="tabs__lnk" data-toggle-target=".tab-content-3">新車種</a></li>
                    </ul>
                </div>

                <div class="tabs__wpr">
                    <div class="tabs__content tab-content-1 active">
                        <div class="page-faq__wpr">
                            <div class="wp-content">
                                <h2>カテゴリ1</h2>
                            </div>
                            <ul class="page-faq__cats">
                                <li><a href="#carica-01" class="contact__link">コンセプト</a></li>
                                <li><a href="#carica-02" class="contact__link">仕様</a></li>
                                <li><a href="#carica-03" class="contact__link">納車時期</a></li>
                                <li><a href="#carica-04" class="contact__link">納車</a></li>
                                <li><a href="#carica-05" class="contact__link">生産体制</a></li>
                                <li><a href="#carica-06" class="contact__link">販売価格</a></li>
                                <li><a href="#carica-07" class="contact__link">ワランティ</a></li>
                                <li><a href="#carica-08" class="contact__link">カスタマイズ</a></li>
                                <li><a href="#carica-09" class="contact__link">コンバージョンプログラム</a></li>
                            </ul>
                            <div class="wp-content">
                                <div id="carica-01" class="page-faq__inner">
                                    <h2>コンセプト</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="carica-02" class="page-faq__inner">
                                    <h2>仕様</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="carica-03" class="page-faq__inner">
                                    <h2>納車時期</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="carica-04" class="page-faq__inner">
                                    <h2>納車</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="carica-05" class="page-faq__inner">
                                    <h2>生産体制</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="carica-06" class="page-faq__inner">
                                    <h2>販売価格</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="carica-07" class="page-faq__inner">
                                    <h2>ワランティ</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="carica-08" class="page-faq__inner">
                                    <h2>カスタマイズ</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="carica-09" class="page-faq__inner">
                                    <h2>コンバージョンプログラム</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs__content tab-content-2">
                        <div class="page-faq__wpr">
                            <div class="wp-content">
                                <h2>カテゴリ2</h2>
                            </div>
                            <ul class="page-faq__cats">
                                <li><a href="#havana-01" class="contact__link">コンセプト</a></li>
                                <li><a href="#havana-02" class="contact__link">仕様</a></li>
                                <li><a href="#havana-03" class="contact__link">納車時期</a></li>
                                <li><a href="#havana-04" class="contact__link">納車</a></li>
                                <li><a href="#havana-05" class="contact__link">生産体制</a></li>
                                <li><a href="#havana-06" class="contact__link">販売価格</a></li>
                                <li><a href="#havana-07" class="contact__link">ワランティ</a></li>
                                <li><a href="#havana-08" class="contact__link">カスタマイズ</a></li>
                                <li><a href="#havana-09" class="contact__link">コンバージョンプログラム</a></li>
                            </ul>
                            <div class="wp-content">
                                <div id="havana-01" class="page-faq__inner">
                                    <h2>コンセプト</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="havana-02" class="page-faq__inner">
                                    <h2>仕様</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="havana-03" class="page-faq__inner">
                                    <h2>納車時期</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="havana-04" class="page-faq__inner">
                                    <h2>納車</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="havana-05" class="page-faq__inner">
                                    <h2>生産体制</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="havana-06" class="page-faq__inner">
                                    <h2>販売価格</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="havana-07" class="page-faq__inner">
                                    <h2>ワランティ</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="havana-08" class="page-faq__inner">
                                    <h2>カスタマイズ</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="havana-09" class="page-faq__inner">
                                    <h2>コンバージョンプログラム</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs__content tab-content-3">
                        <div class="page-faq__wpr">
                            <div class="wp-content">
                                <h2>カテゴリ3</h2>
                            </div>
                            <ul class="page-faq__cats">
                                <li><a href="#others-01" class="contact__link">コンセプト</a></li>
                                <li><a href="#others-02" class="contact__link">仕様</a></li>
                                <li><a href="#others-03" class="contact__link">納車時期</a></li>
                                <li><a href="#others-04" class="contact__link">納車</a></li>
                                <li><a href="#others-05" class="contact__link">生産体制</a></li>
                                <li><a href="#others-06" class="contact__link">販売価格</a></li>
                                <li><a href="#others-07" class="contact__link">ワランティ</a></li>
                                <li><a href="#others-08" class="contact__link">カスタマイズ</a></li>
                                <li><a href="#others-09" class="contact__link">コンバージョンプログラム</a></li>
                            </ul>
                            <div class="wp-content">
                                <div id="others-01" class="page-faq__inner">
                                    <h2>コンセプト</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="others-02" class="page-faq__inner">
                                    <h2>仕様</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="others-03" class="page-faq__inner">
                                    <h2>納車時期</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="others-04" class="page-faq__inner">
                                    <h2>納車</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="others-05" class="page-faq__inner">
                                    <h2>生産体制</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="others-06" class="page-faq__inner">
                                    <h2>販売価格</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="others-07" class="page-faq__inner">
                                    <h2>ワランティ</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="others-08" class="page-faq__inner">
                                    <h2>カスタマイズ</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="others-09" class="page-faq__inner">
                                    <h2>コンバージョンプログラム</h2>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl open">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: block;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                    <div class="store-acc">
                                        <h4 class="heading-bg store-acc-ttl">質問文が入ります。質問文が入ります。質問文が入ります。質問文が入ります。</h4>
                                        <div class="store-acc-content" style="display: none;">
                                            <p>回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。回答の本文が入ります。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>
<?php get_footer(); ?>

