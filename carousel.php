<?php
    
    $images = array(
          "http://proof.nationalgeographic.com/files/2015/05/MM8190_12_09_30_10398-copy.jpg",
          "http://lorempixel.com/580/250/nature/1",
          "http://lorempixel.com/580/250/nature/2",
        "http://lorempixel.com/580/250/nature/3",
        "http://lorempixel.com/580/250/nature/4"
    );
?>

    <div id="gallery">
        <?php
            for ($i = 0; $i < sizeof($images); $i++) {
                $div  = '<div class="thumbnail-wrapper zoom-hover-wrapper">';
                $div .= '<a class="thumbnail zoom-hover" style="background-image:url('.$images[$i].');" data-number="'.$i.'" href="#modal1">';
                $div .= '</a></div>';
                echo $div;
            }
        ?>
    </div>

    <style>
        .modal-content {
            padding: 0px 0px 15px 0px !important;
        }

    </style>
    <div id="modal1" class="modal">
        <div class="modal-content">
            <div class="slider">
                <ul class="slides">
                    <?php
                        foreach ($images as $url) {
                            echo'<li><img src="'.$url.'"></li>';
                        }
                    ?>
                </ul>
                <div class="carousel-arrow-left">
                    <a class="btn-floating btn-small btn-flat waves-effect waves-light btn-arrow vertical-center" data-slider="prev">
                        <i class="large"><span id="next"></span></i>
                    </a>
                </div>
                <div class="carousel-arrow-right">
                    <a class="btn-floating btn-small btn-flat waves-effect waves-light btn-arrow vertical-center" data-slider="next">
                        <i class="large"><span id="prev"></span></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
