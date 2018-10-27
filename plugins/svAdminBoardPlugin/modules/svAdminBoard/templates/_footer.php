            </div> 
          </div> 
        </div> 
      <?php //include_partial('global/content_box')?>
      <div class="clear"></div>
      <?php //include_partial('global/notification')?>
      <div class="clear"></div>
      <div id="footer">
      <small>
        <?php echo __('&#169; Copyright %current_year% %site_name% | Built on ', array('%current_year%' => date('Y'), '%site_name%' => svAdminBoard::getProperty('site'))); ?> 
        <?php echo link_to(svAdminBoard::getProperty('site_system'),'http://artexmedia.com.ua/', array('target'=>'blank')); ?> | <a href="#">Go Up</a>
      </small>
    </div>
  </div>
</div>
