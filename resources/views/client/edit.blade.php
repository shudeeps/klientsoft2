@extends('layouts.master')


@section('content')





<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Client edit form</h3>
  </div>
  <div class="panel-body">
  <div class="col-md-8">
   {!! Form::model($client, ['method' => 'PATCH','files'=>true,'class'=>'form-horizontal','route' => ['client.update', $client->id]]) !!}

        @include('client.form')

    {!! Form::close() !!}
    </div>
  </div>
</div>

@endsection