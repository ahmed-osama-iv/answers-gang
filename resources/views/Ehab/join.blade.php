<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Answers' Gang | Join</title>
</head>
<body>
<header style=" max-height:  1100px !important">
    <div class="slogan">
        <div class="navbar-fixed z-depth-5">
            <nav class="nav-wrapper   purple darken-4">
                <div class="container">
                    <a class=" waves-effect waves-purple " href="">
                        <a class="btn-floating pink darken-11 z-depth-5 pulse" style="position: relative; top : -3px"><i class="material-icons white-text " style="position: relative ; top :-8 ">help</i> </a>
                        <span style="margin-left:10px ; font-size: 20px ; font-weight: bolder">Answers' Gang</span></a>
                    <a href="#" class="sidenav-trigger" data-target="mobile-links">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul class="right hide-on-med-and-down">

                        <li><a class=" waves-effect waves-purple " href="/"><i class="material-icons left">home</i><span class="sp">Home</span></a></li>

                        <li><a class=" waves-effect waves-purple " href="/questions/show"><i class="fas fa-question-circle left" style="position: relative ; top :18px;"></i><span class="sp">Q&A</span></a></li>

                        <li><a class=" waves-effect waves-purple" href="/join"><i class="material-icons left">person_add</i><span class="sp">Signup</span></a></li>

                        <li><a class=" waves-effect waves-purple" href="#aboutUs"><i class="material-icons left">group</i><span class="sp">About</span></a></li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<ul class="sidenav" id="mobile-links">

    <li><a class="btn waves-effect waves-purple   purple darken-4" href="index.html"><i class="material-icons  left white-text">home</i><span>Home</span></a></li>

    <li><a class=" btn waves-effect waves-purple   purple darken-4 " href="questions.html"><i class="fas fa-question-circle left " style="color: white"></i><span class="sp">Q&A</span></a></li>

    <li><a class="btn waves-effect waves-purple   purple darken-4" href="join.html"><i class="material-icons left white-text">person_add</i><span>Signup</span></a></li>

    <li><a class="btn waves-effect waves-purple   purple darken-4" href="#aboutUs"><i class="material-icons left white-text">group</i><span>About</span></a></li>

</ul>
<div class="container" id="container">

@include('auth.register')

</div>

<!--footersection---------------------------------------------------------------------------------------------------------->
<div class="br" style="height: 30px ; background: #4a148c ; width: 100%"></div>
<div class="limiter" id="aboutUs" >
    <div
        style="background-image: url('img/parallax2.jpg') ; background-attachment: fixed ;background-size: 100%; height: 700px ;">
        <section class="footer" style="margin: 0 ; padding: 0 ; height: 100%; ; width: 100% ; background-color: rgba(0, 0, 0, 0.8)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 footer-w3ls1">
                        <h2 class="indigo-text text-darken-4">About Us</h2>
                        <p class="footer-p1" style="font-size: 15px ; color: whitesmoke">Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem Ipsum has been the industry's standard
                            dummy text ever since the 1500s, when an unknown printer took a galley of type and
                            scrambled it to make a type specimen
                            book. </p>
                        <p class="footer-p1" style="color: whitesmoke">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.</p>
                    </div>
                    <div class="col-lg-4 col-md-4 footer-pair">

                    </div>
                    <div class="col-lg-4 col-md-4 footer-w3ls3">
                        <h3 style="padding: 15px 0 ; font-size: 30px ; color: whitesmoke">Our Social Links</h3>
                        <ul class="social-icons-footer"  >
                            <li>
                                <a href="#"  >
                                    <i class="fab fa-facebook-square"></i>Facebook</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                    Twitter</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram" ></i>Instagram</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-google-plus" ></i>Google Plus</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-5 copy-pair">
                        <p class="copyright">&copy; 2019 Answers' Gang. All rights reserved | Design by
                            <a href="#" target="_blank">Error 404! </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
<!-- /footer section ----------------------------------------------------------------------------------------------------------->
</div>
</div>
<script src="js/appEhap.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

<script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
        $('.materialboxed').materialbox();
        $('.parallax').parallax();
        $('.tabs').tabs();
        $('.datepicker').datepicker({
            disableWeekends: true,
            yearRange: 1
        });
    });
</script>
</body>
</html>
