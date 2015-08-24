<?php include 'head.php';?>
    <?php include 'mainmenu.php';?>
    <div class="container full-width">
        <div class="slice slice-blue blue-big page-blue-big">

            <div class="container page-detail">
                <img class="img-ctr img-responsive" src="img/items/pemikiran-5-hidup-tak-hanya-untuk-mencari.png" alt="judul berita">
                <h1 class="color-red">Hidup Tak Hanya Mencari</h1>
                <p>
                    Danau Toba dan tarian Tor-tor di Sumatera Utara memang indah, namun sayangnya keunggulan lokal tersebut tidak diimbangi dengan kemampuan ekonomi yang baik. Banyak warga masyarakat lokal yang masih hidup di bawah garis kemiskinan, sehingga demi memperjuangkan kebutuhan sehari-hari mereka seringkali terpaksa mengorbankan cita-cita meraih pendidikan yang lebih tinggi. Impian untuk mengubah nasib pun terpaksa dikubur dalam-dalam.
                </p>
                <p>
                    Karena kenyataan di atas itulah saya mendirikan organisasi sosial yang bergerak di bidang pendidikan.
                </p>
                <p>
                    Setelah saya pensiun dari karir militer, duta besar, dan menteri, tahun 2001 saya punya ide untuk membangun yayasan dan sekolah untuk masyarakat yang membutuhkan. Lalu saya dan istri saya, Devi, membuat sebuah yayasan misi sosial bernama Yayasan Del. Del adalah bentuk rasa syukur saya kepada Tuhan. Tujuannya tidak lain untuk mengoptimalkan sumber daya manusia Indonesia hingga kelak dapat menjadi manusia yang berguna bagi bangsa dan negara.
                </p>
                <p>
                    Yayasan Del bergerak di sektor pendidikan, teknologi, kesehatan, kemanusiaan dan membangun panti asuhan. Selain itu kami juga memberikan program beasiswa tanpa membedakan status maupun golongan.  Program pertama kami adalah dengan mulai mendirikan Politeknik Informatika yang kini telah menjadi Institut Teknologi Del, di tepi Danau Toba. Tepatnya di Sitoluama, Laguboti, Kab. Tobasa. Sekarang, IT Del telah membuka program studi baru, yaitu: S1 Teknik Manajemen Rekayasa, Sistem Informasi dan Teknik Informatika, serta D3 Teknik Informatika.
                </p>
                <p>
                    IT Del berdiri untuk menyediakan pendidikan tinggi berkualitas internasional bagi siswa/i yang berpotensi, terutama yang berasal dari Sumatera Utara. Di samping turut berperan sebagai inisiator penggerak ekonomi di Tapanuli, IT Del diharapkan juga menginkubasi lahirnya para technopreneur di bidang teknologi informasi.
                </p>
                <p>
                    Yayasan Del ini juga aktif bekerjasama dengan Pemda setempat dan lembaga-lembaga sosial yang ada di Indonesia dalam menyalurkan bantuan kemanusiaan. Yayasan Del berkomitmen untuk mengembangkan pelayanan pada bidang-bidang yang sudah dimulai serta memperluas cakrawala di bidang pelayanan strategis lainnya.
                </p>
                <p>
                    Untuk itulah yayasan ini hadir untuk membantu mengoptimalkan potensi para pemuda dan pemudi di wilayah Sumatera Utara.
                </p>
                <p>
                    Sesuai dengan prinsip korporasi, tanggung jawab dan obyektif perusahaan adalah untuk mendapatkan keuntungan dan membawa return of investment yang terbaik bagi pemegang saham. Namun mengingat kondisi masyarakat kita yang masih banyak membutuhkan bantuan, tanggung jawab pengusaha dan swasta, adalah bagaimana kehadiran perusahaan dan operasi bisnis mereka itu membawa sebesar-besarnya kemanfaatan bagi masyarakat sekitarnya, kemanfaatan ekonomi maupun sosial.
                </p>
                <p>
                    Saya sudah bahagia dengan apa yang sudah saya capai. Jadi buat saya sekarang bagaimana hidup saya bisa bermanfaat buat orang lain.
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
