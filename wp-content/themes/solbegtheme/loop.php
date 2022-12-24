<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */ 
?>
<article id="post-<?= the_ID(); ?>" <?= post_class(); ?>>
	<h2><?= the_title(); ?></h2>
	<div class="meta">
		<p>
            <?= 
            sprintf( __( 'Published: %s at %s', 'text_domain' ), 
                get_the_time(get_option('date_format')), get_the_time(get_option('time_format'))
            );
            ?>
        </p>
		<p><?=__("Author:", 'solbeg')?>  <?= the_author_posts_link(); ?></p>
		<p><?=__("Category:", 'solbeg')?> <?= the_category(',') ?></p>
	</div>
	<div class="article">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="image-post">
				<?= the_post_thumbnail(); ?>
			</div>
		<?php } ?>
		<div class="content">
			<?= the_excerpt(); ?>
            <p class="solbeg-additional-task">
                <?php 
                $solbeg = get_post_meta( get_the_ID(), 'solbeg', true );
                echo (($solbeg) ?? $solbeg ); 
                ?>
            </p>
		</div>
	</div>
</article>