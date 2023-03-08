<!DOCTYPE html>
<?php $page = 'about-epa'; ?>
<?php $sidebar = 'data-protection'; ?>

<html dir="ltr" lang="en">

<?php include("../head.php"); ?>

<body>

  <?php include("../header.php"); ?>

  <!-- Post Content Start -->
  <div class="section sigma_post-single">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="sidebar">
          
            <!-- Categories Start -->
            <div class="sidebar-widget widget-categories">

              <?php include("sidebar-left.php"); ?>

            </div><!-- Categories End -->

          </div>
        </div><!-- Sidebar End -->
        <div class="col-lg-8">
          <div class="post-detail-wrapper">
            <div class="entry-content">
              <div class="sigma_post-meta">
                <div class="sigma_post-categories">
                   <h4 class="entry-title">Data Protection</h4>
                </div>
              </div>
              
              <p><b>Data Protection link:</b></p>
              <p><b><a href="/doc/EPA-UNEPSA_DATA-PROTECTION-POLICY.pdf" target="_blank">Data Protection Policy</a></b></p>
              <p><b><a href="/doc/EPA-UNEPSA_CYBERSECURITY-POLICY.pdf" target="_blank">Cyber Security Policy</a></b></p>


            </div><!-- Post Meta Start -->
          </div>
        </div><!-- Sidebar Start -->
      </div>
    </div>
  </div><!-- Post Content End -->

  <?php include("../footer.php"); ?>

  <?php include("../script.php"); ?>

</body>
</html>