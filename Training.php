<?php
include "Header_Footer/Header.php";
require "Linkk/link6.php";
?>
    <section class="banner_business">
        <section class="title_business">
            <div class="container">
                <div class="wrap">
                    <div class="title wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                        <h2>Trading Training</h2>
                    </div>

                    <div class="content wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                        <p>
                            IMT Group builds and develops professional training systems for traders in the digital age.
                            The only training system with leading national and international experts.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </section>


    <!--Trader Class-->
    <!-- <section>
    <div class="trader_class">
      <h3 class="trader">Trader Class</h3>
      <p class="text_1">Training channel for in-depth knowledge for traders, with leading experts.</p>
      <img id="image2" src="./public/img/image2.png" alt="">
    </div>
  </section> -->
    <section class="trader_class">
        <div class="container content">
            <div class="title wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                <p>Trader Class</p>
            </div>
            <div class="line"></div>

            <p class="text_1 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">Training channel for in-depth
                knowledge for traders, with leading experts.</p>
            <div class="slideshow" style="max-width:800px">
                <img class="mySlides" src="./images/image1.jpg" style="width:100%; border-radius: 10px;">
                <img class="mySlides" src="./images/image2.png" style="width:100%; border-radius: 10px;">
                <img class="mySlides" src="./images/image3.png" style="width:100%; border-radius: 10px;">
            </div>

        </div>



    </section>
    <!--Entry Class-->
    <section class="entry_class">
        <div class="container content">
            <div class="title wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                <p>Entry Class</p>
            </div>
            <div class="line"></div>

            <p class="text_1 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">Basic knowledge training channel
                for traders who are just starting out with the digital financial market.</p>
            <div class="slidershow" style="max-width:800px;    margin-top: 105px;
            border-radius: 10px;">
                <img class="Slides" src="./images/image3.png" style="width:100%; border-radius: 10px">
                <img class="Slides" src="./images/image2.png" style="width:100%; border-radius: 10px">
                <img class="Slides" src="./images/image3.png" style="width:100%; border-radius: 10px">
            </div>
        </div>
    </section>
    <?php
include "Header_Footer/Footer.php";
?>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/wow.min.js"></script>
    <script src=".//js/app.js"></script>
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 3000); // Change image every 2 seconds
        }
    </script>
    <script>
        var Index = 0;
        calculatecarousel();

        function calculatecarousel() {
            var i;
            var x = document.getElementsByClassName("Slides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            Index++;
            if (Index > x.length) {
                Index = 1
            }
            x[Index - 1].style.display = "block";
            setTimeout(calculatecarousel, 2000); // Change image every 2 seconds
        }
    </script>

</body>

</html>