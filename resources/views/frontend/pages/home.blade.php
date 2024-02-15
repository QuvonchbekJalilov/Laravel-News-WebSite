<x-layouts.frontend>
    <section class="default-news-area ptb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="single-default-news">
                        <img src="/storage/<?= $one_post->image ?>" alt="image" />
                        <div class="news-content">
                            <ul>
                                <li><i class="icofont-user-suited"></i> by <a href="#">{{$one_post->user->first_name}} {{ $one_post->user->last_name}}</a></li>
                                <li><i class="icofont-calendar"></i> {{ $one_post->created_at->format('F d, Y')}}</li>
                            </ul>
                            <h3><a href="{{ route('single_post', ['post'=> $one_post])}}">{{$one_post->title}}</a></h3>
                        </div>
                        <div class="tags"><a href="{{ route('single_post', ['post'=> $one_post])}}">{{ $one_post->category->name }}</a></div>
                    </div>
                    <div class="row">
                        @foreach ($last_two_posts as $post )
                            
                        
                        <div class="col-lg-6 col-md-6">
                            <div class="single-default-inner-news">
                                <div class="news-image"><img src="/storage/<?= $post->image ?>" alt="image" /></div>
                                <div class="news-content">
                                    <h3>{{ $post->title}}</h3>
                                    <span><i class="icofont-calendar"></i>{{$post->created_at->format('F d, Y')}}</span>
                                </div>
                                <a href="{{ route('single_post', ['post'=> $post ])}}" class="link-overlay"></a>
                                <div class="tags bg-2"><a href="{{ route('single_post', ['post'=> $post ])}}">{{ $post->category->name }}</a></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="small-image-ads text-center">
                        <a href="#"><img src="/frontend/assets/img/1-ads.png" alt="image" /></a>
                    </div>
                    @foreach ($two_posts as $post )
                    <div class="single-default-inner-news">
                        <div class="news-image"><img src="/storage/<?= $post->image ?>" alt="image" /></div>
                        <div class="news-content">
                            <h3>{{ $post->title }}</h3>
                            <span><i class="icofont-calendar"></i> {{$post->created_at->format('F d, Y')}}</span>
                        </div>
                        <a href="{{ route('single_post',['post' => $post ])}}" class="link-overlay"></a>
                        <div class="tags bg-4"><a href="{{ route('single_post',['post' => $post ])}}">{{ $post->category->name }}</a></div>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="default-video-news">
                        <h3 class="title">Video</h3>
                        <div class="single-video-news">
                            <div class="image">
                                <img src="/frontend/assets/img/video-1.jpg" alt="image" /> <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube"><i class="icofont-video-cam"></i></a>
                            </div>
                            <div class="content">
                                <h3><a href="#">Gloost Better They Are With A Featured</a></h3>
                            </div>
                        </div>
                        <div class="single-video-news">
                            <div class="image">
                                <img src="/frontend/assets/img/video-2.jpg" alt="image" /> <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube"><i class="icofont-video-cam"></i></a>
                            </div>
                            <div class="content">
                                <h3><a href="#">Differences between User Experience Interface</a></h3>
                            </div>
                        </div>
                        <div class="single-video-news">
                            <div class="image">
                                <img src="/frontend/assets/img/video-3.jpg" alt="image" /> <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube"><i class="icofont-video-cam"></i></a>
                            </div>
                            <div class="content">
                                <h3><a href="#">A Guide to Avoiding Web Design Mistakes</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="popular-news-area ptb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="popular-section-ads">
                        <a href="#"><img src="/frontend/assets/img/2-ads.png" alt="image" /></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="section-title">
                        <h2>Most Popular</h2>
                    </div>
                    <div class="row">
                        <div class="popular-news-slides owl-carousel owl-theme">
                            @foreach ($popular_posts as $post)
                                
                            
                            <div class="col-lg-12 col-md-12">
                                <div class="single-popular-news">
                                    <div class="news-image"><img src="/storage/<?= $post->image ?>" alt="image" /></div>
                                    <div class="news-content">
                                        <h3>{{ $post->title }}</h3>
                                        <span><i class="icofont-calendar"></i>{{ $post->created_at->format('F d, Y')}}</span>
                                    </div>
                                    <a href="{{ route('single_post', ['post' => $post ])}}" class="link-overlay"></a>
                                    <div class="tags bg-2"><a href="{{ route('single_post', ['post' => $post ])}}">{{ $post->category->name }}</a></div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    

    

    <section class="all-news-area ptb-40">
        <div class="container">
            <div class="row">
                @foreach ($posts_by_category as $categoryName => $posts )
                    
                
                <div class="col-lg-4 col-md-6">
                    <div class="fashion-news">
                        <div class="section-title">
                            <h2>{{$categoryName}}</h2>
                        </div>
                        
                            
                        
                        <div class="single-fashion-news">
                            <img src="/storage/<?= $posts[0]->image ?>" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a href="#">{{ $posts[0]->user->first_name}} {{ $posts[0]->user->last_name}}</a></li>
                                    <li><i class="icofont-calendar"></i>{{ $posts[0]->created_at->format('F d, Y')}}</li>
                                </ul>
                                <h3><a href="{{ route('single_post' , ['post'=> $posts[0]])}}">{{$posts[0]->title}}</a></h3>
                            </div>
                        </div>
                        @foreach ($posts as $post )
                        <div class="fashion-inner-news">
                            <div class="single-fashion-inner-news">
                                <span><i class="icofont-calendar"></i> {{$post->created_at->format('F d, Y')}}</span>
                                <h3><a href="{{ route('single_post', ['post'=> $post])}}">{{ $post->title }}</a></h3>
                            </div>
                            
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>

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

</x-layouts.frontend>