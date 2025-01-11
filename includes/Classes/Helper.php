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
}