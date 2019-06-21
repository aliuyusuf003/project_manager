<?php 
$home = '';
$register = '';
$projects = '';



if($this->uri->segment(1) == 'projects'){
  $projects = 'active';
}else if( $this->uri->segment(2) == 'register'){
  $register = 'active';
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Business|Task Portal</title>   
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
	<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<style type="text/css">
      .navbar{
        margin-bottom: 0;
        border-radius: 0;
      }
    </style> 

</head>
<body>
	<nav class="navbar navbar-inverse">
      <div class="container">
        <!-- container-fluid or container -->
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>" style="color:blue;">Business Taskportal</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <?php if(!$this->session->userdata('logged_in')): ?>
            <li class="<?php echo $register;?>"><a href="<?php echo base_url();?>users/register">Register <span class="sr-only">(current)</span></a></li>
            <?php endif; ?>
            <li class="<?php echo $projects;?>"><a href="<?php echo base_url();?>projects">Projects</a></li>
            
            <?php if($this->session->userdata('logged_in')): ?>
            <li class="dropdown">

              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quick links <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Create Project</a></li>
                <li><a href="#">Create Project task</a></li>
                <li><a href="#">Remove project</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Mark Project Complete</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Mark Project Incomplete</a></li>
              </ul>
            </li>
            <?php endif; ?>

            <?php if($this->session->userdata('logged_in')): ?>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo base_url();?>users/logout">Logout</a></li>
            </ul>
          <?php endif; ?>

          

          </ul>
          
         
          
         
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

<div class="container">
  <div class="row">
    <div class="col-md-2">
       
    </div>
    <div class="col-md-8">
        <?php $this->load->view($main_view); ?> 
    </div>
    <div class="col-md-2">
        
    </div>
  </div>
	 <div class="row">
    <div class="col-md-4">
        
    </div>
    <div class="col-md-4">     
      <?php $this->load->view('users/login_view'); ?>    
        
    </div>
    
    <div class="col-md-4">
        
    </div>


   </div>	



	
</div>

</body>
</html>