<!DOCTYPE html>
<html>
<head>
    <title>Редактировать задачу</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Редактировать задачу</h1>
        <form action="index.php?action=update" method="POST">
            <input type="hidden" name="id" value="<?php echo $this->task->id; ?>">
            <div class="form-group">
                <label>Название</label>
                <input type="text" name="title" class="form-control" value="<?php echo $this->task->title; ?>" required>
            </div>
            <div class="form-group">
                <label>Описание</label>
                <textarea name="description" class="form-control" rows="3"><?php echo $this->task->description; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Обновить</button>
            <a href="index.php" class="btn btn-secondary">Назад</a>
        </form>
    </div>
</body>
</html> 