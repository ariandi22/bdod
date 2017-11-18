<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('date');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Welcome to CodeIgniter</title>

	<title>Welcome to </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bs/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/style.css"/>
    <link href="<?php echo base_url()?>assets/gpd/css/wmd.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/prettify/prettify.css" type="text/css" rel="stylesheet" />

    <script type="text/javascript" src="<?php echo base_url()?>assets/prettify/prettify.js"></script>
    
 
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }
	</style>
	<!-- JS -->
    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
    <script src="<?php echo base_url()?>assets/bs/js/bootstrap.min.js"></script>
    
</head>
<body onload="prettyPrint()">

 <nav class="navbar navbar-default navbar-fixed-top b-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-road"></span>big<b>doodle</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-inbox"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-gift"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-th-list"></span></a></li>

        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span></a>
            <ul class="dropdown-menu dropdown-lr animated flipInX" role="menu">
              <div class="col-lg-12">
                <div class="text-center"><h3><b>Login</b></h3></div>
                <form id="ajax-register-form" action="" method="post" role="form" autocomplete="off">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-4">
                        <input type="submit" class="form-control btn btn-primary btn-sm" value="login">
                      </div>

                      <div class="col-xs-4">
                        <button class="form-control btn btn-info btn-sm">register</button>
                      </div>

                    </div>
                  </div>

                </form>
              </div>
            </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row" style="padding-top: 10px;">

        <!-- content start -->
        <?php $this->load->view($content); ?>

        <?php $this->load->view('frontend/sidebar'); ?>
        <!-- sidebar end -->

  </div>
</div>

<br><br>
<hr>
<div id="container">
  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

    <script src="<?php echo base_url()?>assets/gpd/markdown/resizer.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/gpd/markdown/Markdown.Converter.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/gpd/markdown/Markdown.Editor.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/gpd/markdown/Markdown.Sanitizer.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/gpd/markdown/Markdown.js" type="text/javascript"></script>
</body>
</html> 