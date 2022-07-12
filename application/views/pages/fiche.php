<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Trano'tsik</title>
    <link rel="icon" href="<?= base_url() ?>assets/images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/color.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="<?= base_url() ?>custom-assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>custom-assets/css/post-css.css">
    <link rel="stylesheet" href="<?= base_url() ?>custom-assets/css/map.css">
    <link rel="stylesheet" href="<?= base_url() ?>custom-assets/css/message.css">

    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="<?= base_url() ?>custom-assets/css/fiche.css">
    <link rel="stylesheet" href="<?= base_url() ?>custom-assets/css/survey.css">
    <link rel="stylesheet" href="<?= base_url() ?>custom-assets/css/style-post-message.css">
    <link rel="stylesheet" href="<?= base_url() ?>custom-assets/css/search.css">
    <!--    select2-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body>

    <div class="theme-layout">
        <!-- topbar -->
        <div class="topbar stick d-flex justify-content-between">
            <div class="logo">
                <a title="home" href="<?= site_url() ?>"><img src="<?= base_url() ?>/custom-assets/logo.png" alt=""></a>
            </div>

            <div class="top-area mt-3 border-0">
                <div class="top-search" id="search">
                    <form>
                        <input type="text" placeholder="Search your house">
                        <button data-ripple disabled><i class="ti-search"></i></button>
                    </form>
                </div>

                <ul class="setting-area">
                    <li>
                        <a href="#" title="Notification" data-ripple="" class="menu-item" id="show-notif">
                            Notifications
                        </a>
                        <div class="dropdowns" id="notif-box">
                            <span><span class="number"></span> New Notifications</span>

                            <ul class="drops-menu">
                            </ul>
                            <!-- notications -->
                            <!--                            <a href="notifications.html" title="" class="more-mesg">view more</a>-->
                        </div>
                    </li>
                    <li>
                        <a href="#" title="Messages" class="menu-item" data-ripple="" id="show-discussions">Messages</a>
                        <div class="dropdowns" id="discussion-box">
                            <span><span class="messageNumber"></span> New Messages</span>
                            <ul class="drops-menu">

                            </ul>
                            <!--                            <a href="messages.html" title="" class="more-mesg">view more</a>-->
                        </div>
                    </li>
                </ul>

                <div class="user-img mr-0">
                    <a class="btn btn-light bg-white border-0" style="font-size: 14px;"><?= $_SESSION["first_name"] . " " . $_SESSION["last_name"] ?></a>
                </div>

                <ul class="setting-area ml-0">
                    <li>
                        <a href="#" title="Messages" class="btn btn-secondary rounded-circle" style="color: whitesmoke; font-size: 14px;" data-ripple=""><i class="fa-solid fa-caret-down"></i></a>
                        <div class="dropdowns">
                            <span>Option(s)</span>
                            <ul class="drops-menu">
                                <li id="go-out"><a>Log out</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <form action="<?= site_url("LoginController/LogOut") ?>" method="get" class="d-none">
            <button type="submit" id="logOut">out</button>
        </form>

        <!--  main content  -->
        <div class="container">
            <?= validation_errors()?>
            <div class="row publicite m-4">
                <div class="col-12">
                    <a href="<?= $publicite['lien'] ?>" title="Visiter">
                        <img src="<?= base_url() ?>files/pubs/<?= $publicite['image'] ?>" alt="">
                    </a>
                </div>
            </div>

            <div class="fiche m-4 mt-0">
                <div class="fiche-info">
                    <div class="titre">
                        <h1><?= $pub["titre"] ?></h1>
                    </div>
                    <div class="utilities-list">
                        <div class="row mt-4">
                            <div class="col-md-3 mb-2">
                                <i class="fa-solid fa-location-dot"></i> <?= $pub["nom_lieu"] ?>
                            </div>
                            <?php foreach ($pub["detail_utils"] as $util) { ?>
                                <div class="col-md-2 mb-2">
                                    <i class="fa-solid fa-check"></i> <?= $util["nom_utilite"] ?>
                                </div>
                            <?php } ?>
                            <div class="col-md-3 mb-2">
                                <i class="fa-solid fa-money-bill-1"></i> <?= number_format($pub["prix"]) ?> ar/mois
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <div class="post-description p-3">
                                    <?= $pub["description"] ?>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <i class="fa-solid fa-user"></i>
                                by <?= $pub["first_name"] . " " . $pub["last_name"] ?>
                                <?php if($pub["id_client"] != $_SESSION["id_client"]) {?>
                                <button data-toggle="modal" class="btn btn-primary btn-color ml-2" data-target="#message" id="contact-owner">Contact
                                    <i class="fa fa-paper-plane">
                                    </i>
                                </button>
                                <?php } else if(!$pub["isBoosted"]) {?>
                                    <button data-toggle="modal" class="btn btn-success" data-target="#pay-boost" id="boost button">
                                        Booster la publication
                                    </button>
                                <?php }?>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3 tags">
                        <div class="col">
                            <?php foreach ($pub["detail_tags"] as $tag) { ?>
                                <span class="p-2 mr-2 tag"><i class="fa-solid fa-tags"></i> <?= $tag["nom_tag"] ?></span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6 images-list">
                            <?php foreach ($pub["photos"] as $photo) { ?>
                                <img src="<?= base_url() ?>files/imgs/<?= $photo["lien_photo"] ?>" alt="" data-toggle="modal" data-target="#modal<?= $photo["id_photo"] ?>">
                                <div class="modal fade" id="modal<?= $photo["id_photo"] ?>" tabindex="-1" role="dialog" aria-labelledby="modalPhotoTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img src="<?= base_url() ?>files/imgs/<?= $photo["lien_photo"] ?>" alt="" height="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-md-6">
                            <div class="post-map">
                                <div class="nearby-map">
                                    <div id="map-canvas"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row mt-3 border-0 ml-2">
                <div class="col-12">
                    <?php if ($user_like == 1) {  ?>
                        <button class="btn btn-info btn-xs like-button" id="Like">
                            Like <i class="fa fa-thumbs-up"> </i> <span id="likecount"><?= $pub["nblike"] ?></span>
                        </button>
                        <button class="btn btn-info btn-xs like-button" id="Dislike">
                            Dislike <i class="fa fa-thumbs-o-down"> </i><span id="dislikecount"> <?= $pub["nbunlike"] ?></span>
                        </button>
                    <?php } else if ($user_like == 2) { ?>
                        <button class="btn btn-info btn-xs like-button" id="Like">
                            Like <i class="fa fa-thumbs-o-up"> </i> <span id="likecount"><?= $pub["nblike"] ?></span>
                        </button>
                        <button class="btn btn-info btn-xs like-button" id="Dislike">
                            Dislike <i class="fa fa-thumbs-o-down"> </i><span id="dislikecount"><?= $pub["nbunlike"] ?></span>
                        </button>
                    <?php } else { ?>
                        <button class="btn btn-info btn-xs like-button" id="Like">
                            Like <i class="fa fa-thumbs-o-up"> </i> <span id="likecount"><?= $pub["nblike"] ?></span>
                        </button>
                        <button class="btn btn-info btn-xs like-button" id="Dislike">
                            Dislike <i class="fa fa-thumbs-o-down"> </i><span id="dislikecount"><?= $pub["nbunlike"] ?></span>
                        </button>
                    <?php } ?>
                </div>
                <div class="col-12">
                    <div class="coment-area">
                        <h6>Comments <i class="fa fa-comments"></i></h6>
                        <ul class="we-comet" id="comment">

                            <!-- helper that displays the comments -->
                            <?= displayComments($pub['commentaires']) ?>

                            <button class="btn-view btn-load-more mb-4" id="load-next-comment">Load More</button>

                            <li class="post-comment">
                                <div class="post-comt-box">
                                    <form method="post">
                                        <textarea placeholder="Post your comment" id="text-area-comment"></textarea>
                                        <button type="submit"></button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--  footer  -->
    <div class="bottombar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="copyright"><a target="_blank" href="https://www.templateshub.net"> &copy; Trano-Tsika</a></span>
                    <i><img src="<?= base_url() ?>assets/images/credit-cards.png" alt=""></i>
                </div>
            </div>
        </div>
    </div>

    <!-- message box -->
    <div class="modal fade message-modal" id="message" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="user"></h5>
                    <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <h6><span id="titre-message"></span></h6>
                    <div class="chat-list">
                        <ul id="onemessage">

                        </ul>
                        <form action="<?= site_url() ?>/DetailPublicationController/envoyer/<?= $pub["id_client"] ?>/<?= $pub["id_publication"] ?>" method="post">
                            <form>
                                <div class="row pt-1">
                                    <div class="col-10 text-box">
                                        <textarea name="message_texte" placeholder="your message ..." id="corpsmessage"></textarea>
                                    </div>
                                    <div class="col-2 mt-2 pt-1 border-0" id="send-message">
                                        <i class="fa-solid fa-circle-arrow-right"></i>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal survey -->
    <div class="modal fade" id="survey" tabindex="-1" role="dialog" aria-labelledby="surveyTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered survey-modal" role="document">
            <div class="modal-content form">
                <?= displayNextQuestion($survey) ?>
            </div>
        </div>
    </div>

    <!-- search modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?= site_url() ?>/SearchController/simpleSearch"  method="get" >
                    <div class="modal-header search-container">
                        <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
                        <input type="search" name="criteria" class="search-title" id="search-criteria" placeholder="Enter something ...">
                        <button type="button" class="btn btn-light add-bg rounded-circle" data-dismiss="modal" aria-label="Close">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                        <input type="submit" value="Search" id="go-search" class="d-none" >
                    </div>
                </form>

                <div class="modal-body">
                    <span class="multi-text">Multicriteria <i class="fa-solid fa-caret-down" id="caret-down"></i> <i class="fa-solid fa-caret-up" id="caret-left"></i></span>
                    <div class="search-box">
                        <form action="<?= site_url() ?>/SearchController/searchMulti" method="post">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="titre">Titre</label>
                                    <input type="text" name="titre" placeholder="Entrez le titre que vous rechercher">
                                </div>

                                <div class="col-md-6">
                                    <label for="price">Prix par mois</label>
                                    <div class="form-group row m-0 p-0">
                                        <div class="col-md-6 pl-0">
                                            <input type="number" name="prix[min]" min="0" step="0.01" placeholder="Minimum">
                                        </div>
                                        <div class="col-md-6 pl-0">
                                            <input type="number" name="prix[max]" min="0" step="0.01" placeholder="Maximum">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="price">Nombre de chambre</label>
                                    <div class="form-group row m-0 p-0">
                                        <div class="col-md-6 pl-0">
                                            <input type="number" name="chambre[min]" min="0" placeholder="Minimum">
                                        </div>
                                        <div class="col-md-6 pl-0">
                                            <input type="number" name="chambre[max]" min="0" placeholder="Maximum">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="location">Localisation</label>
                                    <select style="width: 100%" name="location" class="custom-select form-control" id="quartiers">
                                        <option value="">Choisir un quartier</option>
                                        <?php foreach ($locations as $location) { ?>
                                            <option value="<?= $location["id_localisation"] ?>"><?= $location["nom_lieu"] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="utilities col-md-12">
                                    <label>Veuillez selectionnez les proprietes de la maison</label>
                                    <div class="utilities-checks">
                                        <?php foreach ($utils as $util) { ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="tagsUtil[]" value="<?= $util["id_utilite"] ?>">
                                                <label class="form-check-label" for="<?= $util["nom_utilite"] ?>">
                                                    <?= $util["nom_utilite"] ?>
                                                </label>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>

                                <div class="utilities col-md-12">
                                    <label>Ajoutez des <a><u class="underline-custom">#tag</u></a> autant que possible pour
                                        ameliorez votre publication</label>
                                    <div class="row p-0 m-0">
                                        <select style="width: 100%" name="tags[]" id="tags" multiple="multiple">
                                            <?php for ($i = 0; $i < count($tags); $i++) { ?>
                                                <option value="<?= $tags[$i]["id_tag"] ?>"><?= $tags[$i]["nom_tag"] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <input type="submit" value="Search" class="btn btn-primary rounded-0">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- boost payment -->
    <div class="modal fade p-0" role="dialog" tabindex="-1" id="pay-boost">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5>Please enter your information in order to confirm the boost</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa-solid fa-xmark"></i></span>
                    </button>
                </div>
                <form action="<?= site_url("BoostController/pay_boost/".$pub["id_publication"])?>" method="post">
                    <div class="modal-body">
                        <div class="form-group mt-0">
                            <label for="account">Carte bancaire</label>
                            <input type="text" name="account" id="account" min="1" placeholder="Votre carte bancaire">
                        </div>

                        <div class="form-group">
                            <label for="display-duration">Duration</label>
                            <select id="display-duration" name="duration">
                                <option selected>Pour combien de semaine?</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer d-flex justify-content-between">
                        <button class="btn btn-light rounded-0" type="button" data-dismiss="modal">Go back</button>
                        <button class="btn btn-success rounded-0" id="post-boost">Post & Boost</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <!--  post comment  -->
    <script>
        let commentArea = $("#text-area-comment");
        let commentTemplate = (text) => `
            <li>
                <div class="we-comment">
                    <div class="coment-head">
                        <h5>
                                <?= $_SESSION["first_name"] . " " . $_SESSION["last_name"] ?>
                        </h5>
                        <span>a l'instant</span>
                    </div>
                    <p>${text}</p>
                </div>
            </li>`;

        commentArea.keyup((e) => {
            if (e.keyCode === 13) {
                let curVal = commentArea.val();
                let firstLi = $("#comment li:first");

                if (firstLi.attr("class")==="post-comment") {
                    firstLi = $("#comment button");
                }

                firstLi.before(commentTemplate(curVal));
                console.log(curVal);
                $.ajax({
                    type: "POST",
                    url: "<?= site_url() ?>/DetailPublicationController/comment/<?= $pub["id_publication"] ?>",
                    data: {
                        commentaire: curVal
                    }
                }).done((data) => {
                    console.log(data);
                });
                commentArea.val('');
            }
        });

        $("#load-next-comment").click(() => {
            $.ajax({
                url: "<?= site_url("DetailPublicationController/next_commentaire/" . $pub['id_publication']) ?>"
            }).done((data) => {
                $("#load-next-comment").before(data);
            })
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="<?= base_url() ?>assets/js/main.min.js"></script>
    <script src="<?= base_url() ?>assets/js/script.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDD7GRQJx0_fNz6eeUSJjf7Yw5_6s0OEaA&libraries=geometry,places"></script>

    <script>
        var map;
        let marker;
        var infoWindow = new google.maps.InfoWindow();

        var directionService = new google.maps.DirectionsService();
        var directionDisplay = new google.maps.DirectionsRenderer({
            suppressMarkers: true
        });

        var calculateRoute = (start, dest) => {
            var request = {
                origin: start,
                destination: dest,
                travelMode: google.maps.TravelMode.DRIVING,
                unitSystem: google.maps.UnitSystem.IMPERIAL
            }

            directionService.route(request, (result, status) => {
                console.log(status);
                if (status === "OK") {
                    console.log(result);

                    directionDisplay.setDirections(result);
                } else {
                    console.log("tsy nety!");
                }
            })
        }

        function showRoute() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        const pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude,
                        };

                        infoWindow.setPosition(pos);
                        infoWindow.setContent(`
                            <div class='card'>
                                <div class="card-header">
                                    Vous etes ici
                                </div>
                            </div>
                        `);
                        infoWindow.open(map);
                        map.setCenter(pos);

                        let start = new google.maps.LatLng(pos.lat, pos.lng);
                        calculateRoute(start,marker.position);
                    },
                    () => {
                        handleLocationError(true, infoWindow, map.getCenter());
                    }
                );
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }

        function RouteControl(controlDiv, map) {
            // Set CSS for the control border.
            const controlUI = document.createElement("div");

            controlUI.style.backgroundColor = "#fff";
            controlUI.style.border = "2px solid #fff";
            controlUI.style.borderRadius = "3px";
            controlUI.style.boxShadow = "0 2px 6px rgba(0,0,0,.3)";
            controlUI.style.cursor = "pointer";
            controlUI.style.marginTop = "8px";
            controlUI.style.marginBottom = "22px";
            controlUI.style.textAlign = "center";
            controlUI.title = "Calculer le trajet";
            controlDiv.appendChild(controlUI);

            // Set CSS for the control interior.
            const controlText = document.createElement("div");

            controlText.style.color = "rgb(25,25,25)";
            controlText.style.fontFamily = "Roboto,Arial,sans-serif";
            controlText.style.fontSize = "16px";
            controlText.style.lineHeight = "38px";
            controlText.style.paddingLeft = "5px";
            controlText.style.paddingRight = "5px";
            controlText.innerHTML = "Calculer le trajet";
            controlUI.appendChild(controlText);

            // Setup the click event listeners: simply set the map to Chicago.
            controlUI.addEventListener("click", () => {
                showRoute();
            });
        }

        function initialize() {
            let pubPos = new google.maps.LatLng(<?= $pub['pos']['lat'] ?>, <?= $pub['pos']['lng'] ?>);

            let myStyles = [{
                    "featureType": "poi.business",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }
            ];

            var mapOptions = {
                zoom: 12,
                center: pubPos,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: myStyles
            };


            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

            directionDisplay.setMap(map);
            const div = document.createElement("div");

            RouteControl(div,map);
            map.controls[google.maps.ControlPosition.BOTTOM_CENTER].push(div);
            marker = new google.maps.Marker({
                        position: pubPos,
                        map: map
                    });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <script src="<?= base_url() ?>custom-assets/js/modals.js"></script>
    <script src="<?= base_url() ?>custom-assets/js/message.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        let surveyResponseUrl = "<?= site_url("SurveyController/response") ?>";
    </script>

    <!-- survey js // need survey ResponseUrl -->
    <?php if ($survey != null) { ?>
        <script src="<?= base_url() ?>custom-assets/js/survey.js"></script>
    <?php } ?>

    <script src="<?= base_url() ?>custom-assets/js/search.js"></script>
    <script src="<?= base_url() ?>custom-assets/js/logOut.js"></script>
    <script>
        let urlNotif = "<?= site_url("LastNotificationController") ?>";
    </script>

    <!--  need the url notif to be set  -->
    <script src="<?= base_url() ?>custom-assets/js/notif.js"></script>

    <script>
        let site_url = "<?= site_url() ?>";
        let pubIdclient;
        let idPublication;
        let lastMessageUrl = "<?= site_url("LastMessageController") ?>";
        let loadingUrlBase = "<?= site_url("MessageController/load_message?client1=" . $_SESSION['id_client'] . "&client2=") ?>";
    </script>
    <!--  need site_url, pubIdClient, idPublication, lastMesageUrl, loadingUrlBase -->
    <script src="<?= base_url() ?>custom-assets/js/message-from-notif.js"></script>

    <script>

        $("#contact-owner").click(() => {
            pubIdclient = "<?= $pub["id_client"] ?>";
            idPublication = "<?= $pub["id_publication"] ?>";
            let pubTitle = "<?= $pub["titre"] ?>";
            let owner = "<?= $pub["first_name"] . " " . $pub["last_name"] ?>";

            $("#titre-message").text(pubTitle);
            $("#user").text(owner);
        });

    </script>

    <script src="<?= base_url() ?>custom-assets/js/sendMessage.js"></script>

    <!-- like dislike -->
    <script>
        $("#Like").click(function() {
            <?php $url = site_url("DetailPublicationController/like") . "/" . $pub["id_publication"]; ?>
            $.ajax({
                url: "<?= $url ?>"
            }).done((data) => {
                // alert(data);
                var counters = data.split('/');
                $("#likecount").text(counters[0]);
                $("#dislikecount").text(counters[1]);
            });
        });

        $("#Dislike").click(function() {
            <?php $url = site_url("DetailPublicationController/dislike/") . "/" . $pub["id_publication"]; ?>
            $.ajax({
                url: "<?= $url ?>"
            }).done((data) => {
                var counters = data.split('/');
                $("#likecount").text(counters[0]);
                $("#dislikecount").text(counters[1]);
            });
        });
    </script>


    <!-- select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(function() {
            $("#quartiers").select2({dropdownAutoWidth : true, dropdownParent: "#searchModal"});
            $("#tags").select2({dropdownAutoWidth : true, dropdownParent: "#searchModal"});
        })
    </script>

</body>

</html>