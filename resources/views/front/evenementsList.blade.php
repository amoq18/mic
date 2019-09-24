@extends('front.layouts.app')

@section('content')
	 <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3>Blog</h3>
                </div>
            </div>
        </section>
        <div class="banner_link">
            <div class="container">
                <div class="abnner_link_inner">
                    <a class="active" href="{{ url('/') }}">Accueil</a>
                    <a href="">Blog</a>
                </div>
            </div>
        </div>

	<!--================Blog Area =================-->
        <section class="main_blog_area">
            <div class="container">
                <div class="row main_blog_inner">
                    <div class="col-md-9">
                        <div class="main_blog_items">
                            <div class="main_blog_item">
            					@foreach ($news as $new)
	                                <div class="main_blog_image">
	                                    <img src="{{ asset('') }}assets/front/img/blog/blog-1.jpg" alt="">
	                                    {{-- <div class="date">
	                                        <h5>27 <span>June</span></h5>
	                                    </div> --}}
	                                </div>
	                                <div class="main_blog_text">
	                                    <a href="#"><h2>{{ $new->titre }}</h2></a>
	                                    <div class="blog_author_area">
	                                        <a href="#"><i class="fa fa-user"></i>By :  <span>Admin</span></a>
	                                        <a href="#"><i class="fa fa-tag"></i><span>finance</span>  /  <span>investment</span></a>
	                                        <a href="#"><i class="fa fa-comments-o"></i>Comments: 5</a>
	                                    </div>
	                                    <p>{{ $new->contenue }}</p>
	                                    <a class="b_readmore" href="{{ route('front.evenement', $new->id) }}">Lire plus</a>
	                                </div>
	                            @endforeach
	                        </div>
	                        <nav aria-label="Page navigation" class="blog_pagination">
	                            <ul class="pagination">
	                                <li class="active"><a href="#">1</a></li>
	                                <li><a href="#">2</a></li>
	                                <li>
	                                    <a href="#" aria-label="Next">
	                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
	                                    </a>
	                                </li>
	                            </ul>
	                        </nav>
                    </div>
                    {{-- <div class="col-md-3">
                        <div class="sidebar_area">
                            <aside class="r_widget search_widget">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Search Keywords">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                            </aside>
                            <aside class="r_widget categories_widget">
                                <div class="r_widget_title">
                                    <h3>Categories</h3>
                                </div>
                                <ul>
                                    <li><a href="#">Legal Consultancy <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                    <li><a href="#">Bonds Investiment <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                    <li><a href="#">Business <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                    <li><a href="#">General Consultancy <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                    <li><a href="#">Sales Analysis <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                    <li><a href="#">Investment <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </aside>
                            <aside class="r_widget recent_widget">
                                <div class="r_widget_title">
                                    <h3>Recent News</h3>
                                </div>
                                <div class="recent_inner">
                                    <div class="recent_item">
                                        <a href="#"><h4>5 tips for control your financial investments.</h4></a>
                                        <h5>08 March 2017</h5>
                                    </div>
                                    <div class="recent_item">
                                        <a href="#"><h4>5 tips for control your financial investments.</h4></a>
                                        <h5>08 March 2017</h5>
                                    </div>
                                    <div class="recent_item">
                                        <a href="#"><h4>5 tips for control your financial investments.</h4></a>
                                        <h5>08 March 2017</h5>
                                    </div>
                                    <div class="recent_item">
                                        <a href="#"><h4>5 tips for control your financial investments.</h4></a>
                                        <h5>08 March 2017</h5>
                                    </div>
                                </div>
                            </aside>
                            <aside class="r_widget recent_widget">
                                <div class="r_widget_title">
                                    <h3>Tages</h3>
                                </div>
                                <ul>
                                    <li><a href="#">Investment</a></li>
                                    <li><a href="#">Mutual Funds</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">investment</a></li>
                                    <li><a href="#">Consulting</a></li>
                                    <li><a href="#">Growth</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
@endsection