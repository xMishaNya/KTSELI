@extends('layouts.app')

@section('title')
	Кцели-главная
@endsection

@section('inc.header')

@section('content')
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
					</div>
				</div>
			</div>
			</main>
		</div>
@endsection

@section('inc.footer')
