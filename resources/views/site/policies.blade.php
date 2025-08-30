@extends('site.layouts.master')
@section('title')
    {{ $title }}
@endsection
@section('description')
    {{ $config->web_des }}
@endsection
@section('image')
    {{ url('' . $banners[0]->image->path) }}
@endsection

@section('css')
    <link rel='stylesheet' id='mona-template-policy-css' href='/site/css/policy.css' type='text/css' media='all' />
    <link rel='stylesheet' id='mona-template-blog-detail-css' href='/site/css/blog-detail.css' type='text/css' media='all' />
@endsection

@section('content')
    <main class="main">
        <div class="tabJS">
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
                                            <li class="breadcrumb-item is-current">
                                                <span>{{ $title }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-content flex flex-16" data-aos="fade-up">
                                <h1 class="title-64 f-tt t-center">{{ $title }}</h1>
                                <ul class="hero-list" style="display: none;">
                                    <li class="hero-item tabBtn active">
                                        <a class="hero-link text-20 f-tt cl-sec" href="#!">Doanh nghiệp, đối tác</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-action">
                    <div class="img">
                        <img src="/site/images/icon-arrow (1).svg" alt="" title=""
                            loading="lazy" style="width: 3.6rem; height: 3.6rem; object-fit: contain; padding: 0.8rem; border-radius: 50%; background-color: #fff;">
                    </div>
                </div>
            </section>
            <div class="tabPanel">
                <section class="policy">
                    <div class="container">
                        <div class="policy-row row">
                            <div class="policy-col col col-3">
                                <div class="aside-wrap">
                                    <div class="aside-close">
                                        <img src="/site/images/icon-close.svg" alt=""
                                            title="" loading="lazy">
                                    </div>
                                    <div class="aside-cate">
                                        <div class="aside-box">
                                            <div class="aside-content flex flex-32">
                                                <p class="title-24 f-tt cl-pri">Các chính sách</p>
                                                <ul class="aside-list flex flex-16">
                                                    @foreach ($policies as $item)
                                                    <li class="aside-item ">
                                                        <p class="text-16">
                                                            <a href="{{route('front.policy-detail', $item->slug)}}">{{ $item->title }}</a>
                                                        </p>
                                                        <img src="/site/images/icon-arrow (1).svg"
                                                            alt="" title="" loading="lazy" style="width: 3.6rem; height: 3.6rem; object-fit: contain; padding: 0.8rem; border-radius: 50%; background-color: #fff;">
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="aside-overlay"></div>
                                <div class="aside-icon">
                                    <img src="/site/images/icon-cate.svg" alt="" title=""
                                        loading="lazy">
                                </div>
                            </div>
                            <div class="policy-col col col-9">
                                <div class="policy-content">
                                    <div class="mona-content">
                                        {!! $content !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection

@push('script')
@endpush
