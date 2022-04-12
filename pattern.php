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
		<main>
			<ul class="breadcrumb">
			  <li><a href="/index.php">Главная</a></li>
			  <li>F.A.Q. - вопросы и ответы</li>
			</ul>
			<div class="container">
				<div>
					<h2 class="reference">Заголовок вопроса должен быть наполнен смыслом, чтобы можно было понять, о чем будет тема.</h2>
				</div>
		</div>

		<div class="container">
			<input type="text" class="PatternQuestion form-control" placeholder="Вопрос" >
			<br>
			<input type="text" class="PatternText form-control" placeholder="Текст">
			<br>
		</div>

		<div class="container">
			<input type="text" class="PatternPoint form-control form-control-dark" placeholder="Метка">
			<p class="PatternFootnote">Введите метки, разделяя их запятыми</p>
			<a href="#" type="button" class="PatternBtnShare btn btn-secondary">Опубликовать</a>
			<br>
		</div>

		</main>
	</div>


	<?php require "blocks/footer.php"?>
</body>

</html>
