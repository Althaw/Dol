@extends('backendtemplate')
@section('mainsection')
<div class="container-fluid">
	{{-- page heading --}}
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800 text-center">Movies Detail</h1>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
				<thead>
					<tr class="bg-dark text-light">
						<th>{{$movie->title}}</th>
						<th>Description</th>
				</thead>
				<tbody>
					<td><img src="{{ asset($movie->photo)}}" width="200" height="200"></td>
					<td>
						Genres:@foreach($movie->genres as $genre)
												<p>{{$genre->title}}</p>
												@endforeach
						Stars:@foreach($movie->actors as $actor)
												<p>{{$actor->name}}</p>
												@endforeach
						Review:{{$movie->review}}<br>
					</td>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
