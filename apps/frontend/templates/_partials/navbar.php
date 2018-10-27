<div class="navbar-inner">
    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <div class="nav-collapse collapse">
        <ul class="nav">
            <li><a href="<?php echo url_for('@explore'); ?>" class="nav-explore">Explore</a></li>
            <li><a href="#" class="nav-learn">How It Works</a></li>
            <li><a href="#" class="nav-create">Create</a></li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" >News<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Latest News</a></li>
                    <li><a href="#">Success stories</a></li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" href="#" >More<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo url_for('@about'); ?>">About Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!--/.nav-collapse -->

</div>
<!-- /.navbar-inner -->
