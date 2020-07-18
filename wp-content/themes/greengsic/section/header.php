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
                            <li class="active">
                                <a href="/">Anasayfa</a>
                            </li>

                            <li>
                                <a href="#">Hakkımızda</a>
                                <ul>
                                    <li>
                                        <a href="#">Biz Kimiz</a>
                                    </li>
                                    <li>
                                        <a href="#">Finansal Bilgi</a>
                                    </li>

                                    <li>
                                        <a href="#">Sistemler ve Üyeler</a>
                                    </li>

                                    <li>
                                        <a href="#">Nasıl Çalışıyoruz</a>
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
