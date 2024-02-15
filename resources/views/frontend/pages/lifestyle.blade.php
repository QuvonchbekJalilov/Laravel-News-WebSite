<x-layouts.frontend>
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2></h2>

                <ul>
                    <li><a href="\"><i class="icofont-home"></i> Home</a></li>
                    <li><i class="icofont-rounded-right"></i></li>
                    <li>/</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start All Category News Area -->
    <section class="all-category-news ptb-40 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="section-title">
                        <h2>All News</h2>
                    </div>
                    @foreach ($posts as $post)
                    <div class="single-category-news">
                        <div class="row m-0 align-items-center">
                            <div class="col-lg-5 col-md-6 p-0">
                                <div class="category-news-image">
                                    <a href="{{ route('single_post', ['post'=> $post])}}"><img src="/storage/<?= $post->image ?>" alt="image"></a>
                                    <div class="tags">
                                        <a href="{{ route('single_post', ['post'=> $post])}}">{{$post->category->name}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="category-news-content">
                                    <span><i class="icofont-clock-time"></i>{{$post->created_at->format('F d, Y')}}</span>
                                    <h3><a href="{{ route('single_post', ['post'=> $post])}}">{{$post->title}}</a></h3>
                                    <p>{{ $post->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    {{ $posts->links()}}

                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="section-title">
                        <h2>Stay Connected</h2>
                    </div>

                    <ul class="stay-connected">
                        <li><a href="#"><i class="icofont-facebook"></i><b>10.2K</b> <span>Fans</span></a></li>
                        <li><a href="#"><i class="icofont-twitter"></i><b>14.2K</b> <span>Followers</span></a></li>
                        <li><a href="#"><i class="icofont-linkedin"></i><b>11.2K</b> <span>Fans</span></a></li>
                        <li><a href="#"><i class="icofont-rss"></i><b>15.2K</b> <span>Subscriber</span></a></li>
                    </ul>

                    <div class="stay-connected-ads">
                        <a href="#"><img src="/frontend/assets/img/3-ads.png" alt="image"></a>
                    </div>

                    <div class="featured-news">
                        <div class="section-title">
                            <h2>Latest News</h2>
                        </div>
                        @foreach ($latestPosts as $latest )
                        <div class="single-featured-news">
                            <img src="/storage/<?= $latest->image ?>" alt="image">

                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="#">{{ $latest->user->first_name}} {{$latest->user->last_name}}</a></li>
                                    <li><i class="icofont-calendar"></i>{{ ($latest->created_at)->format('F d, Y')}}</li>
                                </ul>
                                <h3><a href="{{ route('single_post', ['post'=> $latest])}}">As well as stopping goals, Cristiane Endler is opening doors</a></h3>
                            </div>

                            <div class="tags">
                                <a href="{{ route('single_post', ['post'=> $latest])}}">{{ $latest->category->name}}</a>
                            </div>
                        </div>
                        @endforeach
                       

                    
                    <div class="hot-news-ads">
                        <a href="#"><img src="/frontend/assets/img/4-ads.png" alt="image"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End All Category News Area -->

    <!-- Start More News Area -->
    <section class="more-news-area">
        <div class="container">
            <div class="more-news-inner">
                <div class="section-title">
                    <h2>More News</h2>
                </div>

                <div class="row">
                    <div class="more-news-slides owl-carousel owl-theme">
                        @foreach ($allPosts as $post )
                        <div class="col-lg-12 col-md-12">
                            <div class="single-more-news">
                                <a href="{{ route('single_post', ['post'=> $post])}}"><img src="/storage/<?= $post->image ?>" alt="image" style="width:200 height:200" ></a>

                                <div class="news-content">
                                    <ul>
                                        <li><i class="icofont-user-suited"></i> by <a href="{{ route('single_post', ['post'=> $post])}}">{{ $post->user->first_name}} {{$post->user->last_name}}</a></li>
                                        <li><i class="icofont-calendar"></i> {{ ($post->created_at)->format('F d, Y')}}</li>
                                    </ul>
                                    <h3><a href="{{ route('single_post', ['post'=> $post])}}">{{$post->title}}</a></h3>
                                </div>

                                <div class="tags bg-2">
                                    <a href="{{ route('single_post', ['post'=> $post])}}">{{$post->category->name}}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End More News Area -->
</x-layouts.frontend>