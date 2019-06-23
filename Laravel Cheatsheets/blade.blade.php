<h2>*********Layout and sections*************</h2>

{{-- Layout--}}
<html>

    <head>

    </head>

    <body>
        @yield('i-am-the-section')
    </body>

</html>

{{-- Section --}}
@extends('some/layout')

@section('i-am-the section')

   <!-- HTML of this page's content -->

@endsection

@include('path/to/other/template') {{-- The included view inherits all the variables from the current view. --}}



<h2>*********Outputing variables*************</h2>

{{ $variable_name }} {{-- this is the same as outputing variable with PHP htmlspecialchars --}}
{!! $variable_name !!} {{-- outputing WITHOUT protection --}}


<h2>*********Control structures*************</h2>

@if ()

@else

@endif

 

@for ()

@endfor

 

@foreach ()

@endforeach

 

@while ()

@endwhile

 

@break

@continue

<h2>*********Passing data*************</h2>

@extends('some/layout', ['foo' => 'bar'])
@include('some/template', ['foo' => 'bar'])
@component('come/component', ['foo' => 'bar'])