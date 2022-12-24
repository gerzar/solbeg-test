<?php
/**
 * Шаблон подвала (footer.php)
 */
?>
	<footer>
		<div class="footer">
            <?php $args = array(
                'theme_location' => 'bottom',
                'container'=> false,
                'menu_class' => 'nav nav-pills bottom-menu',
                'menu_id' => 'bottom-nav',
                'fallback_cb' => false
            );
            wp_nav_menu($args);
            ?>
		</div>
        <div class="copyright">
            <p><?=__('Made by GZ', 'solbeg')?> <?=date('Y')?></p>
        </div>
	</footer>
<?php wp_footer(); ?>
</body>
</html>