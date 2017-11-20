<script src="<?= base_url('assets/initial/initial.min.js') ?>"></script>
			<div class="col-md-8 col-g">
				<div class="media">
				  <div class="media-left">
				    <a href="#">
				      <img data-name="<?= $ask['name'] ?>" class="profile img-rounded"/>
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
						<button class="ln" data-toggle="collapse" data-target="#ask_com">beri komentar</button>
						<button href="">share</button>
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

					<div class="list">
					<ul>	
				    <?php foreach ($com_ask as $a) { ?>
				    <li>
				    <div class="media">
					  <div class="media-left">
					    <a href="#">
					      <img data-name="<?= $a['name'] ?>" class="profcom img-rounded"/>
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
					</li>
					<?php } ?>
					</ul>
					<?php if (!empty($com_ask)) {
						echo '<p class="loadMore">show more comments </p>';
						}
					?>
					</div>

				  </div>
				</div>

				<br>
				<h4><?= count($answers) ?> Answers</h4>
				<hr>

				<?php foreach ($answers as $c) { ?>
				    <div class="media">
					  <div class="media-left">
					    <a href="#">
					      <img data-name="<?= $c['name'] ?>" class="profile img-rounded"/>
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
							<button data-toggle="collapse" data-target="#ans_com">beri komentar</button>
						</div>

						<div id="ans_com" class="collapse">
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
						<div class="list">
						<ul>
					    <?php foreach ($comments as $a) { ?>
					    <?php if($c['id_answer'] == $a['id_com_to_answer']) { ?>
					    <li>
					    <div class="media">
						  <div class="media-left">
						    <a href="#">
						      <img data-name="<?= $a['name'] ?>" class="profcom img-rounded"/>
						    </a>
						  </div>
						  <div class="media-body hr">
						    <h5 class="media-heading">
						    	<a href="#"><?= $a['name'] ?></a>
					    		<small><?= date('M d - h:i A ', strtotime($a['created_at'])); ?></small>
						    </h5>
						    	<?= $a['comment'];?>
						  </div>
						</div>
						</li>
						<?php } ?>
						<?php } ?>
						</ul>
						<?php if (!empty($com_ask)) {
						echo '<p class="loadMore">show more comments </p>';
						}
						?>
						</div>

						<br>
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

  $('.profile').initial({
  	height:45,
  	width:45,
  	fontSize:25
  });

  $('.profcom').initial({
  	height:20,
  	width:20,
  	fontSize:12
  }); 
</script>


<script>
$(document).ready(function () {
  // Taking all UL inside lists
  $('.list > ul').each(function(){
    // Hiding all list elements except first 3
    $(this).find('li').slice(3).hide();
  });

  // Handling clicks to "load more" links
  $('.loadMore').on('click', function() {
    // Searching for previous UL in it
    var $list = $(this).prev('ul');
    // Taking next 5 hidden items and displaying them
    $list.find('li:hidden').show();
    if ($list.find('li:last-child').is(':visible')) {
      $list.next('.loadMore').hide();
    }

  })
});
</script>