<?php get_header(); ?>

<section>
        <div class="sub-fv">
            <div class="sub-fv-contact"></div>
            <div class="breadcrumb breadcrumb-contact">
                <div class="container">
                <a href="<?php echo site_url('/')?>" class="home"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_home.svg" alt=""></a>
                <img class="arrow" src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_breadcrumb_arrow.svg" alt="">
                <span>メールでのお問い合わせ</span>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="lp">
            <div class="lp-info lp-price lp-contact">
                <div class="lp-title">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_leaf.svg" alt="">
                    <span>CONTACT US</span>
                    <h2>メールでのお問い合わせ</h2>
                </div>
                <div class="content">
                    <p>こさべ接骨院での治療に関するご不明な点、ご質問などがありましたら、どうぞお気軽にご相談ください。</p>
                    <!-- <form action="">
                        <div class="input-fields">
                        <div class="form-grp">
                            <input type="text" name="name" id="" placeholder="お名前（必須）">
                        </div>
                        <div class="form-grp">
                            <input type="text" name="email" id="" placeholder="メールアドレス（必須）">
                        </div>
                        <div class="form-grp">
                            <textarea name="message" id="" cols="30" rows="10" placeholder="相談したいこと"></textarea>
                        </div>
                    </div>
                        <div class="anchor">
                            <div class="submit-grp"><input type="submit" value="送信"></div>
                        </div>
                    </form> -->
                    <?php echo do_shortcode('[contact-form-7 id="98" title="Contact form 1"]'); ?>
                </div>
                    
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>