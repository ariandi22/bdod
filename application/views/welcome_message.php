
<div class="col-md-8">
		<?php foreach($asking as $a) { ?>
		<div class="col-md-1 col-xs-2 is-has">

			<div class="thumbnail text-center">
				<div class="angka">-5</div>
				<small>vote</small>
			</div>

			<div class="thumbnail text-center success">
				<div class="angka">5</div>
				<small>answers</small>
			</div>

			<div class="thumbnail text-center">
				<small><b>22 view</b></small>
			</div>

		</div>

		<div class="col-md-11 col-xs-10">
			<div class="thumbnail">
				<div class="ask-title">
					<a href="<?= base_url().'asking/detail/'.$a['id_asking'] ?>"><?= $a['ask_title'] ?></a>
				</div>

			<div class="ask">
				<?= $a['asking'] ?>
			</div>
				<div class="hastag">
					<label class="label label-hashtag">php</label>
					<label class="label label-hashtag">mysql</label>
					<label class="label label-hashtag">js</label>
				</div>

				<div class="row">
				  <div class="col-md-4 pull-right">
					<div class="col-md-12">
						<small class="dt">asked
							<?php
								$post_date= new DateTime($a['created_at']); 
								$now = new DateTime(); 
								$diff = $now ->diff($post_date); 
								echo  $diff->days . " Days " . $diff->h . " Hours " . $diff->i." Minute ago ";
							?>
						</small></div>
					<div class="col-md-2"><img src="<?= base_url('assets/img/img-girl.png')?>" class="img-rounded" width="25" height="25"></div>
					<div class="col-md-3"><small class="usr"><?= $a['name'] ?></small></div>
				  </div>
				</div>

			</div>

		</div>
		<div class="kasi-border">&nbsp</div>
		<br>
		<?php } ?>
</div>