<?php 
    include "parts/header.php"; 
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

    <!-- login card start -->
    <section class="cc-login-section">
        <div class="container">
            <div class="cc-login-register-card">
                <div class="cc-login-card">
                    <div class="cc-login-card-inner">
                        <h4><?php echo "Login"; ?></h4>
                        <form action="includes/user/user-action.php" method="POST">
                            <div class="form-group">
                                <label for="username">User name</label>
                                <input type="text" name="username" placeholder="User name">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" placeholder="Password">
                            </div>
                            <button id="login-button" name="login" type="submit">Login</button>
                        </form>
                    </div>
                </div>

                <div class="cc-register-card">
                    <div class="cc-login-card-inner">
                        <h4><?php echo "Register"; ?></h4>
                        <form action="includes/user/user-action.php" method="POST">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" placeholder="Password">
                            </div>
                            <div class="form-cc-user-type">
                                <label for="user_type">User Type</label>
                                <select id="user_type" name="user_type">
                                    <option value="employer">I am an Employer</option>
                                    <option value="job-seeker">I am a Job Seeker</option>
                                </select>
                            </div>
                            <button id="login-button" name="register" type="submit">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login card End -->

<?php include "parts/footer.php"; ?>