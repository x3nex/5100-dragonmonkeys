<?php require 'partials/header.php'; ?>
<h1>Tasks</h1>
<ul>

    <?php foreach ($tasks as $task) : ?>
        <?php if ($task->completed) : ?>
            <li><strike><?= $task->title; ?></strike></li>
        <?php else: ?>
            <li><?= $task->title; ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>
<?php require 'partials/footer.php'; ?>