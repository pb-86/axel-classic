<?php
/**
 * Szablon komentarzy.
 *
 * @package WordPress
 * @subpackage Axel Classic
 * @author Reddog Systems <p.bachorek@red-dog.pl>
 */

?>

<div class="comments">
	<div class="wrapper is-small">

		<?php	comment_form(); ?>

		<ul class="comments__list">
			<?php wp_list_comments(); ?>
		</ul>

		<?php the_comments_pagination(); ?>

	</div>
</div>
