<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="css/home.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Answers' Gang | Home</title>
    <style>

    </style>
</head>
<body>
<header>
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
                        @if (Route::has('login'))
                            @auth()
                                <li><a class=" waves-effect waves-purple " href="/"><i class="material-icons left">home</i><span class="sp">Home</span></a></li>

                                <li><a class=" waves-effect waves-purple " href="/questions/show"><i class="fas fa-question-circle left" style="position: relative ; top :18px;"></i><span class="sp">Q&A</span></a></li>

                                <li >
                                    <a class='dropdown-trigger ' href='#' data-target='dropdown12'>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <!---------------------------Drop Down Test----------------------->
                                    <!-- Dropdown Trigger -->
                                    <!-- Dropdown Structure -->
                                    <ul id='dropdown12' class='dropdown-content'>
                                        <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                            </a>
                                        </li>

                                    </ul>
                                    <!---------------------------Drop Down Test----------------------->
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>

                                <li><a class=" waves-effect waves-purple" href="#aboutUs"><i class="material-icons left">group</i><span class="sp">About</span></a></li>
{{--Admin Auth--}}               @can('viewAny', \App\Question::class)
                                @endcan
                                @else
                                <li><a class=" waves-effect waves-purple " href="/"><i class="material-icons left">home</i><span class="sp">Home</span></a></li>

                                <li><a class=" waves-effect waves-purple " href="/questions/show"><i class="fas fa-question-circle left" style="position: relative ; top :18px;"></i><span class="sp">Q&A</span></a></li>
                                <li><a class=" waves-effect waves-purple" href="#login" ><i class="material-icons left">person</i><span class="sp">Login</span></a></li>

                                <li><a class=" waves-effect waves-purple" href="/join"><i class="material-icons left">person_add</i><span class="sp">Rigister</span></a></li>
                                <li><a class=" waves-effect waves-purple" href="#aboutUs"><i class="material-icons left">group</i><span class="sp">About</span></a></li>

                            @endauth
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    </div>

</header>
{{--Side Nav--}}
<ul class="sidenav" id="mobile-links">


        <li><a class="btn waves-effect waves-purple   purple darken-4" href="/"><i class="material-icons  left white-text">home</i><span>Home</span></a></li>

        <li><a class=" btn waves-effect waves-purple   purple darken-4 " href="/questions/show"><i class="fas fa-question-circle left " style="color: white"></i><span class="sp">Q&A</span></a></li>
        @auth
        
        @else
        <li><a class="btn waves-effect waves-purple   purple darken-4" href="#login"><i class="material-icons left white-text">person</i><span>Login</span></a></li>

        <li><a class="btn waves-effect waves-purple   purple darken-4" href="/join"><i class="material-icons left white-text">person_add</i><span>Signup</span></a></li>
        @endauth
        <li><a class="btn waves-effect waves-purple   purple darken-4" href="#aboutUs"><i class="material-icons left white-text">group</i><span>About</span></a></li>


</ul>
<div class="br" style="height: 30px ; background: #4a148c ; width: 100%"></div>
<!-- photo / grid -->
<section class="container section" id="photos">
    <div class="row">
        <div class="col s12 l4">
            <img src="img/log1.jpg" alt="" class="responsive-img materialboxed">
        </div>
        <div class="col s12 l6 offset-l1">
            <h2 class="indigo-text text-darken-4">Idea</h2>
            <p>The simplest ideas can solve the most difficult problems , Help others by offering an idea or suggestion , a solution to their problem , We are here to help you</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12 l6 offset-l1 push-l7">
            <img src="img/log2.jpg" alt="" class="responsive-img materialboxed ">
        </div>
        <div class="col s12 l6 offset-l1 pull-l5 right-align">
            <h2 class="indigo-text text-darken-4">Knowledge</h2>
            <p>The simplest ideas can solve the most difficult problems</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12 l4">
            <img src="img/log3.jpg" alt="" class="responsive-img materialboxed">
        </div>
        <div class="col s12 l6 offset-l1">
            <h2 class="indigo-text text-darken-4">Co-operation</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci.</p>
        </div>
    </div>
</section>
<!-----------------Parallax----------------------->
<div class="parallax-container">
    <div class="parallax">
        <img src="img/parallax.jpg" alt="" class="responsive-img">
    </div>
</div>

<!-- Questions / Answers -->
<div class="br" style="height: 15px ; background: #4a148c ; width: 100%"></div>
<section class="section container" id="services">
    <div class="row">
        <div class="col s12 l4">
            <h2 class="indigo-text text-darken-4">What I do..</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci.</p>
            <p>Mauris dolor augue, vulputate in pharetra ac, facilisis nec libero. Fusce condimentum gravida urna, vitae scelerisque erat ornare nec.</p>
        </div>
        <div class="col s12 l6 offset-l2">
            <!-- tabs -->
            <ul class="tabs">
                <li class="tab col s6">
                    <a href="#photography" class="active indigo-text text-darken-4">First answer</a>
                </li>
                <li class="tab col s6">
                    <a href="#editing" class="indigo-text text-darken-4">Second answer</a>
                </li>
            </ul>
            <div id="photography" class="col s12">
                <p class="flow-text indigo-text text-darken-4">First answer</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem eaque soluta iste, nostrum nobis facilis, temporibus eum debitis tempora similique consectetur esse animi earum iure, eius asperiores dicta sequi consequuntur!</p>
                <p>Mauris dolor augue, vulputate in pharetra ac, facilisis nec libero. Fusce condimentum gravida urna, vitae scelerisque erat ornare nec.</p>
            </div>
            <div id="editing" class="col s12">
                <p class="flow-text indigo-text text-darken-4">Second answer</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci.</p>
                <p>Mauris dolor augue, vulputate in pharetra ac, facilisis nec libero. Fusce condimentum gravida urna, vitae scelerisque erat ornare nec.</p>
            </div>
        </div>
    </div>
    </div>
</section>

<!-----------------Parallax----------------------->
<div class="parallax-container">
    <div class="parallax">
        <img src="img/parallax.jpg" alt="" class="responsive-img ">
    </div>
</div>
<div class="br" style="height: 15px ; background: #4a148c ; width: 100%"></div>
<!-- contact&&login form -->

<section class="section container scrollspy" id="login">
    <div class="row">
        <div class="col s12 l5" >
            <h2 class="indigo-text text-darken-4">Error404! Team</h2>
            <ul>
                <li>
                    <a class="btn-floating purple darken-4 z-depth-5 pulse tot" >
                        <i class="ErrorMembers">
                            <div class="img ahmed">
                            </div>
                        </i>
                    </a>
                    <name><a class="waves-effect waves-light  modal-trigger" href="#modal2">Ahmed Osama (back-end dev)</a></name> </li>
                <li>
                    <a class="btn-floating purple darken-4 z-depth-5 pulse tot" >
                        <i class="ErrorMembers">
                            <div class="img omar">
                            </div>
                        </i>
                    </a>
                    <name><a class="waves-effect waves-light  modal-trigger" href="#modal3" >Omr Nasr (back-end dev)</a></name>  </li>
                <li>
                    <a class="btn-floating purple darken-4 z-depth-5 pulse tot" >
                        <i class="ErrorMembers">
                            <div class="img anwer">
                            </div>
                        </i>
                    </a>
                    <name><a class="waves-effect waves-light  modal-trigger" href="#modal4">Mohamed Anwer (back-end dev)</a></name> </li>

                <li >
                    <a class="btn-floating purple darken-4 z-depth-5 pulse tot" >
                        <i class="ErrorMembers">
                            <div class="img ihab">
                            </div>
                        </i>
                    </a>
                    <name ><a class="waves-effect waves-light  modal-trigger" href="#modal1">Ihab Tawffiq (front-end dev)</a></name>
                </li>

            </ul>
        </div>
        <div class="col s12 l5 offset-l2">
        @auth()
        @else
            <<h2 class="indigo-text text-darken-4">Login Now</h2>
            @include('auth.login')
        @endauth
            
        </div>
    </div>
</section>



<!-- Ihab's Modal data -->
<div id="modal1" class="modal" style=" overflow-y: hidden;!important" >
    <div class="modal-content">

        <h5 class="modal-tit">Ihab's Social linkes</h5>
        <p class="modal-con">You can connect with ihab by using his social linkes</p>
        <i class="modalimg"><div class="img ihab materialboxed"></div></i>
        <ul class="social-icons"  >
            <li class="modal1">
                <a target="blank" href="https://wuzzuf.net/me/ihab-tawffiq-ece817cd17" class="wuzzuf-text"  >
                    <i ><img class="Wuzzuf" src="img/wuzzuf.jpg" alt=""></i>Wuzzuf</a>
            </li>

            <li class="modal1">
                <a target="blank" href="https://www.linkedin.com/in/ihab-tawffiq-92a8a8144/"  >
                    <i class="fab fa-linkedin"></i>Linked in</a>
            </li>

            <li class="modal1">
                <a target="blank" href="https://github.com/ihabTawffiq"  >
                    <i class="fab fa-github" ></i>GitHub</a>
            </li>

            <li class="modal1">
                <a target="blank" href="https://www.facebook.com/profile.php?id=100009693495732"  >
                    <i class="fab fa-facebook"></i>Facebook</a>
            </li>

            <li class="modal1">
                <a target="blank" href="https://www.instagram.com/ihab_tawffiq/"  >
                    <i class="fab fa-instagram"></i>Instagram</a>
            </li>
        </ul>
        <a href="#!" class="modal-close waves-effect waves-green btn-flat close-btn" >Close</a>
    </div>
</div>
<!----/Ihab's Modal data-->

<!-- Anwers's Modal data -->
<div id="modal4" class="modal" style=" overflow-y: hidden;!important" >
    <div class="modal-content">

        <h5 class="modal-tit">Ihab's Social linkes</h5>
        <p class="modal-con">You can connect with ihab by using his social linkes</p>
        <i class="modalimg"><div class="img anwer materialboxed"></div></i>
        <ul class="social-icons"  >
            <li class="modal1">
                <a target="blank" href="https://wuzzuf.net/me/ihab-tawffiq-ece817cd17" class="wuzzuf-text"  >
                    <i ><img class="Wuzzuf" src="img/wuzzuf.jpg" alt=""></i>Wuzzuf</a>
            </li>

            <li class="modal1">
                <a target="blank" href="https://www.linkedin.com/in/ihab-tawffiq-92a8a8144/"  >
                    <i class="fab fa-linkedin"></i>Linked in</a>
            </li>

            <li class="modal1">
                <a target="blank" href="https://github.com/ihabTawffiq"  >
                    <i class="fab fa-github" ></i>GitHub</a>
            </li>

            <li class="modal1">
                <a target="blank" href="https://www.facebook.com/profile.php?id=100009693495732"  >
                    <i class="fab fa-facebook"></i>Facebook</a>
            </li>

            <li class="modal1">
                <a target="blank" href="https://www.instagram.com/ihab_tawffiq/"  >
                    <i class="fab fa-instagram"></i>Instagram</a>
            </li>
        </ul>
        <a href="#!" class="modal-close waves-effect waves-green btn-flat close-btn" >Close</a>
    </div>
</div>
<!----/Anwer's Modal data-->
<!-- osama's Modal data -->
<div id="modal2" class="modal" style=" overflow-y: hidden;!important" >
    <div class="modal-content">

        <h5 class="modal-tit">Ihab's Social linkes</h5>
        <p class="modal-con">You can connect with ihab by using his social linkes</p>
        <i class="modalimg"><div class="img ahmed materialboxed"></div></i>
        <ul class="social-icons"  >
            <li class="modal1">
                <a target="blank" href="https://wuzzuf.net/me/ihab-tawffiq-ece817cd17" class="wuzzuf-text"  >
                    <i ><img class="Wuzzuf" src="img/wuzzuf.jpg" alt=""></i>Wuzzuf</a>
            </li>

            <li class="modal1">
                <a target="blank" href="https://www.linkedin.com/in/ihab-tawffiq-92a8a8144/"  >
                    <i class="fab fa-linkedin"></i>Linked in</a>
            </li>

            <li class="modal1">
                <a target="blank" href="https://github.com/ihabTawffiq"  >
                    <i class="fab fa-github" ></i>GitHub</a>
            </li>

            <li class="modal1">
                <a target="blank" href="https://www.facebook.com/profile.php?id=100009693495732"  >
                    <i class="fab fa-facebook"></i>Facebook</a>
            </li>

            <li class="modal1">
                <a target="blank" href="https://www.instagram.com/ihab_tawffiq/"  >
                    <i class="fab fa-instagram"></i>Instagram</a>
            </li>
        </ul>
        <a href="#!" class="modal-close waves-effect waves-green btn-flat close-btn" >Close</a>
    </div>
</div>
<!----/osama's Modal data-->

<!-- /Omar's Modal Trigger -->
<div id="modal3" class="modal" style=" overflow-y: hidden;!important" >
    <div class="modal-content">

        <h5 class="modal-tit">Omar's Social linkes</h5>
        <p class="modal-con">You can connect with Omar by using his social linkes</p>
        <i class="modalimg"><div class="img omar materialboxed"></div></i>
        <ul class="social-icons"  >

            <li class="modal1">
                <a target="blank" href="https://www.linkedin.com/in/o-nasr-saad-60569312a/"  >
                    <i class="fab fa-linkedin"></i>Linked in</a>
            </li>

            <li class="modal1">
                <a target="blank" href="https://github.com/O-Nasr"  >
                    <i class="fab fa-github" ></i>GitHub</a>
            </li>

            <li class="modal1">
                <a target="blank" href="https://www.facebook.com/O.Nasr.saad.3367"  >
                    <i class="fab fa-facebook"></i>Facebook</a>
            </li>

            <li class="modal1">
                <a target="blank" href="https://www.instagram.com/o__nasr/"  >
                    <i class="fab fa-instagram"></i>Instagram</a>
            </li>
        </ul>
        <a href="#!" class="modal-close waves-effect waves-green btn-flat close-btn" >Close</a>
    </div>
</div>
<!-- /Omar's Modal Trigger -->

<!-----------------Parallax----------------------->
<div class="parallax-container">
    <div class="parallax">
        <img src="img/parallax.jpg" alt="" class="responsive-img">
    </div>
</div>

<!-------/parallex------------------------------------->

<!--footersection---------------------------------------------------------------------------------------------------------->
<div class="br" style="height: 30px ; background: #4a148c ; width: 100%"></div>
<div class="limiter" id="aboutUs" >
    <div
        style="background-image: url('img/parallax2.jpg'); background-repeat: no-repeat ; background-attachment: fixed ;background-size: 100%; height: 700px ;">
        <section class="footer" style="margin: 0 ; padding: 0 ; height: 100%; ; width: 100% ; background-color: rgba(0, 0, 0, 0.8)">
            <div class="container" id="aboutUs">
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
                                    <i class="fab fa-twitter"></i>Twitter</a>
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
<!-- Compiled and minified JavaScript -->
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


    // Or with jQuery
    $('.dropdown-trigger').dropdown();
    $(document).ready(function(){
        $('.modal').modal();
    });
</script>
</body>
</html>
