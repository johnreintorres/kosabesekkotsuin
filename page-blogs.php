<?php get_header();?>
<section>
      <div class="fv about-fv news-fv">
        <div class="fv-area">
          <div class="fv-area-title">
            <h2>ブログ</h2>
            <!-- <h2><b>ニュース</b></h2> -->

            <!-- <p>ニュース</p> -->
          </div>
        </div>
      </div>
    </section>

    <section>
    <div class="breadcrumb">
    <ul>
    <a href="<?php echo site_url('/')?>"><li>Home</li></a>
      <li class="breadcrumb-divider">/</li>
      <li class="bread-link">ブログ</li>

    </ul>
  </div>
  </section>

  <section>
        <div class="blogs-list">
            <div class="blogs-area">
            <div class="title-layout">
                        <h1>ブログ</h1>
                    </div>
                <div class="content">
                <div class="content-layout">
                    
                <?php
                 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                 query_posts(array(
                     'post_type' => 'post', // You can add a custom post type if you like
                     'paged' => $paged,
                     'posts_per_page' => 6,
                     'orderby' => 'rand',
                     'category_name' => 'スタッフブログ',
                     'orderby'=> 'post_date', 

     
                 ));
                 if (have_posts()): ?>
                   <?php while (have_posts()): the_post();
                   ?>
               <a href="<?php the_permalink();?>">
                   
                    <div class="sub-cont">
                    <div class="blogs-img">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                    </div>
                    <div class="descriptions">
                    <span class="date"><?php the_date();?></span>
                    <span class="title"><?php the_title();?></span>    
                    <!-- <span class="category">
                        <?php $category = get_the_category();
                        echo $category[0]->cat_name;?>
                        </span>   -->
                    </div>
                    </div>
                    </a>
                    <?php endwhile;?>
                 </div>
            </div>
            <div class="pagination-news">
                    <?php my_pagination();?>
                </div>
                       
                    <?php else: ?>
                    <div class="no-result">
                        <h1>No results found</h1>
                    </div>
                    <?php endif;?>
        </div>
    </section>
    <section>
    <?php get_footer();?>