@extends('template.template')

@section('content')

<!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Вход</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="basic-login">
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                {!! Form::open() !!}
                                @if (Session::has('global'))
                                   <p>{!! Session::get('global') !!}</p>
                                @endif
								{!! Form::text('email', null,  ['placeholder' => 'E-mail', 'class' => 'form-control']) !!}
                                @if ($errors->has('email'))
                                {!! $errors->first('email') !!}
                                @endif
							</div>

							<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
		        				{!! Form::password('password', [ 'placeholder' => 'Пароль', 'class' => 'form-control'  ]) !!}
                                @if ($errors->has('password'))
                                {!! $errors->first('password') !!}
                                @endif
							</div>

							<div class="form-group">
                                <label class="checkbox-inline"><input type="checkbox" name="remember"> Запомнить меня </label>
                                <br> <br> <br>


								<div class="form-group">
								<a href="{{ URL::route('forgot') }}"> Забыли пароль? </a>
                                {!! Form::submit('Войти', ['class' => 'btn pull-right']) !!}
                                <div class="clearfix">
                                </div>
                                {!! Form::token() !!}
                                {!! Form::close() !!}
                                </div>
							</div>

						</div>
					</div>

					<div class="col-sm-7 social-login">
						<p>Или воспользуйтесь своим аккаунтом в Facebook или Twitter</p>
						<div class="social-login-buttons">
							<a href="{{ URL::route('/login/facebook') }}" class="btn-facebook-login">Facebook</a>
							<a href="{{ URL::route('/login/twitter') }}" class="btn-twitter-login">Twitter</a>
						</div>
						<div class="clearfix"></div>
						<div class="not-member">
							<p>Нет аккаунта? <a href="{{ URL::route('registration') }}"> Зарегистрируйтесь ;) </a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
@stop