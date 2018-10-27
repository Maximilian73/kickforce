<?php $current = 'current'; $current_sub = 'class="current"';?>
<ul id="main-nav">
  <li><a href="<?php echo url_for('@homepage')?>" class="nav-top-item <?php echo $get_action === 'board' ? $current :'';?> no-submenu">Main page</a></li>
</ul>
<?php 
  include_component('apply','sections_nav'); 
?>

