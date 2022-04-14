@extends('layouts.app')

@section('title')
	Кцели-FAQ
@endsection

@section('inc.header')

@section('content')

	<div class="container">
		<main>
			<ul class="breadcrumb">
			  <li><a href="/">Главная</a></li>
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

@endsection

@section('inc.footer')
