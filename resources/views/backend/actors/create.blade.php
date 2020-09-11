@extends('backendtemplate')
@section('mainsection')
<div class="container">
	<div class="d-sm-flex align-items-center justify-content-center">
		<h1 class="h3 mb-0 text-gray-800">Actor Create Form</h1>

		
	</div>
	<form class="col-md-6 my-4" action="{{route('actors.store')}}" method="post" >
		@csrf
		@error('name')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Actor Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="name">
			</div>
		</div>
		@error('gender')
		    <div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label  class="col-sm-2 col-form-label">Gender</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="gender">
			</div>
		</div>
		
		
		
		
		
		<div class="form-group row">
			
			<input type="submit" class="btn btn-primary" value="Create" name="btnsubmit">
		</div>
	</form>
</div>
@endsection