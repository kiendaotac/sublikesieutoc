<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar pt-6 pb-2">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">Nạp tiền tài khoản</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                        <li class="breadcrumb-item text-muted">
                            <a href="/" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('payment') }}" class="text-muted text-hover-primary">Nạp tiền tài khoản</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div id="kt_billing_payment_tab_content" class="card-body tab-content">
                <div id="kt_billing_creditcard" class="tab-pane fade show active" role="tabpanel">
                    <div class="row gx-9 gy-6 text-center">
                        @foreach($banks ?? [] as $bank)
                            <div class="col-3"></div>
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
                            <div class="col-3"></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
