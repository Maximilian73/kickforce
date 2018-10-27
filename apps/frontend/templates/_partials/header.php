<!-- Start of Header -->
<header>
    <!-- Start Main Header -->
    <section class="top_bar">
        <section class="container-fluid container">
            <section class="row-fluid">
                <article class="span7">
                    <?php include_partial('global/partials/header_details'); ?>
                </article>
                <article class="span2 pull-right"> 		
                    <div class="nav_search pull-right">
                        <form method="post" action="#">
                            <input type="text" value="Search Here..." name="s" id="s" />
                            <button><i class="icon-search"></i></button>
                        </form>
                    </div>
                    <!-- /.nav_search -->
                </article>
                <article class="span3 pull-right"> 		
                    <ul class="social">
                        <li><a href="#" class="s8"> Pintrest</a> </li>
                        <li><a href="#" class="s7"> Youtube</a> </li>
                        <li><a href="#" class="s6"> Vimeo </a> </li>
                        <li><a href="#" class="s5"> Twitter</a> </li>
                        <li><a href="#" class="s4"> RSS </a> </li>
                        <li><a href="#" class="s3"> Flicker</a> </li>
                        <li><a href="#" class="s2"> Dribble</a> </li>
                        <li><a href="#" class="s1"> Facebook</a> </li>
                    </ul>
                </article>
            </section>
        </section>	
    </section>
    <section class="logo_container">
        <section class="container-fluid container">
            <section class="row-fluid">
                <section class="span4">
                    <h1 id="logo"><a href="<?php echo url_for('@homepage'); ?>"><img src="/img/red/logo.png"></a></h1>
                </section>
                <section class="span5 pull-right">
                    <figure class="charity_counter_wrapper">
                        <section class="span5">
                            <div class="charity_title">Charity<br />Marathon 2013</div>
                        </section>
                        <section class="span1 event_more pull-right">
                            <a href="news.html" data-placement="bottom" rel="tooltip" title="View Latest News"><i class="icon">+</i></a>
                        </section>
                        <section class="span6 counter_bg pull-right">
                            <div id="countdown162" class="tCountdOwn"></div>
                        </section>
                    </figure>
                </section>
            </section>
        </section>
    </section>
    <!-- Main Nav Bar -->
    <nav id="nav">
        <section class="container-fluid container">
            <section class="row-fluid">
                <div class="navbar navbar-inverse">
                    <?php include_partial('global/partials/navbar'); ?>
                    <?php include_partial('global/partials/navbar_right'); ?>
                </div>
                <!-- /.navbar -->
            </section>
        </section>
    </nav>
    <!-- End Main Nav Bar -->
</header>
<!-- End of Header -->
