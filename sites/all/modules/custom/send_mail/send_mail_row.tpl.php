<?php

//var_dump($variables);

//var_dump($variables);
//  -----------------------------------------------TABLE

 $output = '';

    $output .= '<div class="tabs">';
    foreach ($variables['header'] as $cell) {
    $output .= '<span style="background-color: #ccccee">';
    $output .= $cell;
    $output .= '</span>';
  }
    $output .= '</div>';

  print $output;

  $output = '';

  foreach ($variables['rows'] as $row) {

    $output .= '<div class="tabs">';

    foreach ($row as $cell) {
      $output .= '<span style="background-color: #bbeebb; display: inline-block;">';
      $output .= $cell;
      $output .= '</span>';
    }

    $output .= '</div>';

  }
print $output;
//  ----------------------------------------------- /  TABLE


