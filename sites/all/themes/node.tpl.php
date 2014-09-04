Это шаблон из файла: <?php echo basename(__FILE__); ?><br>
<h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
<div class="content"<?php print $content_attributes; ?>>
  <?php print render($content); ?>
</div>