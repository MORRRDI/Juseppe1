<!DOCTYPE html>
<html>
<head>
    <title>Создать задачу</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Создать задачу</h1>
        <form action="index.php?action=create" method="POST">
            <div class="form-group">
                <label>Название</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Описание</label>
                <textarea name="description" class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
            <a href="index.php" class="btn btn-secondary">Назад</a>
        </form>
    </div>
</body>
</html> 