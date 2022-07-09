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
    <link rel="stylesheet" href="<?= base_url() ?>custom-assets/css/survey.css">
    <link rel="stylesheet" href="<?= base_url() ?>custom-assets/css/boost.css">

    <style>
        .theme-layout {
            min-height: 90vh;
        }
    </style>

</head>

<body>

    <div class="theme-layout mb-3">
        <!-- topbar -->
        <div class="topbar stick d-flex justify-content-between">
            <div class="logo">
                <a title="" href="newsfeed.html"><img src="<?= base_url() ?>custom-assets/logo.png" alt=""></a>
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
                            <a href="notifications.html" title="" class="more-mesg">view more</a>
                        </div>
                    </li>
                    <li>
                        <a href="#" title="Messages" class="menu-item" data-ripple="">Messages</a>
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
                        <a href="#" title="Messages" class="btn btn-secondary rounded-circle" style="color: whitesmoke; font-size: 14px;" data-ripple=""><i class="fa-solid fa-caret-down"></i></a>
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
            <div class="modal-content mt-4 mb-3">
                <form action="<?= site_url() ?>/SearchController/simpleSearch"  method="get" > 
                <div class="modal-header search-container">
                        <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
                        <input type="search" name="criteria" class="search-title" id="textarea-search" placeholder="Enter something ...">
                        <input type="submit" value="Search">
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
                                            <input type="number" name="prix_min" min="0" step="0.01" placeholder="Minimum">
                                        </div>
                                        <div class="col-md-6 pl-0">
                                            <input type="number" name="prix_max" min="0" step="0.01" placeholder="Maximum">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="price">Nombre de chambre</label>
                                    <div class="form-group row m-0 p-0">
                                        <div class="col-md-6 pl-0">
                                            <input type="number" name="room_min" min="0" placeholder="Minimum">
                                        </div>
                                        <div class="col-md-6 pl-0">
                                            <input type="number" name="room_max" min="0" placeholder="Maximum">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="location">Location</label>
                                    <select name="location">
                                        <option value="">Choisir une ville</option>
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
                                    <div class="utilities-checks">
                                        <div class="row p-0 m-0">
                                            <?php for ($i = 0; $i < count($tags); $i++) { ?>
                                                <div class="col-md-3 p-0 m-0">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="tags[]" value="<?= $tags[$i]["id_tag"]  ?>">
                                                        <label class="form-check-label" for="<?= $tags[$i]["nom_tag"] ?>">
                                                            <?= $tags[$i]["nom_tag"] ?>
                                                        </label>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <input type="submit" value="Search">
                        </form>
                    </div>
                </div>
            </div>

            <!-- posts -->
            <!-- helper which diplays the posts -->
            
        </div>

        <div class="container" id="pub-container" >
            <div class="row">
                <div class="col-md-6">
                    <h4>Resultat(s) <?= $len  ?> </h4>
                </div>
            </div>
            <?php
                if($pubs != null){
                    echo (displayPubs($pubs)); 
                }
            ?>
        </div>
        <button class="btn-view btn-load-more mb-4" id="load-next">Load More</button>
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

    <style>
        input.search-title {
            width: 100%;
            height: 40px;
            border: 1px black solid;
            padding: 10px 10px 10px 34px;
            border-radius: 25px;
            margin-right: 10px;
            background-color: rgba(107, 99, 99, 0.06);
        }

        input.search-title:focus,
        input.search-title:hover {
            /* outline: 1px blue solid; */
            /*border: 0;*/
            box-shadow: 0px 1px 10px -5px rgb(151 113 81);
        }

        #search-icon {
            margin: 13px 0 0 13px;
            position: absolute;
        }

        .search-container {
            position: relative;
        }

        .add-bg {
            background-color: rgba(128, 122, 122, 0.19);
        }

        .search-box,
        #caret-left {
            display: none;
        }

        .multi-text:hover {
            cursor: pointer;
            box-shadow: 0px 10px 6px -8px rgb(151 113 81);
        }
    </style>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="<?= base_url() ?>assets/js/main.min.js"></script>
    <script src="<?= base_url() ?>assets/js/script.js"></script>
    <script src="<?= base_url() ?>assets/js/map-init.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDD7GRQJx0_fNz6eeUSJjf7Yw5_6s0OEaA&libraries=geometry,places"></script>

    <script src="<?= base_url() ?>custom-assets/js/map.js"></script>
    <script src="<?= base_url() ?>custom-assets/js/modals.js"></script>
    <script src="<?= base_url() ?>custom-assets/js/image-preview.js"></script>
    <script src="<?= base_url() ?>custom-assets/js/message.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= base_url() ?>custom-assets/js/survey.js"></script>
    <script src="<?= base_url() ?>custom-assets/js/boost.js"></script>

    <script>
        $("#search").click(() => {
            $("#textarea-search").focus();
        });

        let shown = false;

        $(".multi-text").click(() => {
            if (!shown) {
                $("#caret-down").hide();
                $("#caret-left").show();
                $(".search-box").show();
                shown = true;
            } else {
                $("#caret-down").show();
                $("#caret-left").hide();
                $(".search-box").hide();
                shown = false;
            }
        });

        $("#show-post-modal").click(() => {
            $("#make-post").modal("show");
        });
    </script>

    <script>
        $("#load-next").click(() => {
            $.ajax({
                url: "<?= site_url("SearchController/nextResult") ?>"
            }).done((data) => {
                $("#pub-container").append(data);
            });
        });

        $("#show-notif").click(() => {
            let notifBox = $("#notif-box > .drops-menu");
            $(".number").empty();
            notifBox.empty();
            $.ajax({
                url: "<?= site_url("LastNotificationController") ?>"
            }).done((data) => {
                notifBox.append(data);
                $(".number").text(($("#notif-box > .drops-menu > li").length));
            });
            notifBox.append()
        });
    </script>

    <script>

    </script>
</body>

</html>