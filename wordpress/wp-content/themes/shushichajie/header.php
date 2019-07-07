<!DOCTYPE html>

<html <?php language_attributes();?>>
<head >
    <meta <?php bloginfo(); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(' ',true,'right');?></title>
    <?php wp_head() ?>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/resource/images/icon.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/resource/css/cui.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/resource/css/cui-rel.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/resource/css/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/resource/css/style-rel.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/resource/css/slick.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/resource/css/animate.css" />
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/resource/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/resource/js/public.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/resource/js/slick.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/resource/js/wow.js"></script>
    <!--[if IE]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/resource/js/html5.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/resource/js/respond.js"></script>
    <![endif]-->
</head>
<script>
    new WOW().init();
</script>
<body class="index_bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/resource/images/bg.jpg);background-position: center bottom 450px;background-size: 100% auto;background-repeat: no-repeat;">


<div id="head">
    <div class="head_wp">
        <?php wp_nav_menu(array(
                'theme_location'    =>  'index-left',
                'container'         =>  'div',
                'container_class'   =>  'left_nav',
                'before'            =>  ' <img class="up_pic" src="images/i1.png" alt="">',
            )

        )?>
<!--        <div class="left_nav">-->
<!--            <ul>-->
<!--                <li>-->
<!--                    <img class="up_pic" src="--><?php //echo get_template_directory_uri(); ?><!--/resource/images/i1.png" alt="">-->
<!--                    <a href="--><?php //echo esc_url(home_url());?><!--">首页</a>-->
<!--                    <em>Home</em>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <img class="up_pic" src="--><?php //echo get_template_directory_uri(); ?><!--/resource/images/i1.png" alt="">-->
<!--                    <a href="http://shushitea.com/">关于束氏</a>-->
<!--                    <em>About</em>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <img class="up_pic" src="--><?php //echo get_template_directory_uri(); ?><!--/resource/images/i1.png" alt="">-->
<!--                    <a href="product_list.aspx">产品中心</a>-->
<!--                    <em>Product</em>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <img class="up_pic" src="--><?php //echo get_template_directory_uri(); ?><!--/resource/images/i1.png" alt="">-->
<!--                    <a href="">门店展示</a>-->
<!---->
<!--                    <em>Shop</em>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <img class="up_pic" src="--><?php //echo get_template_directory_uri(); ?><!--/resource/images/i1.png" alt="">-->
<!--                    <a href="">招商加盟</a>-->
<!--                    <em>Join </em>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
        <div class="logo">
            <a href="<?php echo esc_url(home_url());?>"><img src="<?php echo get_template_directory_uri(); ?>/resource/images/logo.png" alt=""></a>
        </div>
        <?php wp_nav_menu(array(
                'theme_location'    =>  'index-right',
                'container'         =>  'div',
                'container_class'   =>  'right_nav',
                'before'            =>  ' <img class="up_pic" src="images/i1.png" alt="">',
            )

        )?>
<!--        <div class="right_nav">-->
<!--            <ul>-->
<!---->
<!--                <!-- <li>-->
<!--                    <img class="up_pic" src="images/i1.png" alt="">-->
<!--                    <a href="manor.aspx">茶庄园</a>-->
<!--                    <em>Manor</em>-->
<!--                </li> -->
<!--                <li>-->
<!--                    <img class="up_pic" src="--><?php //echo get_template_directory_uri(); ?><!--/resource/images/i1.png" alt="">-->
<!--                    <a href="">战略合作</a>-->
<!--                    <em>cooperation</em>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <img class="up_pic" src="--><?php //echo get_template_directory_uri(); ?><!--/resource/images/i1.png" alt="">-->
<!--                    <a href="news.aspx">新闻中心</a>-->
<!--                    <em>News</em>-->
<!--                </li>-->
<!--                <li class="br_none">-->
<!--                    <img class="up_pic" src="--><?php //echo get_template_directory_uri(); ?><!--/resource/images/i1.png" alt="">-->
<!--                    <a href="contact_us.aspx">联系我们</a>-->
<!--                    <em>Contact</em>-->
<!--                </li>-->
<!--                <li>-->
<!--					<span>-->
<!--						<img src="--><?php //echo get_template_directory_uri(); ?><!--/resource/images/i2.png" alt="">4000 125 129-->
<!--					</span>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
</div>
<div id="head_mm">
    <div class="logo">
        <a href="Default.aspx"><img src="<?php echo get_template_directory_uri(); ?>/resource/images/mm_logo.png" alt=""></a>
    </div>
    <div class="open_nav_butt">
        <img src="<?php echo get_template_directory_uri(); ?>/resource/images/mm1.png" alt="">
    </div>
    <div id="mm_nav_con">
        <div class="close_nav">
            <img src="<?php echo get_template_directory_uri(); ?>/resource/images/i9.png" alt="">
        </div>
        <ul>
            <li><a href="Default.aspx">首页</a></li>
            <li><a href="Default.aspx">关于束氏</a></li>
            <li><a href="product_list.aspx">产品中心</a></li>
            <li><a href="shop.aspx">门店展示</a></li>
            <li><a href="shop.aspx">招商加盟</a></li>
            <li><a href="manor.aspx">茶庄园</a></li>
            <li><a href="manor.aspx">战略合作</a></li>
            <li><a href="news.aspx">新闻中心</a></li>
            <li><a href="contact_us.aspx">联系我们</a></li>
        </ul>
    </div>
</div>