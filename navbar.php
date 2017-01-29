<?php
session_start();

error_reporting(0);
require("base.php");
?>
<html>
    <body>
        <!-- Dropdown Structure -->
        <ul id="vehicle_booking" class="dropdown-content">
            <li><a href="view.php">View<i class="small material-icons left">subtitles</i></a></li>
            <li><a href="booking.php">Manage<i class="small material-icons left">note_add</i></a></li>

        </ul>

        <ul id="food" class="dropdown-content">
            <li><a href="addFoodItem.php">Add<i class="small material-icons left">library_add</i></a></li>
            <li><a href="updateFoodItem.php">Update<i class="small material-icons left">library_books</i></a></li>            
            <li><a href="removeFoodItem.php">Delete<i class="small material-icons left">delete</i></a></li>
        </ul>

        <ul id="album" class="dropdown-content">
            <li><a href="addAlbum.php">Add Album<i class="small material-icons left">note_add</i></a></li>
            <li><a href="addPhoto.php">Add Photos<i class="small material-icons left">library_add</i></a></li>
            <li><a href="delAlbum.php">Delete<i class="small material-icons left">delete</i></a></li>            
        </ul>

        <ul id="service" class="dropdown-content">
            <li><a href="addService.php">Add<i class="small material-icons left">library_add</i></a></li>
            <li><a href="deleteService.php">Delete<i class="small material-icons left">delete</i></a></li>            
        </ul>

        <nav>
            <div class="nav-wrapper teal darken-4">

                <ul class="left hide-on-med-and-down">
                    <li><a href="admin.php">PM Banquet<i class="small material-icons left">store</i></a></li>

                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-button" href="javascript:void(0)" data-beloworigin="true" data-activates="booking">Manage Booking<i class="large material-icons left">shopping_cart</i></a></li>
                    <li><a class="dropdown-button" href="javascript:void(0)" data-beloworigin="true" data-activates="food">Food Services<i class="large material-icons left">shopping_basket</i></a></li>
                    <li><a class="dropdown-button" href="javascript:void(0)" data-beloworigin="true" data-activates="album">Manage Gallery<i class="large material-icons left">perm_media</i></a></li>
                    <li><a class="dropdown-button" href="javascript:void(0)" data-beloworigin="true" data-activates="service">Services<i class="large material-icons left">work</i></a></li>

                    <li><a href="viewEvent.php">Event<i class="small material-icons left">today</i></a></li>
                    <li><a href="feedWatcher.php">Feedback<i class="small material-icons left">hearing</i></a></li>
                </ul>

                <ul class="right hide-on-med-and-down">
                    <li><a href="test.php?logout();"><i class="small material-icons left">power_settings_new</i>Logout</a></li>
                </ul>


            </div>
        </nav>

        <div class="row">
            <div class="col s12">

                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="images/pic09.jpg"> <!-- random image -->
                            <div class="caption center-align">
                                <h3>This is our big Tagline!</h3>
                                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                            </div>
                        </li>
                        <li>
                            <img src="images/pic02.jpg"> <!-- random image -->
                            <div class="caption left-align">
                                <h3>Left Aligned Caption</h3>
                                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                            </div>
                        </li>
                        <li>
                            <img src="images/pic06.jpg"> <!-- random image -->
                            <div class="caption right-align">
                                <h3>Right Aligned Caption</h3>
                                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                            </div>
                        </li>
                        <li>
                            <img src="images/pic05.jpg"> <!-- random image -->
                            <div class="caption center-align">
                                <h3>This is our big Tagline!</h3>
                                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!----LOGO---->
        <div class="container">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/pic01.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Management @NUV<i class="material-icons right">more_vert</i></span>

                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><h2>Management @NUV</h2><i class="material-icons right">close</i></span>
                    <h4 class="header col s12 light">We are extremely happy to introduce you to “MANAGEMENT@NUV” , a committee of The School of Business and Law that will act as a channel of communication between the students and the University Management, staff and other bodies within the University. The committee will also be providing a platform for students to showcase their talent and skills. </h4>
                </div>
            </div>
        </div>


        <!-- Newsletter-->
        <div class="teal lighten-5">
            <div class="container">
                </br>
                </br>
                <header class="center">
                    <h2>Newsletter</h2>
                    <h6 class="header col s6 light">All the students of School of Business and Law are hereby invited to submit articles on any topic that would interest the fellow students and help them gain knowledge.</h6>
                </header>
                </br>

                <div class="row">
                    <div class="col s4">
                        <div class="card">
                            <div class="card-image">
                                <img src="images/pic02.jpg">
                            </div>
                            <div class="card-content">
                                <h5>Volume 2</h5>
                            </div>
                            <div class="card-action">
                                <a href="#">Download</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s4">
                        <div class="card">
                            <div class="card-image">
                                <img src="images/pic02.jpg">

                            </div>
                            <div class="card-content">
                                <h5>Volume 2</h5>

                            </div>
                            <div class="card-action">
                                <a href="#">Download</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s4">
                        <div class="card">
                            <div class="card-image">
                                <img src="images/pic02.jpg">
                            </div>
                            <div class="card-content">
                                <h5>Volume 2</h5>
                            </div>
                            <div class="card-action">
                                <a href="#">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Our Events -->
        <div class="grey darken-4">
            <div class="container">
                </br>
                </br>
                <header>
                    <h2 class="light grey-text text-lighten-3"">Our Events</h2>
                </header>
                </br>
                <div class="row">
                    <div class="col s8">
                        <ul class="dates">
                            <li>
                                <span class="date">Jan <strong>27</strong></span>
                                <h4><a href="#">Mannequin Challenge</a></h4>
                                <p class="light grey-text text-lighten-3" >The Mannequin Challenge is a viral Internet video trend where people remain frozen in action like mannequins while a moving camera films them, usually with the song "Black Beatles" by Rae Sremmurd playing in the background.[1][2] The hashtag #MannequinChallenge was used for popular social media platforms such as Twitter and Instagram.</p>
                            </li>
                            <li>
                                <span class="date">Jan <strong>27</strong></span>
                                <h4><a href="#">Mannequin Challenge</a></h4>
                                <p class="light grey-text text-lighten-3" >The Mannequin Challenge is a viral Internet video trend where people remain frozen in action like mannequins while a moving camera films them, usually with the song "Black Beatles" by Rae Sremmurd playing in the background.[1][2] The hashtag #MannequinChallenge was used for popular social media platforms such as Twitter and Instagram.</p>
                            </li>
                            <li>
                                <span class="date">Jan <strong>27</strong></span>
                                <h4><a href="#">Mannequin Challenge</a></h4>
                                <p class="light grey-text text-lighten-3" >The Mannequin Challenge is a viral Internet video trend where people remain frozen in action like mannequins while a moving camera films them, usually with the song "Black Beatles" by Rae Sremmurd playing in the background.[1][2] The hashtag #MannequinChallenge was used for popular social media platforms such as Twitter and Instagram.</p>
                            </li>
                            <li>
                                <span class="date">Jan <strong>27</strong></span>
                                <h4><a href="#">Mannequin Challenge</a></h4>
                                <p class="light grey-text text-lighten-3" >The Mannequin Challenge is a viral Internet video trend where people remain frozen in action like mannequins while a moving camera films them, usually with the song "Black Beatles" by Rae Sremmurd playing in the background.[1][2] The hashtag #MannequinChallenge was used for popular social media platforms such as Twitter and Instagram.</p>
                            </li>

                        </ul>
                    </div>
                    <div class="col s4">
                        <div class="card small">
                            <div class="card-image">
                                <img src="images/pic04.jpg">
                            </div>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">This is a link</a>
                                <a href="#">This is a link</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col s4">
                        <div class="card small">
                            <div class="card-image">
                                <img src="images/pic04.jpg">
                            </div>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">This is a link</a>
                                <a href="#">This is a link</a>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
        
         <!-- Gallery -->
       
            <div class="container">
                </br>
                </br.
            
            </div>
    </div>








    <script type="text/javascript" >
        $(document).ready(function () {
            $('.slider').slider();
        });
        $('.slider').slider('pause');
        // Start slider
        $('.slider').slider('start');
        // Next slide
        $('.slider').slider('next');
        // Previous slide
        $('.slider').slider('prev');

        $(document).ready(function () {
            $('.collapsible').collapsible();
        });
        $('.collapsible').collapsible({
            accordion: false, onOpen: function (el) {
                alert('Open');
            },
            onClose: function (el) {
                alert('Closed');
            }
        });



    </script>
</body>

</html>