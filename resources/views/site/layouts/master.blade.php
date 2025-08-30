<!DOCTYPE html>
<html lang="vi">

<head>
    @include('site.partials.head')
    <style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css' href='/site/css/style.min.css' type='text/css' media='all' />
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css' href='/site/css/styles.css' type='text/css' media='all' />
    <link rel='stylesheet' id='mona-template-stylesheet-css' href='/site/css/stylesheet.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='mona-template-aos-css' href='/site/css/aos.css' type='text/css' media='all' />
    <link rel='stylesheet' id='mona-template-select2-css' href='/site/css/select2.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='mona-template-splide-css' href='/site/css/splide.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='mona-template-lightgallery-css' href='/site/css/lightgallery.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='mona-template-magnific-css' href='/site/css/magnific.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='mona-template-swiper-css' href='/site/css/swiper-bundle.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='mona-template-common-css' href='/site/css/common.css' type='text/css' media='all' />

    <link rel='stylesheet' id='mona-theme-main-style-css' href='/site/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='mona-theme-custom-css' href='/site/css/mona-custom.css' type='text/css' media='all' />

    @yield('css')

    <!-- Angular Js -->
    <script src="{{ asset('libs/angularjs/angular.js?v=222222') }}"></script>
    <script src="{{ asset('libs/angularjs/angular-resource.js') }}"></script>
    <script src="{{ asset('libs/angularjs/sortable.js') }}"></script>
    <script src="{{ asset('libs/dnd/dnd.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.9/angular-sanitize.js"></script>
    <script src="{{ asset('libs/angularjs/select.js') }}"></script>
    <script src="{{ asset('js/angular.js') }}?version={{ env('APP_VERSION', '1') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

    @stack('script')
    <script>
        app.controller('AppController', function($rootScope, $scope, cartItemSync, $interval, $compile) {
            $scope.currentUser = @json(Auth::guard('client')->user());
            $scope.isAdminClient = @json(Auth::guard('client')->check());
            // $scope.showMenuAdminClient = localStorage.getItem('showMenuAdminClient') ? localStorage.getItem('showMenuAdminClient') : false;

            // const currentUrl = window.location.href;
            // if (currentUrl != "{{ route('front.client-account') }}" && currentUrl != "{{ route('front.user-order') }}" && currentUrl != "{{ route('front.user-revenue') }}" && currentUrl != "{{ route('front.user-level') }}") {
            //     $scope.showMenuAdminClient = false;
            //     localStorage.removeItem('showMenuAdminClient');
            // }

            // $scope.changeMenuClient = function($event, url){
            //     $event.preventDefault();
            //     $scope.showMenuAdminClient = !$scope.showMenuAdminClient;
            //     if(url == '{{ route('front.user-order') }}' || url == '{{ route('front.user-revenue') }}' || url == '{{ route('front.user-level') }}') {
            //         $scope.showMenuAdminClient = true;
            //     }

            //     if($scope.showMenuAdminClient){
            //         localStorage.setItem('showMenuAdminClient', $scope.showMenuAdminClient);
            //         window.location.href = url;
            //     }else{
            //         localStorage.removeItem('showMenuAdminClient');
            //         window.location.href = '{{ route('front.home-page') }}';
            //     }
            // }

            // Biên dịch lại nội dung bên trong container
            // var container = angular.element(document.getElementsByClassName('item_product_main'));
            // $compile(container.contents())($scope);

            var popup = angular.element(document.getElementById('popup-cart-mobile'));
            $compile(popup.contents())($scope);

            var quickView = angular.element(document.getElementById('quick-view-product'));
            $compile(quickView.contents())($scope);

            // Đặt mua hàng
            $scope.hasItemInCart = false;
            $scope.cart = cartItemSync;
            $scope.item_qty = 1;
            $scope.quantity_quickview = 1;
            $scope.noti_product = {};

            $scope.addToCart = function(productId, quantity = 1) {
                url = "{{ route('cart.add.item', ['productId' => 'productId']) }}";
                url = url.replace('productId', productId);
                let item_qty = quantity;

                jQuery.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    data: {
                        'qty': parseInt(item_qty)
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
                            // toastr.success('Thao tác thành công !')
                            $scope.noti_product = response.noti_product;
                            $scope.$applyAsync();
                            console.log($scope.noti_product);

                            $('#popup-cart-mobile').addClass('active');
                            $('.backdrop__body-backdrop___1rvky').addClass('active');
                            $('#quick-view-product.quickview-product').hide();
                        }
                    },
                    error: function() {
                        toastr.error('Thao tác thất bại !')
                    },
                    complete: function() {
                        $scope.$applyAsync();
                    }
                });
                // if ($scope.isAdminClient) {
                // } else {
                //     window.location.href = "{{ route('front.login-client') }}";
                // }
            }

            $scope.changeQty = function(qty, product_id) {
                updateCart(qty, product_id)
            }

            $scope.incrementQuantity = function(product) {
                product.quantity = Math.min(product.quantity + 1, 9999);
            };

            $scope.decrementQuantity = function(product) {
                product.quantity = Math.max(product.quantity - 1, 0);
            };

            function updateCart(qty, product_id) {
                jQuery.ajax({
                    type: 'POST',
                    url: "{{ route('cart.update.item') }}",
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    data: {
                        product_id: product_id,
                        qty: qty
                    },
                    success: function(response) {
                        if (response.success) {
                            $scope.items = response.items;
                            $scope.total = response.total;
                            $scope.total_qty = response.count;
                            $interval.cancel($rootScope.promise);

                            $rootScope.promise = $interval(function() {
                                cartItemSync.items = response.items;
                                cartItemSync.total = response.total;
                                cartItemSync.count = response.count;
                            }, 1000);

                            $scope.$applyAsync();
                        }
                    },
                    error: function(e) {
                        toastr.error('Đã có lỗi xảy ra');
                    },
                    complete: function() {
                        $scope.$applyAsync();
                    }
                });
            }

            // xóa item trong giỏ
            $scope.removeItem = function(product_id) {
                jQuery.ajax({
                    type: 'GET',
                    url: "{{ route('cart.remove.item') }}",
                    data: {
                        product_id: product_id
                    },
                    success: function(response) {
                        if (response.success) {
                            $scope.cart.items = response.items;
                            $scope.cart.count = Object.keys($scope.cart.items).length;
                            $scope.cart.totalCost = response.total;

                            $interval.cancel($rootScope.promise);

                            $rootScope.promise = $interval(function() {
                                cartItemSync.items = response.items;
                                cartItemSync.total = response.total;
                                cartItemSync.count = response.count;
                            }, 1000);

                            if ($scope.cart.count == 0) {
                                $scope.hasItemInCart = false;
                            }
                            $scope.$applyAsync();
                        }
                    },
                    error: function(e) {
                        jQuery.toast.error('Đã có lỗi xảy ra');
                    },
                    complete: function() {
                        $scope.$applyAsync();
                    }
                });
            }

            // Xem nhanh
            $scope.quickViewProduct = {};
            $scope.showQuickView = function(productId) {
                $.ajax({
                    url: "{{ route('front.get-product-quick-view') }}",
                    type: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    data: {
                        product_id: productId
                    },
                    success: function(response) {
                        $('#quick-view-product .quick-view-product').html(response.html);
                        var quickView = angular.element(document.getElementById(
                            'quick-view-product'));
                        $compile(quickView.contents())($scope);
                        $scope.$applyAsync();
                    },
                    error: function(e) {
                        toastr.error('Đã có lỗi xảy ra');
                    },
                    complete: function() {
                        $scope.$applyAsync();
                    }
                });
            }

            // Search product
            jQuery('#live-search').keyup(function() {
                var keyword = jQuery(this).val();
                jQuery.ajax({
                    type: 'post',
                    url: '{{ route('front.auto-search-complete') }}',
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        keyword: keyword
                    },
                    success: function(data) {
                        jQuery('.live-search-results').html(data.html);
                    }
                })
            });
        })

        app.factory('cartItemSync', function($interval) {
            var cart = {
                items: null,
                total: null
            };

            cart.items = @json($cartItems);
            cart.count = {{ $cartItems->sum('quantity') }};
            cart.total = {{ $totalPriceCart }};

            return cart;
        });

        @if (Session::has('token'))
            localStorage.setItem('{{ env('prefix') }}-token', "{{ Session::get('token') }}")
        @endif
        @if (Session::has('logout'))
            localStorage.removeItem('{{ env('prefix') }}-token');
        @endif
        var CSRF_TOKEN = "{{ csrf_token() }}";
        @if (Auth::guard('client')->check())
            const DEFAULT_CLIENT_USER = {
                id: "{{ Auth::guard('client')->user()->id }}",
                fullname: "{{ Auth::guard('client')->user()->name }}"
            };
        @else
            const DEFAULT_CLIENT_USER = null;
        @endif
    </script>
</head>

<body class="home page-template-default page page-id-9 wp-custom-logo desktop-detect p-home p-blog-detail"
    ng-app="App" ng-controller="AppController">
    @include('site.partials.header')
    @yield('content')
    @include('site.partials.footer')
    <div class="popup popup-js" data-popup="popup-1">
        <div class="popup-overlay popupOver-js"></div>
        <div class="popup-main">
            <div class="img">
                <img src="/site/images/icon-popup.svg" alt="" title="" loading="lazy">
            </div>
            <div class="popup-close popupClose-js">
                <img src="/site/images/icon-close.svg" alt="" title="" loading="lazy">
            </div>
            <div class="popup-wrap">
                <div class="contact-form tabJS flex flex-40">
                    <h2 class="title-40 f-tt">Nhận báo giá ngay</h2>
                    <div class="wpcf7 no-js" id="wpcf7-f508-o2" lang="vi" dir="ltr" data-wpcf7-id="508">
                        <div class="screen-reader-response">
                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                            <ul></ul>
                        </div>
                        <form action="/#wpcf7-f508-o2" method="post" class="wpcf7-form init"
                            aria-label="Form liên hệ" novalidate="novalidate" data-status="init">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="508" />
                                <input type="hidden" name="_wpcf7_version" value="6.0.6" />
                                <input type="hidden" name="_wpcf7_locale" value="vi" />
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f508-o2" />
                                <input type="hidden" name="_wpcf7_container_post" value="0" />
                                <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                            </div>
                            <div class="form-wrap">
                                <div class="form-group form-field">
                                    <div class="form-box">
                                        <label class="form-label" for="">
                                            <span class="form-text">Họ và tên</span>
                                            <span class="wpcf7-form-control-wrap" data-name="your-name"><input
                                                    size="40" maxlength="400"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-input"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Nhập họ và tên" value="" type="text"
                                                    name="your-name" /></span>
                                        </label>
                                    </div>
                                    <div class="form-box">
                                        <label class="form-label" for="">
                                            <span class="form-text">Tên công ty</span>
                                            <span class="wpcf7-form-control-wrap" data-name="your-company"><input
                                                    size="40" maxlength="400"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-input"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Nhập tên công ty" value="" type="text"
                                                    name="your-company" /></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group form-field">
                                    <div class="form-box">
                                        <label class="form-label" for="">
                                            <span class="form-text">Số điện thoại</span>
                                            <span class="wpcf7-form-control-wrap" data-name="your-tel"><input
                                                    size="40" maxlength="400"
                                                    class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel form-input"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Nhập số điện thoại" value="" type="tel"
                                                    name="your-tel" /></span>
                                        </label>
                                    </div>
                                    <div class="form-box">
                                        <label class="form-label" for="">
                                            <span class="form-text">Email</span>
                                            <span class="wpcf7-form-control-wrap" data-name="your-email"><input
                                                    size="40" maxlength="400"
                                                    class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form-input"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Nhập email" value="" type="email"
                                                    name="your-email" /></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">
                                        <span class="form-label">Xem sản phẩm tại</span>
                                        <span class="wpcf7-form-control-wrap" data-name="your-messenger">
                                            <textarea cols="40" rows="10" maxlength="2000" class="wpcf7-form-control wpcf7-textarea form-textarea"
                                                aria-invalid="false" placeholder="Nhập nội dung" name="your-messenger"></textarea>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-action">
                                    <label class="btn" for="submitPopup">
                                        <span>Gửi thông tin ngay</span>
                                        <img src="/site/images/icon-arrow (1).svg" alt="" title=""
                                            loading="lazy"
                                            style="width: 3.6rem; height: 3.6rem; object-fit: contain; padding: 0.8rem; border-radius: 50%; background-color: #fff;">
                                        <input class="wpcf7-form-control wpcf7-submit has-spinner" id="submitPopup"
                                            type="submit" value="Gửi đi" />
                                    </label>
                                </div>
                            </div>
                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                        </form>
                    </div>
                </div>
                <div class="contact">
                    <a href="http://https//zalo.me/{{ $config->zalo }}">
                        <p class="text-14 fs-i">Hoặc liên hệ nhanh qua <img src="/site/images/e3-1.svg"
                                class="attachment-full size-full" alt="{{ $config->web_title }}"
                                title="{{ $config->web_title }}" decoding="async" loading="lazy" /> </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="/site/js/aos.js" id="mona-template-aos-js" defer="defer" data-wp-strategy="defer">
    </script>
    <script type="text/javascript" src="/site/js/jquery.matchHeight.js" id="mona-template-jquery-matchHeight-js"
        defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="/site/js/splide.min.js" id="mona-template-splide-js" defer="defer"
        data-wp-strategy="defer"></script>
    <script type="text/javascript" src="/site/js/lightgallery-all.min.js" id="mona-template-lightgallery-js" defer="defer"
        data-wp-strategy="defer"></script>
    <script type="text/javascript" src="/site/js/splide-extension-auto-scroll.min.js" id="mona-template-splide-extension-js"
        defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="/site/js/magnific.js" id="mona-template-magnific-js" defer="defer"
        data-wp-strategy="defer"></script>
    <script type="text/javascript" src="/site/js/swiper-bundle.min.js" id="mona-template-swiper-js" defer="defer"
        data-wp-strategy="defer"></script>
    <script type="module" type="text/javascript" src="/site/js/main.js" id="mona-template-main-js" defer="defer"
        data-wp-strategy="defer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</body>

</html>
