<!-- Title & BreadCrumbs -->
<section class="mtop">
    <section class="container-fluid container">
        <section class="row-fluid">
            <!-- Page Title -->
            <section id="donation_box">
                <section class="container container-fluid">
                    <section class="row-fluid">
                        <figure class="span12">
                            <h2>Title name</h2>
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
                    <li><a href="<?php echo url_for(@homepage); ?>">Home</a><span class="divider"> /</span></li>
                    <li class="active">About Us</li>
                </ul>
            </figure>
            <!-- End of breadcrumbs -->
        </section>
    </section>
</section>
<!-- End of Tile & Breadcrumbs -->

<!-- Page Content Container -->
<section id="content" class="mbtm blog">
    <section class="container-fluid container">
        <section class="row-fluid">
            <section class="horizontal_tabs_wrapper span12 first mbtm2">
                <figure class="span3" id="horizontal_tabs">
                    <ul id="myTab">
                        <?php foreach($articles as $k=>$article): ?>
                            <li class="<?php echo $k==0?'active':''; ?>">
                                <a data-toggle="tab" href="#<?php echo $article->getSlug(); ?>"><?php echo $article; ?></a>
                            </li>
                        <?php endforeach;?>				  
                    </ul>
                </figure>
                <figure class="span9" id="horizontal_tabs_content">			
                    <div class="tab-content" id="myTabContent">
                        <?php foreach($articles as $k=>$article): ?>								
                            <div id="<?php echo $article->getSlug(); ?>" class="tab-pane fade <?php echo $k==0?' active in ':''; ?>">
                                <h3><?php echo $article;?></h3>
                                <?php echo $article->getDescription(ESC_RAW); ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </figure>
            </section>
        </section>
    </section>
</section>
<!-- Page Content Container -->
