<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Trano'tsik</title>
    <link rel="icon" href="<?= base_url()?>assets/images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="<?= base_url()?>assets/css/main.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/color.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/responsive.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'><link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>

    <link rel="stylesheet" href="<?= base_url()?>custom-assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url()?>custom-assets/css/post-css.css">
    <link rel="stylesheet" href="<?= base_url()?>custom-assets/css/map.css">
    <link rel="stylesheet" href="<?= base_url()?>custom-assets/css/message.css">

</head>
<body>

<div class="theme-layout">
    <!-- topbar -->
    <div class="topbar stick d-flex justify-content-between">
        <div class="logo">
            <a title="" href="newsfeed.html"><img src="logo.png" alt=""></a>
        </div>

        <div class="top-area mt-3 border-0">
            <ul class="setting-area">
                <li>
                    <a href="#" title="Notification" data-ripple=""  class="menu-item" >
                        Notifications
                    </a>
                    <div class="dropdowns">
                        <span>4 New Notifications</span>
                        <ul class="drops-menu">
                            <li>
                                <a href="notifications.html" title="">
                                    <img src="assets/images/resources/thumb-1.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>sarah Loren</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag green">New</span>
                            </li>
                            <li>
                                <a href="notifications.html" title="">
                                    <img src="assets/images/resources/thumb-2.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>Jhon doe</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag red">Reply</span>
                            </li>
                            <li>
                                <a href="notifications.html" title="">
                                    <img src="assets/images/resources/thumb-3.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>Andrew</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag blue">Unseen</span>
                            </li>
                            <li>
                                <a href="notifications.html" title="">
                                    <img src="assets/images/resources/thumb-4.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>Tom cruse</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag">New</span>
                            </li>
                            <li>
                                <a href="notifications.html" title="">
                                    <img src="assets/images/resources/thumb-5.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>Amy</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag">New</span>
                            </li>
                        </ul>
                        <a href="notifications.html" title="" class="more-mesg">view more</a>
                    </div>
                </li>
                <li>
                    <a href="#" title="Messages"  class="menu-item" data-ripple="">Messages</a>
                    <div class="dropdowns">
                        <span>5 New Messages</span>
                        <ul class="drops-menu">
                            <li>
                                <a class="discussion" discussion-id="1">
                                    <img src="assets/images/resources/thumb-1.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>sarah Loren</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
<!--                                <span class="tag green">New</span>-->
                            </li>
                            <li>
                                <a class="discussion" discussion-id="2">
                                    <img src="assets/images/resources/thumb-2.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>Jhon doe</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
<!--                                <span class="tag red">Reply</span>-->
                            </li>
                            <li>
                                <a class="discussion" discussion-id="3">
                                    <img src="assets/images/resources/thumb-3.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>Andrew</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
<!--                                <span class="tag blue">Unseen</span>-->
                            </li>
                            <li>
                                <a class="discussion" discussion-id="4">
                                    <img src="assets/images/resources/thumb-4.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>Tom cruse</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag">New</span>
                            </li>
                            <li>
                                <a class="discussion" discussion-id="5">
                                    <img src="assets/images/resources/thumb-5.jpg" alt="">
                                    <div class="mesg-meta">
                                        <h6>Amy</h6>
                                        <span>Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag">New</span>
                            </li>
                        </ul>
                        <a href="messages.html" title="" class="more-mesg">view more</a>
                    </div>
                </li>
            </ul>

            <div class="user-img mr-0">
                <a href="" class="btn btn-light bg-white border-0" style="font-size: 14px;">AH Tsinjo</a>
            </div>

            <ul class="setting-area ml-0">
                <li>
                    <a href="#" title="Messages"  class="btn btn-secondary rounded-circle" style="color: whitesmoke; font-size: 14px;" data-ripple=""><i class="fa-solid fa-caret-down"></i></a>
                    <div class="dropdowns">
                        <span>Option(s)</span>
                        <ul class="drops-menu">
                            <li><a href="">Log out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--  main content  -->
    <div class="container">

        <!-- post form -->
        <div class="row align pt-4">
            <div class="central-meta rounded-0 add-shadow">
                <div class="new-postbox">
                    <figure>
                        <img src="assets/images/resources/admin2.jpg" alt="">
                    </figure>
                    <div class="newpst-input">
                        <textarea rows="1" placeholder="Post your house..."></textarea>
                        <div class="attachments">
                            <ul>
                                <li>
                                    <button class="btn btn-primary rounded-0" data-target="#make-post" data-toggle="modal"> Make a post </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- posts -->
        <div class="row pl-1 pr-1">

            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-4">
                <a href="" class="pub-link" title="Voir details" >
                    <div class="single-featured-property mb-5 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img src="assets/bg-img/feature1.jpg" alt="">

                            <div class="tag">
                                <span>A louer</span>
                            </div>
                            <div class="list-price">
                                <p>1,000,000.00 ar</p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5>Andoharanofotsy, 2 rooms (titre)</h5>
                            <p class="location"><i class="fa-solid fa-location-dot"></i> Andoharanofotsy</p>
                            <p>Integer nec bibendum lacus. Suspendisse dictum enim sit (description)</p>

                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <!--                            <a href="#" class="custom-btn">Plus de details</a>-->
                                <div class="pub-details">
                                    <i class="fa-solid fa-thumbs-up"></i> 12K
                                </div>
                                <div class="pub-details">
                                    <i class="fa-solid fa-thumbs-down"></i> 0
                                </div>
                                <div  class="pub-details" >
                                    by <i>AH Tsinjo</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            
        </div>

    </div>

    <!--  footer  -->
    <div class="bottombar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="copyright"><a target="_blank" href="https://www.templateshub.net"> &copy; Trano-Tsika</a></span>
                    <i><img src="assets/images/credit-cards.png" alt=""></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal post house -->
<div class="modal fade p-0" role="dialog" tabindex="-1" id="make-post">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h4>Publier votre maison a louer</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="container">

                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" name="titre" id="titre" placeholder="Entrez le titre votre publication">
                        </div>

                        <div class="utilities">
                            <label>Veuillez selectionnez les proprietes de la maison</label>
                            <div class="utilities-checks">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="courant">
                                    <label class="form-check-label" for="courant">
                                        Courant
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Eau">
                                    <label class="form-check-label" for="Eau">
                                        Eau
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Meuble">
                                    <label class="form-check-label" for="Meuble">
                                        Meuble
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="titre">Chambre</label>
                            <input type="number" name="room" id="room" min="1" placeholder="Combien de chambre ?">
                        </div>

                        <div class="form-group">
                            <label for="location">Location</label>
                            <select id="location" name="location">
                                <option selected>Choisir une ville</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>


                        <div class="utilities">
                            <label>Liez votre maison avec google map <a data-target="#link-map" data-toggle="modal"><u class="link-map" >Link to google map</u></a></label>
                        </div>

                        <div class="utilities">
                            <label>Ajoutez des <a><u class="underline-custom" >#tag</u></a> autant que possible pour ameliorez votre publication</label>
                            <div class="utilities-checks">
                                <div class="row p-0 m-0">
                                    <div class="col-md-3 p-0 m-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Villa">
                                            <label class="form-check-label" for="Villa">
                                                Villa
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Yard">
                                            <label class="form-check-label" for="Yard">
                                                Yard
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="For_students">
                                            <label class="form-check-label" for="For_students">
                                                For students
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 p-0 m-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Foreground">
                                            <label class="form-check-label" for="Foreground">
                                                Foreground
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Restroom_indoor">
                                            <label class="form-check-label" for="Restroom_indoor">
                                                Restroom indoor
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Garage">
                                            <label class="form-check-label" for="Garage">
                                                Garage
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="price">Prix par mois</label>
                            <input type="number" name="price" id="price" min="1" step="0.01" placeholder="Prix du location par mois?">
                        </div>

                        <input type="file" class="custom-file-input" id="file-input"  accept="image/*" onchange="preview()" multiple>
                        <input type="hidden" name="img-removed" id="img-removed" >
                        <input type="hidden" name="lat" id="lat">
                        <input type="hidden" name="lng" id="lng">

                        <div class="container-img">
                            <div class="label-container">
                                <label for="file-input" class="d-flex justify-content-center" ><span>Add images <i class="ti-plus"></i></span></label>
                            </div>
                            <div class="images"></div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button class="btn btn-light rounded-0" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary rounded-0">Post</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- locate your home -->
<div class="modal fade p-0" role="dialog" tabindex="-1" id="link-map">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h4>Localiser votre maison</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <div id="map"></div>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <button class="btn btn-light rounded-0" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-primary rounded-0" onclick="setHousePosition()" >Definir Localisation</button>
            </div>

        </div>
    </div>
</div>

<!-- message box -->
<div class="modal fade message-modal" id="message" tabindex="-1" role="dialog" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="messageTitle">Client</h5>
                <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <h6>Andoharanofotsy Room </h6>
                <div class="chat-list">
                    <ul id="onemessage">
                        <li class="me">
                            <div class="chat-thumb"><img src="assets/images/resources/chatlist1.jpg" alt=""></div>
                            <div class="notification-event">
                                <span class="chat-message-item">
                                    Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                </span>
                                <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>
                        <li class="you">
                            <div class="chat-thumb"><img src="assets/images/resources/chatlist2.jpg" alt=""></div>
                            <div class="notification-event">
                                <span class="chat-message-item">
                                    Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                </span>
                                <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>
                        <li class="me">
                            <div class="chat-thumb"><img src="assets/images/resources/chatlist1.jpg" alt=""></div>
                            <div class="notification-event">
                                <span class="chat-message-item">
                                    Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                </span>
                                <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>
                        <li class="you">
                            <div class="chat-thumb"><img src="assets/images/resources/chatlist2.jpg" alt=""></div>
                            <div class="notification-event">
                                <span class="chat-message-item">
                                    Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                </span>
                                <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>
                    </ul>
                    <form>
                        <div class="row pt-1">
                            <div class="col-10 text-box">
                                <textarea placeholder="your message ..." id="corpsmessage"></textarea>
                            </div>
                            <div class="col-2 mt-2 pt-1 border-0">
                                <i class="fa-solid fa-circle-arrow-right"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="<?= base_url()?>assets/js/main.min.js"></script>
<script src="<?= base_url()?>assets/js/script.js"></script>
<script src="<?= base_url()?>assets/js/map-init.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDD7GRQJx0_fNz6eeUSJjf7Yw5_6s0OEaA&libraries=geometry,places"></script>

<script src="<?= base_url()?>custom-assets/js/map.js"></script>
<script src="<?= base_url()?>custom-assets/js/modals.js"></script>
<script src="<?= base_url()?>custom-assets/js/image-preview.js"></script>
<script src="<?= base_url()?>custom-assets/js/message.js" ></script>

</body>
</html>
