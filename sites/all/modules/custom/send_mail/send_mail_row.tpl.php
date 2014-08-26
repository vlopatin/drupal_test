<div class="tabs">

<?php foreach ($table_rows as $cell) : ?>
    <?php if ($head) : ?>
        <span style="background-color: #bbeebb; border:solid 1px red">
    <?php else : ?>
        <span style="background-color: #ccccee; border:solid 1px red">
    <?php endif; ?>
          <?php print $cell; ?>
        </span>
<?php endforeach; ?>

</div>



