session_start(); // начинаем сессию

// проверяем, является ли пользователь администратором
if ($_SESSION['user_role'] != 'admin') {
header('Location: /login.php'); // перенаправляем на страницу авторизации
exit;
}

// отображаем форму для создания поста
echo '<form method="POST" action="/create_post.php">';
    echo '<input type="text" name="title" placeholder="Заголовок">';
    echo '<textarea name="content" placeholder="Текст поста"></textarea>';
    echo '<input type="submit" value="Опубликовать">';
    echo '</form>';

<!-- Пост новости -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <h2>Пост новости</h2>
            <form method="post" action="submit_post.php">
                <div class="mb-3">
                    <label for="title" class="form-label">Заголовок новости</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Категория новости</label>
                    <select class="form-select" id="category" name="category" required>
                        <option value="">Выберите категорию</option>
                        <option value="politics">Политика</option>
                        <option value="economy">Экономика</option>
                        <option value="culture">Культура</option>
                        <option value="science">Наука</option>
                        <option value="sports">Спорт</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Содержание новости</label>
                    <textarea class="form-control" id="content" name="content" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Опубликовать</button>
            </form>
        </div>
    </div>
</div>