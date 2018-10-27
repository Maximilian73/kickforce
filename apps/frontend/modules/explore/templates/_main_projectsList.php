<?php foreach($projects as $project): ?>
    <?php $n = ' first'; ?>
    <?php include_partial('explore/partials/explore_project', array('project'=>$project, 'n'=>$n)); ?></a>
<?php endforeach;
