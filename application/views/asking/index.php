
			<div class="col-md-8 col-sm-12">
				<div class="media">
				  <div class="media-left">
				    <a href="#">
				      <img class="media-object img-rounded" src="<?= base_url('assets/img/img-men2.png') ?>" width="45">
				    </a>
				  </div>
				  <div class="media-body">
				    <h4 class="media-heading">
				    	<a href="<?= base_url().'asking/detail/'.$ask['id_asking'] ?>">
				    		<?= $ask['ask_title'] ?>
				    	</a>
				    </h4>
				    <div class="dt">
				    asked by : <a><?= $ask['name'] ?></a> at <small><?= date('M d - h:i A ', strtotime($ask['created_at'])); ?></small>
				    </div>
				    <hr>
				    <div class="qa">
				    <?= $ask['asking'] ?>
					</div>

					<div class="hastag">
						<label class="label label-hashtag">php</label>
						<label class="label label-hashtag">mysql</label>
						<label class="label label-hashtag">js</label>
					</div>

					<div class="action-bottom">
						<a href="">beri komentar</a> | <a href="">share</a>
					</div>

					<hr>
				    <?php foreach ($comments as $a) { ?>
				    <?php if($ask['id_asking'] == $a['id_com_to_ask']) { ?>
				    <div class="media">
					  <div class="media-left">
					    <a href="#">
					      <img class="media-object img-circle" src="<?= base_url('assets/img/img-men2.png') ?>" width="20">
					    </a>
					  </div>
					  <div class="media-body">
					    <h5 class="media-heading dt">
					    	<a href="#"><?= $a['name'] ?></a>
					    	<small><?= date('M d - h:i A ', strtotime($a['created_at'])); ?></small>
					    </h5>
						    <?= $a['comment']; ?>
					  </div>
					</div>
					<hr>
					<?php } ?>
					<?php } ?>

				  </div>
				</div>

				<br>
				<h4><?= $countans ?> Answers</h4>
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