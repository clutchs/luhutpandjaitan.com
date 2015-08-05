<?php include 'head.php';?>
    <?php include 'mainmenu.php';?>
    <div class="container full-width">
      <!-- main photo -->
      <div class="main-photo">
        <img class="img-responsive" src="img/luhut-panjaitan-homepage.jpg" alt="photo main">
        <blockquote>
          <p>
            &ldquo;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum.
            &rdquo;
          </p>
        </blockquote>
      </div>
      <!-- /.main photo -->
      <div class="row quotes-home">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
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
                    <div class="carousel-inner">
                      <?php for($i=0;$i<5;$i++) { ?>
                      <div class="item <?php echo $i==0 ? 'active':'' ?>">
                        <h3 class="title-white">QUOTES <?php echo $i; ?></h3>
                        <blockquote>
                          <p>
                            &ldquo;
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.
                            &rdquo;
                          </p>
                        </blockquote>
                      </div>
                      <?php } ?>
                    </div>
                  </div>

              </div>
          </section>
          <!-- /.carousel -->
        </div>
        <div class="profile-homepage col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <img class="profile-photo-homepage img-responsive" src="img/profile-home-photo.png" alt="photo profile luhut at homepage">
          <div class="profile-item">
            <h1>PROFILE</h1>

          </div>
        </div>
      </div>

      <div class="main-content">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document.</p>
      </div>

    </div><!-- /.container -->
<?php include 'footer.php';?>
