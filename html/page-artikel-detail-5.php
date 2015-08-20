<?php include 'head.php';?>
    <?php include 'mainmenu.php';?>
    <div class="container full-width">
        <div class="slice slice-red red-big">

            <h2 class="color-red"><span>ARTIKEL</span></h2>
            <div class="container page-detail">
                <img class="img-float-left" src="img/items/artikel-5-JADI-MENTRI-LUHUT-PANDJAITAN-SAYA-TAK-INGIN-MACAM-MACAM.jpg" alt="judul berita">
                <h1 class="color-red">Jadi mentri luhut pandjaitan : saya tak ingin macam - macam</h1>
                <p>
                    Suara.Com - hari ini, kamis (13/8/2015), luhut binsar pandjaitan? Mulai beraktivitas sebagai menteri koordinator politik hukum dan keamanan menggantikan? Tedjo edhy purdijatno.
                </p>
                <p>
                    "saya ingin cepat bekerja dengan transparan dan terbuka. Saya ingin team work yang bagus," kata luhut usai acara serah terima jabatan di kantor kementerian polhukam, jakarta pusat.
                </p>
                <p>
                    Purnawirawan tni ini ingin segera langsung bekerja dengan tim secara transparan.
                </p>
                <p>
                    Luhut mengungkapkan di usianya yang sudah tua, ?Ia hanya ingin mengabdi untuk negara dengan membantu pemerintahan presiden joko widodo dan wakil presiden jusuf kalla.
                </p>
                <p>
                    "umur saya cukup tua, 68 tahun, jadi saya tidak ingin macam-macam," ujar luhut yang selama ini menjadi kepala staf kepresidenan.
                    Luhut mengaku tak menyangka ditunjuk presiden jokowi untuk mengemban tugas sebagai menteri.
                </p>
                <p>
                    "saya tidak tahu jika akan dilantik jadi menko polhukam yang baru. Saya baru tahu saat dikasih selamat oleh pak presiden. Jadi, ini semacam surprise dari pak presiden," katanya.
                </p>
                <p>
                    Di acara serah terima jabatan, luhut didampingi istri, devi pandjaitan. Acara tersebut juga dihadiri beberapa menteri dan kepala lembaga negara di bawah koordinasi kemenpolhukam, yakni jaksa agung h. M. Prasetyo dan kapolri jenderal badrodin haiti. Selain itu hadir pula anggota komisi iii dpr.
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
