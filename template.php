<?php

/**
 * @file
 * template.php
 */

function canvasag_preprocess_html(&$variables) {
  drupal_add_js(drupal_get_path('theme','canvasag') . '/assets/js/functions.js',
    array(
      'type' => 'file',
      'scope' => 'footer',
      'gropu' => JS_THEME,
    ));
}

function canvasag_js_alter(&$js) {
  if(isset($js['//maps.googleapis.com/maps/api/js?sensor=false'])) {
    $key = 'key=AIzaSyB0Wy9d1RP_Q0RISUMSNE7Nc6iOhtUz1MM';
    $js['//maps.googleapis.com/maps/api/js?sensor=false']['data'] = '//maps.googleapis.com/maps/api/js?' . $key;
  }
}

function canvasag_preprocess_page(&$variables) {
  if ($variables['node']) {
    $node = $variables['node'];
    $suggestion = 'page__' . str_replace('_','',$node->type);
    $variables['theme_hook_suggestions'][] = $suggestion;
  }

  if (arg(0) == 'taxonomy' && arg(1) == 'term' && is_numeric(arg(2))) {
    $term = taxonomy_term_load(arg(2));
    $vocab = $term->vocabulary_machine_name;
    $variables['theme_hook_suggestions'][] = 'page__' . $vocab;

    if ($vocab == 'departamentos') {
      $imagen = field_get_items('taxonomy_term',$term, 'field_imagen');
      $path = file_create_url($imagen[0]['uri']);
      $variables['imagen_departamento'] = $path;
      //dsm($term->description);
      $variables['departamento_descripcion'] = $term->description;
    }
  }

  // Primary Nav
  $variables['primary_nav'] = FALSE;
  if ($variables['main_menu']) {
    $variables['primary_nav'] = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
    $variables['primary_nav']['#theme_wrappers'] = array('menu_tree__primary');
  }

  // legal
  $menu_legal = menu_tree('menu-legal');
  $variables['menu_legal'] = $menu_legal;
  $variables['menu_legal']['#theme_wrappers'] = array('menu_tree__legal');
  //dsm($variables);
}

function canvasag_preprocess_node(&$variables) {
  $node = $variables['node'];
  $node_url = drupal_get_path_alias('node/' . $node->nid);
  //dsm($node);
  // More link
  $variables['more-link'] = l(t('Read more'), $node_url, array('attributes' => array('title' => $variables['title'], 'class' => array('more-link','button','button-mini'))));
}

// Menú
function canvasag_menu_tree($variables) {
  return '<ul>' . $variables['tree'] . '</ul>';
}
// Primary Nav
function canvasag_menu_tree__primary($variables) {
  return '<ul>' . $variables['tree'] . '</ul>';
}
function canvasag_menu_tree__primary__mega_item($variables) {
  return $variables['tree'];
}
function canvasag_menu_link__menu_menu_espanol_2($variables) {
  // Hardcoded! There must be a better way to achieve this.
  $element = $variables['element'];
  $mega_menu_items = array(1299);
  $sub_menu = '';
  $attributes = array();
  $href = '';
  $output = '';

  if ($element['#href'] == '<front>' && drupal_is_front_page()) {
    $element['#original_link']['in_active_trail'] = TRUE;
  }

  ($element['#href'] == '#') ? $href = NULL : $href = $element['#href'];

  // Sub Menus
  if ($element['#below']) {
    if (in_array($element['#original_link']['mlid'], $mega_menu_items)) {
      $element['#below']['#theme_wrappers'] = array('menu_tree__primary__mega_item');
    }
    $sub_menu = drupal_render($element['#below']);
  }

  $html = '<div>' . $element['#title'] . '</div>';
  if ($href) {
    $enlace = l($html, $element['#href'], array('html' => true, 'attributes' => $element['#localized_options']));
  } else {
    $enlace = l($html, '#', array('html' => true, 'attributes' => $element['#localized_options'], 'external' => TRUE));
  }
  $output =  '<li>' . $enlace . $sub_menu . '</li>';

  if (in_array($element['#original_link']['mlid'], $mega_menu_items)) {
    $attributes['class'] = array('mega-menu');
    $sub_menu = '<div class="mega-menu-content style-2 col-3 clearfix">' . $sub_menu . '</div>';
    if ($href) {
      $enlace = l($html, $element['#href'], array('html' => true, 'attributes' => $element['#localized_options']));
    } else {
      $enlace = l($html, '#', array('html' => true, 'attributes' => $element['#localized_options'], 'external' => TRUE));
    }
    $output =  '<li' . drupal_attributes($attributes) .'>' . $enlace . $sub_menu . '</li>';
  }

  if (in_array($element['#original_link']['plid'], $mega_menu_items)) {
    $attributes['class'] = array('mega-menu-title');
    if ($href) {
      $enlace = l($html, $element['#href'], array('html' => true, 'attributes' => $element['#localized_options']));
    } else {
      $enlace = l($html, '#', array('html' => true, 'attributes' => $element['#localized_options'], 'external' => TRUE));
    }
    $output =  '<ul><li' . drupal_attributes($attributes) .'>' . $enlace . $sub_menu . '</li></ul>';
  }

  return $output;
}

function canvasag_menu_link__menu_menu_euskera_2($variables) {
  // Hardcoded! There must be a better way to achieve this.
  $element = $variables['element'];
  $mega_menu_items = array(1432);
  $sub_menu = '';
  $attributes = array();
  $href = '';
  $output = '';

  if ($element['#href'] == '<front>' && drupal_is_front_page()) {
    $element['#original_link']['in_active_trail'] = TRUE;
  }

  ($element['#href'] == '#') ? $href = NULL : $href = $element['#href'];

  // Sub Menus
  if ($element['#below']) {
    if (in_array($element['#original_link']['mlid'], $mega_menu_items)) {
      $element['#below']['#theme_wrappers'] = array('menu_tree__primary__mega_item');
    }
    $sub_menu = drupal_render($element['#below']);
  }

  $html = '<div>' . $element['#title'] . '</div>';
  if ($href) {
    $enlace = l($html, $element['#href'], array('html' => true, 'attributes' => $element['#localized_options']));
  } else {
    $enlace = l($html, '#', array('html' => true, 'attributes' => $element['#localized_options'], 'external' => TRUE));
  }
  $output =  '<li>' . $enlace . $sub_menu . '</li>';

  if (in_array($element['#original_link']['mlid'], $mega_menu_items)) {
    $attributes['class'] = array('mega-menu');
    $sub_menu = '<div class="mega-menu-content style-2 col-3 clearfix">' . $sub_menu . '</div>';
    if ($href) {
      $enlace = l($html, $element['#href'], array('html' => true, 'attributes' => $element['#localized_options']));
    } else {
      $enlace = l($html, '#', array('html' => true, 'attributes' => $element['#localized_options'], 'external' => TRUE));
    }
    $output =  '<li' . drupal_attributes($attributes) .'>' . $enlace . $sub_menu . '</li>';
  }

  if (in_array($element['#original_link']['plid'], $mega_menu_items)) {
    $attributes['class'] = array('mega-menu-title');
    if ($href) {
      $enlace = l($html, $element['#href'], array('html' => true, 'attributes' => $element['#localized_options']));
    } else {
      $enlace = l($html, '#', array('html' => true, 'attributes' => $element['#localized_options'], 'external' => TRUE));
    }
    $output =  '<ul><li' . drupal_attributes($attributes) .'>' . $enlace . $sub_menu . '</li></ul>';
  }

  return $output;
}

function canvasag_menu_tree__legal($variables) {
  $links = explode('*',$variables['tree']);
  array_pop($links);
  return implode(' | ', $links);
}
function canvasag_menu_link__menu_legal($variables) {
  global $language;
  $output = '';
  $element = $variables['element'];
  $href = '/' . $language->language . '/' . drupal_get_path_alias($element['#href'], $language->language);
  $output = '<a href="' . $href . '">' . $element['#title'] . '</a>*';
  return $output;
}

// Fields Noticia
function canvasag_field__field_imagen__noticia($variables) {
  $output = '';
  if ($variables['element']['#view_mode'] == 'teaser') {
    $path = file_create_url($variables['element']['#items'][0]['uri']);
    //$src = image_style_url('medium',$variables['element']['#items'][0]['uri']);
    $src = file_create_url($variables['element']['#items'][0]['uri']);
    $alt = $variables['element']['#items'][0]['alt'];
    $output .= '<a href="' . $path . '" data-lightbox="image">';
    $output .= '<img class="image_fade" src="' . $src . '" alt="' . $alt . '" typeof="foaf:Image">';
    $output .= '</a>';
    return $output;
  }
}

function canvasag_field__field_tags__noticia($variables) {
  $output = '';
  $is_empty = '';
  $output .= '<li><i class="icon-folder-open"></i> ';
  $items = array();
  foreach ($variables['items'] as $delta => $item) {
    $rendered_item = drupal_render($item);
    $is_empty .= $rendered_item;
    $items[] = $rendered_item;
  }
  $output .= implode(', ',$items) . '</li>';
  if (strlen(trim($is_empty))==0){ // maybe better checks are possible
    // all for nothing, but at least, we will not end up with rendered empty boxes
    $output=FALSE;
  }
  return $output;
}

// Simplenews block form
function canvasag_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'simplenews_block_form_24') {
    $form['submit']['#attributes'] = array('class' => array('btn', 'btn-danger'));
  }
  if ($form_id == 'contact_site_form') {
    $form['name'] = array(
      '#title' => t('Name'),
      '#type' => 'textfield',
      '#attributes' => array(
        'class' => array(
          'sm-form-control',
          'required',
        ),
        'id' => 'edit-name',
        'name' => 'name',
        'placeholder' => t('Name'),
      ),
      '#required' => TRUE,
    );
    $form['mail'] = array(
      '#title' => t('Mail'),
      '#type' => 'textfield',
      '#attributes' => array(
        'class' => array(
          'sm-form-control',
          'required',
          'email',
        ),
        'id' => 'edit-mail',
        'name' => 'mail',
        'placeholder' => t('Mail'),
      ),
      '#required' => TRUE,
    );
    $form['subject'] = array(
      '#title' => t('Subject'),
      '#type' => 'textfield',
      '#required' => TRUE,
      '#attributes' => array(
        'class' => array(
          'required',
          'sm-form-control',
        ),
        'placeholder' => t('Subject'),
      )
    );
    $form['legal'] = array(
      '#title' => t('I\'ve read and accept the !term services.', array('!term services' => l(t('term services'),'node'))),
      '#type' => 'checkbox',
      '#required' => TRUE,
      '#attributes' => array(
        'class' => array(
          'required',
          'sm-form-control',
        ),
      )
    );
    $form['message']['#attributes']['class'] = array(
      'sm-form-control',
      'required',
    );
    $form['message']['#attributes']['placeholder'] = t('Message');

    $form['actions']['submit']['#attributes'] = array(
      'class' => array(
        'button',
        'button-small',
        'button-3d',
        'nomargin',
      ),
      'value' => t('Send message'),
    );
    $form['copy']['#access'] = FALSE;

    $order = array(
      'name',
      'mail',
      'subject',
      'message',
      'legal',
      'submit',
    );
    foreach ($order as $key => $field) {
      $form[$field]['#weight'] = $key;
    }
  }
}
