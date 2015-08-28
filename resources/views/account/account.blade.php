@extends('template.template')
@section('content')

 <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Настройки аккаунта</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<div class="basic-login">

								<div class="form-group">
                                    {!! Form::open() !!}

                                    <div class="form-group {{$errors->has('old_password') ? 'has-error' : ''}}">
                                     {!! Form::password('old_password', [ 'placeholder' => 'Старый пароль', 'class' => 'form-control'  ]) !!}
                                      @if ($errors->has('old_password'))
                                     {!! $errors->first('old_password') !!}
                                      @endif
                                     </div>
                                     <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                                     {!! Form::password('password', [ 'placeholder' => 'Новый пароль', 'class' => 'form-control'  ]) !!}
                                      @if ($errors->has('password'))
                                     {!! $errors->first('password') !!}
                                      @endif
                                     </div>
                                       <div class="form-group {{$errors->has('repeat_password') ? 'has-error' : ''}}">
                                     {!! Form::password('repeat_password', [ 'placeholder' => 'Повторите пароль', 'class' => 'form-control'  ]) !!}
                                      @if ($errors->has('repeat_password'))
                                     {!! $errors->first('repeat_password') !!}
                                      @endif
                                      </div>



                                     <div class="form-group">
                                       {!! Form::submit('Сменить пароль', ['class' => 'btn pull-right']) !!}
                                         <div class="clearfix">
                                         </div>
                                         {!! Form::token() !!}
                                         {!! Form::close() !!}
                                     </div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>


 @if(Session::has('global'))
 <div class="text-danger text-center"><p>{!! Session::get('global') !!}</p></div>
 @endif


@stop