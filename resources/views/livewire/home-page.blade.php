<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Header Section-->
    <div class="mb-0" id="home">
        <!--begin::Wrapper-->
        <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url('{{ asset('assets/media/svg/illustrations/landing.svg') }}')">
            <!--begin::Header-->
            <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center justify-content-between">
                        <!--begin::Logo-->
                        <div class="d-flex align-items-center flex-equal">
                            <!--begin::Mobile menu toggle-->
                            <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
                                <i class="ki-outline ki-abstract-14 fs-2hx"></i>
                            </button>
                            <!--end::Mobile menu toggle-->
                            <!--begin::Logo image-->
                            <a href="/">
                                <img alt="Logo" src="{{ asset('assets/media/logos/logo.png') }}" class="logo-default h-25px h-lg-30px" />
                                <img alt="Logo" src="{{ asset('assets/media/logos/logo.png') }}" class="logo-sticky h-20px h-lg-25px" />
                            </a>
                            <!--end::Logo image-->
                        </div>
                        <!--end::Logo-->
                        <!--begin::Menu wrapper-->
                        <div class="d-lg-block" id="kt_header_nav_wrapper">
                            <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                <!--begin::Menu-->
                                <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold" id="kt_landing_menu">
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#kt_body" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Trang chủ</a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#benefit" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Lợi ích</a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#about_us" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Về chúng tôi</a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#customer" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Khách hàng nói về chúng tôi</a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Menu wrapper-->
                            <!--begin::Toolbar-->
                            <div class="flex-equal text-end ms-1">
                                @guest()
                                    <a href="{{ route('login') }}" class="btn btn-success">Đăng nhập</a>
                                @endguest
                            </div>
                            <!--end::Toolbar-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Landing hero-->
            <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
                <!--begin::Heading-->
                <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                    <!--begin::Title-->
                    <h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">Hệ thống mua bán like sub rẻ nhất thị trường
                        <br/>
                        <span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
								<span id="kt_landing_hero_text">Dịch vụ like sub tốt nhất vũ trụ</span>
                        </span>
                    </h1>
                    <!--end::Title-->
                    <!--begin::Action-->
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">Sử dụng ngay</a>
                    <!--end::Action-->
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Landing hero-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Curve bottom-->
        <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
            <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
            </svg>
        </div>
        <!--end::Curve bottom-->
    </div>
    <!--end::Header Section-->
    <!--begin::How It Works Section-->
    <div class="mb-n10 mb-lg-n20 z-index-2">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Heading-->
            <div class="text-center mb-17">
                <!--begin::Title-->
                <h3 class="fs-2hx text-dark mb-5" id="benefit" data-kt-scroll-offset="{default: 100, lg: 150}">Lợi ích khi sử dụng dịch vụ</h3>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="fs-5 text-muted fw-bold px-20">Dịch vụ tăng like, sub Facebook mang lại nhiều lợi ích cho cả doanh nghiệp và cá nhân. Nếu bạn đang tìm kiếm một cách để tăng độ nhận diện thương hiệu, thu hút khách hàng tiềm năng và tăng tương tác trên Facebook, thì dịch vụ tăng like, sub Facebook là một lựa chọn phù hợp.</div>
                <!--end::Text-->
            </div>
            <!--end::Heading-->
            <!--begin::Row-->
            <div class="row w-100 gy-10 mb-md-20">
                <!--begin::Col-->
                <div class="col-md-4 px-5">
                    <!--begin::Story-->
                    <div class="text-center mb-10 mb-md-0">
                        <!--begin::Illustration-->
                        <img src="{{ asset('assets/media/illustrations/sketchy-1/2.png') }}" class="mh-125px mb-9" alt="" />
                        <!--end::Illustration-->
                        <!--begin::Heading-->
                        <div class="d-flex flex-center mb-5">
                            <!--begin::Badge-->
                            <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">1</span>
                            <!--end::Badge-->
                            <!--begin::Title-->
                            <div class="fs-5 fs-lg-3 fw-bold text-dark">Tăng độ nhận diện thương hiệu</div>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Description-->
                        <div class="fw-semibold fs-6 fs-lg-5 text-muted">Like, sub Facebook là một trong những yếu tố quan trọng để đánh giá mức độ phổ biến của một trang Facebook. Một trang có nhiều like, sub sẽ được nhiều người biết đến hơn.</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Story-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4 px-5">
                    <!--begin::Story-->
                    <div class="text-center mb-10 mb-md-0">
                        <!--begin::Illustration-->
                        <img src="{{ asset('assets/media/illustrations/sketchy-1/8.png') }}" class="mh-125px mb-9" alt="" />
                        <!--end::Illustration-->
                        <!--begin::Heading-->
                        <div class="d-flex flex-center mb-5">
                            <!--begin::Badge-->
                            <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">2</span>
                            <!--end::Badge-->
                            <!--begin::Title-->
                            <div class="fs-5 fs-lg-3 fw-bold text-dark">Thu hút khách hàng tiềm năng</div>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Description-->
                        <div class="fw-semibold fs-5 fs-lg-6 text-muted">Like, sub Facebook là một cách để tiếp cận khách hàng tiềm năng. Khi có nhiều like, sub, trang Facebook của bạn sẽ được hiển thị nhiều hơn trong kết quả tìm kiếm, giúp bạn tiếp cận được nhiều khách hàng tiềm năng hơn.</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Story-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4 px-5">
                    <!--begin::Story-->
                    <div class="text-center mb-10 mb-md-0">
                        <!--begin::Illustration-->
                        <img src="{{ asset('assets/media/illustrations/sketchy-1/12.png') }}" class="mh-125px mb-9" alt="" />
                        <!--end::Illustration-->
                        <!--begin::Heading-->
                        <div class="d-flex flex-center mb-5">
                            <!--begin::Badge-->
                            <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">3</span>
                            <!--end::Badge-->
                            <!--begin::Title-->
                            <div class="fs-5 fs-lg-3 fw-bold text-dark">Tăng tương tác</div>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Description-->
                        <div class="fw-semibold fs-5 fs-lg-6 text-muted">Like, sub Facebook giúp tăng tương tác giữa trang Facebook của bạn với người dùng. Khi có nhiều like, sub, người dùng sẽ có xu hướng tương tác với trang Facebook của bạn nhiều hơn, chẳng hạn như bình luận, chia sẻ,... Điều này giúp tăng độ uy tín và thu hút thêm nhiều khách hàng tiềm năng.</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Story-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::How It Works Section-->
    <!--begin::Statistics Section-->
    <div class="mt-sm-n10">
        <!--begin::Curve top-->
        <div class="landing-curve landing-dark-color">
            <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
            </svg>
        </div>
        <!--end::Curve top-->
        <!--begin::Wrapper-->
        <div class="pb-15 pt-18 landing-dark-bg">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                <div class="text-center mt-15 mb-18" id="about_us" data-kt-scroll-offset="{default: 100, lg: 150}">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-white fw-bold mb-5">Hệ thống của chúng tôi</h3>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="fs-5 text-gray-700 fw-bold">Với hàng chục máy chủ, phục vụ hàng triệu khách hàng trên toàn cầu</div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Statistics-->
                <div class="d-flex flex-center">
                    <!--begin::Items-->
                    <div class="d-flex flex-wrap flex-center justify-content-lg-between mb-15 mx-auto w-xl-900px">
                        <!--begin::Item-->
                        <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')">
                            <!--begin::Symbol-->
                            <i class="ki-outline ki-element-11 fs-2tx text-white mb-3"></i>
                            <!--end::Symbol-->
                            <!--begin::Info-->
                            <div class="mb-0">
                                <!--begin::Value-->
                                <div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
                                    <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="24" data-kt-countup-suffix="+">0</div>
                                </div>
                                <!--end::Value-->
                                <!--begin::Label-->
                                <span class="text-gray-600 fw-semibold fs-5 lh-0">Máy chủ</span>
                                <!--end::Label-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')">
                            <!--begin::Symbol-->
                            <i class="ki-outline ki-chart-pie-4 fs-2tx text-white mb-3"></i>
                            <!--end::Symbol-->
                            <!--begin::Info-->
                            <div class="mb-0">
                                <!--begin::Value-->
                                <div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
                                    <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="8" data-kt-countup-suffix="M+">0</div>
                                </div>
                                <!--end::Value-->
                                <!--begin::Label-->
                                <span class="text-gray-600 fw-semibold fs-5 lh-0">Khách hàng</span>
                                <!--end::Label-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')">
                            <!--begin::Symbol-->
                            <i class="ki-outline ki-basket fs-2tx text-white mb-3"></i>
                            <!--end::Symbol-->
                            <!--begin::Info-->
                            <div class="mb-0">
                                <!--begin::Value-->
                                <div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
                                    <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="17" data-kt-countup-suffix="K+">0</div>
                                </div>
                                <!--end::Value-->
                                <!--begin::Label-->
                                <span class="text-gray-600 fw-semibold fs-5 lh-0">Đơn hàng/ngày</span>
                                <!--end::Label-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Statistics-->
                <!--begin::Testimonial-->
                <div class="fs-2 fw-semibold text-muted text-center mb-3">
                    <span class="fs-1 lh-1 text-gray-700">“</span>Chúng tôi cam kết mang đến cho bạn trải nghiệm tốt nhất.
                    <span class="fs-1 lh-1 text-gray-700">“</span>
                </div>
                <!--end::Testimonial-->
                <!--begin::Author-->
                <div class="fs-2 fw-semibold text-muted text-center">
                    <a href="https://www.facebook.com/tadinhtrong91" class="link-primary fs-4 fw-bold">Tạ Đình Trọng,</a>
                    <span class="fs-4 fw-bold text-gray-600">Founder and CEO</span>
                </div>
                <!--end::Author-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Curve bottom-->
        <div class="landing-curve landing-dark-color">
            <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
            </svg>
        </div>
        <!--end::Curve bottom-->
    </div>
    <!--end::Statistics Section-->
    <!--begin::Pricing Section-->
    <div  id="customer" class="mt-sm-n20">
        <!--begin::Curve bottom-->
        <div class="landing-curve landing-dark-color">
            <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
            </svg>
        </div>
        <!--end::Curve bottom-->
    </div>
    <!--end::Pricing Section-->
    <!--begin::Testimonials Section-->
    <div class="mt-20 mb-n20 position-relative z-index-2">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Heading-->
            <div class="text-center mb-17">
                <!--begin::Title-->
                <h3 class="fs-2hx text-dark mb-5" id="clients" data-kt-scroll-offset="{default: 125, lg: 150}">Khách hàng nói gì về chúng tôi</h3>
                <!--end::Title-->
                <!--begin::Description-->
                <div class="fs-5 text-muted fw-bold">Phản hồi của khàng triệu khách hàng trên thế giới</div>
                <!--end::Description-->
            </div>
            <!--end::Heading-->
            <!--begin::Row-->
            <div class="row g-lg-10 mb-10 mb-lg-20">
                <!--begin::Col-->
                <div class="col-lg-4">
                    <!--begin::Testimonial-->
                    <div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                        <!--begin::Wrapper-->
                        <div class="mb-7">
                            <!--begin::Rating-->
                            <div class="rating mb-6">
                                <div class="rating-label me-2 checked">
                                    <i class="ki-outline ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-outline ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-outline ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-outline ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-outline ki-star fs-5"></i>
                                </div>
                            </div>
                            <!--end::Rating-->
                            <!--begin::Title-->
                            <div class="fs-2 fw-bold text-dark mb-3">This is by far the cleanest template
                                <br />and the most well structured</div>
                            <!--end::Title-->
                            <!--begin::Feedback-->
                            <div class="text-gray-500 fw-semibold fs-4">The most well thought out design theme I have ever used. The codes are up to tandard. The css styles are very clean. In fact the cleanest and the most up to standard I have ever seen.</div>
                            <!--end::Feedback-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Author-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-circle symbol-50px me-5">
                                <img src="assets/media/avatars/300-1.jpg" class="" alt="" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <div class="flex-grow-1">
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Paul Miles</a>
                                <span class="text-muted d-block fw-bold">Development Lead</span>
                            </div>
                            <!--end::Name-->
                        </div>
                        <!--end::Author-->
                    </div>
                    <!--end::Testimonial-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-lg-4">
                    <!--begin::Testimonial-->
                    <div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                        <!--begin::Wrapper-->
                        <div class="mb-7">
                            <!--begin::Rating-->
                            <div class="rating mb-6">
                                <div class="rating-label me-2 checked">
                                    <i class="ki-outline ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-outline ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-outline ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-outline ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-outline ki-star fs-5"></i>
                                </div>
                            </div>
                            <!--end::Rating-->
                            <!--begin::Title-->
                            <div class="fs-2 fw-bold text-dark mb-3">This is by far the cleanest template
                                <br />and the most well structured</div>
                            <!--end::Title-->
                            <!--begin::Feedback-->
                            <div class="text-gray-500 fw-semibold fs-4">The most well thought out design theme I have ever used. The codes are up to tandard. The css styles are very clean. In fact the cleanest and the most up to standard I have ever seen.</div>
                            <!--end::Feedback-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Author-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-circle symbol-50px me-5">
                                <img src="assets/media/avatars/300-2.jpg" class="" alt="" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <div class="flex-grow-1">
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Janya Clebert</a>
                                <span class="text-muted d-block fw-bold">Development Lead</span>
                            </div>
                            <!--end::Name-->
                        </div>
                        <!--end::Author-->
                    </div>
                    <!--end::Testimonial-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-lg-4">
                    <!--begin::Testimonial-->
                    <div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                        <!--begin::Wrapper-->
                        <div class="mb-7">
                            <!--begin::Rating-->
                            <div class="rating mb-6">
                                <div class="rating-label me-2 checked">
                                    <i class="ki-outline ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-outline ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-outline ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-outline ki-star fs-5"></i>
                                </div>
                                <div class="rating-label me-2 checked">
                                    <i class="ki-outline ki-star fs-5"></i>
                                </div>
                            </div>
                            <!--end::Rating-->
                            <!--begin::Title-->
                            <div class="fs-2 fw-bold text-dark mb-3">This is by far the cleanest template
                                <br />and the most well structured</div>
                            <!--end::Title-->
                            <!--begin::Feedback-->
                            <div class="text-gray-500 fw-semibold fs-4">The most well thought out design theme I have ever used. The codes are up to tandard. The css styles are very clean. In fact the cleanest and the most up to standard I have ever seen.</div>
                            <!--end::Feedback-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Author-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-circle symbol-50px me-5">
                                <img src="assets/media/avatars/300-16.jpg" class="" alt="" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <div class="flex-grow-1">
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Steave Brown</a>
                                <span class="text-muted d-block fw-bold">Development Lead</span>
                            </div>
                            <!--end::Name-->
                        </div>
                        <!--end::Author-->
                    </div>
                    <!--end::Testimonial-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Highlight-->
            <div class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-8 p-lg-12 mb-n5 mb-lg-n13" style="background: linear-gradient(90deg, #20AA3E 0%, #03A588 100%);">
                <!--begin::Content-->
                <div class="my-2 me-5">
                    <!--begin::Title-->
                    <div class="fs-1 fs-lg-2qx fw-bold text-white mb-2">Start With Metronic Today,
                        <span class="fw-normal">Sử dụng dịch vụ ngay!</span></div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="fs-6 fs-lg-5 text-white fw-semibold opacity-75">Với hàng triệu khách hàng tin tưởng sử dụng</div>
                    <!--end::Description-->
                </div>
                <!--end::Content-->
                <!--begin::Link-->
                <a href="{{ route('dashboard') }}" class="btn btn-lg btn-outline border-2 btn-outline-white flex-shrink-0 my-2">Sử dụng ngay</a>
                <!--end::Link-->
            </div>
            <!--end::Highlight-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Testimonials Section-->
    <!--begin::Footer Section-->
    <div class="mb-0">
        <!--begin::Curve top-->
        <div class="landing-curve landing-dark-color">
            <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
            </svg>
        </div>
        <!--end::Curve top-->
        <!--begin::Wrapper-->
        <div class="landing-dark-bg pt-20">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Row-->
                <div class="row py-10 py-lg-20">
                    <!--begin::Col-->
                    <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                        <!--begin::Block-->
                        <div class="rounded landing-dark-border p-9 mb-10">
                            <!--begin::Title-->
                            <h2 class="text-white">Bạn cần hỗ trợ?</h2>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <span class="fw-normal fs-4 text-gray-700">Liên hệ với đội ngũ hỗ trợ
									<a href="https://www.facebook.com/tadinhtrong91" class="text-white opacity-50 text-hover-primary">Fb: Tạ Đình Trọng</a></span>
                            <!--end::Text-->
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="rounded landing-dark-border p-9">
                            <!--begin::Title-->
                            <h2 class="text-white">Các dịch vụ đang được cung cấp.</h2>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <span class="fw-normal fs-4 text-gray-700">Xem các dịch vụ đang được cung cấp
									<a href="{{ route('dashboard') }}" class="text-white opacity-50 text-hover-primary">Xem ngay</a></span>
                            <!--end::Text-->
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-6 ps-lg-16">
                        <!--begin::Navs-->
                        <div class="d-flex justify-content-center">
                            <!--begin::Links-->
                            <div class="d-flex fw-semibold flex-column me-20">
                                <!--begin::Subtitle-->
                                <h4 class="fw-bold text-gray-400 mb-6">More for Metronic</h4>
                                <!--end::Subtitle-->
                                <!--begin::Link-->
                                <a href="https://keenthemes.com/faqs" class="text-white opacity-50 text-hover-primary fs-5 mb-6">FAQ</a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                <a href="https://preview.keenthemes.com/html/metronic/docs" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Documentaions</a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                <a href="https://www.youtube.com/c/KeenThemesTuts/videos" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Video Tuts</a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Changelog</a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                <a href="https://devs.keenthemes.com/" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Support Forum</a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                <a href="https://keenthemes.com/blog" class="text-white opacity-50 text-hover-primary fs-5">Blog</a>
                                <!--end::Link-->
                            </div>
                            <!--end::Links-->
                            <!--begin::Links-->
                            <div class="d-flex fw-semibold flex-column ms-lg-20">
                                <!--begin::Subtitle-->
                                <h4 class="fw-bold text-gray-400 mb-6">Stay Connected</h4>
                                <!--end::Subtitle-->
                                <!--begin::Link-->
                                <a href="https://www.facebook.com/keenthemes" class="mb-6">
                                    <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt="" />
                                    <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
                                </a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                <a href="https://github.com/KeenthemesHub" class="mb-6">
                                    <img src="assets/media/svg/brand-logos/github.svg" class="h-20px me-2" alt="" />
                                    <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</span>
                                </a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                <a href="https://twitter.com/keenthemes" class="mb-6">
                                    <img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt="" />
                                    <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
                                </a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                <a href="https://dribbble.com/keenthemes" class="mb-6">
                                    <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px me-2" alt="" />
                                    <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Dribbble</span>
                                </a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                <a href="https://www.instagram.com/keenthemes" class="mb-6">
                                    <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2" alt="" />
                                    <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
                                </a>
                                <!--end::Link-->
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Navs-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
            <!--begin::Separator-->
            <div class="landing-dark-separator"></div>
            <!--end::Separator-->
            <!--begin::Container-->
            <div class="container">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                    <!--begin::Copyright-->
                    <div class="d-flex align-items-center order-2 order-md-1">
                        <!--begin::Logo-->
                        <a href="/">
                            <img alt="Logo" src="{{ asset('assets/media/logos/logo.png') }}" class="h-15px h-md-20px" />
                        </a>
                        <!--end::Logo image-->
                        <!--begin::Logo image-->
                        <span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1" href="/">&copy; {{ date('Y') }} Sub like siêu tốc.</span>
                        <!--end::Logo image-->
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Menu-->
                    <ul class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
                        <li class="menu-item">
                            <a href="/" target="_blank" class="menu-link px-2">About</a>
                        </li>
                        <li class="menu-item mx-5">
                            <a href="/" target="_blank" class="menu-link px-2">Support</a>
                        </li>
                        <li class="menu-item">
                            <a href="" target="_blank" class="menu-link px-2">Purchase</a>
                        </li>
                    </ul>
                    <!--end::Menu-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Footer Section-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-outline ki-arrow-up"></i>
    </div>
    <!--end::Scrolltop-->
</div>