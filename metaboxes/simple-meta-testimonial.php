<div class="my_meta_control">
 
	<p>Testimonial Details</p>
 
	<label>Client</label>
 
	<p>
		<?php $mb->the_field('client'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		<span>name of person</span>
	</p>


	<label>Client's Title</label>
 
	<p>
		<?php $mb->the_field('client-title'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		<span>position or title of client</span>
	</p>


	<label>Company</label>
 
	<p>
		<?php $mb->the_field('company'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		<span>name of company</span>
	</p>

		
</div>