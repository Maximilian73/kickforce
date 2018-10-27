<?php $request = sfContext::getInstance()->getRequest(); ?>

<li><a href="<?php echo url_for('@homepage'); ?>">Home</a><span class="divider"> /</span></li>
<?php if (!$request->getParameter('slug_1')) { ?>
    <li class="active">Explore</li>
<?php } else { ?>
    <li><a href="<?php echo url_for('@explore'); ?>">Explore</a><span class="divider"> /</span></li>
    <li class="active"><?php echo $category; ?></li>
<?php }
