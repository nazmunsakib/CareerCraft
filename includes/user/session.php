<?php
    session_set_cookie_params([
        'lifetime'  => 86400, // 1 day
        'path'      => '/',
        'domain'    => '', // Set your domain if needed
        'secure'    => true, // Only if using HTTPS
        'httponly'  => true, // Prevent JavaScript access
        'samesite'  => 'Strict', // Prevent cross-site request forgery
    ]);
    session_start();

    // Regenerate session ID for security
    if (!isset($_SESSION['initiated'])) {
        session_regenerate_id(true);
        $_SESSION['initiated'] = true;
    }
