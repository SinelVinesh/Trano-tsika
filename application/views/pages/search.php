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
    <link rel="stylesheet" href="<?= base_url() ?>custom-assets/css/style-post-message.css">
    <link rel="stylesheet" href="<?= base_url() ?>custom-assets/css/search.css">
    <!--    select2-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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
                <a title="home" href="<?= site_url() ?>"><img src="<?= base_url() ?>custom-assets/logo.png" alt=""></a>
            </div>

            <div class="top-area mt-3 border-0">

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


                <ul class="setting-area ml-0">
                    <li>
                        <a href="#" title="Messages" class="btn btn-secondary rounded-circle" style="color: whitesmoke; font-size: 14px;" data-ripple=""><i class="fa-solid fa-caret-down"></i></a>
                        <div class="dropdowns">
                            <span>Option(s)</span>
                            <ul class="drops-menu">
                                <li id="go-mine"><a>Mes publications</a></li>
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

        <form action="<?= site_url("ClientController") ?>" method="get" class="d-none">
            <button type="submit" id="mine">mes publications</button>
        </form>


        <!--  main content  -->
        <div class="container">

            <div class="modal-content mt-4 mb-3">
                <form action="<?= site_url() ?>/SearchController/simpleSearch" method="get">
                    <div class="modal-header search-container">
                        <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
                        <input type="search" name="criteria" class="search-title" id="search-criteria" placeholder="Enter something ...">
                        <button type="button" class="btn btn-light add-bg rounded-circle" data-dismiss="modal" aria-label="Close">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                        <input type="submit" value="Search" id="go-search" class="d-none">
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

        <div class="container" id="pub-container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Resultat(s) <?= $len  ?> </h4>
                </div>
            </div>
            <?php
            if ($pubs != null) {
                echo (displayPubs($pubs, $publicite));
            }
            ?>
        </div>
        <button class="btn-view btn-load-more mb-4" id="load-next">Load More</button>
    </div>

    <!-- modal survey -->
    <div class="modal fade" id="survey" tabindex="-1" role="dialog" aria-labelledby="surveyTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered survey-modal" role="document">
            <div class="modal-content form">
                <?= displayNextQuestion($survey) ?>
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


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="<?= base_url() ?>assets/js/main.min.js"></script>
    <script src="<?= base_url() ?>assets/js/script.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDD7GRQJx0_fNz6eeUSJjf7Yw5_6s0OEaA&libraries=geometry,places"></script>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= base_url() ?>custom-assets/js/search.js"></script>

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
    <script src="<?= base_url() ?>custom-assets/js/logOut.js"></script>
    <script src="<?= base_url() ?>custom-assets/js/sendMessage.js"></script>


    <script>
        $("#load-next").click(() => {
            $.ajax({
                url: "<?= site_url("SearchController/nextResult") ?>"
            }).done((data) => {
                $("#pub-container").append(data);
            });
        });
    </script>

    <!-- select2-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(function() {
            $("#quartiers").select2({
                dropdownAutoWidth: true
            });
            $("#tags").select2({
                dropdownAutoWidth: true
            });
        })
    </script>
</body>

</html>