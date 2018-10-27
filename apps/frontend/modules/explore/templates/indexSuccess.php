<?php $request = sfContext::getInstance()->getRequest(); ?>

<!-- Title & BreadCrumbs -->
<section class="mtop">
    <section class="container-fluid container">
        <section class="row-fluid">
            <!-- Page Title -->
            <section id="donation_box">
                <section class="container container-fluid">
                    <section class="row-fluid">
                        <figure class="span12">
                            <h2>Explore</h2>
                        </figure>
                    </section>
                </section>
            </section>
            <!-- end of Page Title -->
        </section>
        <section class="row-fluid">
            <!-- BreadCrumbs -->
            <figure id="breadcrumbs" class="span12">
                <ul class="breadcrumb">
                    <?php include_component('explore','explore_category'); ?>
                </ul>
            </figure>
            <!-- End of breadcrumbs -->
        </section>
    </section>
</section>
<!-- End of Tile & Breadcrumbs -->

<!-- Page Content Container -->
<section id="content" class="mbtm fund_rasising_listing">
    <section class="container-fluid container">
        <section class="row-fluid">
            <?php include_component('explore','explore_categoriesList'); ?>

            <section class="span9 fund_project_detail" id="fund_project_detail">  
                <ul id="portfolio-item-filter" class="category-list">
                    <li><a data-filter="*" href="#">TRENDING</a></li>
                    <li><a data-filter="*" href="#">FINAL COUNTDOWN</a></li>
                    <li><a data-filter="*" href="#">NEW THIS WEEK</a></li>
                    <li><a data-filter="*" href="#">MOST FUNDED</a></li>
                </ul>
            </section>

            <section class="span9 fund_rasising_listing" id="fund_rasising_listing">  
                <figure class="span12 first" id="category_title">
                    <div class="span12 first"><?php include_slot('category'); ?></div>
                </figure>
                <section class="span12 first projects_holder">
                    <?php include_component('explore','explore_projectsList'); ?>
                </section>
            </section>

        </section>
    </section>
</section>
