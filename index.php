<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> amjayesh07 | developer </title>
    <meta name="keywords" content="Web Designer, Freelancer, Web Designer in pune, Freelancer in pune, amjayesh07." />
    <meta name="description" content="I’m Jayesh a Front-end developer, Web designer, having 3+ years of experience in web & mobile app develoment" />
    <meta name="classification" content="developer" />
    <meta http-equiv="Content-Language" content="en-in" />
    <meta name="Author" content="https://amjayesh07.github.io/" />
    <meta name="language" content="English" />
    <meta name="copyright" content="https://amjayesh07.github.io/" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800">
    <!-- bootstrap -->
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <!-- font-awesome -->
    <link type="text/css" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  fancybox  -->
    <link type="text/css" rel="stylesheet" href="jquery.fancybox.min.css">
    <!--  slick  -->
    <link type="text/css" rel="stylesheet" href="slick.css">
    <!-- slick-theme -->
    <link type="text/css" rel="stylesheet" href="slick-theme.css">
    <!-- slick-theme -->
    <link type="text/css" rel="stylesheet" href="material-scrolltop.css">
    <!-- style.css -->
    <link type="text/css" rel="stylesheet" href="style.css">
    <!-- responsive.css -->
    <link type="text/css" rel="stylesheet" href="responsive.css">

</head>

<body>
     <?php
if(isset($_POST['submitBtn']))
{

  $name=$_POST['name'];
  $Phone=$_POST['Phone'];
  $email=$_POST['Email'];
  $content=$_POST['content'];

  $content.= "\n\n\nThanks And Regards,\n".$email;

    $email_to="jshdhage@gmail.com";
    $headers = 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    //$mail = mail($email_to, $subject, $content, $headers); 
    if(mail($email_to, "Contact Us", $content, $headers)){
    $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    }else{
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }

}

?> 
        <!--     <div id="overlayer"></div>
    <div class="text-center">
        <span class="loader">
            <span class="loader-inner"></span>
        </span>
    </div> -->
        <!-- ===== Preloader HTML END ===== -->
        <div class="bottomtotop">
            <button class="material-scrolltop" type="button"></button>
        </div>
        <!-- ===== Bottom To Top HTML END ===== -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="https://amjayesh07.github.io/">[JD]</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"> <a title="Home" class="nav-link text-capitalize cool-link" href="#banner">Home</a> </li>
                            <li class="nav-item"> <a title="About" class="nav-link text-capitalize cool-link" href="#aboutus">About</a> </li>
                            <li class="nav-item"> <a title="Services" class="nav-link text-capitalize cool-link" href="#services">Services</a> </li>
                            <li class="nav-item"> <a title="Portfolio" class="nav-link text-capitalize cool-link" href="#portfolio">Portfolio</a> </li>
                            <li class="nav-item"> <a title="Blog" class="nav-link text-capitalize cool-link" href="#blog">Blog</a> </li>
                            <li class="nav-item"> <a title="Contact" class="nav-link text-capitalize cool-link" href="#contact">Contact</a> </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- ===== HEADER HTML END ===== -->
        <div id="banner">
            <div class="container">
                <div class="row fullscreen align-items-center justify-content-between banner_wrap">
                    <div class=" col-lg-12 col-md-12 ">
                        <div class="banner_text text-left">
                            <h1 class="text-capitalize">I'm Jayesh</h1>
                            <h3 class="text-capitalize mt-2">A Professional <span class="typer" id="typer"></span></h3>
                            <p>I’m Jayesh a Front-end developer, having 3+ years of experience in web application development, front-end development, Mobile App Development with mobile first approach and cross browser compatibility.</p>
                            <div class="social-icons">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="https://www.behance.net/amjayesh07" title="Behance" target="_blank"> <i class="fa fa-behance"></i> </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://stackoverflow.com/users/5912568/amjayesh07" title="Stack-overflow" target="_blank"> <i class="fa fa-stack-overflow"></i> </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.instagram.com/amjayesh07/" title="Instagram" target="_blank"> <i class="fa fa-instagram"></i> </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://in.linkedin.com/in/amjayesh07" title="Linkedin" target="_blank"> <i class="fa fa-linkedin"></i> </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://github.com/amjayesh07" title="Github" target="_blank"> <i class="fa fa-github"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===== BANNER HTML END ===== -->
        <section id="aboutus">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12 text-left  pl-3">
                        <div class="banner_img_wrap">
                            <div class="about_img">
                                <img src="ME.jpg" class="img-fluid " alt="about ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6 about_info">
                                <h3 class="section_title text-capitalize mb-4  ">About Me</h3>
                                <div class="about-content ">
                                    <p>I’m Jayesh a Front-end developer, having 3+ years of experience in web application development, front-end development, Mobile App Development with mobile first approach and cross browser compatibility.</p>
                                    <div class="about_btn">
                                        <a href="https://in.linkedin.com/in/amjayesh07" target="_blank">know more</a>
                                        <a href="https://stackoverflow.com/cv/amjayesh07" target="_blank">Download CV</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="skills">
                            <div class="skill-list">
                                <div class="progress">
                                    <h6>Html 5, CSS3</h6>
                                    <div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 95%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>95%</span></div>
                                </div>
                                <div class="progress">
                                    <h6>React</h6>
                                    <div class="progress-bar wow fadeInLeft" data-progress="40%" style="width: 40%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>40%</span></div>
                                </div>
                                <div class="progress">
                                    <h6>Angular</h6>
                                    <div class="progress-bar wow fadeInLeft" data-progress="52%" style="width: 52%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>52%</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- skills end -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="skills">
                            <div class="skill-list">
                                <div class="progress">
                                    <h6>Ionic</h6>
                                    <div class="progress-bar wow fadeInLeft" data-progress="60%" style="width: 60%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>60%</span></div>
                                </div>
                                <div class="progress">
                                    <h6>Node</h6>
                                    <div class="progress-bar wow fadeInLeft" data-progress="85%" style="width: 65%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>65%</span></div>
                                </div>
                                <div class="progress">
                                    <h6>JS,jquery</h6>
                                    <div class="progress-bar wow fadeInLeft" data-progress="70%" style="width: 70%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>70%</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- skills end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== ABOUT-US HTML END ===== -->
        <section id="progressbar" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-3 prograss_item text-center">
                        <span class="counter">7</span>
                        <p>happy client</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3 prograss_item text-center">
                        <span class="counter">5</span>
                        <p>Finished Works</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3 prograss_item text-center">
                        <span class="counter">1</span>
                        <p>Awards Winning</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3 prograss_item text-center">
                        <span class="counter">2</span>
                        <p>LinkedIn Feedback</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== PROGRESSBAR HTML END ===== -->
        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section_header">
                            <h2>What I Offer</h2>
                            <h5>Check Out That I Offer</h5>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="text-center services_oxes">
                            <div class="service_icon">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                            </div>
                            <div class="service_title">
                                <a href="#" target="_parent"><span class="service_number">01.</span> Web Development</a>
                            </div>
                            <p>We design professional looking yet simple websites. Our designs are elegant, responsive, and user friendly.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="text-center services_oxes">
                            <div class="service_icon">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                            </div>
                            <div class="service_title">
                                <a href="#" target="_parent"><span class="service_number">02.</span> Hybrid App Development</a>
                            </div>
                            <p>We deliver highly functional hybrid mobile apps to start-ups, enterprises, retailers, merchants, and brands.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="text-center services_oxes">
                            <div class="service_icon">
                                <i class="fa fa-diamond"></i>
                            </div>
                            <div class="service_title">
                                <a href="#" target="_parent"><span class="service_number">03.</span> UI UX Design</a>
                            </div>
                            <p>We provide top-notch UI/UX development services. Get an eye-catching look and feel for your solutions, increase your user interaction and drive sales.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="text-center services_oxes">
                            <div class="service_icon">
                                <i class="fa fa-code"></i>
                            </div>
                            <div class="service_title">
                                <a href="#" target="_parent"><span class="service_number">04.</span> Native App Development</a>
                            </div>
                            <p>Our native iOS app development services encompass the full process, from product strategy to App Store submission.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="text-center services_oxes">
                            <div class="service_icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="service_title">
                                <a href="#" target="_parent"><span class="service_number">05.</span> eCommerce development</a>
                            </div>
                            <p>I will provide you exceptional e-commerce websites for start-ups, enterprises, retailers, merchants, and brands.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="text-center services_oxes">
                            <div class="service_icon">
                                <i class="fa fa-life-ring"></i>
                            </div>
                            <div class="service_title">
                                <a href="#" target="_parent"><span class="service_number">06.</span> 24/7 support</a>
                            </div>
                            <p>We provide end to end solutions for app development to clients around the globe. We support our clients with tools and techniques & with  innovative approach</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== SERVICE HTML END ===== -->
        <section class="qualification" id="education">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-left">
                        <div class="section_header">
                            <h2>My Qualification</h2>
                            <h5>Check Out my Qualification</h5>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class=" col-lg-6 col-md-6 col-sm-12">
                        <div class="econtent"> <span>2013-1015</span>
                            <h5>Master of Computer Application</h5>
                            <p>“MCA (Master of Computer Applications) is a professional master’s degree in computer science. It focuses on providing a theoretical as well as practical training to students in the related field.”</p>
                        </div>
                        <div class="econtent"> <span>2010-1013</span>
                            <h5>Bachelor of Computer Application</h5>
                            <p>Bachelor in Computer Application (BCA) is an undergraduate degree course in computer applications. Bachelor in Computer Application (BCA) is one of the popular courses among the students who want to make their career in the IT (Information Technology) field</p>
                        </div>
                    </div>
                    <div class="img_box col-lg-6 col-md-6 col-sm-12 text-right">
                        <div class="font-image">
                            <img src="educastion.png" class="img-fluid" alt="">
                        </div>
                        <div class="back-image">
                            <img src="home-1-287x380.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== QUALIFICATION HTML END ===== -->
        <section id="hire_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="hire_sec_content">
                            <h3>I Am Available For Freelancer !</h3>
                            <a href="mailto:jshdhage@gmail.com?subject=Hello" class="btn btn-default hire_btn"><span>Hire Me</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== QUALIFICATION HTML END ===== -->
        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section_header">
                            <h2>my portfolio</h2>
                            <h5>Check Out my portfolio</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 iso-nav text-center">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="btn active text-capitalize" data-filter="*">all</a></li>
                            <li class="list-inline-item"><a class="btn text-capitalize" data-filter=".web">web design</a></li>
                            <li class="list-inline-item"><a class="btn text-capitalize" data-filter=".graphic">graphic design</a></li>
                            <li class="list-inline-item"><a class="btn text-capitalize" data-filter=".brand">branding</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-12 ">
                        <div class="row portfolios">
                            <div class="col-lg-4  col-md-4 col-sm-6 col mix web">
                                <div class="project">
                                    <div class="project-content">
                                        <ul class="list-inline pro-icon">
                                            <li class="list-inline-item">
                                                <a data-fancybox="gallery" href="work-1.PNG"> <i class="fa fa-plus" aria-hidden="true"></i> </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="https://www.tnidesign.com/" target="_blank" title="TNI Design" class="fa fa-link"></a>
                                            </li>
                                        </ul>
                                        <div class="project-profile">
                                            <h5 class="p-title text-capitalize">TNI Design</h5> <span>Web Development</span>
                                        </div>
                                        <!-- End of .project-profile-->
                                    </div>
                                    <!-- End of .project-content--><img src="work-1.PNG" alt="TNI Design">
                                </div>
                            </div>
                            <div class="col-lg-4 col col-md-4 col-sm-6 col mix graphic">
                                <div class="project">
                                    <div class="project-content">
                                        <ul class="list-inline pro-icon">
                                            <li class="list-inline-item">
                                                <a data-fancybox="gallery" href="work-2.PNG"> <i class="fa fa-plus" aria-hidden="true"></i> </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="https://www.gooii.in" target="_blank" title="OII Logistics" class="fa fa-link"></a>
                                            </li>
                                        </ul>
                                        <div class="project-profile">
                                            <h5 class="p-title text-capitalize">OII Logistics</h5> <span>Web Development</span>
                                        </div>
                                        <!-- End of .project-profile-->
                                    </div>
                                    <!-- End of .project-content--><img src="work-2.PNG" alt="OII Logistics">
                                </div>
                            </div>
                            <div class="col-lg-4 col col-md-4 col-sm-6 col mix brand">
                                <div class="project">
                                    <div class="project-content">
                                        <ul class="list-inline pro-icon">
                                            <li class="list-inline-item">
                                                <a data-fancybox="gallery" href="work-7.PNG"> <i class="fa fa-plus" aria-hidden="true"></i> </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="http://appsmavericks.com/Pacificbedrock/" target="_blank" title="Pacific Bedrock" class="fa fa-link"></a>
                                            </li>
                                        </ul>
                                        <div class="project-profile">
                                            <h5 class="p-title text-capitalize">Pacific Bedrock</h5> <span>Web Development</span>
                                        </div>
                                        <!-- End of .project-profile-->
                                    </div>
                                    <!-- End of .project-content--><img src="work-7.PNG" alt="Pacific Bedrock">
                                </div>
                            </div>
                            <div class="col-lg-4 col col-md-4 col-sm-6 col mix graphic">
                                <div class="project">
                                    <div class="project-content">
                                        <ul class="list-inline pro-icon">
                                            <li class="list-inline-item">
                                                <a data-fancybox="gallery" href="work-5.PNG"> <i class="fa fa-plus" aria-hidden="true"></i> </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="https://appsmavericks.com/JOBASTRAA/" target="_blank" title="Jobastra" class="fa fa-link"></a>
                                            </li>
                                        </ul>
                                        <div class="project-profile">
                                            <h5 class="p-title text-capitalize">Jobastra</h5> <span>Web Development</span>
                                        </div>
                                        <!-- End of .project-profile-->
                                    </div>
                                    <!-- End of .project-content--><img src="work-5.PNG" alt="Jobastra">
                                </div>
                            </div>
                            <div class="col-lg-4 col col-md-4 col-sm-6 col mix brand">
                                <div class="project">
                                    <div class="project-content">
                                        <ul class="list-inline pro-icon">
                                            <li class="list-inline-item">
                                                <a data-fancybox="gallery" href="work-6.PNG"> <i class="fa fa-plus" aria-hidden="true"></i> </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="https://appsmavericks.com/CUBEHRM/index.html" target="_blank" title="CubrHRM" class="fa fa-link"></a>
                                            </li>
                                        </ul>
                                        <div class="project-profile">
                                            <h5 class="p-title text-capitalize">CubrHRM</h5> <span>Web Development</span>
                                        </div>
                                        <!-- End of .project-profile-->
                                    </div>
                                    <!-- End of .project-content--><img src="work-6.PNG" alt="CubrHRM">
                                </div>
                            </div>
                            <div class="col-lg-4 col col-md-4 col-sm-6 col mix web">
                                <div class="project">
                                    <div class="project-content">
                                        <ul class="list-inline pro-icon">
                                            <li class="list-inline-item">
                                                <a data-fancybox="gallery" href="work-3.PNG"> <i class="fa fa-plus" aria-hidden="true"></i> </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="https://spicemumng.com" target="_blank" title="SpiceMum" class="fa fa-link"></a>
                                            </li>
                                        </ul>
                                        <div class="project-profile">
                                            <h5 class="p-title text-capitalize">SpiceMum</h5> <span>Web Development</span>
                                        </div>
                                        <!-- End of .project-profile-->
                                    </div>
                                    <!-- End of .project-content--><img src="work-3.PNG" alt="SpiceMum" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== PORTFOLIO HTML END ===== -->
        <section id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section_header">
                            <h2>My Blog</h2>
                            <h5>Check Out my new Blog</h5>
                        </div>
                    </div>
                </div>
                <!-- ===== Blog Heading ===== -->

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="blog_inner">
                            <div class="blog_img">
                                <img src="blog1.jpg" class="img-fluid" alt="">
                                <div class="blog_date text-center">
                                    <p class="date">19</p>
                                    <p class="month">Jul</p>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a target="_blank" href="https://medium.com/@amjayesh07/the-flexible-box-or-flexbox-layout-mode-offers-an-alternative-to-floatsfor-defining-the-cd87c058224d">
                                    <h4 class="blog_heading">
                                    The “Flexible Box” or “Flexbox” an alternative to Float.
                                    </h4>
                                </a>
                                <p class="blog_detail">
                                    The “Flexible Box” or “Flexbox” layout mode offers an alternative to Floatsfor defining the overall appearance of a web page.
                                </p>
                                <div class="blog_button">
                                    <a target="_blank" href="https://medium.com/@amjayesh07/the-flexible-box-or-flexbox-layout-mode-offers-an-alternative-to-floatsfor-defining-the-cd87c058224d">
                                    read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ===== Signle Blog ===== -->

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="blog_inner">
                            <div class="blog_img">
                                <img src="blog2.jpg" class="img-fluid" alt="">
                                <div class="blog_date text-center">
                                    <p class="date">18</p>
                                    <p class="month">Jan</p>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a target="_blank" href="https://medium.com/@amjayesh07/usability-a-part-of-the-user-experience-b23235f014c4">
                                    <h4 class="blog_heading">
                                    Usability: A part of the User Experience
                                </h4>
                                </a>
                                <p class="blog_detail">
                                    Usability replaced the outmoded label “user friendly” in the early 1990s. “Usability” has had trouble finding the definition we use now.
                                </p>
                                <div class="blog_button">
                                <div class="blog_button">
                                    <a target="_blank" href="https://medium.com/@amjayesh07/usability-a-part-of-the-user-experience-b23235f014c4">
                                    read more</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ===== Signle Blog ===== -->
                </div>
            </div>
        </section>
        <!-- ===== BLOG HTML END ===== -->

        <section id="contact">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12 ">
                        <h3 class="section_title text-capitalize">contact me</h3>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                        <div class="contact-info-box ">
                            <p class=" mt-3">
                                We go beyond boundaries in everything we do. by constantly pushing limits and exploring new territory, we help businesses and entrepreneurs to succeed in multi-platform web and app development and adaptations.
                                <p><strong>Feel free to contact us</strong></p>
                            </p>
                            <div class="contact-info">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <p class="desc">
                                    +91 9922602898
                                    <br> +91 7021953778
                                </p>
                            </div>
                            <div class="contact-info">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <p class="desc">
                                    jshdhage@gmail.com
                                    <br> jshdhage007@gmail.com
                                </p>
                            </div>
                            <div class="contact-info">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <p class="desc">
                                    Flat.No.206, 2nd Floor, Royal Kataliya,
                                    <br> Kiwale-Ravet, Pune [INDIA] - 412101.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                        <div class="contact_form">
                            <form method="POST">
                                <div class="form-group mt-3">
                                    <input name="name" id="name" placeholder="Enter your name" class="form-control" type="text" autocomplete="off" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input name="Phone" id="number" placeholder="Enter your number" class="form-control" type="number" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <input name="Email" id="email_id" placeholder="Enter your Email" class="form-control" type="email" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="comment" name="content" placeholder="Describe your project" rows="3" class="form-control" autocomplete="off" required></textarea>
                                </div>
                                <button type="submit" name="submitBtn">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== CONTACT HTML END ===== -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12  text-center copyright_text">
                        <p>Copyright &copy; 2019. All rights reserved | Designed by <a href="https://amjayesh07.github.io/" title="Jayesh" style="color:#fff;">Jayesh</a> </p>
                    </div>
                </div>
                <!-- end of .row -->
            </div>
            <!-- end of .container -->
        </footer>
        <!-- ===== FOOTER HTML END ===== -->

        <!-- jquery-2.2.4 -->
        <script src="jquery-2.2.4.min.js"></script>
        <!--bootstrap-->
        <script src="bootstrap.min.js"></script>
        <!-- Popper Js  -->
        <script src="jquery.counterup.min.js"></script>
        <!-- waypoints scripts -->
        <script src="jquery.waypoints.min.js"></script>
        <!--  isotope  -->
        <script src="isotope.min.js"></script>
        <!--  fancybox -->
        <script src="jquery.fancybox.min.js"></script>
        <!--  slick  -->
        <script src="slick.min.js"></script>
        <!--  slick  -->
        <script src="material-scrolltop.js"></script>
        <!-- wow.js -->
        <script src="wow.min.js"></script>
        <!-- jquery.typer.js -->
        <script src="jquery.typer.js"></script>
        <!-- main.js -->
        <script src="main.js"></script>

</body>

</html>