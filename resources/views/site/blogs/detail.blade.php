@extends('site.layouts.master')
@section('title')
    {{ $blog_title }}
@endsection
@section('description')
    {{ strip_tags($blog->intro) }}
@endsection
@section('image')
    {{ $blog->image ? $blog->image->path : 'https://placehold.co/600x400' }}
@endsection

@section('css')
    <link rel='stylesheet' id='mona-template-blog-detail-css' href='/site/css/blog-detail.css' type='text/css' media='all' />
    <style>
        .text-limit-3-line {
            line-height: 1.5;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@endsection

@section('content')
    <main class="main">
        <section class="hero hero-pri">
            <div class="hero-bg"></div>
            <div class="hero-position">
                <div class="container">
                    <div class="hero-info flex">
                        <div class="breadcrumb">
                            <div class="container" data-aos="fade-in">
                                <div class="breadcrumb-wrap">
                                    <ul class="breadcrumb-list">
                                        <li class="breadcrumb-item ">
                                            <a href="{{route('front.home-page')}}" target="_self">
                                                Trang chủ </a>
                                        </li>
                                        <li class="breadcrumb-item ">
                                            <a href="javascript:void(0)" target="_self">
                                                Bài viết </a>
                                        </li>
                                        <li class="breadcrumb-item ">
                                            <a href="{{route('front.list-blog', $category->slug)}}" target="_self">
                                                {{ $cate_title }} </a>
                                        </li>
                                        <li class="breadcrumb-item is-current">
                                            <span>{{ $blog_title }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="hero-content flex flex-16" data-aos="fade-up">
                            <h1 class="title-40 f-tt t-center">{{ $blog_title }}</h1>
                            <div class="article-cate">
                                <div class="article-cate-box">
                                    <img src="/site/images/icon-user.svg" alt="" title=""
                                        loading="lazy">
                                    <p class="text-14 fw-sb">By admin</p>
                                </div>
                                <div class="article-cate-box">
                                    <img src="/site/images/icon-calendar.svg" alt="" title=""
                                        loading="lazy">
                                    <p class="text-14 fw-sb">{{ $blog->created_at->format('d/m/Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-action">
                <div class="img">
                    <img src="/site/images/icon-arrow (1).svg" alt="" title="" loading="lazy" style="width: 3.6rem; height: 3.6rem; object-fit: contain; padding: 0.8rem; border-radius: 50%; background-color: #fff;">
                </div>
            </div>
        </section>
        <section class="blog-detail">
            <div class="container" data-aos="fade-up">
                <div class="blog-detail-content flex flex-64">
                    <div class="mona-content">
                        {!! $blog->body !!}
                    </div>
                    <a class="btn"
                        href="https://www.facebook.com/sharer/sharer.php?u={{route('front.detail-blog', $blog->slug)}}"
                        target="_blank">
                        <span>Chia sẻ bài viết</span>
                        <img src="/site/images/icon-share.svg" alt="" title=""
                            loading="lazy">
                    </a>
                </div>
            </div>
        </section>
        <section class="m-blog">
            <div class="container" data-aos="fade-up">
                <div class="m-blog-wrap flex flex-40">
                    <h2 class="title-40 f-tt t-center cl-pri">Bài viết liên quan</h2>
                    <div class="js-blog">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach ($other_blogs as $item)
                                <div class="swiper-slide">
                                    <div class="article-box flex flex-16">
                                        <div class="article-date">
                                            <p class="text-20 f-tt cl-white">{{ $item->created_at->format('d') }}</p>
                                            <p class="text-14 fw-sb cl-white">Th{{ $item->created_at->format('m') }}</p>
                                        </div>
                                        <div class="article-img">
                                            <a class="img"
                                                href="{{route('front.detail-blog', $item->slug)}}">
                                                <img width="800" height="533"
                                                    src="{{$item->image ? $item->image->path : 'https://placehold.co/800x533'}}"
                                                    class="attachment-full size-full wp-post-image"
                                                    alt="{{$item->name}}"
                                                    title="{{$item->name}}"
                                                    decoding="async"
                                                    srcset="{{$item->image ? $item->image->path : 'https://placehold.co/800x533'}} 800w, {{$item->image ? $item->image->path : 'https://placehold.co/300x200'}} 300w, {{$item->image ? $item->image->path : 'https://placehold.co/768x512'}} 768w" />
                                            </a>
                                        </div>
                                        <div class="article-content flex flex-12">
                                            <div class="article-cate">
                                                <div class="article-cate-box">
                                                    <img src="/site/images/icon-user.svg" alt=""
                                                        title="" loading="lazy">
                                                    <p class="text-14 fw-sb">By admin</p>
                                                </div>
                                                <div class="article-cate-box">
                                                    <img src="/site/images/icon-calendar.svg"
                                                        alt="" title="" loading="lazy">
                                                    <p class="text-14 fw-sb">{{ $item->created_at->format('d/m/Y') }}</p>
                                                </div>
                                            </div>
                                            <div class="article-title flex flex-8">
                                                <h3 class="text-16 f-tt">
                                                    <a
                                                        href="{{route('front.detail-blog', $item->slug)}}">{{ $item->name }}</a>
                                                </h3>
                                                <p class="text-14">{!! $item->intro !!}</p>
                                            </div>
                                            <a class="article-link text-14 f-tt cl-pri"
                                                href="{{route('front.detail-blog', $item->slug)}}">
                                                <span>Xem chi tiết</span>
                                                <img src="/site/images/icon-arrow (1).svg" alt=""
                                                    title="" loading="lazy" style="width: 3.6rem; height: 3.6rem; object-fit: contain; padding: 0.8rem; border-radius: 50%; background-color: #fff;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('script')
@endpush
