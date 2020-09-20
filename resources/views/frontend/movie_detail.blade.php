@extends('frontend')
@section('maincontent')
<div class="hero mv-single-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- <h1> movie listing - list</h1>
				<ul class="breadcumb">
					<li class="active"><a href="#">Home</a></li>
					<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
				</ul> -->
			</div>
		</div>
	</div>
</div>
<div class="page-single movie-single movie_single">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="movie-img sticky-sb">
					<img src="{{ asset($movie->photo)}}" width="150" height="100">
					<div class="movie-btn">	
						<div class="btn-transform transform-vertical red">
							<div><a href="#" class="item item-1 redbtn"> <i class="ion-play"></i> {{$movie->title}}</a></div>
							<div><a href="{{route('commingpage',$movie->id)}}"><i class="ion-play"></i>Watch Trailer</a></div>
						</div>
						@role('User')
						<div class="btn-transform transform-vertical">
							<div><a href="#" class="item item-1 yellowbtn"> <i class="ion-card"></i>Download</a></div>
							<div><a href="{{route('commingpage',$movie->id)}}" class="item item-2 yellowbtn"><i class="ion-card"></i></a></div>
						</div>
						@else
						<div class="btn-transform transform-vertical">
							<div><a href="#" class="item item-1 yellowbtn"> <i class="ion-card"></i>Login to Download</a></div>
							<div><a href="#" class="item item-2 yellowbtn"><i class="ion-card"></i></a></div>
						</div>
						@endrole
					</div>
				</div>
			</div>
			<hr><hr>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="movie-single-ct main-content">
					<h1 class="bd-hd">{{-- {{$movie->name}}<span>{{$movie->year}}</span> --}}</h1>
					<div class="social-btn">
						<a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
						<div class="hover-bnt">
							<a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
							<div class="hvr-item">
								<a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
								<a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
								<a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
								<a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
							</div>
						</div>		
					</div>
					<div class="movie-rate">
						<div class="rate">
							<i class="ion-android-star"></i>
							<p><span>{{$movie->rating}}</span> /10<br>
								{{-- <span class="rv">56 Reviews</span> --}}
							</p>
						</div>
						<div class="rate-star">
							<p>Rate This Movie:  </p>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star"></i>
							<i class="ion-ios-star-outline"></i>
						</div>
					</div>
					<div class="movie-tabs">
						<div class="tabs">
							<ul class="tab-links tabs-mv">
								<li class="active"><a href="#overview">Overview</a></li>
								<li ><a href="#reviews"> Reviews</a></li>
								{{-- <li><a href="#media"> Media</a></li> --}} 
								<li><a href="#moviesrelated"> Related Movies</a></li>
							</ul>
							<div class="tab-content">
								<div id="overview" class="tab active">
									<div class="row">
										<div class="col-md-8 col-sm-12 col-xs-12 text-white">
											<h4></h4>
											<!-- movie cast -->
											<div class="title-hd-sm">
												<h4>Comment</h4>
											</div>
											@foreach($comments as $comment)
											@if($comment->movie_id == $movie->id)
											<p>:{{$comment->comment}}</p><hr>
											{{-- <a href="#" class="parent-btn">{{$comment->comment}}</a><hr> --}}
											@endif
											@endforeach
											<hr>
											@role('User')
											<form method="post" action="{{route('comments.store')}}">
												@csrf
												<div class="container">
													<div class="row">
														<div class="col-md-4">
															<textarea class="form-control" id="notes" placeholder="Add a Comment!" name="comment"  style="border: 2px solid blue;"></textarea>
															@error('comment')
															<div class="alert alert-danger">{{$message}}</div>
															@enderror
														</div>
														<div class="col-md-4 bg-danger">
															<input type="hidden" name="movie" value="{{$movie->id}}"><br>
															<input type="submit" class="btn btn-danger" value="Send" name="btnsubmit" style="border: 2px solid blue;">
														</div>
													</div>
												</div>
											</form>
											</div>
										<div class="col-md-4 col-xs-12 col-sm-12">
											<div class="sb-it">
												<h6>Director: </h6>
												<p>{{$movie->director}}</p>
											</div>
											<div class="sb-it">
												<h6>Stars: </h6>
												@foreach($movie->actors as $actor)
												<p><a href="{{ route('celepage',$actor->id)}}">{{$actor->name}}</a></p>
												@endforeach
											</div>
											<div class="sb-it">
												<h6>Genres:</h6>
												@foreach($movie->genres as $genre)
												<p><a href="{{ route('typepage',$genre->id)}}">{{$genre->title}}</a></p>
												@endforeach
											</div>
											<div class="sb-it">
												<h6>Release Year:</h6>
												<p>{{$movie->release_year}}</p>
											</div>
											<div class="sb-it">
												<h6>Release Country:</h6>
												<p>{{$movie->release_country}}</p>
											</div>
											<div class="sb-it">
												<h6>Run Time:</h6>
												<p>{{$movie->run_time}}</p>
											</div>
											<div class="sb-it">
												<h6>Good Point!</h6>
												<p class="tags">
													<span class="time"><a href="#">{{$movie->good_point}}</a></span>
												</p>
											</div>
											<div class="ads">
												<img src="{{ asset('images/uploads/ads1.png')}}" alt="">
											</div>
										</div>
											@else
										</div>
										<div class="col-md-4 col-xs-12 col-sm-12">
											<div class="sb-it">
												<h6>Director: </h6>
												<p>{{$movie->director}}</p>
											</div>
											<div class="sb-it">
												<h6>Stars: </h6>
												@foreach($movie->actors as $actor)
												<p><a href="{{ route('celepage',$actor->id)}}">{{$actor->name}}</a></p>
												@endforeach
											</div>
											<div class="sb-it">
												<h6>Genres:</h6>
												@foreach($movie->genres as $genre)
												<p><a href="{{ route('typepage',$genre->id)}}">{{$genre->title}}</a></p>
												@endforeach
											</div>
											<div class="sb-it">
												<h6>Release Year:</h6>
												<p>{{$movie->release_year}}</p>
											</div>
											<div class="sb-it">
												<h6>Release Country:</h6>
												<p>{{$movie->release_country}}</p>
											</div>
											<div class="sb-it">
												<h6>Run Time:</h6>
												<p>{{$movie->run_time}}</p>
											</div>
											<div class="sb-it">
												<h6>Good Point!</h6>
												<p class="tags">
													<span class="time"><a href="#">{{$movie->good_point}}</a></span>
												</p>
											</div>
											<div class="ads">
												<img src="{{ asset('images/uploads/ads1.png')}}" alt="">
											</div>
										</div>
										@endrole
									</div>
								</div>
								<div id="reviews" class="tab">
									<div class="row">
										<div class="col-md-12">
											<p>{{$movie->review}}</p>
										</div>
									</div>
								</div>
								<div id="moviesrelated" class="tab">
									<div class="row">
										@foreach($movies as $video)
										@if($video->id != $movie->id)
										<div class="col-md-3">
											<div class="slide-it">
												<div class="movie-item">
													<div class="mv-img">
														<img src="{{ asset($video->photo)}}" alt="" width="150" height="100">
													</div>
													<div class="hvr-inner text-danger">
														<a  href="{{route('detailpage',$video->id)}}"> View more <i class="ion-android-arrow-dropright"></i> </a>
													</div>
													{{-- <div class="title-in">
														<h6><a href="#">{{$movie->title}}</a></h6>
														<p><i class="ion-android-star"></i><span>{{$movie->rating}}</span> /10</p>
													</div> --}}
												</div>
											</div>
										</div>
										@endif
										@endforeach
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
