<p class="bg-danger">	
	<?php if($this->session->flashdata('project_deleted')): ?>
	<?php echo $this->session->flashdata('project_deleted'); ?>
	<?php endif; ?>
</p>

<p class="bg-info">
	<?php if($this->session->flashdata('project_updated')): ?>
	<?php echo $this->session->flashdata('project_updated'); ?>
	<?php endif; ?>

	<?php if($this->session->flashdata('project_created')): ?>
	<?php echo $this->session->flashdata('project_created'); ?>
	<?php endif; ?>

	<?php if($this->session->flashdata('task_updated')): ?>
	<?php echo $this->session->flashdata('task_updated'); ?>
	<?php endif; ?>

</p>

<p class="bg-success">
	<?php if($this->session->flashdata('task_created')): ?>
	<?php echo $this->session->flashdata('task_created'); ?>
	<?php endif; ?>
</p>

<h1>Projects</h1>
<a class="btn btn-primary pull-right" href="<?php echo base_url();?>projects/create">Create Project</a>
<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>
			Project Name
			</th>
			<th>
			Project Body
			</th>
			<th>
			Actions
			</th>
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($projects as $project): ?>
			<tr>
				<?php echo "<td><a href='".base_url()."projects/display/".$project->id."'>".$project->project_name."</td>"; ?>
				<?php echo "<td>".$project->project_body."</td>"; ?>
				
				<td><a class="btn btn-danger" href="<?php echo base_url();?>projects/delete/<?php echo $project->id;?>"><span class="glyphicon glyphicon-remove"></span></a></td>
				<!-- <td><a class="btn btn-danger pull-right" href="<?php //echo base_url();?>projects/delete/<?php //echo $project->id;?>">Delete Project</a></td>
			 -->
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

