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

    <link rel="stylesheet" href="assets/js/upload/demos/css/uploader.css">
    <link rel="stylesheet" href="assets/js/upload/demos/css/demo.css">

    <link rel="stylesheet" href="assets/js/dropZone/downloads/css/dropzone.css">


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
                        <i class="icon-upload"></i>
                        <span>File Upload
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
            <li><a href="#" title="Sample page 1">Form</a>
            </li>
            <li><i class="fa fa-lg fa-angle-right"></i>
            </li>
            <li><a href="#" title="Sample page 1">File Upload</a>
            </li>
            <li class="pull-right">
                <div class="input-group input-widget">

                    <input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">
                </div>
            </li>
        </ul>

        <!-- END OF BREADCRUMB -->

        <div class="content-wrap">
            <div class="row">


                <div class="col-sm-12">
                    <div class="nest" id="headerClose">
                        <div class="title-alt">
                            <h6>
                                Image Uploader</h6>
                            <div class="titleClose">
                                <a class="gone" href="#headerClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#header">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="header">

                            <div class="row demo-columns">
                                <div class="col-md-6">
                                    <!-- D&D Zone-->
                                    <div id="drag-and-drop-zone" class="uploader">
                                        <div>Drag &amp; Drop Images Here</div>
                                        <div class="or">-or-</div>
                                        <div class="browser">
                                            <label>
                                                <span>Click to open the file Browser</span>
                                                <input type="file" name="files[]" multiple="multiple"
                                                       title='Click to add Files'>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- /D&D Zone -->

                                    <!-- Debug box -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">Debug</h5>
                                        </div>
                                        <div class="panel-body demo-panel-debug">
                                            <ul id="demo-debug">
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /Debug box -->
                                </div>
                                <!-- / Left column -->

                                <div class="col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">Uploads</h5>
                                        </div>
                                        <div class="panel-body demo-panel-files" id='demo-files'>
                                            <span class="demo-note">No Files have been selected/droped yet...</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- / Right column -->
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>


        <div class="content-wrap">
            <div class="row">


                <div class="col-sm-12">
                    <div class="nest" id="DropZoneClose">
                        <div class="title-alt">
                            <h6>
                                DropZone</h6>
                            <div class="titleClose">
                                <a class="gone" href="#DropZoneClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#DropZone">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="DropZone">

                            <form action="assets/js/dropZone/upload" class="dropzone" id="my-dropzone"></form>
                            <button style="margin-top:10px;" class="btn btn-info" id="submit-all">Submit all files
                            </button>


                        </div>
                    </div>
                </div>
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


<script src="assets/js/dropZone/lib/dropzone.js"></script>

<script type="text/javascript">
    $('#drag-and-drop-zone').dmUploader({
        url: '/assets/js/upload/demos/upload.php',
        dataType: 'json',
        allowedTypes: 'image/*',
        /*extFilter: 'jpg;png;gif',*/
        onInit: function () {
            $.danidemo.addLog('#demo-debug', 'default', 'Plugin initialized correctly');
        },
        onBeforeUpload: function (id) {
            $.danidemo.addLog('#demo-debug', 'default', 'Starting the upload of #' + id);

            $.danidemo.updateFileStatus(id, 'default', 'Uploading...');
        },
        onNewFile: function (id, file) {
            $.danidemo.addFile('#demo-files', id, file);
        },
        onComplete: function () {
            $.danidemo.addLog('#demo-debug', 'default', 'All pending tranfers completed');
        },
        onUploadProgress: function (id, percent) {
            var percentStr = percent + '%';

            $.danidemo.updateFileProgress(id, percentStr);
        },
        onUploadSuccess: function (id, data) {
            $.danidemo.addLog('#demo-debug', 'success', 'Upload of file #' + id + ' completed');

            $.danidemo.addLog('#demo-debug', 'info', 'Server Response for file #' + id + ': ' + JSON.stringify(data));

            $.danidemo.updateFileStatus(id, 'success', 'Upload Complete');

            $.danidemo.updateFileProgress(id, '100%');
        },
        onUploadError: function (id, message) {
            $.danidemo.updateFileStatus(id, 'error', message);

            $.danidemo.addLog('#demo-debug', 'error', 'Failed to Upload file #' + id + ': ' + message);
        },
        onFileTypeError: function (file) {
            $.danidemo.addLog('#demo-debug', 'error', 'File /'
            ' + file.name + ' / ' cannot be added: must be an image'
        )
            ;
        },
        onFileSizeError: function (file) {
            $.danidemo.addLog('#demo-debug', 'error', 'File /'
            ' + file.name + ' / ' cannot be added: size excess limit'
        )
            ;
        },
        /*onFileExtError: function(file){
          $.danidemo.addLog('#demo-debug', 'error', 'File /'' + file.name + '/' has a Not Allowed Extension');
        },*/
        onFallbackMode: function (message) {
            $.danidemo.addLog('#demo-debug', 'info', 'Browser not supported(do something else here!): ' + message);
        }
    });
</script>


<script>
    Dropzone.options.myDropzone = {

        // Prevents Dropzone from uploading dropped files immediately
        autoProcessQueue: false,

        init: function () {
            var submitButton = document.querySelector("#submit-all")
            myDropzone = this; // closure

            submitButton.addEventListener("click", function () {
                myDropzone.processQueue(); // Tell Dropzone to process all queued files.
            });

            // You might want to show the submit button only when 
            // files are dropped here:
            this.on("addedfile", function () {
                // Show submit button here and/or inform user to click it.
            });

        }
    };
</script>

</body>

</html>
