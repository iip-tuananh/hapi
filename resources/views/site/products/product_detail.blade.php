@extends('site.layouts.master')
@section('title')
    {{ $product->name }}
@endsection
@section('description')
    {{ strip_tags($product->intro) }}
@endsection
@section('image')
    {{ $product->image ? $product->image->path : $product->galleries[0]->image->path }}
@endsection

@section('css')
    <link rel='stylesheet' id='mona-template-product-detail-css' href='/site/css/product-detail.css' type='text/css'
        media='all' />
@endsection

@section('content')
    <main class="main p-product-detail">
        <section class="hero hero-pri">
            <div class="hero-bg"></div>
            <div class="hero-position">
                <div class="container" data-aos="fade-in">
                    <div class="hero-info flex">
                        <div class="breadcrumb">
                            <div class="container" data-aos="fade-in">
                                <div class="breadcrumb-wrap">
                                    <ul class="breadcrumb-list">
                                        <li class="breadcrumb-item ">
                                            <a href="{{ route('front.home-page') }}" target="_self">
                                                Trang chủ </a>
                                        </li>
                                        <li class="breadcrumb-item ">
                                            <a href="javascript:void(0)" target="_self">
                                                Sản phẩm </a>
                                        </li>
                                        <li class="breadcrumb-item is-current">
                                            <span>{{ $product->name }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="i-product-row row">
                            <div class="i-product-col col col-6">
                                <div class="i-product-frame">
                                    <div class="i-product-img">
                                        <img width="2484" height="2610"
                                            src="{{ $product->image ? $product->image->path : $product->galleries[0]->image->path }}"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                            alt="" decoding="async"
                                            srcset="{{ $product->image ? $product->image->path : $product->galleries[0]->image->path }} 2484w, {{ $product->image ? $product->image->path : $product->galleries[0]->image->path }} 286w, {{ $product->image ? $product->image->path : $product->galleries[0]->image->path }} 975w, {{ $product->image ? $product->image->path : $product->galleries[0]->image->path }} 768w, {{ $product->image ? $product->image->path : $product->galleries[0]->image->path }} 1462w, {{ $product->image ? $product->image->path : $product->galleries[0]->image->path }} 1949w" />
                                    </div>
                                    <div class="icon">
                                        <img src="/site/images/box-chat.png" alt="" title="" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="i-product-col col col-6">
                                <div class="i-product-content flex flex-24">
                                    <div class="i-product-logo">
                                        <p class="title-72 f-tt">
                                            {{ $product->name }}
                                        </p>
                                    </div>
                                    <div class="i-product-desc flex flex-16">
                                        <p class="text-20 f-tt">Rút đa năng, linh hoạt tiện dụng</p>
                                        <ul class="list">
                                            <li class="list-item">
                                                <img src="/site/images/paper1.svg" class="attachment-full size-full"
                                                    alt="{{ $config->web_title }}" title="{{ $config->web_title }}"
                                                    decoding="async" />
                                                <p class="text-14 f-tt">3 lớp/ 130 tờ</p>
                                            </li>
                                            <li class="list-item">
                                                <img src="/site/images/paper2.svg" class="attachment-full size-full"
                                                    alt="{{ $config->web_title }}" title="{{ $config->web_title }}"
                                                    decoding="async" />
                                                <p class="text-14 f-tt">4 gói/ túi</p>
                                            </li>
                                            <li class="list-item">
                                                <img src="/site/images/paper3.svg" class="attachment-full size-full"
                                                    alt="{{ $config->web_title }}" title="{{ $config->web_title }}"
                                                    decoding="async" />
                                                <p class="text-14 f-tt">5 túi/ thùng</p>
                                            </li>
                                        </ul>
                                        <div class="text-14">{!! $product->intro !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-detail">
            <div class="container container-pri" data-aos="fade-up">
                <div class="product-detail-row row">
                    <div class="product-detail-col col col-8">
                        <div class="product-detail-wrap flex flex-64">
                            <div class="product-detail-block flex flex-24">
                                <div class="product-detail-block_heading">
                                    <h2 class="title-36 f-tt">Tổng quan về</h2>
                                    <div class="title">
                                        <p class="title-36 f-tt">
                                            {{ $product->name }}
                                        </p>
                                    </div>
                                </div>
                                <div class="product-detail-block_gallery">
                                    <div class="img">
                                        <div class="img-inner">
                                            <img width="812" height="439"
                                                src="{{ $product->galleries ? $product->galleries[0]->image->path : '' }}"
                                                class="attachment-full size-full" alt="{{ $config->web_title }}"
                                                title="{{ $config->web_title }}" decoding="async"
                                                srcset="{{ $product->galleries ? $product->galleries[0]->image->path : '' }} 812w, {{ $product->galleries ? $product->galleries[0]->image->path : '' }} 300w, {{ $product->galleries ? $product->galleries[0]->image->path : '' }} 768w" />
                                        </div>
                                    </div>
                                    <div class="img">
                                        @foreach ($product->galleries as $key => $gallery)
                                            @if ($key > 0)
                                                <div class="img-inner">
                                                    <img width="570" height="440" src="{{ $gallery->image->path }}"
                                                        class="attachment-full size-full" alt="{{ $config->web_title }}"
                                                        title="{{ $config->web_title }}" decoding="async"
                                                        srcset="{{ $gallery->image->path }} 570w, {{ $gallery->image->path }} 300w" />
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="text-14">
                                    {!! $product->body !!}
                                </div>
                            </div>
                            <div class="product-detail-block">
                                <div class="product-detail-block_list flex flex-40">
                                    <p class="title-36 f-tt">Đặc tính sản phẩm</p>
                                    <ul class="list">
                                        <li class="list-item">
                                            <div class="list-box">
                                                <div class="list-img">
                                                    <img src="https://fudovietnam.com/wp-content/uploads/2025/06/icon1.svg"
                                                        class="attachment-full size-full" alt="Thích hợp cho trẻ em"
                                                        title="Thích hợp cho trẻ em" decoding="async" />
                                                </div>
                                                <p class="text-14 f-tt">Thích hợp cho trẻ em</p>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="list-box">
                                                <div class="list-img">
                                                    <img src="https://fudovietnam.com/wp-content/uploads/2025/06/icon2.svg"
                                                        class="attachment-full size-full" alt="Dùng cho thực phẩm"
                                                        title="Dùng cho thực phẩm" decoding="async" />
                                                </div>
                                                <p class="text-14 f-tt">Dùng cho thực phẩm</p>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="list-box">
                                                <div class="list-img">
                                                    <img src="https://fudovietnam.com/wp-content/uploads/2025/06/icon3.svg"
                                                        class="attachment-full size-full" alt="Thấm nước thấm dầu"
                                                        title="Thấm nước thấm dầu" decoding="async" />
                                                </div>
                                                <p class="text-14 f-tt">Thấm nước thấm dầu</p>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="list-box">
                                                <div class="list-img">
                                                    <img src="https://fudovietnam.com/wp-content/uploads/2025/06/icon4.svg"
                                                        class="attachment-full size-full" alt="Dai, mịn" title="Dai, mịn"
                                                        decoding="async" />
                                                </div>
                                                <p class="text-14 f-tt">Dai, mịn</p>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="list-box">
                                                <div class="list-img">
                                                    <img src="https://fudovietnam.com/wp-content/uploads/2025/06/icon5.svg"
                                                        class="attachment-full size-full" alt="Không tạo mùi"
                                                        title="Không tạo mùi" decoding="async" />
                                                </div>
                                                <p class="text-14 f-tt">Không tạo mùi</p>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="list-box">
                                                <div class="list-img">
                                                    <img src="https://fudovietnam.com/wp-content/uploads/2025/06/icon6.svg"
                                                        class="attachment-full size-full" alt="Chịu nhiệt tốt"
                                                        title="Chịu nhiệt tốt" decoding="async" />
                                                </div>
                                                <p class="text-14 f-tt">Chịu nhiệt tốt</p>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="list-box">
                                                <div class="list-img">
                                                    <img src="https://fudovietnam.com/wp-content/uploads/2025/06/icon7.svg"
                                                        class="attachment-full size-full" alt="Chống tia UV"
                                                        title="Chống tia UV" decoding="async" />
                                                </div>
                                                <p class="text-14 f-tt">Chống tia UV</p>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="list-box">
                                                <div class="list-img">
                                                    <img src="https://fudovietnam.com/wp-content/uploads/2025/06/icon8.svg"
                                                        class="attachment-full size-full" alt="Tiêu chuẩn USA"
                                                        title="Tiêu chuẩn USA" decoding="async" />
                                                </div>
                                                <p class="text-14 f-tt">Tiêu chuẩn USA</p>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="list-box">
                                                <div class="list-img">
                                                    <img src="https://fudovietnam.com/wp-content/uploads/2025/06/icon9.svg"
                                                        class="attachment-full size-full" alt="Phù hợp cho kỳ kinh nguyệt"
                                                        title="Phù hợp cho kỳ kinh nguyệt" decoding="async" />
                                                </div>
                                                <p class="text-14 f-tt">Phù hợp cho kỳ kinh nguyệt</p>
                                            </div>
                                        </li>
                                        <li class="list-item">
                                            <div class="list-box">
                                                <div class="list-img">
                                                    <img src="https://fudovietnam.com/wp-content/uploads/2025/06/icon10.svg"
                                                        class="attachment-full size-full" alt="Không tẩy trắng"
                                                        title="Không tẩy trắng" decoding="async" />
                                                </div>
                                                <p class="text-14 f-tt">Không tẩy trắng</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-detail-block">
                                <div class="product-detail-block_list flex flex-40">
                                    <p class="title-36 f-tt">Quy cách sản phẩm</p>
                                    {!! $product->short_des !!}
                                </div>
                            </div>
                            <div class="product-detail-block">
                                <div class="product-detail-block_list flex flex-40">
                                    <p class="title-36 f-tt">Câu hỏi thường gặp</p>
                                    <div class="faqs-info">
                                        <ul class="faqs-list js-faqs-list flex flex-16">
                                            @foreach ($questions as $key => $question)
                                                <li class="faqs-item {{ $key == 0 ? 'is-active' : '' }}">
                                                    <div class="faqs-heading js-faqs-heading">
                                                        <div class="img">
                                                            <img src="/site/images/icon-question.svg" alt=""
                                                                title="" loading="lazy">
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
                            </div>
                            <div class="product-detail-block">
                                <div class="tabJS gallery">
                                    <ul class="tab">
                                        {{-- <li class="tab-item tabBtn active">
                                            <p class="text-16 f-tt">Hình ảnh sản phẩm</p>
                                        </li> --}}
                                        <li class="tab-item tabBtn ">
                                            <p class="text-16 f-tt">Chứng nhận</p>
                                        </li>
                                        <li class="tab-item tabBtn ">
                                            <p class="text-16 f-tt">Đánh giá</p>
                                        </li>
                                    </ul>
                                    {{-- <div class="tabPanel">
                                        <div class="tab-gallery flex flex-40">
                                            <div class="tab-gallery-list">
                                                <div class="tab-gallery-img gItem"
                                                    data-src="https://fudovietnam.com/wp-content/uploads/2025/06/tab1.png">
                                                    <img width="904" height="824"
                                                        src="https://fudovietnam.com/wp-content/uploads/2025/06/tab1.png"
                                                        class="attachment-full size-full" alt="{{$config->web_title}}"
                                                        title="{{$config->web_title}}" decoding="async"
                                                        srcset="https://fudovietnam.com/wp-content/uploads/2025/06/tab1.png 904w, https://fudovietnam.com/wp-content/uploads/2025/06/tab1-300x273.png 300w, https://fudovietnam.com/wp-content/uploads/2025/06/tab1-768x700.png 768w" />
                                                </div>
                                                <div class="tab-gallery-img gItem"
                                                    data-src="https://fudovietnam.com/wp-content/uploads/2025/06/tab2.png">
                                                    <img width="1272" height="824"
                                                        src="https://fudovietnam.com/wp-content/uploads/2025/06/tab2.png"
                                                        class="attachment-full size-full" alt="{{$config->web_title}}"
                                                        title="{{$config->web_title}}" decoding="async"
                                                        srcset="https://fudovietnam.com/wp-content/uploads/2025/06/tab2.png 1272w, https://fudovietnam.com/wp-content/uploads/2025/06/tab2-300x194.png 300w, https://fudovietnam.com/wp-content/uploads/2025/06/tab2-1024x663.png 1024w, https://fudovietnam.com/wp-content/uploads/2025/06/tab2-768x498.png 768w" />
                                                </div>
                                                <div class="tab-gallery-img gItem"
                                                    data-src="https://fudovietnam.com/wp-content/uploads/2025/06/tab3.png">
                                                    <img width="516" height="824"
                                                        src="https://fudovietnam.com/wp-content/uploads/2025/06/tab3.png"
                                                        class="attachment-full size-full" alt="{{$config->web_title}}"
                                                        title="{{$config->web_title}}" decoding="async"
                                                        srcset="https://fudovietnam.com/wp-content/uploads/2025/06/tab3.png 516w, https://fudovietnam.com/wp-content/uploads/2025/06/tab3-188x300.png 188w" />
                                                </div>
                                                <div class="tab-gallery-img gItem"
                                                    data-src="https://fudovietnam.com/wp-content/uploads/2025/06/tab4.png">
                                                    <img width="1660" height="824"
                                                        src="https://fudovietnam.com/wp-content/uploads/2025/06/tab4.png"
                                                        class="attachment-full size-full" alt="{{$config->web_title}}"
                                                        title="{{$config->web_title}}" decoding="async"
                                                        srcset="https://fudovietnam.com/wp-content/uploads/2025/06/tab4.png 1660w, https://fudovietnam.com/wp-content/uploads/2025/06/tab4-300x149.png 300w, https://fudovietnam.com/wp-content/uploads/2025/06/tab4-1024x508.png 1024w, https://fudovietnam.com/wp-content/uploads/2025/06/tab4-768x381.png 768w, https://fudovietnam.com/wp-content/uploads/2025/06/tab4-1536x762.png 1536w" />
                                                </div>
                                                <div class="tab-gallery-img gItem"
                                                    data-src="https://fudovietnam.com/wp-content/uploads/2025/06/tab5.png">
                                                    <img width="708" height="824"
                                                        src="https://fudovietnam.com/wp-content/uploads/2025/06/tab5.png"
                                                        class="attachment-full size-full" alt="{{$config->web_title}}"
                                                        title="{{$config->web_title}}" decoding="async"
                                                        srcset="https://fudovietnam.com/wp-content/uploads/2025/06/tab5.png 708w, https://fudovietnam.com/wp-content/uploads/2025/06/tab5-258x300.png 258w" />
                                                </div>
                                                <div class="tab-gallery-img gItem"
                                                    data-src="https://fudovietnam.com/wp-content/uploads/2025/06/tab6.png">
                                                    <img width="708" height="824"
                                                        src="https://fudovietnam.com/wp-content/uploads/2025/06/tab6.png"
                                                        class="attachment-full size-full" alt="{{$config->web_title}}"
                                                        title="{{$config->web_title}}" decoding="async"
                                                        srcset="https://fudovietnam.com/wp-content/uploads/2025/06/tab6.png 708w, https://fudovietnam.com/wp-content/uploads/2025/06/tab6-258x300.png 258w" />
                                                </div>
                                                <div class="tab-gallery-img gItem"
                                                    data-src="https://fudovietnam.com/wp-content/uploads/2025/06/tab7.png">
                                                    <img width="708" height="824"
                                                        src="https://fudovietnam.com/wp-content/uploads/2025/06/tab7.png"
                                                        class="attachment-full size-full" alt="{{$config->web_title}}"
                                                        title="{{$config->web_title}}" decoding="async"
                                                        srcset="https://fudovietnam.com/wp-content/uploads/2025/06/tab7.png 708w, https://fudovietnam.com/wp-content/uploads/2025/06/tab7-258x300.png 258w" />
                                                </div>
                                            </div>
                                            <a class="btn" href="#">
                                                <span>Tải hình ảnh sản phẩm</span>
                                                <img src="/template/assets/images/icons/icon-download.svg" alt=""
                                                    title="" loading="lazy">
                                            </a>
                                        </div>
                                    </div> --}}
                                    <div class="tabPanel">
                                        <div class="tab-cer">
                                            <div class="swiper">
                                                <div class="swiper-wrapper">
                                                    @foreach ($about_us->galleries as $gallery)
                                                    <div class="swiper-slide">
                                                        <div class="tab-cer-img gItem"
                                                            data-src="{{ $gallery->image ? $gallery->image->path : 'https://placehold.co/720x974' }}">
                                                            <img width="720" height="974"
                                                                src="{{ $gallery->image ? $gallery->image->path : 'https://placehold.co/720x974' }}"
                                                                class="attachment-full size-full"
                                                                alt="{{ $config->web_title }}"
                                                                title="{{ $config->web_title }}" decoding="async"
                                                                srcset="{{ $gallery->image ? $gallery->image->path : 'https://placehold.co/720x974' }} 720w, {{($gallery->image ? $gallery->image->path : 'https://placehold.co/222x300')}} 222w" />
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="swiper-control">
                                                <div class="swiper-button-prev prev"></div>
                                                <div class="swiper-button-next next"></div>
                                            </div>
                                            <div class="sw-pagination">
                                                <div class="pagi-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabPanel">
                                        <div class="tab-review">
                                            <div class="swiper">
                                                <div class="swiper-wrapper">
                                                    @foreach ($reviews as $review)
                                                        <div class="swiper-slide">
                                                            <div class="tab-review-box">
                                                                <div class="tab-review-content flex flex-16">
                                                                    <div class="tab-review-content_author">
                                                                        <img width="40" height="41"
                                                                            src="{{ $review->image ? $review->image->path : '/site/images/user.png' }}"
                                                                            class="attachment-full size-full"
                                                                            alt="{{ $config->web_title }}"
                                                                            title="{{ $config->web_title }}"
                                                                            decoding="async" />
                                                                        <div class="box">
                                                                            <p class="text-14 fw-sb">{{ $review->name }}
                                                                            </p>
                                                                            <p class="text-14 fw-t">
                                                                                {{ $review->position }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <p class="text-14 desc">{!! $review->message !!}</p>
                                                                </div>
                                                                <div class="tab-review-img">
                                                                    <div class="inner">
                                                                        <img width="672" height="636"
                                                                            src="{{ $review->image ? $review->image->path : '/site/images/user.png' }}"
                                                                            class="attachment-full size-full"
                                                                            alt="{{ $config->web_title }}"
                                                                            title="{{ $config->web_title }}"
                                                                            decoding="async"
                                                                            srcset="{{ $review->image ? $review->image->path : '/site/images/user.png' }}" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="customer-swiper">
                                                    <div class="swiper-control">
                                                        <div class="swiper-button-prev prev"></div>
                                                        <div class="swiper-button-next next"></div>
                                                    </div>
                                                    <div class="sw-pagination">
                                                        <div class="pagi-pagination"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-detail-col col col-4">
                        <div class="product-detail-inner flex flex-32">
                            <div class="product-detail-slide gallery flex flex-16">
                                <div class="swiper js-product-gallery">
                                    <div class="swiper-wrapper">
                                        @foreach ($product->galleries as $gallery)
                                            <div class="swiper-slide">
                                                <div class="product-detail-img gItem"
                                                    data-src="{{ $gallery->image ? $gallery->image->path : 'https://placehold.co/440x336' }}">
                                                    <div class="inner">
                                                        <img width="440" height="336"
                                                            src="{{ $gallery->image ? $gallery->image->path : 'https://placehold.co/440x336' }}"
                                                            class="attachment-full size-full"
                                                            alt="{{ $config->web_title }}"
                                                            title="{{ $config->web_title }}" decoding="async"
                                                            srcset="{{ $gallery->image ? $gallery->image->path : 'https://placehold.co/440x336' }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper js-product-thumbs">
                                    <div class="swiper-wrapper">
                                        @foreach ($product->galleries as $gallery)
                                            <div class="swiper-slide">
                                                <div class="product-detail-img">
                                                    <div class="inner">
                                                        <img width="440" height="336"
                                                            src="{{ $gallery->image ? $gallery->image->path : 'https://placehold.co/440x336' }}"
                                                            class="attachment-full size-full"
                                                            alt="{{ $config->web_title }}"
                                                            title="{{ $config->web_title }}" decoding="async"
                                                            srcset="{{ $gallery->image ? $gallery->image->path : 'https://placehold.co/440x336' }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail-info flex flex-8">
                                <div class="product-detail-info_title">
                                    <div class="title">
                                        <p class="title-28 f-tt">
                                            {{ $product->name }}
                                        </p>
                                    </div>
                                </div>
                                <div class="product-detail-info_price">
                                    <p class="text-20 f-tt">Giá tham khảo: </p>
                                    <div class="price">
                                        <del>
                                            <span class="amount">
                                                <bdi>{{ formatCurrency($product->base_price) }} vnđ </bdi>
                                            </span>
                                        </del>
                                        <ins>
                                            <span class="amount">
                                                <bdi>{{ formatCurrency($product->price) }} vnđ </bdi>
                                            </span>
                                        </ins>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail-option">
                                <ul class="list">
                                    <li class="list-item">
                                        <div class="list-box">
                                            <img width="72" height="73"
                                                src="https://fudovietnam.com/wp-content/uploads/2025/06/option1.png"
                                                class="attachment-full size-full" alt="Gói (pcs)" title="Gói (pcs)"
                                                decoding="async" />
                                            <p class="text-14 f-tt">Gói (pcs)</p>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="list-box">
                                            <img width="72" height="73"
                                                src="https://fudovietnam.com/wp-content/uploads/2025/06/option2.png"
                                                class="attachment-full size-full" alt="Túi (4 pcs)" title="Túi (4 pcs)"
                                                decoding="async" />
                                            <p class="text-14 f-tt">Túi (4 pcs)</p>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="list-box">
                                            <img width="72" height="73"
                                                src="https://fudovietnam.com/wp-content/uploads/2025/06/option3.png"
                                                class="attachment-full size-full" alt="Thùng (16 pcs)"
                                                title="Thùng (16 pcs)" decoding="async" />
                                            <p class="text-14 f-tt">Thùng (16 pcs)</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-detail-btn">
                                <a class="btn" href="https://fudovietnam.com/danh-cho-doanh-nghiep/#system">
                                    <span>Cửa hàng đề xuất</span>
                                </a>
                                {{-- <div class="inner">
                                    <p class="text-12 f-tt">Xem sản phẩm tại</p>
                                    <ul class="inner-list">
                                        <li class="inner-item">
                                            <a class="inner-img" href="https://shopee.vn/fudo.official">
                                                <img src="https://fudovietnam.com/wp-content/uploads/2025/06/e1.svg"
                                                    class="attachment-full size-full" alt="{{$config->web_title}}"
                                                    title="{{$config->web_title}}" decoding="async" /> </a>
                                        </li>
                                        <li class="inner-item">
                                            <a class="inner-img" href="https://shopee.vn/fudo.official">
                                                <img src="https://fudovietnam.com/wp-content/uploads/2025/06/e2.svg"
                                                    class="attachment-full size-full" alt="{{$config->web_title}}"
                                                    title="{{$config->web_title}}" decoding="async" /> </a>
                                        </li>
                                        <li class="inner-item">
                                            <a class="inner-img" href="https://shopee.vn/fudo.official">
                                                <img src="https://fudovietnam.com/wp-content/uploads/2025/06/e3.svg"
                                                    class="attachment-full size-full" alt="{{$config->web_title}}"
                                                    title="{{$config->web_title}}" decoding="async" /> </a>
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="related">
            <div class="container" data-aos="fade-up">
                <div class="related-wrap flex flex-40">
                    <div class="heading-swiper">
                        <h2 class="title-40 f-tt">Các sản phẩm gợi ý</h2>
                        <div class="swiper-control">
                            <div class="swiper-button-prev prev"></div>
                            <div class="swiper-button-next next"></div>
                        </div>
                    </div>
                    <div class="js-related">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach ($productsRelated as $productRelated)
                                    <div class="swiper-slide">
                                        <div class="product-box flex flex-8">
                                            <div class="product-img">
                                                <a class="img"
                                                    href="{{ route('front.show-product-detail', $productRelated->slug) }}">
                                                    <img width="967" height="1024"
                                                        src="{{ $productRelated->image ? $productRelated->image->path : 'https://placehold.co/967x1024' }}"
                                                        class="attachment-full size-full wp-post-image"
                                                        alt="{{ $productRelated->name }}"
                                                        title="{{ $productRelated->name }}" decoding="async"
                                                        srcset="{{ $productRelated->image ? $productRelated->image->path : 'https://placehold.co/967x1024' }}" />
                                                </a>
                                            </div>
                                            <div class="product-content flex flex-4">
                                                <div class="product-logo">
                                                    <img width="768" height="279"
                                                        src="{{ $productRelated->image ? $productRelated->image->path : 'https://placehold.co/768x279' }}"
                                                        class="attachment-full size-full"
                                                        alt="{{ $productRelated->name }}"
                                                        title="{{ $productRelated->name }}" decoding="async"
                                                        srcset="{{ $productRelated->image ? $productRelated->image->path : 'https://placehold.co/768x279' }}" />
                                                    <p class="title-28 f-tt">
                                                        {{ $productRelated->name }}
                                                    </p>
                                                </div>
                                                <p class="text-14 f-tt">Rút đa năng, linh hoạt tiện dụng</p>
                                                <a class="btn"
                                                    href="{{ route('front.show-product-detail', $productRelated->slug) }}">
                                                    <span>Xem sản phẩm</span>
                                                    <img src="/site/images/icon-arrow (1).svg" alt="" title=""
                                                        loading="lazy" style="width: 3.6rem; height: 3.6rem; object-fit: contain; padding: 0.8rem; border-radius: 50%; background-color: #fff;">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="sw-pagination">
                            <div class="pagi-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('script')
    <script>
        // $(document).ready(function() {
        //     $('.countdown-content').each(function() {
        //         const $container = $(this);
        //         const key = 'countdown_end_time'; // localStorage key
        //         const timeStr = $container.data('time'); // "HH:MM:SS"
        //         const timeParts = timeStr.split(':').map(Number);
        //         const cycleSeconds = timeParts[0] * 3600 + timeParts[1] * 60 + timeParts[2];

        //         function setNewEndTime() {
        //             const newEnd = Date.now() + cycleSeconds * 1000;
        //             localStorage.setItem(key, newEnd);
        //             return newEnd;
        //         }

        //         // Lấy endTime từ localStorage hoặc khởi tạo mới
        //         let endTime = parseInt(localStorage.getItem(key), 10);
        //         if (!endTime || isNaN(endTime) || endTime <= Date.now()) {
        //             endTime = setNewEndTime();
        //         }

        //         function updateDisplay(secondsLeft) {
        //             const hrs = String(Math.floor(secondsLeft / 3600)).padStart(2, '0');
        //             const mins = String(Math.floor((secondsLeft % 3600) / 60)).padStart(2, '0');
        //             const secs = String(secondsLeft % 60).padStart(2, '0');

        //             const $numbers = $container.find('.countdown-item-number');
        //             $numbers.eq(0).text(hrs);
        //             $numbers.eq(1).text(mins);
        //             $numbers.eq(2).text(secs);
        //         }

        //         updateDisplay(Math.floor((endTime - Date.now()) / 1000)); // Hiển thị ban đầu

        //         setInterval(function() {
        //             const now = Date.now();
        //             let remainingSeconds = Math.floor((endTime - now) / 1000);

        //             if (remainingSeconds <= 0) {
        //                 endTime = setNewEndTime(); // Reset lại thời gian mới
        //                 remainingSeconds = cycleSeconds;
        //             }

        //             updateDisplay(remainingSeconds);
        //         }, 1000);
        //     });
        // });

        // Plus number quantiy product detail
        var plusQuantity = function() {
            if (jQuery('input[name="quantity"]').val() != undefined) {
                var currentVal = parseInt(jQuery('input[name="quantity"]').val());
                if (!isNaN(currentVal)) {
                    jQuery('input[name="quantity"]').val(currentVal + 1);
                } else {
                    jQuery('input[name="quantity"]').val(1);
                }
            } else {
                console.log('error: Not see elemnt ' + jQuery('input[name="quantity"]').val());
            }
        }
        // Minus number quantiy product detail
        var minusQuantity = function() {
            if (jQuery('input[name="quantity"]').val() != undefined) {
                var currentVal = parseInt(jQuery('input[name="quantity"]').val());
                if (!isNaN(currentVal) && currentVal > 1) {
                    jQuery('input[name="quantity"]').val(currentVal - 1);
                }
            } else {
                console.log('error: Not see elemnt ' + jQuery('input[name="quantity"]').val());
            }
        }
        app.controller('ProductDetailController', function($scope, $http, $interval, cartItemSync, $rootScope, $compile) {
            $scope.product = @json($product);
            $scope.form = {
                quantity: 1
            };

            $scope.selectedAttributes = [];
            jQuery('.product-attribute-values .badge').click(function() {
                if (!jQuery(this).hasClass('active')) {
                    jQuery(this).parent().find('.badge').removeClass('active');
                    jQuery(this).addClass('active');
                    if ($scope.selectedAttributes.length > 0 && $scope.selectedAttributes.find(item => item
                            .index == jQuery(this).data('index'))) {
                        $scope.selectedAttributes.find(item => item.index == jQuery(this).data('index'))
                            .value = jQuery(this).data('value');
                    } else {
                        let index = jQuery(this).data('index');
                        $scope.selectedAttributes.push({
                            index: index,
                            name: jQuery(this).data('name'),
                            value: jQuery(this).data('value'),
                        });
                    }
                } else {
                    jQuery(this).parent().find('.badge').removeClass('active');
                    jQuery(this).removeClass('active');
                    $scope.selectedAttributes = $scope.selectedAttributes.filter(item => item.index !=
                        jQuery(this).data('index'));
                }
                $scope.$apply();
            });

            $scope.addToCartFromProductDetail = function() {
                let quantity = $('#add-to-cart-form input[name="quantity"]').val();

                url = "{{ route('cart.add.item', ['productId' => 'productId']) }}";
                url = url.replace('productId', $scope.product.id);

                jQuery.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    data: {
                        'qty': parseInt(quantity),
                        'attributes': $scope.selectedAttributes
                    },
                    success: function(response) {
                        if (response.success) {
                            if (response.count > 0) {
                                $scope.hasItemInCart = true;
                            }

                            $interval.cancel($rootScope.promise);

                            $rootScope.promise = $interval(function() {
                                cartItemSync.items = response.items;
                                cartItemSync.total = response.total;
                                cartItemSync.count = response.count;
                            }, 1000);
                            toastr.success('Thao tác thành công !')
                        }
                    },
                    error: function() {
                        toastr.error('Thao tác thất bại !')
                    },
                    complete: function() {
                        $scope.$applyAsync();
                    }
                });
            }

            $scope.addToCartCheckoutFromProductDetail = function() {
                let quantity = $('#add-to-cart-form input[name="quantity"]').val();
                url = "{{ route('cart.add.item', ['productId' => 'productId']) }}";
                url = url.replace('productId', $scope.product.id);

                jQuery.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    data: {
                        'qty': parseInt(quantity),
                        'attributes': $scope.selectedAttributes
                    },
                    success: function(response) {
                        if (response.success) {
                            if (response.count > 0) {
                                $scope.hasItemInCart = true;
                            }

                            $interval.cancel($rootScope.promise);

                            $rootScope.promise = $interval(function() {
                                cartItemSync.items = response.items;
                                cartItemSync.total = response.total;
                                cartItemSync.count = response.count;
                            }, 1000);
                            toastr.success('Thao tác thành công !')
                            window.location.href = "{{ route('cart.checkout') }}";
                        }
                    },
                    error: function() {
                        toastr.error('Thao tác thất bại !')
                    },
                    complete: function() {
                        $scope.$applyAsync();
                    }
                });
            }
        });
    </script>
@endpush
