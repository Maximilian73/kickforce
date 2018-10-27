<div id="sidebar">
  <div id="sidebar-wrapper">

    <a href="<?php echo url_for('@homepage')?>">
      <img id="logo" src="/svAdminBoardPlugin/images/logo.png" alt="Simpla Admin logo" />
    </a>

    <?php if ($sf_user->isAuthenticated()): ?>			
      <?php include_partial('svAdminBoard/profile_links')?>
      <?php include_component('svAdminBoard','main_nav')?>
      <?php //include_partial('svAdminBoard/messages')?>
    <?php endif;?>

  </div>
</div> 
