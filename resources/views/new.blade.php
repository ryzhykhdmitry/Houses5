<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>

	    {{ HTML::script('js/bootstrap.js') }}
        {{ HTML::script('js/jquery-2.1.3.js') }}
        {{ HTML::script('js/jquery-ui.js') }}

        {{ HTML::style('css/ui/jquery-ui.css') }}
        {{ HTML::style('css/ui/jquery-ui.structure.css') }}
        {{ HTML::style('css/ui/jquery-ui.theme.css') }}
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-theme.css') }}
        {{ HTML::style('css/mainpage.css') }}






</head>
<body>

 <div class="pre-scrollable">
    <div class="bg-primary" align="left">

           <button type="button" class="btn btn-primary btm-lg"> Home </button>
           <button type="button" class="btn btn-primary btm-lg"> Catalog</button>
           <button type="button" class="btn btn-primary btm-lg"> Contact us </button>
           <a href="#openModal" class="btn-primary btn-lg"> Modal </a>
           <a href="{{ URL::route('registration') }}" class="btn-primary btn-lg"> Регистрация </a>









        </div>
        @if(Session::has('global'))
          <p>{{ Session::get('global') }}</p>
        @endif

        </div>
</body>
</html>