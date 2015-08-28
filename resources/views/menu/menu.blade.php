
<div class="mainmenu-wrapper">
	        <div class="container">

		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="{{ URL::route('home') }}"><img src="/img/houses-logo2.png" alt="Houses"></a></li>
						<li>
							<a href="{{ URL::route('home') }}">Главная</a>
						</li>
						<li>
							<a href="{{ URL::route('about') }}">О нас</a>
						</li>
						<li class="account-wrapper">
							<a href="{{ URL::route('projects') }}">Проекты</a>

						<li>
							<a href="{{ URL::route('contacts') }}">Контакты</a>
						</li>



						    @if (!Auth::check())
						    <li class="account-wrapper"><a href="{{ URL::route('login') }}">Войти</a></li>
						    @else
						    <li class="account-wrapper"><a href="{{ URL::route('account') }}">{{ Auth::user()->username }}</a><li>
						    <a href="{{ URL::route('logout') }}">Выйти</a>
						    @endif

					</ul>
				</nav>
			</div>
		</div>







