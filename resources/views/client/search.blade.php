@extends('layouts.master')

@section('title')
client Controller
@endsection



@section('content')

 

 <div class="panel panel-info">
<div class="panel-heading">
   <div class="panel-title"> 
searched Client list
<div  style="float: right;">
                <a class="btn btn-success" href="{{ route('client.create') }}"> Create New client</a>
          </div>
   </div></div>
   <div class="panel-body">
	<table class="table table-striped">
		<tr class="success">
			<th>Name</th>
            <th>organization name</th>
			
			<th>Email</th>
			<th>Address</th>
			<th>Phone number</th>
            <th>created date</th>
            <th>Action</th>

		</tr>
		@foreach ($clients as $client)
		<tr>
			<td>{{$client->full_name}}</td>
			<td>{{$client->org_name}}</td>
			<td>{{$client->email}}</td>
			<td>{{$client->address}}</td>
			<td>{{$client->phone_no}}</td>
			<td>{{$client->created_at}}</td>
			<td>
            <a class="btn btn-info" href="{{ route('client.show',$client->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('client.edit',$client->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['client.destroy', $client->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
		</tr>
		@endforeach
		
              
		
		
		
	</table>
</div></div></div>




   
@endsection