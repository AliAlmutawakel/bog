<!DOCTYPE html>
<html>

<head>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <!--Import font awesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <!--Import bootstrap.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

    <!--Progress.js-->
    <script src="js/progressbar.min.js"></script>
    
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>

</head>

<body>

    <!--Splash-->
    <div id="splash">
        <div id="splash-title" class="absolute-center">
            <h1 class="header dark-bg">Beauty<br>Gives Back</h1>
        </div>
        <video class="visible-desktop" id="hero-vid" poster="http://www.markhillard.com/sandbox/media/polina.jpg" autoplay loop muted>
            <source type="video/webm" src="http://www.markhillard.com/sandbox/media/polina.webm"></source>
            <source type="video/mp4" src="http://www.markhillard.com/sandbox/media/polina.mp4"></source>
        </video>
        <img id="hero-pic" class="hidden-desktop" src="http://www.markhillard.com/sandbox/media/polina.jpg" alt="">

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
        <div class="row bog grey lighten-2">

            <div bind-height="bog" bind-copy class="col m6 s12 bog-pic"></div>
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
        <div class="feature">
            <div class="container">
                <h3 class="header">July-August<br>Featured Product</h3>
                <div class="row">
                    <div class="col m4 s12">
                        <img class="responsive-img" src="res/featured.png">
                    </div>
                    <div class="col m2 s12">
                        <div id="progress"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>









