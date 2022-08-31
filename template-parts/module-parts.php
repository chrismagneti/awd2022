<div class="magneti-custom-template-wrapper">

	<?php if( have_rows('template_page_modules') ):

		$rows = get_field('template_page_modules');

		while ( have_rows('template_page_modules') ) : the_row();

			/*************************
			 *   MODULE SETTINGS
			 * **********************/

			$additionalClasses = '';

			if( get_sub_field('hero_type') ) {
				$heroType = get_sub_field('hero_type');
				$additionalClasses .= ' ' . $heroType;
			}

			if( get_sub_field('no_bottom_padding') ) {
				$additionalClasses .= ' no-padding-bottom';
			}

			if( get_sub_field('add_additional_image_section_below') ) {
				$additionalClasses .= ' no-padding-bottom';
			}

			if( get_sub_field('no_top_padding') ) {
				$additionalClasses .= ' no-padding-top';
			}

			if( get_sub_field('less_bottom_padding') ) {
				$additionalClasses .= ' less-padding-bottom';
			}

			if( get_sub_field('less_top_padding') ) {
				$additionalClasses .= ' less-padding-top';
			}

			if( get_sub_field('more_bottom_padding') ) {
				$additionalClasses .= ' more-padding-bottom';
			}

			if( get_sub_field('more_top_padding') ) {
				$additionalClasses .= ' more-padding-top';
			}

			if( get_sub_field('narrow_content_width') ) {
				$additionalClasses .= ' narrow-inner';
			}
			
			if( get_sub_field('center_content') ) {
				$additionalClasses .= ' center-content';
			}

			if( get_sub_field('column_background_color') ) {
				$additionalClasses .= ' cols-have-background';
			}

			if( get_sub_field('dark_mode') ) {
				$additionalClasses .= ' dark-mode';
			}

			if( get_sub_field('vertically_center_columns') ) {
				$additionalClasses .= ' vertical-align';
			}

			if( get_sub_field('flip_sides') ) {
				$additionalClasses .= ' flip';
			}

			if( get_sub_field('divider_type') ) {
				$additionalClasses .= ' top-divider-' . get_sub_field('divider_type');
			}

			if( get_sub_field('number_of_columns') ) {
				$additionalClasses .= ' column' . get_sub_field('number_of_columns');
			}

			if( get_sub_field('reverse_columns_on_mobile') ) {
				$additionalClasses .= ' reverse-columns-on-mobile';
			}

			$next_row_index = get_row_index();
			$next_row = array_key_exists($next_row_index, $rows) ? $rows[$next_row_index] : false;

			$additionalStyles = '';

			if( get_sub_field('bgc') ) {
				// if the value returned for bgc starts with # , its a hex code and the value should be used directly
				// else, apply it as a classname
				if(substr( get_sub_field('bgc'), 0, 1 ) === "#"){
					$additionalStyles .= 'background-color:' . get_sub_field('bgc') . '; ';
				} else {
					$additionalClasses .= ' ' . get_sub_field('bgc');	
				}
			}

			if( get_sub_field('background_image') ) {
				$additionalClasses .= ' has-bg';
				if(!is_array(get_sub_field('background_image'))){
					$additionalStyles .= 'background-image: url(' . get_sub_field('background_image') . '); background-repeat: no-repeat; background-position: center center; background-size: cover;';
				}
			}

			if( get_sub_field('no_padding_left_right_col') ) {
				$additionalClasses .= ' no-left-padding-right-col';
			}

			if( get_sub_field('no_padding_right_left_col') ) {
				$additionalClasses .= ' no-right-padding-left-col';
			}

			if( get_sub_field('extra_padding_top_desktop_up') ) {
				$additionalClasses .= ' extra-padding-top-desktop-up';
			}

			if( get_sub_field('extra_padding_bottom_desktop_up') ) {
				$additionalClasses .= ' extra-padding-bottom-desktop-up';
			}

			if( get_row_layout() == 'hero_module' ): ?>

				<?php 
					if( get_sub_field('additional_content') ){
						$additionalClasses .= ' has-addl-content';
					}
					get_template_part( 
						'template-parts/blocks/hero_module', 
						null, // name
						[
							// variables going into the template part
							'additionalClasses' => $additionalClasses, 
							'additionalStyles' => $additionalStyles,
							'backgroundImage' => get_sub_field('background_image')
						]
					); 
				?>

			<?php elseif( get_row_layout() == 'standard_content_module' ): ?>

				<div class="custom-template-module template-part-standard-content padding-control<?php echo $additionalClasses; ?>"<?php if(get_sub_field('section_id')) { echo ' id="'.get_sub_field("section_id").'"'; } if($additionalStyles) { echo ' style="' . $additionalStyles . '"'; } ?>>


			        <div class="center outer">
			           
			        	<div class="inner-wrap">
			        		<?php the_sub_field('main_content'); ?>
			        	</div>

			        </div>
			    </div>

			<?php elseif( get_row_layout() == 'split_content_module' ): ?>

				<div class="custom-template-module template-part-5050-content padding-control<?php echo $additionalClasses; ?>"<?php if(get_sub_field('section_id')) { echo ' id="'.get_sub_field("section_id").'"'; } if($additionalStyles) { echo ' style="' . $additionalStyles . '"'; } ?>>


					<div class="center outer">
							
						<div class="template-split-5050-wrapper">

							<div class="a-columner column1">
								<?php the_sub_field('main_content_left'); ?>
							</div>

							<div class="a-columner column2">
								<?php the_sub_field('main_content_right'); ?>
							</div>


						</div>

					</div>
				</div>

			<?php elseif( get_row_layout() == 'column_module' ): ?>

				<div class="custom-template-module template-part-column-content padding-control<?php echo $additionalClasses; ?>"<?php if(get_sub_field('section_id')) { echo ' id="'.get_sub_field("section_id").'"'; } if($additionalStyles) { echo ' style="' . $additionalStyles . '"'; } ?>>


			        <div class="center">
			           
			        	<div class="template-column-wrapper">

			        		<?php if( get_sub_field('column_background_color') ) {
			        			$bgColColor = get_sub_field('column_background_color');
			        		} ?>

			        		<?php if( have_rows('columns') ):
			        			while( have_rows('columns') ) : the_row(); ?>

			        				<div class="a-columner"<?php if( $bgColColor ) { echo ' style="background-color: ' . $bgColColor . ';"'; } ?>>

			        					<?php if(get_sub_field('intro_image')) { ?>
			        						<div class="intro-image-wrap">
			        							<?php $introImage = get_sub_field('intro_image'); ?>
			        							<img src="<?php echo $introImage['url']; ?>" alt="<?php echo $introImage['alt']; ?>" />
			        						</div>
			        					<?php } ?>

			        					<div class="content-part">
			        						<?php the_sub_field('column_content'); ?>
			        					</div>

			        					<?php if(get_sub_field('column_button_url')) { ?>
				        					<div class="button-wrapper">
				        						<a href="<?php the_sub_field('column_button_url'); ?>" class="btn"<?php if(get_sub_field('button_opens_in_new_tab')) { echo ' target="_blank" rel="noopener noreferrer"'; } ?>><?php the_sub_field('column_button_text'); ?></a>
				        					</div>
				        				<?php } ?>

			        				</div>

			        			<?php endwhile;
			        		endif; ?>

			        	</div>

			        </div>

			        <?php if( get_sub_field('add_additional_image_section_below') ) { ?>
						
			        	<?php $extraStyle = 'style="background-image: url(' . get_sub_field('additional_background_image') . '); background-repeat: no-repeat; background-position: center center; background-size: cover;"'; ?>

			        	<div class="column-additional-image-section" <?php echo $extraStyle; ?>>
			        		<?php if( get_sub_field('additional_background_text') ) { ?>
			        			<div class="extra-text h-special upper fancy-text-outline"><?php the_sub_field('additional_background_text'); ?></div>
			        		<?php } ?>
			        	</div>

					<?php } ?>

			    </div>

			<?php elseif( get_row_layout() == 'carousel_module' ): ?>

				<div class="custom-template-module template-part-column-content padding-control<?php echo $additionalClasses; ?>"<?php if(get_sub_field('section_id')) { echo ' id="'.get_sub_field("section_id").'"'; } if($additionalStyles) { echo ' style="' . $additionalStyles . '"'; } ?>>


			        <div class="center">

			        	<?php if( get_sub_field('carousel_intro_title') ) { ?>
			        		<div class="carousel-title h-l black upper text-center"><?php the_sub_field('carousel_intro_title'); ?></div>
			        	<?php } ?>
			           
			        	<div class="template-carousel-wrapper">

			        		<?php if( have_rows('slides') ):
			        			while( have_rows('slides') ) : the_row(); ?>

			        				<div class="a-slide">

			        					<?php if(get_sub_field('intro_image')) { ?>
			        						<div class="intro-image-wrap">
			        							<?php $introImage = get_sub_field('intro_image'); ?>
			        							<img src="<?php echo $introImage['url']; ?>" alt="<?php echo $introImage['alt']; ?>" />
			        						</div>
			        					<?php } ?>

			        					<div class="content-part">
			        						<?php if(get_sub_field('content_line_1')) { ?>
			        							<div class="line1 body-xl"><?php the_sub_field('content_line_1'); ?></div>
			        						<?php } ?>
			        						<?php if(get_sub_field('content_line_2')) { ?>
			        							<div class="line2 body-m"><?php the_sub_field('content_line_2'); ?></div>
			        						<?php } ?>
			        					</div>

			        				</div>

			        			<?php endwhile;
			        		endif; ?>

			        	</div>

			        </div>
			    </div>

			<?php elseif( get_row_layout() == 'team_list_module' ): ?>

				<div class="custom-template-module template-part-team_list padding-control<?php echo $additionalClasses; ?>"<?php if(get_sub_field('section_id')) { echo ' id="'.get_sub_field("section_id").'"'; } if($additionalStyles) { echo ' style="' . $additionalStyles . '"'; } ?>>


					<div class="team-background-part" style="background-color: <?php the_sub_field('intro_section_background_color'); ?>"></div>

	        		<div class="team-intro-content-wrapper" style="background-color: <?php echo get_sub_field('intro_section_background_color'); ?>">
	        			<div class="center outer">
		        			<?php if( get_sub_field('intro_section_content') ) { ?>
		        				<?php the_sub_field('intro_section_content'); ?>
		        			<?php } ?>
		        		</div>
	        		</div>

			        <div class="template-team-expand-wrapper">
			        	<div class="center outer">

									<?php $teamIndex = 0; ?>

			        		<?php if( have_rows('team_members') ): ?>

										<div class="team-members-grid">

											<?php while( have_rows('team_members') ) : the_row(); ?>
	
												<div class="team-member">
	
													<?php 
														get_template_part( 
															'template-parts/components/team-member-image', 
															null, // name
															[ 'teamImage' => get_sub_field('team_member_image') ]
														); 
													?>
	
													<div class="content" data-team-member="<?php echo $teamIndex; ?>">
														<?php if(get_sub_field('name')) { ?>
															<div class="team-member-name dark-mode-target"><?php the_sub_field('name'); ?></div>
														<?php } ?>
	
														<?php if(get_sub_field('sub_title')) { ?>
															<p class="team-member-title <?php if(get_sub_field('bio_excerpt')) { ?> has-excerpt <?php } ?>"><?php the_sub_field('sub_title'); ?></p>
														<?php } ?>
														<?php if(get_sub_field('bio_excerpt')) { ?>
															<div class="team-member-excerpt <?php if(get_sub_field('full_bio_left')) { ?> has-bio <?php } ?>"><?php the_sub_field('bio_excerpt'); ?></div>
														<?php } ?>
	
														<?php if(get_sub_field('full_bio_left')) { ?>
															<a 
																class="link-with-icon serif green"
	
																href="#"
																data-src="#team-member-<?php echo $teamIndex; ?>"
																data-fancybox
																data-type="clone"
																data-preload="false"
																data-width="640"
																data-height="480"
																
															>
																<span class="link-text">Read Bio</span>
																<svg class="link-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"/></svg>
															</a>
														<?php } ?>
													</div>
													
												</div>
	
												<div class="modal-content" id="team-member-<?php echo $teamIndex; ?>">
													<div class="center">
														<div class="team-member">
															<div class="top">
																<?php 
																	get_template_part( 
																		'template-parts/components/team-member-image', 
																		null, // name
																		[ 'teamImage' => get_sub_field('team_member_image') ]
																	); 
																?>
																<div class="content">
																	<?php if(get_sub_field('name')) { ?>
																		<div class="team-member-name dark-mode-target"><?php the_sub_field('name'); ?></div>
																	<?php } ?>
																	<?php if(get_sub_field('sub_title')) { ?>
																		<p class="team-member-title <?php if(get_sub_field('full_bio_left')) { ?> has-bio <?php } ?>"><?php the_sub_field('sub_title'); ?></p>
																	<?php } ?>
																</div>
															</div>
	
															<div class="content" data-team-member="<?php echo $teamIndex; ?>">
																
	
																<?php if(get_sub_field('full_bio_left')) { ?>
																	<div class="body">
																	<?php echo get_sub_field('full_bio_left'); ?>
																	</div>
																<?php } ?>
	
																<?php if(get_sub_field('link_url')) { ?>
																	<a href="<?php echo get_sub_field('link_url'); ?>" class="nav-text dark-mode-target">
																	<?php echo get_sub_field('link_text'); ?>
																	</a>
																<?php } ?>
															</div>
														</div>
													</div>
												</div>
	
												<?php $teamIndex++; ?>
												
											<?php endwhile; ?>

										</div>
										
			        		<?php endif; ?>

			        	</div>
			        </div>

			    </div>

			<?php elseif( get_row_layout() == '5050_content_card_w_large_image_panel' ): ?>

				<?php 
					get_template_part( 
						'template-parts/blocks/5050_content_card_w_large_image_panel', 
						null, // name
						[
							// variables going into the template part
							'additionalClasses' => $additionalClasses, 
							'additionalStyles' => $additionalStyles,
							'backgroundImage' => get_sub_field('background_image'),
							'cardRounding' => get_sub_field('rounding'),
						]
					); 
				?>
				
			<?php elseif( get_row_layout() == 'content_card_w_large_icon_list_large_image_panel' ): ?>

				<?php 
					$list = get_sub_field('icon_list');
					get_template_part( 
						'template-parts/blocks/content_card_w_large_icon_list_large_image_panel', 
						null, // name
						[
							// variables going into the template part
							'list' => $list,
							'additionalClasses' => $additionalClasses, 
							'additionalStyles' => $additionalStyles,
							'backgroundImage' => get_sub_field('background_image'),
							'cardRounding' => get_sub_field('rounding'),
						]
					); 
				?>
			
			<?php elseif( get_row_layout() == 'classes_carousel_module' ): ?>
				
				<?php 
					$classes = get_sub_field('classes');
					$slidesToShow = get_sub_field('slides_to_show');
					if($classes && count($classes) > $slidesToShow) {
						$additionalClasses .= ' has-multiple-slides';
					}
					get_template_part( 
						'template-parts/blocks/classes_carousel_module', 
						null, // name
						[
							// variables going into the template part
							'classes' => $classes,
							'additionalClasses' => $additionalClasses, 
							'additionalStyles' => $additionalStyles,
							'backgroundImage' => get_sub_field('background_image'),
							'slidesToShow' => $slidesToShow
						]
					); 
				?>
		
			<?php elseif( get_row_layout() == 'blog_carousel_module' ): ?>
				
				<?php 
					$selectedPosts = get_sub_field('selected_posts');
					if($selectedPosts && count($selectedPosts) > 2) {
						$additionalClasses .= ' has-multiple-slides';
					}
					get_template_part( 
						'template-parts/blocks/blog_carousel_module', 
						null, // name
						[
							// variables going into the template part
							'selectedPosts' => $selectedPosts,
							'additionalClasses' => $additionalClasses, 
							'additionalStyles' => $additionalStyles,
							'backgroundImage' => get_sub_field('background_image')
						]
					); 
				?>

			<?php elseif( get_row_layout() == 'large_icon_list' ): ?>
				
				<?php 
					$list = get_sub_field('icon_list');
					get_template_part( 
						'template-parts/blocks/large_icon_list_module', 
						null, // name
						[
							// variables going into the template part
							'list' => $list,
							'additionalClasses' => $additionalClasses, 
							'additionalStyles' => $additionalStyles,
							'backgroundImage' => get_sub_field('background_image')
						]
					); 
				?>
			

			<?php elseif( get_row_layout() == 'alternating_sections_module' ): ?>

				<?php 
					get_template_part( 
						'template-parts/blocks/alternating_sections_module', 
						null, // name
						[
							// variables going into the template part
							'additionalClasses' => $additionalClasses, 
							'additionalStyles' => $additionalStyles,
							'image' => get_sub_field('image'),
							'content' => get_sub_field('main_content'),
							'moduleLayout' => get_sub_field('module_layout'),
						]
					); 
				?>

			<?php elseif( get_row_layout() == 'google_map' ): ?>

				<?php 
					get_template_part( 
						'template-parts/blocks/google_map', 
						null, // name
						[
							'additionalClasses' => $additionalClasses, 
							'additionalStyles' => $additionalStyles,
						]
					); 
				?>

			<?php elseif( get_row_layout() == 'accordion_grid_module' ): ?>

				<?php 
					get_template_part( 
						'template-parts/blocks/accordion_grid_module', 
						null, // name
						[
							'additionalClasses' => $additionalClasses, 
							'additionalStyles' => $additionalStyles,
							'accordions' => get_sub_field('accordions'), 
						]
					); 
				?>

			
			<?php else: ?>

				<!-- Missing Module: <?php echo get_row_layout(); ?> -->

			<?php endif;

		endwhile;
	endif; ?>	

</div>