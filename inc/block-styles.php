<?php

/**
 * Block Styles
 */
if ( function_exists('register_block_style') ) {
    /**
     * Register block styles.
     *
     * @since 1.0.0
     *
     * @return void
     */
    function midiateca_block_styles() {

        register_block_style(
            'core/heading',
            array(
                'name'  => 'midiateca-barlow-font',
                'label' =>  __('Fonte Alternativa', 'midiateca'),
                'isDefault' => false,
            )
        );
        
        register_block_style(
            'getwid/images-slider',
            array(
                'name'  => 'midiateca-rounded',
                'label' =>  __('Arredondado Midiateca', 'midiateca'),
                'isDefault' => false,
            )
        );

        register_block_style(
            'getwid/images-slider',
            array(
                'name'  => 'midiateca-circle',
                'label' =>  __('Círculo Midiateca', 'midiateca'),
                'isDefault' => false,
            )
        );


        register_block_style(
            'core/cover',
            array(
                'name'  => 'midiateca-rounded',
                'label' =>  __('Arredondado Midiateca', 'midiateca'),
                'isDefault' => false,
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'midiateca-rounded',
                'label' =>  __('Arredondado Midiateca', 'midiateca'),
                'isDefault' => false,
            )
        );

        register_block_style(
            'tainacan/carousel-terms-list',
            array(
                'name'  => 'midiateca-rounded',
                'label' =>  __('Arredondado Midiateca', 'midiateca'),
                'isDefault' => false,
            )
        );

        register_block_style(
            'core/image',
            array(
                'name'  => 'midiateca-rounded',
                'label' =>  __('Arredondado Midiateca', 'midiateca'),
                'isDefault' => false,
            )
        );

        register_block_style(
            'core/image',
            array(
                'name'  => 'midiateca-item-image',
                'label' =>  __('Imagem de Item Midiateca', 'midiateca'),
                'isDefault' => false,
            )
        );

        register_block_style(
            'tainacan/carousel-terms-list',
            array(
                'name'  => 'midiateca-circle',
                'label' =>  __('Círculo Midiateca', 'midiateca'),
                'isDefault' => false,
            )
        );
        
        register_block_style(
            'tainacan/carousel-collections-list',
            array(
                'name'  => 'midiateca-circle',
                'label' =>  __('Círculo Midiateca', 'midiateca'),
                'isDefault' => false,
            )
        );

        register_block_style(
            'core/search',
            array(
                'name'  => 'midiateca-search-bar',
                'label' =>  __('Barra de Busca Midiateca', 'midiateca'),
                'isDefault' => true,
            )
        );

        register_block_style(
            'core/button',
            array(
                'name'  => 'midiateca-fill-dark',
                'label' =>  __('Preenchido fundo escuro', 'midiateca'),
                'isDefault' => false,
            )
        );

        register_block_style(
            'core/button',
            array(
                'name'  => 'midiateca-outline-dark',
                'label' =>  __('Contorno fundo escuro', 'midiateca'),
                'isDefault' => false,
            )
        );

    }
    add_action('init', 'midiateca_block_styles');
}