<!-- Title & BreadCrumbs -->
<section class="mtop">
    <section class="container-fluid container">
        <section class="row-fluid">
            <!-- Page Title -->
            <section id="donation_box">
                <section class="container container-fluid">
                    <section class="row-fluid">
                        <figure class="span12">
                            <h2>Settings</h2>
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
                    <li class="active">Settings</li>
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

            <?php include_partial('profile/menu_list', array('title'=>'Settings')); ?>

            <!-- Content -->
            <?php echo $form;?>
            <!-- End Content -->

        </section>
    </section>
</section>
