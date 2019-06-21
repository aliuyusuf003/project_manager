<h1>Creating Tasks</h1>

<?php echo validation_errors("<p class='bg-danger'>"); ?>
<?php $attributes = array('id'=>'create_task',); ?>

<?php echo form_open('tasks/create/'.$this->uri->segment(3).'',$attributes); ?>



<!-- Email -->
<div class="form-group">
	<?php echo form_label('Task Name'); ?>

	<?php $data = array(
		'class' => 'form-control',
		'name' => 'task_name',
		'placeholder' => 'Task Name',
		'required' =>'required'

	); ?>


	<?php echo form_input($data); ?>

</div>

<!-- Project Description -->
<div class="form-group">
	<?php echo form_label('Task Description'); ?>

	<?php $data = array(
		'class' => 'form-control',
		'name' => 'task_body',
		'placeholder' => 'Enter Task description',
		'required' =>'required'

	); ?>


	<?php echo form_textarea($data); ?>

</div>

<!-- Due date -->
<div class="form-group">	
	<?php $data = array(
		'class' => 'form-control',
		'name' => 'due_date',
		'type' =>'date',
		'required' =>'required'

	); ?>


	<?php echo form_input($data); ?>

</div>



<!-- submit -->

<div class="form-group">
	

	<?php $data = array(
		'class' => 'btn btn-success',
		'name' => 'submit',
		'value' => 'Create Task'

	); ?>


	<?php echo form_submit($data); ?>

</div>


<?php echo form_close(); ?>



