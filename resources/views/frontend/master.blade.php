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
				<div class="movie-item">
					<div class="mv-img">
						<a href="#"><img src="{{ asset('images/sputnik.jpg')}}" alt="" width="285" height="437"></a>
					</div>
					<div class="title-in">
						<div class="cate">
							<span class="blue"><a href="#">Sci-fi</a></span>
						</div>
						<h6><a href="#">Sputnik</a></h6>
						<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					</div>
				</div>
				<div class="movie-item">
					<div class="mv-img">
						<a href="#"><img src="{{ asset('images/mulan.jpg')}}" alt="" width="285" height="437"></a>
					</div>
					<div class="title-in">
						<div class="cate">
							<span class="yell"><a href="#">action</a></span>
						</div>
						<h6><a href="#">Mulan</a></h6>
						<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					</div>
				</div>
				<div class="movie-item">
					<div class="mv-img">
						<a href="#"><img src="{{ asset('images/uploads/slider3.jpg')}}" alt="" width="285" height="437"></a>
					</div>
					<div class="title-in">
						<div class="cate">
							<span class="green"><a href="#">comedy</a></span>
						</div>
						<h6><a href="#">Die hard</a></h6>
						<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					</div>
				</div>
				<div class="movie-item">
					<div class="mv-img">
						<a href="#"><img src="{{ asset('images/uploads/slider1.jpg')}}" alt="" width="285" height="437"></a>
					</div>
					<div class="title-in">
						<div class="cate">
							<span class="blue"><a href="#">Sci-fi</a></span> <span class="orange"><a href="#">advanture</a></span>
						</div>
						<h6><a href="#">Sputnik</a></h6>
						<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					</div>
				</div>
				<div class="movie-item">
					<div class="mv-img">
						<a href="#"><img src="{{ asset('images/cp.jpg')}}" alt="" width="285" height="437"></a>
					</div>
					<div class="title-in">
						<div class="cate">
							<span class="blue"><a href="#">Sci-fi</a></span>
						</div>
						<h6><a href="#">Captin Marvel</a></h6>
						<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					</div>
				</div>
				<div class="movie-item">
					<div class="mv-img">
						<a href="#"><img src="{{ asset('images/mulan.jpg')}}" alt="" width="285" height="437"></a>
					</div>
					<div class="title-in">
						<div class="cate">
							<span class="yell"><a href="#">action</a></span>
						</div>
						<h6><a href="#">Mulan</a></h6>
						<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					</div>
				</div>
				<div class="movie-item">
					<div class="mv-img">
						<img src="{{ asset('images/uploads/slider2.jpg')}}" alt="" width="285" height="437">
					</div>
					<div class="title-in">
						<div class="cate">
							<span class="green"><a href="#">comedy</a></span>
						</div>
						<h6><a href="#">Die hard</a></h6>
						<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					</div>
				</div>
				<div class="movie-item">
					<div class="mv-img">
						<img src="{{ asset('images/uploads/slider4.jpg')}}" alt="" width="285" height="437">
					</div>
					<div class="title-in">
						<div class="cate">
							<span class="blue"><a href="#">Sci-fi</a></span> <span class="orange"><a href="#">advanture</a></span>
						</div>
						<h6><a href="#">The walk</a></h6>
						<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					</div>
				</div>
				<div class="movie-item">
					<div class="mv-img">
						<img src="{{ asset('images/uploads/slider1.jpg')}}" alt="" width="285" height="437">
					</div>
					<div class="title-in">
						<div class="cate">
							<span class="green"><a href="#">comedy</a></span>
						</div>
						<h6><a href="#">Die hard</a></h6>
						<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					</div>
				</div>
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
            <li><a href="#tab22"> #Coming soon</a></li>
            <li><a href="#tab23">  #Top rated  </a></li>
            <li><a href="#tab24"> #Most reviewed</a></li>                        
          </ul>
          <div class="tab-content">
            <div id="tab21" class="tab active">
              <div class="row">
                <div class="slick-multiItem">
                  @foreach($movies as $movie)
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
{{-- <div class="latestnew">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-8">
				<div class="ads">
					<img src="{{ asset('images/uploads/ads2.png')}}" alt="" width="728" height="106">
				</div>
				<div class="title-hd">
					<h2>Latest news</h2>
				</div>
				<div class="tabs">
					<ul class="tab-links-3">
						<li class="active"><a href="#tab31">#Movies </a></li>
						<li><a href="#tab32"> #TV Shows </a></li>              
						<li><a href="#tab33">  # Celebs</a></li>                       
					</ul>
				    <div class="tab-content">
				        <div id="tab31" class="tab active">
				            <div class="row">
				            	<div class="blog-item-style-1">
				            		<img src="images/uploads/blog-it1.jpg" alt="" width="170" height="250">
				            		<div class="blog-it-infor">
				            			<h3><a href="#">Brie Larson to play first female white house candidate Victoria Woodull in Amazon film</a></h3>
				            			<span class="time">13 hours ago</span>
				            			<p>Exclusive: <span>Amazon Studios </span>has acquired Victoria Woodhull, with Oscar winning Room star <span>Brie Larson</span> polsed to produce, and play the first female candidate for the presidency of the United States. Amazon bought it in a pitch package deal. <span> Ben Kopit</span>, who wrote the Warner Bros film <span>Libertine</span> that has...</p>
				            		</div>
				            	</div>
				            </div>
				        </div>
				        <div id="tab32" class="tab">
				           <div class="row">
				            	<div class="blog-item-style-1">
				            		<img src="images/uploads/blog-it2.jpg" alt="" width="170" height="250">
				            		<div class="blog-it-infor">
				            			<h3><a href="#">Tab 2</a></h3>
				            			<span class="time">13 hours ago</span>
				            			<p>Exclusive: <span>Amazon Studios </span>has acquired Victoria Woodhull, with Oscar winning Room star <span>Brie Larson</span> polsed to produce, and play the first female candidate for the presidency of the United States. Amazon bought it in a pitch package deal. <span> Ben Kopit</span>, who wrote the Warner Bros film <span>Libertine</span> that has...</p>
				            		</div>
				            	</div>
				            </div>
				        </div>
				        <div id="tab33" class="tab">
				        	<div class="row">
				            	<div class="blog-item-style-1">
				            		<img src="images/uploads/blog-it1.jpg" alt="" width="170" height="250">
				            		<div class="blog-it-infor">
				            			<h3><a href="#">Tab 3</a></h3>
				            			<span class="time">13 hours ago</span>
				            			<p>Exclusive: <span>Amazon Studios </span>has acquired Victoria Woodhull, with Oscar winning Room star <span>Brie Larson</span> polsed to produce, and play the first female candidate for the presidency of the United States. Amazon bought it in a pitch package deal. <span> Ben Kopit</span>, who wrote the Warner Bros film <span>Libertine</span> that has...</p>
				            		</div>
				            	</div>
				            </div>
			       	 	</div>
				    </div>
				</div>
				<div class="morenew">
					<div class="title-hd">
						<h3>More news on Blockbuster</h3>
						<a href="#" class="viewall">See all Movies news<i class="ion-ios-arrow-right"></i></a>
					</div>
					<div class="more-items">
						<div class="left">
							<div class="more-it">
								<h6><a href="#">Michael Shannon Frontrunner to play Cable in “Deadpool 2”</a></h6>
								<span class="time">13 hours ago</span>
							</div>
							<div class="more-it">
								<h6><a href="#">French cannibal horror “Raw” inspires L.A. theater to hand out “Barf Bags”</a></h6>
								
								<span class="time">13 hours ago</span>
							</div>
						</div>
						<div class="right">
							<div class="more-it">
								<h6><a href="#">Laura Dern in talks to join Justin Kelly’s biopic “JT Leroy”</a></h6>
								<span class="time">13 hours ago</span>
							</div>
							<div class="more-it">
								<h6><a href="#">China punishes more than 300 cinemas for box office cheating</a></h6>
								<span class="time">13 hours ago</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="sb-facebook sb-it">
						<h4 class="sb-title">Find us on Facebook</h4>
						<iframe src="#" data-src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftemplatespoint.net%2F%3Ffref%3Dts&tabs=timeline&width=300&height=315px&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="300" height="315" style="border:none;overflow:hidden" ></iframe>
					</div>
					<div class="sb-twitter sb-it">
						<h4 class="sb-title">Tweet to us</h4>
						<div class="slick-tw">
							<div class="tweet item" id=""><!-- Put your twiter id here -->
							</div>
							<div class="tweet item" id=""><!-- Put your 2nd twiter account id here -->
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>
</div> --}}
{{-- <div class="movie-items">
	<div class="row">
		<div class="col-md-12">
      	<img src="{{asset('images/uploads/ads1.png')}}">
        </div>
	</div>
</div> --}}
@endsection