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
				<div class="col-xs-6 col-sm-6 col-md-10 col-lg-10">
					<a class="borderlessactivebutton px-2">Открытые</a>
					<a href="/faq_closed" class="borderlessbutton px-2">Решённые</a>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
					<a href="/pattern" type="button" class="BtnNewQuestion btn btn-secondary">Задать вопрос</a>
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

@endsection

@section('inc.footer')
