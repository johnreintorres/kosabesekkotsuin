<?php get_header();?>

   
<section>
      <div class="fv about-fv activities-fv">
        <div class="fv-area">
          <div class="fv-area-title">
            <h2>当院の活動</h2>
            <!-- <h2><b>当院の活動</b></h2> -->

            <!-- <p>当院の活動</p> -->
          </div>
        </div>
      </div>
    </section>
    <section>
    <div class="breadcrumb">
    <ul>
    <a href="<?php echo site_url('/')?>"><li>Home</li></a>
      <li class="breadcrumb-divider">/</li>
      <li class="bread-link">当院の活動</li>

    </ul>
  </div>
  </section>
    <section>
      <div class="lp activities-lp">
          <div class="lp-activities">
              <div class="lp-activities-area">
                  <div class="content">

                    


                <?php
                 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                 query_posts(array(
                     'post_type' => 'post', // You can add a custom post type if you like
                     'paged' => $paged,
                     'posts_per_page' => 6,
                     'category_name' => 'アクティビティ',
                      'order'    => 'ASC'
     
                 ));
                 if (have_posts()): ?>
                   <?php while (have_posts()): the_post();
                   ?>

                      <div class="content-container">
                          <div class="act-title"><h2><?php the_title();?></h2></div>
                          <div class="description">
                              <p>
                                 <?php the_excerpt();?><br>
                                  <a class="activities-desc-anchor" href="<?php the_permalink();?>"><span>続きを読む</span></a>
                              </p>
                              
                          </div>
                      </div>
                      <?php endwhile;?>
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
 

    <?php get_footer();?>