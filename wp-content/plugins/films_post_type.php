<?php
/*
Plugin Name: Фильмы (тип записи)
Description: Добавляет тип записи фильмы.
Version: 1.0
Author: Вадим Мороз
*/

add_action( 'init', 'fpt_register_genre_taxonomy' );
function fpt_register_genre_taxonomy() {
  register_taxonomy( 'genre_taxonomy', 'film',
    array(
      'labels' => array(
        'name'              => 'Жанры',
        'singular_name'     => 'Жанр',
        'search_items'      => 'Найти жанр',
        'all_items'         => 'Все жанры',
        'edit_item'         => 'Редактировать жанр',
        'update_item'       => 'Обновить жанр',
        'add_new_item'      => 'Добавить новый жанр',
        'new_item_name'     => 'Название жанра',
        'menu_name'         => 'Жанры',
        ),
      'show_admin_column' => true
      )
    );
}

add_action( 'init', 'fpt_register_country_taxonomy' );
function fpt_register_country_taxonomy() {
  register_taxonomy( 'country_taxonomy', 'film',
    array(
      'labels' => array(
        'name'              => 'Страны',
        'singular_name'     => 'Страна',
        'search_items'      => 'Найти страну',
        'all_items'         => 'Все страны',
        'edit_item'         => 'Редактировать страну',
        'update_item'       => 'Обновить страну',
        'add_new_item'      => 'Добавить новую страну',
        'new_item_name'     => 'Название страны',
        'menu_name'         => 'Страны',
        ),
      'show_admin_column' => true
      )
    );
}

add_action( 'init', 'fpt_register_year_taxonomy' );
function fpt_register_year_taxonomy() {
  register_taxonomy( 'year_taxonomy', 'film',
    array(
      'labels' => array(
        'name'              => 'Годы',
        'singular_name'     => 'Год',
        'search_items'      => 'Найти год',
        'all_items'         => 'Все годы',
        'edit_item'         => 'Редактировать год',
        'update_item'       => 'Обновить год',
        'add_new_item'      => 'Добавить новый год',
        'new_item_name'     => 'Значение',
        'menu_name'         => 'Годы',
        ),
      'show_admin_column' => true
      )
    );
}

add_action( 'init', 'fpt_register_actor_taxonomy' );
function fpt_register_actor_taxonomy() {
  register_taxonomy( 'actor_taxonomy', 'film',
    array(
      'labels' => array(
        'name'              => 'Актеры',
        'singular_name'     => 'Актер',
        'search_items'      => 'Найти актера',
        'all_items'         => 'Все актеры',
        'edit_item'         => 'Редактировать актера',
        'update_item'       => 'Обновить актера',
        'add_new_item'      => 'Добавить нового актера',
        'new_item_name'     => 'Имя актера',
        'menu_name'         => 'Актеры',
        ),
      'show_admin_column' => true
      )
    );
}

add_action('init', 'fpt_films_init');
function fpt_films_init(){
	register_post_type('film', array(
		'labels'             => array(
			'name'               => 'Фильмы',
			'singular_name'      => 'Фильм',
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый фильм',
			'edit_item'          => 'Редактировать фильм',
			'new_item'           => 'Новый фильм',
			'view_item'          => 'Посмотреть фильм',
			'search_items'       => 'Найти фильм',
			'not_found'          => 'Фильмов не найдено',
			'not_found_in_trash' => 'В корзине фильмов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Фильмы'
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
    'menu_icon'          => 'dashicons-video-alt2',
		'supports'           => array('title','editor','author','thumbnail','comments')
	) );
}
