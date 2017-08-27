<?php  

add_theme_support('post-thumbnails');

function cadastrando_post_type_servico(){
	$nomeSingular = 'Serviço';
	$nomePlural = 'Serviços';
	$description = 'Todos os serviços prestados pela Top-Tel';

	$labels = array(
		'name' => $nomePlural,
		'name_singular' => $nomeSingular,
		'edit_item' => 'Editar ' . $nomeSingular,
		'add_new_item' => 'Adicionar novo ' . $nomeSingular
	);

	$supports = array(
		'title',
		'editor',
		'thumbnail',
		'menus'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'description' => $description,
		'menu_icon' => 'dashicons-admin-tools',
		'supports' => $supports
	);

	register_post_type('servico', $args);
}

function cadastrando_post_type_clientes(){
	$nomeSingular = 'Cliente';
	$nomePlural = 'Clientes';
	$description = 'Todos os clientes da Top-Tel';

	$labels = array(
		'name' => $nomePlural,
		'name_singular' => $nomeSingular,
		'edit_item' => 'Editar ' . $nomeSingular,
		'add_new_item' => 'Adicionar novo ' . $nomeSingular
	);

	$supports = array(
		'title',
		'thumbnail',
		'menus'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'description' => $description,
		'menu_icon' => 'dashicons-admin-users',
		'supports' => $supports
	);

	register_post_type('cliente', $args);
}

wp_nav_menu( array(
    'menu'              => 'primary',
    'theme_location'    => 'primary',
    'depth'             => 2,
    'container'         => 'div',
    'container_class'   => 'collapse navbar-collapse',
    'container_id'      => 'bs-example-navbar-collapse-1',
    'menu_class'        => 'nav navbar-nav'
));

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
));

add_action('init', 'cadastrando_post_type_servico');
add_action('init', 'cadastrando_post_type_clientes');



