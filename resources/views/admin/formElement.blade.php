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

    <link href="assets/js/iCheck/flat/all.css" rel="stylesheet">
    <link href="assets/js/iCheck/line/all.css" rel="stylesheet">

    <link href="assets/js/colorPicker/bootstrap-colorpicker.css" rel="stylesheet">
    <link href="assets/js/switch/bootstrap-switch.css" rel="stylesheet">
    <link href="assets/js/validate/validate.css" rel="stylesheet">
    <link href="assets/js/idealform/css/jquery.idealforms.css" rel="stylesheet">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/minus.png">
</head>

<body>
<div id="awwwards" class="right black"><a
            href="" target="_blank">best
        websites of the world</a></div>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- TOP NAVBAR -->
@include('admin.top')
<!-- /END OF TOP NAVBAR -->

<!-- SIDE MENU -->
@include('admin.menu')
<!-- END OF SIDE MENU -->


<!--  PAPER WRAP -->
<div class="wrap-fluid">
    <div class="container-fluid paper-wrap bevel tlbr">


        <!-- CONTENT -->
        <!--TITLE -->
    @include('admin.title')
    <!--/ TITLE -->

        <!-- BREADCRUMB -->
    @include('admin.breadcrumb')
    <!-- END OF BREADCRUMB -->


        <div class="content-wrap">
            <div class="row">


                <div class="col-sm-12">
                    <div class="nest" id="basicClose">
                        <div class="title-alt">
                            <h6>Basic</h6>
                            <div class="titleClose">
                                <a class="gone" href="#basicClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#basic">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="basic">
                            <div class="form_center">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" placeholder="Enter email" id="exampleInputEmail1"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" placeholder="Password" id="exampleInputPassword1"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <input type="file" id="exampleInputFile">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Check me out
                                        </label>
                                    </div>
                                    <button class="btn btn-info" type="submit">Submit</button>
                                </form>
                            </div>


                        </div>

                    </div>
                </div>

            </div>
        </div>


        <div class="content-wrap">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nest" id="horizontalClose">
                        <div class="title-alt">
                            <h6>
                                Horizontal Forms</h6>
                            <div class="titleClose">
                                <a class="gone" href="#horizontalClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#horizontal">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="horizontal">

                            <div class="form_center">
                                <form role="form" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">Email</label>
                                        <div class="col-lg-10">
                                            <input type="email" placeholder="Email" id="inputEmail1"
                                                   class="form-control">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label"
                                               for="inputPassword1">Password</label>
                                        <div class="col-lg-10">
                                            <input type="password" placeholder="Password" id="inputPassword1"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">Remember me
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-danger" type="submit">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="content-wrap">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nest" id="inlineClose">
                        <div class="title-alt">
                            <h6>
                                Inline form</h6>
                            <div class="titleClose">
                                <a class="gone" href="#inlineClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#inline">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="inline">

                            <div class="form_center">
                                <form role="form" class="form-inline">
                                    <div class="form-group">
                                        <label for="exampleInputEmail2" class="sr-only">Email address</label>
                                        <input type="email" placeholder="Enter email" id="exampleInputEmail2"
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword2" class="sr-only">Password</label>
                                        <input type="password" placeholder="Password" id="exampleInputPassword2"
                                               class="form-control">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Remember me
                                        </label>
                                    </div>
                                    <button class="btn btn-success" type="submit">Sign in</button>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="content-wrap">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nest" id="elementClose">
                        <div class="title-alt">
                            <h6>
                                Form Elements</h6>
                            <div class="titleClose">
                                <a class="gone" href="#elementClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#element">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="element">

                            <div class="panel-body">
                                <form method="get" class="form-horizontal bucket-form">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Default</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Help text</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control">
                                            <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Rounder</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control round-input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Input focus</label>
                                        <div class="col-sm-6">
                                            <input type="text" value="This is focused..." id="focusedInput"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Disabled</label>
                                        <div class="col-sm-6">
                                            <input type="text" disabled="" placeholder="Disabled input here..."
                                                   id="disabledInput" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Placeholder</label>
                                        <div class="col-sm-6">
                                            <input type="text" placeholder="placeholder" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Password</label>
                                        <div class="col-sm-6">
                                            <input type="password" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" col-sm-3 control-label">Static control</label>
                                        <div class="col-lg-6">
                                            <p class="form-control-static">email@example.com
                                                <script type="text/javascript">
                                                    /* &lt;![CDATA[ */
                                                    (function () {
                                                        try {
                                                            var s, a, i, j, r, c, l,
                                                                b = document.getElementsByTagName("script");
                                                            l = b[b.length - 1].previousSibling;
                                                            a = l.getAttribute('data-cfemail');
                                                            if (a) {
                                                                s = '';
                                                                r = parseInt(a.substr(0, 2), 16);
                                                                for (j = 2; a.length - j; j += 2) {
                                                                    c = parseInt(a.substr(j, 2), 16) ^ r;
                                                                    s += String.fromCharCode(c);
                                                                }
                                                                s = document.createTextNode(s);
                                                                l.parentNode.replaceChild(s, l);
                                                            }
                                                        } catch (e) {
                                                        }
                                                    })();
                                                    /* ]]&gt; */
                                                </script>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group has-success">
                                        <label for="inputSuccess" class="col-sm-3 control-label col-lg-3">Input with
                                            success</label>
                                        <div class="col-lg-6">
                                            <input type="text" id="inputSuccess" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group has-warning">
                                        <label for="inputWarning" class="col-sm-3 control-label col-lg-3">Input with
                                            warning</label>
                                        <div class="col-lg-6">
                                            <input type="text" id="inputWarning" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group has-error">
                                        <label for="inputError" class="col-sm-3 control-label col-lg-3">Input with
                                            error</label>
                                        <div class="col-lg-6">
                                            <input type="text" id="inputError" class="form-control">
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="content-wrap">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nest" id="labelClose">
                        <div class="title-alt">
                            <h6>
                                Checkbox and radio Button Pretty</h6>
                            <div class="titleClose">
                                <a class="gone" href="#labelClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#label">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="label">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="skin skin-flat">

                                        <ul class="list">
                                            <li>
                                                <input tabindex="13" type="checkbox" id="flat-checkbox-1">
                                                <label for="flat-checkbox-1">Checkbox 1</label>
                                            </li>
                                            <li>
                                                <input tabindex="14" type="checkbox" id="flat-checkbox-2" checked="">
                                                <label for="flat-checkbox-2">Checkbox 2</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="flat-checkbox-disabled" disabled="">
                                                <label for="flat-checkbox-disabled">Disabled</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="flat-checkbox-disabled-checked" checked=""
                                                       disabled="">
                                                <label for="flat-checkbox-disabled-checked">Disabled &amp;
                                                    checked</label>
                                            </li>
                                        </ul>
                                        <ul class="list">
                                            <li>
                                                <input tabindex="11" type="radio" id="square-radio-1"
                                                       name="square-radio">
                                                <label for="square-radio-1">Radio button 1</label>
                                            </li>
                                            <li>
                                                <input tabindex="12" type="radio" id="square-radio-2"
                                                       name="square-radio" checked="">
                                                <label for="square-radio-2">Radio button 2</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="square-radio-disabled" disabled="">
                                                <label for="square-radio-disabled">Disabled</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="square-radio-disabled-checked" checked=""
                                                       disabled="">
                                                <label for="square-radio-disabled-checked">Disabled &amp;
                                                    checked</label>
                                            </li>
                                        </ul>
                                        <div style="clear:both;"></div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="skin skin-line">
                                        <ul class="list">
                                            <li>
                                                <input tabindex="17" type="checkbox" id="line-checkbox-1">
                                                <label for="line-checkbox-1">Checkbox 1</label>
                                            </li>
                                            <li>
                                                <input tabindex="18" type="checkbox" id="line-checkbox-2" checked="">
                                                <label for="line-checkbox-2">Checkbox 2</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="line-checkbox-disabled" disabled="">
                                                <label for="line-checkbox-disabled">Disabled</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="line-checkbox-disabled-checked" checked=""
                                                       disabled="">
                                                <label for="line-checkbox-disabled-checked">Disabled &amp;
                                                    checked</label>
                                            </li>
                                        </ul>
                                        <ul class="list">
                                            <li>
                                                <input tabindex="19" type="radio" id="line-radio-1" name="line-radio">
                                                <label for="line-radio-1">Radio button 1</label>
                                            </li>
                                            <li>
                                                <input tabindex="20" type="radio" id="line-radio-2" name="line-radio"
                                                       checked="">
                                                <label for="line-radio-2">Radio button 2</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="line-radio-disabled" disabled="">
                                                <label for="line-radio-disabled">Disabled</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="line-radio-disabled-checked" checked=""
                                                       disabled="">
                                                <label for="line-radio-disabled-checked">Disabled &amp; checked</label>
                                            </li>
                                        </ul>
                                        <div style="clear:both;"></div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="content-wrap">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nest" id="switchClose">
                        <div class="title-alt">
                            <h6>
                                switch</h6>
                            <div class="titleClose">
                                <a class="gone" href="#switchClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#switch">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="switch">

                            <div class="make-switch" data-on="primary" data-off="info">
                                <input type="checkbox" checked="">
                            </div>
                            <div class="make-switch" data-on="info" data-off="success">
                                <input type="checkbox" checked="">
                            </div>
                            <div class="make-switch" data-on="success" data-off="warning">
                                <input type="checkbox" checked="">
                            </div>
                            <div class="make-switch" data-on="warning" data-off="danger">
                                <input type="checkbox" checked="">
                            </div>
                            <div class="make-switch" data-on="danger" data-off="default">
                                <input type="checkbox" checked="">
                            </div>

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


<!-- /MAIN EFFECT -->
<script type="text/javascript" src="assets/js/iCheck/jquery.icheck.js"></script>
<script type="text/javascript" src="assets/js/switch/bootstrap-switch.js"></script>

<!--  PLUGIN -->
<script>
    $(document).ready(function () {
        //CHECKBOX PRETTYFY
        $('.skin-flat input').iCheck({
            checkboxClass: 'icheckbox_flat-red',
            radioClass: 'iradio_flat-red'
        });
        $('.skin-line input').each(function () {
            var self = $(this),
                label = self.next(),
                label_text = label.text();

            label.remove();
            self.iCheck({
                checkboxClass: 'icheckbox_line-blue',
                radioClass: 'iradio_line-blue',
                insert: '<div class="icheck_line-icon"></div>' + label_text
            });
        });
        //Switch Button

        $('.make-switch').bootstrapSwitch('setSizeClass', 'switch-small');
    });
</script>


</body>

</html>
