<?php require 'config.php';
if (empty($_SESSION['view'])) {
    echo "<script>location='encrypt'</script>";
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owl/assets/owl.theme.default.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!--    Our Js-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <script src="assets/owl/owl.carousel.min.js"></script>
</head>
<body>
<div class="" id="course">
    <div class="compo-dot">
        <img src="assets/images/component/dot-dot.png" alt="dot-compo">
    </div>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-6 align-self-center">
                    <h2>Attending a conference or a course </h2>
                </div>
                <div class="col-6">
                    <p>
                        This is to show the progress and justification of
                        getting a master degree on Artificial intelligence.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="sec-enty">
        <div class="container">
            <div class="row row-entry">
                <div class="col-md-6">
                    <div class="box-white">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="slide-entry">
                    <div class="image">
                        <img src="assets/images/att-1.png" alt="Course 1">
                    </div>
                    <div class="white-side">
                        Example
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide-entry">
                    <div class="image">
                        <img src="assets/images/att-2.png" alt="Course 1">
                    </div>
                    <div class="white-side">
                        Example
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide-entry">
                    <div class="image">
                        <img src="assets/images/att-2.png" alt="Course 1">
                    </div>
                    <div class="white-side">
                        Example
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide-entry">
                    <div class="image">
                        <img src="assets/images/att-1.png" alt="Course 1">
                    </div>
                    <div class="white-side">
                        Example
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide-entry">
                    <div class="image">
                        <img src="assets/images/att-2.png" alt="Course 1">
                    </div>
                    <div class="white-side">
                        Example
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide-entry">
                    <div class="image">
                        <img src="assets/images/att-1.png" alt="Course 1">
                    </div>
                    <div class="white-side">
                        Example
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide-entry">
                    <div class="image">
                        <img src="assets/images/att-2.png" alt="Course 1">
                    </div>
                    <div class="white-side">
                        Example
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide-entry">
                    <div class="image">
                        <img src="assets/images/att-1.png" alt="Course 1">
                    </div>
                    <div class="white-side">
                        Example
                    </div>
                </div>
            </div>
        </div>

        <div class="container controller">
            <div class="row">
                <div class="col-2 align-self-center">
                    <button type="button" role="presentation" class="pre-am"><i class="fa fa-arrow-left"></i></button>
                </div>
                <div class="col-8 align-self-center"><span class="row"></span></div>
                <div class="col-2 align-self-center">
                    <button type="button" role="presentation" class="next-am"><span aria-label="Next"><i
                            class="fa fa-arrow-right"></i></span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="box-bottom-side"></div>
</div>

<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        center: true,
        items: 4,
        margin: 10,
        nav: false,
        // navText: [$('.next-am'), $('.pre-am')],
        responsive: {
            700: {
                items: 4
            }
        }
    });
    $(document).ready(function () {
        //owl-owl-next
        $(".pre-am").click(function () {
            $(".owl-prev").click();
        });

        $(".next-am").click(function () {
            $(".owl-next").click();
        })
    })
</script>
</body>
</html>