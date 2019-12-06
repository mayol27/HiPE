<?php get_header();?>

<?php $hero = get_field('main_page');?>
<section class="hero-main">
        <div class="hero-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <h1><?php echo $hero['big_title'];?></h1>
                        <p>We built a mortgage company that places you and your needs at the
                                center of everything we do.</p>
                        <a class="btn btn-hero" href="contact.html">Contact Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cmpny-main">
        <div class="container">
            <div class="row">
                <h2>Introductory words about the company</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                <a class="btn-read-m" href="#">Read More</a>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="c-img-main">
                        <img class="c-img1" src="<?php bloginfo('template_directory');?>../assets/company1.jpg">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="c-img-main">
                        <img class="c-img2" src="<?php bloginfo('template_directory');?>../assets/company2.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="serv-main">
        <div class="serv-bg"></div>
        <div class="container">
            <h2 class="s-intro">Services We Offer</h2>      
            <p class="s-detail">We provide customized concierge services urabitur et risus interdum sapien feugiat tristique. Nam sit amet dolor eu massa gravida lacinia.</p>      
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="serv-card mb-50 tcard-1">
                        <img class="img-serv" src="<?php bloginfo('template_directory');?>../assets/c-webdev.jpg">
                        <div class="serv-descript">
                            <h4 class="serv-name">Web Development</h4>
                            <p class="serv-ds">Lorem ipsum dolor sit amet, consectetur
                                adipiscing. Quisque ut justo id ante cursus
                                tincidunt. Etiam dolor igula, bibendum id placerat
                                in, vestibulum ac orci. In eget felis at augue
                                congue eleifend.</p>                         
                        </div>  
                        <div class="btn-cont">
                            <a href="s-web-dev.html" class="lrn-more">Learn More</a> 
                        </div>                          
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="serv-card mb-50">
                        <img class="img-serv" src="<?php bloginfo('template_directory');?>../assets/c-wordpress.jpg">
                        <div class="serv-descript">
                            <h4 class="serv-name">Wordpress Development</h4>
                            <p class="serv-ds">Lorem ipsum dolor sit amet, consectetur
                                adipiscing. Quisque ut justo id ante cursus
                                tincidunt. Etiam dolor igula, bibendum id placerat
                                in, vestibulum ac orci. In eget felis at augue
                                congue eleifend.</p>
                        </div>                          
                        <div class="btn-cont">
                            <a href="s-wordpress-dev.html" class="lrn-more">Learn More</a> 
                        </div>    
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="serv-card mb-50">
                        <img class="img-serv" src="<?php bloginfo('template_directory');?>../assets/c-web-manage.jpg">
                        <div class="serv-descript">
                            <h4 class="serv-name">Web Content Mgmt.</h4>
                            <p class="serv-ds">Lorem ipsum dolor sit amet, consectetur
                                adipiscing. Quisque ut justo id ante cursus
                                tincidunt. Etiam dolor igula, bibendum id placerat
                                in, vestibulum ac orci. In eget felis at augue
                                congue eleifend.</p>
                        </div>                          
                        <div class="btn-cont">
                            <a href="s-web-content-management.html" class="lrn-more">Learn More</a> 
                        </div>    
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="serv-card">
                        <img class="img-serv" src="<?php bloginfo('template_directory');?>../assets/c-graphic-d.jpg">
                        <div class="serv-descript">
                            <h4 class="serv-name">Graphic Design</h4>
                            <p class="serv-ds">Lorem ipsum dolor sit amet, consectetur
                                adipiscing. Quisque ut justo id ante cursus
                                tincidunt. Etiam dolor igula, bibendum id placerat
                                in, vestibulum ac orci. In eget felis at augue
                                congue eleifend.</p>
                        </div>                          
                        <div class="btn-cont">
                            <a href="s-graphic-design.html" class="lrn-more">Learn More</a> 
                        </div>    
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="serv-card">
                        <img class="img-serv" src="<?php bloginfo('template_directory');?>../assets/c-maintenance.jpg">
                        <div class="serv-descript">
                            <h4 class="serv-name">Website Maintenance</h4>
                            <p class="serv-ds">Lorem ipsum dolor sit amet, consectetur
                                adipiscing. Quisque ut justo id ante cursus
                                tincidunt. Etiam dolor igula, bibendum id placerat
                                in, vestibulum ac orci. In eget felis at augue
                                congue eleifend.</p>
                        </div>                          
                        <div class="btn-cont">
                            <a href="s-web-mainte.html" class="lrn-more">Learn More</a> 
                        </div>    
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="serv-card">
                        <img class="img-serv" src="<?php bloginfo('template_directory');?>../assets/c-mobile.jpg">
                        <div class="serv-descript">
                            <h4 class="serv-name">Mobile Development</h4>
                            <p class="serv-ds">Lorem ipsum dolor sit amet, consectetur
                                adipiscing. Quisque ut justo id ante cursus
                                tincidunt. Etiam dolor igula, bibendum id placerat
                                in, vestibulum ac orci. In eget felis at augue
                                congue eleifend.</p>
                        </div>                          
                        <div class="btn-cont">
                            <a href="s-mobile.html" class="lrn-more">Learn More</a> 
                        </div>    
                    </div>
                </div>
            </div>
        </div>  
    </section>

    <section class="team-sec">
        <div class="container">
            <h2 class="tm-title">Meet the team</h2>
            <p class="tm-content">We provide customized concierge services urabitur et risus interdum sapien feugiat tristique. Nam sit amet dolor eu massa gravida lacinia.</p>
        </div>

        <div class="container">
            <div class="owl-carousel">
                <div class="item">
                    <div class="team-card">
                        <img class="img-team" src="<?php bloginfo('template_directory');?>team-img1.jpg">
                        <div class="team-descript">
                            <h4 class="tm-name">Fringilla suscipit terdum</h4>
                            <p class="tm-role">Web Developer</p>
                            <p class="tm-ds">Lorem ipsum dolor sit amet, consectetur
                                adipiscing. Quisque ut justo id ante cursus
                                tincidunt. Etiam dolor igula, bibendum id placerat
                                in, vestibulum ac orci. In eget felis at augue
                                congue eleifend.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-card">
                        <img class="img-team" src="<?php bloginfo('template_directory');?>team-img2.jpg">
                        <div class="team-descript">
                            <h4 class="tm-name">Terdum Fringilla suscipit</h4>
                            <p class="tm-role">Web Developer / Web Designer</p>
                            <p class="tm-ds">Lorem ipsum dolor sit amet, consectetur
                                adipiscing. Quisque ut justo id ante cursus
                                tincidunt. Etiam dolor igula, bibendum id placerat
                                in, vestibulum ac orci. In eget felis at augue
                                congue eleifend.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-card">
                        <img class="img-team" src="<?php bloginfo('template_directory');?>team-img3.jpg">
                        <div class="team-descript">
                            <h4 class="tm-name">Suscipit Fringilla terdum</h4>
                            <p class="tm-role">Web Developer</p>
                            <p class="tm-ds">Lorem ipsum dolor sit amet, consectetur
                                adipiscing. Quisque ut justo id ante cursus
                                tincidunt. Etiam dolor igula, bibendum id placerat
                                in, vestibulum ac orci. In eget felis at augue
                                congue eleifend.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-card">
                        <img class="img-team" src="<?php bloginfo('template_directory');?>team-img1.jpg">
                        <div class="team-descript">
                            <h4 class="tm-name">Fringilla suscipit terdum</h4>
                            <p class="tm-role">Web Developer</p>
                            <p class="tm-ds">Lorem ipsum dolor sit amet, consectetur
                                adipiscing. Quisque ut justo id ante cursus
                                tincidunt. Etiam dolor igula, bibendum id placerat
                                in, vestibulum ac orci. In eget felis at augue
                                congue eleifend.</p>
                        </div>
                    </div>
                </div>
            </div>

            <a href="company.html" class="tm-btn">See the Team</a>
        </div>
    </section>

    <section id="slogan-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-xs-12">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        ipsum dolor amet.</h3>
                </div>
                <div class="col-lg-3 col-md-12 col-xs-12 text-right">
                    <div class="slgn-btn-main"> 
                        <a class="contct-btn" href="contact.html">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="map">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-xs-12">
                    <div class="contct-descrp"> 
                        <h3>Visit or Contact Us</h3>
                        <p class="cntact-d">
                            Feel free to get in touch with us. We're am always open to discussing new
                            projects, creative ideas or opportunities to be part of your visions.
                        </p>

                        <p class="cntact-txt">
                            <i class="fas fa-map-marker-alt"></i>
                            6th Floor Keppel Center Samar Loop Cebu Business Park
                        </p>
                        
                        <p class="cntact-txt">
                            <i class="fas fa-envelope"></i>
                            admin@bpoc.co.jp
                        </p>
                        
                        <p class="cntact-txt">
                            <i class="fas fa-phone-alt"></i>
                            (+63) 966-558-0632
                        </p>                                              

                        <div class="inline-block">
                            <a href="#"><i class="fab fa-facebook-f text-light" title="facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter text-light" title="twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram text-light" title="instagram"></i></a>
                            <a href="#"><i class="fab fa-line text-light" title="line"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in text-light" title="linked"></i></a>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-7 col-md-12 col-xs-12">
                    <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.2935871984346!2d123.90619731475994!3d10.31837289263334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a999158d97d987%3A0xb7445a7e39b444c7!2sKeppel%20Center!5e0!3m2!1sja!2sph!4v1573534588371!5m2!1sja!2sph"
                        width="100%" height="500" frameborder="0" style="border:0;" marginwidth="0" marginheight="0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
          
    <section class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 ipadpr-4 col-xs-12">
                    <div class="ftcol">
                        <a href="index.html">HiPE</a>
                        <p>1901  Emeral Dreams Drive, Bronx, New York 10466</p>
                        <p>815-246-6497</p>
                        <p>company@mail.com</p>             
                    </div>  
                </div>

                <div class="col-lg-2 col-md-4 ipadpr-4 col-xs-12">
                    <div class="ftnav">
                        <h5>Navigation</h5>
                        <div class="row">
                            <div id="ftnav-col1" class="col-lg-12 col-md-12 col-xs-6">
                                <a href="company.html"><i class="fas fa-chevron-right"></i>Company</a> 
                                <a href="s-web-dev.html"><i class="fas fa-chevron-right"></i>Services</a>
                            </div>
                            <div id="ftnav-col2" class="col-lg-12 col-md-12 col-xs-6">
                                <a href="company.html"><i class="fas fa-chevron-right"></i>Teams</a>
                                <a href="contact.html"><i class="fas fa-chevron-right"></i>Contact</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 ipadpr-4 col-xs-12">
                    <div class="ftsoc">
                        <h5>Social Media</h5>
                        <div class="row">
                            <div id="ftsoc-col1" class="col-lg-12 col-md-12 col-xs-6">
                                <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a> 
                                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                            </div>
                            <div id="ftsoc-col2" class="col-lg-12 col-md-12 col-xs-6">
                                <a href="#"><i class="fab fa-line"></i>Line</a>
                                <a href="#"><i class="fab fa-linkedin-in"></i>Linkedin</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 ipadpr-12 col-xs-12">
                    <div class="ftform">
                        <h5>Give us a message</h5>
                        <form>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" class="form-control full-name" placeholder="Full Name">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                                <input id="text-email"  type="text" class="form-control" placeholder="Subject">
                                <textarea id="message" class="contact-message form-control" name="message" placeholder="Message"></textarea>
                                <a href="#" class="btn-ft-submit">Send Message</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer();?>