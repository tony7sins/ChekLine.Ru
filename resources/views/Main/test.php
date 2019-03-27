<?= $title ?>
<div class="test">

  <?php if(!empty($users)): ?>
  <?php foreach($users as $user): ?>
  <div class="panel panel-default">
    <div class="panel-heading"><?= $user['firstName']?></div>
    <div class="panel-body"><?= $user['tel'] ?></div>
  </div>
  <?php endforeach; ?>
  <?php endif; ?>
</div>
