<h2>Welcome to ADMIN PANEL!</h2>
  <p id="page-intro">Main actions</p>
  <ul class="shortcut-buttons-set">
    <li>
      <a class="shortcut-button" href="<?php echo url_for('articles/new')?>">
        <span><img src="/svAdminBoardPlugin/images/add_article.png" alt="icon" /><br />Add article</span>
      </a>
    </li>
    <li>
      <a class="shortcut-button" href="<?php echo url_for('news/new')?>">
        <span><img src="/svAdminBoardPlugin/images/icons/add_new.png" alt="icon" /><br />Add new</span>
      </a>
    </li>
    <li>
      <a class="shortcut-button" href="<?php echo url_for('posts/new')?>">
        <span><img src="/svAdminBoardPlugin/images/icons/add_post.png" alt="icon" /><br />Add post</span>
      </a>
    </li>
    <li>
      <a class="shortcut-button" href="<?php echo url_for('mailing/start')?>">
        <span><img src="/svAdminBoardPlugin/images/icons/start_mailing.png" alt="" /><br />Start mailing</span>
      </a>
    </li>
    <li>
      <?php include_partial('svAdminBoard/cleare_cache');?>
    </li>
  </ul>
