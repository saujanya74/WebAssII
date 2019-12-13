<div class="main-content">
	<div class="newrelease">
		<?php 
		foreach ($this->newrelease as $releaseitem) {
			extract($releaseitem);
		?>
		<div class="item">
			<h2><?php echo $title ?></h2>
			<div class="item-left">
				<p>Released Year: <?php echo $year ?> A.D.</p>
				<p>Genre: <?php echo $genre_name ?></p>
				<p>Director: <?php echo $director_name ?></p>
				<p>Classification: <?php echo $classification ?></p>
				<p>Starring: <?php echo $actors ?></p>
			</div>
			<div class="item-right">
				<img src="<?php echo URL ?>public/movies/<?php echo $thumbpath ?>">
			</div>
			<div class="clearfix"></div>
			<div class="item-other-detail">
				<p><b><?php echo $tagline ?></b></p>
				<p><?php echo $plot ?></p>
			</div>
		</div>
		<?php
		}
		?>
	</div>