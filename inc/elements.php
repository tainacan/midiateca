<?php

/**
 * Adds action to insert share and back buttons on headers
 */
function midiateca_add_share_and_back_buttons() {
    ?>
    <div class="midiateca-header-elements">
        <button class="midiateca-header-button midiateca-header-button--back" onclick="event.preventDefault(); window && window.history && window.history ? window.history.back() : null">
            <span class="icon is-medium">
                <i class="dashicons dashicons-arrow-left-alt"></i>
            </span>
        </button>
        <button class="midiateca-header-button midiateca-header-button--share" onclick="event.preventDefault(); document.getElementsByClassName('midiateca-social-icons')[0].classList.toggle('is-list-open');">
            <span class="icon">
                <i class="tainacan-icon tainacan-icon-share"></i>
            </span>
            <div class="midiateca-social-icons">
                <?php echo blocksy_get_social_share_box(); ?>
            </div>
        </button>
    </div>
    <?php
}
add_action('blocksy:hero:before', 'midiateca_add_share_and_back_buttons');


/**
 * Adds Institution label bellow item Title
 */
function midiateca_add_institution_info_on_title($single_meta_id, $single_meta, $args) {
    
    if ($single_meta_id === 'categories') {
        
        $collections_post_types = \Tainacan\Repositories\Repository::get_collections_db_identifiers();
        $current_post_type = get_post_type();
            
        if (in_array($current_post_type, $collections_post_types)) {
            echo '<span class="institution-info-label">Item integrante de: <span/>';
        }
    }
}
add_action('blocksy:post-meta:render-meta', 'midiateca_add_institution_info_on_title', 0, 3);

/**
 * Retrieves the current items list source link
 */
function tainacan_get_source_item_list_url() {
	$args = $_GET;
	if (isset($args['ref'])) {
		$ref = $_GET['ref'];
		unset($args['pos']);
		unset($args['ref']);
		unset($args['source_list']);
		return $ref . '?' . http_build_query(array_merge($args));
	} else {
		unset($args['pos']);
		unset($args['ref']);
		unset($args['source_list']);
		return tainacan_get_the_collection_url() . '?' . http_build_query(array_merge($args));
	}
}

/** 
 * Single items also have a link to items list after its content
 */
function midiateca_add_link_to_items_list() {
    
    if ( is_singular() ) {
        $collections_post_types = \Tainacan\Repositories\Repository::get_collections_db_identifiers();
        $current_post_type = get_post_type();
            
        if (in_array($current_post_type, $collections_post_types)) {
            echo ('<div class="item-navigation-source-link"><a href="' . tainacan_get_source_item_list_url() . '">Voltar para a lista de itens</a></div>');
        }
    }
}
add_action('blocksy:template:after', 'midiateca_add_link_to_items_list');