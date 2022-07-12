<?= validation_errors() ?>

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
                <a title="home" href="<?= site_url() ?>"><img src="<?= base_url() ?>custom-assets/logo.png" alt=""></a>
            </div>

            <div class="top-area mt-3 border-0">
                <div class="top-search" id="search">
                    <form>
                        <input type="text" placeholder="Trouver une location">
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
                        <a href="#" title="Messages" class="menu-item" data-ripple="" id="show-discussions" >Messages</a>
                        <div class="dropdowns" id="discussion-box" >
                            <span><span class="messageNumber"></span> New Messages</span>
                            <ul class="drops-menu">

                            </ul>
<!--                            <a href="messages.html" title="" class="more-mesg">view more</a>-->
                        </div>
                    </li>
                </ul>

                <div class="user-img mr-0">
                    <a class="btn btn-light bg-white border-0" style="font-size: 14px;"><?= $_SESSION["first_name"]." ".$_SESSION["last_name"] ?></a>
                </div>

                <ul class="setting-area ml-0">
                    <li>
                        <a href="#" title="Messages" class="btn btn-secondary rounded-circle" style="color: whitesmoke; font-size: 14px;" data-ripple=""><i class="fa-solid fa-caret-down"></i></a>
                        <div class="dropdowns">
                            <span>Option(s)</span>
                            <ul class="drops-menu">
                                <li id="go-out" ><a>Log out</a></li>
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
        <div class="container" id="pub-container">

            <!-- post form -->
            <div class="row align pt-4">
                <div class="central-meta rounded-0 add-shadow">
                    <div class="new-postbox">
                        <figure>
                            <img src="assets/images/resources/admin2.jpg" alt="">
                        </figure>
                        <div class="newpst-input">
                            <textarea rows="1" placeholder="Trouver un locataire..." id="show-post-modal"></textarea>
                            <div class="attachments">
                                <ul>
                                    <li>
                                        <button class="btn btn-primary rounded-0" id="show-make-post">Poster une annonce</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- posts -->
            <!-- helper which diplays the posts -->
            <?= displayPubs($pubs,$publicite); ?>
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


    <!-- modal post house -->
    <div class="modal fade p-0" role="dialog" tabindex="-1" id="make-post">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h4>Publier votre annonce</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa-solid fa-xmark"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="<?= site_url('AjoutPublicationController/ajout_publication') ?>" method="post" enctype='multipart/form-data' id="pub-form">


                            <div class="form-group">
                                <label for="titre">Titre<span class="mandatory">*</span></label>
                                <input type="text" name="titre" id="titre" placeholder="Entrez le titre votre publication" required>
                            </div>

                            <div class="form-group">
                                <label for="titre">Description<span class="mandatory">*</span></label>
                                <input type="text" name="description" id="description" placeholder="Veuillez decrire la maison" required>
                            </div>

                            <div class="utilities">
                                <label>Veuillez selectionnez les équipements dont dispose de la maison</label>
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
                                    <label for="titre">Pièces<span class="mandatory">*</span></label>
                                    <input type="number" name="room" id="room" min="1" placeholder="Combien de pièces ?" required>
                                </div>

                                <div class="form-group col-md-6 m-0 p-0">
                                    <label for="titre">Surface<span class="mandatory">*</span></label>
                                    <input type="number" name="surface" min="0" step="0.01" placeholder="Surface occupe par la maison (m2)" required>
                                </div>
                            </div>

                            <div class="row form-group ml-0">
                                <label for="location">Localisation</label>
                                <select style="width: 100%" name="location" class="custom-select form-control" id="quartiers-publier">
                                    <option value="">Choisir un quartier</option>
                                    <?php foreach ($locations as $location) { ?>
                                        <option value="<?= $location["id_localisation"] ?>"><?= $location["nom_lieu"] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <?php if($_SESSION["abonnement"]) { ?>
                                <div class="utilities">
                                    <label>Liez votre maison avec google map <a data-target="#link-map" data-toggle="modal"><u class="link-map">Link to google map</u></a></label>
                                </div>
                            <?php } ?>

                            <div>
                                <label>Ajoutez des <a><u class="underline-custom">#tag</u></a> autant que possible pour
                                    ameliorez votre publication</label>
                                <div class="row p-0 m-0">
                                    <select style="width: 100%" name="tags[]" id="tags-publier" multiple="multiple">
                                        <?php for ($i = 0; $i < count($tags); $i++) { ?>
                                            <option value="<?= $tags[$i]["id_tag"] ?>"><?= $tags[$i]["nom_tag"] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="price">Loyer<span class="mandatory">*</span></label>
                                <input type="number" name="price" id="price" min="1" step="0.01" placeholder="Prix du location par mois?" required>
                            </div>

                            <input type="file" name="images[]" class="custom-file-input" id="file-input" accept="image/*" onchange="preview()" multiple required>
                            <input type="hidden" name="img-removed" id="img-removed">
                            <input type="hidden" name="lat" id="lat" value="">
                            <input type="hidden" name="lng" id="lng" value="">
                            <input type="hidden" name="duration" id="duration" >

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
                        <span aria-hidden="true"><i class="fa-solid fa-xmark"></i></span>
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
                    <h5 class="modal-title" id="user">Client</h5>
                    <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <h6><span id="titre-message">Andoharanofotsy Room</span></h6>
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
            <div class="modal-content form">
                <?= displayNextQuestion($survey) ?>
            </div>
        </div>
    </div>

    <!-- boost advantage -->
    <div class="modal fade" id="boost-advantage" tabindex="-1" role="dialog" aria-labelledby="boost-advantageTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-boost-advantage" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="searchModalLongTitle">Voulez-vous booster votre publication ?</h5>
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
                                    <button class="btn btn-outline-dark w-20 rounded-0 " id="publish-free">Continuer gratuitement
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
                                        <i class="fa-solid fa-money-bill-1"></i> <span class="ml-2">15,000.0 ar / semaine</span>
                                    </div>
                                </div>
                                <div class="decision pl-4 pt-3">
                                    <button class="btn btn-success w-20 rounded-0" id="publish-boost">Booster maintenant
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- abonnement advantage -->
    <div class="modal fade" id="abonnement" tabindex="-1" role="dialog" aria-labelledby="abonnementTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-abonnement" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="searchModalLongTitle">Souscrire à un abonnement</h5>
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
                                    <h3>Gratuit</h3>
                                </div>
                                <div class="advantage-list p-4 border-bottom">
                                    <div class="one-disadvantage pb-2">
                                        <i class="fa-solid fa-xmark"></i> <span class="ml-2">5 tags maximum</span>
                                    </div>
                                    <div class="one-disadvantage pb-2">
                                        <i class="fa-solid fa-xmark"></i> <span class="ml-2">Publicite</span>
                                    </div>
                                    <div class="one-disadvantage pb-2">
                                        <i class="fa-solid fa-xmark"></i> <span class="ml-2">Sans google map</span>
                                    </div>
                                    <div class="pricing pb-2">
                                        <i class="fa-solid fa-money-bill-1"></i> <span class="ml-2">0.0 ar / semaine</span>
                                    </div>
                                </div>
                                <div class="decision pl-4 pt-3">
                                    <button class="btn btn-outline-dark w-20 rounded-0 " id="continue-free">Continuer gratuitement
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <div class="boost-box w-100 m-1 pb-3 border mb-3">
                                <div class="boost-header mb-2 bg-success">
                                </div>
                                <div class="boost-info border-bottom pl-3 pb-1">
                                    <h3>Abonnement</h3>
                                </div>
                                <div class="advantage-list p-4 border-bottom">
                                    <div class="one-advantage pb-2">
                                        <i class="fa-solid fa-check"></i> <span class="ml-2">Plus de tags</span>
                                    </div>
                                    <div class="one-advantage pb-2">
                                        <i class="fa-solid fa-check"></i> <span class="ml-2">Sans publicite</span>
                                    </div>
                                    <div class="one-advantage pb-2">
                                        <i class="fa-solid fa-check"></i> <span class="ml-2">Avec google map</span>
                                    </div>
                                    <div class="pricing pb-2">
                                        <i class="fa-solid fa-money-bill-1"></i> <span class="ml-2">20,000.0 ar / mois</span>
                                    </div>
                                </div>
                                <div class="decision pl-4 pt-3">
                                    <button class="btn btn-success w-20 rounded-0" id="sabonner">S'abonner
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- abonnement payment -->
    <div class="modal fade p-0" role="dialog" tabindex="-1" id="pay-abonnement">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5>Entrez vos informations pour confirmez votre abonnement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa-solid fa-xmark"></i></span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="<?= site_url("AbonnementController/makeAbonnement") ?>" method="POST" >
                        <div class="form-group mt-0">
                            <label for="account">Carte bancaire</label>
                            <input type="text" name="account" id="account" min="1" placeholder="Votre carte bancaire">
                        </div>
                        <input type="submit" value="abonnement" class="d-none" id="go-abonnement" >
                    </form>
                </div>

                <div class="modal-footer d-flex justify-content-between">
                    <button class="btn btn-light rounded-0" type="button" data-dismiss="modal">Go back</button>
                    <button class="btn btn-success rounded-0" id="pay_abonnement_btn">S'abonner</button>
                </div>
            </div>
        </div>
    </div>


    <!-- boost payment -->
    <div class="modal fade p-0" role="dialog" tabindex="-1" id="pay-boost">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5>Veuillez saisir vos informations pour confirmer la transaction</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa-solid fa-xmark"></i></span>
                    </button>
                </div>

                <div class="modal-body">
                    <div>
                        <h4>Montant de la transaction :</h4>
                        <div><span id="amount">0</span> x Semaines <span style="float: right">15 000 Ar</span> </div>
                        <div>Total : <span style="float: right"><span id="total">0</span> Ar</span></div>
                    </div>
                    <div class="form-group mt-0">
                        <label for="account">Carte bancaire</label>
                        <input type="text" name="account" id="account" min="1" placeholder="Votre carte bancaire">
                    </div>

                    <div class="form-group">
                        <label for="display-duration">Durée</label>
                        <select id="display-duration" name="duration" onchange="changeAmount()">
                            <option selected>Pour combien de semaine?</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>

                </div>

                <div class="modal-footer d-flex justify-content-between">
                    <button class="btn btn-light rounded-0" type="button" data-dismiss="modal">Annuler</button>
                    <button class="btn btn-success rounded-0" id="post-boost">Booster</button>
                </div>
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
                        <input type="search" name="criteria" class="search-title" id="search-criteria" placeholder="Saisissez quelque chose...">
                        <button type="button" class="btn btn-light add-bg rounded-circle" data-dismiss="modal" aria-label="Close">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                        <input type="submit" value="Search" id="go-search" class="d-none" >
                    </div>
                </form>

                <div class="modal-body">
                    <span class="multi-text">Plus d'options <i class="fa-solid fa-caret-down" id="caret-down"></i> <i class="fa-solid fa-caret-up" id="caret-left"></i></span>
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
                            <input type="submit" value="Rechercher" class="btn btn-primary rounded-0">
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

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDD7GRQJx0_fNz6eeUSJjf7Yw5_6s0OEaA&libraries=geometry,places"></script>

    <script src="<?= base_url() ?>custom-assets/js/logOut.js"></script>
    <script src="<?= base_url() ?>custom-assets/js/map.js"></script>
    <script src="<?= base_url() ?>custom-assets/js/modals.js"></script>
    <script src="<?= base_url() ?>custom-assets/js/image-preview.js"></script>
    <script src="<?= base_url() ?>custom-assets/js/message.js"></script>

    <script>

        <?php if (!$_SESSION["abonnement"]) { ?>
            $("#abonnement").modal("show");
        <?php } ?>

        $("#sabonner").click(() => {
            $("#abonnement").modal("hide");
            $("#pay-abonnement").modal("show");
        });

        $("#pay_abonnement_btn").click(()=>{
            $("#go-abonnement").trigger("click");
        });

        $("#continue-free").click(() => {
            $("#abonnement").modal("hide");
        });

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        let surveyResponseUrl = "<?= site_url("SurveyController/response") ?>";
    </script>

    <!-- survey js // need survey ResponseUrl -->
    <?php if($survey != null) { ?>
            <script src="<?= base_url() ?>custom-assets/js/survey.js"></script>         
    <?php } ?>

    <script src="<?= base_url() ?>custom-assets/js/boost.js"></script>
    <script src="<?= base_url() ?>custom-assets/js/search.js"></script>

    <!--  show modal post  -->
    <script>
        $("#show-post-modal").click(() => {
            $("#make-post").modal("show");
        });
    </script>

    <!--  infinite scroll  -->
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
        let urlNotif = "<?= site_url("LastNotificationController") ?>";
    </script>

    <!--  need the url notif to be set  -->
    <script src="<?= base_url() ?>custom-assets/js/notif.js"></script>

    <script>
        let site_url = "<?= site_url() ?>";
        let pubIdclient;
        let idPublication;
        let lastMessageUrl = "<?= site_url("LastMessageController") ?>";
        let loadingUrlBase = "<?= site_url("MessageController/load_message?client1=".$_SESSION['id_client']."&client2=") ?>";
    </script>

    <!--  need site_url, pubIdClient, idPublication, lastMesageUrl, loadingUrlBase -->
    <script src="<?= base_url() ?>custom-assets/js/message-from-notif.js" ></script>

    <script src="<?= base_url() ?>custom-assets/js/sendMessage.js" ></script>

    <!-- select2-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(function() {
            $("#quartiers").select2({dropdownAutoWidth : true, dropdownParent: "#searchModal"});

            $("#quartiers-publier").select2({
                dropdownAutoWidth : true,
                dropdownParent: "#make-post"
            });

            $("#tags").select2({dropdownAutoWidth : true, dropdownParent: "#searchModal"});

            $("#tags-publier").select2({
                dropdownAutoWidth : true,
                dropdownParent: "#make-post",
                maximumSelectionLength: <?= $_SESSION['abonnement'] ? 10 : 5 ?>
            });
        });
    </script>
    <!--    Changement automatique du montant de boost -->
    <script>
        function changeAmount() {
            let amount = $("#display-duration").val();
            $("#amount").text(amount)
            let price = 15000;
            $("#total").text((amount*price).toLocaleString("FR"));
        }
    </script>
    <!-- jQuery validate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
</body>

</html>