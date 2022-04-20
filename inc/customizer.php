<?php 

/* Filters possible Blocksy color palletes */
function midiateca_filter_palette( $args ) {
	return array(
		array(
			'name' => 'Açaí Midiateca',
			'slug' => 'palette-color-1',
			'color' => 'var(--paletteColor1, #642d39)'
		),
		array(
			'name' => 'Açaí Midiateca Escuro',
			'slug' => 'palette-color-2',
			'color' => 'var(--paletteColor2, #30020C)'
		),
		array(
			'name' => 'Cor de Texto Midiateca',
			'slug' => 'palette-color-3',
			'color' => 'var(--paletteColor3, #040203)'
		),
		array(
			'name' => 'Cor de Título Midiateca',
			'slug' => 'palette-color-4',
			'color' => 'var(--paletteColor4, #2e1e1e)'
		), 
		array(
			'name' => 'Cor de Borda Midiateca',
			'slug' => 'palette-color-5',
			'color' => 'var(--paletteColor5, #c9c9c9)'
		),
		array(
			'name' => 'Cinza Midiateca',
			'slug' => 'palette-color-6',
			'color' => 'var(--paletteColor6, #ececec)'
		),
		array(
			'name' => 'Branco Midiateca',
			'slug' => 'palette-color-7',
			'color' => 'var(--paletteColor7, #fffff)'
		),
		array(
			'name' => 'Cor de Cartão Midiateca',
			'slug' => 'palette-color-8',
			'color' => 'var(--paletteColor8, #f5f4ed)'
		),
		array(
			'name' => 'Palha Midiateca',
			'slug' => 'palette-color-9',
			'color' => 'var(--paletteColor9, #f95e05)'
		),
		array(
			'name' => 'Céu Midiateca',
			'slug' => 'palette-color-10',
			'color' => 'var(--paletteColor10, #accfd8)'
		),
		array(
			'name' => 'Abacate Midiateca',
			'slug' => 'palette-color-11',
			'color' => 'var(--paletteColor11, #849965)'
		),
		array(
			'name' => 'Terra Midiateca',
			'slug' => 'palette-color-12',
			'color' => 'var(--paletteColor12, #604d43)'
		),
		array(
			'name' => 'Sangue Midiateca',
			'slug' => 'palette-color-13',
			'color' => 'var(--paletteColor13, #cd403c)'
		),
		array(
			'name' => 'Açaí Midiateca claro',
			'slug' => 'palette-color-14',
			'color' => 'var(--paletteColor14, #e5acb9)'
		),
		array(
			'name' => 'Palha Midiateca mais clara',
			'slug' => 'palette-color-15',
			'color' => 'var(--paletteColor15, #ffebbd)'
		),
		array(
			'name' => 'Palha Midiateca mais escura',
			'slug' => 'palette-color-16',
			'color' => 'var(--paletteColor16, #806a38)'
		),
		array(
			'name' => 'Céu Midiateca mais claro',
			'slug' => 'palette-color-17',
			'color' => 'var(--paletteColor17, #DAEDF2)'
		),
		array(
			'name' => 'Céu Midiateca mais escuro',
			'slug' => 'palette-color-18',
			'color' => 'var(--paletteColor14, #54818C)'
		),
		array(
			'name' => 'Escuro Midiateca',
			'slug' => 'palette-color-19',
			'color' => 'var(--paletteColor19, #111111)'
		),
		array(
			'name' => 'Claro Midiateca',
			'slug' => 'palette-color-20',
			'color' => 'var(--paletteColor20, #f5f5f5)'
		),
		array(
			'name' => 'Cinza Midiateca',
			'slug' => 'palette-color-21',
			'color' => 'var(--paletteColor21, #dddddd)'
		),
		array(
			'name' => 'Mais cinza Midiateca',
			'slug' => 'palette-color-22',
			'color' => 'var(--paletteColor22, #666666)'
		)
	);
}
add_filter( 'blocksy:editor-color-palette', 'midiateca_filter_palette' );
