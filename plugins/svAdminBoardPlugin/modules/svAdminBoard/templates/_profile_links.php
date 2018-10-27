<!-- Sidebar Profile links -->
<div id="profile-links">
  <?php if ($sf_user->isAuthenticated()): ?>
    <a href="#" title="Back to site" target="blank"><?php echo link_to('Back to site','http://'.sfContext::getInstance()->getRequest()->getHost(),array('target'=>'_blank'))?></a> | <a href="<?=url_for('@sf_guard_signout')?>" title="Sign Out">Sign Out</a>
  <?php endif;?>
</div>        
