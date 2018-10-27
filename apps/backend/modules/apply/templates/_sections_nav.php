<?php $id = sfContext::getInstance()->getRequest()->getParameter('id'); ?>

  <!-- <br /><br /> -->

    <ul id="main-nav">
      <li><a href="#" class="nav-top-item <?php echo $module === 'content' || $module === 'article' ? $current :'';?>">Content</a>
        <ul>
          <li><a href="<?php echo url_for('@content')?>" <?php echo $module === 'content' ? $current_sub:''; ?> >Content list</a></li>
          <li><a href="<?php echo url_for('@article')?>" <?php echo $module === 'article' ? $current_sub:''; ?> >Article list</a></li>
        </ul>
      </li>
    </ul>

    <ul id="main-nav">
      <li><a href="#" class="nav-top-item <?php echo $module === 'project' || $module === 'project_status' || $module === 'project_category' ? $current :'';?>">Projects management</a>
        <ul>
          <li><a href="<?php echo url_for('@project_category')?>" <?php echo $module === 'project_category' ? $current_sub:''; ?> >Category list</a></li>  
          <li><a href="<?php echo url_for('@project_status')?>" <?php echo $module === 'project_status' ? $current_sub:''; ?> >Status list</a></li>  
          <li><a href="<?php echo url_for('@project')?>" <?php echo $module === 'project' ? $current_sub:''; ?> >Project list</a></li>  
        </ul>
      </li>            
    </ul>

    <ul id="main-nav">
      <li><a href="#" class="nav-top-item <?php echo $module === 'sfguarduser' || $module === 'section' || $module === 'settings' || $module === 'contact' ||  $module === 'manager'? $current :'';?>">Users management</a>
        <ul>
          <li><a href="<?php //echo url_for('@settings')?>/1/edit" <?php echo $module === 'settings' ? $current_sub:''; ?> >Параметры сайта</a></li>
          <li><a href="<?php //echo url_for('@contact')?>/1/edit" <?php echo $module === 'contact' ? $current_sub:''; ?> >Контакты</a></li>
          <li><a href="<?php //echo url_for('@manager')?>" <?php echo $module === 'manager' ? $current_sub:''; ?> >Менеджеры</a></li>
          <li><a href="<?php //echo url_for('@catalog_main')?>" <?php echo $module === 'catalog_main' ? $current_sub:''; ?> >Слайды</a></li>
          <li><a href="<?php //echo url_for('@section')?>" <?php echo $module === 'section' ? $current_sub:''; ?> >Основные разделы (META)</a></li>
          <li><a href="<?php echo url_for('@sf_guard_user')?>" <?php echo $module === 'sfguarduser' ? $current_sub:''; ?> >Administrators</a></li>
        </ul>
      </li>
    </ul>

    <ul id="main-nav">
      <li><a href="#" class="nav-top-item <?php echo $module === 'sfguarduser' || $action === 'info' || $action === 'contacts' || $action === 'manager' || $module === 'catalog_main' || $module === 'section' || $module === 'settings' || $module === 'contact' ||  $module === 'manager'? $current :'';?>">Настройки</a>
        <ul>
          <li><a href="<?php //echo url_for('@settings')?>/1/edit" <?php echo $module === 'settings' ? $current_sub:''; ?> >Параметры сайта</a></li>
          <li><a href="<?php //echo url_for('@contact')?>/1/edit" <?php echo $module === 'contact' ? $current_sub:''; ?> >Контакты</a></li>
          <li><a href="<?php //echo url_for('@manager')?>" <?php echo $module === 'manager' ? $current_sub:''; ?> >Менеджеры</a></li>
          <li><a href="<?php //echo url_for('@catalog_main')?>" <?php echo $module === 'catalog_main' ? $current_sub:''; ?> >Слайды</a></li>
          <li><a href="<?php //echo url_for('@section')?>" <?php echo $module === 'section' ? $current_sub:''; ?> >Основные разделы (META)</a></li>
          <li><a href="<?php echo url_for('@sf_guard_user')?>" <?php echo $module === 'sfguarduser' ? $current_sub:''; ?> >Администраторы</a></li>
        </ul>
      </li>
    </ul>
