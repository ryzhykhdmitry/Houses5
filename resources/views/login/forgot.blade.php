@extends('template.template')
@section('content')
<div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="basic-login">
                            <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                                {!! Form::open() !!}

                                @if (Session::has('global'))
                                   <p>{!! Session::get('global') !!}</p>
                                @endif

                                {!! Form::text('email', null,['placeholder' => 'E-mail', 'class' => 'form-control']) !!}
                                @if ($errors->has('email'))
                                {!! $errors->first('email') !!}
                                @endif
                                <br>

                                <div class="form-group">
                                {!! Form::submit('Восстановить пароль', ['class' => 'btn pull-right']) !!}
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
@stop