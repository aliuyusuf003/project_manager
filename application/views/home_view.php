
<p class="bg-success">
	<?php if($this->session->flashdata('login_success')): ?>
		<?php echo $this->session->flashdata('login_success'); ?>
	<?php endif; ?>	

</p>

<p class="bg-success">
	<?php if($this->session->flashdata('user_registered')): ?>
		<?php echo $this->session->flashdata('user_registered'); ?>
	<?php endif; ?>	

</p>

<p class="bg-danger">
	<?php if($this->session->flashdata('login_failed')): ?>
		<?php echo $this->session->flashdata('login_failed') ?>
	<?php endif; ?>
	<?php if($this->session->flashdata('no_access')): ?>
		<?php echo $this->session->flashdata('no_access') ?>
	<?php endif; ?>
		
</p>

<div class="jumbotron">
	<h2 class="text-center">Welcome to CRM Portal</h2>
</div>

<?php if(isset($projects)): ?>
<h1>Projects</h1>


<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>
			Project Name
			</th>
			<th>
			Project Description
			</th>

			<th>
			Actions
			</th>
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($projects as $project): ?>
			<tr>
				<td><?php echo $project->project_name; ?></td>
				<td><?php echo $project->project_body; ?></td>
				<td><a href="<?php echo base_url();?>projects/display/<?php echo $project->id;?>">view</a></td>
				
				
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<?php endif; ?>



<?php if(isset($tasks)): ?>
<h1>tasks</h1>

<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>
			Task Name
			</th>
			<th>
			Task Description
			</th>
			<th>
			Task Action
			</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($tasks as $task): ?>
			<tr>
				<td><?php echo $task->task_name; ?></td>
				<td><?php echo $task->task_body; ?></td>
				<td><a href="<?php echo base_url();?>tasks/display/<?php echo $task->id;?>">view</a></td>
				
				
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<?php endif; ?>


