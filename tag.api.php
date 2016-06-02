<?php

/**
 * Returns random array of X (configurable) values.
 *
 * @param int $size (optional)
 *    The size of the array.
 *
 * @return array
 */
function _bubblesort_shuffle($size = 10) {
  $array = array();
  $max =variable_get('bubblesort_range', 100);
  for ($a=0; $a<$size; $a++) {
    $array[] = mt_rand(0, $max);
  }
  return $array;
}

/**
 * Checks if need swap
 */
function _bubblesort_to_swap(&$array, $a, $b) {
  return $array[$b+1] > $array[$b];
}

/**
 * Runs the bubble sort
 */
function _bubblesort_step(&$array, &$a, &$b) {

  // Compares the values
  if (_bubblesort_to_swap($array, $a, $b)) {
	  $tmp = $array[$b];
	  $array[$b] = $array[$b+1];
	  $array[$b+1] = $tmp;
  }

  $b++;
  if ($b >= count($array)- $a-1) {
    $b = 0; $a++;
  }
  return $a < count($array);
}
