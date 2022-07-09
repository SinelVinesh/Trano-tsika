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
        .mandatory {
            color: red;
            /*font-size: 20px;*/
        }

        .mesg-meta>span {
            white-space: unset;
        }
    </style>

</head>

<body>
    <?= validation_errors() ?>

    <div class="theme-layout">
        <!-- topbar -->
        <div class="topbar stick d-flex justify-content-between">
            <div class="logo">
                <a title="" href="<?= site_url() ?>"><img src="<?= base_url() ?>custom-assets/logo.png" alt=""></a>
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
                        <a href="#" title="Messages" class="menu-item" data-ripple="" id="show-discussions" >Messages</a>
                        <div class="dropdowns" id="discussion-box" >
                            <span><span class="messageNumber"></span> New Messages</span>
                            <ul class="drops-menu">

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
        <div class="container" id="pub-container">

            <!-- post form -->
            <div class="row align pt-4">
                <div class="central-meta rounded-0 add-shadow">
                    <div class="new-postbox">
                        <figure>
                            <img src="assets/images/resources/admin2.jpg" alt="">
                        </figure>
                        <div class="newpst-input">
                            <textarea rows="1" placeholder="Post your house..." id="show-post-modal"></textarea>
                            <div class="attachments">
                                <ul>
                                    <li>
                                        <button class="btn btn-primary rounded-0" id="show-make-post"> Make a post</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- posts -->
            <!-- helper which diplays the posts -->
            <?= displayPubs($pubs); ?>
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
                <div class="modal-body">
                    <div class="container">
                        <form action="<?= site_url('AjoutPublicationController/ajout_publication') ?>" method="post" enctype='multipart/form-data'>


                            <div class="form-group">
                                <label for="titre">Titre<span class="mandatory">*</span></label>
                                <input type="text" name="titre" id="titre" placeholder="Entrez le titre votre publication">
                            </div>

                            <div class="form-group">
                                <label for="titre">Description<span class="mandatory">*</span></label>
                                <input type="text" name="description" id="description" placeholder="Veuillez decrire la maison">
                            </div>

                            <div class="utilities">
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

                            <div class="row m-0 p-0">
                                <div class="form-group col-md-6 m-0 pl-0">
                                    <label for="titre">Chambre<span class="mandatory">*</span></label>
                                    <input type="number" name="room" id="room" min="1" placeholder="Combien de chambre ?">
                                </div>

                                <div class="form-group col-md-6 m-0 p-0">
                                    <label for="titre">Surface</label>
                                    <input type="number" name="surface" min="0" step="0.01" placeholder="Surface occupe par la maison (m2)">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="location">Location<span class="mandatory">*</span></label>
                                <select id="location" name="location">
                                    <option value="">Choisir une ville</option>
                                    <?php foreach ($locations as $location) { ?>
                                        <option value="<?= $location["id_localisation"] ?>"><?= $location["nom_lieu"] ?></option>
                                    <?php } ?>
                                </select>
                            </div>


                            <div class="utilities">
                                <label>Liez votre maison avec google map <a data-target="#link-map" data-toggle="modal"><u class="link-map">Link to google map</u></a></label>
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

                            <div class="form-group">
                                <label for="price">Prix par mois<span class="mandatory">*</span></label>
                                <input type="number" name="price" id="price" min="1" step="0.01" placeholder="Prix du location par mois?">
                            </div>

                            <input type="file" name="images[]" class="custom-file-input" id="file-input" accept="image/*" onchange="preview()" multiple>
                            <input type="hidden" name="img-removed" id="img-removed">
                            <input type="hidden" name="lat" id="lat" value="">
                            <input type="hidden" name="lng" id="lng" value="">
                            <input type="hidden" name="duration" id="duration" value="1">

                            <div class="container-img">
                                <div class="label-container">
                                    <label for="file-input" class="d-flex justify-content-center"><span>Add images<span class="mandatory">*</span> <i class="fa-solid fa-plus"></i></span></label>
                                </div>
                                <div class="images"></div>
                            </div>
                            <button type="submit" id="submit-post" class="d-none">post</button>
                        </form>
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between">
                    <button class="btn btn-light rounded-0" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary rounded-0" type="button" id="submit-make-post">Ajouter</button>
                </div>
                <!-- </form> -->

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
                    <button class="btn btn-primary rounded-0" onclick="setHousePosition()">Definir Localisation</button>
                </div>

            </div>
        </div>
    </div>

    <!-- message box -->
    <div class="modal fade message-modal" id="message" tabindex="-1" role="dialog">
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

    <!-- modal survey -->
    <div class="modal fade" id="survey" tabindex="-1" role="dialog" aria-labelledby="surveyTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered survey-modal" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 id="questionSurvey"><?= $survey["question"]["intitule"] ?></h6>
                    <a type="button" class="closeSurvey" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="form">
                        <?php
                        $type = ($survey["question"]["multi_res"]) ? "checkbox" : "radio";
                        foreach ($survey["reponses"] as $res) { ?>
                            <div class="form-check">
                                <input class="form-check-input check" type="checkbox" name="response" value="<?= $res["id_tag"] ?>">
                                <label class="form-check-label"><?= $res["intitule"] ?></label>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button class="btn btn-outline-secondary rounded-0 next"><span><i>Valider</i></span>
                    </button>
                    <button class="btn btn-primary rounded-0 ignorer"><span>Ignorer</span></button>
                </div>
            </div>
        </div>
    </div>

    <!-- boost advantage -->
    <div class="modal fade" id="boost-advantage" tabindex="-1" role="dialog" aria-labelledby="boost-advantageTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-boost-advantage" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="searchModalLongTitle">Try boosting your house</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row d-flex justify-content-around">
                        <div class="col-md-5 col-sm-6">
                            <div class="boost-box w-100 m-1 pb-3 border mb-3">
                                <div class="boost-header mb-2 bg-secondary">
                                </div>
                                <div class="boost-info border-bottom pl-3 pb-1">
                                    <h3>Publication normale</h3>
                                </div>
                                <div class="advantage-list p-4 border-bottom">
                                    <div class="one-disadvantage pb-2">
                                        <i class="fa-solid fa-xmark"></i> <span class="ml-2">Plus de cibles</span>
                                    </div>
                                    <div class="one-disadvantage pb-2">
                                        <i class="fa-solid fa-xmark"></i> <span class="ml-2">Publication amelioree</span>
                                    </div>
                                    <div class="one-disadvantage pb-2">
                                        <i class="fa-solid fa-xmark"></i> <span class="ml-2">Cible visee</span>
                                    </div>
                                    <div class="one-disadvantage pb-2">
                                        <i class="fa-solid fa-xmark"></i> <span class="ml-2">Augmentation des suggestions</span>
                                    </div>
                                    <div class="pricing pb-2">
                                        <i class="fa-solid fa-money-bill-1"></i> <span class="ml-2">0.0 ar / semaine</span>
                                    </div>
                                </div>
                                <div class="decision pl-4 pt-3">
                                    <button class="btn btn-outline-dark w-20 rounded-0 " id="publish-free">Publish free
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <div class="boost-box w-100 m-1 pb-3 border mb-3">
                                <div class="boost-header mb-2 bg-success">
                                </div>
                                <div class="boost-info border-bottom pl-3 pb-1">
                                    <h3>Publication Booster</h3>
                                </div>
                                <div class="advantage-list p-4 border-bottom">
                                    <div class="one-advantage pb-2">
                                        <i class="fa-solid fa-check"></i> <span class="ml-2">Plus de cibles</span>
                                    </div>
                                    <div class="one-advantage pb-2">
                                        <i class="fa-solid fa-check"></i> <span class="ml-2">Publication amelioree</span>
                                    </div>
                                    <div class="one-advantage pb-2">
                                        <i class="fa-solid fa-check"></i> <span class="ml-2">Cible visee</span>
                                    </div>
                                    <div class="one-advantage pb-2">
                                        <i class="fa-solid fa-check"></i> <span class="ml-2">Augmentation des suggestions</span>
                                    </div>
                                    <div class="pricing pb-2">
                                        <i class="fa-solid fa-money-bill-1"></i> <span class="ml-2">10,000.0 ar / semaine</span>
                                    </div>
                                </div>
                                <div class="decision pl-4 pt-3">
                                    <button class="btn btn-success w-20 rounded-0" id="publish-boost">Publish & Boost
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal">Go back</button>
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
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group mt-0">
                        <label for="account">Carte bancaire</label>
                        <input type="text" name="account" id="account" min="1" placeholder="Votre carte bancaire">
                    </div>

                    <div class="form-group">
                        <label for="duration">Duration</label>
                        <select id="duration" name="duration">
                            <option selected>Pour combien de semaine?</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                </div>

                <div class="modal-footer d-flex justify-content-between">
                    <button class="btn btn-light rounded-0" type="button" data-dismiss="modal">Go back</button>
                    <button class="btn btn-success rounded-0" id="post-boost">Post & Boost</button>
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


    <!-- search modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header search-container">
                    <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
                    <input type="search" name="search" class="search-title" placeholder="Enter something ...">
                    <button type="button" class="btn btn-light add-bg rounded-circle" data-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <span class="multi-text">Multicriteria <i class="fa-solid fa-caret-down" id="caret-down"></i> <i class="fa-solid fa-caret-up" id="caret-left"></i></span>
                    <div class="search-box">
                        <form action="./" method="post">
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
            $("#searchModal").modal("show");
        });

        // $("#searchModal").modal("show");

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
                url: "<?= site_url("NextPublicationController") ?>"
            }).done((data) => {
                $("#pub-container").append(data);
            });
        });

        window.onscroll = function(ev) {
            if ((window.innerHeight + window.scrollY) >= (document.body.offsetHeight)) {
                $.ajax({
                    url: "<?= site_url("NextPublicationController") ?>"
                }).done((data) => {
                    $("#pub-container").append(data);
                });
            }
        };
    </script>

    <script>
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
        });
    </script>
    <!-- survey js -->
    <script>
        $(".ignorer").click(function() {
            $("#survey").modal("hide");
        });
        $(".next").click(function() {
            var radiovalue ;
            var radioValue = $(".check:checkbox:checked");
            if (radioValue) {
                // Send request
                // alert(radioValue[0].value);
                var vals = [];
                for (let i = 0; i < radioValue.length; i++) {
                    vals.push(radioValue[i].value)
                }
                // alert(vals);
                $.ajax({
                    type: 'GET',
                    data: {
                        id_tags: vals
                    },
                    url: "<?= site_url("SurveyController/response") ?>"
                }).done((response) => {
                    alert(response);
                });


                // Get & Set Data
                // let surveyQuestion = $("#questionSurvey");
                // surveyQuestion.empty();
                // surveyQuestion.append("Êtes-vous Tenant ou Leese?");

                // let form = $(".form");
                // form.empty();
                // form.append("<div class='form-check'><input class='form-check-input' type='radio' name='response' value='yes'><label class='form-check-label'>Next Yes</label></div>");
                // form.append("<div class='form-check'><input class='form-check-input' type='radio' name='response' value='no'><label class='form-check-label'>Next No</label></div>");
            } else {
                alert("Please! Do your choice");
            }
        });
    </script>

    <script>
        let site_url = "<?= site_url() ?>";
        let pubIdclient;
        let idPublication;
    </script>

    <script>
        $("#show-discussions").click(() => {

            let discuBox = $("#discussion-box > .drops-menu");
            $(".messageNumber").empty();
            discuBox.empty();

            $.ajax({
                url: "<?= site_url("LastMessageController") ?>"
            }).done((data) => {
                discuBox.append(data);
                $(".messageNumber").text($("#discussion-box > .drops-menu > li").length);
                
                $(".discussion").on("click", (e) => {

                    let target = $(e.target);

                    while (target.attr("pub-id") == null && target.attr("another") == null ) {
                        target = target.parent();
                    }

                    let pubId = target.attr("pub-id");
                    let another = target.attr("another");

                    pubIdclient = another;
                    idPublication = pubId;

                    $.ajax({
                        url: `<?= site_url("MessageController/load_message?client1=".$_SESSION['id_client']."&client2=") ?>${another}&id_pub=${pubId}`
                    }).done((data) => {
                        console.log(data);
                        let messagesBox = $("#onemessage");
                        messagesBox.empty();
                        messagesBox.append(data);
                        $("#message").modal("show");
                    });
                });
            });
        });
    </script>

    <script src="<?= base_url() ?>custom-assets/js/sendMessage.js" ></script>

</body>

</html>