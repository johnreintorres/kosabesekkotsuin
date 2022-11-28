<button type="button" class="scroll-top">
        <svg xmlns="http://www.w3.org/2000/svg" width="61" height="61" viewBox="0 0 61 61"><g transform="translate(1130 -391)"><g transform="translate(-714 -135)"><g transform="translate(-416 526)" fill="#fff" stroke="#40a240" stroke-width="3"><circle cx="30.5" cy="30.5" r="30.5" stroke="none"/><circle cx="30.5" cy="30.5" r="29" fill="none"/></g><path d="M18,15.317l8.93,8.937a1.681,1.681,0,0,0,2.384,0,1.7,1.7,0,0,0,0-2.391L19.2,11.738a1.685,1.685,0,0,0-2.327-.049L6.68,21.856a1.688,1.688,0,0,0,2.384,2.391Z" transform="translate(-403.188 538.754)" fill="#40a240"/></g></g></svg>
    </button>
<footer class="footer">
        <div class="footer-area">
            <div class="top">
                <div class="up">
                    <div class="left">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_logo_footer.jpg" alt="">
                        <!-- <p>練馬区石神井町2-15-8 グリーンフォレストII 1F</p> -->
                        <p>東京都練馬区石神井町2-15-8 グリーンフォレストII 1F</p>
                        <a href="tel:+0369134702"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_phone.svg" alt="">03 - 6913 - 4702</a>
                    </div>
                    <div class="right">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/img_sched.jpg" alt="">
                    </div>
                </div>
                <!-- <div class="anchor">
                    <a href="overview">
                        続きを読む
                    </a>
                </div> -->
            </div>
            <div class="bottom">
                <div class="content">
                <ul class="bottom-ul">
                    <li><a href="<?php echo site_url('/clinic')?>">当院について</a></li>
                    <li><a href="<?php echo site_url('/faq')?>">よくあるご質問</a></li>
                    <li><a href="<?php echo site_url('/news')?>">お知らせ</a></li>
                    <li><a href="<?php echo site_url('/first')?>">初めての方へ</a></li>
                    <li><a href="<?php echo site_url('/contact')?>">お問い合わせ</a></li>
                </ul>
                <div class="mid">
                    <a class="logo" href="<?php echo site_url('/')?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_logo_footer_trans.png" alt=""></a>
                    <a class="phone" href="tel:+0369134702"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_phone_black.svg" alt="">03 - 6913 - 4702</a>
                    <p>東京都練馬区石神井町2-15-8 グリーンフォレストII 1F</p>
                </div>
            </div>
            </div>
            <div class="bottom-green">
                <span>© 2022 こさべ接骨院</span>
            </div>
        </div>
    </footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    var ic_arrows = "<?php echo get_template_directory_uri(); ?>";
    </script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/main.js" defer></script>
    <script>
        const stalker = document.getElementById('circle');
    const hove = document.getElementById('hove');

    document.addEventListener('mousemove', function(e) {
        let x = e.clientX;
        let y = e.clientY;
        stalker.style.transform = 'translate(' + x + 'px, ' + y + 'px)';
    });
    </script>
</body>
</html>