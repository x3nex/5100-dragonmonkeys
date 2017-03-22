<?php require 'app/views/partials/header.php'; ?>
<div class="row">
    <div class="col-md-12 text-right padding-30">
        <a href="/admin/tasks/new"  class="btn btn-primary">Add new <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
    </div>
</div>
<table class="table table-responsive table-hover table-bordered">
    <tr>
        <th>#</th>
        <th>Task name</th>
        <th class="text-center">Status</th>
        <th class="text-center">Actions</th>
    </tr>
    <?php $count = 1; ?>
    <?php foreach ($tasks as $task): ?>
        <tr>
            <td><?= $count++; ?> </td>
            <td><?= $task->title ?></td>
            <td class="text-center"><?= ($task->completed) ? "<span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span>" : "<span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>" ?></td>
            <td class="text-center">
                <a href="/admin/tasks/edit?id=<?= $task->id ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"
                                                                    aria-hidden="true"></span> Edit
                </a>
                -
                <a href="/admin/tasks/delete?id=<?= $task->id ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a>
            </td>
        </tr>

    <?php endforeach; ?>
</table>

<?php require 'app/views/partials/footer.php'; ?>
