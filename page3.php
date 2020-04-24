<?php require 'config.php';
if (empty($_SESSION['view'])) {
    echo "<script>location='encrypt'</script>";
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fine A Hobby</title>
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
</head>
<body>
<div class="page">

    <div id="hobby">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-6 align-self-center">
                        <h2>Find a hobby</h2>
                    </div>
                    <div class="col-6">
                        <p>
                            I don’t have specific hobby that I like to do. For that, I decided
                            to share with you list of things that I wrote long time ago of things
                            that I want to do.  Please let me know if you have any
                            recommendation. Note: This was long time ago, but I thought I
                            would share it since I couldn’t specify any hobby.
                        </p>
                    </div>
                </div>
            </div>
            <div class="box-side"></div>
        </div>
        <div class="container">
            <div class="box-white">
                <div class="compo-dot"><img src="assets/images/component/dot-dot.png" alt=""></div>
                <div class="compo-OMB"><img src="assets/images/component/ombak.png" alt=""></div>
                <div class="compo-OMB2"><img src="assets/images/component/ombak.png" alt=""></div>
                <div class="box-hobby">
                    <div class="col-hobby">
                        <h3 class="title"><span class="red-circle"><i class="fa fa-question"></i></span>Work & success
                        </h3>
                        <div class="entry">
                            <ul>
                                <li><i class="fa fa-check"></i> Start my own business</li>
                                <li><i class="fa fa-times"></i> Teach machine learning/Data science course to
                                    graduate-level
                                </li>
                                <li><i class="fa fa-check"></i> Be a leader</li>
                                <li><i class="fa fa-times"></i> Speak at a conference</li>
                                <li><i class="fa fa-times"></i> Get a master degree</li>
                                <li><i class="fa fa-times"></i> Publish a paper in IEEE</li>
                                <li><i class="fa fa-times"></i> Work in a something outside of my comfort zone “Accept a
                                    Challenge
                                </li>
                                <li><i class="fa fa-times"></i> Build a community of people interested in open source
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-hobby">
                        <h3 class="title"><span class="grey-circle"><i class="fa fa-question"></i></span>Fun</h3>
                        <div class="entry">
                            <ul>
                                <li><i class="fa fa-times"></i> Visit 50 countries (<span class="green">~40% done</span>)
                                </li>
                                <li><i class="fa fa-times"></i> Go scuba diving</li>
                                <li><i class="fa fa-times"></i> Hike in New Zealand</li>
                                <li><i class="fa fa-check"></i> Skydive and bungee jump</li>
                                <li><i class="fa fa-check"></i> Explore rafting adventure</li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-hobby">
                        <h3 class="title"><span class="blue-circle"><i class="fa fa-question"></i></span>Personal</h3>
                        <div class="entry">
                            <ul>
                                <li><i class="fa fa-times"></i> Learn 3rd language</li>
                                <li><i class="fa fa-times"></i> Live in another country</li>
                                <li><i class="fa fa-times"></i> Learn to drive a car</li>
                                <li><i class="fa fa-times"></i> Memorize the Qur'an</li>
                                <li><i class="fa fa-times"></i> Host Tedx in Saudi arabia</li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-hobby">
                        <h3 class="title"><span class="purple-circle"><i class="fa fa-question"></i></span>Health</h3>
                        <div class="entry">
                            <ul>
                                <li><i class="fa fa-check"></i> Exercise 3 times a week</li>
                                <li><i class="fa fa-times"></i> Host Tedx in Saudi arabia</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="box-side"></div>
            </div>
        </div>

    </div>

</div>

</body>
</html>