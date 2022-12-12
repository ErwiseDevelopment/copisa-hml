<?php

//Função para criar post type:
function erwise_create_post_type() { 


if (get_field('modulo_ebook', 'option')== '1'):
	register_post_type( 'ebook', array(
		'labels' 		=> array( 'name' => 'E-book', 'singular_name' => 'E-book', 'all_items' => 'Todos os E-books' ),
		'public' 		=> true,
		'has_archive' 	=> true,
		'menu_icon' 	=> 'dashicons-book',
		'menu-position' => 10,
		'supports' 		=> array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author' )
	) );
	endif;


	register_post_type( 'Comunidades', array(
		'labels' 		=> array( 'name' => 'Comunidades', 'singular_name' => 'Comunidade', 'all_items' => 'Todas Comunidades' ),
		'public' 		=> true,
		'has_archive' 	=> true,
		'menu_icon' 	=> 'dashicons-admin-home',
		'supports' 		=> array( 'title', 'thumbnail', 'author' )
	) );
    // Não esta em uso pelo cliente 25-07-22
    // 	register_post_type( 'Governo', array(
	// 	'labels' 		=> array( 'name' => 'Governo/Departamentos', 'singular_name' => 'Governo', 'all_items' => 'Todos' ),
	// 	'public' 		=> true,
	// 	'has_archive'	=> true,
	// 	'menu_icon'		=> 'dashicons-groups',
	// 	'supports' 		=> array( 'title', 'thumbnail' ) 
	// ) );
	
		register_post_type( 'Evento', array(
		'labels' 		=> array( 'name' => 'Eventos', 'singular_name' => 'Eventos', 'all_items' => 'Todos Eventos' ),
		'public' 		=> true,
		'has_archive'	=> true,
		'menu_icon'		=> 'dashicons-calendar-alt',
		'supports' 		=> array( 'title', 'thumbnail', 'editor' ) 
	) );

	register_post_type( 'Galeria', array(
		'labels' 		=> array( 'name' => 'Galerias', 'singular_name' => 'Galeria', 'all_items' => 'Todas Galerias' ),
		'public' 		=> true,
		'has_archive'	=> true,
		'menu_icon'		=> 'dashicons-images-alt2',
		'supports' 		=> array( 'title', 'thumbnail' ) 
	) );

	register_post_type( 'depoimentos', array(
		'labels' 		=> array( 'name' => 'Depoimentos', 'singular_name' => 'Depoimento', 'all_items' => 'Categorias' ),
		'public' 		=> true,
		'has_archive'	=> true,
		'menu_icon'		=> 'dashicons-format-quote',
		'supports' 		=> array( 'title', 'editor', 'thumbnail' ) 
	) );
	
	register_post_type( 'video', array(
		'labels' 		=> array( 'name' => 'Podcast', 'singular_name' => 'Podcast', 'all_items' => 'Podcast' ),
		'public' 		=> true,
		'has_archive'	=> true,
		'menu_icon'		=> 'dashicons-format-video',
		'supports' 		=> array( 'title' ) 
	) );
}
add_action( 'init', 'erwise_create_post_type' );

//Criar taxonomia:
function erwise_create_taxonomy() {
	register_taxonomy( 'agendacidade', 'agendas', array( 'labels' => array( 'name' => 'Cidades', 'singular_name' => 'Cidade' ), 'hierarchical' => true, 'show_admin_column' => true ) );
	register_taxonomy( 'tipoevento', 'agendas', array( 'labels' => array( 'name' => 'Tipo Evento', 'singular_name' => 'Categoria' ), 'hierarchical' => true, 'show_admin_column' => true ) );
	register_taxonomy( 'categoria-datas-especiais', 'datas-especiais', array( 'labels' => array( 'name' => 'Tipo da Data', 'singular_name' => 'Tipo da Data' ), 'hierarchical' => true, 'show_admin_column' => true ) );
    register_taxonomy( 'ebook-categoria', 'ebook', array( 'labels' => array( 'name' => 'Tipo E-book', 'singular_name' => 'Tipo E-book' ), 'hierarchical' => true, 'show_admin_column' => true ) );
	// register_taxonomy( 'comunidades-categoria', 'comunidades', array( 'labels' => array( 'name' => 'Tipo Comunidade', 'singular_name' => 'Tipo Comunidade' ), 'hierarchical' => true, 'show_admin_column' => true ) );
    register_taxonomy( 'comunidades-categoria', 'comunidades', array( 'labels' => array( 'name' => 'Tipo Comunidade', 'singular_name' => 'Tipo Comunidade' ), 'hierarchical' => true, 'show_admin_column' => true ) );
    //register_taxonomy( 'governo-categoria', 'governo', array( 'labels' => array( 'name' => 'Funções', 'singular_name' => 'Função' ), 'hierarchical' => true, 'show_admin_column' => true ) );
	register_taxonomy( 'galeria-categoria', 'galeria', array( 'labels' => array( 'name' => 'Tipo Categoria', 'singular_name' => 'Categoria' ), 'hierarchical' => true, 'show_admin_column' => true ) );
	register_taxonomy( 'depoimentos_categoria', 'depoimentos', array( 'labels' => array( 'name' => 'Categorias', 'singular_name' => 'Categoria' ), 'hierarchical' => true, 'show_admin_column' => true ) );
	register_taxonomy( 'cat', 'video', array( 'labels' => array( 'name' => 'Categorias', 'singular_name' => 'Categoria' ), 'hierarchical' => true, 'show_admin_column' => true ) );
    }
add_action( 'init', 'erwise_create_taxonomy' );

