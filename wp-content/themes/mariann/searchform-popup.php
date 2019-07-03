<?php
/**
 * The template for displaying search forms in Mariann search popup
 *
 * @package Mariann
 */
?>
	<form method="get" id="searchform_p" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="search" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s_p" placeholder="<?php echo esc_html__('Digite a(s) palavra(s) chave aqui e aperte "Enter" &hellip;', 'mariann' ); ?>" />
		<input type="submit" class="submit btn" id="searchsubmit_p" value="<?php echo esc_attr__( 'Search', 'mariann' ); ?>" />
	</form>
