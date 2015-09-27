<!-- Footer -->
	    <div class="footer">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Наша последняя работа</h3>
							<div class="portfolio-image">
								<a href="{{ URL::route('project', '34') }}"><img src="/img/projects/34/s/2.jpg" alt="Project Name"></a>
						    </div>
		    		</div>
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Навигация</h3>
		    			<ul class="no-list-style footer-navigate-section">
		    				<li><a href="{{ URL::route('home') }}">Главная</a></li>
		    				<li><a href="{{ URL::route('about') }}">О нас</a></li>
		    				<li><a href="{{ URL::route('projects') }}">Проекты</a></li>
		    				<li><a href="{{ URL::route('contacts') }}">Контакты</a></li>
		    			</ul>
		    		</div>

		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Контакты</h3>
		    			<p class="contact-us-details">
	        				<b>Адрес:</b> ул.Сурганова 14, Минск, Беларусь<br/>
	        				<b>Тел:</b> +44 123 654321<br/>
	        				<b>Факс:</b> +44 123 654321<br/>
	        				<b>Email:</b> <a href="mailto:houses.auth@gmail.com">houses.auth@gmail.com</a>
	        			</p>
		    		</div>
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Присоединяйтесь</h3>
		    			<ul class="footer-stay-connected no-list-style">
		    				<li><a href="{{ URL::route('social') }}" class="facebook"></a></li>
		    				<li><a href="{{ URL::route('social') }}" class="twitter"></a></li>
		    				<li><a href="{{ URL::route('social') }}" class="googleplus"></a></li>
		    			</ul>
		    		</div>
		    	</div>
                    <div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2015 Ryzhykh Dmitry</div>
		    		</div>
		    	</div>
		    </div>
	    </div>


</body>
</html>

