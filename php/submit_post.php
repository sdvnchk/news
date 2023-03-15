<?php
// Подключаемся к базе данных
$db = new mysqli('localhost', 'username', 'password', 'database_name');

// Получаем данные из формы
$title = $_POST['title'];
$category = $_POST['category'];
$content = $_POST['content'];

// Защищаем данные от SQL-инъекций
$title = mysqli_real_escape_string($db, $title);
$category = mysqli_real_escape_string($db, $category);
$content = mysqli_real_escape_string($db, $content);

// Сохраняем данные в базе данных
$query = "INSERT INTO posts (title, category, content) VALUES ('$title', '$category', '$content')";
$result = $db->query($query);

// Перенаправляем пользователя на страницу с новостями
header('Location: news.php');
exit();
?>