<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(<?php echo base_url();?>assets/images/fact.jpg);">
		<h2 class="l-text2 t-center">
			Service
		</h2>
	</section>


<!-- Instagram -->
	<section class="instagram p-t-20">
		<div class="sec-title p-b-52 p-l-15 p-r-15">
			<h3 class="m-text5 t-center">
				NOS SERVICES
			</h3>
		</div>
 		
		<div class="flex-w">
			<!-- Block4 -->
			<?php foreach ($result as $row) {
		# code...
	 ?>
			<div class="block4 wrap-pic-w">
				<img src="<?php echo base_url() . 'assets/images/uploads/'. $row -> image; ?>" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text1 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="ti-pencil-alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2"><?php echo $row -> title; ?></span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text21 m-b-15 h-size1 of-hidden">
						<?php echo $row -> description; ?>
							 
						</p>

						<span class="s-text21">
							Haute qualité
						</span>
					</div>
				</a>
			</div>
			<?php } ?>
		</div>

	</section>


	
	
	<!-- Shipping -->
	<section class="shipping bgwhite p-t-10 p-b-30">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Obtenir un site internet?
				</h4>

				<a href="#" class="s-text11 t-center">
					Cliquer ici pour voir plus d'info
				</a>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					Obtenir une application mobile?
				</h4>

				<span class="s-text11 t-center">
					cliquer ici pour voir plus d'info
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Restructurer votre site internet?
				</h4>

				<span class="s-text11 t-center">
					Cliquer ici pour voir plus d'info
				</span>
			</div>
		</div>
	</section>
