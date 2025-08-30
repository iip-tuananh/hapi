@extends('site.layouts.master')
@section('title')
    Câu hỏi thường gặp
@endsection
@section('description')
    Câu hỏi thường gặp
@endsection
@section('image')
    {{ url('' . $banners[0]->image->path) }}
@endsection

@section('css')
<link rel='stylesheet' id='mona-template-faqs-css' href='/site/css/faqs.css' type='text/css' media='all' />
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
                                        <li class="breadcrumb-item is-current">
                                            <span>FAQs</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="hero-content flex flex-24">
                            <h1 class="title-64 f-tt t-center" data-aos="fade-up">Câu hỏi thường gặp</h1>
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
        <section class="faqs">
            <div class="container" data-aos="fade-up">
                <div class="faqs-info">
                    <ul class="faqs-list js-faqs-list flex flex-16">
                        @foreach ($questions as $key => $question)
                        <li class="faqs-item {{ $key == 0 ? 'is-active' : '' }}">
                            <div class="faqs-heading js-faqs-heading">
                                <div class="img">
                                    <img src="/site/images/icon-question.svg" alt="" title=""
                                        loading="lazy">
                                </div>
                                <h3 class="text-18">{{ $question->title }}</h3>
                                <span class="plusminus"></span>
                            </div>
                            <div class="faqs-content js-faqs-content mona-content">
                                {!! $question->content !!}
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('script')
@endpush
