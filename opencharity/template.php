<?php

function opencharity_preprocess_html(&$variables) {
  $filepath = path_to_theme() . '/font-awesome/css/font-awesome.min.css';
  drupal_add_css($filepath, array(
    'group' => CSS_THEME,
  ));
  
  $page_viewport = array(
                         '#type' => 'html_tag',
                         '#tag' => 'meta',
                         '#attributes' => array(
                          'name' => 'viewport',
                          'content' => 'width=device-width, initial-scale=1.0',
                            )
                      );
       drupal_add_html_head($page_viewport, 'viewport'); 
}
function opencharity_theme() {
  $items = array();
  // create custom user-login.tpl.php
  $items['user_login'] = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'opencharity') . '/templates',
  'template' => 'user-login',
  'preprocess functions' => array(
  'opencharity_preprocess_user_login'
  ),
 );
return $items;
}

if (drupal_is_front_page()) {
  drupal_add_js(drupal_get_path('theme', 'opencharity') . '/js/jquery.flexslider.js');
  drupal_add_js(drupal_get_path('theme', 'opencharity') . '/js/slide.js');
  drupal_add_css(drupal_get_path('theme', 'opencharity') . '/css/common.css');
}

