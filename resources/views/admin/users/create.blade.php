@extends('layouts.admin')

@section('content')
	<div class="panel panel-primary">
      <div class="panel-heading">Create User</div>
      <div class="panel-body">
      	{{Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'class'=>'form-horizontal', 'files'=>true])}}
		    <div class="form-group">
		      {{Form::label('name','Name : ',['class'=>'control-label col-sm-2'])}}
		      <div class="col-sm-8">
		      	{{Form::text('name', null, ['class'=>'form-control', 'placeholder'=>"Enter Name"])}}
		      </div>
		    </div>
		    <div class="form-group">
		      {{Form::label('email','Email : ',['class'=>'control-label col-sm-2'])}}
		      <div class="col-sm-8">
		      	{{Form::text('email', null, ['class'=>'form-control', 'placeholder'=>"Enter Email"])}}
		      </div>
		    </div>
		    <div class="form-group">        
		      {{Form::label('role','Role : ',['class'=>'control-label col-sm-2'])}}
		      <div class="col-sm-8">
		      	{{Form::select('role_id', [''=>'--Choose Role--'] + $roles, null, ['class'=>'form-control'])}}
		      </div>
		    </div>
		    <div class="form-group">        
		      {{Form::label('status','Status : ',['class'=>'control-label col-sm-2'])}}
		      <div class="col-sm-8">
		      	{{Form::select('is_active', array(1 => 'Active', 0 => 'Not Active') , 0, ['class'=>'form-control'])}}
		      </div>
		    </div>
		    <div class="form-group">
		      {{Form::label('password','Password : ',['class'=>'control-label col-sm-2'])}}
		      <div class="col-sm-8">
		      	{{Form::password('password', ['class'=>'form-control'])}}
		      </div>
		    </div>
		    <div class="form-group">
		      {{Form::label('photo_id','Upload Photo : ',['class'=>'control-label col-sm-2'])}}
		      <div class="col-sm-8">
		      	{{Form::file('photo_id', ['class'=>'form-control'])}}
		      </div>
		    </div>
		    <div class="form-group">        
		      <div class="col-sm-offset-2 col-sm-10">
		        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
		      </div>
		    </div>
		  </form>


		  @include('includes.form_error')

      </div>
    </div>


@stop

@section('footer')

@stop