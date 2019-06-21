

<h1>Register</h1>

<?php echo validation_errors("<p class='bg-danger'>"); ?>
<?php $attributes = array('id'=>'register_form',); ?>

<?php echo form_open('users/register',$attributes); ?>

<!-- Firstname -->
<div class="form-group">
	<?php echo form_label('Firstname'); ?>

	<?php $data = array(
		'class' => 'form-control',
		'name' => 'first_name',
		'value'=> set_value('first_name'),
		'placeholder' => 'Enter firstname',
		'required' =>'required'

	); ?>


	<?php echo form_input($data); ?>

</div>

<!-- Lastname -->
<div class="form-group">
	<?php echo form_label('Lastname'); ?>

	<?php $data = array(
		'class' => 'form-control',
		'name' => 'last_name',
		'value'=> set_value('last_name'),
		'placeholder' => 'Enter lastname',
		'required' =>'required'

	); ?>


	<?php echo form_input($data); ?>

</div>

<!-- Email -->
<div class="form-group">
	<?php echo form_label('Email'); ?>

	<?php $data = array(
		'class' => 'form-control',
		'name' => 'email',
		'value' => set_value('email'),
		'placeholder' => 'Enter email',
		'required' =>'required'

	); ?>


	<?php echo form_input($data); ?>

</div>

<!-- username -->
<div class="form-group">
	<?php echo form_label('Username'); ?>

	<?php $data = array(
		'class' => 'form-control',
		'name' => 'username',
		'value' => set_value('username'),
		'placeholder' => 'Enter username',
		'required' =>'required'

	); ?>


	<?php echo form_input($data); ?>

</div>
<!-- password -->
<div class="form-group">
	<?php echo form_label('Password'); ?>

	<?php $data = array(
		'class' => 'form-control',
		'name' => 'password',
		'placeholder' => 'Enter password',
		'required' =>'required'


	); ?>


	<?php echo form_password($data); ?>

</div>

<!-- confirm password -->

<div class="form-group">
	<?php echo form_label('Confirm Password'); ?>

	<?php $data = array(
		'class' => 'form-control',
		'name' => 'confirm_password',
		'placeholder' => 'Confirm password',
		'required' =>'required'

	); ?>


	<?php echo form_password($data); ?>

</div>


<!-- submit -->

<div class="form-group">
	

	<?php $data = array(
		'class' => 'btn btn-success',
		'name' => 'submit',
		'value' => 'Register'

	); ?>


	<?php echo form_submit($data); ?>

</div>


<?php echo form_close(); ?>



