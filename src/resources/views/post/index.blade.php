@extends('layouts.main')
@section('content')
    <?php
    /**
     * @var \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $posts
     * @var \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $randomPost
     */
    ?>
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{'storage/' . $post->preview_image}}" alt="blog post">
                        </div>
                        <p class="blog-post-category">{{ $post->category ? $post->category->title : 'No Category' }}</p>
                        <a href="{{route('post.show', $post->id)}}" class="blog-post-permalink">
                            <h6 class="blog-post-title">{{$post->title}}</h6>
                        </a>
                    </div>
                    @endforeach
                </div>
            </section>
            <div class="row">
                <div class="col-md-8">
                    <section>
                        <div class="row blog-post-row">
                            @foreach($randomPosts as $randomPost)
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{'storage/' . $randomPost->preview_image }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">{{ $randomPost->category ? $randomPost->category->title : 'No Category' }}</p>
                                <a href="{{route('post.show', $randomPost->id)}}" class="blog-post-permalink">
                                    <h6 class="blog-post-title">{{$randomPost->title}}
                                        Partner</h6>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        <div class="row blog-post-row">
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{asset('assets/images/blog_6.jpg')}}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Front becomes an official Instagram Marketing
                                        Partner</h6>
                                </a>
                            </div>
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{asset('assets/images/blog_7.jpg')}}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Front becomes an official Instagram Marketing
                                        Partner</h6>
                                </a>
                            </div>
                        </div>
                        <div class="row blog-post-row">
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{asset('assets/images/blog_8.jpg')}}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Front becomes an official Instagram Marketing
                                        Partner</h6>
                                </a>
                            </div>
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{asset('assets/images/blog_9.jpg')}}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Front becomes an official Instagram Marketing
                                        Partner</h6>
                                </a>
                            </div>
                        </div>
                        <div class="row blog-post-row">
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{asset('assets/images/blog_10.jpg')}}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Front becomes an official Instagram Marketing
                                        Partner</h6>
                                </a>
                            </div>
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{asset('assets/images/blog_11.jpg')}}" alt="blog post">
                                </div>
                                <p class="blog-post-category">Blog post</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">Front becomes an official Instagram Marketing
                                        Partner</h6>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-4 sidebar" data-aos="fade-left">
                    <div class="widget widget-post-list">
                        <h5 class="widget-title">Popular Posts</h5>
                        <ul class="post-list">
                            @foreach($likedPosts as $popularPost)
                            <li class="post">
                                <a href="{{route('post.show', $popularPost->id)}}" class="post-permalink media">
                                    <img src="{{'storage/' . $popularPost->preview_image}}" alt="blog post">
                                    <div class="media-body">
                                        <h6 class="post-title">{{$popularPost->title}}</h6>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget-title">Categories</h5>
                        <img src="{{asset('assets/images/blog_widget_categories.jpg')}}" alt="categories" class="w-100">
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
