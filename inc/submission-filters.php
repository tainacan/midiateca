<?php

if (class_exists('\Tainacan\Entities\Item')) {

	/* Filters to change data on submission new item */
	function midiateca_tainacan_submission_item_data( \Tainacan\Entities\Item $item, $data ) {
		if ($item instanceof \Tainacan\Entities\Item) {
			$item_repo = \Tainacan\Repositories\Items::get_instance();
			$collection = $item->get_collection();
			$metadatas = $collection->get_metadata();
			
			foreach($metadatas as $metadata) {
				if ($metadata->is_collection_key()) {
					foreach($data as $d) {
						if($d['metadatum_id'] == $metadata->get_id()) {
							$args = array(
								'meta_query' => [
									[
										'key' => $metadata->get_id(),
										'value' => $d['value']
									],
									'posts_per_page' => -1
								]
							);
							$response = $item_repo->fetch($args, $collection );
							if ( $response->have_posts() ) {
								$id = $response->posts[0]->ID;
								$storage_item = new \Tainacan\Entities\Item($id);
								$storage_item->set_description($item->get_description());
								$storage_item->set_title($item->get_title());
								$storage_item->set_document_type($item->get_document_type());
								$storage_item->set_document($item->get_document());
								$storage_item->set_document_options($item->get_document_options());
								return $storage_item;
							}
							return $item;
						}
					}
				}
			}
		}
		return $item;
	}
	add_filter( 'tainacan-submission-item-data', 'midiateca_tainacan_submission_item_data', 10, 2 );
}