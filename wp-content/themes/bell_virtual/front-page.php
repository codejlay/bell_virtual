<?php
/**
 * The main front-page file.
 * Template Name: Main Page
 *
 * @package white_canvas_Theme
 */

get_header(); ?>

<div class="site-content">
	<div class="content-area">

		<section class="intro clearfix" id="home">
			<div class="intro-top">
				<div class="container">
			<?php

			$args = array(
				'post_type' => 'intro',					
			);
				$query = new WP_Query( $args );
			?>

				<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>															
				
				<!-- <h1 class="intro-title container"><?php the_title(); ?></h1>	 -->			
				<h1 class="intro-title"><?php echo ( CFS()->get('intro_title')); ?></h1>	
				<h2 class="intro-blurb"><?php echo ( CFS()->get('intro_blurb')); ?></h2>	
				<a href="#contact" id="intro-contact-us" class="btn btn-light">meet our team</a>	
				</div>
			</div>					
				<div class="intro-description container">
					<p><?php echo ( CFS()->get('intro_description')); ?></p>
				</div>			
				
			<!-- End with this code to revert control to WP -->
			<?php endwhile; endif; wp_reset_postdata(); ?>	
			<div class="virtual-assistant" id="virtual-assistant">
				<div class="block">
					<?php

					$args = array(
						'post_type' => 'what_va',				
					);
						$query = new WP_Query( $args );
					?>

						<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
										
						<div class="block-50 block-image">
								<!-- Get featured image -->
							<?php echo get_the_post_thumbnail(get_the_id(), 'full') ?>							
						</div>
										
						<div class="block-50 block-right what-va-color">
							<h2 class="what-va-title"><?php the_title(); ?></h2>
							<p class="what-va-description"><?php echo ( CFS()->get('what_is_va_description')); ?></p>
							<a href="#" class="read-more read-more-light eModal-4"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i>read more</a>
						</div>											
					<!-- End with this code to revert control to WP -->
					<?php endwhile; endif; wp_reset_postdata(); ?>				
				</div>
				<div class="block">
					<?php

					$args = array(
						'post_type' => 'why_va',				
					);
						$query = new WP_Query( $args );
					?>

						<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
										
						<div class="block-50 why-va-color">
							<h2 class="why-va-title"><?php the_title(); ?></h2>
							<p class="why-va-description"><?php echo ( CFS()->get('why_va_description')); ?></p>
							<a href="#" class="read-more read-more-dark eModal-3"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i>read more</a>						
						</div>
										
						<div class="block-50 block-right block-image">
							<!-- Get featured image -->
							<?php echo get_the_post_thumbnail(get_the_id(), 'full') ?>	
						</div>											
					<!-- End with this code to revert control to WP -->
					<?php endwhile; endif; wp_reset_postdata(); ?>				
				</div>			
			</div>
			<div class="va-benefits">
				<div class="container">
					<h3 class="benefits-main-title">What are the Key Benefits of a contracting Virtual Assistant?</h3>
					<ul class="va-benefits-wrapper-block"><!-- va-benefits-wrapper-block -->
						<?php

						$args = array(
							'post_type' => 'va_benefit',									
							'order' => 'ASC',
						);
							$query = new WP_Query( $args );
						?>

							<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
						<li class="va-benefits-wrapper-item clearfix">
							<div class="va-benefits-info">
								<div class="va-benefits-image">
									<!-- Get featured image -->
									<?php echo get_the_post_thumbnail(get_the_id(), 'large') ?>							
								</div>					
							
								<div class="va-benefits-title">							
									<h3><?php the_title(); ?></h3>
								</div>
							</div>	
							
							<div class="va-benefits-description">
								<p><?php echo ( CFS()->get('va_benefit_description')); ?>
								<span class="ellipse"></span>	
								<span class="read-more-content"><?php echo ( CFS()->get('va_read_more')); ?></span></p>
							</div>
						<!-- End with this code to revert control to WP -->
						<?php endwhile; endif; wp_reset_postdata(); ?>
						</li>
					</ul><!-- /va-benefits-wrapepr-block -->
				</div>		
			</div>
		</section>
		<section class="about" id="about">		
			<div class="container">
				<?php

				$args = array(
					'post_type' => 'about_us',				
				);
					$query = new WP_Query( $args );
				?>

					<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
					
					<h1 class="about-title"><?php the_title(); ?></h1>
					<h2 class="about-blurb"><?php echo ( CFS()->get('about_blurb')); ?></h2>					
					<p class="about-description"><?php echo ( CFS()->get('about_description')); ?></p>
										
				<!-- End with this code to revert control to WP -->
				<?php endwhile; endif; wp_reset_postdata(); ?>			
			</div>	
			<div class="our">
				<ul class="our-wrapper-block container"><!-- our-wrapper-block -->
					<?php

					$args = array(
						'post_type' => 'our',											
						'order' => 'ASC',
					);
						$query = new WP_Query( $args );
					?>

						<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
					<li class="our-wrapper-item clearfix">
						
							<div class="our-image">
								<!-- Get featured image -->
								<?php echo get_the_post_thumbnail(get_the_id(), 'large') ?>							
							</div>					
						
							<div class="our-title">							
								<h2><?php the_title(); ?></h2>
							</div>
							
							<div class="our-description">
								<p><?php echo ( CFS()->get('our_description')); ?></p>
							</div>							
						
					<!-- End with this code to revert control to WP -->
					<?php endwhile; endif; wp_reset_postdata(); ?>
					</li>
				</ul><!-- /our-wrapepr-block -->	
			</div>		
		</section>
		<section class="services" id="services">
			<div class="services-main-title">
				<h1 class="container">services</h1>
			</div>					
			<ul class="services-wrapper-block"><!-- services-wrapper -->
				<?php

				$args = array(
					'post_type' => 'services_cpt',									
					'order' => 'ASC',
				);
					$query = new WP_Query( $args );
				?>

					<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
				<li class="services-wrapper-item clearfix">

					<div class="services-div-01 content">
						<div class="services-flex services-flex-1">
							<div class="services-title">							
								<!-- <h2><?php the_title(); ?></h2> -->
								<h2><?php echo ( CFS()->get('services_title')); ?></h2>							
							</div>
							<div class="btn btn-light swap">learn more</div>	
						</div>
						
					</div>
					<div class="swap services-div-02 content hide">	
						<div class="services-flex services-flex-2">
							<div class="services-description">							
								<?php echo ( CFS()->get('services_description')); ?>
							</div>							
						</div>								
					</div>
				<!-- End with this code to revert control to WP -->
				<?php endwhile; endif; wp_reset_postdata(); ?>
				</li>
			</ul><!-- /services-wrapper -->
			<div class="looking-for-more">
				<div class="container">
					<h2>Looking for more?</h2>
					<a href="mailto:info@bellvirtualsolutions.com" class="btn btn-light">get a custom quote</a>
				</div>
			</div>		
		</section>
		<section class="blog" id="blog">
			<h1 class="container">latest blogs</h1>
			<ul class="blog-wrapper-block container">	
				<?php $latest_blog_posts = new WP_Query( array( 'posts_per_page' => 2 ) );
					if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>
				<li class="blog-wrapper-item">	
				    <div class="blog-image">
				    	<?php echo the_post_thumbnail(); ?>
				    </div>
				    <h2 class="blog-title"><?php the_title() ;?></h2>		    	
					<a href="<?php the_permalink(); ?>" class="btn btn-dark">read more</a>
				<?php 
					endwhile; endif;
				?>
				</li>	 	
			 </ul>		 
		</section>
		<section class="contact" id="contact">
			<div class="container">
				<?php

				$args = array(
					'post_type' => 'contact_us',				
				);
					$query = new WP_Query( $args );
				?>

					<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
									
					<div class="contact-image">
						<!-- Get featured image -->
						<?php echo get_the_post_thumbnail(get_the_id(), 'large') ?>							
					</div>													
					
					<h1 class="contact-title"><?php the_title(); ?></h1>				
					<p class="contact-description"><?php echo ( CFS()->get('contact_description')); ?></p>									
				<!-- End with this code to revert control to WP -->
				<?php endwhile; endif; wp_reset_postdata(); ?>			
				<?php echo do_shortcode( '[contact-form-7 id="50" title="Main Contact Form"]' ); ?>	
			</div>
		</section>
	</div>
</div>

<?php get_footer(); ?>
