<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar pt-6 pb-2">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
            <!--begin::Toolbar wrapper-->
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">Trang cá nhân</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="/" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('profile') }}" class="text-muted text-hover-primary">Trang cá nhân</a>
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar wrapper-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Navbar-->
            <div class="card mb-5 mb-xl-10">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap flex-sm-nowrap">
                        <!--begin: Pic-->
                        <div class="me-7 mb-4">
                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                <img src="{{ \Filament\Facades\Filament::getUserAvatarUrl($user) }}" alt="image" />
                                <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                            </div>
                        </div>
                        <!--end::Pic-->
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                            <!--begin::Title-->
                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <!--begin::User-->
                                <div class="d-flex flex-column">
                                    <!--begin::Name-->
                                    <div class="d-flex align-items-center mb-2">
                                        <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{ $user->name }}</a>
                                        <a href="#">
                                            <i class="ki-outline ki-verify fs-1 text-primary"></i>
                                        </a>
                                    </div>
                                    <!--end::Name-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                        <a href="tel:{{ $user->phone }}" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                            <i class="ki-outline ki-phone fs-4 me-1"></i>{{ $user->phone }}</a>
                                        <a href="mailto:{{ $user->email }}" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                            <i class="ki-outline ki-sms fs-4 me-1"></i>{{ $user->email }}</a>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Title-->
                            <!--begin::Stats-->
                            <div class="d-flex flex-wrap flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column flex-grow-1 pe-8">
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap">
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-outline ki-duotone ki-dollar fs-3 text-success me-2"></i>
                                                <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="{{ $user->balance }}" data-kt-countup-suffix="đ">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-400">Số dư</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-outline ki-duotone ki-basket-ok  fs-3 text-success me-2"></i>
                                                <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="{{ $user->orders->count() }}" data-kt-countup-suffix=" đơn">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-400">Số đơn hàng</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-outline ki-duotone ki-ranking fs-3 text-success me-2"></i>
                                                <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="{{ $user->balanceHistories->where('type', 'DEPOSIT')->sum('amount') }}" data-kt-countup-suffix="đ">0</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-400">Tổng số đã nạp</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Navs-->
                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5 active" data-bs-toggle="tab" href="#tab-pane-payment-method">Phương thức thanh toán</a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#tab-panel-order">Danh sách đơn hàng</a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#tab-panel-deposit">Lịch sử nạp tiền</a>
                        </li>
{{--                        <li class="nav-item mt-2">--}}
{{--                            <a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#tab-pane-activity">Lịch sử hoạt động</a>--}}
{{--                        </li>--}}
                    </ul>
                    <!--begin::Navs-->
                </div>
            </div>
            <!--end::Navbar-->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-pane-payment-method" role="tabpanel">
                    <!--begin::Payment methods-->
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header card-header-stretch pb-0">
                            <!--begin::Title-->
                            <div class="card-title">
                                <h3 class="m-0">Phương thức thanh toán</h3>
                            </div>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar m-0">
                                <!--begin::Tab nav-->
                                <ul class="nav nav-stretch nav-line-tabs border-transparent" role="tablist">
                                    <!--begin::Tab item-->
                                    <li class="nav-item" role="presentation">
                                        <a id="kt_billing_creditcard_tab" class="nav-link fs-5 fw-bold me-5 active" data-bs-toggle="tab" role="tab" href="#kt_billing_creditcard">Chuyển khoản ATM trong nước</a>
                                    </li>
                                    <!--end::Tab item-->
                                    <!--begin::Tab item-->
                                    {{--                                    <li class="nav-item" role="presentation">--}}
                                    {{--                                        <a id="kt_billing_paypal_tab" class="nav-link fs-5 fw-bold" data-bs-toggle="tab" role="tab" href="#kt_billing_paypal">Paypal</a>--}}
                                    {{--                                    </li>--}}
                                    <!--end::Tab item-->
                                </ul>
                                <!--end::Tab nav-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Tab content-->
                        <div id="kt_billing_payment_tab_content" class="card-body tab-content">
                            <!--begin::Tab panel-->
                            <div id="kt_billing_creditcard" class="tab-pane fade show active" role="tabpanel">
                                <!--begin::Title-->
                                <h3 class="mb-5">Danh sách thẻ</h3>
                                <!--end::Title-->
                                <!--begin::Row-->
                                <div class="row gx-9 gy-6">
                                    @foreach($banks ?? [] as $bank)
                                        <!--begin::Col-->
                                        <div class="col-xl-6" data-kt-billing-element="card">
                                            <!--begin::Card-->
                                            <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                                                <!--begin::Info-->
                                                <div class="d-flex flex-column py-2">
                                                    <img src="{{ $bank->bank_logo }}" width="180" alt="Bank logo" class="me-4" />
                                                    <div class="d-flex align-items-center fs-4 fw-bold mt-5">
                                                        <span>
                                                            {{ $bank->card_name }}
                                                        </span>
                                                        <button class="btn btn-icon btn-sm" data-clipboard-target="#kt_clipboard_4">
                                                            <i class="ki-duotone ki-copy fs-2 text-muted"></i>
                                                        </button>
                                                    </div>
                                                    <div class="d-flex align-items-center fs-4 fw-bold mt-5">
                                                        <span>
                                                            {{ $bank->card_number }}
                                                        </span>
                                                        <button class="btn btn-icon btn-sm" data-clipboard-target="#kt_clipboard_4">
                                                            <i class="ki-duotone ki-copy fs-2 text-muted"></i>
                                                        </button>
                                                    </div>
                                                    <div class="d-flex align-items-center mt-5 fs-6 fw-semibold text-gray-400">
                                                        <span>
                                                            {{ $bank->command }} {{ $user->username }}
                                                        </span>
                                                        <button class="btn btn-icon btn-sm" data-clipboard-target="#kt_clipboard_4">
                                                            <i class="ki-duotone ki-copy fs-2 text-muted"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Actions-->
                                                <div class="d-flex align-items-center py-2">
                                                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                                        <img src="https://api.vietqr.io/image/{{ $bank->bin }}-{{ $bank->card_number }}-{{ $bank->template }}.jpg?accountName={{ urlencode(Str::ascii(Str::upper($bank->card_name))) }}&amount={{ $bank->amount }}&addInfo={{ urlencode(Str::ascii(Str::upper($bank->command . ' ' . $user->username))) }}" alt="image">
                                                    </div>
                                                </div>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                    @endforeach
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Tab panel-->
                            <!--begin::Tab panel-->
                            <div id="kt_billing_paypal" class="tab-pane fade" role="tabpanel" aria-labelledby="kt_billing_paypal_tab">
                                <!--begin::Title-->
                                <h3 class="mb-5">My Paypal</h3>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-gray-600 fs-6 fw-semibold mb-5">To use PayPal as your payment method, you will need to make pre-payments each month before your bill is due.</div>
                                <!--end::Description-->
                                <!--begin::Form-->
                                <form class="form">
                                    <!--begin::Input group-->
                                    <div class="mb-7 mw-350px">
                                        <select name="timezone" data-control="select2" data-placeholder="Select an option" data-hide-search="true" class="form-select form-select-solid form-select-lg fw-semibold fs-6 text-gray-700">
                                            <option>Select an option</option>
                                            <option value="25">US $25.00</option>
                                            <option value="50">US $50.00</option>
                                            <option value="100">US $100.00</option>
                                            <option value="125">US $125.00</option>
                                            <option value="150">US $150.00</option>
                                        </select>
                                    </div>
                                    <!--end::Input group-->
                                    <button type="submit" class="btn btn-primary">Pay with Paypal</button>
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Tab panel-->
                        </div>
                        <!--end::Tab content-->
                    </div>
                    <!--end::Payment methods-->
                </div>
                <div class="tab-pane" id="tab-pane-activity" role="tabpanel">
                    <!--begin::Timeline-->
                    <div class="card">
                        <!--begin::Card head-->
                        <div class="card-header card-header-stretch">
                            <!--begin::Title-->
                            <div class="card-title d-flex align-items-center">
                                <i class="ki-outline ki-calendar-8 fs-1 text-primary me-3 lh-0"></i>
                                <h3 class="fw-bold m-0 text-gray-800">Jan 23, 2023</h3>
                            </div>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar m-0">
                                <!--begin::Tab nav-->
                                <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0 fw-bold" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a id="kt_activity_today_tab" class="nav-link justify-content-center text-active-gray-800 active" data-bs-toggle="tab" role="tab" href="#kt_activity_today">Today</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a id="kt_activity_week_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_week">Week</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a id="kt_activity_month_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_month">Month</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a id="kt_activity_year_tab" class="nav-link justify-content-center text-active-gray-800 text-hover-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_year">2023</a>
                                    </li>
                                </ul>
                                <!--end::Tab nav-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Card head-->
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Tab Content-->
                            <div class="tab-content">
                                <!--begin::Tab panel-->
                                <div id="kt_activity_today" class="card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="kt_activity_today_tab">
                                    <!--begin::Timeline-->
                                    <div class="timeline">
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-message-text-2 fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                                            <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                                <!--begin::Timeline details-->
                                                <div class="overflow-auto pb-5">
                                                    <!--begin::Record-->
                                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                                        <!--begin::Title-->
                                                        <a href="../../demo39/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
                                                        <!--end::Title-->
                                                        <!--begin::Label-->
                                                        <div class="min-w-175px pe-2">
                                                            <span class="badge badge-light text-muted">Application Design</span>
                                                        </div>
                                                        <!--end::Label-->
                                                        <!--begin::Users-->
                                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                                            <!--begin::User-->
                                                            <div class="symbol symbol-circle symbol-25px">
                                                                <img src="assets/media/avatars/300-2.jpg" alt="img" />
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="symbol symbol-circle symbol-25px">
                                                                <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="symbol symbol-circle symbol-25px">
                                                                <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
                                                            </div>
                                                            <!--end::User-->
                                                        </div>
                                                        <!--end::Users-->
                                                        <!--begin::Progress-->
                                                        <div class="min-w-125px pe-2">
                                                            <span class="badge badge-light-primary">In Progress</span>
                                                        </div>
                                                        <!--end::Progress-->
                                                        <!--begin::Action-->
                                                        <a href="../../demo39/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                                        <!--end::Action-->
                                                    </div>
                                                    <!--end::Record-->
                                                    <!--begin::Record-->
                                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                                        <!--begin::Title-->
                                                        <a href="../../demo39/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
                                                        <!--end::Title-->
                                                        <!--begin::Label-->
                                                        <div class="min-w-175px">
                                                            <span class="badge badge-light text-muted">CRM System Development</span>
                                                        </div>
                                                        <!--end::Label-->
                                                        <!--begin::Users-->
                                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                                            <!--begin::User-->
                                                            <div class="symbol symbol-circle symbol-25px">
                                                                <img src="assets/media/avatars/300-20.jpg" alt="img" />
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="symbol symbol-circle symbol-25px">
                                                                <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
                                                            </div>
                                                            <!--end::User-->
                                                        </div>
                                                        <!--end::Users-->
                                                        <!--begin::Progress-->
                                                        <div class="min-w-125px">
                                                            <span class="badge badge-light-success">Completed</span>
                                                        </div>
                                                        <!--end::Progress-->
                                                        <!--begin::Action-->
                                                        <a href="../../demo39/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                                        <!--end::Action-->
                                                    </div>
                                                    <!--end::Record-->
                                                </div>
                                                <!--end::Timeline details-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-flag fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n2">
                                                <!--begin::Timeline heading-->
                                                <div class="overflow-auto pe-3">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                                            <img src="assets/media/avatars/300-1.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-disconnect fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="mb-5 pe-3">
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                                            <img src="assets/media/avatars/300-23.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                                <!--begin::Timeline details-->
                                                <div class="overflow-auto pb-5">
                                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                                        <!--begin::Item-->
                                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                            <!--begin::Icon-->
                                                            <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <div class="ms-1 fw-semibold">
                                                                <!--begin::Desc-->
                                                                <a href="../../demo39/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                                                <!--end::Desc-->
                                                                <!--begin::Number-->
                                                                <div class="text-gray-400">1.9mb</div>
                                                                <!--end::Number-->
                                                            </div>
                                                            <!--begin::Info-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                            <!--begin::Icon-->
                                                            <img alt="../../demo39/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <div class="ms-1 fw-semibold">
                                                                <!--begin::Desc-->
                                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                                                <!--end::Desc-->
                                                                <!--begin::Number-->
                                                                <div class="text-gray-400">18kb</div>
                                                                <!--end::Number-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex flex-aligns-center">
                                                            <!--begin::Icon-->
                                                            <img alt="../../demo39/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <div class="ms-1 fw-semibold">
                                                                <!--begin::Desc-->
                                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                                <!--end::Desc-->
                                                                <!--begin::Number-->
                                                                <div class="text-gray-400">20mb</div>
                                                                <!--end::Number-->
                                                            </div>
                                                            <!--end::Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                </div>
                                                <!--end::Timeline details-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-abstract-26 fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">Task
                                                        <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                                                        <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                                            <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                                            <img src="assets/media/avatars/300-2.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                                <!--begin::Timeline details-->
                                                <div class="overflow-auto pb-5">
                                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                                        <!--begin::Item-->
                                                        <div class="overlay me-10">
                                                            <!--begin::Image-->
                                                            <div class="overlay-wrapper">
                                                                <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Link-->
                                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                            </div>
                                                            <!--end::Link-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="overlay me-10">
                                                            <!--begin::Image-->
                                                            <div class="overlay-wrapper">
                                                                <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Link-->
                                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                            </div>
                                                            <!--end::Link-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="overlay">
                                                            <!--begin::Image-->
                                                            <div class="overlay-wrapper">
                                                                <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Link-->
                                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                            </div>
                                                            <!--end::Link-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                </div>
                                                <!--end::Timeline details-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-sms fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">New case
                                                        <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="overflow-auto pb-5">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center mt-1 fs-6">
                                                            <!--begin::Info-->
                                                            <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                                            <!--end::Info-->
                                                            <!--begin::User-->
                                                            <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                                            <!--end::User-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                                            <img src="assets/media/avatars/300-4.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                                <!--begin::Timeline details-->
                                                <div class="overflow-auto pb-5">
                                                    <!--begin::Notice-->
                                                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                                        <!--begin::Icon-->
                                                        <i class="ki-outline ki-devices-2 fs-2tx text-primary me-4"></i>
                                                        <!--end::Icon-->
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                                            <!--begin::Content-->
                                                            <div class="mb-3 mb-md-0 fw-semibold">
                                                                <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
                                                                <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
                                                            </div>
                                                            <!--end::Content-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Notice-->
                                                </div>
                                                <!--end::Timeline details-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-basket fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">New order
                                                        <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Tab panel-->
                                <!--begin::Tab panel-->
                                <div id="kt_activity_week" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_week_tab">
                                    <!--begin::Timeline-->
                                    <div class="timeline">
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-flag fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n2">
                                                <!--begin::Timeline heading-->
                                                <div class="overflow-auto pe-3">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                                            <img src="assets/media/avatars/300-1.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-disconnect fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="mb-5 pe-3">
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                                            <img src="assets/media/avatars/300-23.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                                <!--begin::Timeline details-->
                                                <div class="overflow-auto pb-5">
                                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                                        <!--begin::Item-->
                                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                            <!--begin::Icon-->
                                                            <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <div class="ms-1 fw-semibold">
                                                                <!--begin::Desc-->
                                                                <a href="../../demo39/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                                                <!--end::Desc-->
                                                                <!--begin::Number-->
                                                                <div class="text-gray-400">1.9mb</div>
                                                                <!--end::Number-->
                                                            </div>
                                                            <!--begin::Info-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                            <!--begin::Icon-->
                                                            <img alt="../../demo39/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <div class="ms-1 fw-semibold">
                                                                <!--begin::Desc-->
                                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                                                <!--end::Desc-->
                                                                <!--begin::Number-->
                                                                <div class="text-gray-400">18kb</div>
                                                                <!--end::Number-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex flex-aligns-center">
                                                            <!--begin::Icon-->
                                                            <img alt="../../demo39/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <div class="ms-1 fw-semibold">
                                                                <!--begin::Desc-->
                                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                                <!--end::Desc-->
                                                                <!--begin::Number-->
                                                                <div class="text-gray-400">20mb</div>
                                                                <!--end::Number-->
                                                            </div>
                                                            <!--end::Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                </div>
                                                <!--end::Timeline details-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-abstract-26 fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">Task
                                                        <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                                                        <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                                            <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                                            <img src="assets/media/avatars/300-2.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                                <!--begin::Timeline details-->
                                                <div class="overflow-auto pb-5">
                                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                                        <!--begin::Item-->
                                                        <div class="overlay me-10">
                                                            <!--begin::Image-->
                                                            <div class="overlay-wrapper">
                                                                <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Link-->
                                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                            </div>
                                                            <!--end::Link-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="overlay me-10">
                                                            <!--begin::Image-->
                                                            <div class="overlay-wrapper">
                                                                <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Link-->
                                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                            </div>
                                                            <!--end::Link-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="overlay">
                                                            <!--begin::Image-->
                                                            <div class="overlay-wrapper">
                                                                <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Link-->
                                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                            </div>
                                                            <!--end::Link-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                </div>
                                                <!--end::Timeline details-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-sms fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">New case
                                                        <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="overflow-auto pb-5">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center mt-1 fs-6">
                                                            <!--begin::Info-->
                                                            <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                                            <!--end::Info-->
                                                            <!--begin::User-->
                                                            <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                                            <!--end::User-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Tab panel-->
                                <!--begin::Tab panel-->
                                <div id="kt_activity_month" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_month_tab">
                                    <!--begin::Timeline-->
                                    <div class="timeline">
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                                            <img src="assets/media/avatars/300-2.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                                <!--begin::Timeline details-->
                                                <div class="overflow-auto pb-5">
                                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                                        <!--begin::Item-->
                                                        <div class="overlay me-10">
                                                            <!--begin::Image-->
                                                            <div class="overlay-wrapper">
                                                                <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Link-->
                                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                            </div>
                                                            <!--end::Link-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="overlay me-10">
                                                            <!--begin::Image-->
                                                            <div class="overlay-wrapper">
                                                                <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Link-->
                                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                            </div>
                                                            <!--end::Link-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="overlay">
                                                            <!--begin::Image-->
                                                            <div class="overlay-wrapper">
                                                                <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Link-->
                                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                            </div>
                                                            <!--end::Link-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                </div>
                                                <!--end::Timeline details-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-sms fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">New case
                                                        <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="overflow-auto pb-5">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center mt-1 fs-6">
                                                            <!--begin::Info-->
                                                            <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                                            <!--end::Info-->
                                                            <!--begin::User-->
                                                            <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                                            <!--end::User-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-basket fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">New order
                                                        <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-flag fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n2">
                                                <!--begin::Timeline heading-->
                                                <div class="overflow-auto pe-3">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                                            <img src="assets/media/avatars/300-1.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-disconnect fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="mb-5 pe-3">
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                                            <img src="assets/media/avatars/300-23.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                                <!--begin::Timeline details-->
                                                <div class="overflow-auto pb-5">
                                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                                        <!--begin::Item-->
                                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                            <!--begin::Icon-->
                                                            <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <div class="ms-1 fw-semibold">
                                                                <!--begin::Desc-->
                                                                <a href="../../demo39/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                                                <!--end::Desc-->
                                                                <!--begin::Number-->
                                                                <div class="text-gray-400">1.9mb</div>
                                                                <!--end::Number-->
                                                            </div>
                                                            <!--begin::Info-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                            <!--begin::Icon-->
                                                            <img alt="../../demo39/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <div class="ms-1 fw-semibold">
                                                                <!--begin::Desc-->
                                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                                                <!--end::Desc-->
                                                                <!--begin::Number-->
                                                                <div class="text-gray-400">18kb</div>
                                                                <!--end::Number-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex flex-aligns-center">
                                                            <!--begin::Icon-->
                                                            <img alt="../../demo39/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <div class="ms-1 fw-semibold">
                                                                <!--begin::Desc-->
                                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                                <!--end::Desc-->
                                                                <!--begin::Number-->
                                                                <div class="text-gray-400">20mb</div>
                                                                <!--end::Number-->
                                                            </div>
                                                            <!--end::Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                </div>
                                                <!--end::Timeline details-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-abstract-26 fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">Task
                                                        <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                                                        <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                                            <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Tab panel-->
                                <!--begin::Tab panel-->
                                <div id="kt_activity_year" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_year_tab">
                                    <!--begin::Timeline-->
                                    <div class="timeline">
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-disconnect fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="mb-5 pe-3">
                                                    <!--begin::Title-->
                                                    <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                                            <img src="assets/media/avatars/300-23.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                                <!--begin::Timeline details-->
                                                <div class="overflow-auto pb-5">
                                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                                        <!--begin::Item-->
                                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                            <!--begin::Icon-->
                                                            <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <div class="ms-1 fw-semibold">
                                                                <!--begin::Desc-->
                                                                <a href="../../demo39/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                                                <!--end::Desc-->
                                                                <!--begin::Number-->
                                                                <div class="text-gray-400">1.9mb</div>
                                                                <!--end::Number-->
                                                            </div>
                                                            <!--begin::Info-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                            <!--begin::Icon-->
                                                            <img alt="../../demo39/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <div class="ms-1 fw-semibold">
                                                                <!--begin::Desc-->
                                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                                                <!--end::Desc-->
                                                                <!--begin::Number-->
                                                                <div class="text-gray-400">18kb</div>
                                                                <!--end::Number-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex flex-aligns-center">
                                                            <!--begin::Icon-->
                                                            <img alt="../../demo39/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <div class="ms-1 fw-semibold">
                                                                <!--begin::Desc-->
                                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                                <!--end::Desc-->
                                                                <!--begin::Number-->
                                                                <div class="text-gray-400">20mb</div>
                                                                <!--end::Number-->
                                                            </div>
                                                            <!--end::Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                </div>
                                                <!--end::Timeline details-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-abstract-26 fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">Task
                                                        <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                                                        <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                                            <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                                            <img src="assets/media/avatars/300-2.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                                <!--begin::Timeline details-->
                                                <div class="overflow-auto pb-5">
                                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                                        <!--begin::Item-->
                                                        <div class="overlay me-10">
                                                            <!--begin::Image-->
                                                            <div class="overlay-wrapper">
                                                                <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Link-->
                                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                            </div>
                                                            <!--end::Link-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="overlay me-10">
                                                            <!--begin::Image-->
                                                            <div class="overlay-wrapper">
                                                                <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Link-->
                                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                            </div>
                                                            <!--end::Link-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="overlay">
                                                            <!--begin::Image-->
                                                            <div class="overlay-wrapper">
                                                                <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Link-->
                                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                            </div>
                                                            <!--end::Link-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                </div>
                                                <!--end::Timeline details-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-sms fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">New case
                                                        <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="overflow-auto pb-5">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center mt-1 fs-6">
                                                            <!--begin::Info-->
                                                            <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                                            <!--end::Info-->
                                                            <!--begin::User-->
                                                            <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                                            <!--end::User-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="ki-outline ki-basket fs-2 text-gray-500"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">New order
                                                        <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Tab panel-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Timeline-->
                </div>
                <div class="tab-pane" id="tab-panel-order" role="tabpanel">
                    <livewire:profile.order />
                </div>
                <div class="tab-pane" id="tab-panel-deposit" role="tabpanel">
                    <livewire:profile.balance />
                </div>
            </div>
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->