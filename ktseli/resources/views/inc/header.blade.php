@section('header')
<header class="p-1">
<div class="container">
    <div class="d-flex flex-wrap align-items-end justify-content-center justify-content-lg-start">
        <a href="/index.php" class="d-flex align-items-center col-lg-2 mb-2 mb-lg-0">
            <img src="img/logo.png" width="214" height="50">
        </a>

        <ul class="nav navbar col-8 col-lg-auto me-lg-auto mx-auto mb-2 justify-content-center mb-lg-0">
            <li><a href="/" class="px-3">Главная</a></li>
            <li><a href="/news" class="px-3">Новости</a></li>
            <li><a href="/blogs" class="px-3">Блоги</a></li>
            <li><a href="/faq_open" class="px-3">FAQ</a></li>
            <li><a href="/about" class="px-3">О нас</a></li>
        </ul>

        @can('view-loggined-user-header')
          <div class="nav navbar">
            <a href="/logout" class="px-3">Выход</a>
          </div>
        @endcan
        @cannot('view-loggined-user-header')
          <div class="nav navbar">
            <a href="#" class="px-3">Поиск</a>
            <a href="/registration" class="px-3">Войти</a>
          </div>
        @endcan
    </div>
</div>
</header>
