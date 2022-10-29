<?php
    session_start();
    include ('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POPCOM - Have Fun Here! </title>

    <!-- bod -->
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- custom style -->
    <link rel="stylesheet" href="/assets/css/ani.css">
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>

    <!-- NAV -->
    <div class="nav-wrapper"  data-aos="fade-in-up" data-aos-duration="0.5s"  >
        <div class="container">
            <div class="nav">
                <a href="#" class="logo">
                    <img src="assets/images/mainlogo.png" alt="">
                </a>    
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">Series</a></li>
                    <li><a href="#">Trendy</a></li>
                    <li><a href="#">Variety Show</a></li>
                    <li><a href="#">Ongoing</a></li>
                </ul>
                <!-- MOBILE MENU TOGGLE -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END NAV -->

    <!-- First SECTION -->
    <div class="hero-section" >
        <!-- carousel SLIDE -->
        <div class="hero-slide">
            <div class="owl-carousel carousel-nav-center" id="hero-carousel">
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item ">
                    <img src="assets/images/first/movie1.jpg" alt="" id="fade_img">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down typewriter">
                                UNCHARTED
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <div class="" id="banner_btn">
                                        <button class="btn " >Action/ Drama</button>
                                        <button class="btn-sub">2021</button>
                                        <button class="btn-sub">USA</button>
                                        <button class="btn-sub">116 Min</button>
                                    </div>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, possimus eius. Deserunt non odit, cum vero reprehenderit laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium, facere ab suscipit.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="#" class="watch-now-btn">
                                    <i class="bi bi-play-circle"></i>
                                    <span>Watch now</span>
                                </a>
                                <a href="#" class="watch-now-btn">
                                    <i class="bi bi-youtube"></i>
                                    <span>Trailer </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="assets/images/first/movie2.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                        <div class="item-content-title top-down typewriter">
                                MOANA
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <div class="" id="banner_btn">
                                        <button class="btn " >Action/ Drama</button>
                                        <button class="btn-sub">2021</button>
                                        <button class="btn-sub">USA</button>
                                        <button class="btn-sub">162MIN</button>
                                    </div>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, possimus eius. Deserunt non odit, cum vero reprehenderit laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium, facere ab suscipit.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="#" class="watch-now-btn">
                                    <i class="bi bi-play-circle"></i>
                                    <span>Watch now</span>
                                </a>
                                <a href="#" class="watch-now-btn">
                                    <i class="bi bi-youtube"></i>
                                    <span>Trailer </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="assets/images/first/movie3.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down typewriter">
                                SUPER NATURAL
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <div class="" id="banner_btn">
                                        <button class="btn " >Series / Horror/ Drama</button>
                                        <button class="btn-sub">2021</button>
                                        <button class="btn-sub">USA</button>
                                        <button class="btn-sub">162MIN</button>
                                    </div>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, possimus eius. Deserunt non odit, cum vero reprehenderit laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium, facere ab suscipit.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="#" class="watch-now-btn">
                                    <i class="bi bi-play-circle"></i>
                                    <span>Watch now</span>
                                </a>
                                <a href="#" class="watch-now-btn">
                                    <i class="bi bi-youtube"></i>
                                    <span>Trailer </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
            </div>
        </div>
        <!-- END HERO SLIDE -->
    </div>
    <!-- END nav & first SECTION -->

    <?php
		$query = "SELECT * FROM movie_info";
    ?>
    <!-- Action MOVIES SECTION -->
    <div class="section"  data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="section-header" >
                <span>New Release</span>
                <div class="category"  style="margin-top: 10px;">
                    <h3>Movies</h3>
                </div>
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
            <?php
				$do = mysqli_query($conn,$query);

				if($do){
					while ($row = mysqli_fetch_array($do))
					{ 
						$id = $row['movieID'];
						// $skum = $row['SKUMaster'];
				    ?>
                <!-- MOVIE ITEM -->
                <div>
                    <a href="#" class="movie-item">
                        <img src="./assets/images/action_row/<?php echo $row['moviePoster']; ?>" alt="">
                        <div class="movie_title">
                            <button class="btn " onclick="location.href='movie_details.php?movieID=<?= $id ?>';">VIEW</button>
                        </div>
                    </a>
                    <div class="movie_body ">
                        <h4 class="movie-name "><?php echo $row['movieName']; ?></h4>
                        <p class="card-text">
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i>      
                            <i class="bi bi-star-half"></i> 
                            <span class="mx-2"><?php echo $row['movieRating']; ?>/10 </span>
                        </p> 
                    </div>
                </div>
                <?php }
				}
			?>
            </div>
            <div class="seemore">
                <button class="glow-on-hover" type="button">SEE MORE</button>
            </div>
        </div>
    </div>
    <!-- END Action MOVIES SECTION -->

    <!-- Animation  SECTION -->
    <div class="section"  data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="section-header">
                <span>Ongoing</span>
                <div class="category"  style="margin-top: 10px;">
                    <h3 >Series</h3>
                </div>
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <div>
                    <a href="#" class="movie-item">
                        <img src="./assets/images/action_row/m_00008.jpeg" alt="">
                        <div class="movie_title">
                            <button class="btn " onclick="location.href='#';">Still Developing</button>
                        </div>
                    </a>
                    <div class="movie_body ">
                        <h4 class="movie-name ">SKYSCRAPER</h4>
                        <p class="card-text">
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i>      
                            <i class="bi bi-star-half"></i> 
                            <span class="mx-2">8.7/10 </span>
                        </p> 
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div>
                    <a href="#" class="movie-item">
                        <img src="./assets/images/action_row/m_00010.jpeg" alt="">
                        <div class="movie_title">
                            <button class="btn " onclick="location.href='#';">Still Developing</button>
                        </div>
                    </a>
                    <div class="movie_body ">
                        <h4 class="movie-name ">SKYSCRAPER</h4>
                        <p class="card-text">
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i>      
                            <i class="bi bi-star-half"></i> 
                            <span class="mx-2">8.7/10 </span>
                        </p> 
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div>
                    <a href="#" class="movie-item">
                        <img src="./assets/images/action_row/m_00009.jpeg" alt="">
                        <div class="movie_title">
                            <button class="btn " onclick="location.href='#';">Still Developing</button>
                        </div>
                    </a>
                    <div class="movie_body ">
                        <h4 class="movie-name ">SKYSCRAPER</h4>
                        <p class="card-text">
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i>      
                            <i class="bi bi-star-half"></i> 
                            <span class="mx-2">8.7/10 </span>
                        </p> 
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div>
                    <a href="#" class="movie-item">
                        <img src="./assets/images/action_row/m_00007.jpeg" alt="">
                        <div class="movie_title">
                            <button class="btn " onclick="location.href='#';">Still Developing</button>
                        </div>
                    </a>
                    <div class="movie_body ">
                        <h4 class="movie-name ">SKYSCRAPER</h4>
                        <p class="card-text">
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i>      
                            <i class="bi bi-star-half"></i> 
                            <span class="mx-2">8.7/10 </span>
                        </p> 
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div>
                    <a href="#" class="movie-item">
                        <img src="./assets/images/action_row/m_00006.jpeg" alt="">
                        <div class="movie_title">
                            <button class="btn " onclick="location.href='#';">Still Developing</button>
                        </div>
                    </a>
                    <div class="movie_body ">
                        <h4 class="movie-name ">SKYSCRAPER</h4>
                        <p class="card-text">
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i>      
                            <i class="bi bi-star-half"></i> 
                            <span class="mx-2">8.7/10 </span>
                        </p> 
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div>
                    <a href="#" class="movie-item">
                        <img src="./assets/images/action_row/m_00001.jpg" alt="">
                        <div class="movie_title">
                            <button class="btn " onclick="location.href='#';">Still Developing</button>
                        </div>
                    </a>
                    <div class="movie_body ">
                        <h4 class="movie-name ">SKYSCRAPER</h4>
                        <p class="card-text">
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i>      
                            <i class="bi bi-star-half"></i> 
                            <span class="mx-2">8.7/10 </span>
                        </p> 
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div>
                    <a href="#" class="movie-item">
                        <img src="./assets/images/action_row/m_00005.jpeg" alt="">
                        <div class="movie_title">
                            <button class="btn " onclick="location.href='#';">Still Developing</button>
                        </div>
                    </a>
                    <div class="movie_body ">
                        <h4 class="movie-name ">SKYSCRAPER</h4>
                        <p class="card-text">
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i>      
                            <i class="bi bi-star-half"></i> 
                            <span class="mx-2">8.7/10 </span>
                        </p> 
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
            </div>
            <div class="seemore">
                <button class="glow-on-hover" type="button">SEE MORE</button>
            </div>
        </div>
    </div>
    <!-- END Animation SECTION -->

    <!-- Ongoing Series SECTION -->
    <div class="section"  data-aos="fade-in" data-aos-duration="1000">
        <div class="container">
            <div class="section-header">
                <span> Completed </span>
                <div class="category" style="margin-top: 10px;">
                    <h3 > Trendy Movies & Series </h3>
                </div>
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <div>
                    <a href="#" class="movie-item">
                        <img src="./assets/images/action_row/m_00006.jpeg" alt="">
                        <div class="movie_title">
                            <button class="btn " onclick="location.href='#';">Still Developing</button>
                        </div>
                    </a>
                    <div class="movie_body ">
                        <h4 class="movie-name ">SKYSCRAPER</h4>
                        <p class="card-text">
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i>      
                            <i class="bi bi-star-half"></i> 
                            <span class="mx-2">8.7/10 </span>
                        </p> 
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div>
                    <a href="#" class="movie-item">
                        <img src="./assets/images/action_row/m_00002.jpeg" alt="">
                        <div class="movie_title">
                            <button class="btn " onclick="location.href='#';">Still Developing</button>
                        </div>
                    </a>
                    <div class="movie_body ">
                        <h4 class="movie-name ">SKYSCRAPER</h4>
                        <p class="card-text">
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i>      
                            <i class="bi bi-star-half"></i> 
                            <span class="mx-2">8.7/10 </span>
                        </p> 
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div>
                    <a href="#" class="movie-item">
                        <img src="./assets/images/action_row/m_00003.jpeg" alt="">
                        <div class="movie_title">
                            <button class="btn " onclick="location.href='#';">Still Developing</button>
                        </div>
                    </a>
                    <div class="movie_body ">
                        <h4 class="movie-name ">SKYSCRAPER</h4>
                        <p class="card-text">
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i>      
                            <i class="bi bi-star-half"></i> 
                            <span class="mx-2">8.7/10 </span>
                        </p> 
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div>
                    <a href="#" class="movie-item">
                        <img src="./assets/images/action_row/m_00010.jpeg" alt="">
                        <div class="movie_title">
                            <button class="btn " onclick="location.href='#';">Still Developing</button>
                        </div>
                    </a>
                    <div class="movie_body ">
                        <h4 class="movie-name ">SKYSCRAPER</h4>
                        <p class="card-text">
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i>      
                            <i class="bi bi-star-half"></i> 
                            <span class="mx-2">8.7/10 </span>
                        </p> 
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div>
                    <a href="#" class="movie-item">
                        <img src="./assets/images/action_row/m_00009.jpeg" alt="">
                        <div class="movie_title">
                            <button class="btn " onclick="location.href='#';">Still Developing</button>
                        </div>
                    </a>
                    <div class="movie_body ">
                        <h4 class="movie-name ">SKYSCRAPER</h4>
                        <p class="card-text">
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i>      
                            <i class="bi bi-star-half"></i> 
                            <span class="mx-2">8.7/10 </span>
                        </p> 
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div>
                    <a href="#" class="movie-item">
                        <img src="./assets/images/action_row/m_00001.jpg" alt="">
                        <div class="movie_title">
                            <button class="btn " onclick="location.href='#';">Still Developing</button>
                        </div>
                    </a>
                    <div class="movie_body ">
                        <h4 class="movie-name ">SKYSCRAPER</h4>
                        <p class="card-text">
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i>      
                            <i class="bi bi-star-half"></i> 
                            <span class="mx-2">8.7/10 </span>
                        </p> 
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div>
                    <a href="#" class="movie-item">
                        <img src="./assets/images/action_row/m_00005.jpg" alt="">
                        <div class="movie_title">
                            <button class="btn " onclick="location.href='#';">Still Developing</button>
                        </div>
                    </a>
                    <div class="movie_body ">
                        <h4 class="movie-name ">SKYSCRAPER</h4>
                        <p class="card-text">
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i> 
                            <i class="bi bi-star-fill"></i>      
                            <i class="bi bi-star-half"></i> 
                            <span class="mx-2">8.7/10 </span>
                        </p> 
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
            </div>
            <div class="seemore ">
                <button class="glow-on-hover" type="button">SEE MORE</button>
            </div>
        </div>
    </div>
    <!-- END LATEST CARTOONS SECTION -->

    <!-- SPECIAL MOVIE SECTION -->
    <div class="section" id="fun"  data-aos="zoom-in" data-aos-duration="1000">
        <div class="fun-image">
            <img src="./assets/images/ComingSoon/soon_1.jpg" alt="">
            <div class="overlay"></div>
            <div class="fun-slide-item-content">
            <div class="fun-content-wraper">
                <div class="fun-content-title" data-aos="fade-left" data-aos-duration="2500">
                    <h2>Comming Soon!</h2>
                    <p>Stay Tuned & Check it out right here , Then Have Fun!!!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END SPECIAL MOVIE SECTION -->

    <!-- Start Footer -->
    <footer class="footer-section" data-aos="fade-right" data-aos-duration="1000">
        <div class="container">
                <div class="row">
                    <div class="col-md-3 info " >
                                <i class="bi bi-whatsapp"></i>
                                <h4 class="text-light">whatsapp </h4>
                                <p> +95 9364895978</p>
                    </div>
                    <div class="col-md-3 info">
                                <i class="bi bi-telephone-fill"></i>
                                <h4  class="text-light">Contact No.</h4>
                                <p>+95 9898967630</p>
                    </div>
                    <div class="col-md-3 info">
                                <i class="bi bi-envelope-fill"></i>
                                <h4  class="text-light">Mail us</h4>
                                <p>popcom@icloud.com</p>
                    </div>
                </div>
                
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul style="display: flex;">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4  col-md-4 mb-50">
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
                                    <button><i class="bi bi-send-fill"></i></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-50">
                        <div class="footer-widget">
                          <div class="footer-widget-heading">
                            <h3>About POPcom</h3>
                          </div>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint a veniam earum, 
                              corrupti ab reprehenderit hic. Doloribus optio, blanditiis maiores cupiditate 
                              nisi quas facere corporis?</p>
                          <ul class="footer-social" style="display: flex;"> 
                              <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                              <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                              <li><a href="#"><i class="bi bi-whatsapp"></i></a></li>
                              <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                              <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                          </ul>
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
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    
    <!-- jquery -->
    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <!-- bootstrap  -->
    <!-- <script src="assets/js/bootstrap.bundle.min.js"></script> -->
    <!-- aos animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- custom js -->
    <script src="assets/js/app.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>