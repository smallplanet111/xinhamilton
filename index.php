<?php
require_once('data/tools.php');
require_once('data/experience.php');
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Xin Hamilton</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My personal website showcasing my skills, experience, and projects">
    <meta name="keywords" content="<?php foreach ($tools['items'] as $row) echo $row['title'] . " "; ?>">
    <meta name="author" content="Xin Hamilton">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon" type="image/x-icon">
    <link rel="stylesheet" type="text/css" media="all"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- Animated text css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animated-text.min.css">

    <!-- Custom css -->
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">


    <!-- Animate css -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,400italic,600italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<!-- Preloader -->
<div id="loader">
    <div class="icon"></div>
</div>
<!-- END: Preloader -->

<!-- Header -->
<header class="header-img">
    <div class="header-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <h1>Hi, I'm Xin (prounced as - Sheen)</h1>
                <h2 class="cd-headline clip is-full-width">
								<span class="cd-words-wrapper">
									<b class="is-visible">Full Stack Marketer</b>
									<b>Love Creative Design &amp; data driven!</b>
									<b>Currently learning front end coding</b>
								</span>
                </h2>
                <a href="#about" class="page-scroll btn custom-btn-3">LEARN MORE</a>
            </div>
        </div>
    </div>
</header>
<!-- END: Header -->

<!-- Navigation -->
<div id="navigation">
    <nav class="navbar navbar-default navbar-static-top" id="nav">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll name" href="#page-top">Xin Hamilton</a>
                <!-- End Brand -->
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#skills">Skills</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#experience">Resume</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#reviews">Reviews</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#blog">Blog</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- END: Navigation -->

<!-- About -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="sub-headline">What I do<span class="dot">.</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
                <h3><span class="number">1.</span>Marketing Strategy</h3>
                <p>Be a brand that can your consumers are passionate, online and offline. </p>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
                <h3><span class="number">2.</span>Website Design</h3>
                <p>Be the user expert and speak it &amp; with clean, functional design.</p>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-duration="1s" data-wow-delay=".7s">
                <h3><span class="number">3.</span>Brand Identity</h3>
                <p>Ready-to-print posters, flyers to business cards &amp; easily recognized.</p>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-duration="1s" data-wow-delay=".9s">
                <h3><span class="number">4.</span>Social Marketing</h3>
                <p>Get your brand talked and heard in social &amp; be the inflentical.</p>
            </div>
        </div>
    </div>
</section>
<!-- END: About -->

<!-- Introduction -->
<section id="introduction">
    <div class="container">
        <div class="row">
            <div class="col-md-6 profile">
                <img
                    src="http://res.cloudinary.com/dzebiowhp/image/upload/c_scale,w_400/v1470028455/xin-small_vh33ly.jpg"
                    alt=""
                    class="img-responsive center-block">
            </div>
            <div class="col-md-6">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".4s">
                    <h2 class="sub-headline">Introduction<span class="dot">.</span></h2>
                    <p><u>Hi, there!</u>&nbsp;I am Xin. Currently working as a senior marketing manager in top 10 global
                        smartphone brand company.
                        Top highlight about me? I'm an international marketer, an entreprenur,a millennial Mom enjoying grow with my kids .

                    </p>
                    <h2 class=""sub-headline">Fun Facts:</h2>
                    <ul class="info">
                        <li>Generation: Millienials</li>
                        <li>Language Spoken: Chinese, English,</li>
                        <li>Country : United States</li>
                        <li>Interest: Photography, Web Design, Travel, Chase around my kids</li>
                    </ul>
                </div>

                <div class="download-cv wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                    <a href="#">Download CV</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: Introduction -->

<!-- Skills -->
<section id="skills">
    <div class="container">
        <div class="row">
            <div class="col-md-4 wow fadeIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h2 class="sub-headline">Skills<span class="dot">.</span></h2>
                <p>Skilles can be learned, but not everyone can pick up a skill fast. Never stop learning new things is
                    what drive my passion of living.</p>
            </div>
            <div class="col-md-4">
                <h3>Photoshop</h3>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" data-transitiongoal="70"></div>
                </div>

                <h3>Illustrator</h3>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" data-transitiongoal="60"></div>
                </div>

                <h3>InDesign</h3>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" data-transitiongoal="85"></div>
                </div>
            </div>
            <div class="col-md-4">
                <h3>Product Launch Strategy</h3>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" data-transitiongoal="85"></div>
                </div>

                <h3>Microsoft Office</h3>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" data-transitiongoal="95"></div>
                </div>

                <h3>Sketch</h3>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" data-transitiongoal="65"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: Skills -->

<!-- Tools -->
<section id="tools">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="sub-headline"><?= count($tools['items']) ?> Tools<span class="dot">.</span> Help Me Thrive</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 item-filter categories">
                <ul>
                    <li class="filter" data-filter="all">All</li>
                    <?php foreach ($tools['categories'] as $row): ?>
                        <li class="filter" data-filter=".<?= $row['class'] ?>"><?= $row['title'] ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div id="tools-items" class="col-xs-12">
                <div class="row">
                    <?php foreach ($tools['items'] as $row): ?>
                        <div class="block mix <?= $row['class'] ?>">
                            <img src="<?= $row['image'] ?>"
                                 class="img-responsive" title="<?= $row['title'] ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: Tools -->

<!-- Work Strategy -->
<section id="strategy">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="sub-headline">Leadership Philsophy<span class="dot">.</span></h2>
            </div>
        </div>
        <div class="row sub-icon">
            <div class="col-md-4">

                <div class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">
                    <h3><span class="ti-light-bulb"></span>Life Philsophy</h3>
                    <p>I would not give a fig for the simplicity this side of complexity, but I would give my life for the simplicity on the other side of complexity</p>
                </div>

                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <h3><span class="ti-pencil"></span>Design Philosophy</h3>
                    <p>Flat, Material, Clean, Simple..</p>
                </div>

            </div>
            <div class="col-md-4">
                <img src="http://res.cloudinary.com/natthanhamilton/image/upload/v1469833040/strategy.jpg"
                     class="img-responsive center-block" alt="">
            </div>
            <div class="col-md-4">

                <div class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">
                    <h3><span class="ti-control-shuffle"></span>Work Philosophy</h3>
                    <p>Use "Beginner's mind" look at things in big picture strategically.</p>
                </div>

                <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <h3><span class="ti-upload"></span>Family, Friends</h3>
                    <p>Families and Friends are what kept us connected, happily.</p>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END: Work strategy -->

<!-- Quotes -->
<section id="quotes">
    <div class="container">
        <div class="quotes-overlay"></div>
        <div class="row">
            <div class="col-md-8 col-md-push-2 text-center">
                <h2>Simplicity is the ultimate sophistication.</h2>
            </div>
        </div>
    </div>
</section>
<!-- END: Quotes -->

<!-- Portfolio -->
<section id="portfolio" class="portfolio-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="sub-headline">Portfolio<span class="dot">.</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 item-filter bot-margin">
                <ul class="list-inline text-center">
                    <li class="filter" data-filter="all">All</li>
                    <li class="filter" data-filter=".print">Print</li>
                    <li class="filter" data-filter=".brand">Website/App</li>
                    <li class="filter" data-filter=".logo">Brand Identity</li>
                    <li class="filter" data-filter=".logo">Photography</li>
                </ul>
            </div>
            <div id="portfolio-items" class="col-xs-12">
                <div class="row">
                    <div class="col-md-3 col-xs-12 mix brand" data-myorder="1">
                        <a href="#" data-toggle="modal" data-target="#portfolio1">
                            <div class="img-wrap">
                                <img src="assets/img/portfolio/portfolio01.jpg" alt=""
                                     class="img-responsive center-block">
                                <div class="img-overlay"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-12 mix logo" data-myorder="2">
                        <a href="#" data-toggle="modal" data-target="#portfolio1">
                            <div class="img-wrap">
                                <img src="assets/img/portfolio/portfolio02.jpg" alt=""
                                     class="img-responsive center-block">
                                <div class="img-overlay"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-12 mix print" data-myorder="3">
                        <a href="#" data-toggle="modal" data-target="#portfolio1">
                            <div class="img-wrap">
                                <img src="assets/img/portfolio/portfolio03.jpg" alt=""
                                     class="img-responsive center-block">
                                <div class="img-overlay"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-12 mix logo" data-myorder="4">
                        <a href="#" data-toggle="modal" data-target="#portfolio1">
                            <div class="img-wrap">
                                <img src="assets/img/portfolio/portfolio04.jpg" alt=""
                                     class="img-responsive center-block">
                                <div class="img-overlay"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-12 mix brand" data-myorder="4">
                        <a href="#" data-toggle="modal" data-target="#portfolio1">
                            <div class="img-wrap">
                                <img src="assets/img/portfolio/portfolio05.jpg" alt=""
                                     class="img-responsive center-block">
                                <div class="img-overlay"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-12 mix brand" data-myorder="4">
                        <a href="#" data-toggle="modal" data-target="#portfolio1">
                            <div class="img-wrap">
                                <img src="assets/img/portfolio/portfolio06.jpg" alt=""
                                     class="img-responsive center-block">
                                <div class="img-overlay"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-12 mix print" data-myorder="4">
                        <a href="#" data-toggle="modal" data-target="#portfolio1">
                            <div class="img-wrap">
                                <img src="assets/img/portfolio/portfolio07.jpg" alt=""
                                     class="img-responsive center-block">
                                <div class="img-overlay"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-12 mix print" data-myorder="4">
                        <a href="#" data-toggle="modal" data-target="#portfolio1">
                            <div class="img-wrap">
                                <img src="assets/img/portfolio/portfolio08.jpg" alt=""
                                     class="img-responsive center-block">
                                <div class="img-overlay"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio1 fullscreen modal -->
    <div id="portfolio1" class="modal fade modal-fullscreen force-fullscreen" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="modal-title">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>Project Details</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-body">

                    <div class="container">
                        <div class="row top-margin">
                            <div class="col-md-4">
                                <img src="assets/img/portfolio/portfolio01.jpg" alt=""
                                     class="img-responsive center-block">
                            </div>
                            <div class="col-md-8">
                                <h3>Project -</h3>
                                <p>Logo creation of XYZ</p>
                                <h3>Description -</h3>
                                <p>Ipsum partem voluptatibus ex nam, prima virtute electram ius ei, vide error
                                    intellegat id cum. Duo ut accumsan molestie. Feugait referrentur vel in, te nostro
                                    convenire per, nullam nostrud placerat cum ne. Ne ancillae expetenda nec, dicam
                                    oportere te mel, audiam mnesarchum.</p>
                                <h3>Comments -</h3>
                                <p>Ipsum partem voluptatibus ex nam, prima virtute electram ius ei, vide error
                                    intellegat id cum. Duo ut accumsan molestie. Feugait referrentur vel in, te nostro
                                    convenire per, nullam nostrud.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn custom-btn-2 pull-left" data-dismiss="modal">Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Portfolio1 fullscreen modal -->

</section>
<!-- END: Portfolio -->

<!-- Call to action -->
<section id="cta">
    <div class="container">
        <div class="cta-overlay"></div>
        <div class="row status-icon">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-sm-8">
                        <h2 class="wow zoomIn" data-wow-duration="1s" data-wow-delay=".5s">Are you ready to work
                            ...?</h2>
                        <h3><img
                                src="http://res.cloudinary.com/natthanhamilton/image/upload/c_scale,w_25/v1469833533/pulse.png"
                                class="pulse2"> Status&nbsp;:&nbsp;Available</h3>
                    </div>
                    <div class="col-sm-4 text-center">
                        <a href="#contact" class="page-scroll btn custom-btn-1">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: Call to action -->

<!-- Experience -->
<section id="experience">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="sub-headline">Experience<span class="dot">.</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <?php foreach ($experience as $row): ?>
                    <div class="row">
                        <div class="col-sm-3">
                            <a target="_blank" href="<?= $row['company_url'] ?>">
                                <img src="<?= $row['company_logo'] ?>" alt="<?= $row['company_name'] ?>"
                                     class="img-responsive center-block">
                            </a>
                        </div>
                        <div class="col-sm-9">
                            <div class="border-style wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                                <span class="year"><?= $row['date_start'] ?> - <?= $row['date_end'] ?></span>
                            </div>
                            <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s">
                                <h3><span class="ti-briefcase experience"></span><?= $row['title'] ?></h3>
                                <?= $row['description'] ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- END: Experience -->

<!-- Education -->
<section id="education">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="sub-headline">Education<span class="dot">.</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-sm-3">
                        <img
                            src="http://www.csumentor.edu/school_logos/CSUMentor/San_Diego_State_University/San_Diego_State_University.gif"
                            alt="" class="img-responsive center-block">
                    </div>
                    <div class="col-sm-9">
                        <div class="border-style wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                            <span class="year">2011</span>
                        </div>
                        <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s">
                            <h3><span class="fa fa-graduation-cap"></span>Bachelor's of Business Administation,
                                Marketing</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: Education -->

<!-- Contact-header -->
<section id="connect">
    <div class="container">
        <div class="connect-overlay"></div>
        <div class="row">
            <div class="col-md-8 col-md-push-2 text-center">
                <h2>Let's Connect!</h2>
            </div>
        </div>
    </div>
</section>
<!-- END: Contact-header -->

<!-- Contact -->
<section id="contact">
    <div class="container">
        <div class="row sub-icon">
            <div class="col-md-10 col-md-offset-1 col-md-push-1">
                <div class="row">
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".4s">
                        <h3><span class="fa fa-map-marker"></span>Address</h3>
                        <p>San Diego, CA</p>
                    </div>
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".6s">
                        <h3><span class="fa fa-envelope-o"></span>Email</h3>
                        <a href="mailto:xin.chen@gmail.com">xin.chen1989@gmail.com</a>
                    </div>
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".8s">
                        <h3><span class="fa fa-mobile"></span>Phone</h3>
                        <a href="tel:6196186179">(619) 630-9793</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row top-pad sub-icon">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal" method="post" action="email.php">
                    <div class="form-group">
                        <div class="col-md-12">

                            <!-- Email Confirmation Success -->
                            <p class="confirmation send-success"><span class="ti-check-box"></span>Email sent
                                successfully.</p>
                            <!-- Email Confirmation Error -->
                            <p class="confirmation send-error"><span class="ti-alert"></span>There is a problem sending
                                email ...</p>

                            <input class="form-control" type="text" name="name" placeholder="Name" required="required">
                            <input class="form-control" type="text" name="subject" placeholder="Subject"
                                   required="required">
                            <input class="form-control" type="email" name="email" placeholder="Email"
                                   required="required">
							<textarea class="form-control" name="message" rows="4" placeholder="Message"
                                      required="required"></textarea>
                            <button type="submit" class="btn custom-btn-2 wow fadeInUp" data-wow-duration="1s"
                                    data-wow-delay=".5s">Submit
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- END: Contact -->

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="list-inline social-icon">
                    <li><a target="_blank" href="https://www.linkedin.com/in/natthanhamilton"><span
                                class="fa fa-linkedin"></span></a></li>
                    <li><a target="_blank" href="https://github.com/natthanhamilton"><span class="fa fa-github"></span></a>
                    </li>
                    <li><a target="_blank" href="http://stackoverflow.com/users/6656230/natthan-hamilton"><span
                                class="fa fa-stack-overflow"></span></a></li>
                    <li><a target="_blank" href="https://plus.google.com/u/0/103452622066088817796"><span
                                class="fa fa-google"></span></a></li>
                    <li><a target="_blank" href="https://twitter.com/natthanhamilton"><span
                                class="fa fa-twitter"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->

<!-- Scroll Top -->
<div class="scroll-top">
    <a class="page-scroll" href="#page-top"><span class="fa fa-chevron-up"></span></a>
</div>
<!-- END: Scroll Top -->

<?php require_once('scripts.php') ?>

</body>
</html>			