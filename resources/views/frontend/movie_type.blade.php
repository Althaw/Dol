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
	    				<a href="#"><img src="{{ asset('images/uploads/slider1.jpg')}}" alt="" width="285" height="437"></a>
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
	    					<span class="blue"><a href="#">Sci-fi</a></span>
	    				</div>
	    				<h6><a href="#">Interstellar</a></h6>
	    				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
	    			</div>
	    		</div>
				<div class="movie-item">
	    			<div class="mv-img">
	    				<a href="#"><img src="{{ asset('images/uploads/slider2.jpg')}}" alt="" width="285" height="437"></a>
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
	    					<span class="yell"><a href="#">action</a></span>
	    				</div>
	    				<h6><a href="#">The revenant</a></h6>
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
	    				<a href="#"><img src="{{ asset('')}}images/uploads/slider4.jpg" alt="" width="285" height="437"></a>
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
	    				<a href="#"><img src="{{ asset('')}}images/uploads/slider1.jpg" alt="" width="285" height="437"></a>
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
	    					<span class="blue"><a href="#">Sci-fi</a></span>
	    				</div>
	    				<h6><a href="#">Interstellar</a></h6>
	    				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
	    			</div>
	    		</div>
				<div class="movie-item">
	    			<div class="mv-img">
	    				<a href="#"><img src="{{ asset('')}}images/uploads/slider2.jpg" alt="" width="285" height="437"></a>
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
	    					<span class="yell"><a href="#">action</a></span>
	    				</div>
	    				<h6><a href="#">The revenant</a></h6>
	    				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
	    			</div>
	    		</div>
	    		<div class="movie-item">
	    			<div class="mv-img">
	    				<img src="{{ asset('')}}images/uploads/slider3.jpg" alt="" width="285" height="437">
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
	    				<img src="{{ asset('')}}images/uploads/slider4.jpg" alt="" width="285" height="437">
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
	    				<img src="{{ asset('')}}images/uploads/slider3.jpg" alt="" width="285" height="437">
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
          <h2>{{$genre->title}}</h2>
          <a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
        </div>
        <div class="tabs">
          <ul class="tab-links-2">
            <li><a href="#tab21">#Popular</a></li>
            <li class="active"><a href="#tab22"> #Coming soon</a></li>
            <li><a href="#tab23">  #Top rated  </a></li>
            <li><a href="#tab24"> #Most reviewed</a></li>                        
          </ul>
            <div class="tab-content">
                <div id="tab21" class="tab">
                    <div class="row">
                      <div class="slick-multiItem">
                        @foreach($genre->movies as $movie)
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset($movie->photo)}}" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="{{route('detailpage',$movie->id)}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">{{$movie->title}}</a></h6>
                              <p><i class="ion-android-star"></i><span>{{$movie->rating}}</span> /10</p>
                            </div>
                          </div>
                        </div>
                        @endforeach
                  <div class="slide-it">
                    <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item2.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The revenant</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                  </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item4.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The walk</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div id="tab22" class="tab active">
                   <div class="row">
                      <div class="slick-multiItem">
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Interstellar</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                  <div class="slide-it">
                    <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The revenant</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                  </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item7.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item8.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The walk</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item1.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Interstellar</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                  <div class="slide-it">
                    <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item2.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The revenant</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                  </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item4.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The walk</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Interstellar</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                  <div class="slide-it">
                    <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The revenant</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                  </div>
                      </div>
                    </div>
                </div>
                <div id="tab23" class="tab">
                  <div class="row">
                      <div class="slick-multiItem">
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item1.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Interstellar</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                  <div class="slide-it">
                    <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item2.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The revenant</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                  </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item4.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The walk</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Interstellar</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                  <div class="slide-it">
                    <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The revenant</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                  </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The walk</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                 <div id="tab24" class="tab">
                  <div class="row">
                      <div class="slick-multiItem">
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Interstellar</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                  <div class="slide-it">
                    <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The revenant</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                  </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="{{ asset('')}}images/uploads/mv-item7.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">The walk</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                            </div>
                          </div>
                        </div>
                        <div class="slide-it">
                          <div class="movie-item">
                            <div class="mv-img">
                              <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                            </div>
                            <div class="hvr-inner">
                              <a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                            </div>
                            <div class="title-in">
                              <h6><a href="#">Die hard</a></h6>
                              <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
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
  </div>
</div>
@endsection