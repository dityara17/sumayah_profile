<?php require 'config.php';
if (empty($_SESSION['view'])) {
    echo "<script>location='encrypt'</script>";
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Requirements</title>
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
<div class="page" id="requirement">
    <div class="">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-6 align-self-center">
                        <h2>Complete an extensive
                            study on"Importance of
                            master degree</h2>
                    </div>
                    <div class="col-6">
                        <p>
                            This is to show the progress and justification of
                            getting a master degree on Artificial intelligence.
                        </p>
                    </div>
                </div>
            </div>
            <div class="box-side"></div>
        </div>
        <div class="container">
            <div class="row req-row">
                <div class="col-7">
                    <div class="box-white">
                        <h3>Why study abroad? <br>
                            Why AI?</h3>
                        <ul class="list-req">
                            <li><i class="fa fa-question"></i> Strengthen my personality</li>
                            <li><i class="fa fa-question"></i> Be a domain expert in AI</li>
                            <li><i class="fa fa-question"></i> Lorem ipsum</li>
                            <li><i class="fa fa-question"></i> dolor sit amet</li>
                            <li><i class="fa fa-question"></i> consectetur</li>
                            <li><i class="fa fa-question"></i> adipisicing elit.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-5">
                    <div class="box-green">
                        <div class="ico">
                            <img src="assets/images/component/requirement-head.png" alt="requirement-ico">
                        </div>
                        <h3>Requirements</h3>
                        <p>In order to be accepted in Stanford or
                            Imperial or MIT. I need to complete the
                            below requirements</p>
                        <div class="entry-white-box">
                            <ul>
                                <li><i class="fa fa-check"></i> GPA higher than 4.5</li>
                                <li><i class="fa fa-check"></i> Write personal statemen (download)</li>
                                <li><i class="fa fa-times"></i> Take GRE exam</li>
                                <li><i class="fa fa-times"></i> Take IELTS exam</li>
                            </ul>
                        </div>
                        <div class="compo-dot">
                            <img src="assets/images/component/dot-dot.png" alt="dot-compo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>