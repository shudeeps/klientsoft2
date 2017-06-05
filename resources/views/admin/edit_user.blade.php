
@extends('layouts.master')


@section('content')





<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">User edit form</h3>
  </div>
  <div class="panel-body">
  <div class="col-md-8">
   {!! Form::model($user, ['method' => 'PATCH','files'=>true,'class'=>'form-horizontal','route' => ['admin.update', $user->id]]) !!}

        {{ csrf_field() }}

<div class="form-group form-group-lg">
 {!! Form::label('full_name', 'Full Name:',['class'=>'col-sm-4 control-label']) !!}
   <div class="col-sm-8">
 {!! Form::text('full_name',null, ['class' => 'form-control']) !!}
 </div>
</div>


<div class="form-group form-group-lg">
 {!! Form::label('user_name', 'Username:',['class'=>'col-sm-4 control-label']) !!}
   <div class="col-sm-8">
 {!! Form::text('user_name',null, ['class' => 'form-control']) !!}
 </div>
</div>

<div class="form-group form-group-lg">
 {!! Form::label('email', 'Email:',['class'=>'col-sm-4 control-label']) !!}
<div class="col-sm-8">
 {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
</div>



<div class="form-group form-group-lg">

 {!! Form::label(' password', 'New password:',['class'=>'col-sm-4 control-label']) !!}
<div class="col-sm-8">
 <input type="password" name="password" class="form-control">
</div>
</div>


<div class="col-md-6"  style="float: right;">
{!!    Form::submit('Update',['class'=>'btn btn-primary btn-lg active '	]);  !!}
</div>


                          
     {!! Form::close() !!}
    </div>
  </div>
</div>

@endsection