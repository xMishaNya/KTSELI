@extends('layouts.app')

@section('title')
	Кцели-Блоги
@endsection

@section('inc.header')

@section('content')

	<div class="container">
		<main class="justify-content-center">
			<ul class="breadcrumb">
			  <li><a href="/">Главная</a></li>
			  <li>Блоги</li>
			</ul>
			<h2>Блоги</h2>
			<div class="container">
			<div class="row">
				<div class="col-xs-9 col-sm-9 col-md-10 col-lg-10">
				</div>
				<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
					<a href="/pattern" type="button" class="BtnNewBlog btn btn-secondary">Создать тему</a>
				</div>
			</div>
		</div>
		<div class="container">
			<a href="#" class="BigName"><img src="img/announcerpic.jpg" class="ImgBlogs">Как получить свой первый паспорт в 14 лет?</a>
			<p class="SmallName">Для получения своего первого паспорта, нужно приготовить следующие документы...</p>
			<br>
			<br>
			<br>
			<br>
			<a href="#" class="BigName"><img src="img/car.jpg" class="ImgBlogs">Как получить права на вождение?</a>
			<p class="SmallName">Получение водительского удостоверения - важный шаг в жизни человека. Сейчас разберемся как поэтапно...</p>
			<br>
			<br>
			<br>
			</div>
		</div>
		</main>
	</div>

@endsection

@section('inc.footer')
