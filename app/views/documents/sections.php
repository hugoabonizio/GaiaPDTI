<div class="pdti-sections col-lg-7" style="float: none; margin: 0 auto;">
<?php
$count = 0;
foreach (array_keys($sections) as $section) {
  $h = 4;
  $count = floor($count) + 1;
  foreach ($sections[$section] as $sub=>$name) {
  ?>
  <h<?= ceil($h) ?>>
    <a href="<?= url('/documents/:id/edit', [$_SESSION['document_id']]) ?>?sec=<?= $section ?>&sub=<?= $sub ?>">
      <?= $count ?> <?= $name ?>
    </a>
  </h<?= ceil($h) ?>>
  <?php
    $count += 0.1;
    $h += 0.1;
  }
}
?>
</div>
