<?php
$categories = get_categories( [
	'taxonomy'     => 'category',
	'type'         => 'post',
	'child_of'     => 0,
	'parent'       => '',
	'orderby'      => 'name',
	'order'        => 'ASC',
	'hide_empty'   => 0,
] );
?>

<section>

    <input type="hidden" name="wp-nonce-categories" value="<?=wp_create_nonce('filter');?>">

    <ul class="categories-list">
    <?php
    if( $categories ){
        foreach( $categories as $cat ){
            // $cat->term_id
            // $cat->name (Рубрика 1)
            // $cat->slug (rubrika-1)
            // $cat->term_group (0)
            // $cat->term_taxonomy_id (4)
            // $cat->taxonomy (category)
            // $cat->description (Текст описания)
            // $cat->parent (0)
            // $cat->count (14)
            // $cat->object_id (2743)
            // $cat->cat_ID (4)
            // $cat->category_count (14)
            // $cat->category_description (Текст описания)
            // $cat->cat_name (Рубрика 1)
            // $cat->category_nicename (rubrika-1)
            // $cat->category_parent (0)
            ?>

            <li class="category-item" data-category-slug="<?=$cat->slug?>">
                <p class="category-label"><?=$cat->cat_name?> <span>(<?=$cat->count?>)</span></p>
            </li>

            <?php
        }
    }
    ?>
    </ul>
</section>