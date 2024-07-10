<?php /**
 * 
 * Home Page
 * 
 */ ?>
<?php get_header(); ?>
<main id="main">
    <div class="inquiry">
        <div class="container">
            <div class="inquiry__wpr">
                <div class="inquiry__left">
                    <div class="inquiry__left-ttl">
                        <h2 class="inquiry__left-mainttl">ToneMusic</h2>
                        <p class="inquiry__left-sub">START YOUR MUSIC<br>CLASSES WITH US!</p>
                    </div>
                    <div class="inquiry__left-icons">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/group.png" alt="apple" class="img-fluid" width="36" height="36">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/google.png" alt="apple" class="img-fluid" width="36" height="36">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" alt="apple" class="img-fluid" width="36" height="36">
                    </div>
                    <p class="inquiry__left-or">OR</p>
                    <form class="inquiry__form" action="">
                        <div class="inquiry__input">
                            <input type="text" placeholder="Full Name" class="inquiry__input-name" name="username" id="username">
                        </div>
                        <div class="inquiry__input">
                            <input type="email" placeholder="Email" class="inquiry__input-email" name="useremail" id="useremail">
                        </div>
                        <div class="inquiry__input -password">
                            <input type="password" placeholder="Password" class="inquiry__input-password" name="userpassword" id="userpassword">
                            <a href="" class="inquiry__input-eye">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/vector.png" alt="" class="img-fluid" width="21" height="13">
                            </a>
                        </div>
                        <input type="submit" id="submit" name="submit-start" value="Start" class="inquiry__form-submit">
                    </form>
                    <p class="inquiry__login">Already have an account? <a href="./login">Log in</a></p>
                </div>
                <div class="inquiry__right">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video.png" alt="img" class="img-fluid" width="840" height="730">
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>