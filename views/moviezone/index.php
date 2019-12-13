<?php require 'moviezone_nav.php'; ?>
<div class="content">
	<h1>New Releases</h1>
	<div class="page-info">
		<div class="page-info-movie">
			<?php
				foreach ($this->movieslist as $movieitem) {
					extract($movieitem);
			?>
			<div class="movie-list">
				<div class="movie-title">
					<h3><?php echo $title ?></h3>
				</div>
				<div class="inner">
					<h4><?php echo $rental_period ?></h4>
					<p><B>Genre</B>:<?php echo $genre_name ?></p>
					<p><b>Year:</b><?php echo $year ?></p>
					<p><B>Director</B>:<?php echo $director_name ?></p>
					<p><B>Classification</B>:<?php echo $classification ?></p>
					<p><b>Starring:</b> <?php echo $actors ?></p>
					<p><b>Studio:</b><?php echo $studio_name ?></p>
					<p class="jun"><b><?php echo $tagline ?></b></p>
				</div>
				<div class="inner-right">
					<img src="<?php echo URL ?>public/movies/<?php echo $thumbpath ?>" alt="poster of movie">
				</div>
				<div class="clearfix"></div>
				<div class="movie-desc">
					<p><?php echo $plot ?></p>
				</div>
				<div>
					<p><b>Rental:</b> DVD - $<?php echo $DVD_rental_price ?> || BluRay - $<?php echo $BluRay_rental_price ?></p>
					<p><b>Purchase:</b> DVD - $<?php echo $DVD_purchase_price ?> || BluRay - $<?php echo $BluRay_purchase_price ?></p>
					<p><b>Availability:</b> DVD - <?php echo $numDVD - $numDVDout ?>  || BluRay - <?php echo $numBluRay - $numBluRayOut ?></p>
				</div>
			</div>
			<?php
			}
			?>
		</div>
	</div>
	<div class="clearfix"></div>
</div>