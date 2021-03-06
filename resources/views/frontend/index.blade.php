
@include('frontend.body.header')
  <!-- Full Body Container -->
 

    <!-- Start Home Page Slider -->
    <section id="home">
      <!-- Carousel -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="img-responsive" src="{{asset('frontend/images/slider/bg1x.jpg')}}" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2">
                  <span>Welcome to <strong>Margo</strong></span>
                </h2>
                <h3 class="animated3">
                   <span>The ultimate aim of your business</span>
                  </h3>
                </p>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="{{asset('frontend/images/slider/bg2.jpg')}}" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated4">
                  <span><strong>Margo</strong> for the highest</span>
                </h2>
                <h3 class="animated5">
                  <span>The Key of your Success</span>
                </h3>
                </p>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="{{asset('frontend/images/slider/bg3.jpg')}}" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated7 white">
                  <span>The way of <strong>Success</strong></span>
                </h2>
                <h3 class="animated8 white">
                  <span>Why you are waiting</span>
                </h3>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
        </div>
        <!-- Carousel inner end-->

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
          <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
          <span><i class="fa fa-angle-right"></i></span>
        </a>
      </div>
      <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->

    <!-- Start Services Section -->
    <div class="section service">
      <div class="container">
        <div class="row">

          <!-- Start Service Icon 1 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
            <div class="service-icon">
              <i class="fa fa-leaf icon-large"></i>
            </div>
            <div class="service-content">
              <h4>High Quality Theme</h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>

            </div>
          </div>
          <!-- End Service Icon 1 -->

          <!-- Start Service Icon 2 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="02">
            <div class="service-icon">
              <i class="fa fa-desktop icon-large"></i>
            </div>
            <div class="service-content">
              <h4>Full Responsive</h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
            </div>
          </div>
          <!-- End Service Icon 2 -->

          <!-- Start Service Icon 3 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="03">
            <div class="service-icon">
              <i class="fa fa-eye icon-large"></i>
            </div>
            <div class="service-content">
              <h4>Retina Display Ready</h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
            </div>
          </div>
          <!-- End Service Icon 3 -->

          <!-- Start Service Icon 4 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="04">
            <div class="service-icon">
              <i class="fa fa-code icon-large"></i>
            </div>
            <div class="service-content">
              <h4>Clean Modern Code</h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
            </div>
          </div>
          <!-- End Service Icon 4 -->

          <!-- Start Service Icon 5 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="05">
            <div class="service-icon">
              <i class="fa fa-rocket icon-large"></i>
            </div>
            <div class="service-content">
              <h4>Fast & Light Theme</h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
            </div>
          </div>
          <!-- End Service Icon 5 -->

          <!-- Start Service Icon 6 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="06">
            <div class="service-icon">
              <i class="fa fa-css3 icon-large"></i>
            </div>
            <div class="service-content">
              <h4>Css3 Transitions</h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
            </div>
          </div>
          <!-- End Service Icon 6 -->

          <!-- Start Service Icon 7 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="07">
            <div class="service-icon">
              <i class="fa fa-download icon-large"></i>
            </div>
            <div class="service-content">
              <h4>Free Updates</h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
            </div>
          </div>
          <!-- End Service Icon 7 -->

          <!-- Start Service Icon 8 -->
          <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="08">
            <div class="service-icon">
              <i class="fa fa-umbrella icon-large"></i>
            </div>
            <div class="service-content">
              <h4>Help & Support</h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
            </div>
          </div>
          <!-- End Service Icon 8 -->

        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </div>
    <!-- End Services Section -->

    <!-- Start Portfolio Section -->
    <div class="section full-width-portfolio" style="border-top:0; border-bottom:0; background:#fff;padding-top:20px;">

      <!-- Start Big Heading -->
      <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
        <h1>This is Our Latest <strong>Work</strong></h1>
      </div>
      <!-- End Big Heading -->

      <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
        <br/>veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>


      <!-- Start Recent Projects Carousel -->
      <ul id="portfolio-list" data-animated="fadeIn">
        <li>
          <img src="{{asset('frontend/images/portfolio-1/1.jpg')}}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Town winter 2016</span>
            <p class="body animated8">web develpment, design</p>
          </div>
          <div class="icon-list">
            <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
            <a class="zoom lightbox" href="images/portfolio-1/1.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="{{asset('frontend/images/portfolio-1/2.jpg')}}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Quarterly Musashino</span>
            <p class="body">web develpment, design</p>
          </div>
          <div class="icon-list">
            <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
            <a class="zoom lightbox" href="images/portfolio-1/2.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="{{asset('frontend/images/portfolio-1/3.jpg')}}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Mainichi April 2016</span>
            <p class="body">web develpment, design</p>
          </div>
          <div class="icon-list">
            <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
            <a class="zoom lightbox" href="images/portfolio-1/3.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="{{asset('frontend/images/portfolio-1/4.jpg')}}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Shitamachi Rocket</span>
            <p class="body">web develpment, design</p>
          </div>
          <div class="icon-list">
            <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
            <a class="zoom lightbox" href="images/portfolio-1/4.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="{{asset('frontend/images/portfolio-1/5.jpg')}}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Majesty express vol. 01</span>
            <p class="body">web develpment, design</p>
          </div>
          <div class="icon-list">
            <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
            <a class="zoom lightbox" href="images/portfolio-1/5.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="{{asset('frontend/images/portfolio-1/6.jpg')}}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Monocle issue 69</span>
            <p class="body">web develpment, design</p>
          </div>
          <div class="icon-list">
            <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
            <a class="zoom lightbox" href="images/portfolio-1/6.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="{{asset('frontend/images/portfolio-1/7.jpg')}}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Monocle issue 69</span>
            <p class="body">web develpment, design</p>
          </div>
          <div class="icon-list">
            <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
            <a class="zoom lightbox" href="images/portfolio-1/7.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="{{asset('frontend/images/portfolio-1/8.jpg')}}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Monocle issue 69</span>
            <p class="body">web develpment, design</p>
          </div>
          <div class="icon-list">
            <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
            <a class="zoom lightbox" href="images/portfolio-1/8.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="{{asset('frontend/images/portfolio-1/9.jpg')}}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Monocle issue 69</span>
            <p class="body">web develpment, design</p>
          </div>
          <div class="icon-list">
            <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
            <a class="zoom lightbox" href="images/portfolio-1/9.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="{{asset('frontend/images/portfolio-1/10.jpg')}}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Monocle issue 69</span>
            <p class="body">web develpment, design</p>
          </div>
          <div class="icon-list">
            <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
            <a class="zoom lightbox" href="images/portfolio-1/10.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="{{asset('frontend/images/portfolio-1/11.jpg')}}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Monocle issue 69</span>
            <p class="body">web develpment, design</p>
          </div>
          <div class="icon-list">
            <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
            <a class="zoom lightbox" href="images/portfolio-1/11.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="{{asset('frontend/images/portfolio-1/12.jpg')}}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Monocle issue 69</span>
            <p class="body">web develpment, design</p>
          </div>
          <div class="icon-list">
            <a class="link" href="single-project.html"><i class="fa fa-link"></i></a>
            <a class="zoom lightbox" href="images/portfolio-1/12.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
      </ul>

      <!-- End Recent Projects Carousel -->


    </div>
    <!-- End Portfolio Section -->


    <!-- Start Testimonials Section -->
    <div>
      <div class="container">
        <div class="row">
          <div class="col-md-8">

            <!-- Start Recent Posts Carousel -->
            <div class="latest-posts">
              <h4 class="classic-title"><span>Latest News</span></h4>
              <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="2">

                <!-- Posts 1 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">28</span><span class="month">Dec</span></div>
                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                  </div>
                  <h3 class="post-title"><a href="#">Standard Post With Image</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 2 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                  </div>
                  <h3 class="post-title"><a href="#">Link Post</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 3 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                  </div>
                  <h3 class="post-title"><a href="#">Iframe Video Post</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 4 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                  </div>
                  <h3 class="post-title"><a href="#">Gallery Post</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 5 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                  </div>
                  <h3 class="post-title"><a href="#">Standard Post without Image</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 6 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                  </div>
                  <h3 class="post-title"><a href="#">Iframe Audio Post</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

              </div>
            </div>
            <!-- End Recent Posts Carousel -->

          </div>

          <div class="col-md-4">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Testimonials</span></h4>

            <!-- Start Testimonials Carousel -->
            <div class="custom-carousel show-one-slide touch-carousel" data-appeared-items="1">
              <!-- Testimonial 1 -->
              <div class="classic-testimonials item">
                <div class="testimonial-content">
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="testimonial-author"><span>John Doe</span> - Customer</div>
              </div>
              <!-- Testimonial 2 -->
              <div class="classic-testimonials item">
                <div class="testimonial-content">
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="testimonial-author"><span>John Doe</span> - Customer</div>
              </div>
              <!-- Testimonial 3 -->
              <div class="classic-testimonials item">
                <div class="testimonial-content">
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="testimonial-author"><span>John Doe</span> - Customer</div>
              </div>
            </div>
            <!-- End Testimonials Carousel -->

          </div>
        </div>
      </div>
    </div>
    <!-- End Testimonials Section -->


    <!-- Start Team Member Section -->
    <div class="section" style="background:#fff;">
      <div class="container">

        <!-- Start Big Heading -->
        <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
          <h1>Our Great <strong>Team</strong></h1>
        </div>
        <!-- End Big Heading -->

        <!-- Some Text -->
        <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <span class="accent-color sh-tooltip" data-placement="right" title="Simple Tooltip">doloremque laudantium</span>, totam rem aperiam, eaque ipsa quae ab illo inventore
          <br/>veritatis et quasi <span class="accent-color sh-tooltip" data-placement="bottom" title="Simple Tooltip">architecto</span> beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>


        <!-- Start Team Members -->
        <div class="row">

          <!-- Start Memebr 1 -->
          <div class="col-md-3 col-sm-6 col-xs-12" data-animation="fadeIn" data-animation-delay="03">
            <div class="team-member modern">
              <!-- Memebr Photo, Name & Position -->
              <div class="member-photo">
                <img alt="" src="{{asset('frontend/images/team/face_1.png')}}" />
                <div class="member-name">John Doe <span>Developer</span>
                </div>
              </div>
              <!-- Memebr Words -->
              <div class="member-info">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
              </div>
              <!-- Start Progress Bar 1 -->
              <div class="progress-label">Photoshop</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="96%" data-appear-animation-delay="400">
                  <span class="percentage">96%</span>
                </div>
              </div>
              <!-- Start Progress Bar 2 -->
              <div class="progress-label">Logo Design</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="88%" data-appear-animation-delay="800">
                  <span class="percentage">88%</span>
                </div>
              </div>
              <!-- Start Progress Bar 3 -->
              <div class="progress-label">Vectors Design</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="100%" data-appear-animation-delay="1200">
                  <span class="percentage">100%</span>
                </div>
              </div>
              <!-- Memebr Social Links -->
              <div class="member-socail">
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
              </div>
            </div>
          </div>
          <!-- End Memebr 1 -->

          <!-- Start Memebr 2 -->
          <div class="col-md-3 col-sm-6 col-xs-12" data-animation="fadeIn" data-animation-delay="04">
            <div class="team-member modern">
              <!-- Memebr Photo, Name & Position -->
              <div class="member-photo">
                <img alt="" src="{{asset('frontend/images/team/face_2.png')}}" />
                <div class="member-name">Silly Sally <span>Developer</span>
                </div>
              </div>
              <!-- Memebr Words -->
              <div class="member-info">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
              </div>
              <!-- Start Progress Bar 1 -->
              <div class="progress-label">Photoshop</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="96%" data-appear-animation-delay="400">
                  <span class="percentage">96%</span>
                </div>
              </div>
              <!-- Start Progress Bar 2 -->
              <div class="progress-label">Logo Design</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="88%" data-appear-animation-delay="800">
                  <span class="percentage">88%</span>
                </div>
              </div>
              <!-- Start Progress Bar 3 -->
              <div class="progress-label">Vectors Design</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="100%" data-appear-animation-delay="1200">
                  <span class="percentage">100%</span>
                </div>
              </div>
              <!-- Memebr Social Links -->
              <div class="member-socail">
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
              </div>
            </div>
          </div>
          <!-- End Memebr 2 -->

          <!-- Start Memebr 3 -->
          <div class="col-md-3 col-sm-6 col-xs-12" data-animation="fadeIn" data-animation-delay="05">
            <div class="team-member modern">
              <!-- Memebr Photo, Name & Position -->
              <div class="member-photo">
                <img alt="" src="{{asset('frontend/images/team/face_3.png')}}" />
                <div class="member-name">Chris John <span>Developer</span>
                </div>
              </div>
              <!-- Memebr Words -->
              <div class="member-info">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
              </div>
              <!-- Start Progress Bar 1 -->
              <div class="progress-label">Photoshop</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="96%" data-appear-animation-delay="400">
                  <span class="percentage">96%</span>
                </div>
              </div>
              <!-- Start Progress Bar 2 -->
              <div class="progress-label">Logo Design</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="94%" data-appear-animation-delay="800">
                  <span class="percentage">94%</span>
                </div>
              </div>
              <!-- Start Progress Bar 3 -->
              <div class="progress-label">Vectors Design</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="90%" data-appear-animation-delay="1200">
                  <span class="percentage">90%</span>
                </div>
              </div>
              <!-- Memebr Social Links -->
              <div class="member-socail">
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
              </div>
            </div>
          </div>
          <!-- End Memebr 3 -->

          <!-- Start Memebr 4 -->
          <div class="col-md-3 col-sm-6 col-xs-12" data-animation="fadeIn" data-animation-delay="06">
            <div class="team-member modern">
              <!-- Memebr Photo, Name & Position -->
              <div class="member-photo">
                <img alt="" src="{{asset('frontend/images/team/face_4.png')}}" />
                <div class="member-name">Sara John <span>Developer</span>
                </div>
              </div>
              <!-- Memebr Words -->
              <div class="member-info">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
              </div>
              <!-- Start Progress Bar 1 -->
              <div class="progress-label">Photoshop</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="96%" data-appear-animation-delay="400">
                  <span class="percentage">96%</span>
                </div>
              </div>
              <!-- Start Progress Bar 2 -->
              <div class="progress-label">Logo Design</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="85%" data-appear-animation-delay="800">
                  <span class="percentage">85%</span>
                </div>
              </div>
              <!-- Start Progress Bar 3 -->
              <div class="progress-label">Vectors Design</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="100%" data-appear-animation-delay="1200">
                  <span class="percentage">100%</span>
                </div>
              </div>
              <!-- Memebr Social Links -->
              <div class="member-socail">
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
              </div>
            </div>
          </div>
          <!-- End Memebr 4 -->

        </div>
        <!-- End Team Members -->

      </div>
      <!-- .container -->
    </div>
    <!-- End Team Member Section -->

    <!-- Start Client/Partner Section -->
    <div class="partner">
      <div class="container">
        <div class="row">

          <!-- Start Big Heading -->
          <div class="big-title text-center">
            <h1>Our Happy <strong>Clients</strong></h1>
            <p class="title-desc">Partners We Work With</p>
          </div>
          <!-- End Big Heading -->

          <!--Start Clients Carousel-->
          <div class="our-clients">
            <div class="clients-carousel custom-carousel touch-carousel navigation-3" data-appeared-items="5" data-navigation="true">

              <!-- Client 1 -->
              <div class="client-item item">
                <a href="#"><img src="{{asset('frontend/')}}images/c1.png" alt="" /></a>
              </div>

              <!-- Client 2 -->
              <div class="client-item item">
                <a href="#"><img src="{{asset('frontend/images/c2.png')}}" alt="" /></a>
              </div>

              <!-- Client 3 -->
              <div class="client-item item">
                <a href="#"><img src="{{asset('frontend/images/c3.png')}}" alt="" /></a>
              </div>

              <!-- Client 4 -->
              <div class="client-item item">
                <a href="#"><img src="{{asset('frontend/images/c4.png')}}" alt="" /></a>
              </div>

              <!-- Client 5 -->
              <div class="client-item item">
                <a href="#"><img src="{{asset('frontend/images/c5.png')}}" alt="" /></a>
              </div>

              <!-- Client 6 -->
              <div class="client-item item">
                <a href="#"><img src="{{asset('frontend/images/c6.png')}}" alt="" /></a>
              </div>

              <!-- Client 7 -->
              <div class="client-item item">
                <a href="#"><img src="{{asset('frontend/images/c7.png')}}" alt="" /></a>
              </div>

              <!-- Client 8 -->
              <div class="client-item item">
                <a href="#"><img src="{{asset('frontend/images/c8.png')}}" alt="" /></a>
              </div>

            </div>
          </div>
          <!-- End Clients Carousel -->
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </div>
    <!-- End Client/Partner Section -->

@include('frontend.body.footer')


