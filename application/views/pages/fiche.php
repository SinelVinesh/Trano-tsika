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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>

    <link rel="stylesheet" href="<?= base_url() ?>custom-assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>custom-assets/css/post-css.css">
    <link rel="stylesheet" href="<?= base_url() ?>custom-assets/css/map.css">
    <link rel="stylesheet" href="<?= base_url() ?>custom-assets/css/message.css">

    <link rel="stylesheet" href="<?= base_url() ?>custom-assets/css/fiche.css">

</head>

<body>

    <div class="theme-layout">
        <!-- topbar -->
        <div class="topbar stick d-flex justify-content-between">
            <div class="logo">
                <a title="" href="newsfeed.html"><img src="<?= base_url() ?>/custom-assets/logo.png" alt=""></a>
            </div>

            <div class="top-area mt-3 border-0">
                <ul class="setting-area">
                    <li>
                        <a href="#" title="Notification" data-ripple="" class="menu-item">
                            Notifications
                        </a>
                        <div class="dropdowns">
                            <span>4 New Notifications</span>
                            <ul class="drops-menu">
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="<?= base_url() ?>assets/images/resources/thumb-1.jpg" alt="">
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
                                        <img src="<?= base_url() ?>assets/images/resources/thumb-2.jpg" alt="">
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
                                        <img src="<?= base_url() ?>assets/images/resources/thumb-3.jpg" alt="">
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
                                        <img src="<?= base_url() ?>assets/images/resources/thumb-4.jpg" alt="">
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
                                        <img src="<?= base_url() ?>assets/images/resources/thumb-5.jpg" alt="">
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
                        <a href="#" title="Messages" class="menu-item" data-ripple="">Messages</a>
                        <div class="dropdowns">
                            <span>5 New Messages</span>
                            <ul class="drops-menu">
                                <li>
                                    <a class="discussion" discussion-id="1">
                                        <img src="<?= base_url() ?>assets/images/resources/thumb-1.jpg" alt="">
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
                                        <img src="<?= base_url() ?>assets/images/resources/thumb-2.jpg" alt="">
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
                                        <img src="<?= base_url() ?>assets/images/resources/thumb-3.jpg" alt="">
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
                                        <img src="<?= base_url() ?>assets/images/resources/thumb-4.jpg" alt="">
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
                                        <img src="<?= base_url() ?>assets/images/resources/thumb-5.jpg" alt="">
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
            <div class="fiche m-4">
                <div class="fiche-info">
                    <div class="titre">
                        <h1><?= $pub["titre"] ?></h1>
                    </div>
                    <div class="utilities-list">
                        <div class="row mt-4">
                            <div class="col-md-3 mb-2">
                                <i class="fa-solid fa-location-dot"></i> Andoharanofotsy
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
                                <button data-toggle="modal" class="btn btn-primary btn-color ml-2" data-target="#message" id="contact-owner">Contact
                                    <i class="fa fa-paper-plane">
                                    </i>
                                </button>
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

            <?php if ($user_like == 1) {  ?>
                <button class="btn btn-info btn-xs like-button"  id="Like">
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

            <div class="row mt-3 border-0">
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
                    <h5 class="modal-title" id="messageTitle"><?= $pub["first_name"] . " " . $pub["last_name"] ?></h5>
                    <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <h6><?= $pub["titre"] ?></h6>
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


    <script>
        let commentArea = $("#text-area-comment");
        let commentTemplate = (text) => `
            <li>
                <div class="we-comment">
                    <div class="coment-head">
                        <h5>
                            <a href="time-line.html" title="">
                                <?= $_SESSION["first_name"] . " " . $_SESSION["last_name"] ?>
                            </a>
                        </h5>
                        <span>a l'instant</span>
                        <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                    </div>
                    <p>${text}</p>
                </div>
            </li>`;

        commentArea.keyup((e) => {
            if (e.keyCode === 13) {
                let curVal = commentArea.val();
                $("#comment li:last").before(commentTemplate(curVal));
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

        function initialize() {
            let pubPos = new google.maps.LatLng(<?= $pub['pos']['lat'] ?>, <?= $pub['pos']['lng'] ?>);

            var mapOptions = {
                zoom: 12,
                center: pubPos
            };


            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

            new google.maps.Marker({
                position: pubPos,
                map: map
            });

            let marker = new google.maps.Marker

        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <script src="<?= base_url() ?>custom-assets/js/map.js"></script>
    <script src="<?= base_url() ?>custom-assets/js/modals.js"></script>
    <script src="<?= base_url() ?>custom-assets/js/image-preview.js"></script>
    <script src="<?= base_url() ?>custom-assets/js/message.js"></script>

    <script>
        let site_url = "<?= site_url() ?>";
        let pubIdclient = "<?= $pub["id_client"] ?>";
        let idPublication = "<?= $pub["id_publication"] ?>";
    </script>

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

    <script src="<?= base_url() ?>custom-assets/js/sendMessage.js"></script>

</body>

</html>