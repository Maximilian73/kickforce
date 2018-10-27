<link rel="stylesheet" href="/css/jquery-ui.css" />
<script src="/js/jquery-ui.js"></script>
<!-- Title & BreadCrumbs -->
<section class="mtop">
    <section class="container-fluid container">
        <section class="row-fluid">
            <!-- Page Title -->
            <section id="donation_box">
                <section class="container container-fluid">
                    <section class="row-fluid">
                        <figure class="span12">
                            <h2><?php echo $project->getName(); ?> - Payment</h2>
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
                    <li class="active">Payment</li>
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

Paypal Ok!
<br />
Your transactionId: <?php echo $sf_user->getFlash('transaction') ?>
<br />
Go to <a href="<?php echo url_for('explore_show',$project);?>"><?php echo $project->getName();?></a>

            </section>
        </section>
    </section>
</section>
