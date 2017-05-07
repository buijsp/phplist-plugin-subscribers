<?php if (isset($result)) : ?>
    <div style='padding-top: 10px;'>
        <div class="result"><?= $result; ?></div>
    </div>
<?php endif; ?>
<div class="panel">
    <div class="header">
        <h3><?= $heading; ?></h3>
    </div>
    <div class="content">
<?php foreach ($links as $l) : ?>
        <div>
            <label>
    <?= $l['caption']; ?>
    <?= $l['button']; ?>
            </label>
        </div>
<?php endforeach; ?>
    </div>
</div>