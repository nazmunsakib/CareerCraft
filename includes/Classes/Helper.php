<?php 
namespace CareerCraft\Classes;

class Helper{
    public static function filterCheckbox( $name, $title ){
        if( !$name || !$title ){
            return;
        }
        ?>
        <!-- Switchbox Outer -->
        <div class="cc-switchbox-outer">
            <h4><?php echo $title; ?></h4>
            <ul class="checkboxes">
                <li>
                    <input id="check-freelance" type="checkbox" name="<?php echo $name; ?>">
                    <label for="check-freelance">Freelance</label>
                </li>
                <li>
                    <input id="check-full-time" type="checkbox" name="<?php echo $name; ?>">
                    <label for="check-full-time">Full Time</label>
                </li>
                <li>
                    <input id="check-internship" type="checkbox" name="<?php echo $name; ?>">
                    <label for="check-internship">Internship</label>
                </li>
                <li>
                    <input id="check-temporary" type="checkbox" name="<?php echo $name; ?>">
                    <label for="check-temporary">Temporary</label>
                </li>
            </ul>
        </div>
        <?php
    }

    public static function redirect( $location ){
        header("Location: " . $location);
    } 

    public static function isLoggedIn(){
        return $_SESSION['is_logged_in'] ?? false;
    } 

    public static function getMassage($type = ''){
        return $_GET[$type] ?? false;
    }

    public static function getUserMeta($type = ''){
        return $_SESSION[$type] ?? '';
    }

    public static  function sanitizeInput($data, $type = 'string') {
        switch ($type) {
            case 'email':
                $data = filter_var($data, FILTER_SANITIZE_EMAIL);
                if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
                    return false;
                }
                break;
            case 'string':
                $data = filter_var($data, FILTER_SANITIZE_STRING);
                break;
            case 'password':
                if (strlen($data) < 6) {
                    return false;
                }
                break;
            case 'user_type':
                $data = filter_var($data, FILTER_SANITIZE_STRING);
                $allowed_types = ['employer', 'job-seeker'];
                if (!in_array($data, $allowed_types)) {
                    return false;
                }
                break;
        }
        return $data;
    }

    
}