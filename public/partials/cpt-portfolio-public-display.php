<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://millertchris.com
 * @since      1.2.0
 *
 * @package    Cpt_Portfolio
 * @subpackage Cpt_Portfolio/public/partials
 */
?>

<section class="portfolio-item">
    <div class="wrapper">
        <div class="row">
            <div class="col">
                <?php if ( get_field( 'project' ) ) :  ?>
                    <p class="project-type">Project Type: <?php the_field( 'project' ); ?></p>
                <?php endif; ?>
                <?php if ( get_field( 'url' ) ) :  ?>
                    <p class="project-website">Project Website: <a href="<?php the_field( 'url' ); ?>" target="_blank"><?php the_field( 'url' ); ?></a></p>
                <?php endif; ?>
                <?php the_field( 'description' ); ?>
            </div>
            <div class="col">
                <?php the_post_thumbnail(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="gallery">
                    <?php $gallery_images = get_field( 'gallery' ); ?>
                    <?php if ( $gallery_images ) :  ?>
                        <?php foreach ( $gallery_images as $gallery_image ): ?>
                                <img src="<?php echo esc_url( $gallery_image['sizes']['large'] ); ?>" alt="<?php echo esc_attr( $gallery_image['alt'] ); ?>" />
                            <p><?php echo esc_html( $gallery_image['caption'] ); ?></p>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="video">
                    <?php the_field( 'video' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
