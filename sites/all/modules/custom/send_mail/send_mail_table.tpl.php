<?php
$caption = 'Table from' . __FILE__;
print theme('table', array('header' => $variables['header'], 'rows' => $variables['rows'], 'caption' => $caption));
//print theme_pager('pager');

