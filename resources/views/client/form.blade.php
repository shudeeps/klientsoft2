<div class="form-group form-group-lg">
 {!! Form::label('full_name', 'Client Name:',['class'=>'col-sm-4 control-label']) !!}
   <div class="col-sm-8">
 {!! Form::text('full_name',null, ['class' => 'form-control']) !!}
 </div>
</div>

<div class="form-group form-group-lg">
 {!! Form::label('org_name', 'Organization Name:',['class'=>'col-sm-4 control-label']) !!}
   <div class="col-sm-8">
 {!! Form::text('org_name',null, ['class' => 'form-control']) !!}
 </div>
</div>




<div class="form-group form-group-lg">
 {!! Form::label('email', 'Email:',['class'=>'col-sm-4 control-label']) !!}
<div class="col-sm-8">
 {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
</div>




<div class="form-group form-group-lg">
 {!! Form::label('address', 'Address:',['class'=>'col-sm-4 control-label']) !!}
   <div class="col-sm-8">
 {!! Form::text('address',null, ['class' => 'form-control']) !!}
 </div>
</div>


<div class="form-group form-group-lg">
 {!! Form::label('phone', 'Phone:',['class'=>'col-sm-4 control-label']) !!}
<div class="col-sm-8">

 {!! Form::text('phone_no', null, ['class' => 'form-control']) !!}
</div>
</div>




<div class="col-md-6"  style="float: right;">
{!!    Form::submit('submit',['class'=>'btn btn-primary btn-lg active '	]);  !!}
</div>
