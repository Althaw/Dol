@extends('frontend')
@section('maincontent')
<div class="slider movie-items">
	<div class="container">
		<div class="row">
			<div class="social-link">
				<p>Follow us: </p>
				<a href="#"><i class="ion-social-facebook"></i></a>
				<a href="#"><i class="ion-social-twitter"></i></a>
				<a href="#"><i class="ion-social-googleplus"></i></a>
				<a href="#"><i class="ion-social-youtube"></i></a>
			</div>
			<div  class="slick-multiItemSlider">
				@foreach($movies as $movie)
				<div class="movie-item">
					<div class="mv-img">
						<a href="#"><img src="{{ asset($movie->photo)}}" alt="" width="285" height="437"></a>
					</div>
					<div class="hvr-inner">
						<a  href="{{route('detailpage',$movie->id)}}"> View more <i class="ion-android-arrow-dropright"></i> </a>
					</div>
					<div class="title-in">
						<div class="cate">
							{{-- <span class="blue"><a href="#">Sci-fi</a></span> --}}
						</div>
						<h6><a href="#">{{$movie->title}}</a></h6>
						<p><i class="ion-android-star"></i><span>{{$movie->rating}}</span> /10</p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
<div class="movie-items mt-6">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-8">
				<div class="title-hd">
					<h2>Movie</h2>
					<a href="{{route('moviepage')}}" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="tabs">
					<ul class="tab-links-2">
						<li class="active"><a href="#tab21">#Popular</a></li>
						<li><a href="#tab22"> #Top rated</a></li>
						{{-- <li><a href="#tab23">  #Review </a></li> --}}
						{{-- <li><a href="#tab24"> #Most reviewed</a></li>  --}}                       
					</ul>
					<div class="tab-content">
						<div id="tab21" class="tab active">
							<div class="row">
								<div class="slick-multiItem">
									@foreach($movies as $movie)
									@if($movie->type=='popular')
									<div class="slide-it">
										<div class="movie-item">
											{{-- <div class="mv-img"> --}}
												<img src="{{ asset($movie->photo)}}" width="200" height="200">
											{{--  </div> --}}
											<div class="hvr-inner">
												<a  href="{{route('detailpage',$movie->id)}}"> View more <i class="ion-android-arrow-dropright"></i> </a>
											</div>
											<div class="title-in">
												<h6><a href="#">{{$movie->title}}</a></h6>
												<p><i class="ion-android-star"></i><span>{{$movie->rating}}</span> /10</p>
											</div>
										</div>
									</div>
									@endif
									@endforeach
								</div>
							</div>
						</div>
						<div id="tab22" class="tab">
							<div class="row">
								<div class="slick-multiItem">
									@foreach($movies as $movie)
									@if($movie->type=='top')
									<div class="slide-it">
										<div class="movie-item">
											{{-- <div class="mv-img"> --}}
												<img src="{{ asset($movie->photo)}}" width="200" height="200">
											{{--  </div> --}}
											<div class="hvr-inner">
												<a  href="{{route('detailpage',$movie->id)}}"> View more <i class="ion-android-arrow-dropright"></i> </a>
											</div>
											<div class="title-in">
												<h6><a href="#">{{$movie->title}}</a></h6>
												<p><i class="ion-android-star"></i><span>{{$movie->rating}}</span> /10</p>
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
			<div class="col-md-4">
				<img src="{{asset('images/uploads/ads1.png')}}">
			</div>
		</div>
	</div>
</div>
@endsection