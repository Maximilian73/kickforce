<div class="navbar-inner-right">
    <div class="nav-collapse collapse">
        <ul class="nav">
            <?php if(!$sf_user->isAuthenticated()): ?>
                <li><a href="#inline_register" onclick="return hs.expand(this)" class="various nav">Register</a></li>
                <li><a href="#inline_signin" onclick="return hs.expand(this)" class="various nav">Login</a></li>
            <?php else: ?>		    
                <li class="dropdown"><a class="dropdown-toggle" href="#">My Account<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo url_for('@settings'); ?>">Settings</a></li>
                        <li><a href="<?php echo url_for('@profile'); ?>">Profile</a></li>
                        <li><a href="<?php echo url_for('@summary'); ?>">Summary</a></li>
                        <li><a href="<?php echo url_for('@sf_guard_signout'); ?>">Logout</a></li>
                    </ul>
                </li>
            <?php endif; ?>
        </ul>
    </div>
    <!--/.nav-collapse -->
</div>
<!-- /.navbar-inner-right -->
