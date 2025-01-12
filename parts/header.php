<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Craft</title>
    <link rel="stylesheet" href="assets//css/normalize.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Autoload file include-->
    <?php 
        require_once __DIR__ . '/../vendor/autoload.php';
        use CareerCraft\Classes\Helper;
    ?>

    <main id="js-primary">
        <!-- Header Start -->
        <header class="cc-main-header">
            <div class="container">
                <div class="cc-header-inner">
                    <div class="cc-header-left">
                        <a href="index.php" class="cc-logo">Cc</a>
                    </div>
                    <div class="cc-header-right">
                        <?php if( !Helper::isLoggedIn() ) : ?>
                            <a href="login.php" class="cc-login-register-btn"><?php echo 'Login / Register'; ?></a>
                        <?php else : ?>
                            <a href="logout.php" class="cc-login-register-btn"><?php echo 'Logout'; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->
