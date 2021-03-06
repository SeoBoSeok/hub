<div class="<?php $this->get_grid_class() ?> masonry-item <?php $this->entry_term_classes() ?>">

	<article<?php echo liquid_helper()->html_attributes( $attributes ) ?>>

		<div class="ld-pf-inner pos-rel">

			<div class="ld-pf-image">
				<?php $this->entry_thumbnail( 'liquid-grid-hover-classic', true ); ?>
			</div>

			<div class="ld-pf-details py-4" data-custom-animations="true" data-ca-options='{ "triggerHandler": "mouseenter", "triggerTarget": ".ld-pf-item", "triggerRelation": "closest", "offTriggerHandler": "mouseleave", "animationTarget": ".split-inner", "startDelay": 0, "duration": 650, "delay": 200, "initValues": { "y": "150%" }, "animations": { "y": "0", "rotateX": 0 } }'>

				<div class="ld-pf-bg"></div>

				<div class="ld-pf-details-inner" data-custom-animations="true" data-ca-options='{ "triggerHandler": "mouseenter", "triggerTarget": ".ld-pf-item", "triggerRelation": "closest", "offTriggerHandler": "mouseleave", "animationTarget": ".ld-pf-btn", "startDelay": 0, "duration": 650, "delay": 100, "initValues": { "scale": "0" }, "animations": { "scale": "1" } }'>

					<div class="ld-pf-btns">

						<a href="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>" class="ld-pf-btn circle ld-pf-btn-solid zoom fresco" data-fresco-group="ld-pf-1">
							<span><i class="lqd-icn-ess icon-ld-search"></i></span>
						</a>

						<a href="<?php the_permalink() ?>" class="ld-pf-btn ra circle ld-pf-btn-solid ml-2">
							<span><i class="lqd-icn-ess icon-md-link"></i></span>
						</a>
					</div>

				</div>

			</div>

		</div>

		<?php the_title( '<h3 class="ld-pf-title h4 font-weight-bold">', '</h3>' ) ?>
		
	</article>

</div>