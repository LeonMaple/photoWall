<?php
/**
 * Created by PhpStorm.
 * @author: helinfeng
 * @Date: 2018/6/21
 * @Time: 下午3:01
 * @File: index.blade.php
 * 图片列表
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.menu.layouts')
</head>

<body>
<div id="awwwards" class="right black"><a href="" target="_blank">best websites of the world</a></div>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
@include('admin.menu.top')

@include('admin.menu.menu')
<div class="wrap-fluid">
    <div class="container-fluid paper-wrap bevel tlbr">
        @include('admin.menu.title')
        @include('admin.menu.breadcrumb')
        <div class="row" style="margin-top:30px;padding:0 15px;">
            <div class="col-sm-6">
                <div class="blogList-nest">
                    <div class="vendor">
                        <img class="img-responsive-media" src="https://ss2.baidu.com/-vo3dSag_xI4khGko9WTAnF6hhy/image/h%3D300/sign=9fc27aa361224f4a4899751339f69044/b3b7d0a20cf431ade6d64fbc4736acaf2edd982a.jpg" alt="">
                    </div>
                    <div class="blogList-content">
                        <h2>Article Heading</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet
                            vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.
                            Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis.
                            Duis elementum auctor accumsan. Aliquam in felis sit amet augue.
                        </p>
                        <p class="pull-right">
                            <span class="label label-default">keyword</span>
                            <span class="label label-default">tag</span>
                            <span class="label label-default">post</span>
                        </p>
                        <ul class="list-inline">
                            <li><a href="#"><span class="entypo-network"></span>添加时间</a></li>
                            <li><a href="#"><span class="entypo-chat"></span>&nbsp;2 Comments</a></li>
                            <li><a href="#"><span class="entypo-share"></span>&nbsp;14 Shares</a></li>
                        </ul>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="blogList-nest">
                    <div class="vendor">
                        <img class="img-responsive-media" src="https://ss2.baidu.com/-vo3dSag_xI4khGko9WTAnF6hhy/image/h%3D300/sign=9fc27aa361224f4a4899751339f69044/b3b7d0a20cf431ade6d64fbc4736acaf2edd982a.jpg" alt="">
                    </div>
                    <div class="blogList-content">
                        <h2>Article Heading</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet
                            vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.
                            Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis.
                            Duis elementum auctor accumsan. Aliquam in felis sit amet augue.
                        </p>
                        <p class="pull-right">
                            <span class="label label-default">keyword</span>
                            <span class="label label-default">tag</span>
                            <span class="label label-default">post</span>
                        </p>
                        <ul class="list-inline">
                            <li><a href="#"><span class="entypo-network"></span>添加时间</a></li>
                            <li><a href="#"><span class="entypo-chat"></span>&nbsp;2 Comments</a></li>
                            <li><a href="#"><span class="entypo-share"></span>&nbsp;14 Shares</a></li>
                        </ul>
                        <hr>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@include('admin.menu.bottom')

<script>
    $(".blogList-nest").fitVids();
    $(".blogList-nest").fitVids();
</script>

</body>

</html>
