<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Winku Social Network Toolkit</title>
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
                                    <div class="central-meta">
                                        <div class="new-postbox">
                                            <figure>
                                                <img src="../images/resources/admin2.jpg" alt="">
                                            </figure>
                                            <div class="newpst-input">
                                                <form method="post">
                                                    <textarea rows="2" placeholder="write something"></textarea>
                                                    <div class="attachments">
                                                        <ul>
                                                            <li>
                                                                <i class="fa fa-music"></i>
                                                                <label class="fileContainer">
                                                                    <input type="file">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-image"></i>
                                                                <label class="fileContainer">
                                                                    <input type="file">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-video-camera"></i>
                                                                <label class="fileContainer">
                                                                    <input type="file">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-camera"></i>
                                                                <label class="fileContainer">
                                                                    <input type="file">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <button type="submit">Post</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- add post new box -->
                                    <a data-toggle="modal" data-target="#modalSurvey">Let's go!</a>
                                    <?php include '../survey/question.php' ?>
                                    <div class="loadMore">
                                        <div class="central-meta item">
                                            <div class="user-post">
                                                <div class="friend-info">
                                                    <figure>
                                                        <img src="../images/resources/friend-avatar10.jpg" alt="">
                                                    </figure>
                                                    <div class="friend-name">
                                                        <ins><a href="time-line.html" title="">Janice Griffith</a></ins>
                                                        <span>published: june,2 2018 19:PM</span>
                                                    </div>
                                                    <div class="post-meta">
                                                        <img src="../images/resources/user-post.jpg" alt="">
                                                        <div class="we-video-info">
                                                            <ul>
                                                                <li>
                                                                    <span class="views" data-toggle="tooltip" title="views">
                                                                        <i class="fa fa-eye"></i>
                                                                        <ins>1.2k</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="comment" data-toggle="tooltip" title="Comments">
                                                                        <i class="fa fa-comments-o"></i>
                                                                        <ins>52</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="like" data-toggle="tooltip" title="like">
                                                                        <i class="ti-heart"></i>
                                                                        <ins>2.2k</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                        <i class="ti-heart-broken"></i>
                                                                        <ins>200</ins>
                                                                    </span>
                                                                </li>
                                                                <li class="social-media">
                                                                    <div class="menu">
                                                                        <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="description">

                                                            <p>
                                                                World's most beautiful car in Curabitur <a href="#" title="">#test drive booking !</a> the most
                                                                beatuiful car available in america and the saudia
                                                                arabia, you can book your test drive by our official
                                                                website
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="coment-area">
                                                    <ul class="we-comet">
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
                                                            <ul>
                                                                <li>
                                                                    <div class="comet-avatar">
                                                                        <img src="../images/resources/comet-2.jpg" alt="">
                                                                    </div>
                                                                    <div class="we-comment">
                                                                        <div class="coment-head">
                                                                            <h5><a href="time-line.html" title="">alexendra dadrio</a></h5>
                                                                            <span>1 month ago</span>
                                                                            <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                        </div>
                                                                        <p>yes, really very awesome car i see the
                                                                            features of this car in the official website
                                                                            of <a href="#" title="">#Mercedes-Benz</a>
                                                                            and really impressed :-)</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="comet-avatar">
                                                                        <img src="../images/resources/comet-3.jpg" alt="">
                                                                    </div>
                                                                    <div class="we-comment">
                                                                        <div class="coment-head">
                                                                            <h5><a href="time-line.html" title="">Olivia</a></h5>
                                                                            <span>16 days ago</span>
                                                                            <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                        </div>
                                                                        <p>i like lexus cars, lexus cars are most
                                                                            beautiful with the awesome features, but
                                                                            this car is really outstanding than lexus
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="../images/resources/comet-1.jpg" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <div class="coment-head">
                                                                    <h5><a href="time-line.html" title="">Donald
                                                                            Trump</a></h5>
                                                                    <span>1 week ago</span>
                                                                    <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                </div>
                                                                <p>we are working for the dance and sing songs. this
                                                                    video is very awesome for the youngster. please vote
                                                                    this video and like our channel
                                                                    <i class="em em-smiley"></i>
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="" class="showmore underline">more
                                                                comments</a>
                                                        </li>
                                                        <li class="post-comment">
                                                            <div class="comet-avatar">
                                                                <img src="../images/resources/comet-1.jpg" alt="">
                                                            </div>
                                                            <div class="post-comt-box">
                                                                <form method="post">
                                                                    <textarea placeholder="Post your comment"></textarea>
                                                                    <div class="add-smiles">
                                                                        <span class="em em-expressionless" title="add icon"></span>
                                                                    </div>
                                                                    <div class="smiles-bunch">
                                                                        <i class="em em---1"></i>
                                                                        <i class="em em-smiley"></i>
                                                                        <i class="em em-anguished"></i>
                                                                        <i class="em em-laughing"></i>
                                                                        <i class="em em-angry"></i>
                                                                        <i class="em em-astonished"></i>
                                                                        <i class="em em-blush"></i>
                                                                        <i class="em em-disappointed"></i>
                                                                        <i class="em em-worried"></i>
                                                                        <i class="em em-kissing_heart"></i>
                                                                        <i class="em em-rage"></i>
                                                                        <i class="em em-stuck_out_tongue"></i>
                                                                    </div>
                                                                    <button type="submit"></button>
                                                                </form>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="central-meta item">
                                            <div class="user-post">
                                                <div class="friend-info">
                                                    <figure>
                                                        <img src="../images/resources/nearly1.jpg" alt="">
                                                    </figure>
                                                    <div class="friend-name">
                                                        <ins><a href="time-line.html" title="">Sara Grey</a></ins>
                                                        <span>published: june,2 2018 19:PM</span>
                                                    </div>
                                                    <div class="post-meta">
                                                        <iframe width="" height="315" src="https://www.youtube.com/embed/5JJ_jqqpTMY" allow="autoplay;" allowfullscreen></iframe>
                                                        <div class="we-video-info">
                                                            <ul>
                                                                <li>
                                                                    <span class="views" data-toggle="tooltip" title="views">
                                                                        <i class="fa fa-eye"></i>
                                                                        <ins>1.2k</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="comment" data-toggle="tooltip" title="Comments">
                                                                        <i class="fa fa-comments-o"></i>
                                                                        <ins>52</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="like" data-toggle="tooltip" title="like">
                                                                        <i class="ti-heart"></i>
                                                                        <ins>2.2k</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                        <i class="ti-heart-broken"></i>
                                                                        <ins>200</ins>
                                                                    </span>
                                                                </li>
                                                                <li class="social-media">
                                                                    <div class="menu">
                                                                        <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="description">

                                                            <p>
                                                                Lonely Cat Enjoying in Summer Curabitur <a href="#" title="">#mypage</a> ullamcorper ultricies nisi. Nam
                                                                eget dui. Etiam rhoncus. Maecenas tempus, tellus eget
                                                                condimentum rhoncus, sem quam semper libero, sit amet
                                                                adipiscing sem neque sed ipsum. Nam quam nunc,
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="coment-area">
                                                    <ul class="we-comet">
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
                                                                <p>we are working for the dance and sing songs. this
                                                                    video is very awesome for the youngster. please vote
                                                                    this video and like our channel</p>
                                                            </div>

                                                        </li>
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="../images/resources/comet-2.jpg" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <div class="coment-head">
                                                                    <h5><a href="time-line.html" title="">Sophia</a>
                                                                    </h5>
                                                                    <span>1 week ago</span>
                                                                    <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                </div>
                                                                <p>we are working for the dance and sing songs. this
                                                                    video is very awesome for the youngster.
                                                                    <i class="em em-smiley"></i>
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="" class="showmore underline">more
                                                                comments</a>
                                                        </li>
                                                        <li class="post-comment">
                                                            <div class="comet-avatar">
                                                                <img src="../images/resources/comet-2.jpg" alt="">
                                                            </div>
                                                            <div class="post-comt-box">
                                                                <form method="post">
                                                                    <textarea placeholder="Post your comment"></textarea>
                                                                    <div class="add-smiles">
                                                                        <span class="em em-expressionless" title="add icon"></span>
                                                                    </div>
                                                                    <div class="smiles-bunch">
                                                                        <i class="em em---1"></i>
                                                                        <i class="em em-smiley"></i>
                                                                        <i class="em em-anguished"></i>
                                                                        <i class="em em-laughing"></i>
                                                                        <i class="em em-angry"></i>
                                                                        <i class="em em-astonished"></i>
                                                                        <i class="em em-blush"></i>
                                                                        <i class="em em-disappointed"></i>
                                                                        <i class="em em-worried"></i>
                                                                        <i class="em em-kissing_heart"></i>
                                                                        <i class="em em-rage"></i>
                                                                        <i class="em em-stuck_out_tongue"></i>
                                                                    </div>
                                                                    <button type="submit"></button>
                                                                </form>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="central-meta item">
                                            <div class="user-post">
                                                <div class="friend-info">
                                                    <figure>
                                                        <img src="../images/resources/nearly6.jpg" alt="">
                                                    </figure>
                                                    <div class="friend-name">
                                                        <ins><a href="time-line.html" title="">Sophia</a></ins>
                                                        <span>published: january,5 2018 19:PM</span>
                                                    </div>
                                                    <div class="post-meta">
                                                        <div class="post-map">
                                                            <div class="nearby-map">
                                                                <div id="map-canvas"></div>
                                                            </div>
                                                        </div><!-- near by map -->
                                                        <div class="we-video-info">
                                                            <ul>
                                                                <li>
                                                                    <span class="views" data-toggle="tooltip" title="views">
                                                                        <i class="fa fa-eye"></i>
                                                                        <ins>1.2k</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="comment" data-toggle="tooltip" title="Comments">
                                                                        <i class="fa fa-comments-o"></i>
                                                                        <ins>52</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="like" data-toggle="tooltip" title="like">
                                                                        <i class="ti-heart"></i>
                                                                        <ins>2.2k</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                        <i class="ti-heart-broken"></i>
                                                                        <ins>200</ins>
                                                                    </span>
                                                                </li>
                                                                <li class="social-media">
                                                                    <div class="menu">
                                                                        <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="description">

                                                            <p>
                                                                Curabitur Lonely Cat Enjoying in Summer <a href="#" title="">#mypage</a> ullamcorper ultricies nisi. Nam
                                                                eget dui. Etiam rhoncus. Maecenas tempus, tellus eget
                                                                condimentum rhoncus, sem quam semper libero, sit amet
                                                                adipiscing sem neque sed ipsum. Nam quam nunc,
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="coment-area">
                                                    <ul class="we-comet">
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
                                                                <p>we are working for the dance and sing songs. this
                                                                    video is very awesome for the youngster. please vote
                                                                    this video and like our channel</p>
                                                            </div>

                                                        </li>
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="../images/resources/comet-2.jpg" alt="">
                                                            </div>
                                                            <div class="we-comment">
                                                                <div class="coment-head">
                                                                    <h5><a href="time-line.html" title="">Sophia</a>
                                                                    </h5>
                                                                    <span>1 week ago</span>
                                                                    <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                </div>
                                                                <p>we are working for the dance and sing songs. this
                                                                    video is very awesome for the youngster.
                                                                    <i class="em em-smiley"></i>
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="" class="showmore underline">more
                                                                comments</a>
                                                        </li>
                                                        <li class="post-comment">
                                                            <div class="comet-avatar">
                                                                <img src="../images/resources/comet-2.jpg" alt="">
                                                            </div>
                                                            <div class="post-comt-box">
                                                                <form method="post">
                                                                    <textarea placeholder="Post your comment"></textarea>
                                                                    <div class="add-smiles">
                                                                        <span class="em em-expressionless" title="add icon"></span>
                                                                    </div>
                                                                    <div class="smiles-bunch">
                                                                        <i class="em em---1"></i>
                                                                        <i class="em em-smiley"></i>
                                                                        <i class="em em-anguished"></i>
                                                                        <i class="em em-laughing"></i>
                                                                        <i class="em em-angry"></i>
                                                                        <i class="em em-astonished"></i>
                                                                        <i class="em em-blush"></i>
                                                                        <i class="em em-disappointed"></i>
                                                                        <i class="em em-worried"></i>
                                                                        <i class="em em-kissing_heart"></i>
                                                                        <i class="em em-rage"></i>
                                                                        <i class="em em-stuck_out_tongue"></i>
                                                                    </div>
                                                                    <button type="submit"></button>
                                                                </form>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="central-meta item">
                                            <div class="user-post">
                                                <div class="friend-info">
                                                    <figure>
                                                        <img alt="" src="../images/resources/friend-avatar10.jpg">
                                                    </figure>
                                                    <div class="friend-name">
                                                        <ins><a title="" href="time-line.html">Janice Griffith</a></ins>
                                                        <span>published: june,2 2018 19:PM</span>
                                                    </div>
                                                    <div class="description">

                                                        <p>
                                                            Curabitur World's most beautiful car in <a title="" href="#">#test drive booking !</a> the most beatuiful
                                                            car available in america and the saudia arabia, you can book
                                                            your test drive by our official website
                                                        </p>
                                                    </div>
                                                    <div class="post-meta">
                                                        <div class="linked-image align-left">
                                                            <a title="" href="#"><img alt="" src="../images/resources/page1.jpg"></a>
                                                        </div>
                                                        <div class="detail">
                                                            <span>Love Maid - ChillGroves</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur ipisicing elit,
                                                                sed do eiusmod tempor incididunt ut labore et dolore
                                                                magna aliqua... </p>
                                                            <a title="" href="#">www.sample.com</a>
                                                        </div>
                                                        <div class="we-video-info">
                                                            <ul>
                                                                <li>
                                                                    <span class="views" data-toggle="tooltip" title="views">
                                                                        <i class="fa fa-eye"></i>
                                                                        <ins>1.2k</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="comment" data-toggle="tooltip" title="Comments">
                                                                        <i class="fa fa-comments-o"></i>
                                                                        <ins>52</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="like" data-toggle="tooltip" title="like">
                                                                        <i class="ti-heart"></i>
                                                                        <ins>2.2k</ins>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                        <i class="ti-heart-broken"></i>
                                                                        <ins>200</ins>
                                                                    </span>
                                                                </li>
                                                                <li class="social-media">
                                                                    <div class="menu">
                                                                        <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rotater">
                                                                            <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </li>
                                                            </ul>
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
            $(".ignorer").click(function() {
                $("#modalSurvey").modal("hide");
            });
            $(".next").click(function() {
                var radioValue = $("input[name='response']:checked").val();
                if (radioValue) {
                    // Send request

                    // Get & Set Data
                    $("#questionSurvey").empty();
                    $("#questionSurvey").append("Êtes-vous Tenant ou Leese?");

                    $(".form").empty();
                    $(".form").append("<div class='form-check'><input class='form-check-input' type='radio' name='response' value='yes'><label class='form-check-label'>Next Yes</label></div>");
                    $(".form").append("<div class='form-check'><input class='form-check-input' type='radio' name='response' value='no'><label class='form-check-label'>Next No</label></div>");
                } else {
                    alert("Please! Do your choice");
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
        });
    </script>
</body>

</html>