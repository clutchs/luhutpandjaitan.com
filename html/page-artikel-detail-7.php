<?php include 'head.php';?>
    <?php include 'mainmenu.php';?>
    <div class="container full-width">
        <div class="slice slice-red red-big">

            <h2 class="color-red"><span>ARTIKEL</span></h2>
            <div class="container page-detail">
                <img class="img-float-left" src="img/items/artikel-7-TUGAS-SAYA-BUAT-STABILITAS-HUKUM-AGAR-ORANG-AMAN-BERINVESTASI.jpg" alt="judul berita">
                <h1 class="color-red">Tugas saya buat stabilitas hukum agar orang aman berinvestasi</h1>
                <p>
                    Jakarta - menko polhukam luhut panjaitan akan bertugas untuk memastikan situasi politik dan hukum di indonesia tidak lagi gaduh. Dengan situasi yang kondusif, orang akan semakin nyaman berinvestasi di indonesia.
                </p>
                <p>
                    "tugas menko polhukam itu untuk membuat stabilitas, mulai hukum, keamanan dan sebagainya, untuk ujungnya membuat rasa aman untuk orang investasi," kata luhut di kantor staf kepresidenan, jalan veteran, jakpus, jumat (14/8/2015).
                </p>
                <p>
                    Luhut tidak ingin lagi melihat pernyataan antar menteri yang saling bertolak belakang. Jika ada satu masalah yang belum diketahui detil, menteri tersebut diminta bertanya kepada menko sebelum mengeluarkan pernyataan ke publik.
                </p>
                <p>
                    "kita tidak mau kegaduhan statement yang nggak jelas-jelas itu, saya jelas, dan saya sudah bilang di bagian saya, tidak boleh," tegas luhut.
                </p>
                <p>
                    "jadi jangan sampai ada statment keluar bertentangan pula dengan presiden, itu di tentara haram hukumnya itu," lanjutnya.
                </p>
                <p>
                    Luhut saat ini masih duduk juga sebagai kepala staf presiden. Namun presiden jokowi akan segera mencari sosok yang tepat untuk menggantikan luhut.
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
