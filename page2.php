<?php require 'config.php';
if (empty($_SESSION['view'])) {
    echo "<script>location='encrypt'</script>";
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page 2</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/fontawesome-free-5.13.0-web/css/all.min.css">
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
</head>
<body>

<div class="page" id="plans">
    <div class="development-plan">
        <div class="header">
            <div class="box-side"></div>
            <div class="container">
                <div class="top-title">
                    <h3>My Recent</h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h2>Development Plan</h2>
                        <div class="date">
                            <span></span>
                            <i>March 05 - April 30</i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="sub-hero">
                            <h4>My Plan</h4>
                            <p>This is my plan and therefore I will spend at least two hours a day to make
                                sure I achieve my goals. I will update this regularly and report on everything
                                that is done in it. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="plans">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-plan">
                                <h3>Personal</h3>
                                <div class="list-three">
                                    <div class="fill-list">
                                        <div class="p-box active"><a href="">Find a hobby</a></div>
                                        <div class="p-box"><a href="">Complete an extensive study on "Importance of
                                                master degree"</a></div>
                                        <div class="p-box"><a href="">Do a comprehensive medical examination</a></div>
                                    </div>
                                    <div class="compo-seq"><img src="assets/images/component/square.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-plan">
                                <h3>Work</h3>
                                <div class="list-three">
                                    <div class="fill-list">
                                        <div class="p-box"><a href="">Hold a monthly workshop about fourth industrial
                                                revolution </a></div>
                                        <div class="p-box"><a href="">Attending a conference or a course"</a></div>
                                        <div class="p-box active"><a href="">Update the CV and make it attractive</a>
                                        </div>
                                        <div class="p-box"><a href="">Establish a working group to maximize the benefit
                                                of fourth industrial revolution</a></div>
                                    </div>
                                </div>
                                <div class="compo"><img src="assets/images/component/dot-dot.png" alt=""></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-plan">
                                <h3>Startup</h3>
                                <div class="list-three">
                                    <div class="fill-list">
                                        <div class="p-box active"><a href="">Evaluate the profitability and cost of each
                                                product </a></div>
                                        <div class="p-box"><a href="">Study the competitive advantage </a></div>
                                        <div class="p-box"><a href="">Extensive study of at least three competitors </a>
                                        </div>
                                        <div class="p-box"><a href="">Exit plan</a></div>
                                    </div>
                                </div>
                                <div class="compo"><img src="assets/images/component/ombak.png" alt=""></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>