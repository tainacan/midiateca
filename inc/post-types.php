<?php

/**
 * Registers the instituicoes post type.
 */
function midiateca_instituicao_post_type_init() {

    // Registers instituicao post type 
    $args = array(
        'labels'             => array(
            'name'                  => _x( 'Instituições', 'Post type general name', 'midiateca' ),
            'singular_name'         => _x( 'Instituição', 'Post type singular name', 'midiateca' ),
            'menu_name'             => _x( 'Instituições', 'Admin Menu text', 'midiateca' ),
            'name_admin_bar'        => _x( 'Instituição', 'Add New on Toolbar', 'midiateca' ),
            'add_new'               => __( 'Adicionar Nova', 'midiateca' ),
            'add_new_item'          => __( 'Adicionar Nova Instituição', 'midiateca' ),
            'new_item'              => __( 'Nova Instituição', 'midiateca' ),
            'edit_item'             => __( 'Editar Instituição', 'midiateca' ),
            'view_item'             => __( 'Ver Instituição', 'midiateca' ),
            'all_items'             => __( 'Todas as Instituições', 'midiateca' ),
            'search_items'          => __( 'Pesquisar Instituições', 'midiateca' ),
            'parent_item_colon'     => __( 'Instituições pais:', 'midiateca' ),
            'not_found'             => __( 'Nenhuma Instituição encontrada.', 'midiateca' ),
            'not_found_in_trash'    => __( 'Nenhuma Instituição encontrada na lixeira.', 'midiateca' ),
            'featured_image'        => _x( 'Imagem de capa da Instituição', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'midiateca' ),
            'set_featured_image'    => _x( 'Configurar imagem de capa', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'midiateca' ),
            'remove_featured_image' => _x( 'Remover imagem de capa', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'midiateca' ),
            'use_featured_image'    => _x( 'Usar como imagem de capa', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'midiateca' ),
            'archives'              => _x( 'Lista de Instituições', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'midiateca' ),
            'insert_into_item'      => _x( 'Inserir na Instituição', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'midiateca' ),
            'uploaded_to_this_item' => _x( 'Enviado para esta Instituição', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'midiateca' ),
            'filter_items_list'     => _x( 'Filtrar lista de Instituições', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'midiateca' ),
            'items_list_navigation' => _x( 'Navegação da lista de Instituições', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'midiateca' ),
            'items_list'            => _x( 'Lista de Instituições', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'midiateca' ),
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'instituicoes' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'show_in_rest'       => true,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-bank',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'template'           => [
            [
                'core/image',
                [
                    'align' => 'center',
                    'sizeSlug' => 'large',
                    'linkDestination' => 'none',
                    'className' => 'is-style-midiateca-rounded is-midiateca-institution-cover'
                ],
            ],
            [
                'core/group',
                [
                    'style' => [
                        'spacing' => [
                            'padding' => [
                                'top' => '0%',
                                'right' => '0%',
                                'bottom' => '0%',
                                'left' => '0%'
                            ]
                        ]
                    ],
                    'className' => 'is-midiateca-institution-group'
                ],
                [
                    [
                        'core/image',
                        [
                            'align' => 'center',
                            'sizeSlug' => 'large',
                            'linkDestination' => 'none',
                            'className' => 'is-style-rounded'
                        ]
                    ],
                    [
                        'core/heading',
                        [
                            'placeholder' => __( 'Digite o nome da Instituição aqui...', 'midiateca'),
                            'textAlign' => 'center',
                            'level' => 1,
                            'style' => [
                                'typography' => [
                                    'fontSize' => '48px',
                                    'fontStyle' => 'normal',
                                    'fontWeight' => '500'
                                ]
                            ],
                            'textColor' => 'palette-color-4'
                        ]
                    ],
                    [
                        'core/heading',
                        [
                            'placeholder' => __( 'Cidade - UF' 'midiateca'),
                            'textAlign' => 'center',
                            'level' => 2,
                            'style' => [
                                'typography' => [
                                    'fontSize' => '22px'
                                ]
                            ],
                            'textColor' => 'palette-color-5'
                        ]
                    ],
                    [
                        'core/social-links',
                        [
                            'iconColor' => 'palette-color-1',
                            'iconColorValue' => 'var(--paletteColor1, #c4544e)',
                            'align' => 'center',
                            'className' => 'is-style-logos-only'
                        ],
                        [
                            [
                                'core/social-link',
                                [
                                    'service' => 'chain',
                                    'url' => 'https://www.es.gov.br/'
                                ]
                            ],
                            [
                                'core/social-link',
                                [
                                    'service' => 'twitter',
                                    'url' => 'https://twitter.com/'
                                ]
                            ],
                            [
                                'core/social-link',
                                [
                                    'service' => 'facebook',
                                    'url' => 'https://facebook.com/'
                                ]
                            ],
                            [
                                'core/social-link',
                                [
                                    'service' => 'instagram',
                                    'url' => 'https://instagram.com/'
                                ]
                            ],
                            [
                                'core/social-link',
                                [
                                    'service' => 'youtube',
                                    'url' => 'https://youtube.com/'
                                ]
                            ]
                        ]
                    ],
                    [
                        'core/paragraph',
                        [
                            'placeholder' => 'Insira aqui a descrição da instituição. Algo em torno de 400 caracteres de preferência.'
                        ]
                    ],
                    [
                        'core/separator',
                        [
                            'opacity' => 'css',
                            'backgroundColor' => 'palette-color-5',
                            'className' => 'is-style-wide'
                        ]
                    ],
                    [
                        'core/heading',
                        [
                            'placeholder' => __( 'Links', 'midiateca'),
                            'level' => 3,
                            'className' => 'is-style-brasiliana-barlow-font',
                            'content' => '<strong>Links</strong>'
                        ]
                    ],
                    [
                        'core/paragraph',
                        [
                            'placeholder' => 'Insira links relevantes da Instituição aqui.',
                            'content' => 'Site oficial: <a href="https://www.es.gov.br/">https://www.es.gov.br/</a><br>Acervo online no <a href="https://www.es.gov.br/">Tainacan</a><br>Avalie a Instituição no <a href="https://www.es.gov.br/">TripAdvisor</a><br>Página da Instituição na <a href="https://pt.wikipedia.org/wiki/">Wikipédia</a>'
                        ]
                    ]
                ]
            ],
            [
                'core/spacer',
                [
                    'height' => '52px'
                ]
            ],
            [
                'core/group',
                [
                    'align' => 'full'
                ],
                [
                    [
                        'core/columns',
                        [
                            'verticalAlignment' => 'center',
                            'align' => 'wide'
                        ],
                        [
                            [
                                'core/column',
                                [
                                    'verticalAlignment' => 'center',
                                    'width' => '75%'
                                ],
                                [
                                    [
                                        'core/heading',
                                        [
                                            'placeholder' => __( 'Nesta instituição', 'midiateca'),
                                            'level' => 2,
                                            'className' => 'is-style-brasiliana-barlow-font',
                                            'content' => '<em>Nesta instituição</em>'
                                        ]
                                    ]
                                ]
                            ],
                            [
                                'core/column',
                                [
                                    'verticalAlignment' => 'center',
                                    'width' => '25%'
                                ],
                                [
                                    [
                                        'core/paragraph',
                                        [
                                            'align' => 'right',
                                            'content' => '<p class="has-text-align-right"><a href="/">VER TODOS</a>'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ],
                    [
                        'tainacan/carousel-items-list',
                        [
                            'align' => 'wide',
                            'cropImagesToSquare' => true
                        ]
                    ],
                    [
                        'core/separator',
                        [
                            'opacity' => 'css',
                            'className' => 'is-style-wide alignwide'
                        ]
                    ],
                    [
                        'core/group',
                        [
                            'align' => 'wide',
                            'style' => [
                                'padding' => [
                                    'right' => '15%',
                                    'left' => '15%'
                                ]
                            ],
                            'className' => 'is-midiateca-institution-group'
                        ],
                        [
                            [
                                'core/columns',
                                [],
                                [
                                    [
                                        'core/column',
                                        [],
                                        [
                                            [
                                                'core/heading',
                                                [
                                                    'placeholder' => __( 'ENDEREÇO', 'midiateca'),
                                                    'level' => 3,
                                                    'className' => 'is-style-brasiliana-barlow-font',
                                                    'content' => '<strong>ENDEREÇO</strong>'
                                                ]
                                            ],
                                            [
                                                'core/paragraph',
                                                [
                                                    'placeholder' => __( 'Digite aqui o endereço...', 'midiateca'),
                                                    'content' => 'Cidade, Estado<br>Rua Tal, Número 123 – Bairro C<br>Cep: 20720-001'
                                                ]
                                            ]
                                        ]
                                    ],
                                    [
                                        'core/column',
                                        [],
                                        [
                                            [
                                                'core/heading',
                                                [
                                                    'placeholder' => __( 'CONTATOS', 'midiateca'),
                                                    'level' => 3,
                                                    'className' => 'is-style-brasiliana-barlow-font',
                                                    'content' => '<strong>CONTATOS</strong>'
                                                ]
                                            ],
                                            [
                                                'core/paragraph',
                                                [
                                                    'placeholder' => __( 'Digite aqui os contatos da instituição...', 'midiateca'),
                                                    'content' => 'Educativo: (81) 99966-0461<br>Administrativo: (81) 99815-0063<br>E-mail: mab@museus.gov.br'
                                                ]
                                            ]
                                        ]
                                    ],
                                    [
                                        'core/column',
                                        [],
                                        [
                                            [
                                                'core/heading',
                                                [
                                                    'placeholder' => __( 'HORÁRIO DE FUNCIONAMENTO', 'midiateca'),
                                                    'level' => 3,
                                                    'className' => 'is-style-brasiliana-barlow-font',
                                                    'content' => '<strong>HORÁRIO DE FUNCIONAMENTO</strong>'
                                                ]
                                            ],
                                            [
                                                'core/paragraph',
                                                [
                                                    'placeholder' => __( 'Digite aqui os horários de funcionament...', 'midiateca'),
                                                    'content' => 'Lorem ipsum sit amet dolor...'
                                                ]
                                            ]
                                        ]
                                    ]
                                                ],
                            ]
                        ]
                    ]
                ]
            ]
        ]
    );
    register_post_type( 'instituicoes', $args );
}
add_action( 'init', 'midiateca_instituicao_post_type_init' );

/**
 * Registers the curadorias post type.
 */
function midiateca_curadoria_post_type_init() {

    // Registers curadoria post type 
    $args = array(
        'labels'             => array(
            'name'                  => _x( 'Curadorias', 'Post type general name', 'midiateca' ),
            'singular_name'         => _x( 'Curadoria', 'Post type singular name', 'midiateca' ),
            'menu_name'             => _x( 'Curadorias', 'Admin Menu text', 'midiateca' ),
            'name_admin_bar'        => _x( 'Curadoria', 'Add New on Toolbar', 'midiateca' ),
            'add_new'               => __( 'Adicionar Nova', 'midiateca' ),
            'add_new_item'          => __( 'Adicionar Nova Curadoria', 'midiateca' ),
            'new_item'              => __( 'Nova Curadoria', 'midiateca' ),
            'edit_item'             => __( 'Editar Curadoria', 'midiateca' ),
            'view_item'             => __( 'Ver Curadoria', 'midiateca' ),
            'all_items'             => __( 'Todas as Curadorias', 'midiateca' ),
            'search_items'          => __( 'Pesquisar Curadorias', 'midiateca' ),
            'parent_item_colon'     => __( 'Curadorias pais:', 'midiateca' ),
            'not_found'             => __( 'Nenhuma Curadoria encontrada.', 'midiateca' ),
            'not_found_in_trash'    => __( 'Nenhuma Curadoria encontrada na lixeira.', 'midiateca' ),
            'featured_image'        => _x( 'Imagem de capa da Curadoria', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'midiateca' ),
            'set_featured_image'    => _x( 'Configurar imagem de capa', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'midiateca' ),
            'remove_featured_image' => _x( 'Remover imagem de capa', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'midiateca' ),
            'use_featured_image'    => _x( 'Usar como imagem de capa', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'midiateca' ),
            'archives'              => _x( 'Lista de Curadorias', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'midiateca' ),
            'insert_into_item'      => _x( 'Inserir na Curadoria', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'midiateca' ),
            'uploaded_to_this_item' => _x( 'Enviado para esta Curadoria', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'midiateca' ),
            'filter_items_list'     => _x( 'Filtrar lista de Curadorias', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'midiateca' ),
            'items_list_navigation' => _x( 'Navegação da lista de Curadorias', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'midiateca' ),
            'items_list'            => _x( 'Lista de Curadorias', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'midiateca' ),
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'curadorias' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'show_in_rest'       => true,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-awards',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
    register_post_type( 'curadorias', $args );
}
add_action( 'init', 'midiateca_curadoria_post_type_init' );