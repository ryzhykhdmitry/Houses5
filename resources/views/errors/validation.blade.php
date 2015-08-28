@extends ('template.template')

@section ('content')

<div class="alert-warning">
 <strong>Упс! Ошибочка</strong> <br/>

 @if (isset($errors))
     @foreach($errors as $error)
        {{ $error[0] }} <br/>
     @endforeach


 @else

 Странненько

 @endif


</div>
 <a class="alert-info" href="{{  URL::previous() }}"> &larr;вернуться </a>

@stop