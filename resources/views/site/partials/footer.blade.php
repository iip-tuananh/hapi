<footer class="footer js-footer pt-10">
    <div class="container container-pri">
        <div class="footer-wrap flex flex-40">
            <div class="footer-top row">
                <div class="footer-left col col-3">
                    <a class="custom-logo-link" href="{{ route('front.home-page') }}">
                        <img width="768" height="279"
                            src="{{ $config->image ? $config->image->path : 'https://placehold.co/768x279' }}"
                            class="attachment-full size-full" alt="{{ $config->web_title }}"
                            title="{{ $config->web_title }}" decoding="async" loading="lazy" />
                    </a>
                </div>
                <div class="footer-right col col-9">
                    <div class="footer-row row">
                        <div class="footer-col col col-6">
                            <div class="footer-box flex flex-24">
                                <p class="text-16 cl-sec">{!! $config->web_des !!}</p>
                                <ul class="footer-list flex flex-12">
                                    <li class="footer-item">
                                        <img src="/site/images/icon-file.svg" class="attachment-full size-full"
                                            alt="{{$config->web_title}}" title="{{$config->web_title}}" decoding="async"
                                            loading="lazy" />
                                        <p class="text-14 cl-sec">
                                            MST: {{ $config->tax_code }}
                                        </p>
                                    </li>
                                    <li class="footer-item">
                                        <img src="/site/images/icon-location.svg" class="attachment-full size-full"
                                            alt="{{$config->web_title}}" title="{{$config->web_title}}" decoding="async"
                                            loading="lazy" />
                                        <p class="text-14 cl-sec">
                                            <a href="{{ $config->map_link }}"
                                                target="_blank">{{ $config->address_company }}</a>
                                        </p>
                                    </li>
                                    <li class="footer-item">
                                        <img src="/site/images/icon-mail.svg" class="attachment-full size-full"
                                            alt="{{$config->web_title}}" title="{{$config->web_title}}" decoding="async"
                                            loading="lazy" />
                                        <p class="text-14 cl-sec">
                                            <a href="mailto:{{ $config->email }}"
                                                target="_blank">{{ $config->email }}</a>
                                        </p>
                                    </li>
                                    <li class="footer-item">
                                        <img src="/site/images/icon-phone.svg" class="attachment-full size-full"
                                            alt="{{$config->web_title}}" title="{{$config->web_title}}" decoding="async"
                                            loading="lazy" />
                                        <p class="text-14 cl-sec">
                                            <a href="tel:{{ str_replace(' ', '', $config->hotline) }}"
                                                target="_blank">{{ $config->hotline }}</a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-col col col-6">
                            <div class="footer-box flex flex-24">
                                <div class="footer-form flex flex-16">
                                    <p class="text-20 f-tt cl-sec">Bắt đầu ngày mới cùng {{ $config->web_title }}! </p>
                                    <div class="wpcf7 no-js" id="wpcf7-f7-o1" lang="vi" dir="ltr"
                                        data-wpcf7-id="7">
                                        <div class="screen-reader-response">
                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                            <ul></ul>
                                        </div>
                                        <form action="{{ route('front.post-contact') }}" method="post"
                                            class="wpcf7-form init" aria-label="Form liên hệ" novalidate="novalidate"
                                            data-status="init">
                                            <div class="form-wrap">
                                                <div class="form-group">
                                                    <label class="form-label">
                                                        <span class="wpcf7-form-control-wrap"
                                                            data-name="your-email"><input size="40" maxlength="400"
                                                                class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="Email nhận ưu đãi" value=""
                                                                type="email" name="your-email" /></span>
                                                        <label class="btn btn-pri" for="submitFooter">
                                                            <span>Gửi tin cho tôi!</span>
                                                            <input class="wpcf7-form-control wpcf7-submit has-spinner"
                                                                id="submitFooter" type="submit" value="Gửi đi" />
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                                        </form>
                                    </div>
                                </div>
                                <ul class="social">
                                    <li class="social-item">
                                        <a href="{{$config->youtube}}" target="_blank">
                                            <img src="/site/images/icon-youtube.svg"
                                                class="attachment-full size-full" alt="{{$config->web_title}}"
                                                title="{{$config->web_title}}" decoding="async" loading="lazy" />
                                        </a>
                                    </li>
                                    <li class="social-item">
                                        <a href="{{$config->facebook}}" target="_blank">
                                            <img src="/site/images/icon-face.svg"
                                                class="attachment-full size-full" alt="{{$config->web_title}}"
                                                title="{{$config->web_title}}" decoding="async" loading="lazy" />
                                        </a>
                                    </li>
                                    <li class="social-item">
                                        <a href="{{$config->instagram}}" target="_blank">
                                            <img src="/site/images/icon-ins.svg"
                                                class="attachment-full size-full" alt="{{$config->web_title}}"
                                                title="{{$config->web_title}}" decoding="async" loading="lazy" />
                                        </a>
                                    </li>
                                    <li class="social-item">
                                        <a href="{{$config->tiktok}}" target="_blank">
                                            <img src="/site/images/icon-tiktok.svg"
                                                class="attachment-full size-full" alt="{{$config->web_title}}"
                                                title="{{$config->web_title}}" decoding="async" loading="lazy" />
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="desc">
                    <img src="/site/images/footer-c.png" alt="" title="" loading="lazy">
                    <p class="text-14 cl-white">Bản quyền thuộc về {{$config->web_title}}</p>
                </div>
                <a class="img img-1" href="#!">
                    <img src="/site/images/footer1.png" alt="" title="" loading="lazy">
                </a>
                <a class="img img-2" href="#!">
                    <img src="/site/images/footer2.png" alt="" title="" loading="lazy">
                </a>
            </div>
        </div>
    </div>
</footer>
<div class="move-top backToTop">
    <div class="move-top-social">
        <a href="https://zalo.me/{{$config->zalo}}">
            <img src="/site/images/icon-zalo (1).svg"
                class="attachment-full size-full" alt="{{$config->web_title}}" title="{{$config->web_title}}" decoding="async"
                loading="lazy" /> </a>
    </div>
    <div class="move-top-social">
        <a href="{{$config->facebook}}">
            <img src="/site/images/icon-mess.svg"
                class="attachment-full size-full" alt="{{$config->web_title}}" title="{{$config->web_title}}" decoding="async"
                loading="lazy" /> </a>
    </div>
    {{-- <div class="move-top-social">
        <a href="https://zalo.me/{{$config->zalo}}">
            <img src="/site/images/icon-chat.svg"
                class="attachment-full size-full" alt="{{$config->web_title}}" title="{{$config->web_title}}" decoding="async"
                loading="lazy" /> </a>
    </div> --}}
    <div class="progress-wrap">
        <svg class="progress-circle" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
            viewbox="0 0 32 32" fill="none">
            <circle class="progress-path" cx="16" cy="16" r="16" fill="#FCA61A"></circle>
        </svg>
        <div class="inner">
            <img src="/site/images/icon-scrolltop.svg" alt="" title="" loading="lazy">
        </div>
    </div>
</div>
