<?php
    session_start();
    include ('includes/config.php');
    $id = $_GET['movieID'];

?>
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
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-2 mb-3 ">
      <div class="container">
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
              <li class="nav-item p-2 ">
                <a class="nav-link " href="index.php">HOME</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link " href="#">MOVIE</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link " href="#">SERIES</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link " href="#">VARIETY SHOW</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link " href="#">ONGOING</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Nav Bar  -->


    <!-- End -->
    <!--Start main Section / first -->
    <div class="container col-bg text-center  w-100 vh-100 d-flex  align-items-center mt-5" id="one ">
      <div id="oneOverlay" >
      <?php
          $query = "SELECT * FROM movie_info 
          LEFT JOIN movie_link ON movie_info.movieCode=movie_link.movieCode
          LEFT JOIN movie_casts ON movie_info.movieCode=movie_casts.movieCode
          WHERE movieID=$id";
          $do = mysqli_query($conn,$query);
          $row = mysqli_fetch_array($do);
      ?>
        <div class="row ">
          <div class="col-lg-4 p-5 coat_poster_image">
            <div class="poster_image  " >
              <img src="assets/images/action_row/<?php echo $row['moviePoster']; ?>" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-8 p-5  " >
            <div class="poster_info " >
              <h3><?php echo $row['movieName']; ?></h3>
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
                <div class="tab-content col-10">
                  <div class="tab-pane fade show mb-3 mt-3 active info_tab_content" id="synosis" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                      <p><?php echo $row['movieSynosisShowUp'] ?></p>
                      <span id="points" >...</span>
                      <p id="moreText" > 
                        <?php echo $row['movieSynosisHide'] ?>
                      </p>
                    </p>
                    <button class="btn " onclick="toggleText()" id="textButton">
                      Read More
                    </button>
                  </div>
                  <div class="tab-pane fade mt-3" id="facts" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                    <div class="container text-center">
                      <div class="row mb-3 shadow facts_info_coat " >
                        <div class="col-md-12 facts_info mb-1 ">
                          <h5>Director</h5>
                          <span><?php echo $row['movieDirector'] ?></span>
                        </div>
                      </div>
                      <div class="row mb-3 shadow">
                        <div class="col facts_info mb-1">
                          <i class="bi bi-check-circle "></i><h5>Genre</h5>
                          <span><?php echo $row['movieGenre'] ?></span>
                        </div>
                        <div class="col facts_info mb-1">
                          <i class="bi bi-check-circle "></i><h5>Rating</h5>
                          <span><?php echo $row['movieRating'] ?>/10</span>
                        </div>
                      </div>
                      <div class="row shadow">
                        <div class="col facts_info mb-3">
                          <i class="bi bi-check-circle "></i><h5>Release</h5>
                          <span><?php echo $row['movieRelease'] ?></span>
                        </div>
                        <div class="col facts_info mb-3">
                          <i class="bi bi-check-circle "></i><h5>Duration</h5>
                          <span><?php echo $row['movieDuration'] ?></span>
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
                      <?php
                        $query1 = "SELECT * FROM movie_info 
                        INNER JOIN movie_casts ON movie_info.movieCode=movie_casts.movieCode
                        WHERE movieID=$id";
                        $do1 = mysqli_query($conn,$query1);

                        if($do1){
                          while ($row1 = mysqli_fetch_array($do1))
                          { 
                            ?>
                          <div class="col-md-4 info_img mb-3">
                            <img src="assets/images/main_casts/<?php echo $row1['cast_img']  ?>" class="img-fluid rounded mb-1" alt="...">
                            <p><?php echo $row1['cast']  ?></p>
                          </div>
                          <?php }
                          }
                      ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end tabs -->
            </div>
            <div class=" text-center watch_btn_div">           
              <a href="" type="button" class="btn trailer_btn default_btn mt-3  p-2" onclick="toggle();"><i class="bi bi-play-btn"></i>Watch Trailer</a>
                <div class="trailer">
                    <span class="close">&#10006;</span>
                    <iframe width="560" height="315" src="https://youtube.com/embed/<?php echo $row['movieYTLink'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="d-flex justify-content-center">
                  <?php
                      if($row['movieLink_1080'] == null){
                        ?>
                        <a class="btn default_small_btn mt-3 m-3 p-2 disabled"><i class="bi bi-play-circle"></i>1080 P</a>
                        <?php
                      }
                      else 
                      {
                        ?>
                        <a class="btn default_small_btn mt-3 m-3 p-2 " target="_blank" href="<?php echo $row['movieLink_1080'] ?>"><i class="bi bi-play-circle"></i>1080 P</a>
                        <?php
                      }
                  ?>
                  <?php
                      if($row['movieLink_720'] == null){
                        ?>
                        <a class="btn default_small_btn mt-3 m-3  p-2 disabled"><i class="bi bi-play-circle"></i>720 P</a>
                        <?php
                      }
                      else 
                      {
                        ?>
                        <a class="btn default_small_btn mt-3 m-3  p-2" target="_blank" href="<?php echo $row['movieLink_720'] ?>"><i class="bi bi-play-circle"></i>720 P</a>
                        <?php
                      }
                  ?>
                  
                </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Main Section / first -->

    <!-- Youtube Popup -->
    <!-- <div class="trailer hidden">
      <iframe id="playvideo" src="https://www.youtube.com/embed/OGb2Hkeu2BI" allowfullscreen  frameborder="0"></iframe>
        <span class="close">&times;</span>
    </div> -->
    <!-- End youtube popup -->

    <!-- related moveis -->
    <div class="container mt-5 mb-5 related " id="two">
      <div class="mb-4 related-title " >
        <span class="vl "></span>
        <span class="casts-title" >Related Movies</span>
      </div>
      <div class="row d-flex justify-content-around  align-items-center" >
        <div class="col-sm-3 mb-5"  >
          <div class="card">
            <img src="assets/images/action_row/m_00007.jpeg" class="card-img-top " alt="...">
            <div class="card-body d-flex">
              <div class="col-sm-8">
                <h6 class="card-title ">Red Notice</h6>
                <p class="card-text">
                  <i class="bi bi-star-fill"></i> 
                  <i class="bi bi-star-fill"></i>       
                  <i class="bi bi-star-half"></i>
                  <span class="mx-2">8.7/10 </span></p> 
              </div>
              <div class="col-sm-4 card-btn-cup">
                <a href="" class="btn btn-default  ">View </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3 mb-5">
          <div class="card">
            <img src="assets/images/action_row/m_00008.jpeg" class="card-img-top " alt="...">
            <div class="card-body d-flex">
              <div class="col-sm-8">
                <h6 class="card-title ">Free Guy</h6>
                <p class="card-text">
                  <i class="bi bi-star-fill"></i> 
                  <i class="bi bi-star-fill"></i>       
                  <i class="bi bi-star-half"></i>
                  <span class="mx-2">8.7/10 </span></p> 
              </div>
              <div class="col-sm-4 card-btn-cup">
                <a href="" class="btn btn-default  ">View </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3 mb-5">
          <div class="card">
            <img src="assets/images/action_row/m_00009.jpeg" class="card-img-top " alt="...">
            <div class="card-body d-flex">
              <div class="col-sm-8">
                <h6 class="card-title ">Mission Impossible:Fallout</h6>
                <p class="card-text">
                  <i class="bi bi-star-fill"></i> 
                  <i class="bi bi-star-fill"></i>       
                  <i class="bi bi-star-half"></i> 
                  <span class="mx-2">8.7/10 </span></p> 
              </div>
              <div class="col-sm-4 card-btn-cup">
                <a href="" class="btn btn-default  ">View </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3 mb-5">
          <div class="card">
            <img src="assets/images/action_row/m_00010.jpeg" class="card-img-top" alt="...">
            <div class="card-body d-flex">
              <div class="col-sm-8">
                <h6 class="card-title ">Kingsman: The Secret Service</h6>
                <p class="card-text">
                  <i class="bi bi-star-fill"></i> 
                  <i class="bi bi-star-fill"></i>       
                  <i class="bi bi-star-half"></i>
                  <span class="mx-2">8.7/10 </span></p> 
              </div>
              <div class="col-sm-4 card-btn-cup">
                <a href="" class="btn btn-default  ">View </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Related Movies -->

    <!--Start footer  -->
    <footer class="footer-section  pt-5" >
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
                                <li><a href="#">Details </a></li>
                                <li><a href="#">Related Movies</a></li>
                                <li><a href="#">Trendy Movies & Series</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Mail Us Here: </h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Feel free to ask what you need, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                          <div class="footer-widget-heading">
                            <h3>About POP<span>com<span></h3>
                          </div>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint a veniam earum, 
                              nisi quas facere corporis?</p>
                          <ul class="footer-social list-inline text-center" id="social-icons">
                              <li class="m-1 "><a href="#"><i class="bi bi-facebook"></i></a></li>
                              <li class="m-1"><a href="#"><i class="bi bi-twitter"></i></a></li>
                              <li class="m-1"><a href="#"><i class="bi bi-whatsapp"></i></a></li>
                              <li class="m-1"><a href="#"><i class="bi bi-instagram"></i></a></li>
                              <li class="m-1"><a href="#"><i class="bi bi-youtube"></i></a></li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2022, All Right Reserved <a href="#"><span>POP</span>com</a></p>
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
    <!-- Youtube PopUp video -->
    <script>
        const btn = document.querySelector('.trailer_btn');

        const videoContainer = document.querySelector('.trailer');

        const close = document.querySelector('.close');

        btn.addEventListener('click',(e)=>{
            e.preventDefault();
            videoContainer.classList.add('show');
        })

        close.addEventListener('click',()=>{
            videoContainer.classList.remove('show');
            pause.video();
        })
    </script>
    <!-- end youtube -->
    <script>
        AOS.init();
    </script>
</body>
</html>