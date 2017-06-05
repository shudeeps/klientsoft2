@extends('layouts.master')

@section('title')
Admin Controller
@endsection



@section('content')

 

 <div class="panel panel-info">
<div class="panel-heading">
   <div class="panel-title"> 
user list

   </div></div>
   <div class="panel-body">
	<table class="table table-striped">
		<tr class="success">
			<th>UserName</th>
       		<th>Email</th>
            <th>created date</th>
            <th>Action</th>

		</tr>
		@foreach ($users as $user)
		<tr>
			<td>{{$user->user_name}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->created_at}}</td>
			<td>
             <a class="btn btn-primary" href="{{ route('admin.edit_user',$user->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['admin.delete_user', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
		</tr>
		@endforeach
		
              
		
		
		
	</table>
</div></div></div>




   
@endsection