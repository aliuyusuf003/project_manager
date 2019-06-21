

<h1>Edit Project</h1>

<?php echo validation_errors("<p class='bg-danger'>"); ?>
<?php $attributes = array('id'=>'edit_project',); ?>

<?php echo form_open('projects/edit/'.$project_data->id.'',$attributes); ?>



<!-- Email -->
<div class="form-group">
	<?php echo form_label('Project Name'); ?>

	<?php $data = array(
		'class' => 'form-control',
		'name' => 'project_name',
		'value' => $project_data->project_name
		

	); ?>


	<?php echo form_input($data); ?>

</div>

<!-- Project Description -->
<div class="form-group">
	<?php echo form_label('Project Description'); ?>

	<?php $data = array(
		'class' => 'form-control',
		'name' => 'project_body',
		'value' => $project_data->project_body
		

	); ?>


	<?php echo form_textarea($data); ?>

</div>



<!-- submit -->

<div class="form-group">
	

	<?php $data = array(
		'class' => 'btn btn-success',
		'name' => 'submit',
		'value' => 'Update'

	); ?>


	<?php echo form_submit($data); ?>

</div>


<?php echo form_close(); ?>



