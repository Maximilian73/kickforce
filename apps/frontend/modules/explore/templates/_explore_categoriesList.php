<?php $request = sfContext::getInstance()->getRequest(); ?>

<section id="sidebar" class="span3">
    <figure class="widget post_archives">
        <h3><i class="icon-star"></i> CATEGORIES </h3>
        <ul class="nav nav-list">
            <li class="<?php echo !$request->getParameter('slug_1') ? 'active':''; ?>">
                <a href="<?php echo url_for('@explore'); ?>">All Categories</a>
            </li>
            <?php foreach($categories as $category): ?>
                <li class="<?php echo $request->getParameter('slug_1') == $category->getSlug() ? 'active' : ''; ?>">
                    <a href="<?php echo url_for('@explore_category?slug_1=' . $category->getSlug()); ?>" ><?php echo $category; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </figure>
</section>
