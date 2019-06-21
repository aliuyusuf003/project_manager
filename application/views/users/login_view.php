 <?php if(!$this->session->userdata('logged_in')): ?>
<h1>Login Here!</h1>

<?php if($this->session->flashdata('errors')): ?>
	<strong><?php echo $this->session->flashdata('errors');?></strong>
<?php endif; ?>
<?php $attributes = array('id'=>'login_form','class'=>'form-horizontal'); ?>

<?php echo form_open('users/login',$attributes); ?>

<!-- username -->
<div class="form-group">
	<?php echo form_label('Username'); ?>

	<?php $data = array(
		'class' => 'form-control',
		'name' => 'username',
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



<!-- submit -->

<div class="form-group">
	

	<?php $data = array(
		'class' => 'btn btn-success',
		'name' => 'submit',
		'value' => 'Login'

	); ?>


	<?php echo form_submit($data); ?>

</div>


<?php echo form_close(); ?>
 <?php endif;?>

