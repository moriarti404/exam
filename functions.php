<?php
register_nav_menus( array(
    'secondary'  => __( 'Footer bottom menu', '_tk' ),
) );

if ( ! function_exists( '_tk_posted_on' ) ) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function _tk_child_posted_on() {
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

        $time_string = sprintf( $time_string,
            esc_attr( get_the_date( 'c' ) ),
            esc_html( get_the_date() )
        );

        $time_string = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark">%3$s</a>',
            esc_url( get_permalink() ),
            esc_attr( get_the_time() ),
            $time_string
        );



        printf( __( '<span class="posted-on">%1$s</span>', '_tk' ),
            $time_string,
            sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
                esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
                esc_attr( sprintf( __( 'View all posts by %s', '_tk' ), get_the_author() ) ),
                esc_html( get_the_author() )
            )
        );
    }
endif;
function create_projects()
{
    register_post_type('projects',
        array(
            'labels' => array(
                'name' => 'Projests',
                'singular_name' => 'Projects',
                'add_new' => 'Add New',
                'add_new_item' => 'Add new project',
                'edit' => 'Edit',
                'edit_item' => 'Edit project',
                'new_item' => 'New project',
                'view' => 'View',
                'view_item' => 'View projects',
                'search_items' => 'Search project',
                'not_found' => 'No projects found',
                'not_found_in_trash' => 'No projects found in trash',
                'parent' => 'Parent projects'
            ),
            'description' => 'Our projects',
            'public' => true,
            'menu_position' => 4,
            'supports' => array('title', 'editor', 'comments', 'thumbnail', 'custom-fields'),
            'taxonomies' => array(''),
            'menu_icon' => 'dashicons-clipboard',
            'has_archive' => true
        )
    );
}
function add_new_taxonomies() {
register_taxonomy('purpose',
    'projects',
    array(
        'hierarchical' => true,
        /* true - по типу рубрик, false - по типу меток,
        по умолчанию - false */
        'labels' => array(
            /* ярлыки, нужные при создании UI, можете
            не писать ничего, тогда будут использованы
            ярлыки по умолчанию */
            'name' => 'Purpose',
            'singular_name' => 'Purpose',
            'search_items' =>  'Find purposes',
            'popular_items' => 'Popular purposes',
            'all_items' => 'All purposes',
            'parent_item' => null,
            'parent_item_colon' => null,
            'edit_item' => 'Edit purpose',
            'update_item' => 'Update purpose',
            'add_new_item' => 'Add new purpose',
            'new_item_name' => 'New purpose name',
            'separate_items_with_commas' => 'Seperate purposes with commas',
            'add_or_remove_items' => 'Add or remove purposes',
            'choose_from_most_used' => 'Choose from most used purposes',
            'menu_name' => 'Purposes'
        ),
        'public' => true,
        /* каждый может использовать таксономию, либо
        только администраторы, по умолчанию - true */
        'show_in_nav_menus' => true,
        /* добавить на страницу создания меню */
        'show_ui' => true,
        /* добавить интерфейс создания и редактирования */
        'show_tagcloud' => true,
        /* нужно ли разрешить облако тегов для этой таксономии */
        'update_count_callback' => '_update_post_term_count',
        /* callback-функция для обновления счетчика $object_type */
        'query_var' => true,
        /* разрешено ли использование query_var, также можно
        указать строку, которая будет использоваться в качестве
        него, по умолчанию - имя таксономии */
        'rewrite' => array(
            /* настройки URL пермалинков */
            'slug' => 'platform', // ярлык
            'hierarchical' => false // разрешить вложенность

        ),
    )
);
}
add_action( 'init', 'add_new_taxonomies', 0 );

