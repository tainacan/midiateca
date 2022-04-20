<?php

/**
 * Block Patterns
 */
function midiateca_block_patterns()
{
    register_block_pattern_category(
        'midiateca',
        array('label' => __('Midiateca', 'midiateca'))
    );

    $template_images_directory = get_template_directory_uri() . '/assets/images/';

    register_block_pattern(
        'midiateca/ficha-museu',
        array(
            'title'       => __('Ficha do Museu', 'midiateca'),
            'description' => _x('Blocos com elementos para mostrar os detalhes do museu agregado.', 'Descrição do padrão de bloco', 'midiateca'),
            'categories' => array('midiateca'),
            'content'     => '
            '
        )
    );
}
add_action('init', 'midiateca_block_patterns');
