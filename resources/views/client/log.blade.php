@extends('layouts.master')

@section('title')
client log Controller
@endsection


@section('content')
 <div class="row">
        <div  class="col-md-8">
                       <table class="table table-bordered">
                <thead>
                <tr>
                <th>SN</th>
                	<th>Data log</th>
                    <th>Date</th>
                    
                </tr>
                </thead>

                <tbody>
                <?php $i=1; ?>
                @foreach ($logs as $log)
					<tr>
					<th>{{$i++}}</th>
					<th>{{$log->data}}</th>
					<th>{{$log->created_at}}</th>
											
					</tr>
                	@endforeach

                </tbody>
            </table>
        </div>

        <div class="col-md-3">

<div class="well">

<h2>Add log</h2>
              {!! Form::open(['action' => 'clientController@addlog','files'=>true,'class'=>'form-horizontal']) !!}
                {!! csrf_field() !!}
                <fieldset>
                    <!-- Text input-->
                    <input type="hidden" name="client_id" value="{{$id}}">
                    @if (Auth::user())
                    	
                    	<?php $role=0 ; ?>
                   
                  	@elseif(Auth::guard('admin')->user())
                  	<?php $role=1; ?>
                    @endif

                    <input type="hidden" name="role"  value="{{$role}}">
                    <div class="form-group">
                       
                        <div class="col-md-9">
                            <textarea name="data" id="data" cols="25" rows="10" required="">
                            	
                            </textarea>

                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-md-3 control-label" for="submit"></label>
                        <div class="col-md-9">
                            <button id="submit" name="submit" class="btn btn-success">Insert</button>
                        </div>
                    </div>

                </fieldset>

                {!! Form::close() !!}
         </div>  </div>

        </div>
    </div>


@endsection