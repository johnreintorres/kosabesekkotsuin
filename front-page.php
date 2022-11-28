<?php get_header();?>

<section>
    <div class="fv">
        <div class="fv-title">
            <h2>些細なことでもご相談下さい <br> 安心と信頼を提供します</h2>
        </div>
        <div class="fv-area owl-carousel" id="lp-owl">


            <div class="slide">
                <div class="container">
                    <img class="pc"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/background/bg_index.jpg" alt="">
                    <img class="sp"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/background/bg_index_1_sp.jpg"
                        alt="">
                    <div class="text">
                        <h2 class="pc">些細なことでもご相談下さい <br> 安心と信頼を提供します</h2>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="container">
                    <img class="pc"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/background/bg_index_2.jpg"
                        alt="">
                    <img class="sp"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/background/bg_index_2_sp.jpg"
                        alt="">
                    <div class="text">
                        <h2 class="pc">些細なことでもご相談下さい <br> 安心と信頼を提供します</h2>
                    </div>
                </div>
            </div>

            <div class="slide">
                <div class="container">
                    <img class="pc"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/background/bg_index_3.jpg"
                        alt="">
                    <img class="sp"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/background/bg_index_3_sp.jpg"
                        alt="">
                    <div class="text">
                        <h2 class="pc">些細なことでもご相談下さい <br> 安心と信頼を提供します</h2>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<section>
    <div class="lp">
        <div class="lp-concept">
            <div class="lp-title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ic_leaf.svg" alt="">
                <span>CONCEPT</span>
                <h2>コンセプト</h2>
            </div>
            <div class="content">
                <h2>
                    患者さんが自分の病態を理解し、<br>
                    原因を知り、一緒に治していく。そんな治療院を目指しています。
                </h2>
                <p>
                    当院では、病態の改善とともに、患者さんが抱く疑問を打ち消し、<br>
                    症状の悪化を防ぎながら日常生活の質を向上するよう寄り添っていきます。
                </p>
                <div class="images">
                    <div class="container"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/img_concept_1.jpg" alt="">
                    </div>
                    <div class="container"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/img_concept_2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="lp">
        <div class="lp-info index-info">
            <div class="lp-title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ic_leaf.svg" alt="">
                <span>INFORMATION</span>
                <h2>インフォメーション</h2>
            </div>
            <div class="content">
                <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts(array(
    'post_type' => 'post', // You can add a custom post type if you like
    'paged' => $paged,
    'posts_per_page' => 3,
    'orderby' => 'rand',
    'category_name' => 'お知らせ',
    'orderby' => 'post_date',

));
if (have_posts()): ?>
                <?php while (have_posts()): the_post();
    ?>
                <div class="container">
                    <img class="leaf"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ic_info_leaf.svg" alt="">
                    <a href="<?php the_permalink();?>">
                        <div class="left">
                            <h2 class="category">
                                <?php $category = get_the_category();
    echo $category[0]->cat_name;?>
                            </h2>
                            <span class="date"><?php the_date();?></span>
                            <h2 class="title"><?php echo mb_strimwidth(get_the_title(), 0, 35, '...'); ?></h2>
                        </div>
                        <div class="right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ic_arrow_right.svg"
                                alt="">
                        </div>
                    </a>
                </div>
                <?php endwhile;?>

                <div class="anchor">
                    <a href="<?php echo site_url('/news') ?>">
                        すべて表示
                    </a>
                </div>
                <?php else: ?>
                <div class="no-result">
                    <h1>No results found</h1>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="lp">
        <div class="lp-blogs">
            <div class="lp-title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ic_leaf.svg" alt="">
                <span>BLOGS</span>
                <h2>ブログ</h2>
            </div>
            <div class="content">
                <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts(array(
    'post_type' => 'post', // You can add a custom post type if you like
    'paged' => $paged,
    'posts_per_page' => 3,
    'orderby' => 'rand',
    'category_name' => 'ブログ',
    'orderby' => 'post_date',

));
if (have_posts()): ?>
                <?php while (have_posts()): the_post();
    ?>
                <div class="container">
                    <div class="blog">
                        <div class="left">
                            <?php if (has_post_thumbnail($post->ID)): $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');?>
                            <img src="<?php echo $image[0]; ?>">
                            <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_blog_1.jpg" alt="">
                            <?php endif;?>
                        </div>

                        <div class="right">
                            <div class="top">
                                <h2><?php echo mb_strimwidth(get_the_title(), 0, 35, '...'); ?></h2>
                                <div class="date"><?php the_date();?></div>
                            </div>
                            <p><?php $test = wp_strip_all_tags(get_the_content());
echo mb_strimwidth($test, 0, 150, '...');
?>
                            </p>
                            <div class="readmore"><a href="<?php the_permalink();?>">続きを読む</a></div>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>




                <div class="anchor">
                    <a href="<?php echo site_url('/news') ?>">
                        すべて表示
                    </a>
                </div>
                <?php else: ?>
                <div class="no-result">
                    <h1>No results found</h1>
                </div>
                <?php endif;?>
            </div>
        </div>

    </div>
</section>
<section>
    <div class="lp">
        <div class="lp-testim">
            <div class="lp-title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ic_leaf.svg" alt="">
                <span>TESTIMONIALS</span>
                <h2>お客様の声</h2>
            </div>
            <div class="content owl-carousel" id="voices-owl">
                <div class="container">
                    <div class="top">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ic_testim.png" alt="">
                        <div class="text">
                            <div class="up">
                                <span>名前</span>
                                <div class="top-text">
                                    <h2>K</h2>
                                    <div class="circle"></div>
                                    <h2>K 様</h2>
                                </div>
                            </div>
                            <div class="bottom">
                                <span>年</span>
                                <h2>58歳</h2>
                            </div>
                        </div>
                    </div>
                    <div class="bot">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_testim_kk.jpg" alt="">
                    </div>
                </div>

                <div class="container">
                    <div class="top">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ic_testim.png" alt="">
                        <div class="text">
                            <div class="up">
                                <span>名前</span>
                                <div class="top-text">
                                    <h2>H</h2>
                                    <div class="circle"></div>
                                    <h2>K 様</h2>
                                </div>
                            </div>
                            <div class="bottom">
                                <span>年</span>
                                <h2>55歳</h2>
                            </div>
                        </div>
                    </div>
                    <div class="bot">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_testim_hk.jpg" alt="">
                    </div>
                </div>

                <div class="container">
                    <div class="top">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ic_testim.png" alt="">
                        <div class="text">
                            <div class="up">
                                <span>名前</span>
                                <div class="top-text">
                                    <h2>K</h2>
                                    <div class="circle"></div>
                                    <h2>O 様</h2>
                                </div>
                            </div>
                            <div class="bottom">
                                <span>年</span>
                                <h2>34歳</h2>
                            </div>
                        </div>
                    </div>
                    <div class="bot">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_testim_ko.jpg" alt="">
                    </div>
                </div>

                <div class="container">
                    <div class="top">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ic_testim.png" alt="">
                        <div class="text">
                            <div class="up">
                                <span>名前</span>
                                <div class="top-text">
                                    <h2>N</h2>
                                    <div class="circle"></div>
                                    <h2>Y 様</h2>
                                </div>
                            </div>
                            <div class="bottom">
                                <span>年</span>
                                <h2>22歳</h2>
                            </div>
                        </div>
                    </div>
                    <div class="bot">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_testim_ny.jpg" alt="">
                    </div>
                </div>

                <div class="container">
                    <div class="top">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ic_testim.png" alt="">
                        <div class="text">
                            <div class="up">
                                <span>名前</span>
                                <div class="top-text">
                                    <h2>T</h2>
                                    <div class="circle"></div>
                                    <h2>S 様</h2>
                                </div>
                            </div>
                            <div class="bottom">
                                <span>年</span>
                                <h2>58歳</h2>
                            </div>
                        </div>
                    </div>
                    <div class="bot">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_testim_ts.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="lp">
        <div class="lp-hiring">
            <div class="lp-title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ic_leaf.svg" alt="">
            </div>
            <div class="content">
                <div class="left">
                    <h2>求人募集中です！</h2>
                    <p>
                        この求人に今すぐ応募してください。このクリニックの <br>
                        雇用に関する詳細については、お問い合わせください。
                    </p>
                </div>
                <div class="right">
                    <div class="anchor">
                        <a href="<?php echo site_url('/contact') ?>">
                            今すぐ申し込む
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="lp">
        <div class="lp-location index-location">
            <div class="lp-title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ic_leaf.svg" alt="">
                <span>LOCATION</span>
                <h2>私たちの場所</h2>
            </div>
            <div class="content">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_map.jpg" alt=""> -->
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.235991680821!2d139.6041171156314!3d35.74500393407835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ef14e21467ef%3A0x34bee1b07c47de7e!2sKosabe%20Orthopedic%20Clinic!5e0!3m2!1sen!2sph!4v1664499932722!5m2!1sen!2sph" width="100%" height="263" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><a href="https://www.whatismyip-address.com/divi-discount/"></a><br><style>.mapouter{position:relative;text-align:right;height:262px;max-width:973px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:262px;width:100%;}</style></div> -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1452.879203339482!2d139.6062094729176!3d35.7449122771562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ef14e21467ef%3A0x34bee1b07c47de7e!2z44GT44GV44G55o6l6aqo6Zmi!5e0!3m2!1sja!2sph!4v1664850023606!5m2!1sja!2sph"
                            width="100%" height="263" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="973" height="262" id="gmap_canvas" src="https://maps.google.com/maps?q=Kosabe%20Orthopedic%20Clinic&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/"></a><br><style>.mapouter{position:relative;text-align:right;height:262px;max-width:973px;width:100%;}</style><a href="https://www.embedgooglemap.net">how to add a google map to html</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:262px;width:100%;}</style></div></div> -->
                </div>
            </div>
        </div>
</section>

<?php get_footer();?>