<!DOCTYPE html>
<?php $page = 'publications'; ?>
<?php $sidebar = 'publications'; ?>

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
                                    <h4 class="entry-title">EPA/UNEPSA Publications</h4>
                                </div>
                            </div>
                            <h6>EPA-UNEPSA Publications and Supported Editorial Products</h6>
                            <?php
                            include "../publications-array.php";
                            foreach ($publicationsItems as $publicationsitem => $publicationsitemvalue){
                                $publicationsorder[$publicationsitem] = $publicationsitemvalue['issues'];
                            }
                            array_multisort($publicationsorder, SORT_DESC, $publicationsItems);
                            foreach ($publicationsItems as $publicationsitem => $publicationsitemvalue){
                                $publicationsorder[$publicationsitem] = $publicationsitemvalue['issues'];
                                echo '<div class="row align-items-center sigma_box" id="publications'.$publicationsitemvalue['issues'].'">
                                        <div class="col-lg-3 col-xl-3 mb-lg-30">
                                            <img src="'.$publicationsitemvalue['image_url'].'" class="w-100" alt="details">
                                        </div>
                                        <div class="col-lg-9 col-xl-9">
                                            <h6>'.$publicationsitemvalue['name'].'</h6>
                                            <p>'.$publicationsitemvalue['description'].'</p>
                                            <ul class="sigma_sm square light">
                                                <li>
                                                    <a href="'.$publicationsitemvalue['pdf_url'].'" target="_blank">
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