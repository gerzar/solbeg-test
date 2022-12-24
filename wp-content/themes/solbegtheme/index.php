<?php
/**
 * Главная страница (index.php)
 */
get_header(); ?> 
<section>
	<div class="container">
        <div class="main-container">
            <h1><?=__('Main Page', 'solbeg')?></h1>

            <?php get_template_part('categories'); ?>
            <div class="posts" id="post-list-solbeg">
                <?php 
                $args=[
                    'orderby' => 'title',
                    'order' => 'ASC',
                ];
                $my_query = new WP_Query($args);
                
                if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <?php get_template_part('loop'); ?>
                <?php endwhile;
                else: echo __('<p>No posts.</p>', 'solbeg'); endif; ?>	
            </div>
            <?php pagination(); ?>
        </div>
	</div>
</section>

<?php get_footer(); ?>