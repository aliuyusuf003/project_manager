

<h1>Register</h1>

<?php echo validation_errors("<p class='bg-danger'>"); ?>
<?php $attributes = array('id'=>'create_project',); ?>

<?php echo form_open('projects/create',$attributes); ?>



<!-- Email -->
<div class="form-group">
	<?php echo form_label('Project Name'); ?>

	<?php $data = array(
		'class' => 'form-control',
		'name' => 'project_name',
		'placeholder' => 'Project Name',
		'required' =>'required'

	); ?>


	<?php echo form_input($data); ?>

</div>

<!-- Project Description -->
<div class="form-group">
	<?php echo form_label('Project Description'); ?>

	<?php $data = array(
		'class' => 'form-control',
		'name' => 'project_body',
		'placeholder' => 'Enter project description',
		'required' =>'required'

	); ?>


	<?php echo form_textarea($data); ?>

</div>



<!-- submit -->

<div class="form-group">
	

	<?php $data = array(
		'class' => 'btn btn-success',
		'name' => 'submit',
		'value' => 'Create'

	); ?>


	<?php echo form_submit($data); ?>

</div>


<?php echo form_close(); ?>



