<?php get_header(); ?>


<section>
        <div class="sub-fv">
            <div class="sub-fv-news"></div>
            <div class="breadcrumb breadcrumb-single">
                <div class="container">
                <a href="<?php echo site_url('/')?>" class="home"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_home.svg" alt=""></a>
                <img class="arrow" src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_breadcrumb_arrow.svg" alt="">
                <span><?php echo the_title(); ?></span>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="lp">
            <div class="lp-info lp-news lp-single">
                <div class="lp-title">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_leaf.svg" alt="">
                    <span>NEWS</span>
                    <h2>お知らせ</h2>
                </div>
                <div class="content">
                <?php 
                    
                    if (have_posts()): ?>
                        <?php while (have_posts()): the_post();
                        ?>
                    <div class="container">
                        <div class="top">
                            <h2><?php echo the_title(); ?></h2>
                            <span class="date"><?php echo the_date(); ?></span>
                        </div>
                        <div class="mid">
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                        <img src="<?php echo $url ?>" />
                        </div>
                        <div class="bot">
                            <p><?php echo the_content(); ?></p>
                        </div>
                    </div>
                    <?php endwhile;?>
                    <div class="anchor">
                        <a href="<?php echo site_url('/news')?>">
                            すべて表示
                        </a>
                    </div>
                    <?php endif;?>
                </div>
                    
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>