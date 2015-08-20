<?php include 'head.php';?>
    <?php include 'mainmenu.php';?>
    <div class="container full-width">
        <div class="slice slice-red red-big">

            <h2 class="color-red"><span>ARTIKEL</span></h2>
            <div class="container page-detail">
                <img class="img-float-left" src="img/items/artikel-3-INI-AGENDA-BESAR-KEMENKOPULHAM-DIBAWAH-LUHUT-PANDJAITAN.jpg" alt="judul berita">
                <h1 class="color-red">Ini agenda besar kemenkopulham dibawah luhut pandjaitan</h1>
                <p>
                    Republika.Co.Id, jakarta -- menteri koordinator politik dan keamanan (menkopolhukam) luhut binsar pandjaitan mengatakan salah satu agenda besar yang akan diusung oleh pihaknya adalah menjamin stabilitas keamanan.
                </p>
                <p>
                    Menurutnya, stabilitas ekonomi tidak akan bisa dilepaskan dari kondisi stabilitas keamanan. Bahkan, luhut menyebut salah satu pilar utama dalam pembangunan adalah stabilitas ekonomi dan keamanan. Stabilitas keamanan akan mendukung kelancaran roda ekonomi. Untuk itulah peran kemenkopolhulam, terutama dalam memberikan jaminan keamanan.
                </p>
                <p>
                    ''nah masalah ekonomi adalah masalah sangat serius yang harus kita tangani bersama dan peran kita di kantor menko ini sangat penting karena kita harus memberikan suasana yang tenang, suasana yang kondusif untuk  negara ini,'' ujarnya dalam upacara sertijab di kemenkopolhukam, jalan medan merdeka barat, jakarta pusat, kamis (13/8).
                </p>
                <p>
                    Ia menjelaskan, untuk saat ini harga pangan di indonesia merupakan harga yang paling mahal. Tentu ada permasalahan yang menyebabkan kondisi ini bisa terjadi. Untuk itu, menurut luhut, perlu ada pendataan terkini soal kebutuhan nasional dari sejumlah komoditi, seperti beras dan daging sapi.
                </p>
                <p>
                    Nantinya dari data tersebut dapat dirumuskan pasokan komoditas yang saat ini dimiliki indonesia.  Dalam melakukan pendataan ini, jajaran tni dan polri bisa ikut mengawasi agar data yang diperoleh bisa benar. Selain itu, ada pula pengawasan di tingkat bawah.
                </p>
                <p>
                    ''kenapa hal ini bisa terjadi. Kami berbicara soal pencegahan. Tapi kapolri juga sempat menyampaikan, tidak tertutup akan dilakukan penindakan jika pencegahan ini sudah dilakukan,'' katanya.
                </p>
                <p>
                    Selain itu luhut juga mengatakan kerjasama dengan kemenko lainnya akan terus ditingkatkan, demi memperbaiki kondisi ekonomi tersebut.
                </p>
                <p>
                    Sementara terkait penanganan masalah-masalah keamanan, termasuk ancaman terorisme yang menjadi isu akhir-akhir ini, luhut menilai, kinerja polri bekerja sama dengan badan intelijen negara (bin) dan tni sudah berjalan cukup baik.
                </p>
                <p>
                    ''pada masa mendatang akan kami tingkatkan terus, sehingga suasana indonesia tetap lebih baik,'' ucapnya.
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
