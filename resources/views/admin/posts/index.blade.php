@extends('layouts.admin')

@section('content')
	<div class="panel panel-primary">
      <div class="panel-heading">All Posts</div>
      <div class="panel-body">
      	<div class="col-sm-12">
      		<div class="table-responsive">          
  					<table class="table">
  						<thead>
  							<tr>
  								<th>Id</th>
                  <th>Photo</th>
	  							<th>User</th>
	  							<th>Category</th>
	  							<th>Title</th>
	  							<th>Created</th>
	  							<th>Updated</th>
  							</tr>
  						</thead>
  						<tbody>
  							@if($posts)
	  							@foreach($posts as $post)
		  							<tr>
		  								<td>{{$post->id}}</td>
                      <td><img src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400.png'}}" alt="No Image" height="50"></td>
		  								<td>{{$post->user->name}}</td>
		  								<td>{{$post->category ? $post->category->name : 'Unknown'}}</td>
		  								<td>{{$post->title}}</td>
		  								<td>{{$post->created_at->diffForHumans()}}</td>
		  								<td>{{$post->updated_at->diffForHumans()}}</td>
		  							</tr>
	  							@endforeach
  							@endif
  						</tbody>
  					</table>
  				</div>
      	</div>
      </div>
    </div>
@stop

