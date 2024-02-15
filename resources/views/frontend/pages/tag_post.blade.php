<x-layouts.frontend>
     <!-- Start News Details Area -->
     <section class="news-details-area pb-40">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="\"><i class="icofont-home"></i> Home</a></li>
                    <li><i class="icofont-rounded-right"></i></li>
                    <li><a href="#"></a></li>
                    <li><i class="icofont-rounded-right"></i></li>
                    <li>Style</li>
                </ul>
                
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="news-details">
                            @foreach ($tags_post as $post )
                            <div class="article-content">
                                <ul class="entry-meta">
                                    <li><i class="icofont-user"></i> <a href="#">{{$post->user->first_name}}</a></li>
                                    <li><i class="icofont-eye-alt"></i> 1040</li>
                                    <li><i class="icofont-calendar"></i>{{$post->created_at->format('F d, Y')}}</li>
                                </ul>

                                <h3 class="mb-0">{{ $post->title }}</h3>
                            </div>

                            <div >
                                <img src="/storage/<?= $post->image ?>" alt="image" style="width:300 height:300">
                            </div>

                            <div class="article-content">
                                <p>{{ $post->description}}</p>

                                
                                <ul class="category">
                                    <li><span>Tags:</span></li>
                                    @foreach ($post->tags as $tag)
                                    <li><a href="#">{{$tag->name}}</a></li>
                                    @endforeach
                                    
                                    
                                </ul>
                            </div>
                            @endforeach
                        </div><br>
                        {{ $tags_post->links()}}

                        

                        
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area" id="secondary">
                            <section class="widget widget_search">
                                <form class="search-form">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search here...">
                                    </label>
                                    <input type="submit" class="search-submit" value="Search">
                                </form>
                            </section>

                            <section class="widget widget_recent_entries">
                                <h3 class="widget-title">Recent Posts</h3>
                                <ul>
                                    @foreach ($latestPosts as $latest )
                                    <li><a href="{{ route('single_post', ['post' => $latest->id ])}}">{{ $latest->title }}</a></li>
                                    @endforeach
                                </ul>
                            </section>

                           

                            

                            <section class="widget widget_categories">
                                <h3 class="widget-title">Categories</h3>

                                <ul>
                                    @foreach ($categories as $category )
                                    <li><a href="{{ route('category', ['category' => $category])}}">{{ $category->name }}</a></li>
                                    @endforeach
                                    
                                    
                                </ul>
                            </section>

                            <section class="widget widget_tag_cloud">
                                <h3 class="widget-title">Tags</h3>

                                <div class="tagcloud">
                                    @foreach ($tags as $tag )
                                        <a href="{{ route('tag', ['tag' => $tag])}}">{{ $tag->name }} <span class="tag-link-count">{{ $tag->posts()->count()}}</span></a>
                                    @endforeach
                                </div>
                            </section>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- End News Details Area -->

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