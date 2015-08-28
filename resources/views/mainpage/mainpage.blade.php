@extends('template.template')

@section('content')

<!-- Homepage Slider -->
        <div class="homepage-slider">
        	<div id="sequence">
				<ul class="sequence-canvas">
					<!-- Slide 1 -->
					<li class="bg4">
						<!-- Slide Title -->
						<h2 class="title">Авторские проекты</h2>
						<!-- Slide Text -->
						<h3 class="subtitle">Более 100500 проектов домов от классики до современных</h3>
						<!-- Slide Image -->
						<img class="slide-img" src="img/homepage-slider/slide4.png" alt="Slide 1" />
					</li>
					<!-- End Slide 1 -->
					<!-- Slide 2 -->
					<li class="bg3">
						<!-- Slide Title -->
						<h2 class="title">Вся документация</h2>
						<!-- Slide Text -->
						<h3 class="subtitle">Полный набор документов для строительства</h3>
						<!-- Slide Image -->
						<img class="slide-img" src="img/homepage-slider/slide5.png" alt="Slide 2" />
					</li>
					<!-- End Slide 2 -->
					<!-- Slide 3 -->
					<li class="bg1">
						<!-- Slide Title -->
						<h2 class="title">Сезонные скидки</h2>
						<!-- Slide Text -->
						<h3 class="subtitle">Экономьте, заказав проект сейчас! </h3>
						<!-- Slide Image -->
						<img class="slide-img" src="img/homepage-slider/slide6.png" alt="Slide 3" />
					</li>
					<!-- End Slide 3 -->
				</ul>
				<div class="sequence-pagination-wrapper">
					<ul class="sequence-pagination">
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
				</div>
			</div>
        </div>








<div>

 @if(Session::has('global'))
 <div class="text-danger text-center"><p>{!! Session::get('global') !!}</p></div>
 @endif
</div>

@stop