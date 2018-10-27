<?php foreach($projects as $k => $project): ?>
    <?php $k % 3 == 0 ? $n = ' first' : $n = ''; ?>
    <?php include_partial('explore/partials/explore_project', array('project'=>$project, 'n'=>$n)); ?></a>
<?php endforeach;
