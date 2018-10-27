<?php use_helper('I18N') ?>
<div id="form_auth">
<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
  <table border="0" cellpadding="7">
                    <?php if ($form['username']->renderError()):?>
                    <tr>
                    <td colspan=2><font size="2" color="#2bdaff"><?php echo $form['username']->renderError();?></font></td>
                    </tr>
                    <?php endif;?>
    <tr>
      <th align="right"><?php echo __( 'Username', array(), 'sf_admin' ) ?></th>
      <td><?php echo $form['username'] ?></td>
    </tr>

    <tr>
      <th align="right"><?php echo __( 'Password', array(), 'sf_admin' ) ?></th>
      <td><?php echo $form['password'] ?></td>
	</tr>
	<tr>
		<th align="right">&nbsp;</th>
		<td><input type="submit" value="<?php echo __('sign in', array(),  'sf_admin') ?>" /></td>
  </tr>
	<tr>
		<th align="right">&nbsp;</th>
		<td><a href="http://<?php echo sfContext::getInstance()->getRequest()->getHost();?>/" >Вернуться на сайт</a></td>
	</tr>
  </table>
</form>
</div>
