<?php if (isset($error)) { ?>
<div class="alert alert-<?= $error->variant; ?>">
  <div class="alert-header">
    <?= $error->variant; ?>
  </div>
  <div class="alert-body">
    <?= $error->message; ?>
  </div>
</div>
<?php } ?>