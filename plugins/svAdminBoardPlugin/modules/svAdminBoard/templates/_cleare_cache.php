<?php use_helper('jQuery');?>				
<?php
echo 
jq_link_to_remote(
  '<span>'.image_tag('/svAdminBoardPlugin/images/icons/clear_cache.png').'<br />'.'Clear cache</span>',
  array (
    'url' => '@default?module=svAdminBoard&action=clear',
    'confirm'=> 'Are Your want to clear cache?',
    'complete'=>"history.go(0)"
  ),
  array (
    'class'=>'shortcut-button'
  )
);
?>
