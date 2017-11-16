<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}
	</style>

	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	
	<nav class="navbar navbar-default">
		<div class="container-fluid">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">
	        <img alt="Brand" src="<?= base_url('assets/img/big.png') ?>">
	      </a>
	    </div>
	  </div>
	  </div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php foreach($asking as $a) { ?>
				<div class="media">
				  <div class="media-left">
				    <div class="row text-center">            
					  <div class="col-md-1" style="font-size: 30px; color:#606060;">
					        <span class="glyphicon glyphicon-triangle-top col-md-12"></span>
					        <div class="col-md-12 text-center">0</div>
					        <span class="glyphicon glyphicon-triangle-bottom col-md-12"></span>
					    </div>
					</div>
				  </div>
				  <div class="media-body">
				    <h4 class="media-heading">
				    	<a href="<?= base_url().'asking/detail/'.$a['id_asking'] ?>">
				    		<?= $a['name'] ?>
				    	</a>
				    </h4>
				    <?= $a['asking'] ?>
				  </div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>


<br><br>
<hr>
<div id="container">
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>