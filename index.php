<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Новостной сайт</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- Навигационное меню -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Новостной сайт</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Новости</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">О нас</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container mt-4">
    <div class="row">
      <div class="col-md-8">
        <h2>Пост новости</h2>

        // Подключение к базе данных
        $conn = mysqli_connect("localhost", "username", "password", "database");

        // Выборка постов
        $result = mysqli_query($conn, "SELECT * FROM posts");

        // Отображение постов
        while ($row = mysqli_fetch_array($result)) {
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<p>" . $row['content'] . "</p>";
        }

        </form>
      </div>

      <!-- Правый сайдбар -->
      <div class="col-md-4">
        <h2>Последние новости</h2>
        <ul class="list-group">
          <li class="list-group-item">
            <a href="#">Название новости 1</a>
            <p>Краткое описание новости 1</p>
          </li>
          <li class="list-group-item">
            <a href="#">Название новости 2</a>
            <p>Краткое описание новости 2</p>
          </li>
          <li class="list-group-item">
            <a href="#">Название новости 3</a>
            <p>Краткое описание новости 3</p>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="js/bootstrap.bundle.js"></script>
  <!-- JS -->
  <script src="js/script.js"></script>
</body>

</html>