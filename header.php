<!DOCTYPE html>
<html lang="en" style="margin-top: 0 !important">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no"/>
    <!-- <meta name="robots" content="noindex" /> -->
    <title>こさべ接骨院｜練馬区・石神井公園</title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="pc" id="circle" style="transform: translate(657px, 319px);"></div>
    <div class="nav-area pc">
        <nav>
            <?php $c_page = get_the_title(); ?>
            <div class="left"><a href="<?php echo site_url('/')?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_logo.png" alt=""></a></div>
            <div class="right">
                <div class="top"><a href="tel:+0369134702"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_phone.svg" alt="">03 - 6913 - 4702</a></div>
                <ul class="bottom">
                    <?php if(($c_page == "Faq") || ($c_page == "News") || ($c_page == "First") || ($c_page == "Contact")) { ?>
                       <li><a class="show-trigger" href="#">当院について</a></li>
                    <?php } else { ?>
                       <li><a class="show-trigger active" href="#">当院について</a></li>
                    <?php } ?>
                    <div class="show-field">
                        <div class="show-title"><h2>当院について</h2></div>
                        <div class="show-group">
                            <div class="anchor">
                                <a href="<?php echo site_url('/clinic')?>">
                                    院紹介
                                </a>
                            </div>
                            <div class="anchor">
                                <a href="<?php echo site_url('/price')?>">
                                    価格表
                                </a>
                            </div>
                            <div class="anchor">
                                <a href="<?php echo site_url('/overview')?>">
                                    アクセス
                                </a>
                            </div>
                            <div class="anchor">
                                <a href="<?php echo site_url('/staff')?>">
                                    スタッフ紹介
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php if($c_page == "Faq"){ ?>
                        <li class="nav-anchor"><a class="active" href="<?php echo site_url('/faq')?>">よくあるご質問</a></li>
                    <?php } else { ?>
                        <li class="nav-anchor"><a href="<?php echo site_url('/faq')?>">よくあるご質問</a></li>
                    <?php } ?>
                    <?php if($c_page == "News"){ ?>
                        <li class="nav-anchor"><a class="active" href="<?php echo site_url('/news')?>">お知らせ</a></li>
                    <?php } else { ?>
                        <li class="nav-anchor"><a href="<?php echo site_url('/news')?>">お知らせ</a></li>
                    <?php } ?>
                    <?php if($c_page == "First"){ ?>
                        <li class="nav-anchor"><a class="active" href="<?php echo site_url('/first')?>">初めての方へ</a></li>
                    <?php } else { ?>
                        <li class="nav-anchor"><a href="<?php echo site_url('/first')?>">初めての方へ</a></li>
                    <?php } ?>
                    <?php if($c_page == "Contact"){ ?>
                        <li class="nav-anchor"><a class="active" href="<?php echo site_url('/contact')?>">お問い合わせ</a></li>
                    <?php } else { ?>
                        <li class="nav-anchor"><a href="<?php echo site_url('/contact')?>">お問い合わせ</a></li>
                    <?php } ?>

                </ul>
            </div>
        </nav>
    </div>

    <div class="nav nav-sp sp">
        <div class="shadow">
        <div class="nav-logo"><a href="<?php echo site_url('/')?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_logo.jpg" alt=""></a></div>
        <div class="menu-btn">
            <span class="menu-btn-burger"></span>
        </div>
        </div>
        <div class="navigation">
            <!-- <div class="nav-area-logo"><a href="<?php echo site_url('/')?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_nav.jpg" alt=""></a></div> -->
            <!-- <div class="nav-num"><a href="<?php echo site_url('/')?>tel:+0369134702"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_phone.svg" alt="">03 - 6913 - 4702</a></div> -->
            <ul class="menu-nav">
                <li class="menu-nav-item trigger-container">
                    <div class="link-trigger">
                    <a href="#" class="menu-nav-link"><h2>当院について</h2></a>
                    <div class="trigger-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.163" height="9.169" viewBox="0 0 16.163 9.169"><path d="M1.882,13.5H15.87a1.085,1.085,0,0,1,.767,1.854l-6.991,7a1.089,1.089,0,0,1-1.539,0l-6.991-7A1.085,1.085,0,0,1,1.882,13.5Z" transform="translate(-0.794 -13.5)" fill="#6a6a6a"/></svg>
                    </div>
                    </div>

                    <div class="show-field-sp">
                        <div class="show-group">
                            <div class="anchor">
                                <a class="menu-closing" href="<?php echo site_url('/clinic')?>">
                                    院紹介
                                </a>
                            </div>
                            <div class="anchor">
                                <a class="menu-closing" href="<?php echo site_url('/price')?>">
                                    価格表
                                </a>
                            </div>
                            <div class="anchor">
                                <a class="menu-closing" href="<?php echo site_url('/overview')?>">
                                    アクセス
                                </a>
                            </div>
                            <div class="anchor">
                                <a class="menu-closing" href="<?php echo site_url('/staff')?>">
                                    スタッフ紹介
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                
                <li class="menu-nav-item menu-closing"><a href="<?php echo site_url('/faq')?>" class="menu-nav-link"><h2>よくあるご質問</h2></a></li>
                <li class="menu-nav-item menu-closing"><a href="<?php echo site_url('/news')?>" class="menu-nav-link"><h2>お知らせ</h2></a></li>
                <li class="menu-nav-item menu-closing"><a href="<?php echo site_url('/first')?>" class="menu-nav-link"><h2>初めての方へ</h2></a></li>
                <li class="menu-nav-item menu-closing"><a href="<?php echo site_url('/contact')?>" class="menu-nav-link"><h2>お問い合わせ</h2></a></li>
                <div class="nav-num"><a href="tel:+0369134702"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_phone.svg" alt="">03 - 6913 - 4702</a></div>
            </ul>
        </div>
    </div>