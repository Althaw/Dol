@extends('backendtemplate')
@section('mainsection')
<div class="container">
	{{-- page heading --}}
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Movies Create From</h1>
	</div>
</div>
<form action="{{route('movies.update',$movie->id)}}" enctype="multipart/form-data">
	@csrf
  @method('PUT')
	  <div class="form-row">
    <div class="col-md-5 mb-3 ml-2">
      <label for="validationDefault01">Title</label>
      <input type="text" class="form-control" id="validationDefault01" name="title" value="{{$movie->title}}">
      @error('title')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefault02">Photo</label>
      <input type="file" class="form-control" id="validationDefault02" name="photo" value="{{$movie->photo}}">
      @error('photo')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-5 mb-3 ml-2">
      <label for="validationDefault01">Link</label>
      <input type="text" class="form-control" id="validationDefault01" name="link" value="{{$movie->link}}">
      @error('link')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefault02">Stars</label>
      <input type="text" class="form-control" id="validationDefault02" name="star" value="{{$movie->stars}}">
      @error('star')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-5 mb-3 ml-2">
      <label for="validationDefault01">Good Point</label>
      {{$movie->good_point}}
      <textarea class="form-control" name="point"></textarea>
      @error('point')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefault02">Quality</label>
      <input type="text" class="form-control" id="validationDefault02" name="quality" value="{{$movie->quality}}">
      @error('quality')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-5 mb-3 ml-2">
      <label for="validationDefault01">Size</label>
      <input type="text" class="form-control" id="validationDefault01" name="size" value="{{$movie->size}}">
      @error('size')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
     
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefault02">Review</label>
      {{$movie->review}}
      <textarea class="form-control" name="review"></textarea>
       @error('review')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-5 mb-3 ml-2">
      <label for="validationDefault01">Release Year</label>
      <input type="number" class="form-control" id="validationDefault01" name="year" value="{{$movie->release_year}}">
      @error('year')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefault02">Run Time</label>
      <input type="text" class="form-control" id="validationDefault02" name="time" value="{{$movie->run_time}}">
      @error('time')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-5 mb-3 ml-2">
      <label for="validationDefault01">Release Country</label>
      <input type="text" class="form-control" id="validationDefault01" name="country" value="{{$movie->release_country}}">
      @error('country')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefault02">Rating</label>
      <input type="number" class="form-control" id="validationDefault02" name="rating" value="{{$movie->rating}}">
      @error('rating')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
  </div>
		<div class="col-lg-6">
			<input type="submit" class="btn btn-primary" value="Create" name="btn_submit">
		</div>
</form>
@endsection


