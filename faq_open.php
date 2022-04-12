<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>КЦели - FAQ</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/font-awesome.css">
</head>

<body>
	<?php require "blocks/header.php"?>

	<div class="container">
		<main class="justify-content-center">
			<ul class="breadcrumb">
			  <li><a href="/index.php">Главная</a></li>
			  <li>F.A.Q. - вопросы и ответы</li>
			</ul>
			<h2>F.A.Q. - вопросы и ответы</h2>
			<div class="container">
			<div class="row">
				<div class="col-xs-9 col-sm-9 col-md-10 col-lg-10">

					<a class="borderlessactivebutton px-2">Открытые</a>
					<a href="/faq_closed.php" class="borderlessbutton px-2">Решённые</a>

				</div>

				<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">

					<a href="/pattern.php" type="button" class="BtnNewQuestion btn btn-secondary">Задать вопрос</a>

				</div>

			</div>
		</div>

		<div class="container">
			<a href="" class="BigName">Открытый вопрос!</a>
			<p class="SmallName">Описание открытого вопроса!</p>
			<br>
			<a href="" class="BigName">Открытый вопрос 2!</a>
			<p class="SmallName">Описание открытого вопроса 2!</p>
			<br>
		</div>

		</main>
	</div>


	<?php require "blocks/footer.php"?>
</body>

</html>
