<?php include 'head.php';?>
    <?php include 'mainmenu.php';?>
    <div class="container full-width">
        <div class="slice slice-red red-big">

            <h2 class="color-red"><span>ARTIKEL</span></h2>
            <div class="container page-detail">
                <img class="img-float-left" src="img/items/artikel-4-DUA-KALI-PRESIDEN-JOKOWI-KASIH-SAYA-KEJUTAN.jpg" alt="judul berita">
                <h1 class="color-red">Dua kali presiden jokowi kasih saya kejutan</h1>
                <p>
                    Tribunnews.Com, jakarta - dipercaya menjabat menteri koordinator politik hukum dan keamanan adalah kejutan kedua yang diterima luhut binsar panjaitan dari presiden joko widodo.
                </p>
                <p>
                    "dua kali saya sudah diberi suprise pak presiden. Pertama waktu saya jadi kepala staf presiden dan kedua kemarin (ditunjuk sebagai menko polhukam)," ungkap luhut saat menyampaikan pidato dalam prosesi serah terima jabatan menko polhukam dari tedjo edhy purdijanto di kemenko polhukam, jakarta, kamis (13/8/2015).
                </p>
                <p>
                    "ketika orang berpikir, saya sudah tahu (ada perombakan kabinet, red), saya sebenarnya enggak tahu. Istri saya juga kaget," sambung luhut.
                </p>
                <p>
                    Ia mengaku baru mengetahui dipercaya sebagai menko polhukam, rabu (12/8/2015) pagi, setelah menerima telepon menteri sekretaris negara, pratikno. Padahal, siangnya akan dilakukan pelantikan menteri baru oleh jokowi.
                </p>
                <p>
                    "orang berfikir saya tahu, saya enggak tahu. Saya tahu resminya setelah dikasih selamat oleh presiden, karena sampai pagi hari kemarin, saya hanya ditelepon pak pratikno bahwa saya akan dilantik," beber dia.
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
