<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>КЦели - главная</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/styles.css">
</head>

<body>
	<?php require "blocks/header.php"?>
		<div class="container">
			<div class="announcer">
				<div class="row">
					<h1>Главное сегодня</h1>
					<div class="announcer-content col-12 col-md-6">
						<a href="#"><img src="img/announcerpic.jpg" class="main-img rounded float-left img-fluid">
							<div class="text-image">
								<h3>Как получить свой первый паспорт в 14 лет?</h3>
							</div>
						</a>
					</div>
					<div class="announcer-content col-12 col-md-6">
						<a href="#"><img src="img/car.jpg" class="main-img rounded float-left img-fluid">
							<div class="text-image">
								<h3>Как получить права на вождение?</h3>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<main class="justify-content-center">
				<h1>Все блоги и новости</h1>
			<div class="container">
				<div class="row">
					<div class="last-news col-4 align-items-center justify-content-center">
						<h2>Настройка ленты</h2>
						<p>Здесь</p>
						<p>Обязательно</p>
						<p>Появится</p>
						<p>Настройка</p>
						<p>Ленты!</p>
					</div>
					<div class="main-blogs col-7 align-items-center justify-content-center">
						<div class="container">
						<a href="#"><img src="img/car.jpg" class="main-img rounded float-left img-fluid">
							<div class="text-image">
								<h3>Как получить права на вождение?</h3>
							</div>
						</a>
						</div>
						<!-- исправить сплошной текст
						<div class="container">
							<a href="#"><img src="img/announcerpic.jpg" class="main-img rounded float-left img-fluid">
								<div class="text-image">
									<h3>Как получить свой первый паспорт в 14 лет?</h3>
								</div>
							</a>
						</div> -->
					</div>
				</div>
			</div>
			</main>
		</div>
	<?php require "blocks/footer.php"?>
</body>

</html>
