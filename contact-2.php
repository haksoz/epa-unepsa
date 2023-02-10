<!DOCTYPE html>
<?php $page = 'contact'; ?>

<html dir="ltr" lang="en">

<?php include("head.php"); ?>

<body>

  <?php include("header.php"); ?>

  <!-- Map Start -->
  <div class="sigma_map">
    <iframe allowfullscreen src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9914406081493!2d2.292292615201654!3d48.85837360866272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sEiffel%20Tower!5e0!3m2!1sen!2sin!4v1571115084828!5m2!1sen!2sin"></iframe>
  </div><!-- Map End -->
  <!-- Contact form Start -->
  <div class="section mt-negative pt-0">
    <div class="container">
      <form action="https://metropolitanhost.com/themes/themeforest/html/maharatri/sendmail.php" class="sigma_box box-lg m-0 mf_form_validate ajax_submit" enctype="multipart/form-data" method="post">
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <i class="far fa-user"></i> <input class="form-control dark" name="name" placeholder="Full Name" type="text">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <i class="far fa-envelope"></i> <input class="form-control dark" name="email" placeholder="Email Address" type="email">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <i class="far fa-pencil"></i> <input class="form-control dark" name="Subesubject" placeholder="Subject" type="text">
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea class="form-control dark" cols="45" name="message" placeholder="Enter Message" rows="5"></textarea>
        </div>
        <div class="text-center">
          <button class="sigma_btn-custom" name="button" type="submit">Submit Now</button>
          <div class="server_response w-100"></div>
        </div>
      </form>
    </div>
  </div><!-- Contact form End -->
  <!-- Icons Start -->
  <div class="section section-padding pt-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="sigma_icon-block text-center light icon-block-7">
            <i class="flaticon-email"></i>
            <div class="sigma_icon-block-content">
              <span>Send Email <i class="far fa-arrow-right"></i></span>
              <h5>Email Address</h5>
              <p> info@epa-unepsa.org</p>
            </div>
            <div class="icon-wrapper">
              <i class="flaticon-email"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="sigma_icon-block text-center light icon-block-7">
            <i class="flaticon-call"></i>
            <div class="sigma_icon-block-content">
              <span>Call Us Now <i class="far fa-arrow-right"></i></span>
              <h5>Phone Number</h5>
              <p>+000 000 00 00</p>
            </div>
            <div class="icon-wrapper">
              <i class="flaticon-call"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="sigma_icon-block text-center light icon-block-7">
            <i class="flaticon-location"></i>
            <div class="sigma_icon-block-content">
              <span>Find Us Here <i class="far fa-arrow-right"></i></span>
              <h5>Location</h5>
              <p>16/A</p>
            </div>
            <div class="icon-wrapper">
              <i class="flaticon-location"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- Icons End -->
  <!-- partial:partia/__footer.html -->
  <?php include("footer.php"); ?>

  <?php include("script.php"); ?>

</body>
</html>