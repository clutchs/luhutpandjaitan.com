<?php include 'head.php';?>
    <?php include 'mainmenu.php';?>

    <div class="container full-width">
      <!-- main photo -->
      <h2 class="head-page-contact">KONTAK</h2>
      <div class="container">
        <div class="text-contact">
          <h4 class="color-red">
            Mari saling menyapa.<br>
            hubungi saya melalui email : adms.lbp@gmail.com, <br>
            facebook : https://www.facebook.com/luhutbinsar.pandjaitan, <br>
          </h4>
          <p>Atau Meninggalkan Pesan Dibawah ini :</p>
        </div>
      </div>
      <div class="contact-page-brown">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form class="form-horizontal" action="" method="post">
                  <fieldset>
                    <!-- Name input-->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="name">Name</label>
                      <div class="col-md-9">
                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                      </div>
                    </div>

                    <!-- Email input-->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="email">Your E-mail</label>
                      <div class="col-md-9">
                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                      </div>
                    </div>

                    <!-- website input-->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="website">Website</label>
                      <div class="col-md-9">
                        <input id="website" name="website" type="text" placeholder="Website" class="form-control">
                      </div>
                    </div>

                    <!-- subject input-->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="website">Subject</label>
                      <div class="col-md-9">
                        <input id="subject" name="subject" type="text" placeholder="Subject" class="form-control">
                      </div>
                    </div>

                    <!-- Message body -->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="message">Your message</label>
                      <div class="col-md-9">
                        <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                      </div>
                    </div>

                    <!-- Form actions -->
                    <div class="form-group">
                      <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-primary btn-lg">Send</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.container -->
<?php include 'footer.php';?>
