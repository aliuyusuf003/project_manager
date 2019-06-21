<div class="col-xs-9">
	<h4><h1>Tasks for: <?php echo $project_name; ?></h1></h4>
		<p>Task name:<?php echo $task->task_name; ?></p>		
		<p>Created:<?php echo $task->created_at; ?></p>
		<p>Due on:<?php echo $task->due_date; ?></p>
			
		<h4>Task Description</h4>
		<p class="task-body"><?php echo $task->task_body; ?></p>
	
</div>




<div class="col-xs-3 pull-right">
	<h4>Task Actions</h4>
	<ul class="list-group">
		<li class="list-group-item"><a href="<?php echo base_url()?>tasks/edit/<?php echo $task->id?>">Edit</a></li>
		<li class="list-group-item"><a href="<?php echo base_url()?>tasks/delete/<?php echo $task->project_id;?>/<?php echo $task->id?>">Delete</a></li>
		<li class="list-group-item"><a href="<?php echo base_url();?>/tasks/mark_complete/<?php echo $task->id?>">Mark complete</a></li>
		<li class="list-group-item"><a href="<?php echo base_url();?>/tasks/mark_incomplete/<?php echo $task->id;?>">Mark Incomplete</a></li>
	</ul>	
</div>

