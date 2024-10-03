<?php
$menu = array(
    'label' => 'Static Pages',
    'type' => 'static_page_area',
    'icon' => array('file', 3),
    'submenu' => array(
        array(
            'label' => 'About Us',
            'type' => 'about_us',
            'icon' => array('file', 4),
            'url' => 'cms/static-page/about_us',
        ),
        array(
            'label' => 'Locate Us',
            'type' => 'locate_us',
            'icon' => array('file', 4),
            'url' => 'cms/static-page/locate_us/multiple',
        ),
        array(
            'label' => 'Square Icon Box',
            'type' => 'square_icon_box',
            'icon' => array('file', 4),
            'url' => 'cms/static-page/square_icon_box',
        ),
        
        array(
            'label' => 'Our Services',
            'type' => 'our_services',
            'icon' => array('file', 4),
            'url' => 'cms/static-page/our_services',
        ),
        array(
            'label' => 'Counter Box',
            'type' => 'counter_box',
            'icon' => array('file', 4),
            'url' => 'cms/static-page/counter_box',
        ),
        array(
            'label' => 'Testimonial',
            'type' => 'testimonial',
            'icon' => array('file', 4),
            'url' => 'cms/static-page/testimonial',
        ),
    )
);