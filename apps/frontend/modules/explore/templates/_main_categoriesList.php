<section id="ngo_features" class="mbtm">
    <section class="container-fluid container">
        <section id="offices_slider_warpper" class="span12 first mbtm2">
            <h3 class="heading1 bg-div">
                <span class="inner">
                    <strong> <a href="<?php echo url_for('@explore'); ?>">All Categories</a></strong>
                    <span class="bgr1"></span>
                </span>
            </h3>			
            <div class="i-category-col">
                <?php foreach($categories as $category): ?>
                    <a href="<?php echo url_for('@explore_category?slug_1=' . $category->getSlug()); ?>" class="i-category-link">
                        <span class="i-icon i-category-icon i-glyph-icon-30-animals"></span>
                        <span class="i-category-name"><?php echo $category; ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>
    </section>
</section>
