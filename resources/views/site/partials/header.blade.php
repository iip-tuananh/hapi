<header class="header js-header">
    <div class="container container-pri">
        <div class="header-main">
            <a href="{{route('front.home-page')}}" class="custom-logo-link" rel="home" aria-current="page"><img
                    width="768" height="279"
                    src="{{ $config->image ? $config->image->path : 'https://placehold.co/768x279' }}" class="custom-logo"
                    alt="{{ $config->web_title }}" decoding="async" fetchpriority="high"
                    srcset="{{ $config->image ? $config->image->path : 'https://placehold.co/768x279' }} 768w, {{ $config->image ? $config->image->path : 'https://placehold.co/300x109' }} 300w" /></a>
            <nav class="header-nav js-menu">
                <div class="menu-close-icon">
                    <img src="/site/images/icon-close.svg" alt="" title="" loading="lazy">
                </div>
                <ul id="menu-main-menu" class="menu">
                    <li class=' menu-item menu-item-type-post_type menu-item-object-page'><a class="menu-link"
                        href="{{route('front.home-page')}}"
                        title="Trang chủ">Trang chủ</a></li>
                    <li class=' menu-item menu-item-type-post_type menu-item-object-page'><a class="menu-link"
                        href="{{route('front.about-us')}}"
                        title="Giới thiệu">Giới thiệu</a></li>

                    <li
                        class=' menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-dropdown js-dropdown'>
                        <a class="menu-link" href="javascript:;" title="Sản phẩm">Sản
                            phẩm</a><img src="/site/images/icon-chevron.svg" alt="Icon down" loading="lazy">
                        <ul class='child js-child0'>
                            @foreach ($listProduct as $product)
                            <li class=' menu-item menu-item-type-post_type menu-item-object-product'><a
                                    class="menu-link" href="{{route('front.show-product-detail', $product->slug)}}"
                                    title="{{$product->name}}">{{$product->name}}</a></li>
                            @endforeach

                        </ul>
                    </li>
                    <li
                        class=' menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-dropdown js-dropdown'>
                        <a class="menu-link" href="javascript:;" title="Chính sách">Chính sách</a><img
                            src="/site/images/icon-chevron.svg" alt="Icon down" loading="lazy">
                        <ul class='child js-child0'>
                            @foreach ($policies as $policy)
                            <li class=' menu-item menu-item-type-post_type menu-item-object-page'><a
                                    class="menu-link" href="{{route('front.policy-detail', $policy->slug)}}" title="{{$policy->title}}">{{$policy->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @foreach ($postCategories as $postCategory)
                    <li class=' menu-item menu-item-type-post_type menu-item-object-page'><a class="menu-link"
                            href="{{route('front.list-blog', $postCategory->slug)}}" title="{{$postCategory->name}}">{{$postCategory->name}}</a></li>
                    @endforeach
                    <li class=' menu-item menu-item-type-post_type menu-item-object-page'><a class="menu-link"
                            href="{{route('front.faqs')}}" title="FAQs">FAQs</a></li>
                    <li class=' menu-item menu-item-type-post_type menu-item-object-page'><a class="menu-link"
                            href="{{route('front.contact-us')}}" title="Liên hệ">Liên hệ</a></li>
                </ul>
                <div class="header-nav-btn">
                    <a class="btn" href="https://zalo.me/{{$config->zalo}}"><span>Đặt hàng</span></a>
                </div>
                <div class="header-info">
                    <ul class="footer-list flex flex-12">
                        <li class="footer-item">
                            <img src="/site/images/icon-file.svg"
                                class="attachment-full size-full" alt="{{$config->web_title}}" title="{{$config->web_title}}"
                                decoding="async" />
                            <p class="text-14 cl-white">
                                MST: {{$config->tax_code}}
                            </p>
                        </li>
                        <li class="footer-item">
                            <img src="/site/images/icon-location.svg"
                                class="attachment-full size-full" alt="{{$config->web_title}}" title="{{$config->web_title}}"
                                decoding="async" />
                            <p class="text-14 cl-white">
                                <a href="{{$config->map_link}}"
                                    target="_blank">{{$config->address_company}}</a>
                            </p>
                        </li>
                        <li class="footer-item">
                            <img src="/site/images/icon-mail.svg"
                                class="attachment-full size-full" alt="{{$config->web_title}}" title="{{$config->web_title}}"
                                decoding="async" />
                            <p class="text-14 cl-white">
                                <a href="mailto:{{$config->email}}" target="_blank">{{$config->email}}</a>
                            </p>
                        </li>
                        <li class="footer-item">
                            <img src="/site/images/icon-phone.svg"
                                class="attachment-full size-full" alt="{{$config->web_title}}" title="{{$config->web_title}}"
                                decoding="async" />
                            <p class="text-14 cl-white">
                                <a href="tel:{{str_replace(' ', '', $config->hotline)}}" target="_blank">{{$config->hotline}}</a>
                            </p>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="header-action">
                <div class="header-search js-menu-search">
                    <div class="search">
                        <img src="/site/images/icon-search.svg" alt="" title="" loading="lazy">
                    </div>
                    <div class="menu-search">
                        <div class="menu-search-box">
                            <form id="searchform" class="form" method="get"
                                action="{{route('front.search')}}">
                                <div class="form-group">
                                    <label>
                                        <input id="search" name="keyword" class="js-search" type="text"
                                            placeholder="Tìm kiếm" required />
                                        <button id="button-search" name="button-search" type="submit"
                                            value="Tìm kiếm">
                                            <img src="/site/images/icon-search.svg" alt="" title=""
                                                loading="lazy">
                                        </button>
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-btn">
                    <a class="btn" href="https://zalo.me/{{$config->zalo}}">
                        <span>Đặt hàng</span>
                        <img src="/site/images/icon-arrow (1).svg" alt="" title="" loading="lazy" style="width: 3.6rem; height: 3.6rem; object-fit: contain; padding: 0.8rem; border-radius: 50%; background-color: #fff;">
                    </a>
                </div>
            </div>
            <div class="menu-bar js-bar">
                <div class="menu-span">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</header>
