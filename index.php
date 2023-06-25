<?php include "./includes/start.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mahaveer International School</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
<?php include "./includes/header.php"; ?>  

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(./assets/img/banner-image.png)">
    
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(./assets/img/carousl-med.png)">
       
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(./assets/img/Screenshot\ 2023-05-08\ at\ 2.32.37\ PM.png)">

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section style="background-image: linear-gradient(rgba(255, 255, 255, 0.928), rgba(255, 255, 255, 0.937)), url(./assets/img/school.jpg); color: black; height: 85vh;" id="about" class="about">
      <div class="container">

        <div class="row content">
          <div style="text-align: right;" class="col-lg-5">
            
            
            <div class="section-title features">
              <h2 style="font-size: 15px; font-weight: 500;">About</h2>
              <p>Mahaveer International School</p>
            </div>
       
            <p style="text-align: justify; line-height: 2.5;">Established in the year 2012, with the vision and aim to provide an education which is holistic and could pace with the rapid changes, morally upright within the conducive environment to inculcate and instil the love and Conscience A Voice of God among the children, Mahaveer International school is situated in north-west outskirt of historical city of Meerut. </p>
          </div>

          <style>
            .my-vertical-line {
              border: 0.1px solid gray;
              height: 100%;
              display: inline-block;
            }
          
            @media (max-width: 768px) {
              .my-vertical-line {
                border: none;
                border-top: 1px solid gray;
                width: 100%;
                height: 0;
                display: block;
                margin: 10px 0;
              }
            }
          </style>

          <div style="text-align: left; padding: 3em;" class="col-1">
            <div class="my-vertical-line"></div>
          </div>
        
        <div style=" margin-top: 8%; margin-bottom: 7%; " class="col-2">


          <div style="display: flex;">
            <img style="width: 50px; height: 50px; transform: scale(1.3);" src="./assets/img/cbse_logo.png.webp"/>
            <p style="padding-left: 20px; "><i>CBSE Board Affilated</i></p>
          </div>
          
            <br><br><br>

            <div style="display: flex;">
              <img style="width: 50px; height: 50px; transform: scale(1.3);" src="./assets/img/logo-mis-icon.png"/>
              <p style=" padding-left: 20px;"><i>NCERT curriculum</i></p>
            </div>
            <br><br><br>
            <div style="display: flex;">
              <img style="width: 50px; height: 50px; transform: scale(1.3);" src="./assets/img/global-research.png.webp"/>
              <p style=" padding-left: 20px;"><i>English<br> Medium, <br>Sr. Sec. School</i></p>
            </div>

         </div>

       

          <div style=" border-radius: 0rem; padding: 50px; box-shadow: 13px 17px 49px 15px rgba(0, 0, 0, 0.183);" class="col-lg-4 pt-4 pt-lg-0">
            <div class="tabs">
              <div class="tab-2">
                <label style="color: black; font-weight: 1000;" for="tab2-1">News</label>
                <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
                <div>
                <ul>
                  <?php
						 
             $query = "SELECT * FROM news ORDER BY news_id DESC";
             $result = mysqli_query($connection, $query);
       
             while ($row = mysqli_fetch_array($result)) 
             {
               $news_id            = $row['news_id'];
             $news_title           = $row['news_title'];
             $news_date      = $row['news_date'];
             $news_month_year      = $row['news_month_year'];
             $news_status     = $row['news_status'];		
                           ?>
                           <li class="news-item">
                          <div class="news-date"><?php echo $news_date; ?><br><?php echo $news_month_year; ?></div>
                          <h4 class="news-description">
                          <?php echo $news_title; ?>
                          </h4>
                    </li>         
                                  <?php } ?>

                  </ul>  
              </div>
              </div>
              <div class="tab-2">
                <label style="color: black; font-weight: 1000;" for="tab2-2">Events</label>
                <input id="tab2-2" name="tabs-two" type="radio">
                <div>
                  <h5>Tab Two</h5>
                  <p>Quisque sit amet turpis leo. Maecenas sed dolor mi. Pellentesque varius elit in neque ornare commodo ac non tellus. Mauris id iaculis quam. Donec eu felis quam. </p>
                </div>
              </div>
            </div>
          </div>
          
        </div>

      </div>
    </section><!-- End About Section -->





      <section  style=" height: 100vh; margin-top: 3%;"  class="text-gray-600 body-font">
        <div  class="container px-5  mx-auto">
          <div class="flex flex-wrap w-full mb-20">
            <div class="section-title">
              <h2>why choose</h2>
              <p>MIS</p>
            </div>
            <p> Since its inception, the school has striven to provide a holistic education experience that ensures high standards of academic excellence complemented by a kaleidoscope of co-curricular activities. The focus is on nurturing well-rounded personalities with the skills to excel in the world they will inherit in time.
              Rich co-curricular activities
              Refreshing extra curricular activities
              Dance, music and Yoga
              Best online educational facilities</p>
          </div>
          <div class="flex flex-wrap -m-4">
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-70 p-6 rounded-lg">
                <img style="transform: scale(1.4);" class="h-40 rounded w-full object-cover object-center mb-6" src="./assets/img/library.png" alt="content">
                <br>
                <h2 style="text-align: center;" class="text-lg text-gray-900 font-medium title-font mb-4"><b>Library</b></h2>
                
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-70 p-6 rounded-lg">
                <img style="transform: scale(1.4);" class="h-40 rounded w-full object-cover object-center mb-6" src="./assets/img/lab.png" alt="content">
                <br>
                <h2 style="text-align: center;" class="text-lg text-gray-900 font-medium title-font mb-4"><b>Laboratries</b></h2>
                
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-70 p-6 rounded-lg">
                <img style="transform: scale(1.4);" class="h-40 rounded w-full object-cover object-center mb-6" src="./assets/img/audi.png" alt="content">
                <br>
                <h2 style="text-align: center;" class="text-lg text-gray-900 font-medium title-font mb-4"><b>Auditorium</b></h2>
                
              </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-70 p-6 rounded-lg">
                <img style="transform: scale(1.4);" class="h-40 rounded w-full object-cover object-center mb-6" src="./assets/img/teacher.png" alt="content">
               <br>
                <h2 style="text-align: center;" class="text-lg text-gray-900 font-medium title-font mb-4"><b>Digital Classrooms</b></h2>
                
              </div>
            </div>
          </div>

        
        </div>
      </section>


    
    <!-- ======= Clients Section ======= -->

   
    
      <section style="color: white; margin-top: -8%; " id="features" class="features">
        <div class="container">
  
          <div class="section-title">
            <h2>Our</h2>
            <p>School Planner</p>
          </div>
          <br><br>
          <div class="row">
            <div class="col-lg-5">
              <iframe src="https://calendar.google.com/calendar/embed?height=400&wkst=1&bgcolor=%23D50000&ctz=Asia%2FKolkata&title=Mahaveer%20International%20School&showTitle=1&showTabs=0&src=ZW4uaW5kaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%230B8043" style="border:solid 10px white; border-radius: 1em;box-shadow: 13px 17px 49px 15px rgba(0, 0, 0, 0.183);" width="500" height="400" frameborder="0" scrolling="no"></iframe>
            </div>

            <div style="color: black; margin-top: -12%; text-align: center;" class="col-lg-7 ">
             
                <section style="margin-top: 20%;" class="text-gray-600 body-font">
                  <div class="container px-5  mx-auto">
                    <div class="flex flex-wrap -mx-4 -my-8">
                      <div class="py-8 px-4 lg:w-1/3">
                        <div class="h-full flex items-start">
                          <div style="background-color: #d9232d; border-radius: 1em; padding:10px 2px; text-align: center;" class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                            <span style="color: white" class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Jul</span>
                            <span style="color: white" class="font-medium text-lg text-gray-800 title-font leading-none">18</span>
                          </div>
                          <div class="flex-grow pl-6">
                            
                            <p class="leading-relaxed mb-5">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                           
                          </div>
                        </div>
                      </div>
                      <div class="py-8 px-4 lg:w-1/3">
                        <div class="h-full flex items-start">
                          <div style="background-color: #d9232d; border-radius: 1em; padding:10px 2px; text-align: center;" class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                            <span style="color: white" class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Jul</span>
                            <span style="color: white" class="font-medium text-lg text-gray-800 title-font leading-none">18</span>
                          </div>
                          <div class="flex-grow pl-6">
                           
                            <p class="leading-relaxed mb-5">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                           
                          </div>
                          
                        </div>
                      </div>
                      <div class="py-8 px-4 lg:w-1/3">
                        <div class="h-full flex items-start">
                          <div style="background-color: #d9232d; border-radius: 1em; padding:10px 2px; text-align: center;" class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                            <span style="color: white" class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Jul</span>
                            <span style="color: white" class="font-medium text-lg text-gray-800 title-font leading-none">18</span>
                          </div>
                          <div class="flex-grow pl-6">
                          
                            <p class="leading-relaxed mb-5">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                            
                          </div>
                        </div>
                        
                      </div>
                      
                    </div>
                   
                  </div>
                  <button style="text-align: center; background-color: #d9232d; border-radius: 1em; padding: 20px; color: white;">View More</button>
                </section>
                
              
            </div>
          
          </div>
  
        </div>
       
      </section>

    

    <!-- ======= Portfolio Section ======= -->
    <section style=" text-align: center;" id="portfolio" class="portfolio">
      <div class="container">

        <section class="text-gray-600 body-font">
          <div class="container px-5 mx-auto flex flex-wrap">
            <div class="flex w-full mb-20 flex-wrap">
              <div class="section-title">
                <h2>Student</h2>
                <p>Life@MIS</p>
              </div>
              <p style="font-weight: 400;" class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
            </div>
            <div class="flex flex-wrap md:-m-2 -m-1">
              <div class="flex flex-wrap w-1/2">
                <div class="md:p-2 p-1 w-1/2">
                  <img alt="gallery" class="w-full object-cover h-full object-center block" src="./assets/img/gallery/DSC_0553.JPG">
                </div>
                <div class="md:p-2 p-1 w-1/2">
                  <img alt="gallery" class="w-full object-cover h-full object-center block" src="./assets/img/gallery/DSC_1262.JPG">
                </div>
                <div class="md:p-2 p-1 w-full">
                  <img alt="gallery" class="w-full h-full object-cover object-center block" src="./assets/img/gallery/DSC_1376.JPG">
                </div>
              </div>
              <div class="flex flex-wrap w-1/2">
                <div class="md:p-2 p-1 w-full">
                  <img alt="gallery" class="w-full h-full object-cover object-center block" src="./assets/img/gallery/DSC_0864.JPG">
                </div>
                <div class="md:p-2 p-1 w-1/2">
                  <img alt="gallery" class="w-full object-cover h-full object-center block" src="./assets/img/gallery/DSC_0578.JPG">
                </div>
                <div class="md:p-2 p-1 w-1/2">
                  <img alt="gallery" class="w-full object-cover h-full object-center block" src="./assets/img/gallery/DSC_9719.JPG">
                </div>
              </div>
            </div>
           
          </div>
          <br><br>
          <button style="text-align: center; background-color: #d9232d; border-radius: 1em; padding: 20px; color: white;">View More</button>
        </section>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

<?php include "./includes/footer.php"; ?>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>