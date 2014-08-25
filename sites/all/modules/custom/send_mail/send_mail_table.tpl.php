<?php
$caption = 'Table from' . __FILE__;
print $caption;
//print theme('table', array('header' => $variables['header'], 'rows' => $variables['rows'], 'caption' => $caption));
//print theme_pager('pager');
//render($variables);
//print  '<table' . ">\n";
//print '<tr>';

print '<div>';
  print $content;
print '</div>';


//print '</tr>';
//print  "</table>\n";


// .......................... SHOW PAGER
print $pages;
