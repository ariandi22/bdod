
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
				    <div class="dt prof">
				    asked by : <a><?= $ask['name'] ?></a> at <small><?= date('M d - h:i A ', strtotime($ask['created_at'])); ?></small>
				    </div>

				    <div class="qa">
				    <?= $ask['asking'] ?>
				    <?= $print ?>
					</div>

					<div class="hastag">
						<label class="label label-hashtag">php</label>
						<label class="label label-hashtag">mysql</label>
						<label class="label label-hashtag">js</label>
					</div>

					<div class="action-bottom">
						<a href="#" class="ln" data-toggle="collapse" data-target="#ask_com">beri komentar</a> | <a href="">share</a>
					</div>

						<div id="ask_com" class="collapse">
							<div class="panel-body">
								<div class="form-group">
									<textarea class="form-control" rows="4"></textarea>
								</div>
								<div class="form-group">
									<button class="btn btn-primary btn-sm pull-right">add comment</button>
								</div>
							</div>
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
					  <div class="media-body hr">
					    <h5 class="media-heading dt">
					    	<a href="#"><?= $a['name'] ?></a>
					    	<small><?= date('M d - h:i A ', strtotime($a['created_at'])); ?></small>
					    </h5>
						    <?= $a['comment']; ?>
					  </div>
					</div>
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
					      <img class="media-object img-rounded" src="<?= base_url('assets/img/img-men2.png') ?>" width="45">
					    </a>
					  </div>
					  <div class="media-body">
					    <h4 class="media-heading">
					    	<a href="#">
					    		<?= $c['name'] ?>
					    	</a>
					    </h4>
					    <div class="dt prof">
					    answers by : <a><?= $c['name'] ?></a> at <small><?= date('M d - h:i A ', strtotime($c['created_at'])); ?></small>
					    </div>

					    <div class="qa">
					    <?= $c['answer'] ?>
						</div>
						<div class="action-bottom">
							<a href="#" class="ln" data-toggle="collapse" data-target="#ask_com">beri komentar</a>
						</div>
						<hr>
					    <?php foreach ($comments as $a) { ?>
					    <?php if($c['id_answer'] == $a['id_com_to_answer']) { ?>
					    <div class="media">
						  <div class="media-left">
						    <a href="#">
						      <img class="media-object img-circle" src="<?= base_url('assets/img/img-men2.png') ?>" width="20">
						    </a>
						  </div>
						  <div class="media-body hr">
						    <h5 class="media-heading">
						    	<a href="#"><?= $a['name'] ?></a>
					    		<small><?= date('M d - h:i A ', strtotime($a['created_at'])); ?></small>
						    </h5>
						    	<?= $a['comment']; ?>
						  </div>
						</div>
						<?php } ?>
						<?php } ?>
					  </div>
					</div>
					<br><br>
					<?php } ?>

					<div class="panel">
						<h4>Jawaban Anda?</h4>
						<form method="post" action="<?= base_url('welcome/writeMd') ?>">
						<div class="form-group">
							<div class="wmd-panel">
						        <div id="wmd-button-bar" ></div>
						        <label for="answer_question_body" class="required"></label>
						        <textarea class="wmd-input" id="ask_question_body" name="asking"></textarea>
						    </div>

						    <div id="wmd-preview" class="wmd-panel wmd-preview"></div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-sm">Posting Jawaban</button>
						</div>
						</form>
					</div>
			</div>
<script>
  $(".media-body").each(function () {
    $("pre").addClass("prettyprint");
});
</script>