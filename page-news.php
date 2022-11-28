<?php get_header(); ?>


<section>
        <div class="sub-fv">
            <div class="sub-fv-news"></div>
            <div class="breadcrumb breadcrumb-news">
                <div class="container">
                <a href="<?php echo site_url('/')?>" class="home"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_home.svg" alt=""></a>
                <img class="arrow" src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_breadcrumb_arrow.svg" alt="">
                <span>お知らせ</span>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="lp">
            <div class="lp-info lp-news">
                <div class="lp-title">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_leaf.svg" alt="">
                    <span>NEWS</span>
                    <h2>お知らせ</h2>
                </div>
                <div class="content">
                <?php 
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    query_posts(array(
                        'post_type' => 'post', // You can add a custom post type if you like
                        'paged' => $paged,
                        'posts_per_page' => 10,
                        'orderby' => 'rand',
                        'category_and' => 'お知らせ', 'ブログ',
                        'orderby'=> 'post_date', 
   
        
                    ));
                    if (have_posts()): ?>
                        <?php while (have_posts()): the_post();
                        ?>
                    <div class="container">
                        <img class="leaf" src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_info_leaf.svg" alt="">
                        <a href="<?php the_permalink();?>">
                            <div class="left">
                            <?php $category = get_the_category(); ?>
                            <h2 class="category category cat-<?php echo $category[0]->cat_name; ?>">
                            <?php 
                            echo $category[0]->cat_name;?>
                            </h2>
                            <span class="date"><?php the_date();?></span>
                            <h2 class="title"><?php echo mb_strimwidth(get_the_title(), 0, 35, '...');?></h2>
                            </div>
                            <div class="right">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_arrow_right.svg" alt="">
                            </div>
                        </a>
                    </div>
                    <?php endwhile;?>
                    <div class="pagination-news">
                    <?php my_pagination();?>
                    </div>
                    <?php else: ?>
                    <div class="no-result">
                        <h1>No results found</h1>
                    </div>
                    <?php endif;?>
                </div>
                    
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>