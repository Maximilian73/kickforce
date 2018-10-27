<section class="span4 fund_project<?php echo $n; ?>" id="charity_progress">
    <div class="stat_project">
        <img src="/img/crowd_funding_1.jpg" alt="Fund Featured Image" />
        <br /><br />
        <h3><a href="<?php echo url_for('explore_show',$project); ?>"><?php echo $project->getName(); ?></a></h3>
        <p><a href="<?php echo url_for('@explore_category?slug_1=' . $project->getCategory()->getSlug()); ?>" ><?php echo $project->getCategory()->getName();?></a></p>
        <span><p><?php echo $project->description; ?></p></span>
        <span class="current_collection"> $<?php echo $project->getAllAmount() == 0 ? 0 : $project->getAllAmount(); ?></span>
        <h4> Pledged of $<?php echo $project->target; ?> Goal </h4>
        <div class="progress progress-warning progress-striped active">
            <div class="bar" style="width: <?php echo $project->getAllPercentAmount(); ?>%"></div>
        </div>
    </div>
    <div class="info"> 
        <div class="span4 first">
            <div>Pledgers</div>
            <div><i class="icon-user"></i><span><?php echo $project->getAllCount(); ?></span></div>
        </div>
        <div class="span4">
            <div>Funded</div>
            <div><i class="icon-thumbs-up"></i><span><?php echo $project->getAllPercentAmount() == 0 ? 0 : $project->getAllPercentAmount(); ?>%</span></div>
        </div>
        <div class="span4">
            <div>Days Left</div>
            <div><i class="icon-calendar"></i><span><?php echo $project->getDaysLeft(); ?></span></div>
        </div>
    </div> 
</section>
