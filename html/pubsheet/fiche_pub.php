<?php
$id = $_GET['id'];
echo $id;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Fiche</title>
    <link rel="icon" href="../images/fav.png" type="image/png" sizes="16x16">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css">
    <link rel="stylesheet" href="../css/main.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/color.css">
    <link rel="stylesheet" href="../css/responsive.css">

    <style>
        .modal {
            background-color: rgba(0, 0, 0, 0.3);
        }

        .modal-backdrop {
            position: relative;
            display: none;
        }
    </style>

</head>

<body>
    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">

        <div class="responsive-header">
            <div class="mh-head first Sticky">
                <span class="mh-btns-left">
                    <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
                </span>
                <span class="mh-text">
                    <a href="newsfeed.html" title=""><img src="../images/logo2.png" alt=""></a>
                </span>
                <span class="mh-btns-right">
                    <a class="fa fa-sliders" href="#shoppingbag"></a>
                </span>
            </div>
            <div class="mh-head second">
                <form class="mh-form">
                    <input placeholder="search" />
                    <a href="#/" class="fa fa-search"></a>
                </form>
            </div>
            <nav id="menu" class="res-menu">
                <ul>
                    <li><span>Home</span>
                        <ul>
                            <li><a href="index-2.html" title="">Home Social</a></li>
                            <li><a href="index2.html" title="">Home Social 2</a></li>
                            <li><a href="index-company.html" title="">Home Company</a></li>
                            <li><a href="landing.html" title="">Login page</a></li>
                            <li><a href="logout.html" title="">Logout Page</a></li>
                            <li><a href="newsfeed.html" title="">news feed</a></li>
                        </ul>
                    </li>
                    <li><span>Time Line</span>
                        <ul>
                            <li><a href="time-line.html" title="">timeline</a></li>
                            <li><a href="timeline-friends.html" title="">timeline friends</a></li>
                            <li><a href="timeline-groups.html" title="">timeline groups</a></li>
                            <li><a href="timeline-pages.html" title="">timeline pages</a></li>
                            <li><a href="timeline-photos.html" title="">timeline photos</a></li>
                            <li><a href="timeline-videos.html" title="">timeline videos</a></li>
                            <li><a href="fav-page.html" title="">favourit page</a></li>
                            <li><a href="groups.html" title="">groups page</a></li>
                            <li><a href="page-likers.html" title="">Likes page</a></li>
                            <li><a href="people-nearby.html" title="">people nearby</a></li>


                        </ul>
                    </li>
                    <li><span>Account Setting</span>
                        <ul>
                            <li><a href="create-fav-page.html" title="">create fav page</a></li>
                            <li><a href="edit-account-setting.html" title="">edit account setting</a></li>
                            <li><a href="edit-interest.html" title="">edit-interest</a></li>
                            <li><a href="edit-password.html" title="">edit-password</a></li>
                            <li><a href="edit-profile-basic.html" title="">edit profile basics</a></li>
                            <li><a href="edit-work-eductation.html" title="">edit work educations</a></li>
                            <li><a href="messages.html" title="">message box</a></li>
                            <li><a href="inbox.html" title="">Inbox</a></li>
                            <li><a href="notifications.html" title="">notifications page</a></li>
                        </ul>
                    </li>
                    <li><span>forum</span>
                        <ul>
                            <li><a href="forum.html" title="">Forum Page</a></li>
                            <li><a href="forums-category.html" title="">Fourm Category</a></li>
                            <li><a href="forum-open-topic.html" title="">Forum Open Topic</a></li>
                            <li><a href="forum-create-topic.html" title="">Forum Create Topic</a></li>
                        </ul>
                    </li>
                    <li><span>Our Shop</span>
                        <ul>
                            <li><a href="shop.html" title="">Shop Products</a></li>
                            <li><a href="shop-masonry.html" title="">Shop Masonry Products</a></li>
                            <li><a href="shop-single.html" title="">Shop Detail Page</a></li>
                            <li><a href="shop-cart.html" title="">Shop Product Cart</a></li>
                            <li><a href="shop-checkout.html" title="">Product Checkout</a></li>
                        </ul>
                    </li>
                    <li><span>Our Blog</span>
                        <ul>
                            <li><a href="blog-grid-wo-sidebar.html" title="">Our Blog</a></li>
                            <li><a href="blog-grid-right-sidebar.html" title="">Blog with R-Sidebar</a></li>
                            <li><a href="blog-grid-left-sidebar.html" title="">Blog with L-Sidebar</a></li>
                            <li><a href="blog-masonry.html" title="">Blog Masonry Style</a></li>
                            <li><a href="blog-list-wo-sidebar.html" title="">Blog List Style</a></li>
                            <li><a href="blog-list-right-sidebar.html" title="">Blog List with R-Sidebar</a></li>
                            <li><a href="blog-list-left-sidebar.html" title="">Blog List with L-Sidebar</a></li>
                            <li><a href="blog-detail.html" title="">Blog Post Detail</a></li>
                        </ul>
                    </li>
                    <li><span>Portfolio</span>
                        <ul>
                            <li><a href="portfolio-2colm.html" title="">Portfolio 2col</a></li>
                            <li><a href="portfolio-3colm.html" title="">Portfolio 3col</a></li>
                            <li><a href="portfolio-4colm.html" title="">Portfolio 4col</a></li>
                        </ul>
                    </li>
                    <li><span>Support & Help</span>
                        <ul>
                            <li><a href="support-and-help.html" title="">Support & Help</a></li>
                            <li><a href="support-and-help-detail.html" title="">Support & Help Detail</a></li>
                            <li><a href="support-and-help-search-result.html" title="">Support & Help Search Result</a>
                            </li>
                        </ul>
                    </li>
                    <li><span>More pages</span>
                        <ul>
                            <li><a href="careers.html" title="">Careers</a></li>
                            <li><a href="career-detail.html" title="">Career Detail</a></li>
                            <li><a href="404.html" title="">404 error page</a></li>
                            <li><a href="404-2.html" title="">404 Style2</a></li>
                            <li><a href="faq.html" title="">faq's page</a></li>
                            <li><a href="insights.html" title="">insights</a></li>
                            <li><a href="knowledge-base.html" title="">knowledge base</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html" title="">about</a></li>
                    <li><a href="about-company.html" title="">About Us2</a></li>
                    <li><a href="contact.html" title="">contact</a></li>
                    <li><a href="contact-branches.html" title="">Contact Us2</a></li>
                    <li><a href="widgets.html" title="">Widgts</a></li>
                </ul>
            </nav>
            <nav id="shoppingbag">
                <div>
                    <div class="">
                        <form method="post">
                            <div class="setting-row">
                                <span>use night mode</span>
                                <input type="checkbox" id="nightmode" />
                                <label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Notifications</span>
                                <input type="checkbox" id="switch2" />
                                <label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Notification sound</span>
                                <input type="checkbox" id="switch3" />
                                <label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>My profile</span>
                                <input type="checkbox" id="switch4" />
                                <label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Show profile</span>
                                <input type="checkbox" id="switch5" />
                                <label for="switch5" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                        </form>
                        <h4 class="panel-title">Account Setting</h4>
                        <form method="post">
                            <div class="setting-row">
                                <span>Sub users</span>
                                <input type="checkbox" id="switch6" />
                                <label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>personal account</span>
                                <input type="checkbox" id="switch7" />
                                <label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Business account</span>
                                <input type="checkbox" id="switch8" />
                                <label for="switch8" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Show me online</span>
                                <input type="checkbox" id="switch9" />
                                <label for="switch9" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Delete history</span>
                                <input type="checkbox" id="switch10" />
                                <label for="switch10" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Expose author name</span>
                                <input type="checkbox" id="switch11" />
                                <label for="switch11" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div><!-- responsive header -->

        <div class="topbar stick">
            <div class="logo">
                <a title="" href="newsfeed.html"><img src="../images/logo.png" alt=""></a>
            </div>

            <div class="top-area">
                <div class="top-search">
                    <form method="post" class="">
                        <input type="text" placeholder="Search Friend">
                        <button data-ripple><i class="ti-search"></i></button>
                    </form>
                </div>
                <ul class="setting-area">
                    <li><a href="newsfeed.html" title="Home" data-ripple=""><i class="ti-home"></i></a></li>
                    <li>
                        <a href="#" title="Notification" data-ripple="">
                            <i class="ti-bell"></i><span>20</span>
                        </a>
                        <div class="dropdowns">
                            <span>4 New Notifications</span>
                            <ul class="drops-menu">
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="../images/resources/thumb-1.jpg" alt="">
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
                                        <img src="../images/resources/thumb-2.jpg" alt="">
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
                                        <img src="../images/resources/thumb-3.jpg" alt="">
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
                                        <img src="../images/resources/thumb-4.jpg" alt="">
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
                                        <img src="../images/resources/thumb-5.jpg" alt="">
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
                        <a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>12</span></a>
                        <div class="dropdowns">
                            <span>5 New Messages</span>


                            <ul class="drops-menu">
                                <?php for ($i = 1; $i <= 8; $i++) { ?>
                                    <li>
                                        <a data-toggle="modal" data-target="#exampleModalLong<?php echo $i ?>" id="mp<?php echo $i; ?>" discussion-id="<?php echo $i; ?>">
                                            <img src="../images/resources/thumb-1.jpg" alt="">
                                            <div class="mesg-meta">
                                                <h6>Jessica Lauren <?php echo $i ?></h6>
                                                <span>Get the last message</span>
                                            </div>
                                        </a>
                                        <span class="tag green">New</span>
                                        <?php include '../message/discussion.php' ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#" title="Languages" data-ripple=""><i class="fa fa-globe"></i></a>
                        <div class="dropdowns languages">
                            <a href="#" title=""><i class="ti-check"></i>English</a>
                            <a href="#" title="">Arabic</a>
                            <a href="#" title="">Dutch</a>
                            <a href="#" title="">French</a>
                        </div>
                    </li>
                </ul>
                <div class="user-img">
                    <img src="../images/resources/admin.jpg" alt="">
                    <span class="status f-online"></span>
                    <div class="user-setting">
                        <a href="#" title=""><span class="status f-online"></span>online</a>
                        <a href="#" title=""><span class="status f-away"></span>away</a>
                        <a href="#" title=""><span class="status f-off"></span>offline</a>
                        <a href="#" title=""><i class="ti-user"></i> view profile</a>
                        <a href="#" title=""><i class="ti-pencil-alt"></i>edit profile</a>
                        <a href="#" title=""><i class="ti-target"></i>activity log</a>
                        <a href="#" title=""><i class="ti-settings"></i>account setting</a>
                        <a href="#" title=""><i class="ti-power-off"></i>log out</a>
                    </div>
                </div>
                <span class="ti-menu main-menu" data-ripple=""></span>
            </div>
        </div><!-- topbar -->


        <section>
            <div class="gap2 gray-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row merged20 " id="page-contents">
                                <div class="col-md-10 col-lg-8 m-auto">
                                    <div class="central-meta item">

                                        <div class="user-post">
                                            <div class="friend-info">
                                                <div class="friend-name">
                                                    <h2>Titre <?php echo $id; ?> <button class="btn btn-outline-info"><a style="font-size: 15px;" data-toggle="modal" data-target="#modalContact<?php echo $id ?>" id="mpc<?php echo $id; ?>" discussion-idc="<?php echo $id; ?>"><strong style="color: #088DCD; text-decoration: underline;"> Contact <i class="fa fa-paper-plane"></i></strong></a></button></h2>
                                                    <?php include 'contact.php' ?>
                                                </div>
                                                <div class="post-meta">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <div class="description">
                                                                <p><i class="fa fa-map-marker"></i> Location</p>
                                                                <p><i class="fa fa-door-open"></i> Room</p>
                                                                <p><i class="fa fa-dollar"></i> 1,200,000.0 Ar</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-9" style="font-size: 15px">
                                                            <div class="description">
                                                                <p style="color: black; font-size: 17px">
                                                                    <i class="fa fa-check-square-o"></i> Water &NonBreakingSpace;&NonBreakingSpace;&NonBreakingSpace;
                                                                    <i class="fa fa-check-square-o"></i> Water &NonBreakingSpace;&NonBreakingSpace;&NonBreakingSpace;
                                                                    <i class="fa fa-check-square-o"></i> Water &NonBreakingSpace;&NonBreakingSpace;&NonBreakingSpace;
                                                                    <i class="fa fa-check-square-o"></i> Water &NonBreakingSpace;&NonBreakingSpace;&NonBreakingSpace;
                                                                </p>
                                                                <p style="color: black; font-size: 17px">
                                                                    <i class="fa fa-check-square-o"></i> Water &NonBreakingSpace;&NonBreakingSpace;&NonBreakingSpace;
                                                                    <i class="fa fa-check-square-o"></i> Water &NonBreakingSpace;&NonBreakingSpace;&NonBreakingSpace;
                                                                    <i class="fa fa-check-square-o"></i> Water &NonBreakingSpace;&NonBreakingSpace;&NonBreakingSpace;
                                                                    <i class="fa fa-check-square-o"></i> Water &NonBreakingSpace;&NonBreakingSpace;&NonBreakingSpace;
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row friend-info">
                                                        <figure>
                                                            <img src="../images/resources/friend-avatar10.jpg" alt="">
                                                        </figure>
                                                        <div class="friend-name">
                                                            <h6>Client <?php echo $id; ?></h6>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="description" style="background-color: lightgrey; border-radius: 5px">
                                                                <p style="color: black; font-size: 15px;">
                                                                    World's most beautiful car in Curabitur test drive booking the most
                                                                    beatuiful car available in america and the saudia
                                                                    arabia, you can book your test drive by our official
                                                                    website
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="description">
                                                                <p>
                                                                    <button style="border-radius: 25px;" title="">#city</button>
                                                                    <button style="border-radius: 25px;" title="">#lowprice</button>
                                                                    <button style="border-radius: 25px;" title="">#appartement</button>
                                                                    <span class="like" data-toggle="tooltip" title="like" style="color: red"> <i class="ti-heart"></i> <ins>2.2k</ins><span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 overflow-auto" style="height: 330px">
                                                            <?php for ($i = 1; $i <= 5; $i++) { ?>
                                                                <img src="../images/resources/user-post.jpg" alt="" data-toggle="modal" data-target="#modalPhoto<?php echo $i ?>" id="photo<?php echo $i; ?>" photo-id="<?php echo $i; ?>">
                                                                <div class="modal fade" id="modalPhoto<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="modalPhotoTitle" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <img src="../images/resources/user-post.jpg" alt="" height="100">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p></p>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="post-map">
                                                                <div class="nearby-map">
                                                                    <div id="map-canvas"></div>
                                                                </div>
                                                            </div><!-- near by map -->
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="coment-area">
                                                                <h6>Comments <i class="fa fa-comments"></i></h6>
                                                                <ul class="we-comet" id="comment<?php echo $id; ?>">
                                                                    <li>
                                                                        <div class="comet-avatar">
                                                                            <img src="../images/resources/comet-1.jpg" alt="">
                                                                        </div>
                                                                        <div class="we-comment">
                                                                            <div class="coment-head">
                                                                                <h5><a href="time-line.html" title="">Jason
                                                                                        borne</a></h5>
                                                                                <span>1 year ago</span>
                                                                                <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                            </div>
                                                                            <p>we are working for the dance and sing songs. this car
                                                                                is very awesome for the youngster. please vote this
                                                                                car and like our post</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="comet-avatar">
                                                                            <img src="../images/resources/comet-1.jpg" alt="">
                                                                        </div>
                                                                        <div class="we-comment">
                                                                            <div class="coment-head">
                                                                                <h5><a href="time-line.html" title="">Jason
                                                                                        borne</a></h5>
                                                                                <span>1 year ago</span>
                                                                                <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                            </div>
                                                                            <p>we are working for the dance and sing songs. this car
                                                                                is very awesome for the youngster. please vote this
                                                                                car and like our post</p>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <p class="post-comment">
                                                                <div class="post-comt-box">
                                                                    <form method="post">
                                                                        <div class="row">
                                                                            <div class="col-11 text-box">
                                                                                <textarea placeholder="your comment ..." id="corpscomment<?php echo $id ?>"></textarea>
                                                                            </div>
                                                                            <div class="col-1" style="margin-top: 3px;">
                                                                                <span id="addcomment<?php echo $id ?>" style="font-size: 30px; margin-left: 25px;"><i class="fa fa-comment"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- centerl meta -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bottombar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="copyright"><a target="_blank" href="https://www.templateshub.net">Templates
                                Hub</a></span>
                        <i><img src="../images/credit-cards.png" alt=""></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="side-panel">
        <h4 class="panel-title">General Setting</h4>
        <form method="post">
            <div class="setting-row">
                <span>use night mode</span>
                <input type="checkbox" id="nightmode1" />
                <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Notifications</span>
                <input type="checkbox" id="switch22" />
                <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Notification sound</span>
                <input type="checkbox" id="switch33" />
                <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>My profile</span>
                <input type="checkbox" id="switch44" />
                <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Show profile</span>
                <input type="checkbox" id="switch55" />
                <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
            </div>
        </form>
        <h4 class="panel-title">Account Setting</h4>
        <form method="post">
            <div class="setting-row">
                <span>Sub users</span>
                <input type="checkbox" id="switch66" />
                <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>personal account</span>
                <input type="checkbox" id="switch77" />
                <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Business account</span>
                <input type="checkbox" id="switch88" />
                <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Show me online</span>
                <input type="checkbox" id="switch99" />
                <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Delete history</span>
                <input type="checkbox" id="switch101" />
                <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Expose author name</span>
                <input type="checkbox" id="switch111" />
                <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
            </div>
        </form>
    </div>

    <script src="../js/main.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/map-init.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            let i = <?php echo $id ?>;
            $("#mpc" + i).click(function() {
                var iddiscussion = $("#mpc" + i).attr("discussion-idc");
                $("#modalContact" + i).modal("show");
            });
            $(".close" + i).click(function() {
                $("#modalContact" + i).modal("hide");
            });
            $("#sendcontact" + i).click(function() {
                var msg = $.trim($("#corpscontact" + i).val());
                if (msg != "") {
                    $("#onemessagecontact" + i).append("<li class='you'><div class='chat-thumb'><img src='../images/resources/chatlist1.jpg' alt=''></div><div class='notification-event'><span class='chat-message-item'>" + msg + "</span><span class='notification-date'><time datetime='2004-07-24T18:18' class='entry-date updated'>Yesterday at 8:10pm</time></span></div></li>");
                    $("#corpscontact" + i).val("");
                }
            });
            $("#addcomment" + i).click(function() {
                var cmt = $.trim($("#corpscomment" + i).val());
                if (cmt != "") {
                    $("#comment" + i).append("<li><div class='comet-avatar'><img src='../images/resources/comet-1.jpg' alt=''></div><div class='we-comment'><div class='coment-head'><h5><a href='time-line.html' title=''>Jasonborne</a></h5><span>1 year ago</span><a class='we-reply' href='#' title='Reply'><i class='fa fa-reply'></i></a></div><p>" + cmt + "</p></div></li>");
                    $("#corpscomment" + i).val("");
                }
            });
            for (let i = 1; i <= 8; i++) {
                $("#mp" + i).click(function() {
                    var iddiscussion = $("#mp" + i).attr("discussion-id");
                    $("#exampleModalLong" + i).modal("show");
                });
                $(".close" + i).click(function() {
                    $("#exampleModalLong" + i).modal("hide");
                });
                $("#sendmessage" + i).click(function() {
                    var msg = $.trim($("#corpsmessage" + i).val());
                    if (msg != "") {
                        $("#onemessage" + i).append("<li class='you'><div class='chat-thumb'><img src='../images/resources/chatlist1.jpg' alt=''></div><div class='notification-event'><span class='chat-message-item'>" + msg + "</span><span class='notification-date'><time datetime='2004-07-24T18:18' class='entry-date updated'>Yesterday at 8:10pm</time></span></div></li>");
                        $("#corpsmessage" + i).val("");
                    }
                });
            }
            for(let i=1; i <= 5; i++) {
                $("#photo" + i).click(function() {
                    $("#modalPhoto" + i).modal("show");
                });
            }
        });
    </script>
</body>

</html>