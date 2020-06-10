<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?php echo base_url();?>assets/images/fact.jpg);">
		<h2 class="l-text2 t-center">
			A proppos de nous
		</h2>
	</section>

	<!-- content page -->
	<?php foreach ($result as $row) {
		# code...
	 ?>
	<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="row">
			<?php if ($row-> image !='') {
				# if this var $row is not empty try the follow condition
			?>
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
					<img src="<?php echo base_url() . 'assets/images/uploads/'. $row -> image; ?>">
						<!--<img src="<?php //echo base_url();?>assets/images/banner-14.jpg" alt="IMG-ABOUT">-->
					</div>
				</div>
			<?php } ?>

				<div class="col-md-8 p-b-30">
					
					<p class="m-text26 p-t-15 p-b-16"><?php echo $row -> title; ?></p>
						
						
					

					<p class="p-b-28">
					<?php echo $row -> content; ?>
						
					</p>

					<!--<div class="bo13 p-l-29 m-l-9 p-b-10">
						<p class="p-b-11">
							Pensé à apporter une quelconque innovation dans la gestion de l’administration en revoyant le système existant qui présente des inconvénients majeurs d’où notre choix pour le projet de fin d’année porte sur le sujet suivant						</p>

						<span class="s-text7">
							- Erick Tshibang
						</span>
					</div>-->
				</div>
			</div>
		</div>
	</section>
	<?php } ?>
    <section>
    	<!-- Trainers -->
	<div class="w3ls-section about-wthree" id="trainers">
		 <div class="container p-r-10 p-l-10">
			<h3 class="agileits-title">Trainers</h3> 
			<div class="flex-w">
				
			
			<div class="col-md-3  w3l-team ">
			   <div class="w3ls-info-about trainer-4">
					<img src="<?php echo base_url();?>assets/images/c1.jpg" alt="team-img">
					<h4>Erick</h4>
					<h5>Ingenieur-programmeur</h5>

					<div class="flex-m p-t-3">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
				</div>
				</div>
				
			</div>
			<div class="col-md-3  w3l-team">
			   <div class="w3ls-info-about trainer-4">
					<img src="<?php echo base_url();?>assets/images/c1.jpg" alt="team-img">
					<h4>Thurman</h4>
					<h5>boxer-puncher</h5>
				</div>
			</div>
			<div class="col-md-3  w3l-team">
			   <div class="w3ls-info-about trainer-4">
					<img src="<?php echo base_url();?>assets/images/c1.jpg" alt="team-img">
					<h4>Thurman</h4>
					<h5>boxer-puncher</h5>
				</div>
			</div>
			<div class="col-md-3  w3l-team">
			   <div class="w3ls-info-about trainer-4">
					<img src="<?php echo base_url();?>assets/images/c1.jpg" alt="team-img">
					<h4>Thurman</h4>
					<h5>boxer-puncher</h5>
				</div>
			</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //trainers -->
    </section>
    