<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portofolio Ircham Ali</title>
    <link rel="shortcut icon" href="assets/img/icon.png" type="image/png/x-icon">
    <link rel="icon" href="assets/img/icon.png" type="image/png/x-icon">

    <link rel="stylesheet" href="assets/css/styles.css">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

    <!--===== HEADER =====-->
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo">JowoKode</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                    <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!--===== HOME =====-->
        <section class="home bd-grid" id="home">
            <div class="home__data">
                <h1 class="home__title">Hello,<br>I'am <span class="home__title-color">Ircham</span>
                    <br> <span class="typing"></span> </h1>
                <a href="https://api.whatsapp.com/send?phone=6285708497317" class="button">Contact</a>
            </div>

            <div class="home__social">
                <a href="https://www.youtube.com/channel/UCXuxkxGjV2Oml3aRR_vvZ9w" class="home__social-icon"><i class='bx bxl-youtube'></i></a>
                <a href="https://instagram.com/bro_irham" class="home__social-icon"><i class='bx bxl-instagram'></i></a>
                <a href="https://github.com/irchamali" class="home__social-icon"><i class='bx bxl-github'></i></a>
            </div>

            <div class="home__img">
                <img src="assets/img/perfil1.png" alt="">
            </div>
        </section>

        <!--===== ABOUT =====-->
        <section class="about section " id="about">
            <h2 class="section-title">About</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="assets/img/about1.jpg" alt="">
                </div>

                <div>
                    <h2 class="about__subtitle">Saya, Ircham Ali</h2>
                    <p class="about__text">Putra dari Bapak Sarman dan Ibu Siti Komariyah. Terlahir sebagai seorang anak tunggal dan hidup sederhana dari hasil pertanian. Kelahiran Jombang, 20 November 1994 dan sekarang menginjak 1/4 abad. Sedari kecil hobi menggambar dan tumbuh besar dengan kecintaanya pada desain grafis dan desain web. Gemar berorganisasi semenjak SMA hingga kuliah, aktif di organisasi intra dan ekstra. Cakap dalam berbicara, setelah dirasa cukup untuk membaca dan menganalisa.</p>
                </div>
            </div>
        </section>

        <!--===== SKILLS =====-->
        <section class="skills section" id="skills">
            <h2 class="section-title">Skills</h2>

            <div class="skills__container bd-grid">
                <div>
                    <h2 class="skills__subtitle">Profesional Skills</h2>
                    <p class="skills__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit optio id vero amet, alias architecto consectetur error eum eaque sit.</p>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-html5 skills__icon'></i>
                            <span class="skills__name">HTML5</span>
                        </div>
                        <div class="skills__bar skills__html">

                        </div>
                        <div>
                            <span class="skills__percentage">95%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-css3 skills__icon'></i>
                            <span class="skills__name">CSS3</span>
                        </div>
                        <div class="skills__bar skills__css">

                        </div>
                        <div>
                            <span class="skills__percentage">85%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-javascript skills__icon'></i>
                            <span class="skills__name">JAVASCRIPT</span>
                        </div>
                        <div class="skills__bar skills__js">

                        </div>
                        <div>
                            <span class="skills__percentage">65%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxs-paint skills__icon'></i>
                            <span class="skills__name">UX/UI</span>
                        </div>
                        <div class="skills__bar skills__ux">

                        </div>
                        <div>
                            <span class="skills__percentage">85%</span>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="assets/img/work1.jpg" alt="" class="skills__img">
                </div>
            </div>
        </section>

        <!--===== WORK =====-->
        <section class="work section" id="work">
            <h2 class="section-title">Work</h2>

            <div class="work__container bd-grid">
                <div class="work__img">
                    <img src="assets/img/work1.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="assets/img/work2.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="assets/img/work3.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="assets/img/work4.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="assets/img/work5.jpg" alt="">
                </div>
                <div class="work__img">
                    <img src="assets/img/work6.jpg" alt="">
                </div>
            </div>
        </section>

        <!--===== CONTACT =====-->
        <section class="contact section" id="contact">
            <h2 class="section-title">Contact</h2>

            <div class="contact__container bd-grid">
                <form action="" class="contact__form">
                    <input type="text" placeholder="Name" class="contact__input">
                    <input type="mail" placeholder="Email" class="contact__input">
                    <textarea name="" id="" cols="0" rows="10" class="contact__input"></textarea>
                    <input type="button" value="Enviar" class="contact__button button">
                </form>
            </div>
        </section>
    </main>

    <!--===== FOOTER =====-->
    <footer class="footer">
        <p class="footer__title">JowoKode</p>
        <div class="footer__social">
            <a href="https://facebook.com/ioptimicz" class="footer__icon"><i class='bx bxl-facebook'></i></a>
            <a href="https://instagram.com/bro_irham" class="footer__icon"><i class='bx bxl-instagram'></i></a>
            <a href="https://twitter.com/bro_irham" class="footer__icon"><i class='bx bxl-twitter'></i></a>
        </div>
        <p>&#169; 2020 copyright all right reserved</p>
    </footer>


    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>