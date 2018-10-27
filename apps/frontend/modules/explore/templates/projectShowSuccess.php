<!-- Title & BreadCrumbs -->
<section class="mtop">
    <section class="container-fluid container">
        <section class="row-fluid">
            <!-- Page Title -->
            <section id="donation_box">
                <section class="container container-fluid">
                    <section class="row-fluid">
                        <figure class="span12">
                            <h2><?php echo $project->getName(); ?></h2>
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
                    <li><a href="<?php echo url_for('@homepage'); ?>">Home</a><span class="divider"> /</span></li>
                    <li><a href="<?php echo url_for('@explore'); ?>">Explore</a><span class="divider"> /</span></li>
                    <li><a href="<?php echo url_for('@explore_category?slug_1=' . $project->getCategory()->getSlug()); ?>"><?php echo $project->getCategory(); ?></a><span class="divider"> /</span></li>
                    <li class="active"><?php echo $project->name; ?></li>
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
            <section class="span12 fund_project_detail" id="fund_project_detail">
                <ul id="portfolio-item-filter" class="category-list">
                    <li><a data-filter="*" href="#">Story</a></li>
                    <li><a data-filter="*" href="#">Updates</a></li>
                    <li><a data-filter="*" href="#">Comments</a></li>
                    <li><a data-filter="*" href="#">Funders</a></li>
                    <li><a data-filter="*" href="#">Gallery</a></li>
                </ul>
            </section>
            <section class="span9 first fund_project_detail" id="fund_project_detail">
                <figure class="span12 first outer_lyr" id="category_image">
                    <img src="/images/gallery_large1.jpg" alt="Crowd Funding" />
                </figure>
                <figure class="span12 first outer_lyr" id="project_contet">
                    <div class="inner_lyr">
                        <h3>Main</h3>
                        <p><?php echo $project->getDescription(); ?></p>
                    </div>
                </figure>
                <figure class="span12 first outer_lyr" id="project_contet">
                    <div class="inner_lyr">
                        <h3>Idea</h3>
                        <p><?php echo $project->getIdea(); ?></p>
                    </div>
                </figure>
                <figure class="span12 first outer_lyr" id="project_contet">
                    <div class="inner_lyr">
                        <h3>Market</h3>
                        <p><?php echo $project->getMarket(); ?></p>
                    </div>
                </figure>
                <figure class="span12 first outer_lyr" id="project_contet">
                    <div class="inner_lyr">
                        <h3>Team</h3>
                        <p><?php echo $project->getTeam(); ?></p>
                    </div>
                </figure>
            </section>
            <section class="span3 fund_project_detail" id="fund_project_detail">
                <figure class="span12" id="product_options">
                    <div class="first">
                        <h1><span> $<?php echo $project->getAllAmount() == 0 ? 0 : $project->getAllAmount(); ?></span></h1>
                    </div>
                    <div class="first">
                        <h4><span> RAISED OF $<?php echo $project->getTarget(); ?> GOAL </span></h4>
                    </div>
                    <div class="progress progress-success progress-striped active">
                        <div class="bar p80" style="width: <?php echo $project->getAllPercentAmount(); ?>%"></div>
                    </div>
                    <div class="first">
                        <h4><?php echo $project->getAllPercentAmount() == 0 ? 0 : $project->getAllPercentAmount(); ?>%</h4>
                    </div>
                    <figure class="span12 first fund_project" id="charity_progress">
                        <div class="info">
                            <div class="span4 first">
                                <div><?php echo $project->getAllCount() == 1 ? ' Pledger' : ' Pledgers'; ?></div>
                                <div><i class="icon-user"></i><span><?php echo $project->getAllCount(); ?></span></div>
                            </div>
                            <div class="span4">
                                <div>Funded</div>
                                <div><i class="icon-thumbs-up"></i><span><?php echo $project->getAllPercentAmount() == 0 ? 0 : $project->getAllPercentAmount(); ?>%</span></div>
                            </div>
                            <div class="span4">
                                <div>Days Left</div>
                                <div><i class="icon-calendar"></i><span><?php echo $project->getDaysLeft(); ?></span></div>
                            </div>
                        </div>
                    </figure>
                    <div class="first">
                        <h6>This campaign started on May 08 and will close on July 07, 2014 (11:59pm PT).</h6>
                    </div>
                    <a href="<?php echo url_for('explore_paypal_invest',$project);?>" class="btn btn-warning"> CONTRIBUTE NOW </a>
                </figure>
            </section>
        </section>
    </section>
</section>
