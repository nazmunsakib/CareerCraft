<?php 
include "parts/header.php";
use CareerCraft\Classes\Helper;
?>

    <!-- Banner Start -->
    <section class="cc-banner">
        <div class="container">
            <div class="cc-banner-content">
                <h1><?php echo "Login / Register"; ?></h1>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Notice start -->
    <?php if( 'false' == Helper::getMassage('login') || Helper::getMassage('register')) : ?>
        <section class="cc-login-notice-section">
            <div class="container">
                <div class="cc-login-notice-wrap">
                    <?php 
                        if( 'false' == Helper::getMassage('login') ) {
                            echo "The username or password you entered is incorrect! Please try again.";
                        }

                        if( 'true' == Helper::getMassage('register') ) {
                            echo "Your account has been created successfully.";
                        }

                        if( 'false' == Helper::getMassage('register') ) {
                            echo "We encountered an issue while creating your account. Please check the details you provided and try again.";
                        }
                    ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- Notice end -->

    <!-- login card start -->
    <section class="cc-login-section">
        <div class="container">
            <div class="cc-login-register-card">
                <div class="cc-login-card">
                    <div class="cc-login-card-inner">
                        <?php if( !Helper::isLoggedIn() ) : ?>
                            <h4><?php echo "Login"; ?></h4>
                            <form action="includes/user/user-action.php" method="POST">
                                <div class="form-group">
                                    <label for="username"><?php echo "User name"; ?></label>
                                    <input type="text" name="username" placeholder="User name" required>
                                </div>
                                <div class="form-group">
                                    <label for="password"><?php echo "Password"; ?></label>
                                    <input type="password" name="password" placeholder="Password" required>
                                </div>
                                <button id="login-button" name="login" type="submit"><?php echo "Login"; ?></button>
                            </form>
                        <?php else: ?>
                            <p><strong>
                                <?php printf("Welcome back, %s ! You have successfully logged in.", Helper::getUserMeta('user_name')); ?>
                            </strong></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if( !Helper::isLoggedIn() ) : ?>
                    <div class="cc-register-card">
                        <div class="cc-login-card-inner">
                            <?php if( 'true' == Helper::getMassage('register') ) : ?>
                                <p><strong><?php echo "You can now log in and start exploring."; ?></strong></p>
                            <?php else: ?>
                                <h4><?php echo "Register"; ?></h4>
                                <form action="includes/user/user-action.php" method="POST">
                                    <div class="form-group">
                                        <label for="name"><?php echo "Full Name"; ?></label>
                                        <input type="text" name="name" placeholder="Full Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email"><?php echo "Email"; ?></label>
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password"><?php echo "Password"; ?></label>
                                        <input type="password" name="password" placeholder="Password" required>
                                    </div>
                                    <div class="form-cc-user-type">
                                        <label for="user_type"><?php echo "User Type"; ?></label>
                                        <select id="user_type" name="user_type" required>
                                            <option value="employer"><?php echo "I am an Employer"; ?></option>
                                            <option value="job-seeker"><?php echo "I am a Job Seeker"; ?></option>
                                        </select>
                                    </div>
                                    <button id="login-button" name="register" type="submit"><?php echo "Register"; ?></button>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- login card End -->

<?php include "parts/footer.php"; ?>