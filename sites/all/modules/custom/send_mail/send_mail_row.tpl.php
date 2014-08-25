<?php

//var_dump($variables);
print 'ЖРИ ГОВНО';
//var_dump($variables);
$output = '';


foreach ($variables['header'] as $cell) {
  $output .= '<td>';
  $output .= $cell;
  $output .= '</td>';
}


$variables['header'] = $output;

//return $output;


//var_dump($variables['header']);