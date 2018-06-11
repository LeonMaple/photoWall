<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HeLinFeng 1.3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <script type="text/javascript" src="assets/js/jquery.js"></script>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/loader-style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/social.css">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/minus.png">
</head>

<body>
<div id="awwwards" class="right black"><a
            href="http://www.awwwards.com/best-websites/HeLinFeng-navigation-admin-dashboard-template" target="_blank">best
        websites of the world</a></div>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- TOP NAVBAR -->
@include('admin.top')
<!-- /END OF TOP NAVBAR -->

<!-- SIDE MENU -->
<div id="skin-select">
    <div id="logo">
        <h1>HeLinFeng<span>v1.0</span></h1>
    </div>

    <a id="toggle">
        <span class="entypo-menu"></span>
    </a>
    <div class="dark">
        <form action="#">
                <span>
                    <input type="text" name="search" value="" class="search rounded id_search"
                           placeholder="Search Menu..." autofocus="">
                </span>
        </form>
    </div>

    <div class="search-hover">
        <form id="demo-2">
            <input type="search" placeholder="Search Menu..." class="id_search">
        </form>
    </div>

    <div class="skin-part">
        <div id="tree-wrap">
            <div class="side-bar">
                <ul class="topnav menu-left-nest">
                    <li>
                        <a href="#" style="border-left:0px solid!important;" class="title-menu-left">

                            <span class="widget-menu"></span>
                            <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>

                        </a>
                    </li>

                    <li>
                        <a class="tooltip-tip ajax-load" href="#" title="Blog App">
                            <i class="icon-document-edit"></i>
                            <span>Blog App</span>

                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="blogList" title="Blog List"><i
                                            class="entypo-doc-text"></i><span>Blog List</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="blogDetail" title="Blog Detail"><i
                                            class="entypo-newspaper"></i><span>Blog Details</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="tooltip-tip ajax-load" href="social" title="Social">
                            <i class="icon-feed"></i>
                            <span>Social</span>

                        </a>
                    </li>
                    <li>
                        <a class="tooltip-tip ajax-load" href="media" title="Media">
                            <i class="icon-camera"></i>
                            <span>Media</span>

                        </a>
                    </li>
                </ul>

                <ul class="topnav menu-left-nest">
                    <li>
                        <a href="#" style="border-left:0px solid!important;" class="title-menu-left">

                            <span class="design-kit"></span>
                            <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>

                        </a>
                    </li>

                    <li>
                        <a class="tooltip-tip ajax-load" href="index" title="Dashboard">
                            <i class="icon-window"></i>
                            <span>Dashboard</span>

                        </a>
                    </li>
                    <li>
                        <a class="tooltip-tip ajax-load" href="mail" title="Mail">
                            <i class="icon-mail"></i>
                            <span>mail</span>
                            <div class="noft-blue">289</div>
                        </a>
                    </li>

                    <li>
                        <a class="tooltip-tip ajax-load" href="icon" title="Icons">
                            <i class="icon-preview"></i>
                            <span>Icons</span>
                            <div class="noft-blue" style="display: inline-block; float: none;">New</div>
                        </a>
                    </li>

                    <li>
                        <a class="tooltip-tip" href="#" title="Extra Pages">
                            <i class="icon-document-new"></i>
                            <span>Extra Page</span>
                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="blank" title="Blank Page"><i
                                            class="icon-media-record"></i><span>Blank Page</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="profile" title="Profile Page"><i
                                            class="icon-user"></i><span>Profile Page</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="invoice" title="Invoice"><i
                                            class="entypo-newspaper"></i><span>Invoice</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="pricing" title="Pricing Table"><i
                                            class="fontawesome-money"></i><span>Pricing Table</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="time" title="Time Line"><i
                                            class="entypo-clock"></i><span>Time Line</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2" href="error/notfound" title="404 Error Page"><i
                                            class="icon-thumbs-down"></i><span>404 Error Page</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2" href="error/server" title="500 Error Page"><i
                                            class="icon-thumbs-down"></i><span>500 Error Page</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2" href="lock" title="Lock Screen"><i
                                            class="icon-lock"></i><span>Lock Screen</span></a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="tooltip-tip " href="user" title="login">
                            <i class="icon-download"></i>
                            <span>Login</span>
                        </a>
                    </li>

                </ul>

                <ul id="menu-showhide" class="topnav menu-left-nest">
                    <li>
                        <a href="#" style="border-left:0px solid!important;" class="title-menu-left">

                            <span class="component"></span>
                            <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>

                        </a>
                    </li>


                    <li>
                        <a class="tooltip-tip" href="#" title="UI Element">
                            <i class="icon-monitor"></i>
                            <span>UI Element</span>
                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="element" title="Element"><i
                                            class="icon-attachment"></i><span>Element</span></a>
                            </li>
                            <li><a class="tooltip-tip2 ajax-load" href="button" title="Button"><i
                                            class="icon-view-list-large"></i><span>Button</span>
                                    <div class="noft-blue-number">10</div>
                                </a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="wizard" title="Tab & Accordion"><i
                                            class="icon-folder"></i><span>Wizard</span>
                                    <div class="noft-purple-number">3</div>
                                </a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="calendar" title="Calender"><i
                                            class="icon-calendar"></i><span>Calendar</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="tree" title="Tree View"><i
                                            class="icon-view-list"></i><span>Tree View</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="grids" title="Grids"><i
                                            class="icon-menu"></i><span>Grids</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="chart" title="Chart"><i
                                            class="icon-graph-pie"></i><span>Chart</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip ajax-load" href="typhography" title="Typhoghrapy">
                                    <i class="icon-information"></i>
                                    <span>Typhoghrapy</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="tooltip-tip" href="#" title="Form">
                            <i class="icon-document"></i>
                            <span>Form</span>
                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="form-element" title="Form Elements"><i
                                            class="icon-document-edit"></i><span>Form Elements</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="andvance-form" title="Andvance Form"><i
                                            class="icon-map"></i><span>Andvance Form</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="text-editor" title="Text Editor"><i
                                            class="icon-code"></i><span>Text Editor</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="file-upload" title="File Upload"><i
                                            class="icon-upload"></i><span>File Upload</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="tooltip-tip" href="#" title="Tables">
                            <i class="icon-view-thumb"></i>
                            <span>Tables</span>
                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="table-static" title="Table Static"><i
                                            class="entypo-layout"></i><span>Table Static</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="table-dynamic" title="Table Dynamic"><i
                                            class="entypo-menu"></i><span>Table Dynamic</span></a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="tooltip-tip ajax-load" href="map" title="Map">
                            <i class="icon-location"></i>
                            <span>Map</span>

                        </a>
                    </li>
                </ul>


                <div class="side-dash">
                    <h3>
                        <span>Device</span>
                    </h3>
                    <ul class="side-dashh-list">
                        <li>Avg. Traffic
                            <span>25k<i style="color:#44BBC1;" class="fa fa-arrow-circle-up"></i>
                                </span>
                        </li>
                        <li>Visitors
                            <span>80%<i style="color:#AB6DB0;" class="fa fa-arrow-circle-down"></i>
                                </span>
                        </li>
                        <li>Convertion Rate
                            <span>13m<i style="color:#19A1F9;" class="fa fa-arrow-circle-up"></i>
                                </span>
                        </li>
                    </ul>
                    <h3>
                        <span>Traffic</span>
                    </h3>
                    <ul class="side-bar-list">
                        <li>Avg. Traffic
                            <div class="linebar">5,7,8,9,3,5,3,8,5</div>
                        </li>
                        <li>Visitors
                            <div class="linebar2">9,7,8,9,5,9,6,8,7</div>
                        </li>
                        <li>Convertion Rate
                            <div class="linebar3">5,7,8,9,3,5,3,8,5</div>
                        </li>
                    </ul>
                    <h3>
                        <span>Visitors</span>
                    </h3>
                    <div id="g1" style="height:180px" class="gauge"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END OF SIDE MENU -->


<!--  PAPER WRAP -->
<div class="wrap-fluid">
    <div class="container-fluid paper-wrap bevel tlbr">


        <!-- CONTENT -->
        <!--TITLE -->
        <div class="row">
            <div id="paper-top">
                <div class="col-sm-3">
                    <h2 class="tittle-content-header">
                        <i class="icon-feed"></i>
                        <span>Social
                            </span>
                    </h2>

                </div>

                <div class="col-sm-7">
                    <div class="devider-vertical visible-lg"></div>
                    <div class="tittle-middle-header">

                        <div class="alert">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <span class="tittle-alert entypo-info-circled"></span>
                            Welcome back,&nbsp;
                            <strong>Dave mattew!</strong>&nbsp;&nbsp;Your last sig in at Yesterday, 16:54 PM
                        </div>


                    </div>

                </div>
                <div class="col-sm-2">
                    <div class="devider-vertical visible-lg"></div>
                    <div class="btn-group btn-wigdet pull-right visible-lg">
                        <div class="btn">
                            Widget
                        </div>
                        <button data-toggle="dropdown" class="btn dropdown-toggle" type="button">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul role="menu" class="dropdown-menu">
                            <li>
                                <a href="#">
                                    <span class="entypo-plus-circled margin-iconic"></span>Add New</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="entypo-heart margin-iconic"></span>Favorite</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="entypo-cog margin-iconic"></span>Setting</a>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
        <!--/ TITLE -->

        <!-- BREADCRUMB -->
        <ul id="breadcrumb">
            <li>
                <span class="entypo-home"></span>
            </li>
            <li><i class="fa fa-lg fa-angle-right"></i>
            </li>
            <li><a href="#" title="Sample page 1">Home</a>
            </li>
            <li><i class="fa fa-lg fa-angle-right"></i>
            </li>
            <li><a href="#" title="Sample page 1">Social</a>
            </li>
            <li class="pull-right">
                <div class="input-group input-widget">

                    <input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">
                </div>
            </li>
        </ul>

        <!-- END OF BREADCRUMB -->


        <div class="social-wrap">

            <div class="row">
                <div class="col-sm-3">
                    <div class="panel panel-default">
                        <div class="panel-facebook">
                            <span class="entypo-facebook-circled middle-social"></span>
                        </div>
                        <div class="panel-body">
                            <p class="lead">Facebook Statistic</p>
                            <p class="social-follower">120k Followers, 900 Posts</p>

                            <p>
                                <img src="http://api.randomuser.me/portraits/thumb/men/14.jpg" alt=""
                                     class="social-pic img-circle">
                                <img src="http://api.randomuser.me/portraits/thumb/women/15.jpg" alt=""
                                     class="social-pic img-circle">

                                <a href="#" class="link-social">
                                    <span class="entypo-link"></span>
                                </a>
                                <a href="#" class="link-social">
                                    <span class="entypo-mail"></span>
                                </a>

                            </p>
                        </div>
                    </div>
                </div>
                <!--/col-->

                <div class="col-sm-3">
                    <div class="panel panel-default">
                        <div class="panel-twitter">
                            <span class="entypo-twitter-circled middle-social"></span>
                        </div>
                        <div class="panel-body">
                            <p class="lead">Twitter Statistic</p>
                            <p>902 Followers, 88 Posts</p>

                            <p>
                                <img src="http://api.randomuser.me/portraits/thumb/men/16.jpg" alt=""
                                     class="social-pic img-circle">
                                <img src="http://api.randomuser.me/portraits/thumb/women/17.jpg" alt=""
                                     class="social-pic img-circle">

                                <a href="#" class="link-social">
                                    <span class="entypo-link"></span>
                                </a>
                                <a href="#" class="link-social">
                                    <span class="entypo-mail"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--/col-->

                <div class="col-sm-3">
                    <div class="panel panel-default">
                        <div class="panel-instagram">
                            <span class="entypo-instagrem middle-social"></span>
                        </div>
                        <div class="panel-body">
                            <p class="lead">Instagram Statistic</p>
                            <p>19k Followers, 789 Posts</p>

                            <p>
                                <img src="http://api.randomuser.me/portraits/thumb/men/18.jpg" alt=""
                                     class="social-pic img-circle">
                                <img src="http://api.randomuser.me/portraits/thumb/women/19.jpg" alt=""
                                     class="social-pic img-circle">

                                <a href="#" class="link-social">
                                    <span class="entypo-link"></span>
                                </a>
                                <a href="#" class="link-social">
                                    <span class="entypo-mail"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--/col-->

                <div class="col-sm-3">
                    <div class="panel panel-default">
                        <div class="panel-google">
                            <span class="entypo-gplus-circled middle-social"></span>
                        </div>
                        <div class="panel-body">
                            <p class="lead">Google + Statistic</p>
                            <p>902 Followers, 88 Posts</p>

                            <p>
                                <img src="http://api.randomuser.me/portraits/thumb/men/20.jpg" alt=""
                                     class="social-pic img-circle">
                                <img src="http://api.randomuser.me/portraits/thumb/women/21.jpg" alt=""
                                     class="social-pic img-circle">

                                <a href="#" class="link-social">
                                    <span class="entypo-link"></span>
                                </a>
                                <a href="#" class="link-social">
                                    <span class="entypo-mail"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>


            <!-- POSTING -->

            <div class="well">
                <form role="form" class="form-horizontal">
                    <h4>What's New</h4>
                    <div style="padding:14px;" class="form-group">
                        <textarea placeholder="Update your status" rows="5" class="form-update"></textarea>
                    </div>


                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-info btn-lg dropdown-toggle" data-toggle="dropdown">Post
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="#">
                                    <span class="entypo-facebook-circled insta-color"></span>&nbsp;&nbsp;Facebook</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="entypo-twitter-circled tweet-link"></span>&nbsp;&nbsp;Twitter</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="entypo-instagrem insta-color"></span>&nbsp;&nbsp;Instagram</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="entypo-gplus-circled gplus-textcolor"></span>&nbsp;&nbsp;Google
                                    Plus</a>
                            </li>
                        </ul>
                    </div>


                    <ul class="list-inline">
                        <li><a href=""><i class="glyphicon glyphicon-upload"></i></a>
                        </li>
                        <li><a href=""><i class="glyphicon glyphicon-camera"></i></a>
                        </li>
                        <li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a>
                        </li>
                        <li><a href=""><i class="glyphicon glyphicon-link"></i></a>
                        </li>
                    </ul>
                </form>
            </div>
            <!-- END OF POSTING -->


            <div class="row">
                <!-- SOCIAL  LEFT CONTENT -->
                <div class="col-sm-6">


                    <div class="panel panel-default">
                        <div class="panel-fb instagram-color">
                            <a href="#" class="link-post pull-right">
                                <span class="entypo-cog"></span>
                            </a>
                            <a href="#" class="link-post pull-right">
                                <span class="entypo-heart"></span>
                            </a>
                            <a href="#" class="link-post pull-right">
                                <span class="entypo-link"></span>
                            </a>

                            <h4>
                                <span class="entypo-instagrem "></span>&nbsp;

                            </h4>
                        </div>
                        <div class="panel-thumbnail">
                            <img class="img-responsive-social" alt="" src="assets/img/insta-pic.jpg">
                        </div>
                        <div class="panel-body">
                            <p class="lead">Hidden City
                                <br><i>#china</i> <i>#soldier</i> <i>#culture</i>
                            </p>
                            <hr>
                            <div class="social-content">

                                <div class="social-header">
                                    <a class="insta-color" href="#">
                                        <span class="entypo-heart"></span>26</a>Like's


                                </div>
                                <ul>
                                    <li>
                                        <img src="http://api.randomuser.me/portraits/thumb/women/45.jpg"
                                             class="img-social-content img-circle pull-left">
                                        <span><a class="insta-color" href="#">Dyah Pitaloka</a> Lagi liburan di Tionkok ya jeeuungg??
                                                <br>
                                                <b>5 Minute</b>
                                            </span>

                                    </li>
                                </ul>


                            </div>
                            <hr>
                            <form>
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button class="btn">+1</button>
                                        <button class="btn"><i class="glyphicon glyphicon-share"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Add a comment..">
                                </div>
                            </form>


                        </div>
                    </div>


                    <!-- GPLUS -->
                    <div class="panel panel-default">
                        <div class="panel-fb gplus-color">
                            <a href="#" class="link-post pull-right">
                                <span class="entypo-cog"></span>
                            </a>
                            <a href="#" class="link-post pull-right">
                                <span class="entypo-plus-circled"></span>
                            </a>
                            <a href="#" class="link-post pull-right">
                                <span class="entypo-link"></span>
                            </a>

                            <h4>
                                <span class="entypo-gplus-circled"></span>&nbsp;

                            </h4>
                        </div>
                        <div class="panel-body">
                            <img class="img-circle pull-left"
                                 src="http://api.randomuser.me/portraits/thumb/women/30.jpg">
                            <div class="social-profile">
                                <h3><a class="gplus-textcolor" href="#">Rubi Castello</a>
                                    <span><i class="entypo-globe"></i>&nbsp;38 Minute ago</span>
                                </h3>
                                <p>#4: Time Shuttle To Londa, Tana Toraja <a class="gplus-textcolor" href="#">http://phalita.blogspot.com/2014/05/4-time-shuttle-to-londa-tana-toraja?/a>
                                <p>
                                    </a></div>

                            <div class="clearfix"></div>
                            <hr>
                            <div class="social-content">

                                <div class="social-header">
                                    <a class="gplus-textcolor" href="#" class="">
                                        <span class="entypo-foward"></span>+1</a>Share This


                                </div>
                                <ul>
                                    <li>
                                        <img class="img-social-content img-circle pull-left"
                                             src="http://api.randomuser.me/portraits/thumb/men/21.jpg">
                                        <span><a class="gplus-textcolor" href="#">Ciwuk Hartadi</a> ngono saiki dolan ra ngajak ajak..
                                                <br>
                                                <b>5 Minute</b>
                                            </span>

                                    </li>


                                </ul>


                            </div>


                            <hr>
                            <form>
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button class="btn">+1</button>
                                        <button class="btn"><i class="glyphicon glyphicon-share"></i>
                                        </button>
                                    </div>
                                    <input type="text" placeholder="Add a comment.." class="form-control">
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- END OF GPLUS -->

                    <!-- FACEBOOK 2 -->
                    <div class="panel panel-default">
                        <div class="panel-fb">
                            <a class="link-post pull-right" href="#">
                                <span class="entypo-cog"></span>
                            </a>
                            <a class="link-post pull-right" href="#">
                                <span class="entypo-thumbs-up"></span>
                            </a>
                            <a class="link-post pull-right" href="#">
                                <span class="entypo-link"></span>
                            </a>

                            <h4>
                                <span class="entypo-facebook-circled"></span>&nbsp;

                            </h4>
                        </div>
                        <div class="panel-body">
                            <img src="http://api.randomuser.me/portraits/thumb/men/21.jpg" class="img-circle pull-left">
                            <div class="social-profile">
                                <h3><a href="#">Sympo Nia</a>
                                    <span><i class="entypo-globe"></i>&nbsp;2 Days ago</span>
                                </h3>
                                <p>yang pawaii kelulusaaaannn
                                    <br>jgn pecicilan dooooonnggg.....
                                    <br>eman eman nyawamu</p>
                            </div>

                            <div class="clearfix"></div>
                            <hr>
                            <div class="social-content">

                                <div class="social-header">
                                    <a class="" href="#">
                                        <span class="entypo-thumbs-up"></span>2</a>People Like This


                                </div>
                                <ul>
                                    <li>
                                        <img src="http://api.randomuser.me/portraits/thumb/women/21.jpg"
                                             class="img-social-content img-circle pull-left">
                                        <span><a href="#">Krida Riyanto</a> Sampluk buu...sampluk...
                                                <br>
                                                <b>5 Minute</b>
                                            </span>

                                    </li>

                                    <li>
                                        <img src="http://api.randomuser.me/portraits/thumb/women/22.jpg"
                                             class="img-social-content img-circle pull-left">
                                        <span><a href="#">Srondeng Rimawan</a> Eee karang yo cah enom, cah tuo yo podo wae ding wkwkw
                                                <br>
                                                <b>13 Minute</b>
                                            </span>

                                    </li>

                                    <li>
                                        <img src="http://api.randomuser.me/portraits/thumb/men/48.jpg"
                                             class="img-social-content img-circle pull-left">
                                        <span><a href="#">Setan Beras</a> Mesake bangsaku. jane ki yo bijine rasepiro tur mik kakehan geleleng.
                                                <br>
                                                <b>1 Hours</b>
                                            </span>

                                    </li>
                                </ul>


                            </div>


                            <hr>
                            <form>
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button class="btn">+1</button>
                                        <button class="btn"><i class="glyphicon glyphicon-share"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Add a comment..">
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- END OF FACEBOOK 2 -->


                </div>
                <!-- END OF SOCIAL  LEFT CONTENT -->


                <!-- SOCIAL RIGHT CONTENT -->
                <div class="col-sm-6">


                    <div class="panel panel-default">
                        <div class="panel-fb">
                            <a href="#" class="link-post pull-right">
                                <span class="entypo-cog"></span>
                            </a>
                            <a href="#" class="link-post pull-right">
                                <span class="entypo-thumbs-up"></span>
                            </a>
                            <a href="#" class="link-post pull-right">
                                <span class="entypo-link"></span>
                            </a>

                            <h4>
                                <span class="entypo-facebook-circled"></span>&nbsp;

                            </h4>
                        </div>
                        <div class="panel-body">
                            <img class="img-circle pull-left"
                                 src="http://api.randomuser.me/portraits/thumb/women/21.jpg">
                            <div class="social-profile">
                                <h3><a href="#">Sympo Nia</a>
                                    <span><i class="entypo-globe"></i>&nbsp;1 hours ago</span>
                                </h3>
                                <p>yang pawaii kelulusaaaannn
                                    <br>jgn pecicilan dooooonnggg.....
                                    <br>eman eman nyawamu</p>
                            </div>

                            <div class="clearfix"></div>
                            <hr>
                            <div class="social-content">

                                <div class="social-header">
                                    <a href="#" class="">
                                        <span class="entypo-thumbs-up"></span>2</a>People Like This


                                </div>
                                <ul>
                                    <li>
                                        <img class="img-social-content img-circle pull-left"
                                             src="http://api.randomuser.me/portraits/thumb/men/21.jpg">
                                        <span><a href="#">Krida Riyanto</a> Sampluk buu...sampluk...
                                                <br>
                                                <b>5 Minute</b>
                                            </span>

                                    </li>

                                    <li>
                                        <img class="img-social-content img-circle pull-left"
                                             src="http://api.randomuser.me/portraits/thumb/men/22.jpg">
                                        <span><a href="#">Srondeng Rimawan</a> Eee karang yo cah enom, cah tuo yo podo wae ding wkwkw
                                                <br>
                                                <b>13 Minute</b>
                                            </span>

                                    </li>

                                    <li>
                                        <img class="img-social-content img-circle pull-left"
                                             src="http://api.randomuser.me/portraits/thumb/men/23.jpg">
                                        <span><a href="#">Setan Beras</a> Mesake bangsaku. jane ki yo bijine rasepiro tur mik kakehan geleleng.
                                                <br>
                                                <b>1 Hours</b>
                                            </span>

                                    </li>
                                </ul>


                            </div>


                            <hr>
                            <form>
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button class="btn">+1</button>
                                        <button class="btn"><i class="glyphicon glyphicon-share"></i>
                                        </button>
                                    </div>
                                    <input type="text" placeholder="Add a comment.." class="form-control">
                                </div>
                            </form>

                        </div>
                    </div>


                    <!-- TWITTER -->
                    <div class="panel panel-default">
                        <div class="panel-fb tweet-bgcolor">
                            <a href="#" class="link-post pull-right">
                                <span class="entypo-cog"></span>
                            </a>
                            <a href="#" class="link-post pull-right">
                                <span class="entypo-loop"></span>
                            </a>
                            <a href="#" class="link-post pull-right">
                                <span class="entypo-link"></span>
                            </a>

                            <h4>
                                <span class="entypo-twitter-circled "></span>&nbsp;

                            </h4>
                        </div>
                        <div class="panel-body">
                            <img class="img-circle pull-left" src="http://api.randomuser.me/portraits/thumb/men/29.jpg">
                            <div class="social-profile">
                                <h3><a class="tweet-link" href="#">Ahmad Heavy Folder</a>
                                    <span><i class="entypo-globe"></i>&nbsp;1 hours ago</span>
                                </h3>
                                <p>mungkin pengemis yg baru saja mampir kerumah jauh lebih kaya dari saya...(minimal
                                    kaya daging, dia gemuk sedang saya kurus)....</p>
                            </div>

                            <div class="clearfix"></div>
                            <hr>
                            <div class="social-content">

                                <div class="social-header">
                                    <a class="tweet-link" href="#" class="">
                                        <span class="entypo-loop"></span>5</a>People ReTweet This


                                </div>
                                <ul>
                                    <li>
                                        <img class="img-social-content img-circle pull-left"
                                             src="http://api.randomuser.me/portraits/thumb/men/21.jpg">
                                        <span><a style="color:#0AA699;" href="#">Ciwuk Hartadi</a> nek do menehi wujud pangan palingo,,dadi gendut...he he he
                                                <br>
                                                <b>5 Minute</b>
                                            </span>

                                    </li>

                                    <li>
                                        <img class="img-social-content img-circle pull-left"
                                             src="http://api.randomuser.me/portraits/thumb/men/29.jpg">
                                        <span><a class="tweet-link" href="#">Ahmad heavy Folder</a> lha pengemise mau nganggo wewangian/parfum barang....elok tenan...
                                                <a class="tweet-link" href="#">@Ciwuk Hartadi</a>
                                                <br>
                                                <b>13 Minute</b>
                                            </span>

                                    </li>
                                    <li>
                                        <img class="img-social-content img-circle pull-left"
                                             src="http://api.randomuser.me/portraits/thumb/men/21.jpg">
                                        <span><a class="tweet-link" href="#">Ciwuk Hartadi</a> weh la ak we telung dino telung pekoro ra adus yo ra nganggo parfum je
                                                <br>
                                                <b>5 Minute</b>
                                            </span>

                                    </li>


                                </ul>


                            </div>


                            <hr>
                            <form>
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button class="btn">+1</button>
                                        <button class="btn"><i class="glyphicon glyphicon-share"></i>
                                        </button>
                                    </div>
                                    <input type="text" placeholder="Add a comment.." class="form-control">
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- END OF TWITTER -->

                    <!-- INSTAGRAM 2 -->
                    <div class="panel panel-default">
                        <div class="panel-fb instagram-color">
                            <a class="link-post pull-right" href="#">
                                <span class="entypo-cog"></span>
                            </a>
                            <a class="link-post pull-right" href="#">
                                <span class="entypo-heart"></span>
                            </a>
                            <a class="link-post pull-right" href="#">
                                <span class="entypo-link"></span>
                            </a>

                            <h4>
                                <span class="entypo-instagrem "></span>&nbsp;

                            </h4>
                        </div>
                        <div class="panel-thumbnail">
                            <img src="assets/img/insta-pic2.jpg" alt="" class="img-responsive-social">
                        </div>
                        <div class="panel-body">
                            <p class="lead">Open the Door
                                <br><i>#gate</i> <i>#classic</i> <i>#door</i> <i>#canvas</i>
                            </p>
                            <hr>
                            <div class="social-content">

                                <div class="social-header">
                                    <a href="#" class="insta-color">
                                        <span class="entypo-heart"></span>26</a>Like's


                                </div>
                                <ul>
                                    <li>
                                        <img class="img-social-content img-circle pull-left"
                                             src="http://api.randomuser.me/portraits/thumb/women/45.jpg">
                                        <span><a href="#" class="insta-color">Gifta Gina</a> Keren ini dmn ya?
                                                <br>
                                                <b>43 Minute</b>
                                            </span>

                                    </li>
                                </ul>


                            </div>
                            <hr>
                            <form>
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button class="btn">+1</button>
                                        <button class="btn"><i class="glyphicon glyphicon-share"></i>
                                        </button>
                                    </div>
                                    <input type="text" placeholder="Add a comment.." class="form-control">
                                </div>
                            </form>


                        </div>
                    </div>
                    <!-- END OF INSTAGRAM 2 -->


                </div>
                <!-- END OF SOCIAL RIGHT CONTENT -->

            </div>


        </div>

        <!-- /END OF CONTENT -->


        <!-- FOOTER -->
        <div class="footer-space"></div>
        <div id="footer">
            <div class="devider-footer-left"></div>
            <div class="time">
                <p id="spanDate">
                <p id="clock">
            </div>
            <div class="copyright">Make with Love
                <span class="entypo-heart"></span>Collect from All Rights Reserved
            </div>
            <div class="devider-footer"></div>

        </div>
        <!-- / END OF FOOTER -->


    </div>
</div>
<!--  END OF PAPER WRAP -->

<!-- RIGHT SLIDER CONTENT -->
<div class="sb-slidebar sb-right">
    <div class="right-wrapper">
        <div class="row">
            <h3>
                <span><i class="entypo-gauge"></i>&nbsp;&nbsp;MAIN WIDGET</span>
            </h3>
            <div class="col-sm-12">

                <div class="widget-knob">
                        <span class="chart" style="position:relative" data-percent="86">
                            <span class="percent"></span>
                        </span>
                </div>
                <div class="widget-def">
                    <b>Distance traveled</b>
                    <br>
                    <i>86% to the check point</i>
                </div>

                <div class="widget-knob">
                        <span class="speed-car" style="position:relative" data-percent="60">
                            <span class="percent2"></span>
                        </span>
                </div>
                <div class="widget-def">
                    <b>The average speed</b>
                    <br>
                    <i>30KM/h avarage speed</i>
                </div>


                <div class="widget-knob">
                        <span class="overall" style="position:relative" data-percent="25">
                            <span class="percent3"></span>
                        </span>
                </div>
                <div class="widget-def">
                    <b>Overall result</b>
                    <br>
                    <i>30KM/h avarage Result</i>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top:0;" class="right-wrapper">
        <div class="row">
            <h3>
                <span><i class="entypo-chat"></i>&nbsp;&nbsp;CHAT</span>
            </h3>
            <div class="col-sm-12">
                <span class="label label-warning label-chat">Online</span>
                <ul class="chat">
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/men/20.jpg">
                                </span><b>Dave Junior</b>
                            <br><i>Last seen : 08:00 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/men/21.jpg">
                                </span><b>Kenneth Lucas</b>
                            <br><i>Last seen : 07:21 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/men/22.jpg">
                                </span><b>Heidi Perez</b>
                            <br><i>Last seen : 05:43 PM</i>
                        </a>
                    </li>


                </ul>

                <span class="label label-chat">Offline</span>
                <ul class="chat">
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/men/23.jpg">
                                </span><b>Dave Junior</b>
                            <br><i>Last seen : 08:00 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/women/24.jpg">
                                </span><b>Kenneth Lucas</b>
                            <br><i>Last seen : 07:21 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/men/25.jpg">
                                </span><b>Heidi Perez</b>
                            <br><i>Last seen : 05:43 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/women/25.jpg">
                                </span><b>Kenneth Lucas</b>
                            <br><i>Last seen : 07:21 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/men/26.jpg">
                                </span><b>Heidi Perez</b>
                            <br><i>Last seen : 05:43 PM</i>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>

<!-- END OF RIGHT SLIDER CONTENT-->


<!-- MAIN EFFECT -->
<script type="text/javascript" src="assets/js/preloader.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/load.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript" src="assets/js/upload/demos/js/demo.min.js"></script>
<script type="text/javascript" src="assets/js/upload/src/dmuploader.min.js"></script>


</body>

</html>
