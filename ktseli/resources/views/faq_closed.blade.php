@extends('layouts.app')

@section('title')
	Кцели-FAQ
@endsection

@section('inc.header')

@section('content')

	<div class="container">
		<main class="justify-content-center">
			<ul class="breadcrumb">
			  <li><a href="/">Главная</a></li>
			  <li>F.A.Q. - вопросы и ответы</li>
			</ul>
			<h2>F.A.Q. - вопросы и ответы</h2>
			<div class="container">
			<div class="row">
				<div class="col-xs-9 col-sm-9 col-md-10 col-lg-10">
					<a href="/faq_open" class="borderlessbutton px-2">Открытые</a>
					<a class="borderlessactivebutton px-2">Решённые</a>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
					<a href="/pattern" type="button" class="BtnNewQuestion btn btn-secondary">Задать вопрос</a>
				</div>
			</div>
		</div>
		<div class="container">
			<a href="" class="BigName">Решённый вопрос!</a>
			<p class="SmallName">Описание решённого вопроса!</p>
			<br>
			<a href="" class="BigName">Решённый вопрос 2!</a>
			<p class="SmallName">Описание решённого вопроса 2!</p>
			<br>
		</div>
		</main>
	</div>

@endsection

@section('inc.footer')
