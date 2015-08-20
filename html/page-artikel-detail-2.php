<?php include 'head.php';?>
    <?php include 'mainmenu.php';?>
    <div class="container full-width">
        <div class="slice slice-red red-big">

            <h2 class="color-red"><span>ARTIKEL</span></h2>
            <div class="container page-detail">
                <img class="img-float-left" src="img/items/artikel-2-LUHUT-KAMI-SEPAKAT-MENGEDEPANKAN-PENCEGAHAN-KORUPSI.jpg" alt="judul berita">
                <h1 class="color-red">Luhut kami sepakat mengedepankan pencegahan korupsi</h1>
                <p>
                    Jakarta, kompas.Com — menteri koordinator politik hukum dan keamanan luhut binsar pandjaitan menegaskan, kementerian dan lembaga yang berada di jajarannya akan ikut membantu sektor perekonomian indonesia yang saat ini tengah lesu. Salah satu cara yang akan dilakukan adalah fokus pada pencegahan korupsi. Hal tersebut disampaikan luhut seusai rapat kerja dengan jajarannya di kantor kemenko polhukam, jakarta, selasa (18/8/2015).
                </p>
                <p>
                    Hadir dalam rapat tersebut kepala polri jenderal (pol) badrodin haiti, jaksa agung hm prasetyo, panglima tni jenderal gatot nurmantyo, kepala bin sutiyoso, kepala bnpt saud usman, menteri hukum dan ham yasonna h laoly, menteri pertahanan ryamizard ryacudu, mendagri tjahjo kumolo, dan menpan-rb yuddy chrisnandi.
                </p>
                <p>
                    "kami sepakat mengedepankan pencegahan korupsi," kata luhut.
                </p>
                <p>
                    Untuk mengedepankan pencegahan korupsi, rapat koordinasi bidang politik, hukum, dan keamanan sepakat untuk membentuk tim pengawal, pengamananan pemerintahan, dan pembangunan (tp4). Pembentukan tim ini adalah usul jaksa agung hm prasetyo. Nantinya, tim ini akan bertugas mengawasi kinerja lembaga pemerintah, baik pusat maupun daerah, untuk memastikan tidak ada penyimpangan dalam penggunaan anggaran.
                </p>
                <p>
                    "tidak ada lagi alasan ketakutan para pejabat di daerah untuk mengeksekusi program," kata  luhut.
                </p>
                <p>
                    Prasetyo menambahkan, fokus utama pemerintah saat ini adalah melakukan perbaikan di bidang ekonomi yang tidak akan bisa berdiri sendiri. Upaya itu harus di-back up dan didukung oleh semua pihak yang ada, termasuk dari penegak hukum. Oleh karena itu, pembentukan tp4 ini sangat dibutuhkan.
                </p>
                <p>
                    "tugasnya tim ini melakukan pendampingan. Seperti kata menko, tugas tim lebih ditekankan pada pencegahan agar tidak terjadi penyimpangan dan kesalahan," kata prasetyo.
                </p>
                <p>
                    Ia menegaskan, penegakan hukum akan tetap berjalan jika dengan tim ini masih ada tindakan korupsi yang dilakukan pejabat.
                </p>
                <p>
                    "kita berharap pejabat daerah memanfaatkan tim yang kita bentuk nanti supaya semuanya berjalan efektif dan efisien," kata dia.
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
