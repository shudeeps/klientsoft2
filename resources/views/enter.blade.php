@extends('layouts.master')

@section('content')

 @if (Auth::check())
Welcome

@else

<div class="well" style="width: 20%; margin-left: 350px;">
<strong>Only authorized </strong><br>
<a href="{{route('admin.login')}}"> <button style="margin:10px" class="btn btn-info">admin login </button> </a> 	
<a href="{{route('login')}}"> <button  style="margin: 10px;" class="btn btn-info">user login </button></a> 	
</div>
	
@endif
<!--<div class="container">
	<div class="row">
			<div class="col-md-8">
				<div class="panel">
					@component('components.who')
			    @endcomponent
				</div>
			</div>	
	</div>
</div>
-->


@endsection