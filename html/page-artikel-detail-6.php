<?php include 'head.php';?>
    <?php include 'mainmenu.php';?>
    <div class="container full-width">
        <div class="slice slice-red red-big">

            <div class="container page-detail">
                <img class="img-float-left" src="img/items/artikel-6-MENTRI-LUHUT-INGIN-ANAK-BUAHNYA-SATU-PANDANGAN.jpg" alt="judul berita">
                <h1 class="color-red">Mentri luhut ingin anak buahnya satu pandangan</h1>
                <p>
                    Metrotvnews.Com, jakarta: menko politik hukum dan keamanan luhut binsar pandjaitan ingin semua pejabat di bawah koordinasinya satu suara setiap berbicara soal kebijakan. Jangan sampai ada silang pendapat di tengah publik.
                </p>
                <p>
                    "semua (menteri) bisa ngomong. Tapi paling tidak, 'eh, aku mau ngomong ini. Ada gini. Lanjut! Tancap!” kata luhut di sela-sela serah terima jabatan menkopolhukam di ruang parikesit, kantor kemenkopolhukam, jalan medan merdeka barat, jakarta pusat, kamis (13/8/2015).
                </p>
                <p>
                    Luhut ingin semua pejabat di bawah koordinasinya satu pandangan saat bicara ke publik. Ia tidak ingin ada kegaduhan karena silang pendapat dan memunculkan kesan pemerintah tidak tanggung jawab pada permasalahan yang ada.
                </p>
                <p>
                    "kalau saya belum jelas, eloknya tidak bersuara. Nanti dibicarakan dengan data yang lebih lengkap, sehingga tidak ada kesimpangsiuran di media," ujarnya.
                </p>
                <p>
                    Luhut minta semua pejabat di bawahnya harus kerja sama dan jaga koordinasi dengan baik. Ia menekankan hal itu di depan menkumham yasonna laoly, kapolri jenderal badrodin haiti, panglima tni jenderal gatot nurmantyo, menteri luar negeri retno marsudi, dan jaksa agung hm prasetyo.
                </p>
                <p>
                    Ia mengakui, di jajaran kemenkopolhukam dan instansi terkait, banyak bekas anak buahnya selama berkarir sebagai tni. Dengan modal itu, ia yakin anak buahnya paham betul gaya kepemimpinan dirinya yang ingin cepat dan tidak neko-neko.
                </p>
                <p>
                    "kalau anda ada masalah, tak usah ragu lapor ke saya. Kita selesaikan. Saya ingin team work. Team work gampang dikatakan, koordinasi gampang dikatakan, tetapi susah dilaksanakan. Ini kelemahan kita semua di banyak tempat," katanya.
                    Fzn
                </p>
            </div>
            <div class="bottom-detail">
                <div class="container">
                    <!-- carousel -->
                    <section id="carousel">
                        <div class="row">

                            <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="30000">
                                <!-- Carousel indicators -->
                                <ol class="carousel-indicators">
                                    <?php for($i=0;$i<5;$i++) { ?>
                                    <li data-target="#fade-quote-carousel" data-slide-to="<?php echo $i; ?>" <?php echo $i==0 ? 'class="active"':'' ?>></li>
                                    <?php } ?>
                                </ol>
                                <!-- Carousel items -->
                                <div class="carousel-inner carousel-inner-detail">
                                    <?php for($i=0;$i<5;$i++) { ?>
                                    <div class="item <?php echo $i==0 ? 'active':'' ?>">
                                        <div class="row apollo-hover">
                                            <?php for($a=0;$a<3;$a++) { ?>
                                            <figure class="effect-apollo profile-homepage col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                <img class="profile-photo-homepage img-responsive" src="img/list-berita-homepage.png" alt="thumbnail berita di homepage">
                                                <figcaption>
                                                    <div class="caption-quotes-page">
                                                        Judul Pemikiran
                                                    </div>
                                                    <a href="#">link goes here</a>
                                                </figcaption>
                                            </figure>
                                            <?php } ?>
                                        </div><!--.row-->
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>
                    </section>
                    <!-- /.carousel -->
                </div>
            </div>
        </div>
    </div><!-- /.container -->
<?php include 'footer.php';?>
