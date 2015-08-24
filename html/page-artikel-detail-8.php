<?php include 'head.php';?>
    <?php include 'mainmenu.php';?>
    <div class="container full-width">
        <div class="slice slice-red red-big">

            <div class="container page-detail">
                <img class="img-float-left" src="img/items/artikel-8-KUNJUNGAN-KERJA-KE-PAPUA.jpg" alt="judul berita">
                <h1 class="color-red">Kunjungan kerja ke papua</h1>
                <p>
                    Masalah konektivitas jalur darat dan harga komoditi yang mahal di kawasan pegunungan papua bakal bisa terselesaikan sebelum masa pemerintahan jokowi berakhir.
                </p>
                <p>
                    Optimisme tersebut diungkapkan kepala staf kepresidenan luhut binsar pandjaitan di papua, selasa (4/8). Luhut mengunjungi papua untuk melihat lebih dekat persoalan di bumi cenderawasih serta mencari peta solusinya. Sebelum ke puncak jaya, luhut mengunjungi distrik mamit di kabupaten tolikara, lalu ke lokasi pembangunan kios dan musala yang terbakar dan berdialog dengan kepala-kepala distrik papua di jayapura.
                </p>
                <p>
                    Sulitnya akses darat di beberapa wilayah di papua membuat harga barang di papua sangat mahal. Misalnya di puncak jaya, indeks kemahalan konstruksi sebesar 413,38 atau tertinggi ketiga di papua.
                </p>
                <p>
                    Luhut mengatakan, pemerintahan jokowi sangat serius memperhatikan pertumbuhan infrastruktur di papua. Dana bukan lagi menjadi masalah sejauh penggunaannya sesuai dengan undang-undang. Bila akses ke masing-masing daerah terhubung akan memperlancar arus barang dan menurunkan harga.
                </p>
                <p>
                    Ia juga menyinggung rencana pemerintah membuka jalur dari kawasan selatan atau sekitar wamena ke utara arah membramo yang diperkirakan bisa mencapai panjang lebih dari 500 km. Jika itu terjadi, wilayah yang terisolasi bisa dijangkau lewat darat serta harga komoditi di kawasan pegunungan tidak semahal sekarang.
                </p>
                <p>
                    “saya sudah dapat gambaran mengenai konektivitas di wilayah pegunungan papua sehingga saya kira bisa terselesaikan pada 2018,” kata luhut didampingi deputi iv kantor staf presiden bidang komunikasi politik dan desiminasi informasi eko sulistyo, deputi v bidang analisis data dan informasi strategis andogo wiradi dan staf khusus bidang politik dan media atmadji sumarkidjo.
                </p>
                <p>
                    Luhut menekankan, papua harus menjadi milik orang papua. Untuk itu orang papua harus mampu bersaing dengan para pendatang karena di era sekarang ini kita tidak bisa melarang orang untuk datang. Kunci agar mampu bersaing adalah pendidikan.
                </p>
                <p>
                    “siapkan anak-anak kita dengan pendidikan yang baik,” katanya seraya mencontohkan model peningkatan kualitas pendidikan di papua yang berhasil mendidik anak-anak papua yang dikerjakan oleh yayasan papua harapan di mamit, tolikara.
                </p>
                <p>
                    “saya lihat anak-anak papua yang jago-jago matematika. Mereka bisa jika kualitas pendidikannya kita benahi,” ujarnya.
                </p>
                <p>
                    Luhut juga menekankan pentingnya menjaga kebersamaan dan toleransi antar umat beragama di papua. Saat mengunjungi puncak jaya, luhut sempat mendatangi gereja gidi dan masjid mujahidin mulya yang letaknya berdekatan.
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
