<div id="body-wrapper"> 
  <?php include_partial('svAdminBoard/sidebar')?>
  <div id="main-content">
    <?php if ($sf_user->isAuthenticated()): ?>
      <?php //include_partial('apply/head'); ?>
      <?php include_partial('svAdminBoard/head')?>
    <?php endif;?>      
    <div class="clear"></div>
    <div class="content-box">
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">

