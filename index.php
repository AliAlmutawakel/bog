<!DOCTYPE html>
<html>

<head>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <!--Import font awesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <!--Import Materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.mobile.min.js"></script>
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

    <!--Progress.js-->
    <script src="js/progressbar.min.js"></script>
    <!--Gallery.js-->
    <script src="js/gallery.js"></script>
    <!--slider.js-->
    <script src="js/jquery.mobile.min.js"></script>
    <!--slider.js-->
    <script src="js/jquery.bxslider.min.js"></script>

    <!--animate css-->
    <link rel="stylesheet" href="css/animate.css" />
    <!--Gallery css-->
    <link rel="stylesheet" href="css/gallery.css" />
    <!--slider css-->
    <link rel="stylesheet" href="css/jquery.bxslider.min.css" />

    <link rel="stylesheet" href="css/style.css" />
    <script src="js/script.js"></script>

</head>

<body>

    <!--Splash-->
    <div id="splash">
        <div id="splash-title" class="absolute-center animated slideInLeft">
            <h1 class="header dark-bg">Beauty<br>Gives Back</h1>
        </div>
        <video class="visible-desktop" id="hero-vid" poster="http://www.markhillard.com/sandbox/media/polina.jpg" autoplay loop muted>
            <source type="video/webm" src="http://www.markhillard.com/sandbox/media/polina.webm"></source>
            <source type="video/mp4" src="http://www.markhillard.com/sandbox/media/polina.mp4"></source>
        </video>

        <div id="hero-pic" class="hidden-desktop" style="background-image:url(http://www.markhillard.com/sandbox/media/polina.jpg)"></div>

        <div class="arrow bounce">
            <a class="fa fa-arrow-down fa-2x" href="#"></a>
        </div>
    </div>

    <!--END SPLASH VIDEO-->
    <div id="content">

        <!--Logo Header-->
        <div class="container logo-header hide-on-med-and-down">
            <div class="row">
                <div class="col m2">
                    <img class="res-pic" src="res/bog-logo.svg">
                </div>
            </div>
        </div>

        <!--navigation-->
        <div class="container nav">
            <nav class="nav-extended">
                <div class="nav-wrapper">

                    <a class="waves-effect btn-flat right nav-donate red">Donate
                        <i class="fa fa-heart smaller" aria-hidden="true"></i>
                    </a>

                    <a data-activates="mobile-menu" class="button-collapse">
                        <i class="material-icons">menu</i>
                    </a>

                    <ul id="nav-mobile" class="left hide-on-med-and-down">
                        <li><a href="sass.html">Sass</a></li>
                        <li><a href="badges.html">Components</a></li>
                        <li><a href="collapsible.html">JavaScript</a></li>
                    </ul>

                    <ul class="side-nav" id="mobile-menu">
                        <li class="container"><img class="res-pic" src="res/bog-logo.svg"></li>
                        <li><a href="sass.html">Sass</a></li>
                        <li><a href="badges.html">Components</a></li>
                        <li><a href="collapsible.html">JavaScript</a></li>
                    </ul>

                </div>
            </nav>
        </div>

        <!--WHAT IS THE BEAUTY OF GIVING-->
        <div class="row bog grey lighten-2 zoom-hover-wrapper">
            <div bind-height="bog" bind-copy class="col m6 s12 bog-pic zoom-hover"></div>
            <div bind-height="bog" bind-master class="col m6 s12">

                <div class="container" style="padding-bottom:30px">
                    <h3 class="header">
                        what is the<br> beauty of giving
                    </h3>
                    <p>It is a campaign arranged by Modern Beauty Supplies. Aimed to raise funds for charity. We partner up with a different manufacturer and charity every two months. We sell the product from the manufacturer and give the products to the charity.</p>
                    <ul>
                        <li><span>1.</span>We take a product from manufacturers</li>
                        <li><span>2.</span>We sell the product online or through salons</li>
                        <li><span>3.</span>We give the profits to a selected charity</li>
                    </ul>
                    <img class="bog-love" src="res/we-spread-love.svg" />
                    <a class="waves-effect waves-light btn btn-large red">Learn More</a>
                </div>
            </div>
        </div>

        <!--Featured Product-->
        <div class="feature" animation="fadeIn">
            <div class="container">
                <h3 class="header">
                    July-August<br>Featured Product
                </h3>
                <div class="row">

                    <!--Product-->
                    <div class="col l4 s12">
                        <!--                        <img class="responsive-img" id="product" src="">-->

                        <ul class="cd-gallery">
                            <li class="z-depth-3">
                                <a href="http://codyhouse.co/">
                                    <ul class="cd-item-wrapper">
                                        <li class="selected replace-image">
                                            <img src="res/featured.png" alt="Preview image">
                                        </li>

                                        <li class="lightbox move-right" data-sale="true" data-price="$22">
                                            <iframe src="https://www.youtube.com/embed/JutcLdSO2q0" frameborder="0" allowfullscreen></iframe>
                                            <div></div>
                                        </li>

                                        <li class="replace-image">
                                            <img src="img/ugmonk-tshirt-3.jpg" alt="Preview image">
                                        </li>
                                    </ul>
                                    <!-- cd-item-wrapper -->
                                </a>

                                <div class="cd-item-info">
                                    <span class="cd-price">26</span>
                                    <div><label>Brand:</label> Catwalk<br>
                                        <label>Brand:</label> Catwalk Catwalk Catwalk</div>
                                </div>
                                <!-- cd-item-info -->
                            </li>
                        </ul>

                    </div>
                    <!--/Product-->

                    <!--Feautre Content-->
                    <div class="col m8 s12">

                        <div class="row">

                            <div class="col s12">
                                <h4 class="header">ROOT<br>BOOST SPRAY</h4>
                            </div>

                            <div class="col s12">
                                <?php include("content.php")?>
                            </div>

                            <!--Clock-->
                            <div class="col s12">
                                <div class="row">
                                    <div class="col s12" id="clockdiv">
                                        <h5 class="header">Product<br>ends in</h5>
                                        <span class="endtime">Tue May 26 2017 16:14:26 GMT-0600 (MDT)</span>
                                        <div>
                                            <span class="days"></span><br>
                                            <label>Days</label>
                                        </div>
                                        <div>
                                            <span class="hours"></span><br>
                                            <label>Hours</label>
                                        </div>
                                        <div>
                                            <span class="minutes"></span><br>
                                            <label>Minutes</label>
                                        </div>
                                        <div>
                                            <span class="seconds"></span><br>
                                            <label>Seconds</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/Clock-->

                            <!--Buttons-->
                            <div class="col s12">
                                <a class="waves-effect btn nav-donate green">Buy<i class="fa fa-heart smaller" aria-hidden="true"></i></a> OR
                                <a class="waves-effect btn nav-donate red">Donate<i class="fa fa-heart smaller" aria-hidden="true"></i></a>
                            </div>
                            <!--/Buttons-->
                        </div>

                    </div>
                    <!--/Feautre Content-->

                    <!--Featured Charity-->
                    <div class="col s12">
                        <hr/>
                        <h4 class="header">Progress<br>Status</h4>
                        <!--progress bar-->
                        <div class="col l7 m7 s12 soft-center">
                            <div class="row">
                                <div class="progress-row">
                                    <div class="center progress-number valign-wrapper">
                                        <h4>$399<br><label>Current collection</label></h4>
                                    </div>

                                    <div class="progress-number">
                                        <div id="progress"></div>
                                    </div>

                                    <div class="center progress-number valign-wrapper">
                                        <h4>$750<br><label>Target Needed</label></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/progress bar-->

                        <!--arrow-->
                        <div class="col l6 soft-center arrow-con">
                            <h6 class="center">Profit Goes to</h6>
                            <span id="arrow-grow" class="soft-center"></span>
                        </div>
                        <!--/arrow-->

                        <!--Charity-->
                        <div class="col s12" animation="fadeInDown">
                            <img id="charity-logo" class="responsive-img soft-center" src="https://static1.squarespace.com/static/541800efe4b00c72b2216ebe/546f31efe4b028901507eafc/546f320be4b028901507eb2c/1416577265549/action+for+children-logo.png">
                        </div>
                        <div class="col l6 s12" animation="fadeInLeft">
                            <?php include("content.php")?>
                        </div>
                        <div class="col l6 s12" animation="fadeInRight">
                            <?php include("carousel.php")?>
                        </div>
                        <!--/Charity-->

                    </div>
                    <!--/Featured Charity-->
                </div>
            </div>


        </div>
        <!--/Feature-->


        <!--Past Campaigns-->
        <div class="campaigns">
            <div class="parallax-container">
                <div class="parallax"><img src="http://materializecss.com/images/parallax2.jpg" /></div>

                <div class="container">
                    <h1 class="header dark-bg">Past<br>Campaigns</h1>
                    <div class="slider4">
                        <div class="slide">
                            <a href="#" class="replace-image zoom-hover-wrapper"><img class="zoom-hover" src="img/ugmonk-bag-1.jpg"></a>
                        </div>
                        <div class="slide"><img src="http://placehold.it/300x150&text=FooBar2"></div>
                        <div class="slide"><img src="http://placehold.it/300x150&text=FooBar3"></div>
                        <div class="slide"><img src="http://placehold.it/300x150&text=FooBar4"></div>
                        <div class="slide"><img src="http://placehold.it/300x150&text=FooBar5"></div>
                    </div>
                    <div id="slider-prev"></div>
                    <div id="slider-next"></div>
                
                </div>

            </div>
        </div>
        <!--/Past Campaigns-->

        <footer class="page-footer">
            <div class="scroll-top">
                <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">&#xE316;</i></a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2014 Copyright Text
                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
            </div>
        </footer>
    </div>



</body>

</html>
