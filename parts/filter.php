<?php 
use CareerCraft\Classes\Helper;
?>
<div class="cc-job-filter-area">
    <div class="cc-job-filter-inner">
        <div class="cc-filters-outer">
            <!-- Filter Block -->
            <div class="cc-filter-block">
                <h4><?php echo "Search by Keywords"; ?></h4>
                <div class="form-group">
                    <input type="text" name="listing-search" placeholder="Job title, keywords, or company">
                </div>
            </div>

            <!-- Filter Block -->
            <div class="cc-filter-block">
                <h4><?php echo "Location"; ?></h4>
                <div class="form-group">
                    <input type="text" name="listing-search" placeholder="City or postcode">
                </div>
            </div>

        <!-- Filter Block -->
        <div class="cc-filter-block">
            <h4><?php echo "Category"; ?></h4>
            <div class="form-group">
                <select class="">
                    <option>Choose a category</option>
                    <option>Residential</option>
                    <option>Commercial</option>
                    <option>Industrial</option>
                    <option>Apartments</option>
                    <option>Residential</option>
                    <option>Commercial</option>
                    <option>Industrial</option>
                    <option>Apartments</option>
                    <option>Residential</option>
                    <option>Commercial</option>
                    <option>Industrial</option>
                    <option>Apartments</option>
                </select>
            </div>
        </div>

        <?php 
            Helper::filterCheckbox("Job-type", "Job type");

            Helper::filterCheckbox("date-posted", "Date Posted");
            
            Helper::filterCheckbox("experience-level", "Experience Level");
        ?>

        <!-- Filter Block -->
        <div class="cc-filter-block">
            <h4>Salary</h4>

            <div class="range-slider-one salary-range">
            <div class="salary-range-slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 75%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 75%;"></span></div>
            <div class="input-outer">
                <div class="amount-outer">
                <span class="amount salary-amount">
                    $<span class="min">0</span>
                    $<span class="max">15000</span>
                </span>
                </div>
            </div>
            </div>
        </div>

        </div>
    </div>
</div>