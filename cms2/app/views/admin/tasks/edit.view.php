<?php require 'app/views/partials/header.php'; ?>
<form action="/admin/tasks" method="post" class="form">
    <input type="hidden" name="id" value="<?= $task->id ?>">
    <div class="form-group">
        <label for="title">Task:</label>
        <input type="text" name="title" id="title" class="form-control" value="<?= $task->title; ?>">
    </div>
    <div class="form-group">
        <label for="completed">Completed:</label>

        <input type="checkbox" name="completed" id="completed" value="1" <?= $task->completed ? "checked" : ""; ?>>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">Update</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </div>

</form>
<?php require 'app/views/partials/footer.php'; ?>
