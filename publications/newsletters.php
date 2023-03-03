<!DOCTYPE html>
<?php $page = 'newsletters'; ?>

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
                   <h4 class="entry-title">EPA/UNEPSA Newsletter</h4>
                </div>
              </div>
              <?php
              include "../newsletter-array.php";
              foreach ($newsletterItems as $item => $itemvalue){
                $order[$item] = $itemvalue['issues'];
                }
                array_multisort($order, SORT_DESC, $newsletterItems);
                foreach ($newsletterItems as $item => $itemvalue){
                    $order[$item] = $itemvalue['issues'];
                    echo '<div class="row align-items-center sigma_box" id="newsletter'.$itemvalue['issues'].'">
                            <div class="col-lg-3 col-xl-3 mb-lg-30">
                                <img src="'.$itemvalue['image_url'].'" class="w-100" alt="details">
                            </div>
                            <div class="col-lg-9 col-xl-9">
                                <h6>'.$itemvalue['name'].'</h6>
                                <p>'.$itemvalue['description'].'
                                </p>
                                <ul class="sigma_sm square light">
                                    <li>
                                        <a href="'.$itemvalue['pdf_url'].'" target="_blank">
                                            <i class="far fa-file-pdf"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>';
                    }
              ?>
              
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