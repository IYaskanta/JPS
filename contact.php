<!DOCTYPE html>
<html class="no-js" lang="ZXX">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Jain Public School</title>
    <link rel="shortcut icon" href="assets/images/favicon.jpg" />

   <meta name="description" content="Discover Jain Public School, a leading CBSE school in JP Nagar, Bangalore, offering holistic education, modern infrastructure, experienced faculty, and a nurturing environment for academic and personal growth." />
    <meta name="keywords" content="CBSE schools in Bangalore, best schools in JP Nagar" />
    <meta name="author" content="jain" />

    <?php include 'header-links.php' ?>

</head>

<?php include 'header.php' ?>

<main>
    <div class="section-bg hero-bg">
        <!-- Start Bredcrumbs Area -->
        <section class="ed-breadcrumbs background-image"
            style="background-image: url('assets/images/breadcrumbs-bg.png');">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="ed-breadcrumbs__content">
                            <h3 class="ed-breadcrumbs__title">Contact Us</h3>
                            <ul class="ed-breadcrumbs__menu">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li>/</li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Bredcrumbs Area -->
    </div>

    <!-- Start Contact Card Area -->
    <div class="ed-contact__card section-gap">
        <div class="container ed-container">
            <div class="row">
                <!-- Single Card  -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ed-contact__card-item">
                        <div class="ed-contact__card-icon">
                            <img src="assets/images/icons/icon-white-phone.svg" alt="icon-white-phone" />
                        </div>
                        <div class="ed-contact__card-info">
                            <a href="tel:080 26632818">080-26632818</a>
                            <a href="tel:+91 7019287622">+91 7019287622</a>
                        </div>
                    </div>
                </div>

                <!-- Single Card  -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ed-contact__card-item">
                        <div class="ed-contact__card-icon">
                            <img src="assets/images/icons/icon-white-message.svg" alt="icon-white-phone" />
                        </div>
                        <div class="ed-contact__card-info">
                            <a href="mailto:contactjps.bangalore@gmail.com">contactjps.bangalore@gmail.com</a>
                        </div>
                    </div>
                </div>

                <!-- Single Card  -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ed-contact__card-item">
                        <div class="ed-contact__card-icon">
                            <img src="assets/images/icons/icon-white-map.svg" alt="icon-white-phone" />
                        </div>
                        <div class="ed-contact__card-info">
                            <a href="#" target="_blank">
                                #103, E Ashwathnarayan Layout, Puttenahalli, JP Nagar 7th Phase, Bangalore – 560078

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Card Area -->

    <!-- Start Contact Area -->
    <section class="ed-contact ed-contact--style2 section-gap pt-0 position-relative">
        <div class="container ed-container">
            <div class="row">
                <div class="col-12">
                    <div class="ed-contact__inner">
                        <!-- Contact Image  -->
                        <div class="ed-contact__img">
                            <img src="assets/images/conact-us.avif" alt="contact-img" />
                        </div>

                        <!-- Contact Form  -->
                        <div class="ed-contact__form">
                            <div class="ed-contact__form-head">
                                <span class="ed-contact__form-sm-title">CONTACT US</span>
                                <h3 class="ed-contact__form-big-title ed-split-text right">
                                    Have questions? Contact <br />
                                    with us today
                                </h3>
                            </div>
                            <form action="mail.php" method="POST" class="recaptcha-form ed-contact__form-main">
                                <div class="form-group">
                                    <input type="text"  name="name" placeholder="Full name" required />
                                </div>
                                <div class="form-group">
                                    <input type="email"  name="email" placeholder="Email Id"
                                        required />
                                </div>
                              <div class="form-group">
                                    <input type="number" maxlength="10"
                                        pattern="\d{10}" title="Enter exactly 10 digits" name="phone" placeholder="Phone Number" required />

                                    <script>
                                        document.querySelector('input[name="phone"]').addEventListener('input', function() {
                                            this.value = this.value.replace(/\D/g, '').slice(0, 10);
                                        });
                                    </script>
                                </div>
                                <div class="form-group">
                                    <textarea  name="message" placeholder="Message" required></textarea>
                                </div>
                                <input type="hidden" name="recaptcha_response" class="recaptcha-token">
                                <div class="ed-contact__form-btn">
                                    <button type="submit" class="ed-btn">Send Message<i
                                            class="fi fi-rr-arrow-small-right"></i></button>
                                </div>
                            </form>

                            <script src="https://www.google.com/recaptcha/api.js?render=6LeFZT0rAAAAAGZN58j_eL7Da-WVEn0-JYXnnTQr"></script>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    document.querySelectorAll('.recaptcha-form').forEach(form => {
                                        form.addEventListener('submit', function(e) {
                                            e.preventDefault();

                                            if (form.checkValidity()) {
                                                grecaptcha.ready(function() {
                                                    grecaptcha.execute('6LeFZT0rAAAAAGZN58j_eL7Da-WVEn0-JYXnnTQr', {
                                                            action: 'submit'
                                                        })
                                                        .then(function(token) {
                                                            form.querySelector('.recaptcha-token').value = token;
                                                            form.submit();
                                                        });
                                                });
                                            } else {
                                                form.reportValidity();
                                            }
                                        });
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

    <div class="container mb-5">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.1758084212506!2d77.57586607507518!3d12.89641418741202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae154f58aa783f%3A0x80dde4f703825838!2sJain%20Public%20School!5e0!3m2!1sen!2sin!4v1746117889608!5m2!1sen!2sin"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>



    <?php include 'footer.php' ?>
