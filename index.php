<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Title</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="header__top-inner">
                <div class="logo">
                    <a class="logo__link" href="#">
                        <img class="logo__img" src="./Assets/PNG/Group%205.png" alt="logo">
                    </a>
                </div>

                <input id="chk" type="checkbox">
                <label class="show-menu-btn hidden" for="chk">
                    <i class="color-white fas fa-bars"></i>
                </label>

                <div class="header__menu">
                    <ul class="header__menu-list">
                        <li class="header__menu-item">
                            <a class="header__menu-link" href="#">About</a>
                        </li>

                        <li class="header__menu-item">
                            <a class="header__menu-link" href="#">Ottorneys</a>
                        </li>

                        <li class="header__menu-item">
                            <a class="header__menu-link" href="#">Results</a>
                        </li>

                        <li class="header__menu-item">
                            <a class="header__menu-link" href="#">Client Reviews</a>
                        </li>

                        <li class="header__menu-item">
                            <a class="header__menu-link" href="#">Consultation Form</a>
                        </li>

                        <li class="header__menu-item">
                            <a class="header__menu-link" href="#">Contacts</a>
                        </li>
                    </ul>

                    <label class="hide-menu-btn hidden" for="chk">
                        <i class="color-white fas fa-times"></i>
                    </label>
                </div>

                <div class="contact-phone__wrapper top">
                    <div class="contact-phone__logo-circle">
                        <img class="contact-phone__phone-svg" src="./Assets/SVG/phone-tube.svg" alt="phone">
                    </div>

                    <div class="contact-phone__info">
                        <p class="contact-phone__title">call us today!</p>
                        <p class="contact-phone__number">203-361-3738</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header__content">
        <div class="container">
            <div class="header__content-inner">
                <div class="header__content-text">
                    <p class="header__text1">Winning for you</p>
                    <p class="header__text2">Top Accident Lawyers in Connecticut</p>
                    <p class="header__text3">70% of those injured at work do not receive adequate compensation.
                        The participation of a lawyer will help you increase the amount of compensation by 3 times.</p>
                </div>

                <div class="header__content-form-inner">
                    <div class="header__form-text">
                        Call <span>203-361-3738</span> or fill out the form below to discuss your case
                    </div>

                    <form class="header__form" action="main.php" method="POST">
                        <input type="text" name="name" placeholder="Name">
                        <input type="email" name="email" placeholder="Email">
                        <input type="number" name="phone" placeholder="Phone Number">
                        <textarea name="text" rows="4" placeholder="Tell us about your situation"></textarea>

                        <button type="submit">Submit for Free Consultation</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="section-info__row">
    <div class="container">
        <div class="section-info__row-inner">
            <div class="section-info__column">
                <p class="section-info__title">$1.5 Million</p>
                <p class="section-info__text">Brain Demage</p>
            </div>

            <div class="section-info__column">
                <p class="section-info__title">$3.4 Million</p>
                <p class="section-info__text">Medical Malpractice</p>
            </div>

            <div class="section-info__column">
                <p class="section-info__title">$450,000</p>
                <p class="section-info__text">Robocall Judgment</p>
            </div>

            <div class="section-info__column">
                <p class="section-info__title">$5,5 Million</p>
                <p class="section-info__text">TCPA Class Settlement</p>
            </div>
        </div>
    </div>
</section>

<div class="dividing-line"></div>

<section class="contact__content">
    <div class="container">
        <div class="contact__content-inner">
            <div class="contact__content-info">
                <p class="contact__subtitle">contact</p>
                <p class="contact__title">Our Office</p>

                <p class="contact__info office"><span>Office: </span>2 Post Road Fairfield, CT 06824</p>
                <p class="contact__info"><span>Email: </span>info@mclawct.com</p>
                <p class="contact__info fax"><span>Fax: </span>(203)-612-9800</p>

                <div class="contact-phone__wrapper">
                    <div class="contact-phone__logo-circle">
                        <img class="contact-phone__phone-svg" src="./Assets/SVG/phone-tube.svg" alt="phone">
                    </div>

                    <div class="contact-phone__info">
                        <p class="contact-phone__title color-dark">Call 24/7:</p>
                        <p class="contact-phone__number color-dark">(203)-373-9080</p>
                    </div>
                </div>
            </div>

            <div class="contact__map">
                <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="http://maps.google.pt/maps?f=q&amp;source=s_q&amp;hl=pt-PT&amp;geocode=&amp;q=lisbon,+portugal&amp;aq=&amp;sll=39.399872,-8.224454&amp;sspn=36.11675,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Lisboa&amp;t=h&amp;z=11&amp;iwloc=A&amp;ll=38.706932,-9.135632&amp;output=embed"></iframe>
            </div>
        </div>
    </div>
</section>

<footer class="footer__content">
    <div class="container">
        <div class="footer__content-inner">
            <div class="footer__content-row">
                <div class="footer__content-column">
                    <div class="logo">
                        <a class="logo__link" href="#">
                            <img class="logo__img" src="./Assets/PNG/Group%205.png" alt="logo">
                        </a>
                    </div>
                </div>

                <div class="footer__content-column">
                    <p class="footer__content-title">Contact Us &mdash;</p>
                    <p class="footer__content-info">Phone: (203)-373-9080</p>
                    <p class="footer__content-info">Fax: (203)-612-9800</p>
                    <p class="footer__content-info">info@mclawct.com</p>
                </div>

                <div class="footer__content-column">
                    <p class="footer__content-title">Office &mdash;</p>
                    <p class="footer__content-info">2 Post Road</p>
                    <p class="footer__content-info">Fairfield, CT 06824</p>
                </div>

                <div class="footer__content-column">
                    <p class="footer__content-title">Social</p>
                    <i class="footer__content-social fab fa-linkedin-in"></i>
                    <i class="footer__content-social fab fa-twitter"></i>
                    <i class="footer__content-social fab fa-facebook-square"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__bottom">
        <div class="container">
            <div class="footer__bottom-inner">
                <span>© 2020 M.C. Law Group | All Rights Reserved</span>
                <span>Privacy Policy</span>
            </div>
        </div>
    </div>
</footer>

<script src="https://kit.fontawesome.com/999a128e58.js" crossorigin="anonymous"></script>
</body>
</html>