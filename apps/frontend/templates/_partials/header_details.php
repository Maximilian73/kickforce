<ul class="details">
    <li><i class="icon-home"></i> CoffeeLife, Dnepropetrovsk, Ukraine </li>
    <li><i class="icon-envelope"></i> +38 095 909 67 30 </li>
    <?php if($sf_user->isAuthenticated()): ?>
        <li><i class="icon-user"></i><?php echo link_to('Hello, '.$sf_user->getName().'!','@settings'); ?></li>
        <?php if($sf_user->hasCredential('admin')): ?>
            <li><i class="icon-hand-right"></i><?php echo link_to('Backend','http://'.sfContext::getInstance()->getRequest()->getHost().'/backend.php', array('target'=>'_blank')); ?></li>
        <?php endif;?>
    <?php endif;?>
</ul>
