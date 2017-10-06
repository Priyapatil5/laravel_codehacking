@extends('layouts.admin')

@section('content')
	<div class="panel panel-primary">
      <div class="panel-heading">Create New Post</div>
      <div class="panel-body">
      	{{Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'class'=>'form-horizontal', 'files'=>true])}}
		    <div class="form-group">
		      {{Form::label('title','Title : ',['class'=>'control-label col-sm-2'])}}
		      <div class="col-sm-8">
		      	{{Form::text('title', null, ['class'=>'form-control', 'placeholder'=>"Enter Title"])}}
		      </div>
		    </div>
		    <div class="form-group">        
		      {{Form::label('category','Category : ',['class'=>'control-label col-sm-2'])}}
		      <div class="col-sm-8">
		      	{{Form::select('category_id', array('' => '-- Choose Category --') , null, ['class'=>'form-control'])}}
		      </div>
		    </div>
		    <div class="form-group">
		      {{Form::label('photo_id','Upload Photo : ',['class'=>'control-label col-sm-2'])}}
		      <div class="col-sm-8">
		      	{{Form::file('photo_id', ['class'=>'form-control'])}}
		      </div>
		    </div>
		    <div class="form-group">
		      {{Form::label('description','Description : ',['class'=>'control-label col-sm-2'])}}
		      <div class="col-sm-8">
		      	{{Form::textarea('body', null, ['class'=>'form-control','rows'=>3])}}
		      </div>
		    </div>
		    <div class="form-group">        
		      <div class="col-sm-offset-2 col-sm-10">
		        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
		      </div>
		    </div>
		  {{ Form::close()}}
		  @include('includes.form_error')
      </div>

@stop
