
<section class="bgwhite p-t-66 p-b-60">
<div class="container">
	<div class="row">
		<div class="col-md-6 p-b-30">
			<form method="post" action=" <?php echo base_url(); ?>inscription/validation ">
				<div class="bo4 of-hidden size15 m-b-20 form-control">
					<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="user-name" value="<?php echo set_value('user-name'); ?>" placeholder="Full Name">
					<span class="text-danger"><?php echo form_error('user-name'); ?></span>
				</div>
				<div class="bo4 of-hidden size15 m-b-20 form-control">
					<input class="sizefull s-text7 p-l-22 p-r-22 " type="email" name="user-email" value="<?php echo set_value('user-email'); ?>" placeholder="Full Email">
					<span class="text-danger"><?php echo form_error('user-email'); ?></span>
				</div>
				<div class="bo4 of-hidden size15 m-b-20 form-control">
					<input class="sizefull s-text7 p-l-22 p-r-22 " type="password" name="user-password" value="<?php echo set_value('user-password'); ?>" placeholder="Full Password">
					<span class="text-danger"><?php echo form_error('user-password'); ?></span>
				</div>
				<div class="w-size25 form-control">
							<!-- Button -->
					<input type="submit" name="inscription" value="Inscription" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
				</div>
			</form>
		</div>
	</div>
	
</div>	
</section>