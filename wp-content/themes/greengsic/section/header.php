<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
<![endif]-->

<div class="preloader">
    <div class="preloader_image"></div>
</div>

<!-- search modal -->
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
    </button>
    <div class="widget widget_search">
        <form method="get" class="searchform search-form form-inline" action="./">
            <div class="form-group">
                <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
            </div>
            <button type="submit" class="theme_button">Search</button>
        </form>
    </div>
</div>

<!-- Unyson messages modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
    <div class="fw-messages-wrap ls with_padding">
        <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
        <!--
    <ul class="list-unstyled">
        <li>Message To User</li>
    </ul>
    -->

    </div>
</div>
<!-- eof .modal -->

<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
    <div id="box_wrapper">

        <!-- template sections -->

        <section class="page_topline ds darkblue parallax table_section table_section_sm section_padding_bottom_10 section_padding_top_10">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4 text-center text-sm-left">
                        <div class="inline-content darklinks">
								<span>
									<i class="fa fa-phone highlight rightpadding_5" aria-hidden="true"></i>
									(800) 123 4567
								</span>
                            <span class="small-text">
									<i class="fa fa-envelope highlight rightpadding_5" aria-hidden="true"></i>
									<a href="#">social@example.com</a>
								</span>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div>
                            <a class="social-icon color-icon soc-facebook" href="#" title="Facebook"></a>
                            <a class="social-icon color-icon soc-twitter" href="#" title="Twitter"></a>
                            <a class="social-icon color-icon soc-google" href="#" title="Google"></a>
                            <a class="social-icon color-icon soc-skype" href="#" title="Skype"></a>
                            <a class="social-icon color-icon soc-youtube" href="#" title="Youtube"></a>
                        </div>
                    </div>
                    <div class="col-sm-6 text-center text-sm-right">
                        <div class="widget widget_search inline-block">
                            <form method="get" class="searchform form-inline" action="./">
                                <div class="form-group-wrap">
                                    <div class="form-group margin_0">
                                        <label class="sr-only" for="topline-search">Search for:</label>
                                        <input id="topline-search" type="text" value="" name="search" class="form-control" placeholder="Search Keyword">
                                    </div>
                                    <button type="submit" class="theme_button color1 no_bg_button">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<header class="page_header header_white toggler_xs_right section_padding_15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 display_table">
                <div class="header_left_logo display_table_cell">
                    <a href="/" class="logo top_logo">
                        <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                        echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">'; ?>
                    </a>
                </div>

                <div class="header_mainmenu display_table_cell text-center">
                    <!-- main nav start -->
                    <nav class="mainmenu_wrapper">
                        <ul class="mainmenu nav sf-menu">
                            <li>
                                <a href="/">Anasayfa</a>
                            </li>

                            <li>
                                <a href="#">Hakkımızda</a>
                                <ul>
                                    <li>
                                        <a href="/biz-kimiz">Biz Kimiz</a>
                                    </li>
                                    <li>
                                        <a href="/finansal-bilgi">Finansal Bilgi</a>
                                    </li>

                                    <li>
                                        <a href="/sistemler-ve-uyeler">Sistemler ve Üyeler</a>
                                    </li>

                                    <li>
                                        <a href="/nasil-calisiyoruz">Nasıl Çalışıyoruz</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- eof pages -->

                            <li>
                                <a href="#">Ürünler</a>
                                <ul>
                                    <li>
                                        <a href="#">Gıda</a>
                                    </li>
                                    <li>
                                        <a href="#">Tarım</a>
                                    </li>

                                    <li>
                                        <a href="#">Yatırım Danışmanlığı</a>
                                        <ul>
                                            <li>
                                                <a href="#">Yurtdışı Yatırım</a>
                                                <a href="#">Yurtiçi Yatırım</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">Enerji</a>
                                        <ul>
                                            <li>
                                                <a href="#">Güneş Paneli</a>
                                                <a href="#">Jeneratör</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Otomotiv</a>
                                        <ul>
                                            <li>
                                                <a href="#">Otomotiv </a>
                                                <a href="#">İş MakineIeri </a>
                                                <a href="#">Endüstriyel Ekipmanlar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">İnşaat Altyapı</a>
                                    </li>
                                    <li>
                                        <a href="#">Sağlık Turizmi</a>
                                        <ul>
                                            <li>
                                                <a href="#">Sağlık Turizmi</a>
                                            </li>
                                            <li>
                                                <a href="#">Sağlık Ekipmanları</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Eğitim</a>
                                        <ul>
                                            <li>
                                                <a href="#">Eğitim Danışmanlığı</a>
                                            </li>
                                            <li>
                                                <a href="#">Oturum ve Konaklama Desteği</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Turizm</a>
                                        <ul>
                                            <li>
                                                <a href="#">Kültürel Turizm</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Tekstil</a>
                                    </li>
                                    <li>
                                        <a href="#">Lojistic</a>
                                        <ul>
                                            <li>
                                                <a href="#">Gemi Taşımacılığı</a>
                                                <a href="#">Uçak Taşımacılığı</a>
                                                <a href="#">Kara Taşımacılığı</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                            </li>
                            <!-- eof features -->


                            <!-- gallery -->
                            <li>
                                <a href="#">Markalar</a>
                            </li>
                            <!-- eof Gallery -->

                            <!-- blog -->
                            <li>
                                <a href="blog-right.html">Tesisler</a>
                            </li>
                            <!-- eof blog -->

                            <!-- contacts -->
                            <li>
                                <a href="contact.html">Bize Ulaşın</a>
                            </li>
                            <!-- eof contacts -->
                        </ul>
                    </nav>
                    <!-- eof main nav -->
                    <!-- header toggler -->
                    <span class="toggle_menu">
									<span></span>
								</span>
                </div>
            </div>
        </div>
    </div>
</header>
