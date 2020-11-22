<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page title -->
    <title><?= $site_title; ?></title>
    <!-- Page header -->
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="Jowo Kode" />
    <meta name="author" content="Ircham Ali" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('theme/images/' . $icon); ?>">
    <!-- SEO Tag -->
    <meta name="description" content="<?php echo $site_desc; ?>" />
    <link rel="canonical" href="<?php echo site_url(); ?>" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $site_title; ?>" />
    <meta property="og:description" content="<?php echo $site_desc; ?>" />
    <meta property="og:url" content="<?php echo site_url(); ?>" />
    <meta property="og:site_name" content="<?php echo $site_name; ?>" />
    <meta property="og:image" content="<?php echo base_url() . 'theme/images/' . $site_image ?>" />
    <meta property="og:image:secure_url" content="<?php echo base_url() . 'theme/images/' . $site_image ?>" />
    <meta property="og:image:width" content="560" />
    <meta property="og:image:height" content="315" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $site_desc; ?>" />
    <meta name="twitter:title" content="<?php echo $site_title; ?>" />
    <meta name="twitter:site" content="<?php echo $site_twitter; ?>" />
    <meta name="twitter:image" content="<?php echo base_url() . 'theme/images/' . $site_image ?>" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('theme/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('omah/css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('omah/css/owl.carousel.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('theme/css/font-awesome.min.css'); ?>" />

    <script src="<?= base_url('omah/js/a076d05399.js'); ?>"></script>
    <script src="<?= base_url('omah/js/jquery-3.5.1.min.js'); ?>"></script>
    <!-- <script src="<?= base_url('omah/js/typed.min.js'); ?>"></script> -->
    <script src="<?= base_url('omah/js/jquery.waypoints.min.js'); ?>"></script>
    <script src="<?= base_url('omah/js/owl.carousel.min.js'); ?>"></script>

    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" /> -->

</head>

<body>
    <div class="scroll-up-btn">
        <i class="fa fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#"><img src="<?php echo base_url() . 'theme/images/' . $logo; ?>" width="130" height="35" alt=""></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <!-- <li><a href="#skills" class="menu-btn">Skills</a></li> -->
                <li><a href="#teams" class="menu-btn">Project</a></li>
                <!-- <li><a href="#contact" class="menu-btn">Contact</a></li> -->
                <li><a href="javascript:void(0)" class="btn-search"><span class="fa fa-search"></span></a></li>
            </ul>
            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </nav>


    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hi<span>&#128075;</span>, <span class="typing"></span></div>
                <div class="text-3">Salam kenal, dari media pemula yang lagi enjoy belajar web.
                    Di sini kamu bisa baca tulisan semi-jowo atau lihat secuil portofolio pembuatan web <span>&#129300;</span> </div>
                <div id="theme" class="btn-toggle">
                    <div onclick="setDarkMode(true)" id="darkBtn" class=""><span><abbr title="Dark Mode"><i class="fas fa-moon"></i></abbr></span></div>
                    <div onclick="setDarkMode(false)" id="lightBtn" class="is-hidden"> <span><abbr title="Light Mode"><i class="fas fa-sun"></i></abbr></span> </div>
                </div>
                <!-- <a href="https://api.whatsapp.com/send?phone=6285708497317">Hire me</a> -->
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Apa itu JowoKode?</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="<?= base_url() . 'theme/images/' . $about_img; ?>">
                </div>
                <div class="column right">
                    <div class="text-4 text-justify"><?php echo $about_desc; ?></div>
                    <!-- <div class="text-1">Kami melayani pembuatan <span class="typing"></span> <i class="fa fa-smile"></i></div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Web Programming</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fab fa-html5"></i>
                        <div class="text">HTML 5</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fab fa-css3"></i>
                        <div class="text">CSS 3</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fab fa-js-square"></i>
                        <div class="text">JavaScript</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fab fa-php"></i>
                        <div class="text">PHP</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa fa-database"></i>
                        <div class="text">MySQL</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa fa-code"></i>
                        <div class="text">Framework</div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="<?= base_url('/edu'); ?>">VIEW MORE</a>
            </div>
        </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Project</h2>
            <div class="carousel owl-carousel">
                <?php foreach ($testimonial->result() as $test) : ?>
                    <div class="card">
                        <div class="box">
                            <a href="#">
                                <img src="<?php echo base_url() . 'assets/images/' . $test->testimonial_image; ?>" class="img" alt="" />
                            </a>
                            <div class="text"><?php echo $test->testimonial_name; ?></div>
                            <div class="testimonial-rating mt-10 mb-10">&starf; &starf; &starf; &starf; &starf;</div>
                            <p><?php echo $test->testimonial_content; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <!-- <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Follow Me</div>
                    <div class="icons">
                        <div class="row">
                            <i class="fa fa-instagram"></i>
                            <div class="info">
                                <div class="head">Instagram</div>
                                <div class="sub-title">instagram.com/bro_irham</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fa fa-twitter-square"></i>
                            <div class="info">
                                <div class="head">Twitter</div>
                                <div class="sub-title">twitter.com/bro_irham</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fa fa-youtube-square"></i>
                            <div class="info">
                                <div class="head">Youtube</div>
                                <div class="sub-title">Ircham Ali</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fa fa-facebook-square"></i>
                            <div class="info">
                                <div class="head">Facebook</div>
                                <div class="sub-title">facebook.com/ioptimicz</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <?php echo $this->session->flashdata('msg'); ?>
                    <form method="post" action="<?php echo site_url('contact/send'); ?>" role="form" class="form">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" class="full_width" placeholder="Name *" maxlength="100" required="">
                            </div>
                            <div class="field email">
                                <input type="email" name="email" class="full_width" placeholder="Email kamu*" maxlength="100" required="">
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="subject" class="full_width" placeholder="Subject *" maxlength="100" required="">
                        </div>
                        <div class="field textarea">
                            <textarea name="message" class="full_width" rows="6" placeholder="Tulis pesan.. *" maxlength="400" required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->


    <!-- footer section start -->
    <footer>
        <!-- <div class="max-width"> -->
        <!-- <span>Created By <a href="https://www.jowokode.com">JowoKode</a> | <span class="fa fa-copyright"></span> 2020</span> -->
        <div class="main-content max-width">
            <div class="left box">
                <h2>About us</h2>
                <div class="content">
                    <p>JowoKode is a media where you can learn web designing, web development, ui/ux designing, html css tutorial, hover animation and effects, javascript and jquery tutorial and related so on.</p>
                    <div class="social">
                        <a href="https://facebook.com/ioptimicz"><span class="fab fa-facebook-f"></span></a>
                        <a href="https://twitter.com/bro_irham"><span class="fab fa-twitter"></span></a>
                        <a href="https://instagram.com/bro_irham"><span class="fab fa-instagram"></span></a>
                        <a href="https://github.com/irchamali"><span class="fab fa-github"></span></a>
                    </div>
                </div>
            </div>
            <div class="center box">
                <h2>Address</h2>
                <div class="content">
                    <div class="place">
                        <a class="fas fa-map-marker-alt"></a>
                        <span class="text">Jombang, East Java</span>
                    </div>
                    <div class="phone">
                        <a class="fas fa-phone-alt"></a>
                        <span class="text">+62 85708497317</span>
                    </div>
                    <div class="email">
                        <a class="fas fa-envelope"></a>
                        <span class="text">admin@jowokode.com</span>
                    </div>
                </div>
            </div>

            <div class="right box">
                <?php echo $this->session->flashdata('msg'); ?>
                <h2>Contact us</h2>
                <div class="content text-left">
                    <div class="text">Tertarik dengan pembuatan web ? Kirim pesan ke kami</div>
                    <div class="">
                        <a href="<?= base_url('/contact'); ?>" class="button">CLICK HERE</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
        <div class="bottom text-center">
            <span class="credit"><a href="https://jowokode.com">JowoKode</a> </span>
            &copy; 2020 All rights reserved.
        </div>

    </footer>

    <!-- Modal Search-->
    <div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index: 10000;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="<?php echo site_url('search'); ?>" method="GET">
                        <div class="input-group">
                            <input type="text" name="search_query" class="form-control input-search" style="height: 40px;" placeholder="Search..." required>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit" style="height: 40px;background-color: #ccc;"><span class="fa fa-search"></span></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('theme/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('theme/js/script.js') ?>"></script>
    <script src="<?= base_url('omah/js/script.js'); ?>"></script>
    <script src="<?= base_url('omah/js/darkmode.js'); ?>"></script>
    <script>
        function setDarkMode(isDark) {
            var darkBtn = document.getElementById('darkBtn')
            var lightBtn = document.getElementById('lightBtn')

            if (isDark) {
                lightBtn.style.display = "block"
                darkBtn.style.display = "none"
            } else {
                lightBtn.style.display = "none"
                darkBtn.style.display = "block"
            }

            document.body.classList.toggle("darkmode");
        }
    </script>
</body>

</html>