<?php get_header();?>
    <!-- <div class="fv-area-title"  >
        <div class="lp-title-layout">
        <div class="title-lp">
        <h1><b>HEALTH MATTERS</b></h1>
        <span>健康に関すること 私たちに相談してください</span> <br>
        <a href="<?php echo site_url('/clinic#reservation')?>">
        <div class="consult-btn">
            <span>Consult To Us</span>
        </div>
        </a>
        </div>
        </div>
    </div> -->
    <div class="fv-area-title"  >
        <div class="lp-title-layout">
        <div class="title-lp-new">
        <h1>安心と信頼を提供します</h1>
        <h1>些細なことでもご相談下さい</h1>
        </div>
        </div>
    </div>


        <div class="owl-carousel" id="lp-owl">

            <!-- <div class="fv item">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/background/treatment-machine.png" alt="治療室" srcset="">
            </div>

            <div class="fv item">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/background/treatment-room.png" alt="施術マシン" srcset="">
            </div> -->

            <div class="fv item">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/background/kosabe-sekkotsuin-entrance.jpg" alt="こさべ接骨院 入口" srcset="">
            </div>

            <div class="fv item">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/background/kosabe-sekkotsuin-exterior.jpg" alt="こさべ接骨院 外観" srcset="">
            </div>

        </div>
    </section>
    <section>
        <div class="lp lp-abt">
            <div class="lp-about">
                <div class="lp-about-area">
                    <div class="lp-about-area-content">
                        <div class="title"><h2>CONCEPT</h2><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_lp_line.svg" alt=""><span>コンセプト</span></div>
                        <h2 class="title">患者さんが自分の病態を理解し、<br>原因を知り、一緒に治していく。<br>そんな治療院を目指しています。</h2>
                        <p class="content">
              
                        当院では、病態の改善とともに、患者さんが抱く疑問を打ち消し、<br>症状の悪化を防ぎながら日常生活の質を向上するよう寄り添っていきます。
                        
                    </p>
                        <!-- <p class="content">
              
                            『医接連携』<br>
                            当院では、患者さんの訴える様々な症状に対して、問診・視診・触診・<br>
                            徒手検査を用いて原因となる病態を判断致します。その結果、 <br>
                            自身の専門外と判断した場合連携医療機関へご紹介します。<br>
                            例えばオペが必要と感じた場合や患者さんが希望した場合は、<br>
                            私の信頼のある整形外科をご紹介します。骨折や脱臼などの外傷でも、<br>
                            人手が必要であったり、難しい症例でも、私の信頼のおける柔道整復師の助力で手術をせず、<br>
                            保存療法で治せるケースも多くあります。何かご心配の場合は、お気軽にご相談下さい。<br>
                            <br>
                           
                        </p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section>
        <div class="lp">
            <div class="lp-info">
                <div class="lp-info-area">
                    <div class="title">
                        <h2><b>INFORMATION</b></h2>
                        <span>インフォメーション</span>
                    </div>
                   
                    <div class="latest-news">
                   
                        <?php
                 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                 query_posts(array(
                     'post_type' => 'post', // You can add a custom post type if you like
                     'paged' => $paged,
                     'posts_per_page' => 3,
                     'orderby' => 'rand',
                     'category_name' => 'お知らせ,スタッフブログ',
     
     
                 ));
                 if (have_posts()): ?>
                   <?php while (have_posts()): the_post();
                   ?>
                <a href="<?php the_permalink();?>" class="news-list">
              

                        <div class="date-desc">
                        <div class="date-cat">
                        <span class="date"><?php the_date();?></span>
                        <span class="category">
                        <?php $category = get_the_category();
                        echo $category[0]->cat_name;?>
                        </span>                       
                     </div>
                     <div class="news-title">
                            <h2><?php the_title();?></h2>
                        </div>
                        <span class="desc"><?php the_excerpt();?></span>
                        </div>
                        </a>
                      
                        <?php endwhile;?>
                        <a href="<?php echo site_url('/news');?>">
                       <div class="news-btn">
                           <span>See All</span>
                       </div>
                       </a>
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

    <section>
        <div class="lp">
            <div class="lp-access">
                <div class="lp-access-area">
                    <div class="left">
                    <iframe src="https://maps.google.com/maps?q=2-ch%C5%8Dme-15-8%20Shakujiimachi%20%C2%B7%202-ch%C5%8Dme-15-8%20Shakujiimachi,%20Nerima%20City,%20Tokyo%20177-0041,%20Japan&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                    <!-- <div class="right">
                        <div class="title"><h2>ACCESS</h2><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_lp_line.svg" alt=""><span>院紹介</span></div>
                        <div class="content">
                            <p>
                                図レヤシ来27仕ハセラネ座足サキリヤ約必けフぐが動局税く故終けだ <br>
                                比目ト県務間わ立25対中1面オサ文選ろぐぽえ届心情シ金両受ま。逮 <br>
                                あうせこ題事ンゃ複優ワ低根オヌ悪容法ヘトタ野州キ読読ッーよ読廟 <br>
                                キ選障偉セサ総集クにへと実可ろ再合けば阜2発だれぽレ継区スオサ <br>
                                昨援対どぱ。
                            </p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

 
    
    <?php get_footer();?>