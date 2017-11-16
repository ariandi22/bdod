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
				<div class="media">
				  <div class="media-left">
				    <a href="#">
				      <img class="media-object" src="<?= base_url('assets/img/img-men2.png') ?>" width="45">
				    </a>
				  </div>
				  <div class="media-body">
				    <h4 class="media-heading">
				    	<a href="<?= base_url().'asking/detail/'.$ask['id_asking'] ?>">
				    		<?= $ask['name'] ?>
				    	</a>
				    </h4>
				    <?= $ask['asking'] ?>

				    <?php foreach ($comments as $a) { ?>
				    <?php if($ask['id_asking'] == $a['id_com_to_ask']) { ?>
				    <div class="media">
					  <div class="media-left">
					    <a href="#">
					      <img class="media-object img-circle" src="<?= base_url('assets/img/img-men2.png') ?>" width="35">
					    </a>
					  </div>
					  <div class="media-body">
					    <h4 class="media-heading">
					    	<a href="#">
					    		<?= $a['name'] ?>
					    	</a>
					    </h4>
						    <?= $a['comment']; ?>
					  </div>
					</div>
					<?php } ?>
					<?php } ?>

				  </div>
				</div>

				<br>
				<h4>answers</h4>
				<hr>

				<?php foreach ($answers as $c) { ?>
				    <div class="media">
					  <div class="media-left">
					    <a href="#">
					      <img class="media-object" src="<?= base_url('assets/img/img-men2.png') ?>" width="45">
					    </a>
					  </div>
					  <div class="media-body">
					    <h4 class="media-heading">
					    	<a href="#">
					    		<?= $a['name'] ?>
					    	</a>
					    </h4>
					    <?= $c['answer'] ?>

					    <?php foreach ($comments as $a) { ?>
					    <?php if($c['id_answer'] == $a['id_com_to_answer']) { ?>
					    <div class="media">
						  <div class="media-left">
						    <a href="#">
						      <img class="media-object img-circle" src="<?= base_url('assets/img/img-men2.png') ?>" width="35">
						    </a>
						  </div>
						  <div class="media-body">
						    <h4 class="media-heading">
						    	<a href="#">
						    		<?= $a['name'] ?>
						    	</a>
						    </h4>
						    	<?= $a['comment']; ?>
						  </div>
						</div>
						<?php } ?>
						<?php } ?>
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