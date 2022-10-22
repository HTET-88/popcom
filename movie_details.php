<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Name / Details Page</title>
    <!-- Start style -->
    <?php include('includes/style.php') ?>
    <!-- End Style -->
</head>
<!-- fixed Background -->
<body id="blur_background"  style="background-image:url('assets/images/bg_use_blur.png')">
    <!-- Start Nav Bar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-2">
      <div class="container">
        <!-- <a class="navbar-brand" href="#">Web Zone</a> -->
        <div class="navbar-brand">
            <img src="assets/images/LOGO_COLLECTION/use.png" alt="" class="" height="36">
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">MOVIE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">SERIES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">TRENDY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">VARIETY SHOW</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">ONGOING</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Nav Bar  -->

    <!--Start main Section / first -->
    <div class="container col-bg text-center  w-100 vh-100 d-flex justify-content-center align-items-center" id="one">
      <div id="oneOverlay" >
        <div class="row ">
          <div class="col p-5">
            <div class="poster_image " >
              <img src="assets/images/action_row/Action_02.jpeg" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col p-5">
            <div class="poster_info " >
              <h3>SKYSCRAPER</h3>
              <hr>
              <!-- tabs- -->
              <div class="d-flex align-items-start">
                <div class="nav flex-column  me-3"  role="tablist" aria-orientation="vertical">
                  <button class="btn info_tab_header mb-1 text-light active nav-link"  data-bs-toggle="tab" data-bs-target="#synosis" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                    <i class="bi bi-bookmarks-fill"></i>
                    SYNOSIS
                  </button>
                  <button class="btn info_tab_header mb-1 text-light nav-link" data-bs-toggle="tab" data-bs-target="#facts" type="button" role="tab" >
                    Facts
                  </button>
                  <button class="btn info_tab_header mb-1 text-light nav-link" data-bs-toggle="tab" data-bs-target="#awards" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                    Awards
                  </button>
                  <button class="btn info_tab_header mb-1 text-light nav-link"  data-bs-toggle="tab" data-bs-target="#casts" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                    Casts
                  </button>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="synosis" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                    <h4>this is synosis</h4>
                  </div>
                  <div class="tab-pane fade" id="facts" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                    <h4>This is Facts</h4>
                  </div>
                  <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                    <h4>This is Awards</h4>
                  </div>
                  <div class="tab-pane fade" id="casts" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                    <h4>This is casts</h4>
                  </div>
                </div>
              </div>
              <!-- end tabs -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Main Section / first -->

   

    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" >
      <div class="content text-center">
        <h1>This is content</h1>
      </div>
    </div>
    <!-- first section  -->
    
    <!-- Start style -->
    <?php include('includes/script.php') ?>
    <!-- End Style -->
</body>
</html>