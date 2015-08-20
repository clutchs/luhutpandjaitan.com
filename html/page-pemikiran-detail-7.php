<?php include 'head.php';?>
    <?php include 'mainmenu.php';?>
    <div class="container full-width">
        <div class="slice slice-blue blue-big page-blue-big">

            <h2 class="color-red"><span>PEMIKIRAN</span></h2>
            <div class="container page-detail">
                <img class="img-ctr img-responsive" src="img/items/pemikiran-7-film-jendral-soedirman.jpg" alt="judul berita">
                <h1 class="color-red">Film Jendral Soedirman</h1>
                <p>
                    "Saya serahkan kembali pemerintahanmiliter ini kepada pemerintahan Soekarno yang lebih berhak melanjutkan kepemimpinan negeri tercinta ini. Tugas saya menjadi panglima besar sudah selesai, izinkan saya kembali ke keluarga untuk beristirahat."
                </p>
                <p>
                    Ungkapan Jenderal Soedirman itu sangat berkesan bagi saya. Saya bersama Executive Producer Letjen TNI (Purn) Kiki Syahnakri, adik kelas saya di Akabri, dan sutradara Viva Westi menyaksikan cuplikan film ini, Kamis (7/5) kemarin. Meski belum sepenuhnya selesai, potongan film berdurasi 16 menit itu sangat bagus menggambarkan sosok Jenderal Soedirman.
                </p>
                <p>
                    Sebelumnya saya pernah melihat film Cahaya Dari Timur; Beta Maluku saat nonton bersama Presiden Jokowi dan para menteri. Menurut saya, film itu bagus dan menginspirasi banyak orang. Saya pun berharap film Jenderal Soedirman yang akan rilis Agustus nanti memberikan gambaran bagus tentang Panglima TNI pertama di Indonesia ini.
                </p>
                <p>
                    Adegan awal film Jenderal Soedirman memperlihatkan bahwa TNI itu lahir dari rakyat dan demokrasi. Pada tanggal 12 November 1945, di usianya yang masih 29 tahun, dalam sebuah pemilihan untuk menentukan panglima besar TKR di Yogyakarta, Soedirman terpilih menjadi panglima besar melalui voting, dia hanya selisih satu suara dengan Letnan Jenderal Oerip Soemohardjo, yang telah aktif di militer sebelum Soedirman jadi tentara. Selanjutnya film ini banyak bercerita ketika Soedirman bergerilya melawan penjajah, dikejar-kejar Belanda. Andai Soedirman tidak memutuskan bergerilya dan tidak menyerah kepada Belanda pada 19 Desember 1948, mungkin indonesia bukan seperti sekarang. Dan, tak banyak anak muda ketahui saat ini bahwa Soedirman meninggal di usia muda; 34 tahun.
                </p>
                <p>
                    Kemunculan sosok Tan Malaka dalam film ini juga menarik. Terlepas dari sosok Tan Malaka yang kontroversi, menurut saya, sejarah Tan Malaka sebagai pahlawan nasional perlu ditampilkan lebih jauh.
                </p>
                <p>
                    Saya memberi catatan agar film ini juga menampilkan kedekatan hubungan Tan Malaka dengan Pak Dirman, panggilan Jenderal Soedirman seadaanya karena alm. Tan Malaka adalah tokoh kontorversial. Dalam sejarah, persahabatan mereka ditautkan oleh persamaan ide dan visi perjuangan, yaitu pencapaian kemerdekaan 100 persen melalui perjuangan tentara yang pantang menyerah. Tan Malaka mencatat ucapan Soedirman kala itu. "Lebih baik kita dibom atom daripada merdeka kurang dari 100 persen."
                </p>
                <p>
                    Saya berharap film ini bisa ditonton sebanyak-banyak orang, terutama generasi muda yang sekarang hanya tahu bahwa “Jenderal Soedirman” adalah nama jalan raya (karena di hampir semua kota di Indonesia ada jalan utama yang bernama Jalan Jenderal Soedirman) atau pernah lihat patungnya di dekat Jembatan Dukuh Atas di Jakarta.
                </p>
                <p>
                    Mungkin bisa dianggap sebagai  ‘kado’  TNI di jelang kemerdekaan kita yang ke-70. Seingat saya tak banyak film yang bercerita tentang TNI setelah film Janur Kuning dibuat tahun 1980an dahulu.
                </p>
                <p>
                    Saya sampai hari ini masih ingat ucapan Panglima Besar Soedirman yang berbunyi: “Bahwa satu-satunya hak milik nasional/republik yang masih utuh tidak berubah-ubah, meskipun harus mengalami segala macam soal dan perubahan, hanyalah Angkatan Perang Republik Indonesia (Tentara Nasional Indonesia)…”
                </p>
                <p>
                    Harapan saya, semoga generasi muda, sipil atau TNI bisa meresapi makna kata-kata di atas bila telah menyaksikan film tersebut. Semoga!
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
