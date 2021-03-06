<?php
/**
 * Created by PhpStorm.
 * User: Atmarkcafe
 * Date: 8/27/2018
 * Time: 10:40 AM
 */

function diapers_register_taxonomies( $taxonomies ) {
    $taxonomies['sanpham_cat'] = array(
        'post_type' => 'sanpham',
        'name' => 'sanpham_cat',
        'show_admin_column' => true,
        'configuration' => array(
            'hierarchical' => true,
            'labels' => array(
                'name' => 'Danh mục sản phẩm',
                'name_singular' => 'Danh mục sản phẩm',
                'all_items' => 'Tất cả danh mục sản phẩm',
                'edit_item' => 'Sửa danh mục sản phẩm',
                'view_item' => 'Xem danh mục sản phẩm',
                'add_new_item' => 'Thêm danh mục sản phẩm'
            ),
            'show_ui' => true,
            'query_vars' => true,
            'rewrite' => array('slug'=>'sanpham_cat')
        )
    );

    return $taxonomies;
}
add_filter('piklist_taxonomies', 'diapers_register_taxonomies');