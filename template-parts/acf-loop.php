<!-- ACF Flexible Content Loop -->
<?php if( have_rows('page_modules') ): ?>
			<?php while( have_rows('page_modules') ): the_row(); ?>

				<?php if( get_row_layout() == 'hero_image_module' ): ?> <!-- Hero Image Module -->
                    <div class="container-fluid hero-image p-0 d-flex " style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('<?php the_sub_field('hero_image_module_image') ?> '); background-repeat: none; background-position: center; background-size: cover;">
                        <div class="hero-text text-center shadow-lg">
                            <h1>Fresh Persimmon</h1>
                            <p class="py-3">A good persimmon at its peak will taste sweet, mild, and rich. </br>Many people have described its flavor as “honey-like.”</p>
                            <button class="primary-button">Eat me</button>
                        </div>
                    </div>




            <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>