<?php if(!$sf_user->isAuthenticated()): ?>
    <?php include_component('sfGuardAuth','signin'); ?>
    <?php include_component('sfGuardRegister','register'); ?>
<?php endif;