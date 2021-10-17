<div class="col-md-<?php $this->get_column_class() ?> col-sm-6 col-xs-12 masonry-item <?php $this->entry_term_classes() ?>">
	<article<?php echo liquid_helper()->html_attributes( $attributes ) ?>>
		<div class="ld-pf-inner">

			<div class="ld-pf-image">
				<?php $this->entry_thumbnail( null, true ); ?>
			</div>

			<div class="ld-pf-bg"></div>

			<div class="ld-pf-details" data-custom-animations="true" data-ca-options='{ "triggerHandler": "mouseenter", "triggerTarget": ".ld-pf-item", "triggerRelation": "closest", "offTriggerHandler": "mouseleave", "animationTarget": ".split-inner", "startDelay": 0, "duration": 650, "delay": 100, "initValues": { "y": "150%" }, "animations": { "y": "0", "rotateX": 0 } }'>
				<div class="ld-pf-details-inner">

					<?php the_title( '<h3 class="ld-pf-title h4 font-weight-bold" data-split-text="true" data-split-options=\'{ "type": "words" }\'>', '</h3>' ) ?>					
					<?php $this->entry_cats() ?>

				</div>
			</div>

			<?php $this->get_overlay_button(); ?>

		</div>
	</article>
</div>