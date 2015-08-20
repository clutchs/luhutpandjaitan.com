<?php include 'head.php';?>
    <?php include 'mainmenu.php';?>
    <div class="container full-width">
        <div class="slice slice-red red-big">

            <h2 class="color-red"><span>ARTIKEL</span></h2>
            <div class="container page-detail">
                <img class="img-float-left" src="img/items/artikel-1-AIMAN-MENELISIK-RENCANA-LUHUT-PANDJAITAN.jpg" alt="judul berita">
                <h1 class="color-red">Aiman Menelisik Rencana Luhut Pandjaitan</h1>
                <p>
                    "pakai nuranimu sajalah. Kalau sekarang kamu bikin, semua orang kamu hukum.... Kamu tanya dirimu juga, kamu sakit jiwa atau apa? Dan kamu tanya dirimu, kamu jujur tidak? Jangan-jangan kamu maling juga..."
                </p>
                <p>
                    Demikian pernyataan luhut pandjaitan ketika aiman witjaksono, jurnalis kompas tv, menanyakan perihal potensi konflik kpk dan polri di masa kepemimpinannya sebagai menteri kordinator bidang politik hukum.
                </p>
                <p>
                    Berkali-kali luhut menyatakan bahwa setiap masalah bisa diselesaikan dengan komunikasi. Termasuk soal mengatasi persoalan harga daging sapi yang melonjak. Luhut yakin harga daging sapi di indonesia bisa mencapai rp 60.000/kg.
                </p>
                <p>
                    Luhut mengaku akan melakukan kordinasi dengan beberapa kementerian untuk menyelesaikan persoalan ini. Bukan bermaksud politisasi ekonomi, luhut menegaskan ia akan memberikan dirinya untuk bangsa dan negara.
                </p>
                <p>
                    Dua jabatan diemban sekaligus orang sang purnawirawan jenderal itu. Kepala staf kepresidenan yang diemban sejak desember 2014 dan menteri koordinator bidang politik, hukum, dan keamanan (menkopolhukam).
                </p>
                <p>
                    Sebagai orang yang sangat dipercaya presiden jokowi, benarkah luhut baru mengetahui penunjukannya sesaat sebelum dilantik? Apa target dan rencana sebagai menkopulhukam? Apa yang ia siapkan untuk menghadapi tantangan kerjanya, termasuk menghadapi politisi yang menginginkan posisinya? Sejuta tantangan menunggu luhut.
                </p>
                <p>Simak "aiman", senin (17/8/2015) pukul 22.00 wib, di kompastv.</p>
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
