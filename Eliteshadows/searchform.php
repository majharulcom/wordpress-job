<?php
/**
 * The template for displaying search forms in zacklive
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group stylish-input-group">
                    <input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', '' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', '' ); ?>">
                    <span class="input-group-addon">
                        <button type="submit" class="search-submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
</form>

