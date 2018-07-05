<?php $wallstreet_pro_options=theme_data_setup();
	  $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); 
	  if($current_options['service_section_enabled'] == true) { ?>
<!-- wallstreet Service Section ---->
<div class="service-section">
<div class="container">
	<div class="row">
		<div class="section_heading_title">
		<?php if($current_options['service_title']) { ?>
			<h1><?php echo esc_html($current_options['service_title']); ?></h1>
			<div class="pagetitle-separator">
				<div class="pagetitle-separator-border">
					<div class="pagetitle-separator-box"></div>
				</div>
			</div>
		<?php } ?>
		<?php if($current_options['service_description']) { ?>
			<p><?php echo esc_html($current_options['service_description']); ?></p>
		<?php } ?>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-4 col-sm-6 service-effect">
			<?php if($current_options['service_image_one']) { ?>
			<div class="service-box">
				<img class="img-responsive service-box-image" alt="Sleek &amp; Beautiful" src="<?php echo esc_url($current_options['service_image_one']); ?>">
			</div>
			<?php } ?>
			<div class="service-area">
			<?php if($current_options['service_title_one']) { ?>
			<h2><a href="#"><?php echo esc_html($current_options['service_title_one']); ?></a></h2>
			<?php } ?>
			<?php if($current_options['service_description_one']) { ?>
			<p><?php echo esc_html($current_options['service_description_one']); ?></p>
			<?php } ?>
			</div><!-- / service-area -->
		</div> <!-- / service-effect column -->
		
		<div class="col-md-4 col-sm-6 service-effect">
			<?php if($current_options['service_image_two']) { ?>
			<div class="service-box">
				<img class="img-responsive service-box-image" alt="Sleek &amp; Beautiful" src="<?php echo esc_url($current_options['service_image_two']); ?>">
			</div>
			<?php } ?>
			<div class="service-area">
			<?php if($current_options['service_title_two']) { ?>
			<h2><a href="#"><?php echo esc_html($current_options['service_title_two']); ?></a></h2>
			<?php } ?>
			<?php if($current_options['service_description_two']) { ?>
			<p><?php echo esc_html($current_options['service_description_two']); ?></p>
			<?php } ?>
			</div><!-- / service-area -->
		</div> <!-- / service-effect column -->
		
		<div class="col-md-4 col-sm-6 service-effect">
			<?php if($current_options['service_image_three']) { ?>
			<div class="service-box">
				<img class="img-responsive service-box-image" alt="Sleek &amp; Beautiful" src="<?php echo esc_url($current_options['service_image_three']); ?>">
			</div>
			<?php } ?>
			<div class="service-area">
			<?php if($current_options['service_title_three']) { ?>
			<h2><a href="#"><?php echo esc_html($current_options['service_title_three']); ?></a></h2>
			<?php } ?>
			<?php if($current_options['service_description_three']) { ?>
			<p><?php echo esc_html($current_options['service_description_three']); ?></p>
			<?php } ?>
			</div><!-- / service-area -->
		</div> <!-- / service-effect column -->
        </div>
	<div class="row">    
		<div class="col-md-4 col-sm-6 service-effect">
			<?php if($current_options['service_image_four']) { ?>
			<div class="service-box">
				<img class="img-responsive service-box-image" alt="Sleek &amp; Beautiful" src="<?php echo esc_url($current_options['service_image_four']); ?>">
			</div>
			<?php } ?>
			<div class="service-area">
			<?php if($current_options['service_title_four']) { ?>
			<h2><a href="#"><?php echo esc_html($current_options['service_title_four']); ?></a></h2>
			<?php } ?>
			<?php if($current_options['service_description_four']) { ?>
			<p><?php echo esc_html($current_options['service_description_four']); ?></p>
			<?php } ?>
			</div><!-- / service-area -->
		</div> <!-- / service-effect column -->
		<div class="col-md-4 col-sm-6 service-effect">
			<?php if($current_options['service_image_five']) { ?>
			<div class="service-box">
				<img class="img-responsive service-box-image" alt="Sleek &amp; Beautiful" src="<?php echo esc_url($current_options['service_image_five']); ?>">
			</div>
			<?php } ?>
			<div class="service-area">
			<?php if($current_options['service_title_five']) { ?>
			<h2><a href="#"><?php echo esc_html($current_options['service_title_five']); ?></a></h2>
			<?php } ?>
			<?php if($current_options['service_description_five']) { ?>
			<p><?php echo esc_html($current_options['service_description_five']); ?></p>
			<?php } ?>
			</div><!-- / service-area -->
		</div> <!-- / service-effect column -->                   
		<div class="col-md-4 col-sm-6 service-effect">
			<?php if($current_options['service_image_six']) { ?>
			<div class="service-box">
				<img class="img-responsive service-box-image" alt="Sleek &amp; Beautiful" src="<?php echo esc_url($current_options['service_image_six']); ?>">
			</div>
			<?php } ?>
			<div class="service-area">
			<?php if($current_options['service_title_six']) { ?>
			<h2><a href="#"><?php echo esc_html($current_options['service_title_six']); ?></a></h2>
			<?php } ?>
			<?php if($current_options['service_description_six']) { ?>
			<p><?php echo esc_html($current_options['service_description_six']); ?></p>
			<?php } ?>
			</div><!-- / service-area -->
		</div> <!-- / service-effect column -->
        </div>
	<div class="row">                 
		<div class="col-md-4 col-sm-6 service-effect">
			<?php if($current_options['service_image_seven']) { ?>
			<div class="service-box">
				<img class="img-responsive service-box-image" alt="Sleek &amp; Beautiful" src="<?php echo esc_url($current_options['service_image_seven']); ?>">
			</div>
			<?php } ?>
			<div class="service-area">
			<?php if($current_options['service_title_seven']) { ?>
			<h2><a href="#"><?php echo esc_html($current_options['service_title_seven']); ?></a></h2>
			<?php } ?>
			<?php if($current_options['service_description_seven']) { ?>
			<p><?php echo esc_html($current_options['service_description_seven']); ?></p>
			<?php } ?>
			</div><!-- / service-area -->
		</div> <!-- / service-effect column -->
		<div class="col-md-4 col-sm-6 service-effect">
			<?php if($current_options['service_image_eight']) { ?>
			<div class="service-box">
				<img class="img-responsive service-box-image" alt="Sleek &amp; Beautiful" src="<?php echo esc_url($current_options['service_image_eight']); ?>">
			</div>
			<?php } ?>
			<div class="service-area">
			<?php if($current_options['service_title_eight']) { ?>
			<h2><a href="#"><?php echo esc_html($current_options['service_title_eight']); ?></a></h2>
			<?php } ?>
			<?php if($current_options['service_description_eight']) { ?>
			<p><?php echo esc_html($current_options['service_description_eight']); ?></p>
			<?php } ?>
			</div><!-- / service-area -->
		</div> <!-- / service-effect column -->
		<div class="col-md-4 col-sm-6 service-effect">
			<?php if($current_options['service_image_nine']) { ?>
			<div class="service-box">
				<img class="img-responsive service-box-image" alt="Sleek &amp; Beautiful" src="<?php echo esc_url($current_options['service_image_nine']); ?>">
			</div>
			<?php } ?>
			<div class="service-area">
			<?php if($current_options['service_title_nine']) { ?>
			<h2><a href="#"><?php echo esc_html($current_options['service_title_nine']); ?></a></h2>
			<?php } ?>
			<?php if($current_options['service_description_nine']) { ?>
			<p><?php echo esc_html($current_options['service_description_nine']); ?></p>
			<?php } ?>
			</div><!-- / service-area -->
		</div> <!-- / service-effect column -->                
	</div>	
</div>
</div>
<?php } ?>
<!-- /wallstreet Service Section ---->