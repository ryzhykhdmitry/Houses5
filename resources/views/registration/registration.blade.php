@extends('template.template')

@section('content')



<!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Регистрация</h1>
					</div>
				</div>
			</div>
		</div>


    <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="basic-login">

								<div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">


                                    {!! Form::open() !!}


                                    {!! Form::text('username', null,  ['placeholder' => 'Логин', 'class' => 'form-control']) !!}
                                     @if ($errors->has('username'))
                                       {!! $errors->first('username') !!}
                                     @endif

                                </div>
                                  <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}" >
                                    {!! Form::text('email', null, [ 'placeholder' => 'E-mail', 'class' => 'form-control' ]) !!}
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
                                      <div class="form-group {{ $errors->has('repeat_password') ? 'has-error' : '' }}">
                                    {!! Form::password('repeat_password', [ 'placeholder' => 'Повторите пароль', 'class' => 'form-control'  ]) !!}
                                     @if ($errors->has('repeat_password'))
                                    {!! $errors->first('repeat_password') !!}
                                     @endif
                                     </div>



                                    <div class="form-group">
                                      {!! Form::submit('зарегистрироваться', ['class' => 'btn pull-right']) !!}
                                        <div class="clearfix">
                                        </div>
                                        {!! Form::token() !!}
                                        {!! Form::close() !!}
                                    </div>
                                  </div>


                    </div>

                                        <div class="col-sm-6 col-sm-offset-1 social-login">
                    						<p>Вы можете зарегистрироваться с помошью Facebook или Twitter</p>
                    						<div class="social-login-buttons">
                    							<a href="{{ URL::route('/login/facebook') }}" class="btn-facebook-login">Facebook</a>
                    							<a href="{{ URL::route('/login/twitter') }}" class="btn-twitter-login">Twitter</a>
                    						</div>
                    					</div>
                </div>
            </div>
    </div>

@stop
