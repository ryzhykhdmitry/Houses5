@extends('template.template')

@section('content')

<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Описание проекта</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">
	    		<div class="row">
	    			<!-- Product Image & Available Colors -->
	    			<div class="col-sm-6">
	    				<div class="fotorama" data-nav="thumbs" data-allowfullscreen="true" data-keyboard="true"
	    				     data-arrows="true" data-click="true" data-swipe="true" data-trackpad="true">
	    					<img src="/img/projects/{{ $project->id }}/l/1.jpg" alt="Item Name">
	    					<img src="/img/projects/{{ $project->id }}/l/2.jpg" alt="Item Name">
	    					<img src="/img/projects/{{ $project->id }}/l/3.jpg" alt="Item Name">
	    					<img src="/img/projects/{{ $project->id }}/l/4.jpg" alt="Item Name">
	    				</div>
	    			</div>

	    			<div class="col-sm-6 product-details">
	    				<h4>{{ $project->title }}</h4>
	    				<div class="price">
							<span class="price-was">$659.99</span> $499.99
						</div>
						<h5>Характеристики:</h5>
	    				<p>
	    					Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat massa ornare vitae. Ut fermentum justo vel venenatis eleifend. Fusce id magna eros.
	    				</p>
						<table class="shop-item-selections">
							<!-- Type Selector -->
							<tr>
								<td><b>Тип:</b></td>
								<td>
									{{ $project['levels'] == '1' ? 'одноэтажный': ($project['levels'] == '1.5' ? 'мансардный' : 'двухэтажный') }}
								</td>
							</tr>
							<!-- Building area -->
							<tr>
								<td><b>Площадь:</b></td>
								<td>
									{{ $project['building_area'] }} м&sup2;
								</td>
							</tr>
							<!-- Area -->
							<tr>
								<td><b>Размер участка:</b></td>
								<td>
									{{ $project['lot_dem'] }} м
								</td>
							</tr>
                            <!-- Inhabitants -->
							<tr>
								<td><b>Количество жильцов:</b></td>
								<td>
									{{ $project['inhabitants'] }}
								</td>
							</tr>
                            <!-- Angle -->
							<tr>
								<td><b>Наклон крыши:</b></td>
								<td>
									{{ $project['roof_angle'] }}&deg;
								</td>
							</tr>
                            <!-- Height -->
							<tr>
								<td><b>Высота:</b></td>
								<td>
									{{ $project['building_height'] }} м
								</td>
							</tr>
                            <!-- Garage -->
							<tr>
								<td><b>Гараж:</b></td>
								<td>
									{{ $project['garage'] }}
								</td>
							</tr>
						</table>
	    			</div>
	    			<!-- End Product Summary & Options -->

	    			<!-- Full Description & Specification -->
	    			<div class="col-sm-12">
	    				<div class="tabbable">
	    					<!-- Tabs -->
							<ul class="nav nav-tabs product-details-nav">
								<li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
								<li><a href="#tab2" data-toggle="tab">Specification</a></li>
							</ul>
							<!-- Tab Content (Full Description) -->
							<div class="tab-content product-detail-info">
								<div class="tab-pane active" id="tab1">
									<h4>Product Description</h4>
									<p>
										Donec hendrerit massa metus, a ultrices elit iaculis eu. Pellentesque ullamcorper augue lacus. Phasellus et est quis diam iaculis fringilla id nec sapien. Sed tempor ornare felis, non vulputate dolor. Etiam ornare diam vitae ligula malesuada tempor. Vestibulum nec odio vel libero ullamcorper euismod et in sapien. Suspendisse potenti.
									</p>
									<h4>Product Highlights</h4>
									<ul>
										<li>Nullam dictum augue nec iaculis rhoncus. Aenean lobortis fringilla orci, vitae varius purus eleifend vitae.</li>
										<li>Nunc ornare, dolor a ultrices ultricies, magna dolor convallis enim, sed volutpat quam sem sed tellus.</li>
										<li>Aliquam malesuada cursus urna a rutrum. Ut ultricies facilisis suscipit.</li>
										<li>Duis a magna iaculis, aliquam metus in, luctus eros.</li>
										<li>Aenean nisi nibh, imperdiet sit amet eleifend et, gravida vitae sem.</li>
										<li>Donec quis nisi congue, ultricies massa ut, bibendum velit.</li>
									</ul>
									<h4>Usage Information</h4>
									<p>
										Donec hendrerit massa metus, a ultrices elit iaculis eu. Pellentesque ullamcorper augue lacus. Phasellus et est quis diam iaculis fringilla id nec sapien. Sed tempor ornare felis, non vulputate dolor. Etiam ornare diam vitae ligula malesuada tempor. Vestibulum nec odio vel libero ullamcorper euismod et in sapien. Suspendisse potenti.
									</p>
								</div>
								<!-- Tab Content (Specification) -->
								<div class="tab-pane" id="tab2">
									<table>
										<tr>
											<td>Total sensor Pixels (megapixels)</td>
											<td>Approx. 16.7</td>
										</tr>
										<tr>
											<td>Effective Pixels (megapixels)</td>
											<td>Approx. 16.1</td>
										</tr>
										<tr>
											<td>Automatic White Balance</td>
											<td>YES</td>
										</tr>
										<tr>
											<td>White balance: preset selection</td>
											<td>Daylight, Shade, Cloudy, Incandescent, Fluorescent, Flash</td>
										</tr>
										<tr>
											<td>White balance: custom setting</td>
											<td>YES</td>
										</tr>
										<tr>
											<td>White balance: types of color temperature</td>
											<td>YES (G7 to M7,15-step) (A7 to B7,15-step)</td>
										</tr>
										<tr>
											<td>White balance bracketing</td>
											<td>NO</td>
										</tr>
										<tr>
											<td>ISO Sensitivity Setting</td>
											<td>ISO100 - 25600 equivalent</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
	    			</div>
	    			<!-- End Full Description & Specification -->
	    		</div>
			</div>
		</div>
@stop