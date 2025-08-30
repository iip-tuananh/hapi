@extends('site.layouts.master')
@section('title')
    Liên hệ
@endsection
@section('description')
    {{ $config->web_des }}
@endsection
@section('image')
    {{ url('' . $banners[0]->image->path) }}
@endsection
@section('css')
    <link href="/site/css/contact_style.scss.css?1743048451127" rel="stylesheet" type="text/css" media="all" />
    <style>
        .invalid-feedback.error {
            color: rgb(161, 3, 3);
            font-size: 1.4rem;
        }
    </style>
@endsection

@section('content')
    <main class="main">
        <section class="hero">
            <div class="hero-bg"></div>
            <div class="hero-position">
                <div class="container">
                    <div class="hero-info flex">
                        <div class="breadcrumb">
                            <div class="container" data-aos="fade-in">
                                <div class="breadcrumb-wrap">
                                    <ul class="breadcrumb-list">
                                        <li class="breadcrumb-item ">
                                            <a href="{{ route('front.home-page') }}" target="_self">
                                                Trang chủ </a>
                                        </li>
                                        <li class="breadcrumb-item is-current">
                                            <span>Liên hệ</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="hero-content flex flex-24">
                            <h1 class="title-64 f-tt t-center" data-aos="fade-up">Liên hệ với chúng tôi</h1>
                            <div class="img" data-aos="fade-up">
                                <img width="1866" height="1183" src="/site/images/contact-bg.png"
                                    class="attachment-full size-full" alt="{{ $config->web_title }}"
                                    title="{{ $config->web_title }}" decoding="async"
                                    srcset="/site/images/contact-bg.png 1866w, /site/images/contact-bg-300x190.png 300w, /site/images/contact-bg-1024x649.png 1024w, /site/images/contact-bg-768x487.png 768w, /site/images/contact-bg-1536x974.png 1536w" />
                                <a class="btn-zalo" href="https://zalo.me/{{ $config->zalo }}">
                                    <div class="icon">
                                        <img src="/site/images/icon-zalo.svg" alt="" title="" loading="lazy">
                                    </div>
                                    <span>Nhắn tin với Zalo OA</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact" ng-controller="ContactUsController" ng-cloak>
            <div class="container" data-aos="fade-in">
                <div class="contact-row row">
                    <div class="contact-col col col-6">
                        <div class="contact-info flex flex-40">
                            <h2 class="title-40 f-tt">{{ $config->short_name_company }}</h2>
                            <ul class="contact-list flex flex-20">
                                <li class="contact-item">
                                    <p class="contact-item-title text-16 f-tt">Mã số thuế</p>
                                    <p class="contact-item-text text-16">{{ $config->tax_code }}</p>
                                </li>
                                <li class="contact-item">
                                    <p class="contact-item-title text-16 f-tt">Địa chỉ</p>
                                    <p class="contact-item-text text-16">
                                        <a href="" target="_blank">
                                            {{ $config->address_company }} </a>
                                    </p>
                                </li>
                                <li class="contact-item">
                                    <p class="contact-item-title text-16 f-tt">Email</p>
                                    <p class="contact-item-text text-16">
                                        <a href="mailto:{{ $config->email }}" target="_blank">
                                            {{ $config->email }} </a>
                                    </p>
                                </li>
                                <li class="contact-item">
                                    <p class="contact-item-title text-16 f-tt">Hotline</p>
                                    <p class="contact-item-text text-16">
                                        <a href="tel:{{ str_replace(' ', '', $config->hotline) }}" target="_blank">
                                            {{ $config->hotline }} </a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-col col col-6">
                        <div class="contact-form tabJS flex">
                            <h2 class="title-40 f-tt">Kết nối với chúng tôi</h2>
                            <ul class="contact-form-list" style="display: none;">
                                <li class="contact-form-item tabBtn active">
                                    <p class="text-16 cl-sec f-tt">Khách hàng cá nhân</p>
                                </li>
                            </ul>
                            <div class="tabPanel">
                                <div class="wpcf7 no-js" id="wpcf7-f77-o1" lang="vi" dir="ltr" data-wpcf7-id="77">
                                    <div class="screen-reader-response">
                                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                                        <ul></ul>
                                    </div>
                                    <form class="wpcf7-form init" aria-label="Form liên hệ" novalidate="novalidate"
                                        data-status="init">
                                        <div class="form-wrap">
                                            <div class="form-group form-field">
                                                <label class="form-label" for="">
                                                    <span class="form-text">Họ và tên</span>
                                                    <span class="wpcf7-form-control-wrap" data-name="your-name">
                                                        <input size="40" maxlength="400"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-input"
                                                            aria-required="true" aria-invalid="false"
                                                            placeholder="Nhập họ và tên" value="" type="text"
                                                            ng-model="your_name" />
                                                    </span>
                                                    <div class="invalid-feedback d-block error" role="alert">
                                                        <span ng-if="errors && errors.your_name">
                                                            <% errors.your_name[0] %>
                                                        </span>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="form-group form-field">
                                                <label class="form-label" for="">
                                                    <span class="form-text">Số điện thoại</span>
                                                    <span class="wpcf7-form-control-wrap" data-name="your-tel"><input
                                                            size="40" maxlength="400"
                                                            class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel form-input"
                                                            aria-required="true" aria-invalid="false"
                                                            placeholder="Nhập số điện thoại" value=""
                                                            type="tel" ng-model="your_phone" /></span>
                                                    <div class="invalid-feedback d-block error" role="alert">
                                                        <span ng-if="errors && errors.your_phone">
                                                            <% errors.your_phone[0] %>
                                                        </span>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="">
                                                    <span class="form-text">Email</span>
                                                    <span class="wpcf7-form-control-wrap" data-name="your-email"><input
                                                            size="40" maxlength="400"
                                                            class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form-input"
                                                            aria-required="true" aria-invalid="false"
                                                            placeholder="Nhập email" value="" type="email"
                                                            ng-model="your_email" /></span>
                                                    <div class="invalid-feedback d-block error" role="alert">
                                                        <span ng-if="errors && errors.your_email">
                                                            <% errors.your_email[0] %>
                                                        </span>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">
                                                    <span class="form-label">Ghi chú (nếu có)</span>
                                                    <span class="wpcf7-form-control-wrap" data-name="your-message">
                                                        <textarea cols="40" rows="10" maxlength="2000" class="wpcf7-form-control wpcf7-textarea form-textarea"
                                                            aria-invalid="false" placeholder="Nhập nội dung" ng-model="your_message"></textarea>
                                                    </span>
                                                    <div class="invalid-feedback d-block error" role="alert">
                                                        <span ng-if="errors && errors.your_message">
                                                            <% errors.your_message[0] %>
                                                        </span>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="form-action">
                                                <label class="btn" for="submitClient">
                                                    <span>Gửi thông tin ngay</span>
                                                    <img src="/site/images/icon-arrow (1).svg" alt="" title=""
                                                        loading="lazy" style="width: 3.6rem; height: 3.6rem; object-fit: contain; padding: 0.8rem; border-radius: 50%; background-color: #fff;">
                                                    <input class="wpcf7-form-control wpcf7-submit has-spinner"
                                                        id="submitClient" type="submit" value="Gửi đi"
                                                        ng-click="submitContact()" ng-disabled="loading" />
                                                </label>
                                            </div>
                                        </div>
                                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('script')
    <script>
        app.controller('ContactUsController', function($scope, $http) {
            $scope.loading = false;
            $scope.errors = {};
            $scope.submitContact = function() {
                $scope.loading = true;
                let data = {
                    your_name: $scope.your_name,
                    your_email: $scope.your_email,
                    your_phone: $scope.your_phone,
                    your_message: $scope.your_message
                };
                jQuery.ajax({
                    url: '{{ route('front.post-contact') }}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    data: data,
                    success: function(response) {
                        if (response.success) {
                            toastr.success('Thao tác thành công !')
                        } else {
                            $scope.errors = response.errors;
                            toastr.error('Thao tác thất bại !')
                        }
                    },
                    error: function() {
                        toastr.error('Thao tác thất bại !')
                    },
                    complete: function() {
                        $scope.$applyAsync();
                        $scope.loading = false;
                    }
                });
            };
        });
    </script>
@endpush
