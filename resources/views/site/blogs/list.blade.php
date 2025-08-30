@extends('site.layouts.master')
@section('title')
    {{ $cate_title }}
@endsection
@section('description')
    {{ $cate_des ?? '' }}
@endsection
@section('image')
    {{ url('' . $banners[0]->image->path) }}
@endsection

@section('css')
    <link rel='stylesheet' id='mona-template-blog-css' href='/site/css/blog.css' type='text/css' media='all' />
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
                                        <li class="breadcrumb-item is-current">
                                            <span>{{ $cate_title }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="hero-content flex flex-24">
                            <h1 class="title-64 f-tt t-center" data-aos="fade-up">{{ $cate_title }}</h1>
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
        <section class="blog">
            <div class="container" data-aos="fade-up">
                <div class="blog-row row">
                    <div class="blog-col col col-12">
                        <div class="blog-inner flex flex-40">
                            <ul class="blog-list">
                                @foreach ($blogs as $blog)
                                <li class="blog-item">
                                    <div class="article-box flex flex-16">
                                        <div class="article-date">
                                            <p class="text-20 f-tt cl-white">{{ $blog->created_at->format('d') }}</p>
                                            <p class="text-14 fw-sb cl-white">Th{{ $blog->created_at->format('m') }}</p>
                                        </div>
                                        <div class="article-img">
                                            <a class="img"
                                                href="{{ route('front.detail-blog', $blog->slug) }}">
                                                <img width="1244" height="700"
                                                    src="{{ $blog->image ? $blog->image->path : 'https://placehold.co/600x400' }}"
                                                    class="attachment-full size-full wp-post-image"
                                                    alt="Công dụng của cây tre đối với người Việt Nam"
                                                    title="Công dụng của cây tre đối với người Việt Nam" decoding="async"
                                                    srcset="{{ $blog->image ? $blog->image->path : 'https://placehold.co/600x400' }} 1244w, {{ $blog->image ? $blog->image->path : 'https://placehold.co/600x400' }} 300w, {{ $blog->image ? $blog->image->path : 'https://placehold.co/600x400' }} 1024w, {{ $blog->image ? $blog->image->path : 'https://placehold.co/600x400' }} 768w" />
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
                                                    <p class="text-14 fw-sb">{{ $blog->created_at->format('d/m/Y') }}</p>
                                                </div>
                                            </div>
                                            <div class="article-title flex flex-8">
                                                <h3 class="text-16 f-tt">
                                                    <a
                                                        href="{{ route('front.detail-blog', $blog->slug) }}">{{ $blog->name }}</a>
                                                </h3>
                                                <p class="text-14">{!! $blog->intro !!}</p>
                                            </div>
                                            <a class="article-link text-14 f-tt cl-pri"
                                                href="{{ route('front.detail-blog', $blog->slug) }}">
                                                <span>Xem chi tiết</span>
                                                <img src="/site/images/icon-arrow (1).svg" alt=""
                                                    title="" loading="lazy" style="width: 3.6rem; height: 3.6rem; object-fit: contain; padding: 0.8rem; border-radius: 50%; background-color: #fff;">
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('script')
@endpush
