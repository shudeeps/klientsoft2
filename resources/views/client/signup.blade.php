@extends('layouts.master')


@section('content')





<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Client signup form</h3>
  </div>
  <div class="panel-body">
  <div class="col-md-8">
    {!! Form::open(['action' => 'clientController@store','files'=>true,'class'=>'form-horizontal']) !!}

  
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      
       @include('client.form')


    {!! Form::close() !!}
    </div>
  </div>
</div>

@endsection