<?php include 'head.php';?>
    <?php include 'mainmenu.php';?>

    <div class="container full-width">
        <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">

            <ul id="myTabs" class="nav nav-tabs container" role="tablist">
                <li role="presentation"><a href="#galerry" role="tab" id="galerry-tab" data-toggle="tab" aria-controls="galerry">Gallery</a></li>
                <li role="presentation"><a href="#video" role="tab" id="video-tab" data-toggle="tab" aria-controls="video">Video</a></li>
                <li role="presentation" class="active"><a href="#artikel" id="artikel-tab" role="tab" data-toggle="tab" aria-controls="artikel" aria-expanded="true">Artikel</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="artikel" aria-labelledBy="artikel-tab">
                    <div class="slice slice-red red-big"><h2><span>Artikel</span></h2></div>
                    <div class="container">
                        <div class="row">
                            <div class="list-group">

                                <?php for($a=0;$a<8;$a++) {
                                $artikel = array(
                                    "artikel-1-AIMAN-MENELISIK-RENCANA-LUHUT-PANDJAITAN.jpg",
                                    "artikel-2-LUHUT-KAMI-SEPAKAT-MENGEDEPANKAN-PENCEGAHAN-KORUPSI.jpg",
                                    "artikel-3-INI-AGENDA-BESAR-KEMENKOPULHAM-DIBAWAH-LUHUT-PANDJAITAN.jpg",
                                    "artikel-4-DUA-KALI-PRESIDEN-JOKOWI-KASIH-SAYA-KEJUTAN.jpg",
                                    "artikel-5-JADI-MENTRI-LUHUT-PANDJAITAN-SAYA-TAK-INGIN-MACAM-MACAM.jpg",
                                    "artikel-6-MENTRI-LUHUT-INGIN-ANAK-BUAHNYA-SATU-PANDANGAN.jpg",
                                    "artikel-7-TUGAS-SAYA-BUAT-STABILITAS-HUKUM-AGAR-ORANG-AMAN-BERINVESTASI.jpg",
                                    "artikel-8-KUNJUNGAN-KERJA-KE-PAPUA.jpg"
                                );

                                $title_artikel = array(
                                    "Aiman Menelisik Rencana Luhut Pandjaitan",
                                    "Luhut kami sepakat mengedepankan pencegahan korupsi",
                                    "Ini agenda besar kemenkopulham dibawah luhut pandjaitan",
                                    "Dua kali presiden jokowi kasih saya kejutan",
                                    "Jadi mentri luhut pandjaitan : saya tak ingin macam - macam",
                                    "Mentri luhut ingin anak buahnya satu pandangan",
                                    "Tugas saya buat stabilitas hukum agar orang aman berinvestasi",
                                    "Kunjungan kerja ke papua"
                                );

                                $link_artikel = array(
                                    "page-artikel-detail-1.php",
                                    "page-artikel-detail-2.php",
                                    "page-artikel-detail-3.php",
                                    "page-artikel-detail-4.php",
                                    "page-artikel-detail-5.php",
                                    "page-artikel-detail-6.php",
                                    "page-artikel-detail-7.php",
                                    "page-artikel-detail-8.php"
                                );

                                $sinopsis_artikel = array(
                                    "Pakai nuranimu sajalah. Kalau sekarang kamu bikin, semua orang kamu hukum.... Kamu tanya dirimu juga, kamu sakit jiwa atau apa? Dan kamu tanya dirimu, kamu jujur tidak? Jangan-jangan kamu maling juga",
                                    "JAKARTA, KOMPAS.com — Menteri Koordinator Politik Hukum dan Keamanan Luhut Binsar Pandjaitan menegaskan, kementerian dan lembaga yang berada di jajarannya akan ikut membantu sektor perekonomian Indonesia",
                                    "REPUBLIKA.CO.ID, JAKARTA -- Menteri Koordinator Politik dan Keamanan (Menkopolhukam) Luhut Binsar Pandjaitan mengatakan salah satu agenda besar yang akan diusung oleh pihaknya adalah menjamin stabilitas keamanan.",
                                    "TRIBUNNEWS.COM, JAKARTA - Dipercaya menjabat Menteri Koordinator Politik Hukum dan Keamanan adalah kejutan kedua yang diterima Luhut Binsar Panjaitan dari Presiden Joko Widodo.",
                                    "Suara.com - Hari ini, Kamis (13/8/2015), Luhut Binsar Pandjaitan? mulai beraktivitas sebagai Menteri Koordinator Politik Hukum dan Keamanan menggantikan? Tedjo Edhy Purdijatno.",
                                    "Metrotvnews.com, Jakarta: Menko Politik Hukum dan Keamanan Luhut Binsar Pandjaitan ingin semua pejabat di bawah koordinasinya satu suara setiap berbicara soal kebijakan. Jangan sampai ada silang pendapat di tengah publik.",
                                    "Jakarta - Menko Polhukam Luhut Panjaitan akan bertugas untuk memastikan situasi politik dan hukum di Indonesia tidak lagi gaduh. Dengan situasi yang kondusif, orang akan semakin nyaman berinvestasi di Indonesia.",
                                    "Masalah konektivitas jalur darat dan harga komoditi yang mahal di kawasan pegunungan Papua bakal bisa terselesaikan sebelum masa pemerintahan Jokowi berakhir."
                                );
                                ?>
                                <a href="<?php  echo $link_artikel[$a]; ?>" class="list-group-item">
                                    <div class="media col-md-4 col-md-offset-1 list-img-artikel">
                                        <img class="img-responsive"  src="img/items/<?php echo $artikel[$a]; ?>" alt="judul berita disini" >
                                    </div>
                                    <div class="col-md-4 col-md-offset-1">
                                        <h4 class="list-group-item-heading color-red"><?php echo $title_artikel[$a]; ?></h4>
                                        <p class="list-group-item-text"><?php  echo $sinopsis_artikel[$a]; ?></p>
                                    </div>
                                </a>
                                <?php } ?>

                            </div>
                        </div>
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane fade" id="video" aria-labelledBy="video-tab">

                    <div class="row apollo-hover">
                        <div class="list-group">
                            <?php for($i=0;$i<12;$i++) { ?>
                            <figure class="effect-apollo profile-homepage col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="slice slice-brown"><div class="plus">&plus;</div>
                                <img class="profile-photo-homepage img-responsive" src="img/pemikiran-item.png" alt="thumbnail berita di homepage">
                                <figcaption>
                                    <div class="caption-quotes-page">
                                        Judul Video disini
                                    </div>
                                    <a class="fancybox" href="img/pemikiran-item.png"title="Lorem ipsum dolor sit amet, consectetur adipiscing elit">hidden link</a>
                                </figcaption>
                                </div>
                            </figure>
                            <?php } ?>
                        </div>
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane fade" id="galerry" aria-labelledBy="galerry-tab">

                    <div class="row apollo-hover">
                        <div class="list-group">
                            <?php for($i=0;$i<12;$i++) { ?>
                            <figure class="effect-apollo profile-homepage col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="slice slice-brown"><div class="plus">&plus;</div>
                                    <img class="profile-photo-homepage img-responsive" src="img/list-berita-homepage.png" alt="thumbnail berita di homepage">
                                    <figcaption>
                                        <div class="caption-quotes-page">
                                            Judul Gallery disini
                                        </div>
                                        <a class="fancybox" href="img/pemikiran-item.png"title="Lorem ipsum dolor sit amet, consectetur adipiscing elit">hidden link</a>
                                    </figcaption>
                                </div>
                            </figure>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- /example -->
    </div><!-- /.container -->
<?php include 'footer.php';?>
