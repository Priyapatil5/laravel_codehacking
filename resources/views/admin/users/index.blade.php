@extends('layouts.admin')

@section('content')
	<h2>All Users</h2>
	<table class="table table-striped">
	    <thead>
	      <tr>
	        <th>Id</th>
	        <th>Photo</th>
	        <th>Name</th>
	        <th>Email</th>
	        <th>Role</th>
	        <th>Created At</th>
	        <th>Updated At</th>
	        <th>Status</th>
	      </tr>
	    </thead>
	    <tbody>
	    	@if($users)
	    		@foreach($users as $user)
			      <tr>
			        <td>{{$user->id}}</td>
			        <td><img src="{{$user->photo ? $user->photo->file : 'http://placehold.jp/70x50.png'}}" alt="No Photo" height="50" width="70"></td>
			        <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
			        <td>{{$user->email}}</td>
			        <td>{{$user->role ? $user->role->name : 'No Role Assigned'}}</td>
			        <td>{{$user->created_at->diffForHumans()}}</td>
			        <td>{{$user->updated_at->diffForHumans()}}</td>
			        <td>{{$user->is_active == 1 ? "Active" : "Not Active"}}</td>
			      </tr>
			    @endforeach
	      @endif
	  </tbody>
	</table>
@endsection

@section('footer')


@endsection