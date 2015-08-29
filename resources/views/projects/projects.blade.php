@extends('template.template')

@section('content')


<!--Tab выбора проектов -->
<div class="mainmenu-wrapper">
 <div class="eshop-section section">
  <div class="container">
   <div class="col-sm-6 product-details">
        <div class="tabbable">
            <ul class="nav nav-tabs product-details-nav">
                <li class="active"><a href="#tab1" data-toggle="tab">Проекты</a></li>
                <li><a href="#tab2" data-toggle="tab">Поиск по параметрам</a></li>
            </ul>
            <div class="tab-content product-detail-info">
                <div class="tab-pane active" id="tab1">
                         <a href="{{ URL::route('projects/{option}', 'one') }}" class="btn">Одноэтажные</a>
                         <a href="{{ URL::route('projects/{option}', 'onep') }}" class="btn">Мансардные&ensp;</a>
                         <a href="{{ URL::route('projects/{option}', 'two') }}" class="btn">Двухэтажные&nbsp;</a>
                         <a href="{{ URL::route('projects/{option}', 'garage') }}" class="btn">&ensp;С гаражом &ensp;&nbsp;</a>
                </div>

                <div class="tab-pane" id="tab2">
                    <div class="form-group">
                        {!! Form::open(['route' => 'projectsp-get', 'method' => 'GET']) !!}
                        @if (Session::has('global'))
                        <p>{!! Session::get('global') !!}</p>
                        @endif
                            <div class="col-md-* col-lg-*">
                                <table>
                                    <tr>

							            <!-- levels Selector -->

                                            <td>{!! Form::label('levels', 'Тип дома') !!}</td>
                                            <td>от {!!Form::select('levelsF', array('1' => 'одноэтажный', '1.5' => 'мансардный', '2' => 'двухэтажный'), 1, ['class' => 'btn-sm btn-white']);!!}</td>
                                            <td>до {!!Form::select('levelsT', array('1' => 'одноэтажный', '1.5' => 'мансардный', '2' => 'двухэтажный'), 2, ['class' => 'btn-sm btn-white']);!!}</td>
                                    </tr>
                                    <tr>


                                            <!-- area Selector -->

                                            <td>{!! Form::label('b_area', 'Площадь') !!}</td>
                                            <td>от {!!Form::select('b_areaF', array('0' => '0', '100' => '100', '150' => '150', '200' => '200', '201' => '200+'), 1, ['class' => 'btn-sm btn-white']);!!}</td>
                                            <td>до {!!Form::select('b_areaT', array('100' => '100', '150' => '150', '200' => '200', '201' => '200+'), '201', ['class' => 'btn-sm btn-white']);!!}</td>

                                    </tr>
                                    <tr>
                                                <td>{!! Form::label('garage', 'Гараж') !!}</td>
                                                <td>&emsp; {!!Form::select('garage', array('0' => 'нет', '1' => 'есть'), 0, ['class' => 'btn-sm btn-white']);!!}</td>
                                                <td></td>
                                    </tr>
                                    <tr>
                                                <td></td>
                                                <td></td>
                                                <td>{!! Form::submit('Найти', ['class' => 'btn pull-right']) !!}</td>
                                    </tr>
                                    <div class="clearfix">
                                    </div>
                                    <!--  Form::token() -->
                                    {!! Form::close() !!}
                                </table>
                            </div>
				    </div>
                </div>
            </div>
        </div>
   </div>
  </div>
 </div>
</div>

@if (Session::has('global'))
    <p>{!! Session::get('global') !!}</p>
@endif




	    		<!--{ var_dump($projects) }} -->

<!-- Выводим проекты из объекта по запросу(проектов больше несколько) -->
@if(isset($pds) && count($pds) >1)
        @foreach($pds as $pd)




					<div class="col-md-3 col-sm-6">
						<div class="shop-item">
							<div class="shop-item-image">
								<a href="{{ URL::route('project', $pd->id) }}"><p><img class="img-rounded" src="/img/projects/{{ $pd->id }}/s/1.jpg" alt="Item Name"></p></a>
							</div>
							<div class="title">
								<h3><a href="{{ URL::route('project', $pd->id) }}">{{ $pd->title }}</a></h3>
							</div>
							<div class="price">
								{{ $pd->building_area }} м2
							</div>
							<div class="actions">
								<a href="{{ URL::route('project', $pd->id) }}" class="btn btn-small"><i class="icon-shopping-cart icon-white"></i> Подробнее</a>
							</div>
						</div>
					</div>



        @endforeach



    @elseif(count($pds)==0)
     <div class="text-center"><b>К сожалению, ничего не найдено. Попробуйте упростить запрос.</b></div>

    @elseif(count($pds)==1 && count($pds)==8)
          <!-- Если проект в переданном объекте 1 -->

                    					<div class="col-md-3 col-sm-6">
                    						<div class="shop-item">
                    							<div class="shop-item-image">
                    								<a href="{{ URL::route('/project/{id}', $pds->id) }}"><img src="/img/projects/{{ $pds->id }}/s/1.jpg" alt="Item Name"></a>
                    							</div>
                    							<div class="title">
                    								<h3><a href="{{ URL::route('project', $pd->id) }}">{{ $pds->title }}</a></h3>
                    							</div>
                    							<div class="price">
                    								{{ $pds->building_area }} м2
                    							</div>
                    							<div class="actions">
                    								<a href="{{ URL::route('project', $pd->id) }}" class="btn btn-small"><i class="icon-shopping-cart icon-white"></i> Подробнее</a>
                    							</div>
                    						</div>
                    					</div>
	@endif
	<div class="row">
	</div>

    <div class="pagination-wrapper ">
    					<ul class="pagination pagination-lg">
	{!! $pds->appends(Input::except('page'))->render() !!}
	</ul>
	</div>

@stop