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
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-2 ">
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
          <ul class="navbar-nav navbar-nav-dark">
            <li class="nav-item ">
              <a class="nav-link " href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">MOVIE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">SERIES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">TRENDY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">VARIETY SHOW</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">ONGOING</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Nav Bar  -->


    <!-- End -->
    <!--Start main Section / first -->
    <div class="container col-bg text-center  w-100 vh-100 d-flex justify-content-center align-items-center mt-4" id="one ">
      <div id="oneOverlay" >
        <div class="row ">
          <div class="col-lg-4 p-5 coat_poster_image">
            <div class="poster_image  " >
              <img src="assets/images/action_row/Action_02.jpeg" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col p-5 shadow-lg " data-aos="fade-in" data-aos-duration="1000">
            <div class="poster_info " >
              <h3>TOPGUN : MAVERICK</h3>
              <hr>
              <!-- tabs- -->
              <div class="d-flex ">
                <div class="nav nav-pills flex-column  me-3"  role="tablist" aria-orientation="vertical">
                  <button class="btn info_tab_header mb-3 mt-3 text-light active nav-link"  data-bs-toggle="tab" data-bs-target="#synosis" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                    <i class="bi bi-bookmarks"></i>
                    SYNOSIS
                  </button>
                  <button class="btn info_tab_header mb-3 text-light nav-link" data-bs-toggle="tab" data-bs-target="#facts" type="button" role="tab" >
                    <i class="bi bi-card-list"></i>
                    Facts
                  </button>
                  <button class="btn info_tab_header mb-3 text-light nav-link" data-bs-toggle="tab" data-bs-target="#awards" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                    <i class="bi bi-trophy"></i>
                    Awards
                  </button>
                  <button class="btn info_tab_header mb-3 text-light nav-link"  data-bs-toggle="tab" data-bs-target="#casts" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                    <i class="bi bi-people"></i>
                    Casts
                  </button>
                </div>
                <div class="tab-content ">
                  <div class="tab-pane fade show mb-3 mt-3 active info_tab_content" id="synosis" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                    <p>After more than 30 years of service as one of the Navy's top aviators, Pete "Maverick" Mitchell is where he belongs, pushing the envelope as a courageous test pilot and dodging the advancement in rank that would ground him.
                      <span id="points" >...</span>
                      <span id="moreText"> Training a detachment of graduates for a special assignment, Maverick must confront the ghosts of his past and his deepest fears, culminating in a mission that demands the ultimate sacrifice from those who choose to fly it.</span>
                    </p>
                    <button class="btn " onclick="toggleText()" id="textButton">
                      Read More
                    </button>
                  </div>
                  <div class="tab-pane fade mt-3" id="facts" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                    <div class="container text-center">
                      <div class="row mb-3 shadow facts_info_coat" >
                        <div class="col facts_info ">
                          <i class="bi bi-check-circle "></i><h6>Director</h6>
                          <span>Joseph Kosinski</span>
                        </div>
                        <div class="col facts_info ">
                          <i class="bi bi-check-circle "></i><h6>Rating</h6>
                          <span>8.4/10</span>
                        </div>
                      </div>
                      <div class="row mb-3 shadow">
                        <div class="col facts_info ">
                          <i class="bi bi-check-circle "></i><h6>Genre</h6>
                          <span>Action | Adventure | Drama</span>
                        </div>
                        <div class="col facts_info  ">
                          <i class="bi bi-check-circle "></i><h6>Country</h6>
                          <span>United States</span>
                        </div>
                      </div>
                      <div class="row shadow">
                        <div class="col facts_info">
                          <i class="bi bi-check-circle "></i><h6>Release</h6>
                          <span>2022</span>
                        </div>
                        <div class="col facts_info">
                          <i class="bi bi-check-circle "></i><h6>Duration</h6>
                          <span>2 hrs and 11mins</span>
                        </div>      
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade mt-3 info_tab_awards" id="awards" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                    <h4 >Nominations</h4>
                    <ul>
                      <li>Academy of Science Fiction, Fantasy & Horror Films, USA 2022</li>
                      <li>Hollywood Critics Association Midseason Awards 2022</li>
                    </ul>
                  </div>
                  <div class="tab-pane fade mt-3 info_tab_casts " id="casts" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                    <h4 class="mb-3">Casts</h4>
                    <div class="container text-center align-items-center">
                      <div class="row">
                        <div class="col-md-4 info_img ">
                          <img src="assets/images/main_casts/tom_cruise.jpg" class="img-fluid rounded mb-1" alt="...">
                          <p>Tom Cruise</p>
                        </div>
                        <div class="col-md-4 info_img">
                          <img src="assets/images/main_casts/miles_teller.jfif" class="img-fluid rounded mb-1" alt="...">
                          <p>Miles Teller</p>
                        </div>
                        <div class="col-md-4 info_img">
                          <img src="assets/images/main_casts/val_kilmer.jfif" class="img-fluid rounded mb-1" alt="...">
                          <p>Val Kilmer</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4 info_img">
                          <img src="assets/images/main_casts/glen_powell.jpg" class="img-fluid rounded mb-1" alt="...">
                          <p>Glen Powell</p>
                        </div>
                        <div class="col-md-4 info_img">
                          <img src="assets/images/main_casts/Jennifer_ connelly.jpg" class="img-fluid rounded mb-1" alt="...">
                          <p>Jennifer Connelly</p>
                        </div>
                        <div class="col-md-4 info_img">
                          <img src="assets/images/main_casts/jon_hamm.jpg" class="img-fluid rounded mb-1" alt="...">
                          <p>Jon Hamm</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end tabs -->
            </div>
            <div class=" text-center watch_btn_div">           
              <a href="" type="button" class="btn trailer_btn default_btn mt-3  p-2"><i class="bi bi-play-btn"></i>Watch Trailer</a>
              <button class="btn default_btn mt-3  p-2 "><i class="bi bi-play-circle"></i>Go Telegram</button>
          </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Main Section / first -->

    <!-- Youtube Popup -->
    <div class="trailer hidden">
      <iframe id="playvideo" src="https://www.youtube.com/embed/OGb2Hkeu2BI" allowfullscreen  frameborder="0"></iframe>
        <span class="close">&times;</span>
    </div>
    <!-- End youtube popup -->
    
    <!-- related moveis -->
    <div class="container mt-5 mb-5 related" id="two">
      <h3>Related Casts' Movies</h3>
      <div class="services">
        <a href="#" class="releated_poster" data-aos="fade-up" data-aos-duration="1000">
            <span class="single-img img-one">
                <span class="img-text">
                    <h4>Free Guy </h4>
                    <button>Watch Now</button>
                </span>
            </span>
        </a>
        <a href="#" class="releated_poster" data-aos="fade-up" data-aos-duration="1000">
            <span class="single-img img-two"> 
                <span class="img-text">
                    <h4>Mission Impossible:Fallout</h4>
                    <button>Buy Now</button>
                </span>
            </span>
        </a>
        <a href="#" class="releated_poster" data-aos="fade-up" data-aos-duration="1000">
            <span class="single-img img-three">
                <span class="img-text">
                    <h4>Red Notice</h4>
                    <button>Watch Now</button>
                </span>
            </span>
        </a>
      </div>
    </div>
    <!-- End Related Movies -->

    <!--Start footer  -->
    <footer class="footer-section  pt-5"  data-aos="fade-right" data-aos-duration="1000">
        <div class="container">
                <div class="row " id="foot">
                    <div class="col-md-3 info " >
                                <i class="fas fa-map-marker-alt"></i>
                                <h4 class="text-light">What's up :</h4>
                                <p> +95 9364895978</p>
                    </div>
                    <div class="col-md-3 info">
                                <i class="fas fa-phone"></i>
                                <h4  class="text-light">Contact No.</h4>
                                <p>+95 9898967630</p>
                    </div>
                    <div class="col-md-3 info">
                                <i class="far fa-envelope-open"></i>
                                <h4  class="text-light">Mail us</h4>
                                <p>popcom@icloud.com</p>
                    </div>
                </div>
                
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Expert Team</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2022, All Right Reserved <a href="#"><span>POP</span>com</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">HOME</a></li>
                                <li><a href="#">Actions</a></li>
                                <li><a href="#">Animation</a></li>
                                <li><a href="#">International Series</a></li>
                                <li><a href="#">Instructions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End footer  -->
    
    <!-- Start style -->
    <?php include('includes/script.php') ?>
    <!-- End Style -->

    <script>
      const trailer_btn = document.querySelector('.trailer_btn');
      const video = document.querySelector('iframe');
      const close =document.querySelector('.close');
      const trailer =document.querySelector('.trailer');


      trailer_btn.addEventListener('click', (e)=>{
        e.preventDefault();
          trailer.classList.remove('hidden');
      });
      close.addEventListener('click', (e)=>{
        e.preventDefault();
          trailer.classList.add('hidden');
      })
    </script>
    <script>
        AOS.init();
    </script>
</body>
</html>