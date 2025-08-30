@extends('site.layouts.master')
@section('title')
    {{ $config->meta_title ?? $config->web_title }}
@endsection
@section('description')
    {{ $config->web_des }}
@endsection
@section('image')
    {{ url('' . $banners[0]->image->path) }}
@endsection
@section('css')
<link rel='stylesheet' id='mona-template-home-css' href='/site/css/home.css' type='text/css' media='all' />
<link rel='stylesheet' id='mona-template-blog-detail-css' href='/site/css/blog-detail.css' type='text/css'
    media='all' />
@endsection
@section('content')
<main class="main">
    <section class="m-banner" data-aos="fade-in">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="m-banner-bg"></div>
                    <div class="m-banner-position">
                        <div class="container container-pri">
                            <div class="m-banner-flex">
                                <div class="m-banner-row row">
                                    <div class="m-banner-col col col-5">
                                        <div class="m-banner-content">
                                            <ul class="list">
                                                <li class="list-item">
                                                    <p class="text-14 cl-pri">Tự nhiên</p>
                                                </li>
                                                <li class="list-item">
                                                    <p class="text-14 cl-pri">An lành</p>
                                                </li>
                                                <li class="list-item">
                                                    <p class="text-14 cl-pri">Thuần khiết</p>
                                                </li>
                                            </ul>
                                            <div class="m-banner-title flex flex-32">
                                                <p class="cate title-28 f-tt">Cùng khăn giấy tre {{$config->web_title}}</p>
                                                <h2 class="title-80 f-tt">{{$banners[0]->title}}
                                                </h2>
                                            </div>
                                            <div class="m-banner-action">
                                                <ul class="icon">
                                                    <li class="icon-item">
                                                        <img src="/site/images/UV.svg"
                                                            class="attachment-full size-full"
                                                            alt="{{$config->web_title}}" title="{{$config->web_title}}"
                                                            decoding="async" />
                                                    </li>
                                                    <li class="icon-item">
                                                        <img src="/site/images/no-mui.svg"
                                                            class="attachment-full size-full"
                                                            alt="{{$config->web_title}}" title="{{$config->web_title}}"
                                                            decoding="async" />
                                                    </li>
                                                    <li class="icon-item">
                                                        <img src="/site/images/oil_water.svg"
                                                            class="attachment-full size-full"
                                                            alt="{{$config->web_title}}" title="{{$config->web_title}}"
                                                            decoding="async" />
                                                    </li>
                                                    <li class="icon-item">
                                                        <img src="/site/images/baby.svg"
                                                            class="attachment-full size-full"
                                                            alt="{{$config->web_title}}" title="{{$config->web_title}}"
                                                            decoding="async" />
                                                    </li>
                                                    <li class="icon-item">
                                                        <img src="/site/images/tay-trang.svg"
                                                            class="attachment-full size-full"
                                                            alt="{{$config->web_title}}" title="{{$config->web_title}}"
                                                            decoding="async" />
                                                    </li>
                                                </ul>
                                                <a class="btn" href="{{$banners[0]->link}}">
                                                    <span>Xem chi tiết</span>
                                                    <img src="/site/images/icon-arrow (1).svg" alt=""
                                                        title="" loading="lazy" style="width: 3.6rem; height: 3.6rem; object-fit: contain; padding: 0.8rem; border-radius: 50%; background-color: #fff;">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-banner-col col col-7">
                                        <div class="m-banner-frame">
                                            <div class="m-banner-img">
                                                <img width="1866" height="1476"
                                                    src="{{$banners[0]->image ? $banners[0]->image->path : 'https://placehold.co/1866x1476'}}"
                                                    class="attachment-full size-full" alt="{{$config->web_title}}"
                                                    title="{{$config->web_title}}" decoding="async"
                                                    srcset="{{$banners[0]->image ? $banners[0]->image->path : 'https://placehold.co/1866x1476'}} 1866w, {{($banners[0]->image ? $banners[0]->image->path : 'https://placehold.co/300x237')}} 300w, {{($banners[0]->image ? $banners[0]->image->path : 'https://placehold.co/1024x810')}} 1024w, {{($banners[0]->image ? $banners[0]->image->path : 'https://placehold.co/768x607')}} 768w, {{($banners[0]->image ? $banners[0]->image->path : 'https://placehold.co/1536x1215')}} 1536w" />
                                            </div>
                                            <div class="m-banner-decor m-banner-decor1">
                                                <img width="570" height="863"
                                                    src="{{$banners[0]->image_part1 ? $banners[0]->image_part1->path : 'https://placehold.co/570x863'}}"
                                                    class="attachment-full size-full" alt="{{$config->web_title}}"
                                                    title="{{$config->web_title}}" decoding="async"
                                                    srcset="{{$banners[0]->image_part1 ? $banners[0]->image_part1->path : 'https://placehold.co/570x863'}} 570w, {{($banners[0]->image_part1 ? $banners[0]->image_part1->path : 'https://placehold.co/198x300')}} 198w" />
                                            </div>
                                            <div class="m-banner-decor m-banner-decor2">
                                                <img width="392" height="450"
                                                    src="{{$banners[0]->image_part2 ? $banners[0]->image_part2->path : 'https://placehold.co/392x450'}}"
                                                    class="attachment-full size-full" alt="{{$config->web_title}}"
                                                    title="{{$config->web_title}}" decoding="async"
                                                    srcset="{{$banners[0]->image_part2 ? $banners[0]->image_part2->path : 'https://placehold.co/392x450'}} 392w, {{($banners[0]->image_part2 ? $banners[0]->image_part2->path : 'https://placehold.co/261x300')}} 261w" />
                                            </div>
                                            <div class="m-banner-decor m-banner-decor3">
                                                <img width="601" height="626"
                                                    src="{{$banners[0]->image_part3 ? $banners[0]->image_part3->path : 'https://placehold.co/601x626'}}"
                                                    class="attachment-full size-full" alt="{{$config->web_title}}"
                                                    title="{{$config->web_title}}" decoding="async"
                                                    srcset="{{$banners[0]->image_part3 ? $banners[0]->image_part3->path : 'https://placehold.co/601x626'}} 601w, {{($banners[0]->image_part3 ? $banners[0]->image_part3->path : 'https://placehold.co/288x300')}} 288w" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="simple">
        <div class="container" data-aos="fade-up">
            <div class="simple-wrap flex flex-60">
                <div class="simple-heading flex flex-40">
                    <div class="simple-title flex flex-12">
                        <h2 class="title-40 f-tt cl-pri">{{$about_us->home_title}}</h2>
                        <div class="text-16">{!!$about_us->home_description!!}</div>
                    </div>
                    <div class="simple-action">
                        <a class="btn" href="{{route('front.about-us')}}">
                            <span>Về chúng tôi</span>
                            <img src="/site/images/icon-arrow (1).svg" alt="" title="" loading="lazy" style="width: 3.6rem; height: 3.6rem; object-fit: contain; padding: 0.8rem; border-radius: 50%; background-color: #fff;">
                        </a>
                        <a class="btn btn-sec popup-video" href="{{$about_us->youtube_link}}">
                            <span>Xem video</span>
                            <img src="/site/images/icon-play.svg" alt="" title="" loading="lazy">
                        </a>
                    </div>
                </div>
                <div class="simple-img">
                    <div class="img">
                        <img width="1897" height="1183"
                            src="{{$about_us->home_image ? $about_us->home_image->path : 'https://placehold.co/1897x1183'}}"
                            class="attachment-full size-full" alt="{{$config->web_title}}" title="{{$config->web_title}}"
                            decoding="async"
                            srcset="{{$about_us->home_image ? $about_us->home_image->path : 'https://placehold.co/1897x1183'}} 1897w, {{($about_us->home_image ? $about_us->home_image->path : 'https://placehold.co/300x187')}} 300w, {{($about_us->home_image ? $about_us->home_image->path : 'https://placehold.co/1024x639')}} 1024w, {{($about_us->home_image ? $about_us->home_image->path : 'https://placehold.co/768x479')}} 768w, {{($about_us->home_image ? $about_us->home_image->path : 'https://placehold.co/1536x958')}} 1536w" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="value" data-aos="fade-in">
        <div class="decor">
            <img src="/site/images/value-decor.svg" alt="" title="" loading="lazy">
        </div>
        <div class="container container-pri">
            <div class="value-wrap">
                <div class="value-img">
                    <img width="452" height="254"
                        src="/site/images/0_Botany_Botanical_1920x1080.gif"
                        class="attachment-full size-full" alt="igotour" title="igotour" decoding="async" />
                </div>
                <div class="value-position">
                    <div class="value-content flex flex-24">
                        <div class="value-heading flex flex-16">
                            <h2 class="title-56 f-tt cl-white">Một nguyên liệu nhỏ – mang khởi <br />
                                đầu lớn cho hành trình giấy lành
                            </h2>
                            <p class="text-16 cl-white">Chúng tôi chọn tre – không chỉ vì tính bền vững, mà vì niềm
                                tin rằng mọi điều tốt đẹp bắt đầu từ <br />
                                thiên nhiên. Tre lớn nhanh mà không cần chặt gốc, không phá rừng, không để lại tổn
                                hại.
                            </p>
                        </div>
                        <div class="value-btn">
                            <a class="btn btn-sec popup-video" href="{{$about_us->youtube_link}}"
                                rel="nofollow">
                                <span>Xem video về chúng tôi</span>
                                <img src="/site/images/icon-play.svg" alt="Image" loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="business-cer gallery">
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
    </section>

    <section class="m-ready">
        <div class="container" data-aos="fade-up">
            <div class="m-ready-row row">
                <div class="m-ready-col col col-5">
                    <div class="m-ready-inner flex flex-40">
                        <div class="m-ready-heading flex flex-16">
                            <h2 class="title-40 f-tt cl-pri">Tại sao <br />
                                lựa chọn chúng tôi
                            </h2>
                            <p class="text-16">{{$config->web_title}} luôn hiện diện bên bạn hằng ngày từ <br />
                                những điều nhỏ nhất, dù bất cứ nơi đâu
                            </p>
                        </div>
                        <div class="img">
                            <img width="1024" height="917"
                                src="https://fudovietnam.com/wp-content/uploads/2025/06/m-ready1.png"
                                class="attachment-full size-full" alt="{{$config->web_title}}" title="{{$config->web_title}}"
                                decoding="async"
                                srcset="https://fudovietnam.com/wp-content/uploads/2025/06/m-ready1.png 1024w, https://fudovietnam.com/wp-content/uploads/2025/06/m-ready1-300x269.png 300w, https://fudovietnam.com/wp-content/uploads/2025/06/m-ready1-768x688.png 768w" />
                        </div>
                    </div>
                </div>
                <div class="m-ready-col col col-7">
                    <ul class="m-ready-list flex flex-24">
                        <li class="m-ready-item">
                            <div class="m-ready-box">
                                <div class="m-ready-content flex flex-12">
                                    <div class="box">
                                        <div class="box-img">
                                            <img width="24" height="24"
                                                src="https://fudovietnam.com/wp-content/uploads/2025/06/fi_4334487.png"
                                                class="attachment-full size-full" alt="igotour" title="igotour"
                                                decoding="async" />
                                        </div>
                                        <p class="title-24 f-tt cl-sec">
                                            Tiện lợi
                                        </p>
                                    </div>
                                    <p class="text-14">Gói nhỏ bỏ túi dễ dàng vừa vặn trong túi xách,<br />
                                        đồng hành cùng bạn suốt ngày dài
                                    </p>
                                </div>
                                <div class="m-ready-img">
                                    <div class="img img1">
                                        <img width="280" height="160"
                                            src="https://fudovietnam.com/wp-content/uploads/2025/06/Rectangle-2697.png"
                                            class="attachment-full size-full" alt="{{$config->web_title}}"
                                            title="{{$config->web_title}}" decoding="async" />
                                    </div>
                                    <div class="img img2">
                                        <img width="2484" height="2610"
                                            src="https://fudovietnam.com/wp-content/uploads/2025/06/Pocket.png"
                                            class="attachment-full size-full wp-post-image" alt="{{$config->web_title}}"
                                            title="{{$config->web_title}}" decoding="async"
                                            srcset="https://fudovietnam.com/wp-content/uploads/2025/06/Pocket.png 2484w, https://fudovietnam.com/wp-content/uploads/2025/06/Pocket-286x300.png 286w, https://fudovietnam.com/wp-content/uploads/2025/06/Pocket-975x1024.png 975w, https://fudovietnam.com/wp-content/uploads/2025/06/Pocket-768x807.png 768w, https://fudovietnam.com/wp-content/uploads/2025/06/Pocket-1462x1536.png 1462w, https://fudovietnam.com/wp-content/uploads/2025/06/Pocket-1949x2048.png 1949w" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="m-ready-item">
                            <div class="m-ready-box">
                                <div class="m-ready-content flex flex-12">
                                    <div class="box">
                                        <div class="box-img">
                                            <img width="24" height="24"
                                                src="https://fudovietnam.com/wp-content/uploads/2025/06/Group.png"
                                                class="attachment-full size-full" alt="igotour" title="igotour"
                                                decoding="async" />
                                        </div>
                                        <p class="title-24 f-tt cl-sec">
                                            Tiết kiệm
                                        </p>
                                    </div>
                                    <p class="text-14">Cuộn dài – Tiết kiệm – Mượt mà. Dùng trong nhà tắm, bếp hay
                                        nơi công cộng, sạch từ chạm đầu tiên.</p>
                                </div>
                                <div class="m-ready-img">
                                    <div class="img img1">
                                        <img width="280" height="160"
                                            src="https://fudovietnam.com/wp-content/uploads/2025/06/Rectangle-2696.png"
                                            class="attachment-full size-full" alt="{{$config->web_title}}"
                                            title="{{$config->web_title}}" decoding="async" />
                                    </div>
                                    <div class="img img2">
                                        <img width="2484" height="2610"
                                            src="https://fudovietnam.com/wp-content/uploads/2025/06/Rolls.png"
                                            class="attachment-full size-full wp-post-image" alt="{{$config->web_title}}"
                                            title="{{$config->web_title}}" decoding="async"
                                            srcset="https://fudovietnam.com/wp-content/uploads/2025/06/Rolls.png 2484w, https://fudovietnam.com/wp-content/uploads/2025/06/Rolls-286x300.png 286w, https://fudovietnam.com/wp-content/uploads/2025/06/Rolls-975x1024.png 975w, https://fudovietnam.com/wp-content/uploads/2025/06/Rolls-768x807.png 768w, https://fudovietnam.com/wp-content/uploads/2025/06/Rolls-1462x1536.png 1462w, https://fudovietnam.com/wp-content/uploads/2025/06/Rolls-1949x2048.png 1949w" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="m-ready-item">
                            <div class="m-ready-box">
                                <div class="m-ready-content flex flex-12">
                                    <div class="box">
                                        <div class="box-img">
                                            <img width="24" height="24"
                                                src="https://fudovietnam.com/wp-content/uploads/2025/06/fi_13462501white.png"
                                                class="attachment-full size-full" alt="igotour" title="igotour"
                                                decoding="async" />
                                        </div>
                                        <p class="title-24 f-tt cl-sec">
                                            Tinh tế - Lịch sự
                                        </p>
                                    </div>
                                    <p class="text-14">Lịch sự – Sang trọng – Tinh tế. Phù hợp đặt bàn ăn, phòng
                                        khách, ô tô hay văn phòng tiếp khách.</p>
                                </div>
                                <div class="m-ready-img">
                                    <div class="img img1">
                                        <img width="280" height="160"
                                            src="https://fudovietnam.com/wp-content/uploads/2025/06/Rectangle-2699.png"
                                            class="attachment-full size-full" alt="{{$config->web_title}}"
                                            title="{{$config->web_title}}" decoding="async" />
                                    </div>
                                    <div class="img img2">
                                        <img width="967" height="1024"
                                            src="https://fudovietnam.com/wp-content/uploads/2025/06/fudo-box-4.png"
                                            class="attachment-full size-full wp-post-image" alt="{{$config->web_title}}"
                                            title="{{$config->web_title}}" decoding="async"
                                            srcset="https://fudovietnam.com/wp-content/uploads/2025/06/fudo-box-4.png 967w, https://fudovietnam.com/wp-content/uploads/2025/06/fudo-box-4-283x300.png 283w, https://fudovietnam.com/wp-content/uploads/2025/06/fudo-box-4-768x813.png 768w" />
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="happy">
        <div class="happy-container" data-aos="fade-up">
            <div class="happy-row row">
                <div class="happy-col col col-4">
                    <div class="happy-content flex flex-24">
                        <div class="happy-content-user">
                            <img width="192" height="64"
                                src="/site/images/customer-user.png"
                                class="attachment-full size-full" alt="{{$config->web_title}}" title="{{$config->web_title}}"
                                decoding="async" />
                            <p class="text-14">
                                10,000+ lựa chọn cho sự lành tính
                            </p>
                        </div>
                        <div class="happy-content-desc flex flex-16">
                            <h2 class="title-36 f-tt cl-pri">Đánh giá từ khách hàng
                            </h2>
                            <p class="text-16">Khách hàng chia sẻ về sản phẩm của chúng tôi</p>
                        </div>
                    </div>
                </div>
                <div class="happy-col col col-8">
                    <div class="tab-review">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach ($reviews as $item)
                                    <div class="swiper-slide">
                                        <div class="tab-review-box">
                                            <div class="tab-review-content flex flex-16">
                                                <div class="tab-review-content_author">
                                                    <img width="617" height="555"
                                                        src="{{$item->image ? $item->image->path : 'https://placehold.co/617x555'}}"
                                                        class="attachment-full size-full" alt="{{$item->name}}"
                                                        title="{{$item->name}}" decoding="async"
                                                        srcset="{{$item->image ? $item->image->path : 'https://placehold.co/617x555'}} 617w, {{$item->image ? $item->image->path : 'https://placehold.co/300x270'}} 300w" />
                                                    <div class="box">
                                                        <p class="text-14 fw-sb">{{$item->name}}</p>
                                                        <p class="text-14 fw-t">{{$item->position}}</p>
                                                    </div>
                                                </div>
                                                <p class="text-14 desc">{{$item->message}}</p>
                                                {{-- <a class="text-14 f-desc fw-sb popup-video"
                                                    href="https://www.youtube.com/watch?v=0x6ggn6vCOw">
                                                    <img src="/site/images/icon-video.svg" alt="" title=""
                                                        loading="lazy">
                                                    <span>Nhấn xem video câu chuyện</span>
                                                </a> --}}
                                            </div>
                                            <div class="tab-review-img">
                                                <div class="inner">
                                                    <img width="656" height="640"
                                                        src="{{$item->image ? $item->image->path : 'https://placeho                                                         ld.co/656x640'}}"
                                                        class="attachment-full size-full" alt="{{$item->name}}"
                                                        title="{{$item->name}}" decoding="async"
                                                        srcset="{{$item->image ? $item->image->path : 'https://placehold.co/656x640'}} 656w, {{$item->image ? $item->image->path : 'https://placehold.co/300x293'}} 300w" />
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
    </section>

    @foreach ($categorySpecialPost as $category)
    <section class="m-blog">
        <div class="container" data-aos="fade-up">
            <div class="m-blog-wrap flex flex-40">
                <h2 class="title-40 f-tt t-center cl-pri">{{$category->name}}
                </h2>
                <div class="js-blog">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach ($category->posts as $post)
                            <div class="swiper-slide">
                                <div class="article-box flex flex-16">
                                    <div class="article-date">
                                        <p class="text-20 f-tt cl-white">{{$post->created_at->format('d')}}</p>
                                        <p class="text-14 fw-sb cl-white">Th{{$post->created_at->format('m')}}</p>
                                    </div>
                                    <div class="article-img">
                                        <a class="img"
                                            href="{{route('front.detail-blog', $post->slug)}}">
                                            <img width="1244" height="700"
                                                src="{{$post->image ? $post->image->path : 'https://placehold.co/1244x700'}}"
                                                class="attachment-full size-full wp-post-image"
                                                alt="{{$post->title}}"
                                                title="{{$post->title}}"
                                                decoding="async"
                                                srcset="{{$post->image ? $post->image->path : 'https://placehold.co/1244x700'}} 1244w, {{$post->image ? $post->image->path : 'https://placehold.co/300x169'}} 300w, {{$post->image ? $post->image->path : 'https://placehold.co/1024x576'}} 1024w, {{$post->image ? $post->image->path : 'https://placehold.co/768x432'}} 768w" />
                                        </a>
                                    </div>
                                    <div class="article-content flex flex-12">
                                        <div class="article-cate">
                                            <div class="article-cate-box">
                                                <img src="/site/images/icon-user.svg" alt="" title=""
                                                    loading="lazy">
                                                <p class="text-14 fw-sb">By Admin</p>
                                            </div>
                                            <div class="article-cate-box">
                                                <img src="/site/images/icon-calendar.svg" alt=""
                                                    title="" loading="lazy">
                                                <p class="text-14 fw-sb">{{$post->created_at->format('d/m/Y')}}</p>
                                            </div>
                                        </div>
                                        <div class="article-title flex flex-8">
                                            <h3 class="text-16 f-tt">
                                                <a
                                                    href="{{route('front.detail-blog', $post->slug)}}">{{$post->name}}</a>
                                            </h3>
                                            <p class="text-14">{{$post->intro}}</p>
                                        </div>
                                        <a class="article-link text-14 f-tt cl-pri"
                                            href="{{route('front.detail-blog', $post->slug)}}">
                                            <span>Xem chi tiết</span>
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
                        {{-- <a class="text-18 fw-sb cl-pri article-link"
                            href="{{route('front.list-blog', $category->slug)}}">Xem tất cả <img
                                src="/site/images/icon-arrow.svg" alt="" title="" loading="lazy">
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach

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
