<!DOCTYPE html>
<html lang="en">
  <?php
  include('head.php'); ?>
  <title>mabuzar | Home</title>
  <style>
    .preview {
      cursor: default;
    }


    .carousel-caption h5 {
      color: red;
      font-weight: bold;
    }

    .special-section .circle {
      background: url("assets/images/Logo/logo2.png") no-repeat center center / cover;
      position: relative;
      z-index: 0;
      background-size: 250px;
      width: 410px;
      height: 410px;
      border-radius: 50%;
      animation: main-color 5s ease-in-out infinite;
    }

    .modal-content {
      border-radius: 0.5rem;
    }

    .carousel-item img {
      border-radius: 0.5rem;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: rgba(0, 0, 0, 0.5);
      border-radius: 50%;
    }

    .modal-header {
      border-bottom: 1px solid #dee2e6;
    }

    #imageModal .modal-body {
      max-height: 400px;
      overflow-y: auto;
    }

    .carousel-inner img {
      width: 100%;
      height: 300px;
      object-fit: cover;
    }

    .projectimagecontainer {
      display: inline-block;
      border: 2px solid #ccc;
      border-radius: 8px;
      padding: 5px;
    }

    .projectimage {
      max-width: 100%;
      height: auto;
      border-radius: 5px;
    }

    .offer__shape-right {
      position: absolute;
      top: 0px;
      right: 0;
      opacity: 0.3;
    }

    .offer__shape-left {
      position: absolute;
      bottom: 0;
      left: 0;
      opacity: 0.3;
    }

    .education-item,
    .education-itemlast {
      position: relative;
      padding-right: 50px;
      margin-bottom: 40px;
    }

    .timeline-content {
      background: rgba(255, 255, 255, 0.05);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
      transition: all 0.3s ease;
    }

    .timeline-content:hover {
      transform: scale(1.02);
      box-shadow: 0 0 30px rgba(255, 255, 255, 0.3);
      transition: all 0.3s ease;
    }

    .modalimg {
      max-height: 300px;
      width: auto;
    }

    .education-icon {
      position: absolute;
      right: 0;
      top: 0;
      width: 40px;
      height: 40px;
      color: #fff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 0 15px rgba(255, 255, 255, 0.3);
      font-size: 20px;
      border: 3px solid purple;
      background: #1a032b;
    }

    .education-item::before {
      content: "";
      position: absolute;
      right: 20px;
      top: 40px;
      bottom: -65px;
      width: 2px;
      background-color: rgba(255, 255, 255, 0.3);
    }

    .timeline-content:hover::before {
      background-color: rgba(255, 255, 255, 0.3);
    }

    .offer-area {
      position: relative;
      overflow: hidden;
      z-index: 1;
    }

    .offer__shadow {
      position: absolute;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: -1;
    }

    .offer__shape-left {
      position: absolute;
      bottom: 0;
      left: 0;
      opacity: 0.3;
    }

    .offer__shape-right {
      position: absolute;
      top: 0px;
      right: 0;
      opacity: 0.3;
    }

    .offer__icon {
      width: 70px;
      height: 70px;
      line-height: 70px;
      text-align: center;
      border-radius: 50%;
      transition: var(--transition);
      margin: 0 auto;
      background: linear-gradient(180deg, #3c72fc -210.71%, #00060c 100%);
      margin-top: -35px;
      transition: 1s;
    }

    .offer__item {
      border: 1px solid rgba(255, 255, 255, 0.3);
      padding: 20px;
      padding-top: 0;
      border-radius: 8px;
      text-align: center;
      cursor: pointer;
      position: relative;
    }

    @media (max-width: 991px) {
      .offer__item {
        margin-top: 30px;
      }
    }

    .offer__item .shape-top {
      position: absolute;
      top: 50%;
      right: 50%;
      opacity: 0;
      visibility: hidden;
      transition: var(--transition);
    }

    .offer__item .shape-bottom {
      position: absolute;
      bottom: 50%;
      left: 50%;
      opacity: 0;
      visibility: hidden;
      transition: var(--transition);
    }

    .offer__item:hover .shape-top {
      top: -1px;
      right: -1px;
      opacity: 1;
      visibility: visible;
    }

    .offer__item:hover .shape-bottom {
      position: absolute;
      bottom: -1px;
      left: -1px;
      opacity: 1;
      visibility: visible;
    }

    .offer__item:hover .offer__icon {
      background: var(--gradient-bg);
      transform: rotateY(360deg);
    }

    .offer__item:hover .offer__icon svg path {
      fill: #fff;
    }
  </style>

  <body>
    <?php include('header.php'); ?>

    <div class="rainposition">
      <div class="rain rain1"></div>
      <div class="rain rain2">
        <div class="drop drop2"></div>
      </div>
      <div class="rain rain3"></div>
      <div class="rain rain4"></div>
      <div class="rain rain5">
        <div class="drop drop5"></div>
      </div>
      <div class="rain rain6"></div>
      <div class="rain rain7"></div>
      <div class="rain rain8">
        <div class="drop drop8"></div>
      </div>
      <div class="rain rain9"></div>
      <div class="rain rain10"></div>
      <div class="drop drop11"></div>
      <div class="drop drop12"></div>
    </div>
    <!-- Hero Section -->
    <section id="about" class="lightning-section d-flex align-items-center" style=" margin: 0  ;overflow: hidden; ">
      <canvas id="canvas"></canvas>

      <div class="container pt-4">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-6 pt-md-0 pt-4">
            <h2 class="mb-lg-4 mb-3 title text-white" style="font-weight: 700;">Welcome to My Personal Portfolio</h2>
            <h4 class="mb-lg-4 mb-3 title typing-demo typed-text text-white h1"
              style="font-weight: 700; font-family: 'Raleway', sans-serif !important;">Hello, I'm
              <span class="text-default">Muhammad Abuzar</span>
            </h4>
            <p class="text-light ">
              a passionate web developer with a
              Bachelor's degree in Computer Science and hands-on experience in both frontend and backend development. My
              expertise includes PHP Laravel.

            </p>
            <p class="text-light ">
              This portfolio showcases my journey, skills, and projects, reflecting my
              dedication to creating
              functional and visually appealing web solutions.
            </p>
            <?php
            $birthDate = '2001-11-27';
            function calculateAge($birthDate)
            {
              $birthDate = new DateTime($birthDate);
              $currentDate = new DateTime();
              $age = $currentDate->diff($birthDate);
              return $age->y;
            }
            $age = calculateAge($birthDate);
            ?>
            <div class="row py-3">
              <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                <ul class="aboutdetail">
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>27 Nov 2001</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+92 3042326123</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Multan, Pakistan</span></li>
                </ul>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                <ul class="aboutdetail">
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php echo $age; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>abuzarch1100@gmail.com</span>
                  </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <div class="my-4">
              <button class="btn button-style-course">
                Check Resume
              </button>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6 mt-md-0 mt-4 ">
            <div class="special-section d-flex justify-content-center align-items-center animate-up-down">
              <div class="circle">
                <div class="animated circle">
                  <div class="animated ">
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>

    </section>
    <main>

      <!-- skills -->
      <section id="skills" class="d-flex align-items-center"
        style="margin: 0;min-height: 700px;background: #1a032b;overflow: hidden;perspective: 10rem;">

        <div class="offer__shape-left">
          <img class="wow fadeInUpBig" data-wow-delay="400ms" data-wow-duration="1500ms"
            src="assets/images/shape/offer-bg-shape-left.png" alt="shape"
            style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUpBig;">
        </div>
        <div class="offer__shape-right">
          <img class="wow fadeInDownBig" data-wow-delay="400ms" data-wow-duration="1500ms"
            src="assets/images/shape/offer-bg-shape-right.png" alt="shape"
            style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInDownBig;">
        </div>
        <div class="container pt-0">
          <div class="section-title" data-aos="fade-up" data-aos-delay="120">
            <h2>My Skills</h2>
            <p class="headingtext">
              Here are some of my skills on which i have been working on for the past 3 years
            </p>
          </div>
          <div class="rainposition">
            <div class="rain rain1"></div>
            <div class="rain rain2">
              <div class="drop drop2"></div>
            </div>
            <div class="rain rain3"></div>
            <div class="rain rain4"></div>
            <div class="rain rain5">
              <div class="drop drop5"></div>
            </div>
            <div class="rain rain6"></div>
            <div class="rain rain7"></div>
            <div class="rain rain8">
              <div class="drop drop8"></div>
            </div>
            <div class="rain rain9"></div>
            <div class="rain rain10"></div>
            <div class="drop drop11"></div>
            <div class="drop drop12"></div>
          </div>
          <div class="row justify-content-center">
            <!-- Frontend Skills Section -->
            <div class="col-md-6 col-lg-5 mb-4">
              <div class="card h-100 border border-success skillscard">
                <div class="card-body text-center timeline-content">
                  <h5 class="h5 mb-3 font-weight-bold ">Frontend</h5>
                  <ul class="skills">
                    <li class="d-flex align-items-center mb-2">
                      <img src="https://api.iconify.design/skill-icons:html.svg" alt="HTML" class="me-2" width="24">
                      <span>HTML</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <img src="https://api.iconify.design/skill-icons:css.svg" alt="CSS" class="me-2" width="24">
                      <span>CSS</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <img src="https://api.iconify.design/skill-icons:javascript.svg" alt="JavaScript" class="me-2"
                        width="24">
                      <span>JavaScript</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <img src="https://api.iconify.design/skill-icons:bootstrap.svg" alt="Bootstrap" class="me-2"
                        width="24">
                      <span>Bootstrap</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <img src="https://api.iconify.design/mdi:web.svg" alt="AJAX" class="me-2" width="24">
                      <span>AJAX</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <img src="https://api.iconify.design/skill-icons:jquery.svg" alt="JQuery" class="me-2" width="24">
                      <span>JQuery</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>


            <!-- Backend Skills Section -->
            <div class="col-md-6 col-lg-5 mb-4">
              <div class="card h-100 border border-primary skillscard">
                <div class="card-body text-center timeline-content">
                  <h5 class="h5 mb-3 font-weight-bold">Backend</h5>
                  <ul class="skills">
                    <li class="d-flex align-items-center mb-2">
                      <img src="https://api.iconify.design/logos:laravel.svg" alt="Laravel" class="me-2" width="24">
                      <span>Laravel</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <img src="https://api.iconify.design/logos:codeigniter-icon.svg" alt="CodeIgniter" class="me-2"
                        width="24">
                      <span>CodeIgniter</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <img src="https://api.iconify.design/skill-icons:php-dark.svg" alt="PHP" class="me-2" width="24">
                      <span>PHP</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <img src="https://api.iconify.design/icon-park-solid:api.svg?color=%230ce956"
                        alt="API Integration" class="me-2" width="24">
                      <span>API Integration</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <img src="https://api.iconify.design/vscode-icons:folder-type-php.svg" alt="OOP" class="me-2"
                        width="24">
                      <span>OOP</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>


            <!-- Other Skills Section -->
            <div class="col-md-6 col-lg-5 mb-4">
              <div class="card h-100 border border-danger skillscard">
                <div class="card-body text-center timeline-content">
                  <h5 class="h5 mb-3 font-weight-bold">Others</h5>
                  <ul class="skills">
                    <li class="d-flex align-items-center mb-2">
                      <img src="https://api.iconify.design/logos:git-icon.svg" alt="Git" class="me-2" width="24">
                      <span>Git</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <img src="https://api.iconify.design/logos:github-icon.svg" alt="GitHub" class="me-2" width="24">
                      <span>GitHub</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <img src="https://api.iconify.design/logos:visual-studio-code.svg" alt="VS Code" class="me-2"
                        width="24">
                      <span>VS Code</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <img src="https://api.iconify.design/logos:postman-icon.svg" alt="Postman" class="me-2"
                        width="24">
                      <span>Postman</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <img src="https://api.iconify.design/simple-icons:laravelnova.svg?color=%23e16614" alt="MVC"
                        class="me-2" width="24">
                      <span>MVC</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <img src="https://api.iconify.design/devicon:woocommerce.svg" alt="E-Commerce" class="me-2"
                        width="24">
                      <span>E-Commerce</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <img src="https://api.iconify.design/logos:laravel.svg" alt="Laravel Eloquent" class="me-2"
                        width="24">
                      <span>Laravel Eloquent ORM</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <img src="https://api.iconify.design/healthicons:database.svg?color=%2322ccf7"
                        alt="Database Management" class="me-2" width="24">
                      <span>MySQL</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                      <img src="https://api.iconify.design/logos:mysql.svg" alt="Database Design" class="me-2"
                        width="24">
                      <span>DB Design</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- experience  -->
      <section id="experience" class="d-flex align-items-center"
        style="margin:0; background: #1a032b; overflow: hidden;">
        <div class="container pt-0">
          <div class="section-title" data-aos="fade-up" data-aos-delay="120">
            <h2>Experience</h2>
            <p class="headingtext">
              I have experience as a web application developer, working with various companies on different projects.
            </p>
          </div>
          <div class="rainposition">
            <div class="rain rain1"></div>
            <div class="rain rain2">
              <div class="drop drop2"></div>
            </div>
            <div class="rain rain3"></div>
            <div class="rain rain4"></div>
            <div class="rain rain5">
              <div class="drop drop5"></div>
            </div>
            <div class="rain rain6"></div>
            <div class="rain rain7"></div>
            <div class="rain rain8">
              <div class="drop drop8"></div>
            </div>
            <div class="rain rain9"></div>
            <div class="rain rain10"></div>
            <div class="drop drop11"></div>
            <div class="drop drop12"></div>
          </div>
          <div class="row justify-content-center">
            <!-- Timeline Item 1 -->
            <div class="col-lg-8 col-md-9 col-sm-12 mb-4">
              <div class="timeline-item d-flex align-items-start">
                <div class="timeline-icon">
                  <i class="fas fa-laptop"></i>
                </div>
                <div class="timeline-content flex-grow-1">
                  <div class="d-flex">
                    <div class="logo-container">
                      <img src="assets/images/Logo/yoshaysoftlogo.png" alt="">
                    </div>
                    <div class="px-2">
                      <h5>Web Application Developer</h5>
                      <h6>YooshaySoft Technologies</h6>
                      <span class="timeline-date clrccc">April 2023 - Continue</span>
                    </div>
                  </div>
                  <div class="">
                    <p class="clrccc">Developed systems using PHP, Laravel, and CodeIgniter, including e-commerce
                      platforms and CMS.
                      Contributed to API integrations and data management tools, improving user experience and system
                      performance.</p>
                  </div>
                  <div class="timeline-skills">
                    <h5 class="font-weight-bold text-light-grey">Skills :</h5>
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                    <span>Bootstrap</span>
                    <span>XML</span>
                    <span>Php</span>
                    <span>JQuery</span>
                    <span>AJAX</span>
                    <span>MySQL</span>
                    <span>Ebay Api</span>
                    <span>MVC</span>
                    <span>CMS</span>
                    <span>GIT HUB</span>
                    <span>File Zilla</span>
                    <span>Putty</span>
                    <span>Laravel</span>
                    <span>CodeIgniter</span>
                    <span>Payment Methods</span>
                    <span>API Integration</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Timeline Item 2 -->
            <div class="col-lg-8 col-md-9 col-sm-12 mb-0">
              <div class="timeline-itemlast d-flex align-items-start">
                <div class="timeline-icon">
                  <i class="fas fa-laptop"></i>
                </div>
                <div class="timeline-content flex-grow-1">
                  <div class="d-flex">
                    <div class="logo-container">
                      <img src="assets/images/Logo/aretxsologo.jpg" alt="">
                    </div>
                    <div class="px-2">
                      <h5>Web Developer (Internee)</h5>
                      <h6>Artexsol</h6>
                      <span class="timeline-date clrccc">Feb 2022 - April 2023</span>
                    </div>
                  </div>
                  <div class=>
                    <p class="clrccc">Developed websites using PHP, HTML, and JavaScript, focusing on both front-end and
                      back-end
                      functionalities. Contributed to various projects, improving site performance and user experience.
                    </p>
                  </div>
                  <div class="timeline-skills">
                    <h5 class="font-weight-bold text-light-grey">Skills :</h5>
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>Bootstrap</span>
                    <span>XML</span>
                    <span>JavaScript</span>
                    <span>CMS</span>
                    <span>Php</span>
                    <span>MySQL</span>
                    <span>GIT HUB</span>
                    <span>JQuery</span>
                    <span>AJAX</span>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- projects -->
      <section id="projects" class="d-flex align-items-center"
        style="margin: 0; background: #1a032b; overflow: hidden; ">
        <div class="container pt-0">
          <div class="section-title" data-aos="fade-up" data-aos-delay="120">
            <h2>Projects</h2>
            <p class="headingtext">
              My Projects has been a journey of self-discovery and growth.
            </p>
          </div>
          <div class="rainposition">
            <div class="rain rain1"></div>
            <div class="rain rain2">
              <div class="drop drop2"></div>
            </div>
            <div class="rain rain3"></div>
            <div class="rain rain4"></div>
            <div class="rain rain5">
              <div class="drop drop5"></div>
            </div>
            <div class="rain rain6"></div>
            <div class="rain rain7"></div>
            <div class="rain rain8">
              <div class="drop drop8"></div>
            </div>
            <div class="rain rain9"></div>
            <div class="rain rain10"></div>
            <div class="drop drop11"></div>
            <div class="drop drop12"></div>
          </div>
          <div class="row justify-content-center">
            <!-- project 1-->
            <div class="col-lg-4 col-md-4 col-sm-12 my-4" data-bs-toggle="modal" data-bs-target="#projectimagemodal1"
              data-bs-toggle="tooltip" title="Click for more details" style=" cursor: pointer;">
              <div class="d-flex align-items-start">
                <div class="timeline-content flex-grow-1">
                  <div class="text-center">
                    <div class="projectimagecontainer">
                      <img src="assets/images/projects/ShopUs/1shopushome.png" alt="shopus" class="projectimage">
                    </div>
                  </div>
                  <div class="p-2">
                    <h5 class="mb-0 h6"> Shopus (Online Store Management)</h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- project 2-->
            <div class="col-lg-4 col-md-4 col-sm-12 my-4" data-bs-toggle="modal" data-bs-target="#projectimagemodal2"
              data-bs-toggle="tooltip" title="Click for more details" style=" cursor: pointer;">
              <div class="d-flex align-items-start">
                <div class="timeline-content flex-grow-1">
                  <div class="text-center">
                    <div class="projectimagecontainer">
                      <img src="assets/images/projects/GoDriveNet/1about.jpeg" alt="GoDrivenet" class="projectimage">
                    </div>
                  </div>
                  <div class="p-2">
                    <h5 class="mb-0 h6">GoDriveNet (A unified Platform For Cloud Storage With Social
                      Networking)</h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- project 3-->
            <div class="col-lg-4 col-md-4 col-sm-12 my-4" data-bs-toggle="modal" data-bs-target="#projectimagemodal3"
              data-bs-toggle="tooltip" title="Click for more details" style=" cursor: pointer;">
              <div class="d-flex align-items-start">
                <div class="timeline-content flex-grow-1">
                  <div class="text-center">
                    <div class="projectimagecontainer">
                      <img src="assets/images/projects/Eboss/0admin_dashboard.png" alt="Eboss" class="projectimage">
                    </div>
                  </div>
                  <div class="p-2">
                    <h5 class="mb-0 h6">Eboss (eBay Integration Management System)</h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- project 4-->
            <div class="col-lg-4 col-md-4 col-sm-12 my-4" data-bs-toggle="modal" data-bs-target="#projectimagemodal4"
              data-bs-toggle="tooltip" title="Click for more details" style=" cursor: pointer;">
              <div class="d-flex align-items-start">
                <div class="timeline-content flex-grow-1">
                  <div class="text-center">
                    <div class="projectimagecontainer">
                      <img src="assets/images/projects/Pharmacy_supply_system/1admin_dashboard.png"
                        alt="Pharmacy Management System" class="projectimage">
                    </div>
                  </div>
                  <div class="p-2">
                    <h5 class="mb-0 h6">PharmaSupply Management System</h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- project 5-->
            <div class="col-lg-4 col-md-4 col-sm-12 my-4" data-bs-toggle="modal" data-bs-target="#projectimagemodal5"
              data-bs-toggle="tooltip" title="Click for more details" style=" cursor: pointer;">
              <div class="d-flex align-items-start">
                <div class="timeline-content flex-grow-1">
                  <div class="text-center">
                    <div class="projectimagecontainer">
                      <img src="assets/images/projects/QuickCV/home_eng.png" alt="QuickCV" class="projectimage">
                    </div>
                  </div>
                  <div class="p-2">
                    <h5 class="mb-0 h6">Sign Makers (Localization)</h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- project 6-->
            <div class="col-lg-4 col-md-4 col-sm-12 my-4" data-bs-toggle="modal" data-bs-target="#projectimagemodal6"
              data-bs-toggle="tooltip" title="Click for more details" style=" cursor: pointer;">
              <div class="d-flex align-items-start">
                <div class="timeline-content flex-grow-1">
                  <div class="text-center">
                    <div class="projectimagecontainer">
                      <img src="assets/images/projects/QuickCV/home_eng.png" alt="QuickCV" class="projectimage">
                    </div>
                  </div>
                  <div class="p-2">
                    <h5 class="mb-0 h6">Quick CV (Localization)</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- education -->
      <section id="education" class="d-flex align-items-center"
        style="margin: 0;min-height: 700px;background: #1a032b;overflow: hidden;perspective: 10rem;">
        <div class="container pt-0">
          <div class="section-title" data-aos="fade-up" data-aos-delay="120">
            <h2>Education</h2>
            <p class="headingtext">
              My education has been a journey of self-discovery and growth. Below are my educational details.
            </p>
          </div>
          <div class="rainposition">
            <div class="rain rain1"></div>
            <div class="rain rain2">
              <div class="drop drop2"></div>
            </div>
            <div class="rain rain3"></div>
            <div class="rain rain4"></div>
            <div class="rain rain5">
              <div class="drop drop5"></div>
            </div>
            <div class="rain rain6"></div>
            <div class="rain rain7"></div>
            <div class="rain rain8">
              <div class="drop drop8"></div>
            </div>
            <div class="rain rain9"></div>
            <div class="rain rain10"></div>
            <div class="drop drop11"></div>
            <div class="drop drop12"></div>
          </div>
          <div class="row justify-content-center">
            <!-- Education Item 1 -->
            <div class="col-lg-8 col-md-9 col-sm-12 mb-4">
              <div class="education-item d-flex align-items-start">
                <div class="timeline-content flex-grow-1">
                  <div class="d-flex">
                    <div class="logo-container">
                      <img src="assets/images/Logo/mnsuet_logo.png" alt="">
                    </div>
                    <div class="px-2">
                      <a href="https://mnsuet.edu.pk" target="_blank">
                        <h5 class="mb-0"> Muhammad Nawaz Sharif University of Engineering & Technology
                        </h5>
                      </a>
                      <h6>Bachelor of Science in Computer Science (BSCS).</h6>
                      <h6 class="clrccc">April 2020 - August 2024</h>
                        <h6 class="font-weight-bold clrccc">Grades: 3.078 / 4.0 CGPA</h6>
                    </div>
                  </div>
                  <div class="">

                  </div>
                </div>
                <div class="education-icon">
                  <i class="fas fa-graduation-cap"></i>
                </div>
              </div>
            </div>
            <!-- Education Item 2 -->
            <div class="col-lg-8 col-md-9 col-sm-12 mb-4">
              <div class="education-item d-flex align-items-start">
                <div class="timeline-content flex-grow-1">
                  <div class="d-flex">
                    <div class="logo-container">
                      <img src="assets/images/Logo/superior_clg.png" alt="">
                    </div>
                    <div class="px-2">
                      <a href="https://www.superiorcolleges.edu.pk/multan/" target="_blank">
                        <h5 class="mb-0">The Superior Group of Colleges Multan
                        </h5>
                      </a>
                      <h6>Intermediate in Computer Science (ICS).</h6>
                      <span class="education-date clrccc">May 2018 - October 2020</span>
                      <h6 class="font-weight-bold clrccc">Grades: 56%</h6>
                    </div>
                  </div>
                </div>
                <div class="education-icon">
                  <i class="fas fa-graduation-cap"></i>
                </div>
              </div>
            </div>
            <!-- Education Item 3 -->
            <div class="col-lg-8 col-md-9 col-sm-12 mb-0">
              <div class="education-itemlast d-flex align-items-start">
                <div class="timeline-content flex-grow-1">
                  <div class="d-flex">
                    <div class="logo-container">
                      <img src="assets/images/Logo/muslim_school.jpg" alt="">
                    </div>
                    <div class="px-2">
                      <a href="https://mphss.edu.pk/" target="_blank">
                        <h5 class="mb-0"> Muslim Group of Schools and Colleges Multan
                        </h5>
                      </a>
                      <h6>Matric</h6>
                      <span class="education-date clrccc">March-2016 - May-2018
                      </span>
                      <h6 class="font-weight-bold clrccc">Grades: 66%</h6>
                    </div>
                  </div>
                </div>
                <div class="education-icon">
                  <i class="fas fa-graduation-cap"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="offer-area secondary-bg pt-120 pb-200">
        <div class="offer__shape-left">
          <img class="wow fadeInUpBig" data-wow-delay="400ms" data-wow-duration="1500ms"
            src="assets/images/shape/offer-bg-shape-left.png" alt="shape"
            style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUpBig;">
        </div>
        <div class="offer__shape-right">
          <img class="wow fadeInDownBig" data-wow-delay="400ms" data-wow-duration="1500ms"
            src="assets/images/shape/offer-bg-shape-right.png" alt="shape"
            style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInDownBig;">
        </div>
        <div class="container">
          <div class="d-flex gap-4 flex-wrap align-items-center justify-content-between mb-5">
            <div class="section-header">
              <h5 class="wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms"
                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                <img class="me-1" src="assets/images/icon/section-title.png" alt="icon">
                Our offering
              </h5>
              <h2 class="text-white wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms"
                style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInLeft;">
                Enhance and Pioneer Using <br>
                Technology Trends
              </h2>
            </div>
            <a href="pricing.html" class="btn-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"
              style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">Explore
              More <i class="fa-regular fa-arrow-right-long"></i></a>
          </div>
          <div class="row g-4 pt-5">
            <div class="col-lg-2 col-md-4 col-sm-6 wow bounceInUp" data-wow-delay="00ms" data-wow-duration="1500ms"
              style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: bounceInUp;">
              <div class="offer__item">
                <div class="shape-top">
                  <img src="assets/images/shape/offter-item-shape-top.png" alt="shape">
                </div>
                <div class="shape-bottom">
                  <img src="assets/images/shape/offter-item-shape-bottom.png" alt="shape">
                </div>
                <div class="offer__icon">
                  <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M18 0C10.3961 0 0 5.74724 0 18C0 29.9409 9.99921 36 18 36C31.7268 36 36 23.974 36 18C36 9.18425 29.2535 0 18 0ZM13.826 1.6937C11.948 3.29528 10.389 5.94567 9.38268 9.23386C8.07874 8.46142 6.8811 7.50472 5.81811 6.39213C8.01496 4.08898 10.7929 2.47323 13.826 1.6937ZM5.04567 7.25669C6.23622 8.49685 7.58976 9.55276 9.06378 10.389C8.51102 12.5362 8.18504 14.9173 8.14252 17.4189H1.17638C1.30394 13.6843 2.66457 10.1197 5.04567 7.25669ZM5.04567 28.7433C2.65748 25.8803 1.30394 22.3158 1.17638 18.5811H8.14252C8.18504 21.0898 8.51102 23.4638 9.06378 25.611C7.59685 26.4543 6.24331 27.5032 5.04567 28.7433ZM5.81811 29.615C6.8811 28.5024 8.07874 27.5457 9.38268 26.7732C10.389 30.0543 11.948 32.7118 13.826 34.3134C10.7929 33.5268 8.01496 31.911 5.81811 29.615ZM17.4189 34.7953C14.4 34.4126 11.7992 31.0394 10.3961 26.2063C12.5646 25.1079 14.9598 24.4913 17.4189 24.3992V34.7953ZM17.4189 23.2441C14.8535 23.3291 12.3591 23.9598 10.0984 25.0654C9.62362 23.0811 9.34016 20.8913 9.29764 18.5811H17.4189V23.2441ZM17.4189 17.4189H9.29764C9.34016 15.1087 9.62362 12.9189 10.0984 10.9346C12.3661 12.0402 14.8606 12.6709 17.4189 12.7559V17.4189ZM17.4189 11.6008C14.9528 11.5157 12.5646 10.8921 10.3961 9.7937C11.7992 4.95354 14.4 1.5874 17.4189 1.20472V11.6008ZM30.9543 7.25669C33.3354 10.1197 34.6961 13.6843 34.8236 17.4189H27.8646C27.8221 14.9102 27.4961 12.5362 26.9433 10.389C28.4102 9.54567 29.7638 8.49685 30.9543 7.25669ZM30.1819 6.38504C29.1189 7.49764 27.9213 8.45433 26.6173 9.22677C25.611 5.94567 24.052 3.29528 22.174 1.68661C25.2071 2.47323 27.985 4.08898 30.1819 6.38504ZM18.5811 1.20472C21.6 1.5874 24.2008 4.96063 25.6039 9.7937C23.4354 10.8921 21.0472 11.5087 18.5811 11.6008V1.20472ZM18.5811 12.7559C21.1465 12.6709 23.6409 12.0402 25.9016 10.9346C26.3764 12.9189 26.6598 15.1087 26.7024 17.4189H18.5811V12.7559ZM18.5811 18.5811H26.7024C26.6598 20.8913 26.3764 23.0811 25.9016 25.0654C23.6195 23.9424 21.1233 23.3213 18.5811 23.2441V18.5811ZM18.5811 34.7953V24.3992C21.0472 24.4843 23.4354 25.1079 25.6039 26.2063C24.2008 31.0465 21.6 34.4126 18.5811 34.7953ZM22.174 34.3063C24.052 32.7047 25.611 30.0543 26.6173 26.7661C27.9213 27.5386 29.1189 28.4953 30.1819 29.6079C27.985 31.911 25.2071 33.5268 22.174 34.3063ZM30.9543 28.7433C29.7638 27.5032 28.4102 26.4543 26.9433 25.611C27.4961 23.4638 27.8221 21.0827 27.8646 18.5811H34.8236C34.6961 22.3158 33.3354 25.8803 30.9543 28.7433Z"
                      fill="#3C72FC"></path>
                  </svg>
                </div>
                <h4 class="text-white mt-20">Website</h4>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 wow bounceInUp" data-wow-delay="100ms" data-wow-duration="1500ms"
              style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: bounceInUp;">
              <div class="offer__item">
                <div class="shape-top">
                  <img src="assets/images/shape/offter-item-shape-top.png" alt="shape">
                </div>
                <div class="shape-bottom">
                  <img src="assets/images/shape/offter-item-shape-bottom.png" alt="shape">
                </div>
                <div class="offer__icon">
                  <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M22.3329 3.58535L23.91 0.956761C23.9526 0.885641 23.9809 0.806813 23.9931 0.724776C24.0053 0.64274 24.0012 0.559103 23.9811 0.47864C23.961 0.398177 23.9252 0.322464 23.8758 0.255824C23.8265 0.189184 23.7644 0.132922 23.6933 0.0902496C23.6222 0.0475777 23.5434 0.0193317 23.4613 0.00712437C23.3793 -0.00508296 23.2957 -0.00101255 23.2152 0.0191032C23.1347 0.039219 23.059 0.0749861 22.9924 0.124362C22.9257 0.173739 22.8695 0.235758 22.8268 0.306877L21.1626 3.08072C20.1717 2.72831 19.1107 2.52621 18.0004 2.52621C16.8901 2.52621 15.829 2.72831 14.8381 3.08072L13.1739 0.306877C13.0878 0.163244 12.948 0.0597288 12.7855 0.0191032C12.623 -0.0215224 12.4511 0.00406979 12.3074 0.0902497C12.1638 0.17643 12.0603 0.316138 12.0196 0.47864C11.979 0.641142 12.0046 0.813128 12.0908 0.956761L13.6678 3.58535C10.6192 5.16111 8.52686 8.33789 8.52686 12.0004C8.52686 12.1679 8.59339 12.3285 8.71184 12.4469C8.83028 12.5654 8.99092 12.6319 9.15842 12.6319H26.8423C27.0098 12.6319 27.1705 12.5654 27.2889 12.4469C27.4074 12.3285 27.4739 12.1679 27.4739 12.0004C27.4733 8.33853 25.3815 5.16174 22.3329 3.58535ZM9.81399 11.3688C10.1374 7.13539 13.6855 3.78997 18.0004 3.78997C22.3152 3.78997 25.8634 7.13539 26.1868 11.3688H9.81399Z"
                      fill="#3C72FC"></path>
                    <path
                      d="M22.4068 7.177H21.5744C21.464 7.177 21.3581 7.22085 21.2801 7.2989C21.202 7.37696 21.1582 7.48282 21.1582 7.5932V8.42561C21.1582 8.6555 21.3445 8.84181 21.5744 8.84181H22.4074C22.5178 8.84181 22.6237 8.79796 22.7017 8.71991C22.7798 8.64186 22.8236 8.536 22.8236 8.42561V7.5932C22.8234 7.48276 22.7795 7.3769 22.7013 7.29887C22.6231 7.22083 22.5172 7.177 22.4068 7.177ZM14.4257 7.177H13.5926C13.4822 7.177 13.3764 7.22085 13.2983 7.2989C13.2203 7.37696 13.1764 7.48282 13.1764 7.5932V8.42561C13.1764 8.6555 13.3627 8.84181 13.5926 8.84181H14.4257C14.536 8.84181 14.6419 8.79796 14.72 8.71991C14.798 8.64186 14.8419 8.536 14.8419 8.42561V7.5932C14.8419 7.48282 14.798 7.37696 14.72 7.2989C14.6419 7.22085 14.536 7.177 14.4257 7.177ZM26.8416 13.2634H9.15774C8.99024 13.2634 8.8296 13.33 8.71116 13.4484C8.59272 13.5668 8.52618 13.7275 8.52618 13.895V26.6343C8.52751 27.4433 8.8497 28.2188 9.42205 28.7905C9.9944 29.3623 10.7702 29.6837 11.5792 29.6842H12.3156V33.4774C12.3156 34.8681 13.4486 35.9999 14.8419 35.9999C16.2351 35.9999 17.3681 34.8681 17.3681 33.4774V29.6842H18.6313V33.4774C18.6313 34.8681 19.7643 35.9999 21.1575 35.9999C22.5508 35.9999 23.6838 34.8681 23.6838 33.4774V29.6842H24.4202C25.2293 29.6839 26.0051 29.3625 26.5775 28.7907C27.1499 28.2189 27.472 27.4434 27.4732 26.6343V13.895C27.4732 13.7275 27.4067 13.5668 27.2882 13.4484C27.1698 13.33 27.0091 13.2634 26.8416 13.2634ZM26.2101 26.6343C26.2092 27.1085 26.0203 27.5629 25.6847 27.8979C25.3491 28.2329 24.8944 28.4211 24.4202 28.421H23.0522C22.8847 28.421 22.7241 28.4876 22.6057 28.606C22.4872 28.7245 22.4207 28.8851 22.4207 29.0526V33.4774C22.4207 33.8124 22.2876 34.1337 22.0507 34.3706C21.8138 34.6074 21.4925 34.7405 21.1575 34.7405C20.8225 34.7405 20.5012 34.6074 20.2644 34.3706C20.0275 34.1337 19.8944 33.8124 19.8944 33.4774V29.0526C19.8944 28.8851 19.8279 28.7245 19.7094 28.606C19.591 28.4876 19.4303 28.421 19.2628 28.421H16.7366C16.5691 28.421 16.4084 28.4876 16.29 28.606C16.1715 28.7245 16.105 28.8851 16.105 29.0526V33.4774C16.105 33.8124 15.9719 34.1337 15.735 34.3706C15.4981 34.6074 15.1769 34.7405 14.8419 34.7405C14.5069 34.7405 14.1856 34.6074 13.9487 34.3706C13.7118 34.1337 13.5787 33.8124 13.5787 33.4774V29.0526C13.5787 28.8851 13.5122 28.7245 13.3937 28.606C13.2753 28.4876 13.1147 28.421 12.9472 28.421H11.5798C11.1056 28.4209 10.6509 28.2327 10.3153 27.8978C9.97962 27.5629 9.79048 27.1085 9.78931 26.6343V14.5266H26.2101V26.6343ZM30.3153 13.2634C29.0963 13.2634 28.1048 14.2562 28.1048 15.4764V24.3133C28.1048 25.5335 29.0963 26.5263 30.3153 26.5263C31.5342 26.5263 32.5258 25.5335 32.5258 24.3133V15.4764C32.5254 14.89 32.2925 14.3277 31.8781 13.9129C31.4637 13.498 30.9017 13.2644 30.3153 13.2634ZM31.2626 24.3133C31.2626 24.8369 30.8376 25.2632 30.3153 25.2632C29.793 25.2632 29.3679 24.8369 29.3679 24.3133V15.4764C29.3679 14.9529 29.793 14.5266 30.3153 14.5266C30.8376 14.5266 31.2626 14.9529 31.2626 15.4764V24.3133ZM5.68412 13.2634C4.46519 13.2634 3.47363 14.2562 3.47363 15.4764V24.3133C3.47363 25.5335 4.46519 26.5263 5.68412 26.5263C6.90305 26.5263 7.89461 25.5335 7.89461 24.3133V15.4764C7.89427 14.89 7.66136 14.3277 7.24696 13.9129C6.83255 13.498 6.27051 13.2644 5.68412 13.2634ZM6.63147 24.3133C6.63147 24.8369 6.20643 25.2632 5.68412 25.2632C5.16181 25.2632 4.73677 24.8369 4.73677 24.3133V15.4764C4.73677 14.9529 5.16181 14.5266 5.68412 14.5266C6.20643 14.5266 6.63147 14.9529 6.63147 15.4764V24.3133Z"
                      fill="#3C72FC"></path>
                  </svg>
                </div>
                <h4 class="text-white mt-20">Android</h4>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 wow bounceInUp" data-wow-delay="200ms" data-wow-duration="1500ms"
              style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: bounceInUp;">
              <div class="offer__item">
                <div class="shape-top">
                  <img src="assets/images/shape/offter-item-shape-top.png" alt="shape">
                </div>
                <div class="shape-bottom">
                  <img src="assets/images/shape/offter-item-shape-bottom.png" alt="shape">
                </div>
                <div class="offer__icon">
                  <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_602_122)">
                      <path
                        d="M25.368 0.727224L25.3301 0L24.6063 0.0778922C24.5353 0.0854747 17.5395 0.928503 17.0597 8.75012L17.0115 9.53318L17.7945 9.48011C17.8745 9.47459 25.7981 8.84249 25.368 0.727224ZM24.0025 1.60058C23.8708 6.3141 20.2037 7.62517 18.5204 7.97878C19.1614 3.39831 22.4832 2.00245 24.0025 1.60058Z"
                        fill="#3C72FC"></path>
                      <path
                        d="M32.1109 25.8609L31.6704 25.7182C29.0048 24.8566 27.2147 22.415 27.2147 19.6426C27.2147 17.1763 28.6092 14.9705 30.8549 13.8855L31.525 13.5622L31.1514 12.9191C30.9914 12.6434 29.4963 10.2011 26.3379 9.39256C23.8329 8.7515 21.0164 9.31881 17.9634 11.0793C16.671 10.2949 12.3779 8.03393 8.9624 10.3004C8.29377 10.6699 1.20696 14.9153 4.89546 26.3703C5.00369 26.6267 7.57551 32.652 10.6188 34.9088C11.4398 35.6933 13.5394 36.6735 15.9389 35.0377C16.3546 34.8661 19.136 33.7956 20.9006 35.0494C21.552 35.4954 22.6894 36.0007 23.8908 36.0007C24.8021 36.0007 25.7499 35.7105 26.5509 34.8833C26.9245 34.56 30.3373 31.514 32.1109 26.6888L32.1626 26.5482L32.1109 25.8609ZM25.63 33.8556L25.5769 33.9059C24.0652 35.4934 21.7733 33.9748 21.6885 33.9183C20.7869 33.2772 19.7426 33.0684 18.763 33.0684C16.9853 33.0684 15.4219 33.757 15.322 33.8018L15.2096 33.8652C13.1286 35.3176 11.7038 34.0396 11.5528 33.8942L11.4715 33.8245C8.71908 31.8173 6.1893 25.8926 6.18586 25.8906C2.73378 15.1593 9.34704 11.6494 9.62828 11.5067L9.7041 11.4619C12.9073 9.31122 17.5119 12.4242 17.5574 12.4552L17.9248 12.7075L18.3053 12.4779C21.1729 10.7443 23.7605 10.1549 25.996 10.7278C27.8171 11.1937 28.9779 12.3318 29.5459 13.0314C27.2388 14.4452 25.8368 16.9123 25.8368 19.6426C25.8368 22.7831 27.722 25.5735 30.5944 26.7873C28.8263 31.1031 25.6637 33.8273 25.63 33.8556Z"
                        fill="#3C72FC"></path>
                    </g>
                    <defs>
                      <clipPath>
                        <rect width="36" height="36" fill="white"></rect>
                      </clipPath>
                    </defs>
                  </svg>
                </div>
                <h4 class="text-white mt-20">IOS</h4>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 wow bounceInUp" data-wow-delay="400ms" data-wow-duration="1500ms"
              style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: bounceInUp;">
              <div class="offer__item">
                <div class="shape-top">
                  <img src="assets/images/shape/offter-item-shape-top.png" alt="shape">
                </div>
                <div class="shape-bottom">
                  <img src="assets/images/shape/offter-item-shape-bottom.png" alt="shape">
                </div>
                <div class="offer__icon">
                  <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_602_155)">
                      <path
                        d="M28.5331 13.0602H33.0025C33.0733 13.0611 33.1434 13.0478 33.209 13.0213C33.2746 12.9948 33.3343 12.9556 33.3846 12.9058C33.4348 12.8561 33.4748 12.7969 33.502 12.7316C33.5293 12.6664 33.5433 12.5964 33.5433 12.5256C33.5433 12.4549 33.5293 12.3849 33.502 12.3196C33.4748 12.2543 33.4348 12.1951 33.3846 12.1454C33.3343 12.0957 33.2746 12.0564 33.209 12.0299C33.1434 12.0034 33.0733 11.9902 33.0025 11.991H28.5331C28.2377 11.991 27.9985 12.2305 27.9985 12.5258C27.9985 12.8211 28.2377 13.0602 28.5331 13.0602ZM28.5331 14.9672H33.0025C33.0733 14.968 33.1434 14.9548 33.209 14.9283C33.2746 14.9018 33.3343 14.8625 33.3846 14.8128C33.4348 14.7631 33.4748 14.7039 33.502 14.6386C33.5293 14.5733 33.5433 14.5033 33.5433 14.4326C33.5433 14.3618 33.5293 14.2918 33.502 14.2265C33.4748 14.1613 33.4348 14.1021 33.3846 14.0523C33.3343 14.0026 33.2746 13.9634 33.209 13.9369C33.1434 13.9104 33.0733 13.8971 33.0025 13.8979H28.5331C28.4629 13.8979 28.3933 13.9117 28.3285 13.9386C28.2636 13.9655 28.2047 14.0048 28.155 14.0545C28.1054 14.1041 28.066 14.163 28.0392 14.2279C28.0123 14.2927 27.9985 14.3623 27.9985 14.4325C27.9985 14.5027 28.0123 14.5722 28.0391 14.6371C28.066 14.702 28.1054 14.7609 28.155 14.8106C28.2046 14.8602 28.2636 14.8996 28.3284 14.9265C28.3933 14.9534 28.4628 14.9672 28.5331 14.9672ZM28.5331 16.8741H33.0025C33.0733 16.8749 33.1434 16.8617 33.209 16.8352C33.2746 16.8087 33.3343 16.7695 33.3846 16.7197C33.4348 16.67 33.4748 16.6108 33.502 16.5455C33.5293 16.4803 33.5433 16.4102 33.5433 16.3395C33.5433 16.2688 33.5293 16.1988 33.502 16.1335C33.4748 16.0682 33.4348 16.009 33.3846 15.9593C33.3343 15.9096 33.2746 15.8703 33.209 15.8438C33.1434 15.8173 33.0733 15.8041 33.0025 15.8049H28.5331C28.4629 15.8049 28.3933 15.8187 28.3285 15.8455C28.2636 15.8724 28.2047 15.9118 28.155 15.9614C28.1054 16.011 28.066 16.07 28.0392 16.1348C28.0123 16.1997 27.9985 16.2692 27.9985 16.3394C27.9985 16.6346 28.2377 16.8741 28.5331 16.8741ZM30.7677 24.2292C30.1758 24.2292 29.6193 24.4599 29.2007 24.8785C28.3364 25.7427 28.3364 27.1485 29.2007 28.0129C29.6327 28.445 30.2002 28.6611 30.7679 28.6611C31.3354 28.6611 31.9028 28.445 32.3351 28.0129C32.7537 27.5943 32.9841 27.0377 32.9841 26.4457C32.9841 25.8535 32.7537 25.2971 32.3351 24.8785C31.9166 24.4599 31.3598 24.2292 30.7677 24.2292ZM29.9569 25.6347C30.0631 25.5278 30.1895 25.443 30.3287 25.3853C30.4679 25.3276 30.6172 25.2981 30.7679 25.2985C30.8849 25.2985 30.9989 25.3163 31.1077 25.3498L29.6729 26.7847C29.5517 26.3914 29.646 25.9453 29.9569 25.6347ZM31.579 27.2568C31.2681 27.5674 30.822 27.6616 30.429 27.5408L31.8635 26.106C31.8976 26.216 31.9149 26.3305 31.9149 26.4457C31.9149 26.752 31.7957 27.0401 31.579 27.2568ZM32.3351 19.7852C31.9166 19.3667 31.3598 19.1362 30.7679 19.1362C30.1758 19.1362 29.6193 19.3667 29.2007 19.7852C28.3366 20.6496 28.3366 22.0556 29.2007 22.9197C29.6327 23.3517 30.2002 23.5679 30.7679 23.5679C31.3354 23.5679 31.9031 23.3517 32.3351 22.9196C32.7537 22.5011 32.9841 21.9446 32.9841 21.3525C32.9841 20.7606 32.7537 20.2039 32.3351 19.7852ZM31.579 20.5414C31.6858 20.6477 31.7705 20.7741 31.8282 20.9133C31.8858 21.0525 31.9153 21.2018 31.9149 21.3525C31.9149 21.4695 31.8973 21.5837 31.8635 21.6922L30.4279 20.2566C30.538 20.2227 30.6525 20.2054 30.7677 20.2055C30.9184 20.205 31.0677 20.2345 31.207 20.2922C31.3462 20.3498 31.4727 20.4346 31.579 20.5414ZM29.9569 22.1638C29.646 21.8529 29.5517 21.4068 29.6728 21.0135L31.1068 22.4475C30.7133 22.5687 30.2675 22.4745 29.9569 22.1638Z"
                        fill="#3C72FC"></path>
                      <path
                        d="M31.3294 6.27253H21.8985C21.8109 5.64497 21.5645 5.05016 21.1827 4.54446L24.8145 0.912619C24.8642 0.86299 24.9035 0.804071 24.9304 0.739226C24.9573 0.67438 24.9711 0.604879 24.9711 0.53469C24.9711 0.464501 24.9573 0.394999 24.9304 0.330154C24.9035 0.265308 24.8642 0.206389 24.8145 0.156761C24.7649 0.107068 24.706 0.067646 24.6411 0.0407487C24.5762 0.0138515 24.5067 6.90847e-06 24.4365 6.90847e-06C24.3662 6.90847e-06 24.2967 0.0138515 24.2318 0.0407487C24.167 0.067646 24.108 0.107068 24.0584 0.156761L20.4261 3.7891C19.0907 2.78694 17.2373 2.78694 15.9022 3.78889L12.2698 0.15655C12.1695 0.0563102 12.0335 0 11.8918 0C11.75 0 11.614 0.0563102 11.5137 0.15655C11.464 0.206173 11.4246 0.265102 11.3977 0.329968C11.3708 0.394834 11.357 0.464365 11.357 0.534584C11.357 0.604804 11.3708 0.674334 11.3977 0.7392C11.4246 0.804066 11.464 0.862996 11.5137 0.912619L15.1455 4.54446C14.7637 5.05022 14.5173 5.64499 14.4295 6.27253H4.6706C2.09506 6.27253 3.5159e-05 8.3677 3.5159e-05 10.9432V22.0572C3.5159e-05 22.3525 0.239238 22.5917 0.534761 22.5917C0.604959 22.5917 0.674474 22.5779 0.739332 22.551C0.804191 22.5242 0.863123 22.4848 0.912761 22.4352C0.962399 22.3855 1.00177 22.3266 1.02863 22.2617C1.05548 22.1969 1.06929 22.1274 1.06928 22.0572V10.9432C1.06928 8.95741 2.68484 7.34184 4.6706 7.34184H31.3297C33.3152 7.34184 34.9307 8.95741 34.9307 10.9432V14.5008C34.9307 14.7961 35.1699 15.0353 35.4654 15.0353C35.5356 15.0353 35.6052 15.0215 35.67 14.9946C35.7349 14.9678 35.7938 14.9284 35.8434 14.8788C35.8931 14.8291 35.9325 14.7702 35.9593 14.7053C35.9862 14.6405 36 14.571 36 14.5008V10.9432C36 8.36763 33.9049 6.27253 31.3294 6.27253ZM16.2532 4.89581C17.3071 3.84225 19.0214 3.84225 20.0751 4.89609C20.4579 5.2781 20.7114 5.75461 20.8147 6.27267H15.5135C15.6166 5.75468 15.8702 5.2781 16.2532 4.89581ZM35.4652 16.1048C35.3234 16.1048 35.1875 16.1612 35.0872 16.2615C34.987 16.3617 34.9307 16.4977 34.9307 16.6395V28.5871C34.9307 30.5726 33.3152 32.1882 31.3294 32.1882H4.6706C2.68484 32.1882 1.06928 30.5726 1.06928 28.5871V24.1959C1.07009 24.1252 1.05686 24.055 1.03035 23.9894C1.00385 23.9239 0.9646 23.8642 0.914875 23.8139C0.86515 23.7636 0.80594 23.7237 0.740674 23.6964C0.675408 23.6692 0.605383 23.6551 0.534655 23.6551C0.463927 23.6551 0.393902 23.6692 0.328636 23.6964C0.26337 23.7237 0.20416 23.7636 0.154435 23.8139C0.104711 23.8642 0.0654601 23.9239 0.0389567 23.9894C0.0124534 24.055 -0.000775918 24.1252 3.5159e-05 24.1959V28.5871C3.5159e-05 31.1623 2.09513 33.2574 4.6706 33.2574H6.24602L6.48192 34.1267C6.73188 35.0468 7.57233 35.6895 8.5259 35.6895C9.47948 35.6895 10.32 35.0469 10.57 34.1267L10.8059 33.2574H25.1941L25.43 34.1267C25.68 35.0468 26.5207 35.6895 27.474 35.6895C28.4277 35.6895 29.2681 35.0469 29.518 34.1267L29.754 33.2574H31.3297C33.9049 33.2574 36 31.1623 36 28.5871V16.6395C36 16.3443 35.7608 16.1048 35.4652 16.1048ZM9.53805 33.8462C9.41423 34.3018 8.99805 34.6202 8.52597 34.6202C8.05382 34.6202 7.63772 34.3019 7.51382 33.8462L7.354 33.2574H9.69794L9.53805 33.8462ZM28.4862 33.8462C28.3623 34.3018 27.9462 34.6202 27.474 34.6202C27.0019 34.6202 26.5858 34.3019 26.4622 33.8462L26.3023 33.2574H28.646L28.4862 33.8462Z"
                        fill="#3C72FC"></path>
                      <path
                        d="M8.09721 30.1764C10.3632 30.4112 12.6399 30.5287 14.9181 30.5285C17.1969 30.5285 19.4763 30.4112 21.7392 30.1764C23.0383 30.0412 24.2682 29.4631 25.2021 28.5479C26.1362 27.6325 26.7388 26.4147 26.8995 25.1185C27.3389 21.5631 27.3389 17.9672 26.8995 14.4118C26.7388 13.1157 26.1362 11.8979 25.2021 10.9824C24.2682 10.0673 23.0383 9.4891 21.7392 9.35396C17.204 8.88429 12.6324 8.88429 8.09721 9.35396C6.79811 9.48882 5.56814 10.0673 4.63432 10.9824C3.70021 11.8979 3.09728 13.1157 2.93697 14.4118C2.49725 17.9672 2.49725 21.5632 2.93697 25.1185C3.09728 26.4147 3.70021 27.6325 4.63432 28.5479C5.56814 29.4631 6.79783 30.0412 8.09721 30.1764ZM3.9982 14.5431C4.27066 12.343 6.00154 10.6465 8.2076 10.4174C12.6694 9.95518 17.167 9.95518 21.6288 10.4174C23.8348 10.6465 25.5658 12.3431 25.8382 14.5431C26.267 18.0112 26.267 21.5189 25.8382 24.987C25.5658 27.187 23.8348 28.8835 21.6288 29.1126C17.167 29.5749 12.6694 29.5749 8.2076 29.1126C6.00154 28.8835 4.27066 27.1872 3.9982 24.987C3.56918 21.5189 3.56918 18.0112 3.9982 14.5431Z"
                        fill="#3C72FC"></path>
                    </g>
                    <defs>
                      <clipPath>
                        <rect width="36" height="36" fill="white"></rect>
                      </clipPath>
                    </defs>
                  </svg>
                </div>
                <h4 class="text-white mt-20">Tv</h4>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 wow bounceInUp" data-wow-delay="500ms" data-wow-duration="1500ms"
              style="visibility: visible; animation-duration: 1500ms; animation-delay: 500ms; animation-name: bounceInUp;">
              <div class="offer__item">
                <div class="shape-top">
                  <img src="assets/images/shape/offter-item-shape-top.png" alt="shape">
                </div>
                <div class="shape-bottom">
                  <img src="assets/images/shape/offter-item-shape-bottom.png" alt="shape">
                </div>
                <div class="offer__icon">
                  <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M17.9999 10.2061C15.6829 10.2061 13.7979 12.0901 13.7979 14.406C13.7979 16.722 15.6828 18.606 17.9999 18.606C20.317 18.606 22.202 16.7219 22.202 14.406C22.202 12.0901 20.317 10.2061 17.9999 10.2061ZM17.9999 17.4061C16.3446 17.4061 14.9979 16.0601 14.9979 14.406C14.9979 12.7519 16.3446 11.406 17.9999 11.406C19.6552 11.406 21.002 12.7519 21.002 14.406C21.002 16.0601 19.6552 17.4061 17.9999 17.4061Z"
                      fill="#3C72FC"></path>
                    <path
                      d="M25.1903 18.0102C25.192 17.882 25.2001 17.7544 25.2001 17.626C25.2001 10.7685 22.7292 4.40667 18.4208 0.171803C18.3084 0.0616816 18.1574 0 18 0C17.8427 0 17.6917 0.0616816 17.5793 0.171803C13.2709 4.40667 10.8 10.7685 10.8 17.626C10.8 17.7544 10.8081 17.882 10.8098 18.0102C7.91877 19.5144 6 23.5346 6 28.1996C6 28.3587 6.06321 28.5113 6.17573 28.6238C6.28825 28.7364 6.44085 28.7996 6.59998 28.7996H13.5941C13.5948 28.7996 13.5954 28.7999 13.5961 28.7999H13.9297L12.6759 30.8884C12.6212 30.9795 12.5917 31.0834 12.5904 31.1896C12.589 31.2958 12.6159 31.4005 12.6683 31.4928C12.7206 31.5852 12.7965 31.6621 12.8882 31.7156C12.9799 31.7691 13.0842 31.7972 13.1904 31.7972H22.7925C22.8986 31.7972 23.0029 31.7691 23.0946 31.7156C23.1863 31.6621 23.2622 31.5852 23.3145 31.4928C23.3669 31.4005 23.3938 31.2958 23.3925 31.1896C23.3911 31.0834 23.3616 30.9795 23.3069 30.8884L22.053 28.7999H22.404C22.4047 28.7999 22.4053 28.7996 22.406 28.7996H29.4001C29.5592 28.7996 29.7118 28.7364 29.8243 28.6238C29.9369 28.5113 30.0001 28.3587 30.0001 28.1996C30.0001 23.5347 28.0814 19.5144 25.1903 18.0102ZM18.0001 1.45473C19.2677 2.78406 20.3501 4.32033 21.2367 6.00572H14.7634C15.6501 4.32026 16.7325 2.78399 18.0001 1.45473ZM7.21177 27.5996C7.35472 23.9749 8.78488 20.794 10.8614 19.374C11.0423 22.2454 11.6673 25.0445 12.6977 27.5996H7.21177ZM14.2504 30.5973L15.3293 28.7999H20.6533L21.7325 30.5973H14.2504ZM22.0117 27.5999H13.9884C12.6868 24.5589 12.0001 21.1194 12.0001 17.626C12.0001 13.8965 12.767 10.3296 14.1786 7.20568H21.8216C23.2332 10.3296 24.0001 13.8965 24.0001 17.626C24.0001 21.1195 23.3134 24.5589 22.0117 27.5999ZM23.3024 27.5996C24.3329 25.0445 24.9579 22.2454 25.1387 19.374C27.2153 20.794 28.6454 23.9749 28.7884 27.5996H23.3024ZM18.0001 32.4005C17.9213 32.4005 17.8433 32.416 17.7705 32.4462C17.6977 32.4763 17.6315 32.5205 17.5758 32.5762C17.5201 32.632 17.4759 32.6981 17.4458 32.7709C17.4156 32.8437 17.4001 32.9217 17.4001 33.0005V35.3999C17.4001 35.559 17.4633 35.7116 17.5758 35.8242C17.6883 35.9367 17.8409 35.9999 18.0001 35.9999C18.1592 35.9999 18.3118 35.9367 18.4243 35.8242C18.5368 35.7116 18.6001 35.559 18.6001 35.3999V33.0006C18.6001 32.9218 18.5845 32.8437 18.5544 32.7709C18.5243 32.6981 18.4801 32.632 18.4243 32.5763C18.3686 32.5205 18.3025 32.4763 18.2297 32.4462C18.1569 32.416 18.0789 32.4005 18.0001 32.4005ZM14.9969 32.4005C14.9181 32.4005 14.8401 32.416 14.7673 32.4462C14.6945 32.4763 14.6283 32.5205 14.5726 32.5762C14.5169 32.632 14.4727 32.6981 14.4426 32.7709C14.4124 32.8437 14.3969 32.9217 14.3969 33.0005V34.1993C14.3969 34.3584 14.4601 34.5111 14.5726 34.6236C14.6851 34.7361 14.8377 34.7993 14.9969 34.7993C15.156 34.7993 15.3086 34.7361 15.4211 34.6236C15.5336 34.5111 15.5969 34.3584 15.5969 34.1993V33.0005C15.5968 32.8414 15.5336 32.6888 15.4211 32.5763C15.3086 32.4637 15.156 32.4005 14.9969 32.4005ZM21.0033 32.4005C20.9246 32.4005 20.8465 32.416 20.7737 32.4462C20.7009 32.4763 20.6348 32.5205 20.5791 32.5762C20.5234 32.632 20.4792 32.6981 20.449 32.7709C20.4189 32.8437 20.4034 32.9217 20.4034 33.0005V34.1993C20.4034 34.3584 20.4666 34.5111 20.5791 34.6236C20.6916 34.7361 20.8442 34.7993 21.0033 34.7993C21.1625 34.7993 21.3151 34.7361 21.4276 34.6236C21.5401 34.5111 21.6033 34.3584 21.6033 34.1993V33.0005C21.6033 32.8414 21.5401 32.6888 21.4276 32.5763C21.3151 32.4637 21.1625 32.4005 21.0033 32.4005Z"
                      fill="#3C72FC"></path>
                  </svg>
                </div>
                <h4 class="text-white mt-20">IOT</h4>
              </div>
            </div>
          </div>
        </div>
      </section>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

      <!-- Modals  -->
      <!-- project 1 images  -->
      <div class="modal fade" id="projectimagemodal1" tabindex="-1" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <div class="d-flex justify-content-between w-100">
                <div>
                  <h5 class="m-0 font-weight-bold"> Shopus - Online Store Management </h5>
                </div>
                <span style="cursor: pointer; font-size:23px;" class="ion-ios-close close-modal"
                  aria-label="Close">&times;</span>
              </div>
              <script>
                $(document).ready(function () {
                  $('.close-modal').click(function () {
                    var modalId = $(this).closest('.modal').attr('id');
                    $('#' + modalId).modal('hide');
                  });
                });
              </script>
            </div>
            <div class="row no-gutters">
              <div class="col-12">
                <div class="card">
                  <div class="container">
                    <div class="wrapper row">
                      <div class="preview col-md-12">
                        <div class="preview-pic tab-content py-3">
                          <div id="productCarousel1" class="carousel slide" data-ride="carousel" data-interval="3000">
                            <div class="carousel-inner">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img src="assets/images/projects/ShopUs/1shopushome.png" class="d-block mx-auto"
                                    alt="About">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>1. Home</h5>
                                  </div>
                                </div>

                                <div class="carousel-item">
                                  <img src="assets/images/projects/ShopUs/2shopuslistedproducts.png"
                                    class="d-block mx-auto" alt="Listed Products">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>2. Listed Products</h5>
                                  </div>
                                </div>

                                <div class="carousel-item">
                                  <img src="assets/images/projects/ShopUs/3shopusupload.png" class="d-block mx-auto"
                                    alt="Upload">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>3. Upload Product</h5>
                                  </div>
                                </div>

                                <div class="carousel-item">
                                  <img src="assets/images/projects/ShopUs/4shopusproductlist.png"
                                    class="d-block mx-auto" alt="Product List">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>4. Product List</h5>
                                  </div>
                                </div>

                                <div class="carousel-item">
                                  <img src="assets/images/projects/ShopUs/5shopusproductupdate.png.jpg"
                                    class="d-block mx-auto" alt="Product Update">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>5. Product Update</h5>
                                  </div>
                                </div>

                                <div class="carousel-item">
                                  <img src="assets/images/projects/ShopUs/6shopuscategories.png" class="d-block mx-auto"
                                    alt="Categories">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>6. Categories</h5>
                                  </div>

                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/ShopUs/7product_display.png" class="d-block mx-auto"
                                    alt="Product Display">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>2. Product Display</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/ShopUs/8cart_page.png" class="d-block mx-auto"
                                    alt="Cart Page">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>3. Cart Page</h5>
                                  </div>
                                </div>

                              </div>
                              <a class="carousel-control-prev" href="#productCarousel1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#productCarousel1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="details col-md-12">
                          <div class="py-3">
                            <h6 class="font-weight-bolder mb-0">Description</h6>
                            <span>Shopus is a comprehensive e-commerce platform designed for easy and efficient online
                              store management. This application allows users to seamlessly add, edit, delete, and
                              display products with organized categories. Featuring a smooth user interface, Shopus
                              offers a complete checkout experience with a cart system and order processing.

                              With Shopus, store owners can manage product inventories, categorize items for easy
                              navigation, and provide customers with a streamlined shopping experience from browsing to
                              checkout. The platform also includes a secure order management system, making it an ideal
                              choice for businesses looking to establish or expand their online presence.</span>
                            <h6 class="font-weight-bolder mb-0">Language</h6>
                            <span> HTML, CSS, Bootstrap, JavaScript, AJAX, jQuery, PHP, Laravel, Git
                              Versioning </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- project 2 images  -->
      <div class="modal fade" id="projectimagemodal2" tabindex="-1" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <div class="d-flex justify-content-between w-100">
                <div>
                  <h5 class="m-0 font-weight-bold">GoDriveNet (A unified Platform For Cloud Storage With Social
                    Networking) </h5>
                </div>
                <span style="cursor: pointer; font-size:23px;" class="ion-ios-close close-modal"
                  aria-label="Close">&times;</span>
              </div>
              <script>
                $(document).ready(function () {
                  $('.close-modal').click(function () {
                    var modalId = $(this).closest('.modal').attr('id');
                    $('#' + modalId).modal('hide');
                  });
                });
              </script>
            </div>
            <div class="row no-gutters">
              <div class="col-12">
                <div class="card">
                  <div class="container">
                    <div class="wrapper row">
                      <div class="preview col-md-12">
                        <div class="preview-pic tab-content py-3">
                          <div id="productCarousel2" class="carousel slide" data-ride="carousel" data-interval="3000">
                            <div class="carousel-inner">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img src="assets/images/projects/GoDriveNet/8home.PNG" class="d-block mx-auto"
                                    alt="Home">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>1. Home</h5>
                                  </div>
                                </div>
                                </h5>
                                <div class="carousel-item ">
                                  <img src="assets/images/projects/GoDriveNet/1about.jpeg" class="d-block mx-auto"
                                    alt="About">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>2. About</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/GoDriveNet/4messenger.jpeg" class="d-block mx-auto"
                                    alt="Messenger">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>3. Messenger</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/GoDriveNet/3mydrive.PNG" class="d-block mx-auto"
                                    alt="My Drive">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>4. My Drive</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/GoDriveNet/5filegridview.PNG" class="d-block mx-auto"
                                    alt="File Grid View">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>5. File Grid View</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/GoDriveNet/6folderview.PNG" class="d-block mx-auto"
                                    alt="Folder View">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>6. Folder View</h5>
                                  </div>
                                </div>

                                <div class="carousel-item">
                                  <img src="assets/images/projects/GoDriveNet/9searchusers.png" class="d-block mx-auto"
                                    alt="Search Users">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>7. Search Users</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/GoDriveNet/2social_detail.png"
                                    class="d-block mx-auto" alt="Social Detail">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>8. Social Detail</h5>
                                  </div>
                                </div>

                                <div class="carousel-item">
                                  <img src="assets/images/projects/GoDriveNet/11accountsecuirty.PNG"
                                    class="d-block mx-auto" alt="Account Security">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>9. Account Security</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/GoDriveNet/10accountsetting.png"
                                    class="d-block mx-auto" alt="Account Setting">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>10. Account Setting</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/GoDriveNet/recyclebin.PNG" class="d-block mx-auto"
                                    alt="Recycle Bin">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>11. Recycle Bin</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/GoDriveNet/notifications.jpeg"
                                    class="d-block mx-auto" alt="Notifications">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>12. Notifications</h5>
                                  </div>
                                </div>
                              </div>
                              <a class="carousel-control-prev" href="#productCarousel2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#productCarousel2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="details col-md-12">
                          <div class="py-3">
                            <h6 class="font-weight-bolder mb-0">Description</h6>
                            <span>GoDriveNet is a
                              cloud-based storage platform designed as my final year project for a
                              Bachelor’s degree in Computer Science (BSCS). This platform provides seamless file
                              management and collaboration tools, featuring personalized user profiles, a real-time chat
                              system for secure data sharing, and a robust search functionality to easily locate users
                              and
                              files. Users can effortlessly upload, download, delete, and organize their files, with a
                              Recycle Bin for safe recovery of deleted items. GoDriveNet offers an intuitive,
                              user-friendly interface that enhances digital file management and communication, making it
                              ideal for both personal and professional use.</span>
                            <h6 class="font-weight-bolder mb-0">Language</h6>
                            <span> HTML, CSS, Bootstrap, JavaScript, AJAX, jQuery, PHP, Git
                              Versioning </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- project 3 images  -->
      <div class="modal fade" id="projectimagemodal3" tabindex="-1" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <div class="d-flex justify-content-between w-100">
                <div>
                  <h5 class="m-0 font-weight-bold">Eboss (eBay Integration Management System) </h5>
                </div>
                <span style="cursor: pointer; font-size:23px;" class="ion-ios-close close-modal"
                  aria-label="Close">&times;</span>
              </div>
              <script>
                $(document).ready(function () {
                  $('.close-modal').click(function () {
                    var modalId = $(this).closest('.modal').attr('id');
                    $('#' + modalId).modal('hide');
                  });
                });
              </script>
            </div>
            <div class="row no-gutters">
              <div class="col-12">
                <div class="card">
                  <div class="container">
                    <div class="wrapper row">
                      <div class="preview col-md-12">
                        <div class="preview-pic tab-content py-3">
                          <div id="productCarousel3" class="carousel slide" data-ride="carousel" data-interval="3000">
                            <div class="carousel-inner">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img src="assets/images/projects/Eboss/0admin_dashboard.png" class="d-block mx-auto"
                                    alt="Admin Dashboard">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>1. Admin Dashboard</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/Eboss/1product_list.png" class="d-block mx-auto"
                                    alt="Product List">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>2. Product List</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/Eboss/2add_product_using_ebay_fetch_data.png"
                                    class="d-block mx-auto" alt="Add Product Using eBay Fetch Data">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>3. Add Product Using eBay Fetch Data</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/Eboss/3product_preview.png" class="d-block mx-auto"
                                    alt="Product Preview">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>4. Product Preview</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/Eboss/4update_product.png" class="d-block mx-auto"
                                    alt="Update Product">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>5. Update Product</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/Eboss/5roles_users_list.png" class="d-block mx-auto"
                                    alt="Roles Users List">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>6. Roles Users List</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/Eboss/6fetch_ebay_categories_using_api_calls.png"
                                    class="d-block mx-auto" alt="Fetch eBay Categories Using API Calls">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>7. Fetch eBay Categories</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/Eboss/7add_Ebay_Countries.png"
                                    class="d-block mx-auto" alt="Add eBay Countries">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>8. Add eBay Countries</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/Eboss/8seller_add_product_to_ebay_by_one_click.png"
                                    class="d-block mx-auto" alt="Seller Add Product to eBay by One Click">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>9. Seller Add Product to eBay</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img
                                    src="assets/images/projects/Eboss/9seller_purchase_credit_using_payment_method.png"
                                    class="d-block mx-auto" alt="Seller Purchase Credit Using Payment Method">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>10. Seller Purchase Credit</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/Eboss/10seller_transaction.png"
                                    class="d-block mx-auto" alt="Seller Transaction">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>11. Seller Transaction</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/Eboss/11Order_list.png" class="d-block mx-auto"
                                    alt="Order List">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>12. Order List</h5>
                                  </div>
                                </div>
                              </div>
                              <a class="carousel-control-prev" href="#productCarousel3" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#productCarousel3" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="details col-md-12">
                          <div class="py-3">
                            <h6 class="font-weight-bolder mb-0">Description</h6>
                            <span>Developed a One-Click eBay Product Integration System that seamlessly integrates with
                              the eBay API, enabling sellers to manage and add products to their eBay accounts
                              effortlessly. This web application allows users to quickly post products to eBay with a
                              single click, ensuring compliance with eBay's listing requirements by fetching all
                              available product categories. Additionally, it features robust order management
                              capabilities, providing real-time tracking and updates for orders received through eBay.
                              The system also includes role-based stock management in eBoss, allowing different user
                              roles to efficiently manage inventory levels and product availability. With a
                              user-friendly interface, the system streamlines the selling process and enhances
                              operational efficiency for sellers using the eBoss platform.</span>
                            <h6 class="font-weight-bolder mb-0">Language</h6>
                            <span> HTML, CSS, Bootstrap, JavaScript, XML, Ebay Api, AJAX, jQuery, PHP, Laravel, Git
                              Versioning </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- project 3 images  -->
      <div class="modal fade" id="projectimagemodal4" tabindex="-1" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <div class="d-flex justify-content-between w-100">
                <div>
                  <h5 class="m-0 font-weight-bold">Eboss (eBay Integration Management System) </h5>
                </div>
                <span style="cursor: pointer; font-size:23px;" class="ion-ios-close close-modal"
                  aria-label="Close">&times;</span>
              </div>
              <script>
                $(document).ready(function () {
                  $('.close-modal').click(function () {
                    var modalId = $(this).closest('.modal').attr('id');
                    $('#' + modalId).modal('hide');
                  });
                });
              </script>
            </div>
            <div class="row no-gutters">
              <div class="col-12">
                <div class="card">
                  <div class="container">
                    <div class="wrapper row">
                      <div class="preview col-md-12">
                        <div class="preview-pic tab-content py-3">
                          <div id="productCarousel4" class="carousel slide" data-ride="carousel" data-interval="3000">
                            <div class="carousel-inner">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img src="assets/images/projects/Pharmacy_supply_system/1admin_dashboard.png"
                                    class="d-block mx-auto" alt="Admin Dashboard">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>1. Admin Dashboard</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/Pharmacy_supply_system/2login_panel.png"
                                    class="d-block mx-auto" alt="Login Panel">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>2. Login Panel</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/Pharmacy_supply_system/3users_roles.png"
                                    class="d-block mx-auto" alt="Users Roles">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>3. Users Roles</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/Pharmacy_supply_system/4roles_permissions.png"
                                    class="d-block mx-auto" alt="Roles Permissions">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>4. Roles Permissions</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/Pharmacy_supply_system/5supplier_product.png"
                                    class="d-block mx-auto" alt="Supplier Product">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>5. Supplier Product</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/Pharmacy_supply_system/6medicine_categories.png"
                                    class="d-block mx-auto" alt="Medicine Categories">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>6. Medicine Categories</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/Pharmacy_supply_system/7medicine_sales.png"
                                    class="d-block mx-auto" alt="Medicine Sales">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>7. Medicine Sales</h5>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="assets/images/projects/Pharmacy_supply_system/8General_settings.png"
                                    class="d-block mx-auto" alt="General Settings">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>8. General Settings</h5>
                                  </div>
                                </div>

                              </div>
                              <a class="carousel-control-prev" href="#productCarousel4" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#productCarousel4" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="details col-md-12">
                          <div class="py-3">
                            <h6 class="font-weight-bolder mb-0">Description</h6>
                            <span>Developed a comprehensive PharmaSupply Management System designed to streamline the
                              management of pharmaceutical supplies, including medicines and inventory. This system
                              enables administrators and suppliers to efficiently track stock levels, manage orders, and
                              oversee supplier interactions. Key features include a user-friendly dashboard for
                              real-time insights into stock availability, the ability to add and update product
                              information, and role-based access controls to ensure that only authorized personnel can
                              perform sensitive actions. The system also facilitates seamless communication between
                              suppliers and administrators, enhancing collaboration and operational efficiency. By
                              automating key processes, the PharmaSupply Management System significantly reduces manual
                              errors and improves the overall workflow within pharmaceutical supply management.</span>
                            <h6 class="font-weight-bolder mb-0">Language</h6>
                            <span> HTML, CSS, Bootstrap, JavaScript, AJAX, jQuery, PHP, Laravel </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php include('footer.php'); ?>
  </body>
  <script>
    const canvas = document.getElementById("canvas");
    canvas.width = canvas.clientWidth;
    canvas.height = canvas.clientHeight;
    const ctx = canvas.getContext("2d");

    const LEFT = "LEFT";
    const RIGHT = "RIGHT";

    const getDir = () => {
      const dec = Math.floor(Math.random() * 30);
      return dec < 16 ? LEFT : RIGHT;
    };

    class Cloud {
      constructor(x, y) {
        this.x = x;
        this.y = y;
        this.size = Math.floor(Math.random() * 30);
        this.clr = "silver";
        this.dir = getDir();
        this.speed = 0.3; // Set a fixed slow speed
      }

      moveLeft() {
        this.x -= this.speed;
      }

      moveRight() {
        this.x += this.speed;
      }

      update() {
        if (this.x <= 0) {
          this.dir = RIGHT;
        } else if (this.x >= canvas.width) {
          this.dir = LEFT;
        }

        this.dir === LEFT ? this.moveLeft() : this.moveRight();
      }

      drawRoot(x, y) {
        let sx = x, sy = y, ex = sx + Math.floor(Math.random() * 50) - 15, ey = sy + Math.floor(Math.random() * 30);
        let limit = Math.floor(Math.random() * 20);

        for (let i = 0; i < limit; i++) {
          ctx.beginPath();
          ctx.strokeStyle = "silver";
          ctx.lineWidth = 1;
          ctx.moveTo(sx, sy);
          ctx.lineTo(ex, ey);
          ctx.stroke();
          sx = ex;
          sy = ey;
          ex = sx + Math.floor(Math.random() * 50) - 15;
          ey = sy + Math.floor(Math.random() * 30);
        }
      }

      drawLightning() {
        ctx.fillStyle = "rgba(26, 3, 43, 0.1)";
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        let sx = this.x, sy = this.y, ex = sx + Math.floor(Math.random() * 30) - 15, ey = sy + Math.floor(Math.random() * 30);
        let limit = Math.floor(Math.random() * 20) + 15;

        for (let i = 0; i < limit; i++) {
          ctx.beginPath();
          ctx.strokeStyle = "silver";
          ctx.lineWidth = 3;
          ctx.moveTo(sx, sy);
          ctx.lineTo(ex, ey);
          ctx.stroke();
          sx = ex;
          sy = ey;
          ex = sx + Math.floor(Math.random() * 30) - 15;
          ey = sy + Math.floor(Math.random() * 30);

          if (Math.random() < 0.0001) {
            this.drawRoot(sx, sy);
          }
        }
      }

      draw() {
        ctx.beginPath();
        ctx.fillStyle = "#1a032b";
        ctx.arc(this.x, this.y, this.size, 0, 0 * Math.PI);
        ctx.fill();

        if (Math.floor(Math.random() * 100) < 3) {
          this.drawLightning();
        }
      }
    }

    const clouds = [];
    for (let i = 0; i < canvas.width; i += Math.floor(Math.random() * 1800) + 1) {
      clouds.push(new Cloud(i, 0));
    }

    const animate = () => {
      ctx.fillStyle = "#1a032b";
      ctx.fillRect(0, 0, canvas.width, canvas.height);

      for (let c of clouds) {
        c.draw();
        c.update();
      }

      requestAnimationFrame(animate);
    };

    animate();

    window.addEventListener("resize", function () {
      canvas.width = document.querySelector(".lightning-section").clientWidth; // Resize based on section width
      canvas.height = document.querySelector(".lightning-section").clientHeight; // Resize based on section height
    });
  </script>

</html>