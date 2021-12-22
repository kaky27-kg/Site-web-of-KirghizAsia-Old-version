<html lang="ru">
<head>
    <title>Подключение Bootstrap 4 к HTML странице</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Контент страницы -->
<div class="container text-center">
    <h1 class="h3 mt-5 mb-1">Bootstrap 4 - Carousel (карусель)</h1>
    <h2 class="lead mt-0 mb-5">с индикаторами</h2>


    <div id="carousel" class="carousel slide d-inline-block" data-ride="carousel">
        <!-- Индикаторы -->
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid" src="img/pdn1/01.jpg" alt="...">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="img/pdn1/02.jpg" alt="...">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="img/pdn1/03.jpg" alt="...">
            </div>
			<div class="carousel-item">
                <img class="img-fluid" src="img/pdn1/04.jpg" alt="...">
            </div>
			<div class="carousel-item">
                <img class="img-fluid" src="img/pdn1/05.jpg" alt="...">
            </div>
			<div class="carousel-item">
                <img class="img-fluid" src="img/pdn1/06.jpg" alt="...">
            </div>
        </div>
        <!-- Элементы управления -->
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Предыдущий</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Следующий</span>
        </a>
    </div>

</div>



<!-- jQuery -->
<script src="vendor/jquery/jquery-3.3.1.min.js"></script>
<!-- Popper -->
<script src="vendor/popper.js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
						