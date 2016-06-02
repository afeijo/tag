<?php

/**
 * Page callback for admin/settings/bubblesort.
 */
function bubblesort_admin() {
  $form = array();
  $sizes = range(5, 20);
  $form['bubblesort_size'] = array(
    '#type' => 'select',
    '#title' => t('Numbers'),
    '#options' => drupal_map_assoc($sizes),
    '#required' => TRUE,
    '#size' => 10,
    '#description' => t('How many numbers to be sorted?'),
    '#default_value' => variable_get('bubblesort_size', 10),
  );

  $range = range(100, 500, 100);
  $form['bubblesort_range'] = array(
    // '#type' => 'textfield',
    '#type' => 'select',
    '#options' => drupal_map_assoc($range),
    '#title' => t('Range'),
    '#required' => TRUE,
    // '#size' => 10,
    '#description' => t('How large the biggest number?'),
    '#default_value' => variable_get('bubblesort_range', 100),
  );

  return system_settings_form($form);
}