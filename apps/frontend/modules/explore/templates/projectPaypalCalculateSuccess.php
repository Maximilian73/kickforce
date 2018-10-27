<!-- Title & BreadCrumbs -->
<section class="mtop">
    <section class="container-fluid container">
        <section class="row-fluid">
            <!-- Page Title -->
            <section id="donation_box">
                <section class="container container-fluid">
                    <section class="row-fluid">
                        <figure class="span12">
                            <h2><?php echo $project->getName(); ?> - Calculate</h2>
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
                    <li><a href="<?php echo url_for('explore_show', $project); ?>"><?php echo $project->name; ?></a><span class="divider"> /</span></li>
                    <li class="active">Calculate</li>
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
            <section class="span9 fund_rasising_listing" id="fund_rasising_listing">  

                <?php //include_partial('explore/project_list', array('title'=>'Profile')); ?>

                <figure class="span12 first outer_lyr" id="project_contet">
                    <div class="inner_lyr">
                        <h3>Total Amount</h3>
                        <!-- Content -->
                        <form action="<?php //echo url_for('explore_paypal_invest',$project);?>" method="post">
                            <?php //echo $form; ?>
                            Project amount: <?php echo $sf_user->getAmountById($project->getId()); ?>
                            <br />
                            Site amount (<?php echo $project->getPercent(); ?>%): <?php echo $project->getSiteAmount(); ?>
                            <hr />
                            Total amount: <?php echo $sf_user->getTotalAmountById($project->getId()); ?>
                            <br /><br />
                            <a class="btn btn-primary" href="<?php echo url_for('explore_paypal_invest',$project);?>">Back</a>
                            <a class="btn btn-success" href="<?php echo url_for('explore_paypal_payment',$project);?>">Next</a>
                        </form>
                        <!-- End Content -->
                    </div>
                </figure>

            </section>
        </section>
    </section>
</section>
