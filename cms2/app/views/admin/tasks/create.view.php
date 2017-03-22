<?php require 'app/views/partials/header.php'; ?>
<form action="/admin/tasks/new" method="post" class="form">

    <div class="form-group">
        <label for="title">Task:</label>
        <input type="text" name="title" id="title" class="form-control" ?>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">Update</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </div>

</form>
<?php require 'app/views/partials/footer.php'; ?>
