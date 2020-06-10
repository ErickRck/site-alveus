<!-- Footer -->
	<footer class="bg6 p-t-10 p-b-10 p-l-45 p-r-45">
		<div class="flex-w p-b-0">
			<div class="w-size6 p-t-0 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-10">
					Notre adresse
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Autres questions?, av. Kimbangu n.379, Lubumbashi, ou appeler nous au (+243) 820 380 817
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size8 p-t-0 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-0">
					Notre Equipe
				</h4>

				<ul>
					<li class="p-b-0">
						<a href="#" class="s-text7">
						<img src="<?php echo base_url();?>assets/images/c1.jpg" class="header-icon1" alt="ICON">
							Erick-Tshibang
						</a>
					</li>

					<li class="p-b-0">
						<a href="#" class="s-text7">
						<img src="<?php echo base_url();?>assets/images/c2.jpg" class="header-icon1" alt="ICON">
							SHadrack-Tshibangu
						</a>
					</li>

					<li class="p-b-0">
						<a href="#" class="s-text7">
						<img src="<?php echo base_url();?>assets/images/c3.jpg" class="header-icon1" alt="ICON">
							Jacques-Mbiya
						</a>
					</li>

					<li class="p-b-0">
						<a href="#" class="s-text7">
						<img src="<?php echo base_url();?>assets/images/c4.jpg" class="header-icon1" alt="ICON">
							Emma-Mutshid
						</a>
					</li>

					<li class="p-b-0">
						<a href="#" class="s-text7">
						<img src="<?php echo base_url();?>assets/images/c5.jpg" class="header-icon1" alt="ICON">
							Joachim-Masirika
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-0 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-0">
					Liens
				</h4>

				<ul>
					<li class="p-b-0">
						<a href="#" class="s-text7">
							Service
						</a>
					</li>

					<li class="p-b-">
						<a href="#" class="s-text7">
							A proppos
						</a>
					</li>

					<li class="p-b-0">
						<a href="#" class="s-text7">
							Contact
						</a>
					</li>

					<li class="p-b-0">
						<a href="#" class="s-text7">
							Poduit
						</a>
					</li>
				</ul>
			</div>

			

			<div class="w-size8 p-t-0 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Rejoiniez-nous
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg7 bo-rad-23 hov1 m-text3 trans-0-4">
							Souscrir
						</button>
					</div>

				</form>
			</div>
		</div>

	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/js/main.js"></script>

</body>
<tfoot>
	<div class="t-center p-l-15 p-r-15 bg4">
			

			<div class="t-center s-text8 p-t-19 p-b-19">
				Copyright © 2019 Tout droit est reserver. | Ce template est developper <i class="fa fa-laptop" aria-hidden="true"></i> par <a href="https://gip.com" target="_blank">G.I.P</a>
			</div>
		</div>
</tfoot>
</html>
