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
    <link rel='stylesheet' id='mona-template-about-css' href='/site/css/about.css' type='text/css' media='all' />
    <link rel='stylesheet' id='mona-template-blog-detail-css' href='/site/css/blog-detail.css' type='text/css' media='all' />
@endsection

@section('content')
    <main class="main">
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
        <section class="about">
            <div class="container" data-aos="fade-up">
                <div class="about-row row">
                    <div class="about-col col col-5">
                        <div class="about-bg">
                            <image src="{{$about_us->image ? $about_us->image->path : 'https://placehold.co/600x400'}}" loading="lazy" />
                        </div>
                    </div>
                    <div class="about-col col col-7">
                        <div class="about-inner">
                            <div class="about-content flex flex-20">
                                <h2 class="title-64 f-tt">
                                    {{$config->short_name_company}}
                                </h2>
                                <div class="text-18">
                                    {!! $about_us->description !!}
                                </div>
                                <a class="btn popup-video" href="{{$about_us->youtube_link}}"
                                    rel="nofollow">
                                    <span>Xem video</span>
                                    <img src="/site/images/icon-arrow (1).svg" alt="image" loading="lazy" style="width: 3.6rem; height: 3.6rem; object-fit: contain; padding: 0.8rem; border-radius: 50%; background-color: #fff;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="bg-about">
            <section class="core">
                <div class="container" data-aos="fade-up">
                    <div class="js-core">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="core-overlay">
                                        <div class="core-overlay-img">
                                            <image src="/site/images/img2.png"
                                                loading="lazy" />
                                        </div>
                                        <div class="core-overlay-icon">
                                            <image src="/site/images/core1.svg"
                                                loading="lazy" />
                                        </div>
                                        <div class="core-overlay-title">
                                            <p class="title-32 cl-white f-tt">
                                                Sứ mệnh
                                            </p>
                                        </div>
                                    </div>
                                    <div class="core-box">
                                        <div class="core-img">
                                            <div class="inner">
                                                <image
                                                    src="{{$about_us->image_mission ? $about_us->image_mission->path : 'https://placehold.co/600x400'}}"
                                                    loading="lazy" />
                                            </div>
                                        </div>
                                        <div class="core-content flex flex-16">
                                            <div class="core-content-icon">
                                                <image src="/site/images/core1.svg"
                                                    loading="lazy" />
                                            </div>
                                            <h2 class="title-36 f-tt cl-pri">
                                                Sứ mệnh
                                            </h2>
                                            <p class="text-14 cl-pri">
                                                {!! $about_us->mission !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="core-overlay">
                                        <div class="core-overlay-img">
                                            <image src="/site/images/img.png"
                                                loading="lazy" />
                                        </div>
                                        <div class="core-overlay-icon">
                                            <image src="/site/images/core2.svg"
                                                loading="lazy" />
                                        </div>
                                        <div class="core-overlay-title">
                                            <p class="title-32 cl-white f-tt">
                                                Tầm nhìn
                                            </p>
                                        </div>
                                    </div>
                                    <div class="core-box">
                                        <div class="core-img">
                                            <div class="inner">
                                                <image
                                                    src="{{$about_us->image_vision ? $about_us->image_vision->path : 'https://placehold.co/600x400'}}"
                                                    loading="lazy" />
                                            </div>
                                        </div>
                                        <div class="core-content flex flex-16">
                                            <div class="core-content-icon">
                                                <image src="/site/images/core2.svg"
                                                    loading="lazy" />
                                            </div>
                                            <h2 class="title-36 f-tt cl-pri">
                                                Tầm nhìn
                                            </h2>
                                            <p class="text-14 cl-pri">
                                                {!! $about_us->vision !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="core-overlay">
                                        <div class="core-overlay-img">
                                            <image src="/site/images/img2.png"
                                                loading="lazy" />
                                        </div>
                                        <div class="core-overlay-icon">
                                            <image src="/site/images/core3.svg"
                                                loading="lazy" />
                                        </div>
                                        <div class="core-overlay-title">
                                            <p class="title-32 cl-white f-tt">
                                                Giá trị cốt lõi
                                            </p>
                                        </div>
                                    </div>
                                    <div class="core-box">
                                        <div class="core-img">
                                            <div class="inner">
                                                <image
                                                    src="{{$about_us->image_core_values ? $about_us->image_core_values->path : 'https://placehold.co/600x400'}}"
                                                    loading="lazy" />
                                            </div>
                                        </div>
                                        <div class="core-content flex flex-16">
                                            <div class="core-content-icon">
                                                <image src="/site/images/core3.svg"
                                                    loading="lazy" />
                                            </div>
                                            <h2 class="title-36 f-tt cl-pri">
                                                Giá trị cốt lõi
                                            </h2>
                                            <p class="text-14 cl-pri">
                                                {!! $about_us->core_values !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="m-why">
                <div class="m-why-container container">
                    <div class="m-why-row row">
                        <div class="m-why-col col col-12">
                            <div class="m-why-content flex flex-20">
                                <div class="decor">
                                    <img src="/site/images/m-why-decor.svg" alt="Image"
                                        loading="lazy">
                                </div>
                                <h2 class="title-40 cl-pri f-tt">
                                    Vì sao Fudo chọn làm<br />
                                    khăn giấy từ tre?
                                </h2>
                                <div class="text-16">
                                    {!! $about_us->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="value">
            <div class="container container-pri">
                <div class="value-wrap">
                    <div class="value-img">
                        <image src="/site/images/0_Botany_Botanical_1920x1080.gif"
                            loading="lazy" />
                    </div>
                    <div class="value-position">
                        <div class="value-content flex flex-24">
                            <h2 class="title-56 f-tt cl-white">
                                Fudo khát khao mang giá trị của <br />
                                tre chăm chút vào từng sản phẩm
                            </h2>
                            <div class="value-btn">
                                <a class="btn btn-sec popup-video" href="{{$about_us->youtube_link}}"
                                    rel="nofollow">
                                    <span>Xem video về {{$config->web_title}}</span>
                                    <img src="/site/images/icon-play.svg" alt="Image" loading="lazy">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="together pt-10">
            <div class="together-wrap flex flex-80">
                <div class="together-heading flex flex-40" data-aos="fade-up">
                    {{-- <div class="together-decor together-decor1">
                        <img src="/site/images/together-decor1.png" alt="" title="" loading="lazy">
                    </div>
                    <div class="together-decor together-decor2">
                        <img src="/site/images/together-decor2.png" alt="" title="" loading="lazy">
                    </div> --}}
                    <div class="together-heading_title t-center flex flex-16">
                        <h2 class="title-36 cl-pri f-tt">Cùng nhau lan tỏa niềm vui trọn vẹn</h2>
                    </div>
                    <a class="btn" href="{{route('front.contact-us')}}">
                        <span>Trở thành đối tác của chúng tôi</span>
                        <img src="/site/images/icon-arrow (1).svg" alt="" title="" loading="lazy" style="width: 3.6rem; height: 3.6rem; object-fit: contain; padding: 0.8rem; border-radius: 50%; background-color: #fff;">
                    </a>
                </div>
                <div class="gallery flex flex-16" data-aos="fade-up">
                    <div class="js-together js-together-left">
                        <div class="splide">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    @foreach ($partners as $partner)
                                    <li class="splide__slide">
                                        <div class="img gItem"
                                            data-src="{{$partner->image ? $partner->image->path : 'https://placehold.co/570x440'}}">
                                            <img width="570" height="440"
                                                src="{{$partner->image ? $partner->image->path : 'https://placehold.co/570x440'}}"
                                                class="attachment-full size-full" alt="{{$partner->name}}"
                                                title="{{$partner->name}}" decoding="async"
                                                srcset="{{$partner->image ? $partner->image->path : 'https://placehold.co/570x440'}} 570w, {{$partner->image ? $partner->image->path : 'https://placehold.co/300x232'}} 300w" />
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
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
