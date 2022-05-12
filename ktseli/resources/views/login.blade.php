<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSRF TOKEN -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Вход</title>
  <!-- Styles -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>Вход</h1>
<form class="col-3 offset-4 border rounded" method="POST" action="{{ route('user.login') }}">
  @csrf
  <div class="form-group">
    <label for="email" class="col-form-label-lg">Ваш email</label>
    <input class="form-control" id="email" name="email" type="text"  value="" placeholder="Email">
    @error('email')
    <div class="alert alert-danger">{{ message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="name" class="col-form-label-lg">Ваше имя</label>
    <input class="form-control" id="name" name="name" type="text"  value="" placeholder="Имя">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="password" class="col-form-label-lg">Пароль</label>
    <input class="form-control" id="password" name="password" type="password" value="" placeholder="Пароль:">
    @error('password')
    <div class="alert alert-danger">{{ message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <button class="btn btn-lg btn-primary" type="submit" name="sendMe" value="1">Войти</button>
  </div>
</form>

</body>
</html>
