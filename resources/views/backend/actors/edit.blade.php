@extends('backendtemplate')
@section('mainsection')
<div class="container">
	<div class="d-sm-flex align-items-center justify-content-center">
		<h1 class="h3 mb-0 text-gray-800">Actor Edit Form</h1>

		
	</div>
	<form class="col-md-6 my-4" action="{{route('actors.update',$actor->id)}}" >
		@csrf
		@method('PUT')
		@error('name')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		
		<div class="form-group row">
			<label  class="col-sm-2 col-form-label"> Actor Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="name" value="{{$actor->name}}">
			</div>
		</div>
		@error('gender')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label  class="col-sm-2 col-form-label">Gender</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="gender" value="{{$actor->gender}}">
				
			</div>
		</div>
		<div class="form-group row">
			
			<input type="submit" class="btn btn-primary" value="Update" name="btnsubmit">
		</div>
	</form>
</div>
@endsection