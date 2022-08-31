<!-- ACF Flexible Content Loop -->
<?php if( have_rows('page_modules') ): ?>
			<?php while( have_rows('page_modules') ): the_row(); ?>

				<?php if( get_row_layout() == 'hero_image_module' ): ?> <!-- Hero Image Module -->
                    <div class="container-fluid p-0">
                        <figure class="hero-image">
                             <img src="<?php the_sub_field('hero_image_module_image') ?>">
                        </figure>
                    </div>




            <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>