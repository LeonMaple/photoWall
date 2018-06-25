<!DOCTYPE html>
<html>
<head>
    <title>Single</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Walk Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href="{{ URL::asset('css/two/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ URL::asset('css/two/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ URL::asset('css/two/component.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('css/two/stylesheet.css') }}" rel="stylesheet" type="text/css"/>
    <script src="{{ URL::asset('js/two/jquery-1.11.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/two/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/two/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
</head>

<body class="cbp-spmenu-push">
<!-- banner -->
<div class="banner1">
    <div class="container">
        <div class="header">
            <div class="header-left">

            </div>
            <div class="header-left1">
                <h1><a href="/">Walk<span>Where To Go This Summer?</span></a></h1>
            </div>
            <!-- #push_sidebar -->
            <div class="top-nav">
                <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="about">About</a></li>
                        <li><a href="services">Services</a></li>
                        <li><a href="gallery">Gallery</a></li>
                        <li><a href="shortcodes">Short Codes</a></li>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="main buttonset">
                    <!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
                    <button id="showRightPush"><img src="../images/two/menu.png" alt=""/></button>
                </div>
                <!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
                <script src="../js/two/classie.js"></script>
                <script>
                    var menuRight = document.getElementById('cbp-spmenu-s2'),
                        showRightPush = document.getElementById('showRightPush'),
                        body = document.body;

                    showRightPush.onclick = function () {
                        classie.toggle(this, 'active');
                        classie.toggle(body, 'cbp-spmenu-push-toleft');
                        classie.toggle(menuRight, 'cbp-spmenu-open');
                        disableOther('showRightPush');
                    };

                    function disableOther(button) {
                        if (button !== 'showRightPush') {
                            classie.toggle(showRightPush, 'disabled');
                        }
                    }
                </script>
                <!-- /script-for-menu -->
            </div>
            <!-- /#push_sidebar -->
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //banner -->
<!-- single -->
<div class="single">
    <div class="container">
        <div class="col-md-4 single-right">
            <div class="blog-right1">
                <div class="search1">
                    <h3>Newsletter</h3>
                    <form>
                        <input type="text" value="Email..." onfocus="this.value = '';"
                               onblur="if (this.value == '') {this.value = 'Email...';}" required="">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
                <div class="categories">
                    <h3>Categories</h3>
                    <ul>
                        <li><a href="#">Aliquam dapibus tincidunt</a></li>
                        <li><a href="#">Donec sollicitudin molestie</a></li>
                        <li><a href="#">Fusce feugiat malesuada odio</a></li>
                        <li><a href="#">Cum sociis natoque penatibus</a></li>
                        <li><a href="#">Magnis dis parturient montes</a></li>
                        <li><a href="#">Donec sollicitudin molestie</a></li>
                    </ul>
                </div>
                <div class="categories categories-mid">
                    <h3>Archives</h3>
                    <ul>
                        <li><a href="#">May 20,2009</a></li>
                        <li><a href="#">July 31,2010</a></li>
                        <li><a href="#">January 20,2012</a></li>
                        <li><a href="#">November 2,2012</a></li>
                        <li><a href="#">December 25,2014</a></li>
                        <li><a href="#">January 14,2015</a></li>
                    </ul>
                </div>
                <div class="related-posts">
                    <h3>Related Posts</h3>
                    <div class="related-post">
                        <div class="related-post-left">
                            <a href="single.blade.php"><img src="../images/two/3.jpg" alt=" "
                                                            class="img-responsive"/></a>
                        </div>
                        <div class="related-post-right">
                            <h4><a href="single.blade.php">Donec sollicitudin</a></h4>
                            <p>Aliquam dapibus tincidunt metus.
                                <span>Praesent justo dolor, lobortis.</span>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="related-post">
                        <div class="related-post-left">
                            <a href="single.blade.php"><img src="../images/two/4.jpg" alt=" "
                                                            class="img-responsive"/></a>
                        </div>
                        <div class="related-post-right">
                            <h4><a href="single.blade.php">Donec sollicitudin</a></h4>
                            <p>Aliquam dapibus tincidunt metus.
                                <span>Praesent justo dolor, lobortis.</span>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="related-post">
                        <div class="related-post-left">
                            <a href="single.blade.php"><img src="../images/two/5.jpg" alt=" "
                                                            class="img-responsive"/></a>
                        </div>
                        <div class="related-post-right">
                            <h4><a href="single.blade.php">Donec sollicitudin</a></h4>
                            <p>Aliquam dapibus tincidunt metus.
                                <span>Praesent justo dolor, lobortis.</span>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="related-post">
                        <div class="related-post-left">
                            <a href="single.blade.php"><img src="../images/two/6.jpg" alt=" "
                                                            class="img-responsive"/></a>
                        </div>
                        <div class="related-post-right">
                            <h4><a href="single.blade.php">Donec sollicitudin</a></h4>
                            <p>Aliquam dapibus tincidunt metus.
                                <span>Praesent justo dolor, lobortis.</span>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 single-left">
            <div class="comments">
                <ul>
                    <li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>25th March 2016</li>
                    <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="#">James Smith</a>
                    </li>
                    <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="#">5 Comments</a>
                    </li>
                    <li><span class="glyphicon glyphicon-tags" aria-hidden="true"></span><a href="#">5 Tags</a></li>
                </ul>
            </div>
            <h3>But I must explain to you how all this mistaken idea of denouncing
                pleasure and praising pain was born and I will give you a complete account
                of the system, and expound the actual teachings.</h3>
            <div class="single-left1">
                <h5>Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</h5>
                <div class="single-left1-grids">
                    <div class="col-md-8 single-left1-grid">
                        <p>"On the other hand, we denounce with righteous indignation
                            and dislike men who are so beguiled and demoralized by the
                            charms of pleasure of the moment, so blinded by desire, that
                            they cannot foresee the pain and trouble that are bound to
                            ensue; and equal blame belongs to those who fail in their duty
                            through weakness. <span>In a free hour, when our power of
								choice is untrammelled and when nothing prevents our being able 
								to do what we like best, every pleasure is to be welcomed and 
								every pain avoided. But in certain circumstances and owing to 
								the claims of duty or the obligations of business 
								it will frequently occur.</span></p>
                    </div>
                    <div class="col-md-4 single-left1-grid">
                        <img src="../images/two/13.jpg" alt=" " class="img-responsive"/>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="single-left2">
                <h4>"At vero eos et accusamus et iusto odio dignissimos ducimus qui
                    blanditiis praesentium voluptatum deleniti atque corrupti quos dolores
                    et quas molestias excepturi sint occaecati cupiditate non provident,
                    similique sunt in culpa qui officia deserunt mollitia animi, id est
                    laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita
                    distinctio. Nam libero tempore, cum soluta nobis est eligendi optio
                    cumque nihil impedit quo minus id quod maxime placeat facere possimus,
                    omnis voluptas assumenda est, omnis dolor repellendus.</h4>
                <div class="col-md-4 single-left1-grid">
                    <img src="../images/two/17.jpg" alt=" " class="img-responsive"/>
                </div>
                <div class="col-md-8 single-left1-grid">
                    <p>"On the other hand, we denounce with righteous indignation
                        and dislike men who are so beguiled and demoralized by the
                        charms of pleasure of the moment, so blinded by desire, that
                        they cannot foresee the pain and trouble that are bound to
                        ensue; and equal blame belongs to those who fail in their duty
                        through weakness. <span>In a free hour, when our power of
							choice is untrammelled and when nothing prevents our being able 
							to do what we like best, every pleasure is to be welcomed and 
							every pain avoided. But in certain circumstances and owing to 
							the claims of duty or the obligations of business 
							it will frequently occur.</span></p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="single-left3">
                <p>In a free hour, when our power of
                    choice is untrammelled and when nothing prevents our being able
                    to do what we like best, every pleasure is to be welcomed and
                    every pain avoided. But in certain circumstances and owing to
                    the claims of duty or the obligations of business
                    it will frequently occur.</p>
                <div class="single-left3-grids">
                    <div class="col-md-6 single-left3-grid">
                        <img src="../images/two/5.jpg" alt=" " class="img-responsive"/>
                        <p>qui officia deserunt mollitia</p>
                    </div>
                    <div class="col-md-6 single-left3-grid">
                        <img src="../images/two/7.jpg" alt=" " class="img-responsive"/>
                        <p>cum soluta nobis est eligendi</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="admin">
                <div class="admin-left">
                    <img src="../images/two/3.png" alt=" " class="img-responsive"/>
                </div>
                <div class="admin-right">
                    <ul>
                        <li><a href="#">James</a> <i>|</i></li>
                        <li><a href="#">Reply</a></li>
                    </ul>
                    <p>Every pleasure is to be welcomed and
                        every pain avoided. But in certain circumstances and owing to
                        the claims of duty or the obligations of business
                        it will frequently occur.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="comments-admin">
                <h4>3 Comments</h4>
                <div class="comments-admin-grids">
                    <div class="comments-admin-grid">
                        <div class="comments-admin-grid-left">
                            <img src="../images/two/3.png" alt=" " class="img-responsive"/>
                        </div>
                        <div class="comments-admin-grid-right">
                            <p>In a free hour, when our power of
                                choice is untrammelled and when nothing prevents our being able
                                to do what we like best, every pleasure is to be welcomed and
                                every pain avoided. But in certain circumstances and owing to
                                the claims of duty or the obligations of business
                                it will frequently occur.</p>
                            <div class="reply">
                                <a href="#">Reply</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="comments-admin-grid">
                        <div class="comments-admin-grid-left">
                            <img src="../images/two/4.png" alt=" " class="img-responsive"/>
                        </div>
                        <div class="comments-admin-grid-right">
                            <p>In a free hour, when our power of
                                choice is untrammelled and when nothing prevents our being able
                                to do what we like best, every pleasure is to be welcomed and
                                every pain avoided. But in certain circumstances and owing to
                                the claims of duty or the obligations of business
                                it will frequently occur.</p>
                            <div class="reply">
                                <a href="#">Reply</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="comments-admin-grid">
                        <div class="comments-admin-grid-left">
                            <img src="../images/two/5.png" alt=" " class="img-responsive"/>
                        </div>
                        <div class="comments-admin-grid-right">
                            <p>In a free hour, when our power of
                                choice is untrammelled and when nothing prevents our being able
                                to do what we like best, every pleasure is to be welcomed and
                                every pain avoided. But in certain circumstances and owing to
                                the claims of duty or the obligations of business
                                it will frequently occur.</p>
                            <div class="reply">
                                <a href="#">Reply</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="leave-a-comment">
            <h3>Leave your comment here</h3>
            <form>
                <input type="text" value="Name" onfocus="this.value = '';"
                       onblur="if (this.value == '') {this.value = 'Name';}" required="">
                <input type="email" value="Email..." onfocus="this.value = '';"
                       onblur="if (this.value == '') {this.value = 'Email...';}" required="">
                <input type="text" value="Phone Number" onfocus="this.value = '';"
                       onblur="if (this.value == '') {this.value = 'Phone Number';}" required="">
                <textarea type="text" onfocus="this.value = '';"
                          onblur="if (this.value == '') {this.value = 'Type Your Comment here...';}" required="">Type Your Comment here...</textarea>
                <input type="submit" value="Add Comment">
            </form>
        </div>
    </div>
</div>
<!-- //single -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="col-md-3 footer-grid">
            <img src="../images/two/8.jpg" alt=" " class="img-responsive"/>
        </div>
        <div class="col-md-3 footer-grid">
            <h2><a href="index.blade.php">Walk<span>Where To Go This Summer?</span></a></h2>
            <p>But I must explain to you how all this mistaken idea of denouncing pleasure
                and praising pain was born.</p>
            <ul>
                <li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 738 Diamond Road, New York City,
                    USA.
                </li>
                <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a
                            href="mailto:info@example.com">info@example.com</a></li>
                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +7683 928 829</li>
            </ul>
        </div>
        <div class="col-md-3 footer-grid">
            <h4>Flickr Photos</h4>
            <div class="footer-grid1">
                <a href="single.blade.php"><img src="../images/two/5.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single.blade.php"><img src="../images/two/6.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single.blade.php"><img src="../images/two/7.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single.blade.php"><img src="../images/two/6.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single.blade.php"><img src="../images/two/7.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single.blade.php"><img src="../images/two/5.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single.blade.php"><img src="../images/two/7.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single.blade.php"><img src="../images/two/5.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single.blade.php"><img src="../images/two/6.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-3 footer-grid">
            <h4>Booking Hours</h4>
            <div class="footer-grid2">
                <ul class="timings">
                    <li>Monday <i>.....</i> 10AM to 7PM</li>
                    <li>Friday <i>.....</i> 9AM to 5PM</li>
                    <li>Sunday <i>.....</i> 10AM to 2PM</li>
                </ul>
                <div class="social-icons social-icons1">
                    <ul>
                        <li><a href="#" class="twitter"></a></li>
                        <li><a href="#" class="facebook"></a></li>
                        <li><a href="#" class="google"></a></li>
                        <li><a href="#" class="p"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="footer-copy">
    <div class="container">
        <p>Copyright &copy; 2016.Company name All rights reserved.More Templates</p>
    </div>
</div>
<!-- //footer -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>